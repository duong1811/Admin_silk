<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class transferController extends Controller
{
    //----------------------------------uploadVideoTransfer----------------------------------------
    function uploadVideoTransfer(Request $request){
        $userID = $request->userID;
        $videoID = $request->videoID;
        $originVideo = $request->originVideo;
        $size = $request->size;
        $duration = $request->duration;
        $quality = $request->quality;
        $format = $request->format;
        $sv = $request->sv;
        $folder = $request->nameFolder;
    }
    //--------------------------------uploadVideoWebupload-----------------------------------------
    function uploadVideoWebupload(Request $request){
        $userID = $request->userID;
        $videoID = $request->videoID;
        $originVideo = $request->originVideo;
        $size = $request->size;
        $duration = $request->duration;
        $quality = $request->quality;
        $format = $request->format;
        $sv = $request->sv;
        $folder = $request->nameFolder;
    }
    //=============================================================================================
}
