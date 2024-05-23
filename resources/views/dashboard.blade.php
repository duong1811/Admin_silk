<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../assets/img/logo-stream2.png" />
  <title>Dashboard</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Popper -->
  <link href="../assets/datatable/datatables.min.css?v=2" rel="stylesheet" />

  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <!-- Main Styling -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <style>
    /* Optional: Thiết lập phông chữ cho biểu tượng */
    .material-icons {
      font-family: 'Material Icons';
      font-weight: normal;
      font-style: normal;
      font-size: 24px;
      /* Điều chỉnh kích thước nếu cần thiết */
      line-height: 1;
      /* Đảm bảo biểu tượng được căn giữa */
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

    #video_length select {
        background-color: transparent;
        border: none;
        outline: none;
    }
  </style>
</head>


<body class="m-0 font-sans text-base antialiased font-normal leading-default text-slate-500 bg-[#1a2035]">
  <main class="relative h-full transition-all duration-200 ease-in-out rounded-xl">
    @include('components/navbar') 
    @include('components/sidebar')
    <!-- cards -->
    <div class="w-full px-3 md:px-6 py-6 mx-auto">
      <!-- row 1 -->
      <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 xl:mb-0 xl:w-1/4">
          <div class=' mt-2 shadow-xl drop-shadow-sm bg-[#202940] rounded-2xl py-2 px-5 shadow-gray-600/30 dark:shadow-slate-900'>
            <div class='flex items-center justify-between'>
              <div
                class='bg-gradient-to-br from-emerald-600 to-emerald-400 p-3 rounded-xl lg:-mt-14 shadow-lg shadow-gray-400/50 dark:shadow-slate-900'>
                <i class="material-icons opacity-1 text-white text-3xl leading-none	">storage</i>
              </div>
              <div class='font-semibold'>
                <h3 class='text-lg text-emerald-500'>Storage</h3>
                <h5 class="mb-0 font-bold text-2xl text-white text-end">
                  5.1 GB
                </h5>
              </div>
            </div>
            <hr class="h-px mx-1 mt-4 mb-2 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent border-none" />
            <div>
              <p class="mb-0 text-white opacity-0.8">
                <span class="text-sm font-bold leading-normal text-emerald-500">255</span>
                file
              </p>
            </div>
          </div>

        </div>
        
        <!-- card2 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 xl:mb-0 xl:w-1/4">
          <div class=' mt-2 shadow-xl drop-shadow-sm bg-[#202940] rounded-2xl py-2 px-5 shadow-gray-600/30 dark:shadow-slate-900'>
            <div class='flex items-center justify-between'>
              <div
                class='bg-gradient-to-br from-emerald-600 to-emerald-400 p-3 rounded-xl lg:-mt-14 shadow-lg shadow-gray-400/50 dark:shadow-slate-900'>
                <i class="material-icons opacity-1 text-white text-3xl leading-none	">trending_up</i>
              </div>
              <div class='font-semibold'>
                <h3 class='text-lg text-emerald-500'>Today’s Earning</h3>
                <h5 class="mb-0 font-bold text-2xl text-white text-end">
                  $53,000
                </h5>
              </div>
            </div>
            <hr class="h-px mx-1 mt-4 mb-2 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent border-none" />
            <div>
              <p class="mb-0 text-white opacity-0.8">
                <span class="text-sm font-bold leading-normal text-emerald-500">+55%</span>
                since yesterday
              </p>
            </div>
          </div>

        </div>

        <!-- card3 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 xl:mb-0 xl:w-1/4">
          <div class=' mt-2 shadow-xl drop-shadow-sm bg-[#202940] rounded-2xl py-2 px-5 shadow-gray-600/30 dark:shadow-slate-900'>
            <div class='flex items-center justify-between'>
              <div
                class='bg-gradient-to-br from-emerald-600 to-emerald-400 p-3 rounded-xl lg:-mt-14 shadow-lg shadow-gray-400/50 dark:shadow-slate-900'>
                <i class="material-icons opacity-1 text-white text-3xl leading-none	">trending_up</i>
              </div>
              <div class='font-semibold'>
                <h3 class='text-lg text-emerald-500'>Yesterday’s Earning</h3>
                <h5 class="mb-0 font-bold text-2xl text-white text-end">
                  $53,000
                </h5>
              </div>
            </div>
            <hr class="h-px mx-1 mt-4 mb-2 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent border-none" />
            <div>
              <p class="mb-0 text-white opacity-0.8">
                <span class="text-sm font-bold leading-normal text-emerald-500">+55%</span>
                since yesterday
              </p>
            </div>
          </div>

        </div>

        <!-- card4 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 xl:mb-0 xl:w-1/4">
          <div class=' mt-2 shadow-xl drop-shadow-sm bg-[#202940] rounded-2xl py-2 px-5 shadow-gray-600/30 dark:shadow-slate-900'>
            <div class='flex items-center justify-between'>
              <div
                class='bg-gradient-to-br from-emerald-600 to-emerald-400 p-3 rounded-xl lg:-mt-14 shadow-lg shadow-gray-400/50 dark:shadow-slate-900'>
                <i class="material-icons opacity-1 text-white text-3xl leading-none	">attach_money</i>
              </div>
              <div class='font-semibold'>
                <h3 class='text-lg text-emerald-500'>Total Balance</h3>
                <h5 class="mb-0 font-bold text-2xl text-white text-end">
                  $53,000
                </h5>
              </div>
            </div>
            <hr class="h-px mx-1 mt-4 mb-2 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent border-none" />
            <div>
              <p class="mb-0 text-white opacity-0.8">
                <span class="text-sm font-bold leading-normal text-emerald-500">+55%</span>
                since yesterday
              </p>
            </div>
          </div>

        </div>
      </div>

      <!-- cards row 2 -->
      <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
          <div class="border-black/12.5 bg-[#202940] dark:shadow-dark-xl shadow-xl relative z-10 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-clip-border">
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

        <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
          <div class="border-black/12.5 bg-[#202940] dark:shadow-dark-xl shadow-xl relative z-10 flex min-w-0 flex-col break-words rounded-2xl
                      border-0 border-solid bg-clip-border pb-3">
            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0">
              <h6 class="text-emerald-500 font-bold">Notification</h6>
            </div>
            <div class="grid grid-cols-1 gap-4 px-4 mt-3 h-[calc(380px)] overflow-auto">
              <div class="bg-[#1a2035] flex items-center rounded-lg py-2 px-2 text-white shadow-lg drop-shadow-sm">
                <i class="material-icons mr-3 text-3xl text-red-500">error</i>
                <div>
                  <h6 class="text-red-500 font-bold">
                    Error encoder video GoPNmF4T0oEjnennbwt5
                  </h6>
                  <p class="italic">
                    The video GoPNmF4T0oEjnennbwt5(PETS-036.mp4) has been deleted. Because I can not encode the video
                  </p>
                </div>
              </div>
              <div class="bg-[#1a2035] flex items-center rounded-lg py-2 px-2 text-white shadow-lg drop-shadow-sm">
                <i class="material-icons mr-3 text-3xl text-red-500">error</i>
                <div>
                  <h6 class="text-red-500 font-bold">
                    Error encoder video GoPNmF4T0oEjnennbwt5
                  </h6>
                  <p class="italic">
                    The video GoPNmF4T0oEjnennbwt5(PETS-036.mp4) has been deleted. Because I can not encode the video
                  </p>
                </div>
              </div>
              <div class="bg-[#1a2035] flex items-center rounded-lg py-2 px-2 text-white shadow-lg drop-shadow-sm">
                <i class="material-icons mr-3 text-3xl text-red-500">error</i>
                <div>
                  <h6 class="text-red-500 font-bold">
                    Error encoder video GoPNmF4T0oEjnennbwt5
                  </h6>
                  <p class="italic">
                    The video GoPNmF4T0oEjnennbwt5(PETS-036.mp4) has been deleted. Because I can not encode the video
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- cards row 3 -->

      <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
          <div class="relative flex flex-col min-w-0 break-wordsborder-0 border-solid shadow-xl bg-[#202940] dark:shadow-dark-xl border-black-125 rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 rounded-t-4">
              <div class="flex justify-between">
                <h6 class="mb-2 text-emerald-500 font-bold text-lg">Top 10 viewed videos today</h6>
              </div>
            </div>
            <div class="overflow-auto h-[calc(25vh)]">
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
        <div class="w-full max-w-full px-3 mt-0 lg:w-5/12 lg:flex-none">
          <div class="border-black/12.5 shadow-xl bg-[#202940] dark:shadow-dark-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-clip-border">
            <div class="p-4 pb-0 rounded-t-4">
              <h6 class="mb-0 text-emerald-500 font-bold text-lg">Top Country</h6>
            </div>
            <div class="overflow-auto">
              <table class="items-center w-full mb-4 align-top border-collapse border-gray-200 dark:border-white/40">
                <tbody>
                  <tr>
                    <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                      <div class="flex items-center px-2 py-1">
                        <div>
                          <img src="../assets/img/icons/flags/US.png" alt="Country flag" />
                        </div>
                        <div class="ml-6">
                          <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Country:
                          </p>
                          <h6 class="mb-0 text-sm leading-normal dark:text-white">United States</h6>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                      <div class="text-center">
                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Sales:</p>
                        <h6 class="mb-0 text-sm leading-normal dark:text-white">2500</h6>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                      <div class="text-center">
                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Value:</p>
                        <h6 class="mb-0 text-sm leading-normal dark:text-white">$230,900</h6>
                      </div>
                    </td>
                    <td
                      class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                      <div class="flex-1 text-center">
                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Bounce:</p>
                        <h6 class="mb-0 text-sm leading-normal dark:text-white">29.9%</h6>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                      <div class="flex items-center px-2 py-1">
                        <div>
                          <img src="../assets/img/icons/flags/DE.png" alt="Country flag" />
                        </div>
                        <div class="ml-6">
                          <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Country:
                          </p>
                          <h6 class="mb-0 text-sm leading-normal dark:text-white">Germany</h6>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                      <div class="text-center">
                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Sales:</p>
                        <h6 class="mb-0 text-sm leading-normal dark:text-white">3.900</h6>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                      <div class="text-center">
                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Value:</p>
                        <h6 class="mb-0 text-sm leading-normal dark:text-white">$440,000</h6>
                      </div>
                    </td>
                    <td
                      class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                      <div class="flex-1 text-center">
                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Bounce:</p>
                        <h6 class="mb-0 text-sm leading-normal dark:text-white">40.22%</h6>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                      <div class="flex items-center px-2 py-1">
                        <div>
                          <img src="../assets/img/icons/flags/GB.png" alt="Country flag" />
                        </div>
                        <div class="ml-6">
                          <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Top Country:
                          </p>
                          <h6 class="mb-0 text-sm leading-normal dark:text-white">Great Britain</h6>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                      <div class="text-center">
                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Sales:</p>
                        <h6 class="mb-0 text-sm leading-normal dark:text-white">1.400</h6>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                      <div class="text-center">
                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Value:</p>
                        <h6 class="mb-0 text-sm leading-normal dark:text-white">$190,700</h6>
                      </div>
                    </td>
                    <td
                      class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                      <div class="flex-1 text-center">
                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Bounce:</p>
                        <h6 class="mb-0 text-sm leading-normal dark:text-white">23.44%</h6>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="p-2 align-middle bg-transparent border-0 w-3/10 whitespace-nowrap">
                      <div class="flex items-center px-2 py-1">
                        <div>
                          <img src="../assets/img/icons/flags/BR.png" alt="Country flag" />
                        </div>
                        <div class="ml-6">
                          <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Country:
                          </p>
                          <h6 class="mb-0 text-sm leading-normal dark:text-white">Brasil</h6>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                      <div class="text-center">
                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Sales:</p>
                        <h6 class="mb-0 text-sm leading-normal dark:text-white">562</h6>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                      <div class="text-center">
                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Value:</p>
                        <h6 class="mb-0 text-sm leading-normal dark:text-white">$143,960</h6>
                      </div>
                    </td>
                    <td class="p-2 text-sm leading-normal align-middle bg-transparent border-0 whitespace-nowrap">
                      <div class="flex-1 text-center">
                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Bounce:</p>
                        <h6 class="mb-0 text-sm leading-normal dark:text-white">32.14%</h6>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    @include('components/footer')
</body>
<!-- plugin for charts  -->
<script src="../assets/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- main script file  -->
<script src="../assets/js/argon-dashboard-tailwind.js?v=1.0.3" async></script>

</html>

