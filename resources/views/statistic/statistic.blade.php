<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../assets/img/logo-stream2.png" />
  <title>Statistic</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link href="../assets/datatable/datatables.min.css" rel="stylesheet" />
  <!-- Popper -->
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <!-- Main Styling -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../assets/datatable/datatables.min.js"></script>
  <style>
    .material-icons {
      font-family: 'Material Icons';
      font-weight: normal;
      font-style: normal;
      font-size: 24px;
      line-height: 1;
      text-transform: none;
      display: inline-block;
      vertical-align: middle;
      white-space: nowrap;
      word-wrap: normal;
      direction: ltr;
      -webkit-font-feature-settings: 'liga';
      -webkit-font-smoothing: antialiased;
    }

    span a.paginate_button {
      background: #0f172a;
      margin: 0 5px;
      text-align: center;
      border-radius: 6px;
      padding: 5px 12px;
    }
    span a.paginate_button.current{
      background: rgb(16 185 129);
    }
    .dataTables_paginate .previous{
      margin-right: 15px;
    }
    .dataTables_paginate .next{
      margin-left: 15px;
    }
    #table-sto_length select,
    #table-encoder_length select,
    #table-download_length select {
      background-color: transparent;
      border: none;
      outline: none;
    }
  </style>
</head>

<body class="m-0 font-sans text-base antialiased font-normal leading-default text-slate-500 lg:min-h-screen"
  style="background-color: #1a2035">
  <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out rounded-xl"
    style="background-color: #1a2035">
    <div>
      @include('components/navbar')
      @include('components/sidebar')
    </div>
    

    <!-- cards -->
    <div class="w-full px-3 lg:px-6 pt-4 mx-auto" style="background-color: #1a2035">
      <div class="flex flex-wrap -mx-3 flex-col-reverse lg:flex-row">
        <div class="w-full max-w-full px-2 mt-0 text-white lg:flex-none">
          <div class="lg:mr-2 flex flex-col font-semibold">
            <div
              class="tabs tabs-lifted z-[1] -mb-[var(--tab-border)] justify-self-start items-start grid-cols-2 grid-rows-2 md:!flex">
              <button
                class="md:shadow-[0_-8px_15px_0px_rgb(15,23,42,1)] row-start-auto tab tab-video w-max !text-emerald-400 text-white font-bold h-auto text-md px-4 tab-active [--tab-bg:#202940] !border-b-0 md:!border-b-1 !rounded-b-lg md:!rounded-b-none before:!hidden md:before:!block"
                data-content="user">
                <span class="px-2 py-1">User</span>
              </button>
              <button
                class="row-start-auto	tab tab-video w-max text-white font-bold h-auto text-md px-4 [--tab-bg:#202940] !border-b-0 md:!border-b-1 !rounded-b-lg md:!rounded-b-none before:!hidden md:before:!block"
                data-content="streaming">
                <span class="px-2 py-1">Streaming</span>
              </button>
              <button
                class="row-start-auto	tab tab-video w-max text-white font-bold h-auto text-md px-4 [--tab-bg:#202940] !border-b-0 md:!border-b-1 !rounded-b-lg md:!rounded-b-none before:!hidden md:before:!block"
                data-content="view">
                <span class="px-2 py-1">View</span>
              </button>

            </div>
            <div class="mt-3 md:mt-0 rounded-b-box rounded-se-box relative  max-w-full w-full">
              <div
                class="border-base-300 rounded-b-box rounded-se-box gap-2 bg-[#202940] bg-top [border-width:var(--tab-border)] undefined">
                <div id="user" class="tab-content-video">
                  <div class="rounded-xl">
                    <div class="flex relative rounded-xl bg-[#202940]">
                        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-2/12 lg:flex-none">
                            <div class="relative flex flex-col min-w-0 break-wordsborder-0 border-solid bg-[#202940] border-black-125 rounded-2xl bg-clip-border">
                              <div class="p-4 pb-0 mb-0 rounded-t-4">
                                <div class="flex justify-between">
                                  <h6 class="mb-2 text-emerald-500 font-bold text-lg">User</h6>
                                </div>
                              </div>
                              <div class="">
                                <table class="items-center w-full mb-4 align-top border-collapse border-gray-200 overflow-hidden">
                                  <tbody>
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                     <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                        <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                      <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                     <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                     <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                         </div>
                        <div class="w-full max-w-full px-6 mt-0 mb-6 lg:mb-0 lg:w-2/12 lg:flex-none">
                            <div class="relative flex flex-col min-w-0 break-wordsborder-0 border-solid bg-[#202940] border-black-125 rounded-2xl bg-clip-border">
                              <div class="p-4 pb-0 mb-0 rounded-t-4">
                                <div class="flex justify-between">
                                  <h6 class="mb-2 text-emerald-500 font-bold text-lg">Vip User</h6>
                                </div>
                              </div>
                              <div class="">
                                <table class="items-center w-full mb-4 align-top border-collapse border-gray-200 overflow-hidden">
                                  <tbody>
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                     <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                        <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                      <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                     <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                     <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                         </div>
                        <!-- cards row 2 -->
                        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-8/12 lg:flex-none">
                          <div class="border-black/12.5 bg-[#202940] relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-clip-border">
                            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0">
                              <h6 class="text-emerald-500 font-bold">Statistics</h6>
                              <p class="mb-0 text-sm leading-normal dark:text-white dark:opacity-60">
                                <i class="fa fa-arrow-up text-emerald-500"></i>
                                <span class="font-semibold">4% more</span> in 2024
                              </p>
                            </div>
                            <div class="flex-auto p-4">
                              <div>
                                <canvas id="chart-line" height="350"></canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div id="streaming" class="tab-content-video">
                  <div class="rounded-xl">
                    <div class="relative rounded-xl bg-[#202940]">
                      <div class="px-2 pt-4 md:p-4">
                        <div class="mb-2">
                          <h5 class="text-emerald-400">
                            Encoder : 99
                          </h5>
                          <div class="flex justify-end items-center absolute w-full top-2 right-2 md:px-4 px-2">
                            <div class="hover:text-emerald-400 cursor-pointer" title="edit">
                              <a href="javascript:;"><i btn-edit class="material-icons opacity-1 text-3xl">add</i>
                                Add</a>
                            </div>
                          </div>
                        </div>
                        <div class="flex flex-col bg-clip-border rounded-xl text-gray-700 bg-transparent">
                          <div class="px-0 pt-0">
                            <table id="table-encoder" datatable data-page-size="10"
                              class="overflow-y-clip response w-full min-w-max text-white text-left border-b border-gray-100/80">
                              <thead>
                                <tr class="bg-slate-900 transition-colors text-md text-center">
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer text-center">
                                    ID
                                  </th>
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer">
                                    Domain
                                  </th>
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2">
                                    IP
                                  </th>
                                  <th class=" before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer">
                                    Dl
                                  </th>
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer">
                                    EC
                                  </th>
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer">
                                    TF
                                  </th>
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer">
                                    Copy
                                  </th>
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer">
                                    CPU
                                  </th>
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer">
                                    Space
                                  </th>
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer">
                                    Used Space
                                  </th>
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer">
                                    BW
                                  </th>
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer">
                                    Used BW
                                  </th>
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer">
                                    Max
                                  </th>
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer">
                                    In
                                  </th>
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer">
                                    Out
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="odd">
                                  <td class="sorting_1">1</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e01</a>
                                  </td>
                                  <td class="ip text-emerald-400">88.99.58.31</td>
                                  <td>0</td>
                                  <td>2</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>10.58</td>
                                  <td class="space">900</td>
                                  <td>392</td>
                                  <td class="BW">11.15</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0.03</td>
                                  <td>0.03</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">2</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e02</a>
                                  </td>
                                  <td class="ip text-emerald-400">195.201.172.182</td>
                                  <td>0</td>
                                  <td>2</td>
                                  <td>49</td>
                                  <td>0</td>
                                  <td>17.17</td>
                                  <td class="space">900</td>
                                  <td>254</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">3</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e03</a>
                                  </td>
                                  <td class="ip text-emerald-400">23.106.33.86</td>
                                  <td>0</td>
                                  <td>10</td>
                                  <td>2</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td class="space">3500</td>
                                  <td>1126.4</td>
                                  <td class="BW">0.56</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0.05</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">4</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e04</a>
                                  </td>
                                  <td class="ip text-emerald-400">85.10.207.126</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>49</td>
                                  <td>1</td>
                                  <td>12.26</td>
                                  <td class="space">2000</td>
                                  <td>1126.4</td>
                                  <td class="BW">1.19</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>2.81</td>
                                  <td>10.94</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">5</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e06</a>
                                  </td>
                                  <td class="ip text-emerald-400">23.106.58.183</td>
                                  <td>0</td>
                                  <td>10</td>
                                  <td>49</td>
                                  <td>0</td>
                                  <td>0.01</td>
                                  <td class="space">3500</td>
                                  <td>313</td>
                                  <td class="BW">0.58</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0.01</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">6</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e07</a>
                                  </td>
                                  <td class="ip text-emerald-400">23.106.58.182</td>
                                  <td>0</td>
                                  <td>10</td>
                                  <td>3</td>
                                  <td>0</td>
                                  <td>0.49</td>
                                  <td class="space">3500</td>
                                  <td>942</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0.01</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">7</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e08</a>
                                  </td>
                                  <td class="ip text-emerald-400">23.106.58.181</td>
                                  <td>0</td>
                                  <td>10</td>
                                  <td>3</td>
                                  <td>0</td>
                                  <td>0.05</td>
                                  <td class="space">3500</td>
                                  <td>479</td>
                                  <td class="BW">0.02</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0.02</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">8</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e09</a>
                                  </td>
                                  <td class="ip text-emerald-400">23.106.56.141</td>
                                  <td>0</td>
                                  <td>10</td>
                                  <td>47</td>
                                  <td>0</td>
                                  <td>0.22</td>
                                  <td class="space">3500</td>
                                  <td>1331.2</td>
                                  <td class="BW">0.08</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>41.89</td>
                                  <td>0.24</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">9</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e10</a>
                                  </td>
                                  <td class="ip text-emerald-400">23.106.56.142</td>
                                  <td>0</td>
                                  <td>10</td>
                                  <td>2</td>
                                  <td>0</td>
                                  <td>0.14</td>
                                  <td class="space">3500</td>
                                  <td>449</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>114.8</td>
                                  <td>0.39</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">10</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e11</a>
                                  </td>
                                  <td class="ip text-emerald-400">23.106.58.184</td>
                                  <td>0</td>
                                  <td>10</td>
                                  <td>1</td>
                                  <td>0</td>
                                  <td>0.1</td>
                                  <td class="space">3500</td>
                                  <td>460</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0.02</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">11</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e12</a>
                                  </td>
                                  <td class="ip text-emerald-400">23.106.56.248</td>
                                  <td>0</td>
                                  <td>10</td>
                                  <td>4</td>
                                  <td>0</td>
                                  <td>0.16</td>
                                  <td class="space">3500</td>
                                  <td>297</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>20.43</td>
                                  <td>0.12</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">12</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e13</a>
                                  </td>
                                  <td class="ip text-emerald-400">23.106.58.186</td>
                                  <td>0</td>
                                  <td>10</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>0.35</td>
                                  <td class="space">3500</td>
                                  <td>399</td>
                                  <td class="BW">0.26</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0.01</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">13</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e15</a>
                                  </td>
                                  <td class="ip text-emerald-400">23.106.58.185</td>
                                  <td>0</td>
                                  <td>10</td>
                                  <td>1</td>
                                  <td>0</td>
                                  <td>0.06</td>
                                  <td class="space">3500</td>
                                  <td>332</td>
                                  <td class="BW">0.94</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>17.68</td>
                                  <td>0.13</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">14</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e16</a>
                                  </td>
                                  <td class="ip text-emerald-400">23.106.58.180</td>
                                  <td>0</td>
                                  <td>10</td>
                                  <td>2</td>
                                  <td>0</td>
                                  <td>0.15</td>
                                  <td class="space">3500</td>
                                  <td>366</td>
                                  <td class="BW">0.51</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>15.75</td>
                                  <td>0.1</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">15</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e17</a>
                                  </td>
                                  <td class="ip text-emerald-400">116.202.163.29</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>20</td>
                                  <td>0</td>
                                  <td>14.53</td>
                                  <td class="space">1800</td>
                                  <td>281</td>
                                  <td class="BW">0.03</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">16</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e18</a>
                                  </td>
                                  <td class="ip text-emerald-400">65.108.78.253</td>
                                  <td>0</td>
                                  <td>2</td>
                                  <td>20</td>
                                  <td>0</td>
                                  <td>30.83</td>
                                  <td class="space">1800</td>
                                  <td>317</td>
                                  <td class="BW">0.97</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">17</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e19</a>
                                  </td>
                                  <td class="ip text-emerald-400">65.108.101.47</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>20</td>
                                  <td>0</td>
                                  <td>12.08</td>
                                  <td class="space">1800</td>
                                  <td>281</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">18</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e20</a>
                                  </td>
                                  <td class="ip text-emerald-400">168.119.4.19</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>20</td>
                                  <td>0</td>
                                  <td>1.82</td>
                                  <td class="space">1800</td>
                                  <td>227</td>
                                  <td class="BW">14.77</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">19</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e21</a>
                                  </td>
                                  <td class="ip text-emerald-400">46.4.119.171</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>20</td>
                                  <td>0</td>
                                  <td>0.04</td>
                                  <td class="space">1800</td>
                                  <td>273</td>
                                  <td class="BW">0.09</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">20</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e22</a>
                                  </td>
                                  <td class="ip text-emerald-400">144.76.101.34</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>20</td>
                                  <td>0</td>
                                  <td>17.24</td>
                                  <td class="space">1800</td>
                                  <td>339</td>
                                  <td class="BW">9.85</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">21</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e23</a>
                                  </td>
                                  <td class="ip text-emerald-400">195.201.152.119</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>20</td>
                                  <td>0</td>
                                  <td>18.46</td>
                                  <td class="space">1800</td>
                                  <td>296</td>
                                  <td class="BW">16.1</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">22</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e24</a>
                                  </td>
                                  <td class="ip text-emerald-400">168.119.88.26</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>20</td>
                                  <td>0</td>
                                  <td>3.25</td>
                                  <td class="space">1800</td>
                                  <td>251</td>
                                  <td class="BW">18.24</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">23</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e25</a>
                                  </td>
                                  <td class="ip text-emerald-400">135.181.1.115</td>
                                  <td>0</td>
                                  <td>2</td>
                                  <td>20</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td class="space">1800</td>
                                  <td>242</td>
                                  <td class="BW">31.05</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">24</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e26</a>
                                  </td>
                                  <td class="ip text-emerald-400">148.251.47.29</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>20</td>
                                  <td>0</td>
                                  <td>18.38</td>
                                  <td class="space">1800</td>
                                  <td>238</td>
                                  <td class="BW">0.64</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">25</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e27</a>
                                  </td>
                                  <td class="ip text-emerald-400">116.202.144.74</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>20</td>
                                  <td>0</td>
                                  <td>0.04</td>
                                  <td class="space">1800</td>
                                  <td>111</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">26</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e28</a>
                                  </td>
                                  <td class="ip text-emerald-400">138.201.53.125</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>20</td>
                                  <td>0</td>
                                  <td>18.45</td>
                                  <td class="space">1800</td>
                                  <td>187</td>
                                  <td class="BW">9.94</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">27</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e29</a>
                                  </td>
                                  <td class="ip text-emerald-400">94.130.35.186</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>20</td>
                                  <td>0</td>
                                  <td>0.01</td>
                                  <td class="space">1800</td>
                                  <td>122</td>
                                  <td class="BW">15.34</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">28</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e30</a>
                                  </td>
                                  <td class="ip text-emerald-400">159.69.136.156</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>20</td>
                                  <td>0</td>
                                  <td>15.91</td>
                                  <td class="space">1800</td>
                                  <td>156</td>
                                  <td class="BW">12.87</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">29</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e31</a>
                                  </td>
                                  <td class="ip text-emerald-400">65.109.20.113</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>1</td>
                                  <td>14.25</td>
                                  <td class="space">900</td>
                                  <td>432</td>
                                  <td class="BW">0.97</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">30</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e32</a>
                                  </td>
                                  <td class="ip text-emerald-400">65.109.20.114</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td class="space">0</td>
                                  <td>494</td>
                                  <td class="BW">14.62</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0.01</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">31</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e33</a>
                                  </td>
                                  <td class="ip text-emerald-400">65.109.20.115</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>1</td>
                                  <td>16.21</td>
                                  <td class="space">900</td>
                                  <td>383</td>
                                  <td class="BW">2.94</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0.01</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">32</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e34</a>
                                  </td>
                                  <td class="ip text-emerald-400">65.109.39.238</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>2</td>
                                  <td>0.01</td>
                                  <td class="space">900</td>
                                  <td>236</td>
                                  <td class="BW">0.39</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0.01</td>
                                  <td>0.01</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">33</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e35</a>
                                  </td>
                                  <td class="ip text-emerald-400">65.109.63.46</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>1</td>
                                  <td>11.25</td>
                                  <td class="space">900</td>
                                  <td>210</td>
                                  <td class="BW">12.02</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>1.25</td>
                                  <td>531.28</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">34</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e37</a>
                                  </td>
                                  <td class="ip text-emerald-400">136.243.111.218</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td class="space">1800</td>
                                  <td>120</td>
                                  <td class="BW">0.14</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">35</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e38</a>
                                  </td>
                                  <td class="ip text-emerald-400">116.202.210.162</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>19.27</td>
                                  <td class="space">1800</td>
                                  <td>192</td>
                                  <td class="BW">3.65</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">36</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e39</a>
                                  </td>
                                  <td class="ip text-emerald-400">178.63.89.179</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td class="space">1800</td>
                                  <td>135</td>
                                  <td class="BW">17.76</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">37</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e40</a>
                                  </td>
                                  <td class="ip text-emerald-400">65.109.114.247</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.05</td>
                                  <td class="space">900</td>
                                  <td>198</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">38</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e41</a>
                                  </td>
                                  <td class="ip text-emerald-400">85.10.205.181</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.03</td>
                                  <td class="space">900</td>
                                  <td>82</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">39</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e42</a>
                                  </td>
                                  <td class="ip text-emerald-400">213.239.215.212</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td class="space">900</td>
                                  <td>190</td>
                                  <td class="BW">0.47</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">40</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e43</a>
                                  </td>
                                  <td class="ip text-emerald-400">85.10.198.89</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>15.81</td>
                                  <td class="space">900</td>
                                  <td>90</td>
                                  <td class="BW">25.43</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">41</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e44</a>
                                  </td>
                                  <td class="ip text-emerald-400">213.239.214.251</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td class="space">900</td>
                                  <td>43</td>
                                  <td class="BW">2.93</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">42</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e45</a>
                                  </td>
                                  <td class="ip text-emerald-400">142.132.192.164</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>14.84</td>
                                  <td class="space">900</td>
                                  <td>46</td>
                                  <td class="BW">14.05</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">43</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e46</a>
                                  </td>
                                  <td class="ip text-emerald-400">65.109.104.102</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td class="space">900</td>
                                  <td>180</td>
                                  <td class="BW">3.41</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">44</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e47</a>
                                  </td>
                                  <td class="ip text-emerald-400">65.109.104.101</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>16.75</td>
                                  <td class="space">900</td>
                                  <td>309</td>
                                  <td class="BW">14.83</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">45</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e48</a>
                                  </td>
                                  <td class="ip text-emerald-400">65.109.104.100</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td class="space">900</td>
                                  <td>197</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">46</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e49</a>
                                  </td>
                                  <td class="ip text-emerald-400">85.10.192.162</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.13</td>
                                  <td class="space">900</td>
                                  <td>47</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">47</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e50</a>
                                  </td>
                                  <td class="ip text-emerald-400">213.239.213.162</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.16</td>
                                  <td class="space">900</td>
                                  <td>85</td>
                                  <td class="BW">5.66</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">48</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e51</a>
                                  </td>
                                  <td class="ip text-emerald-400">85.10.194.26</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td class="space">900</td>
                                  <td>69</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">49</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e52</a>
                                  </td>
                                  <td class="ip text-emerald-400">85.10.206.247</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>16.37</td>
                                  <td class="space">900</td>
                                  <td>72</td>
                                  <td class="BW">10.55</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">50</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e53</a>
                                  </td>
                                  <td class="ip text-emerald-400">65.108.100.232</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.01</td>
                                  <td class="space">900</td>
                                  <td>153</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">51</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e54</a>
                                  </td>
                                  <td class="ip text-emerald-400">65.109.67.154</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>16.14</td>
                                  <td class="space">900</td>
                                  <td>240</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">52</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e55</a>
                                  </td>
                                  <td class="ip text-emerald-400">65.21.140.101</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.11</td>
                                  <td class="space">900</td>
                                  <td>205</td>
                                  <td class="BW">14.94</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">53</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e56</a>
                                  </td>
                                  <td class="ip text-emerald-400">65.108.47.14</td>
                                  <td>0</td>
                                  <td>2</td>
                                  <td>49</td>
                                  <td>0</td>
                                  <td>16.32</td>
                                  <td class="space">900</td>
                                  <td>176</td>
                                  <td class="BW">15.24</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">54</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e57</a>
                                  </td>
                                  <td class="ip text-emerald-400">95.217.121.173</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>15.93</td>
                                  <td class="space">900</td>
                                  <td>240</td>
                                  <td class="BW">12.69</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">55</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e58</a>
                                  </td>
                                  <td class="ip text-emerald-400">213.239.216.157</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>2.64</td>
                                  <td class="space">900</td>
                                  <td>72</td>
                                  <td class="BW">5.76</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">56</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e59</a>
                                  </td>
                                  <td class="ip text-emerald-400">136.243.125.188</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>8.02</td>
                                  <td class="space">900</td>
                                  <td>39</td>
                                  <td class="BW">0.17</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>1.58</td>
                                  <td>663.68</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">57</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e60</a>
                                  </td>
                                  <td class="ip text-emerald-400">213.133.103.137</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>17.35</td>
                                  <td class="space">900</td>
                                  <td>84</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">58</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e61</a>
                                  </td>
                                  <td class="ip text-emerald-400">142.132.135.62</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.19</td>
                                  <td class="space">3500</td>
                                  <td>1331.2</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>16.77</td>
                                  <td>1.9</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">59</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e88</a>
                                  </td>
                                  <td class="ip text-emerald-400">65.109.99.22</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>1</td>
                                  <td>0.07</td>
                                  <td class="space">900</td>
                                  <td>375</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0.01</td>
                                  <td>0.01</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">60</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e89</a>
                                  </td>
                                  <td class="ip text-emerald-400">65.109.99.21</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>1</td>
                                  <td>15.92</td>
                                  <td class="space">900</td>
                                  <td>314</td>
                                  <td class="BW">13.33</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0.01</td>
                                  <td>0.01</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">61</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e95</a>
                                  </td>
                                  <td class="ip text-emerald-400">95.217.88.109</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>15.91</td>
                                  <td class="space">0</td>
                                  <td>267</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">62</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e101</a>
                                  </td>
                                  <td class="ip text-emerald-400">23.88.69.169</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.02</td>
                                  <td class="space">0</td>
                                  <td>250</td>
                                  <td class="BW">0</td>
                                  <td>15.06</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0.04</td>
                                  <td>0.01</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">63</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e108</a>
                                  </td>
                                  <td class="ip text-emerald-400">88.99.243.248</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td class="space">1800</td>
                                  <td>175</td>
                                  <td class="BW">0.51</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">64</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e114</a>
                                  </td>
                                  <td class="ip text-emerald-400">135.181.20.162</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>1.06</td>
                                  <td class="space">900</td>
                                  <td>179</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">65</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e115</a>
                                  </td>
                                  <td class="ip text-emerald-400">65.21.126.172</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td class="space">900</td>
                                  <td>209</td>
                                  <td class="BW">14.57</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">66</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e116</a>
                                  </td>
                                  <td class="ip text-emerald-400">65.109.25.116</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td class="space">900</td>
                                  <td>210</td>
                                  <td class="BW">15.04</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">67</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e117</a>
                                  </td>
                                  <td class="ip text-emerald-400">135.181.63.100</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>15.82</td>
                                  <td class="space">900</td>
                                  <td>270</td>
                                  <td class="BW">0.4</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">68</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e121</a>
                                  </td>
                                  <td class="ip text-emerald-400">138.201.30.236</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.39</td>
                                  <td class="space">1800</td>
                                  <td>322</td>
                                  <td class="BW">0.05</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0.02</td>
                                  <td>0.04</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">69</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e122</a>
                                  </td>
                                  <td class="ip text-emerald-400">95.217.77.115</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.04</td>
                                  <td class="space">1800</td>
                                  <td>203</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">70</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e123</a>
                                  </td>
                                  <td class="ip text-emerald-400">88.198.50.244</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td class="space">1800</td>
                                  <td>256</td>
                                  <td class="BW">0.48</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0.01</td>
                                  <td>0.01</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">71</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e124</a>
                                  </td>
                                  <td class="ip text-emerald-400">95.217.106.236</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>49</td>
                                  <td>0</td>
                                  <td>0.03</td>
                                  <td class="space">1800</td>
                                  <td>227</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0.01</td>
                                  <td>0.01</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">72</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e125</a>
                                  </td>
                                  <td class="ip text-emerald-400">95.217.57.79</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.08</td>
                                  <td class="space">1800</td>
                                  <td>828</td>
                                  <td class="BW">0.22</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0.01</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">73</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e126</a>
                                  </td>
                                  <td class="ip text-emerald-400">65.21.134.111</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.03</td>
                                  <td class="space">1800</td>
                                  <td>334</td>
                                  <td class="BW">1.27</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">74</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e128</a>
                                  </td>
                                  <td class="ip text-emerald-400">159.69.139.40</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.24</td>
                                  <td class="space">1800</td>
                                  <td>260</td>
                                  <td class="BW">8.46</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">75</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e129</a>
                                  </td>
                                  <td class="ip text-emerald-400">95.217.62.108</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.15</td>
                                  <td class="space">1800</td>
                                  <td>172</td>
                                  <td class="BW">16.37</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">76</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e130</a>
                                  </td>
                                  <td class="ip text-emerald-400">78.46.83.249</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.02</td>
                                  <td class="space">1800</td>
                                  <td>176</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">77</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e131</a>
                                  </td>
                                  <td class="ip text-emerald-400">95.217.76.103</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>1.9</td>
                                  <td class="space">1800</td>
                                  <td>223</td>
                                  <td class="BW">12.47</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">78</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e132</a>
                                  </td>
                                  <td class="ip text-emerald-400">116.202.233.37</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.13</td>
                                  <td class="space">1800</td>
                                  <td>230</td>
                                  <td class="BW">17.64</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">79</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e133</a>
                                  </td>
                                  <td class="ip text-emerald-400">94.130.54.206</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>19.89</td>
                                  <td class="space">1800</td>
                                  <td>297</td>
                                  <td class="BW">18.44</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">80</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e134</a>
                                  </td>
                                  <td class="ip text-emerald-400">95.217.61.220</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.01</td>
                                  <td class="space">1800</td>
                                  <td>222</td>
                                  <td class="BW">14.27</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">81</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e135</a>
                                  </td>
                                  <td class="ip text-emerald-400">144.76.101.165</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>20.24</td>
                                  <td class="space">1800</td>
                                  <td>176</td>
                                  <td class="BW">16.39</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">82</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e136</a>
                                  </td>
                                  <td class="ip text-emerald-400">95.217.107.155</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.02</td>
                                  <td class="space">1800</td>
                                  <td>262</td>
                                  <td class="BW">0.19</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">83</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e137</a>
                                  </td>
                                  <td class="ip text-emerald-400">136.243.103.238</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>18.5</td>
                                  <td class="space">1800</td>
                                  <td>381</td>
                                  <td class="BW">2.77</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">84</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e138</a>
                                  </td>
                                  <td class="ip text-emerald-400">95.217.38.248</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.02</td>
                                  <td class="space">1800</td>
                                  <td>325</td>
                                  <td class="BW">16.82</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">85</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e139</a>
                                  </td>
                                  <td class="ip text-emerald-400">88.198.25.181</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>49</td>
                                  <td>0</td>
                                  <td>0.01</td>
                                  <td class="space">1800</td>
                                  <td>112</td>
                                  <td class="BW">18.16</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">86</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e140</a>
                                  </td>
                                  <td class="ip text-emerald-400">49.12.82.254</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.02</td>
                                  <td class="space">1800</td>
                                  <td>213</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">87</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e141</a>
                                  </td>
                                  <td class="ip text-emerald-400">46.4.10.187</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.05</td>
                                  <td class="space">1800</td>
                                  <td>115</td>
                                  <td class="BW">0.02</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">88</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e143</a>
                                  </td>
                                  <td class="ip text-emerald-400">95.217.34.45</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.03</td>
                                  <td class="space">1800</td>
                                  <td>239</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0.01</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">89</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e144</a>
                                  </td>
                                  <td class="ip text-emerald-400">159.69.137.94</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td class="space">1800</td>
                                  <td>245</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">90</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e145</a>
                                  </td>
                                  <td class="ip text-emerald-400">116.202.237.215</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td class="space">1800</td>
                                  <td>95</td>
                                  <td class="BW">0.17</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">91</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e146</a>
                                  </td>
                                  <td class="ip text-emerald-400">159.69.73.185</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.09</td>
                                  <td class="space">1800</td>
                                  <td>143</td>
                                  <td class="BW">14.32</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">92</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e147</a>
                                  </td>
                                  <td class="ip text-emerald-400">138.201.16.56</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.01</td>
                                  <td class="space">1800</td>
                                  <td>208</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">93</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e148</a>
                                  </td>
                                  <td class="ip text-emerald-400">88.99.211.178</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>49</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td class="space">1800</td>
                                  <td>147</td>
                                  <td class="BW">0.1</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">94</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e149</a>
                                  </td>
                                  <td class="ip text-emerald-400">95.217.56.235</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.08</td>
                                  <td class="space">1800</td>
                                  <td>180</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">95</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e150</a>
                                  </td>
                                  <td class="ip text-emerald-400">176.9.151.61</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td class="space">1800</td>
                                  <td>270</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">96</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e151</a>
                                  </td>
                                  <td class="ip text-emerald-400">148.251.4.48</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td class="space">1800</td>
                                  <td>165</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">97</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e153</a>
                                  </td>
                                  <td class="ip text-emerald-400">144.76.61.174</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.01</td>
                                  <td class="space">1800</td>
                                  <td>229</td>
                                  <td class="BW">0.03</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">98</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e154</a>
                                  </td>
                                  <td class="ip text-emerald-400">195.201.172.137</td>
                                  <td>0</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.02</td>
                                  <td class="space">1800</td>
                                  <td>189</td>
                                  <td class="BW">0.06</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">99</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a href="#edit" class="text-emerald-400">e155</a>
                                  </td>
                                  <td class="ip text-emerald-400">78.46.107.87</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>50</td>
                                  <td>0</td>
                                  <td>0.02</td>
                                  <td class="space">1800</td>
                                  <td>244</td>
                                  <td class="BW">0</td>
                                  <td>0</td>
                                  <td class="max">100 MB/s</td>
                                  <td>0</td>
                                  <td>0</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="view" class="tab-content-video">
                  <div class="rounded-xl">
                    <div class="flex relative rounded-xl bg-[#202940]">
                        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-2/12 lg:flex-none">
                            <div class="relative flex flex-col min-w-0 break-wordsborder-0 border-solid bg-[#202940] border-black-125 rounded-2xl bg-clip-border">
                              <div class="p-4 pb-0 mb-0 rounded-t-4">
                                <div class="flex justify-between">
                                  <h6 class="mb-2 text-emerald-500 font-bold text-lg">User</h6>
                                </div>
                              </div>
                              <div class="">
                                <table class="items-center w-full mb-4 align-top border-collapse border-gray-200 overflow-hidden">
                                  <tbody>
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                     <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                        <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                      <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                     <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                     <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                         </div>
                        <div class="w-full max-w-full px-6 mt-0 mb-6 lg:mb-0 lg:w-2/12 lg:flex-none">
                            <div class="relative flex flex-col min-w-0 break-wordsborder-0 border-solid bg-[#202940] border-black-125 rounded-2xl bg-clip-border">
                              <div class="p-4 pb-0 mb-0 rounded-t-4">
                                <div class="flex justify-between">
                                  <h6 class="mb-2 text-emerald-500 font-bold text-lg">Vip User</h6>
                                </div>
                              </div>
                              <div class="">
                                <table class="items-center w-full mb-4 align-top border-collapse border-gray-200 overflow-hidden">
                                  <tbody>
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                     <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                        <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                      <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                     <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                     <tr>
                                      <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                          <div class="text-white">
                                            sub-WAAA-135.mp4
                                          </div>
                                        </div>
                                      </td>
                                      <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">3400</h6>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                         </div>
                        <!-- cards row 2 -->
                        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-8/12 lg:flex-none">
                          <div class="border-black/12.5 bg-[#202940] relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-clip-border">
                            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0">
                              <h6 class="text-emerald-500 font-bold">Statistics</h6>
                              <p class="mb-0 text-sm leading-normal dark:text-white dark:opacity-60">
                                <i class="fa fa-arrow-up text-emerald-500"></i>
                                <span class="font-semibold">4% more</span> in 2024
                              </p>
                            </div>
                            <div class="flex-auto p-4">
                              <div>
                                <canvas id="chart-line2" height="350"></canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
</body>
<script src="../assets/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- main script file  -->
<script src="../assets/js/argon-dashboard-tailwind.js?v=1.1.7" async></script>
<script src="../assets/datatable/datatables.min.js"></script>
<script>

  $(function () {
    "use strict";
    $('#table-sto, #table-encoder, #table-download').each(function() {
        var table = $(this).DataTable({
            paging: true,
            lengthChange: true,
            searching: false,
            ordering: true,
            info: true,
            autoWidth: false,
            responsive: true,
            scrollY: "calc(100vh - 25em)",
            scrollCollapse: true,
            scrollX: true,
            stripeClasses: ['my-3 h-12 text-center', 'my-3 h-12 bg-slate-900 text-center'],
            dom: '<"text-white bg-slate-900 py-2 px-4 w-max rounded-lg mb-1 relative z-10"l>frt<"text-white w-max rounded-lg mt-1"i><"absolute right-0 -bottom-1 text-white py-2 px-4 w-max rounded-lg mb-2"p>',
            language: {
                paginate: {
                    button: {
                        className: 'text-green'
                    }
                }
            },
        });
    });
});
</script>
<script>
  $(document).ready(function () {
    $('.tab-content-video').hide();
    $('#user').show();

    $('.tab-video').click(function () {
      $('.tab-video').removeClass('tab-active !text-emerald-400 md:shadow-[0_-8px_15px_0px_rgb(15,23,42,1)] ')
      $(this).addClass('tab-active !text-emerald-400 md:shadow-[0_-8px_15px_0px_rgb(15,23,42,1)] ')
      let contentToShow = $(this).data('content');
      $('.tab-content-video').hide();
      $('#' + contentToShow).show();
    });
  });
</script>

</html>