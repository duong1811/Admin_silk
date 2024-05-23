<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>play tiktok</title>
    <style>
    .container {
        width: 100vw;
        height: 100vh;
    }
    video {
        width: 100%;
        height: 100vh !important;
    }
      body {
        margin: 0;
      }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/plyr@3/dist/plyr.css">
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=es6,Array.prototype.includes,CustomEvent,Object.entries,Object.values,URL"></script>
    <script src="https://unpkg.com/plyr@3"></script>
</head>
<body>
    <div class="container">
	<video controls crossorigin playsinline poster="https://bitdash-a.akamaihd.net/content/sintel/poster.png"></video>
    </div>
    <!-- Plyr resources and browser polyfills are specified in the pen settings -->
    <!-- Hls.js 0.9.x and 0.10.x both have critical bugs affecting this demo. Using fixed git hash to when it was working (0.10.0 pre-release), until https://github.com/video-dev/hls.js/issues/1790 has been resolved -->
    <script src="https://cdn.rawgit.com/video-dev/hls.js/18bb552/dist/hls.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const source = 'https://ss458.suptrain.com/test1/a.m3u8';
            const video = document.querySelector('video');

            const defaultOptions = {};

            if (!Hls.isSupported()) {
                video.src = source;
                var player = new Plyr(video, defaultOptions);
            } else {
                // For more Hls.js options, see https://github.com/dailymotion/hls.js
                const hls = new Hls();
                hls.loadSource(source);

                // From the m3u8 playlist, hls parses the manifest and returns
                        // all available video qualities. This is important, in this approach,
                        // we will have one source on the Plyr player.
                       hls.on(Hls.Events.MANIFEST_PARSED, function (event, data) {

                         // Transform available levels into an array of integers (height values).
                        const availableQualities = hls.levels.map((l) => l.height)
                    availableQualities.unshift(0) //prepend 0 to quality array

                        // Add new qualities to option
                    defaultOptions.quality = {
                        default: 0, //Default - AUTO
                        options: availableQualities,
                        forced: true,        
                        onChange: (e) => updateQuality(e),
                    }
                    // Add Auto Label 
                    defaultOptions.i18n = {
                        qualityLabel: {
                            0: 'Auto',
                        },
                    }

                    hls.on(Hls.Events.LEVEL_SWITCHED, function (event, data) {
                      var span = document.querySelector(".plyr__menu__container [data-plyr='quality'][value='0'] span")
                      if (hls.autoLevelEnabled) {
                        span.innerHTML = `AUTO (${hls.levels[data.level].height}p)`
                      } else {
                        span.innerHTML = `AUTO`
                      }
                    })

                     // Initialize new Plyr player with quality options
                     var player = new Plyr(video, defaultOptions);
                 });	

            hls.attachMedia(video);
                window.hls = hls;		 
            }

            function updateQuality(newQuality) {
              if (newQuality === 0) {
                window.hls.currentLevel = -1; //Enable AUTO quality if option.value = 0
              } else {
                window.hls.levels.forEach((level, levelIndex) => {
                  if (level.height === newQuality) {
                    console.log("Found quality match with " + newQuality);
                    window.hls.currentLevel = levelIndex;
                  }
                });
              }
            }
        });
    </script>
</body>
</html>