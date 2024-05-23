<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../assets/img/logo-stream2.png" />
  <title>User</title>
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
                data-content="sto">
                <span class="px-2 py-1">All</span>
              </button>
              <button
                class="row-start-auto	tab tab-video w-max text-white font-bold h-auto text-md px-4 [--tab-bg:#202940] !border-b-0 md:!border-b-1 !rounded-b-lg md:!rounded-b-none before:!hidden md:before:!block"
                data-content="encoder">
                <span class="px-2 py-1">Premium</span>
              </button>
              <button
                class="row-start-auto	tab tab-video w-max text-white font-bold h-auto text-md px-4 [--tab-bg:#202940] !border-b-0 md:!border-b-1 !rounded-b-lg md:!rounded-b-none before:!hidden md:before:!block"
                data-content="download">
                <span class="px-2 py-1">Free Active</span>
              </button>
              <button
                class="row-start-auto	tab tab-video w-max text-white font-bold h-auto text-md px-4 [--tab-bg:#202940] !border-b-0 md:!border-b-1 !rounded-b-lg md:!rounded-b-none before:!hidden md:before:!block"
                data-content="stream">
                <span class="px-2 py-1">Unverified</span>
              </button>
              <button
                class="row-start-auto	tab tab-video w-max text-white font-bold h-auto text-md px-4 [--tab-bg:#202940] !border-b-0 md:!border-b-1 !rounded-b-lg md:!rounded-b-none before:!hidden md:before:!block"
                data-content="stream">
                <span class="px-2 py-1">Delete</span>
              </button>
            </div>
            <div class="mt-3 md:mt-0 rounded-b-box rounded-se-box relative  max-w-full w-full">
              <div
                class="border-base-300 rounded-b-box rounded-se-box gap-2 bg-[#202940] bg-top [border-width:var(--tab-border)] undefined">
                <div id="sto" class="tab-content-video">
                  <div class="rounded-xl">
                    <div class="relative rounded-xl bg-[#202940]">
                      <div class="px-2 pt-4 md:p-4">
                        <div class="mb-2">
                          <h5 class="text-emerald-400">
                            Sto : 33
                          </h5>
                        </div>
                        <div class="flex flex-col bg-clip-border rounded-xl text-gray-700 bg-transparent">
                          <div class="px-0 pt-0">
                            <table id="table-sto" datatable data-page-size="10"
                              class="overflow-y-clip w-full text-white text-sm text-left border-b border-gray-100/80">
                              <thead>
                                <tr class="bg-slate-900 transition-colors text-md text-center">
			                            <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer text-center">User ID</th>
			                            <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer text-center"><a href=""></a>User Name</th>
			                            <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer text-center"><a href=""></a>Email</th>
										               <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer text-center">Videos</th>
			                            <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer text-center">Plays</th>
			                            <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer text-center">Earning</th>
			                            <th class="d-none">Start Date</th>
			                            <th class="d-none">Premium</th>
			                            <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer text-center">Ban</th>
			                            <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer text-center">Delete</th>
			                            <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer text-center">Login</th>
			                            <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer text-center">Note</th>
									            </tr>
                              </thead>
                              <tbody>
																<tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500	">100000</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100000" target="_blank">ngocphuong123</a></td>
									<td class="user-name"><a href="/infoUser/100000" target="_blank">jwplayerplay01@gmail.com</a></td>
									<td class="video">46</td>
									<td class="play">108</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2021-07-14 10:24:42</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=jwplayerplay01@gmail.com&amp;password=1234567890" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100001</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100001" target="_blank">uncen</a></td>
									<td class="user-name"><a href="/infoUser/100001" target="_blank">ngocphuongsv1@gmail.com</a></td>
									<td class="video">7.02k</td>
									<td class="play">10.3M</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2021-07-16 07:03:11</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=ngocphuongsv1@gmail.com&amp;password=M@tkh@u991996" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100002</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100002" target="_blank">cen</a></td>
									<td class="user-name"><a href="/infoUser/100002" target="_blank">ngocphuongsv2@gmail.com</a></td>
									<td class="video">5.96k</td>
									<td class="play">2.96M</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2021-07-20 09:46:29</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=ngocphuongsv2@gmail.com&amp;password=M@tkh@u991996" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100003</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100003" target="_blank">123</a></td>
									<td class="user-name"><a href="/infoUser/100003" target="_blank">da99sare@gmail.com</a></td>
									<td class="video">406</td>
									<td class="play">60.96k</td>
		                            <td class="storage">earning 1</td>
		                            <td class="d-none">2021-09-01 10:11:46</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=da99sare@gmail.com&amp;password=M@tkh@u123" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100004</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100004" target="_blank">trkengplayrs@outlook.com</a></td>
									<td class="user-name"><a href="/infoUser/100004" target="_blank">trkengplayrs@outlook.com</a></td>
									<td class="video">11.8k</td>
									<td class="play">220.77M</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2021-09-11 13:30:28</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=trkengplayrs@outlook.com&amp;password=kajuqtistokim91923" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100005</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100005" target="_blank">srbinumin@outlook.com</a></td>
									<td class="user-name"><a href="/infoUser/100005" target="_blank">srbinumin@outlook.com</a></td>
									<td class="video">6.95k</td>
									<td class="play">98.8M</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2021-09-11 17:59:24</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=srbinumin@outlook.com&amp;password=kdjuaqiekiskoki1.231k" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100006</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100006" target="_blank">spaniuki@outlook.com</a></td>
									<td class="user-name"><a href="/infoUser/100006" target="_blank">spaniuki@outlook.com</a></td>
									<td class="video">30.37k</td>
									<td class="play">96.75M</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2021-09-11 18:02:57</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=spaniuki@outlook.com&amp;password=jkdlaiqueoqki.1221k3so" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100007</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100007" target="_blank">jakutimoki@gmail.com</a></td>
									<td class="user-name"><a href="/infoUser/100007" target="_blank">jakutimoki@gmail.com</a></td>
									<td class="video">6</td>
									<td class="play">17</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2021-09-12 07:20:18</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=jakutimoki@gmail.com&amp;password=akuqikostik" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100008</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100008" target="_blank">zhanghao00099@gmail.com</a></td>
									<td class="user-name"><a href="/infoUser/100008" target="_blank">zhanghao00099@gmail.com</a></td>
									<td class="video">161.61k</td>
									<td class="play">641.83M</td>
		                            <td class="storage">earning 1</td>
		                            <td class="d-none">2021-09-13 09:28:09</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=zhanghao00099@gmail.com&amp;password=Rd^0x09WaK139R" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100012</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100012" target="_blank">SHIGEO TOKUDA</a></td>
									<td class="user-name"><a href="/infoUser/100012" target="_blank">javhdstream@gmail.com</a></td>
									<td class="video">18.33k</td>
									<td class="play">14.75M</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2021-12-02 16:59:20</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=javhdstream@gmail.com&amp;password=Pin2601@@" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100026</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100026" target="_blank">Jessica</a></td>
									<td class="user-name"><a href="/infoUser/100026" target="_blank">jerich0@live.com</a></td>
									<td class="video">166</td>
									<td class="play">7</td>
		                            <td class="storage">earning 2</td>
		                            <td class="d-none">2021-12-12 05:45:06</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=jerich0@live.com&amp;password=Worddeader4arab" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100029</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100029" target="_blank">warrenbuffett678</a></td>
									<td class="user-name"><a href="/infoUser/100029" target="_blank">warrenbuffett678@gmail.com</a></td>
									<td class="video">1</td>
									<td class="play">2</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2021-12-12 08:27:57</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=warrenbuffett678@gmail.com&amp;password=Cuocdoilon1996" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100030</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100030" target="_blank">Kabir Khan</a></td>
									<td class="user-name"><a href="/infoUser/100030" target="_blank">uwatchfr@gmail.com</a></td>
									<td class="video">1</td>
									<td class="play">1</td>
		                            <td class="storage">earning 2</td>
		                            <td class="d-none">2021-12-12 08:28:49</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=uwatchfr@gmail.com&amp;password=ncge2xGFkEf4LeV" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100034</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100034" target="_blank">lk21</a></td>
									<td class="user-name"><a href="/infoUser/100034" target="_blank">ads@layarkaca21.com</a></td>
									<td class="video">58.11k</td>
									<td class="play">5.28M</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2021-12-12 17:07:00</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=ads@layarkaca21.com&amp;password=12qwaszx" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100043</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100043" target="_blank">theresa martin</a></td>
									<td class="user-name"><a href="/infoUser/100043" target="_blank">TheresaMartin5121@gmail.com</a></td>
									<td class="video">101k</td>
									<td class="play">10.23M</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2021-12-14 08:47:52</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=TheresaMartin5121@gmail.com&amp;password=Nhackhongloi1988@@@!" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100051</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100051" target="_blank">Oh-Dai Sun</a></td>
									<td class="user-name"><a href="/infoUser/100051" target="_blank">odaisun@yandex.ru</a></td>
									<td class="video">1</td>
									<td class="play">1</td>
		                            <td class="storage">earning 2</td>
		                            <td class="d-none">2021-12-15 07:04:57</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=odaisun@yandex.ru&amp;password=4GmhX53TLByvXZL" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100060</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100060" target="_blank">sexycandidgirls</a></td>
									<td class="user-name"><a href="/infoUser/100060" target="_blank">g.buk86@gmail.com</a></td>
									<td class="video">1</td>
									<td class="play">24</td>
		                            <td class="storage">earning 2</td>
		                            <td class="d-none">2021-12-16 18:18:56</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=g.buk86@gmail.com&amp;password=mossos187" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100081</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100081" target="_blank">aaaaaa</a></td>
									<td class="user-name"><a href="/infoUser/100081" target="_blank">vkfilmi@mail.ru</a></td>
									<td class="video">56.86k</td>
									<td class="play">14.29M</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2021-12-24 14:41:26</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=vkfilmi@mail.ru&amp;password=123456" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100082</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100082" target="_blank">Layarkaca21plus</a></td>
									<td class="user-name"><a href="/infoUser/100082" target="_blank">layarkaca21plus@gmail.com</a></td>
									<td class="video">0</td>
									<td class="play">0</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2021-12-24 15:32:08</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=layarkaca21plus@gmail.com&amp;password=Terus1969semprot" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100120</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100120" target="_blank">Eugen</a></td>
									<td class="user-name"><a href="/infoUser/100120" target="_blank">xaoc112@gmail.com</a></td>
									<td class="video">1.7k</td>
									<td class="play">581.53k</td>
		                            <td class="storage">earning 2</td>
		                            <td class="d-none">2021-12-27 21:13:51</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=xaoc112@gmail.com&amp;password=u6kJTx6MbPPuL3D" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100164</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100164" target="_blank">CP Media</a></td>
									<td class="user-name"><a href="/infoUser/100164" target="_blank">cpmedia@bk.ru</a></td>
									<td class="video">0</td>
									<td class="play">0</td>
		                            <td class="storage">earning 2</td>
		                            <td class="d-none">2022-01-05 06:12:49</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=cpmedia@bk.ru&amp;password=forum009" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100174</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100174" target="_blank">nhbui128</a></td>
									<td class="user-name"><a href="/infoUser/100174" target="_blank">nhbui128@gmail.com</a></td>
									<td class="video">3.7k</td>
									<td class="play">19.07M</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2022-01-13 23:58:47</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=nhbui128@gmail.com&amp;password=buithanhnha134" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100238</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100238" target="_blank">solarmovie37</a></td>
									<td class="user-name"><a href="/infoUser/100238" target="_blank">solarmovie37@gmail.com</a></td>
									<td class="video">30.13k</td>
									<td class="play">2.74M</td>
		                            <td class="storage">earning 2</td>
		                            <td class="d-none">2022-02-09 09:59:28</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=solarmovie37@gmail.com&amp;password=aliahmed" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100239</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100239" target="_blank">javhd</a></td>
									<td class="user-name"><a href="/infoUser/100239" target="_blank">xuongphimtv@gmail.com</a></td>
									<td class="video">48.23k</td>
									<td class="play">14.95M</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2022-02-10 08:42:21</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=xuongphimtv@gmail.com&amp;password=Kelangbat@331184" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100250</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100250" target="_blank">Nguyen Tan Tuan</a></td>
									<td class="user-name"><a href="/infoUser/100250" target="_blank">nguyentantuan217@gmail.com</a></td>
									<td class="video">2.86k</td>
									<td class="play">140.25k</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2022-02-18 07:22:10</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=nguyentantuan217@gmail.com&amp;password=r9k2ZzBr46ufuXj" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100282</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100282" target="_blank">sungnet</a></td>
									<td class="user-name"><a href="/infoUser/100282" target="_blank">seosungnet@gmail.com</a></td>
									<td class="video">8.85k</td>
									<td class="play">180.71k</td>
		                            <td class="storage">earning 1</td>
		                            <td class="d-none">2022-03-04 01:48:48</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=seosungnet@gmail.com&amp;password=5tHzyYdq8gEXUMK" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100308</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100308" target="_blank">gowgot</a></td>
									<td class="user-name"><a href="/infoUser/100308" target="_blank">gowgot@gmail.com</a></td>
									<td class="video">134</td>
									<td class="play">12</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2022-03-30 11:25:31</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=gowgot@gmail.com&amp;password=WERWOLF520" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100309</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100309" target="_blank">Nguyen ngan</a></td>
									<td class="user-name"><a href="/infoUser/100309" target="_blank">zohup.com@gmail.com</a></td>
									<td class="video">0</td>
									<td class="play">0</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2022-04-01 19:50:14</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=zohup.com@gmail.com&amp;password=aa@AA@123" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100311</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100311" target="_blank">javcl</a></td>
									<td class="user-name"><a href="/infoUser/100311" target="_blank">javclcom@gmail.com</a></td>
									<td class="video">41.72k</td>
									<td class="play">5.62M</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2022-04-03 03:02:02</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=javclcom@gmail.com&amp;password=X3rjndYSzkE9uMv" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100312</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100312" target="_blank">videohplayeriss</a></td>
									<td class="user-name"><a href="/infoUser/100312" target="_blank">videohplayeriss@outlook.com</a></td>
									<td class="video">2.22k</td>
									<td class="play">2</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2022-04-05 02:58:25</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=videohplayeriss@outlook.com&amp;password=taikso3912kiqoa.s.ea" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100327</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100327" target="_blank">heracx</a></td>
									<td class="user-name"><a href="/infoUser/100327" target="_blank">dimasvelani91@gmail.com</a></td>
									<td class="video">0</td>
									<td class="play">0</td>
		                            <td class="storage">earning 2</td>
		                            <td class="d-none">2022-04-13 03:19:56</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=dimasvelani91@gmail.com&amp;password=sase4645" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100344</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100344" target="_blank">Zakku Arai</a></td>
									<td class="user-name"><a href="/infoUser/100344" target="_blank">companypatch@gmail.com</a></td>
									<td class="video">41.37k</td>
									<td class="play">2.85M</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2022-04-21 09:09:27</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=companypatch@gmail.com&amp;password=hieu944874" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100396</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100396" target="_blank">Harry</a></td>
									<td class="user-name"><a href="/infoUser/100396" target="_blank">harry.williams.k.b@protonmail.com</a></td>
									<td class="video">35.62k</td>
									<td class="play">23.49M</td>
		                            <td class="storage">earning 2</td>
		                            <td class="d-none">2022-05-16 04:26:00</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=harry.williams.k.b@protonmail.com&amp;password=Fw[8dwwz7LfzRjnt" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100438</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100438" target="_blank">Gaduin Pauline</a></td>
									<td class="user-name"><a href="/infoUser/100438" target="_blank">info@irtvs24.com</a></td>
									<td class="video">729</td>
									<td class="play">63</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2022-06-10 08:53:26</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=info@irtvs24.com&amp;password=emin3m@Negar" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100471</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100471" target="_blank">Jet</a></td>
									<td class="user-name"><a href="/infoUser/100471" target="_blank">wmsextb@gmail.com</a></td>
									<td class="video">151.14k</td>
									<td class="play">72.29M</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2022-08-01 08:04:47</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=wmsextb@gmail.com&amp;password=4XymFzuzc2mPrzy" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100477</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100477" target="_blank">Nakao Sakuraba</a></td>
									<td class="user-name"><a href="/infoUser/100477" target="_blank">bushidomaster06@gmail.com</a></td>
									<td class="video">0</td>
									<td class="play">0</td>
		                            <td class="storage">earning 2</td>
		                            <td class="d-none">2022-08-06 14:46:38</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=bushidomaster06@gmail.com&amp;password=N4410@coy" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100481</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100481" target="_blank">peterikvetalii</a></td>
									<td class="user-name"><a href="/infoUser/100481" target="_blank">peterikvetalii@gmail.com</a></td>
									<td class="video">8.53k</td>
									<td class="play">4.3k</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2022-08-14 11:56:39</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=peterikvetalii@gmail.com&amp;password=Rung^12043" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100507</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100507" target="_blank">hesham</a></td>
									<td class="user-name"><a href="/infoUser/100507" target="_blank">freearabsexx.com@gmail.com</a></td>
									<td class="video">4.65k</td>
									<td class="play">45.51M</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2022-09-12 14:42:47</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=freearabsexx.com@gmail.com&amp;password=@@Free2023" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100515</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100515" target="_blank">phim13</a></td>
									<td class="user-name"><a href="/infoUser/100515" target="_blank">phim13.net@gmail.com</a></td>
									<td class="video">0</td>
									<td class="play">0</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2022-09-22 19:09:29</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=phim13.net@gmail.com&amp;password=truongtroy00" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100519</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100519" target="_blank">ama004921</a></td>
									<td class="user-name"><a href="/infoUser/100519" target="_blank">ama004921@gmail.com</a></td>
									<td class="video">0</td>
									<td class="play">0</td>
		                            <td class="storage">earning 2</td>
		                            <td class="d-none">2022-09-27 13:27:13</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=ama004921@gmail.com&amp;password=ama004921@gmail.com" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100528</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100528" target="_blank">CARLOS ARANA</a></td>
									<td class="user-name"><a href="/infoUser/100528" target="_blank">pelisplus.to@gmail.com</a></td>
									<td class="video">22.3k</td>
									<td class="play">322.14k</td>
		                            <td class="storage">earning 1</td>
		                            <td class="d-none">2022-10-05 04:50:39</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=pelisplus.to@gmail.com&amp;password=TYPteraware1" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100530</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100530" target="_blank">adultbook91</a></td>
									<td class="user-name"><a href="/infoUser/100530" target="_blank">adultbook91@gmail.com</a></td>
									<td class="video">397.75k</td>
									<td class="play">38.85k</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2022-10-06 07:16:36</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=adultbook91@gmail.com&amp;password=JHMh8BqFGmCm4mu" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100554</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100554" target="_blank">pioneering</a></td>
									<td class="user-name"><a href="/infoUser/100554" target="_blank">pioneering79@gmail.com</a></td>
									<td class="video">36.06k</td>
									<td class="play">175.69k</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2022-10-26 20:03:50</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=pioneering79@gmail.com&amp;password=tmusical2" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100578</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100578" target="_blank">Brian Smith</a></td>
									<td class="user-name"><a href="/infoUser/100578" target="_blank">kr3d0rk@gmail.com</a></td>
									<td class="video">0</td>
									<td class="play">0</td>
		                            <td class="storage">earning 2</td>
		                            <td class="d-none">2022-11-08 15:53:12</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=kr3d0rk@gmail.com&amp;password=Dafuq225" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100619</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100619" target="_blank">fullvoyeur</a></td>
									<td class="user-name"><a href="/infoUser/100619" target="_blank">adsfvcom@gmail.com</a></td>
									<td class="video">26.46k</td>
									<td class="play">94.58k</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2022-12-18 10:02:26</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=adsfvcom@gmail.com&amp;password=123ewqasD" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100629</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100629" target="_blank">KaidoItachi</a></td>
									<td class="user-name"><a href="/infoUser/100629" target="_blank">spamxxxjp@gmail.com</a></td>
									<td class="video">4</td>
									<td class="play">0</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2022-12-25 16:34:58</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=spamxxxjp@gmail.com&amp;password=Dkmvkl123" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100631</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100631" target="_blank">john conner</a></td>
									<td class="user-name"><a href="/infoUser/100631" target="_blank">johnconnerdotcom@gmail.com</a></td>
									<td class="video">0</td>
									<td class="play">0</td>
		                            <td class="storage">earning 2</td>
		                            <td class="d-none">2022-12-26 08:15:00</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=johnconnerdotcom@gmail.com&amp;password=123Ngu!@#" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100666</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100666" target="_blank">fastmovies</a></td>
									<td class="user-name"><a href="/infoUser/100666" target="_blank">fastmovies.to@gmail.com</a></td>
									<td class="video">7.47k</td>
									<td class="play">80.46k</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2023-01-17 08:33:09</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=fastmovies.to@gmail.com&amp;password=fastmovies" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user odd">
									<td class="userID sorting_1 text-teal-500">100680</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100680" target="_blank">javm</a></td>
									<td class="user-name"><a href="/infoUser/100680" target="_blank">javmostpost@gmail.com</a></td>
									<td class="video">117.41k</td>
									<td class="play">25.54M</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2023-01-31 09:27:39</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=javmostpost@gmail.com&amp;password=DestinyZaki12" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr><tr class="row-user even">
									<td class="userID sorting_1 text-teal-500">100696</td>
									<td class="user-name col-lg-2"><a href="/infoUser/100696" target="_blank">Alisson Nier</a></td>
									<td class="user-name"><a href="/infoUser/100696" target="_blank">nierautomata2b01@gmail.com</a></td>
									<td class="video">910</td>
									<td class="play">36.9k</td>
		                            <td class="storage">no</td>
		                            <td class="d-none">2023-02-09 17:31:38</td>
									<td class="premium d-none" status="1">0</td>
																		<td><a href=""><button class="rounded-lg px-4 py-1 bg-amber-500 text-md">Ban</button></a></td>
									<td><button class="rounded-lg px-4 py-1 bg-red-500 text-md" onclick="delete_user(this)">Delete</button></td>
		                            <td>
	                            		<a class="rounded-lg px-4 py-1.5 bg-indigo-500 text-md" href="https://turboviplay.com/loginUserAdmin?keyLogin=eigjcnehwjru34&amp;email=nierautomata2b01@gmail.com&amp;password=Alininja2777" target="_blank">Login
	                            		</a>
		                            </td>
									<td class="text-teal-500">note</td>
								</tr></tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="encoder" class="tab-content-video">
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
                <div id="download" class="tab-content-video">
                  <div class="rounded-xl">
                    <div class="relative rounded-xl bg-[#202940]">
                      <div class="px-2 pt-4 md:p-4">
                        <div class="mb-2">
                          <h5 class="text-emerald-400">
                            Download: 11sv
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
                            <table id="table-download" datatable data-page-size="10"
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
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer">
                                    Space
                                  </th>

                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer">
                                    In
                                  </th>
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer">
                                    Out
                                  </th>
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer">
                                    Time Active
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="odd">
                                  <td class="sorting_1">1</td>
                                  <td class="domain text-emerald-400" onclick="edit(this)">d01</td>
                                  <td class="ip text-emerald-400">142.132.219.237</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>1702599674</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">2</td>
                                  <td class="domain text-emerald-400" onclick="edit(this)">d02</td>
                                  <td class="ip text-emerald-400">116.202.224.4</td>
                                  <td>0</td>
                                  <td>0.01</td>
                                  <td>0.01</td>
                                  <td>1702599613</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">3</td>
                                  <td class="domain text-emerald-400" onclick="edit(this)">d03</td>
                                  <td class="ip text-emerald-400">88.99.24.121</td>
                                  <td>0.03</td>
                                  <td>0.9</td>
                                  <td>260.62</td>
                                  <td>1684287674</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">4</td>
                                  <td class="domain text-emerald-400" onclick="edit(this)">d04</td>
                                  <td class="ip text-emerald-400">176.9.32.46</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>1702598833</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">5</td>
                                  <td class="domain text-emerald-400" onclick="edit(this)">d05</td>
                                  <td class="ip text-emerald-400">148.251.88.53</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>1702599374</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">6</td>
                                  <td class="domain text-emerald-400" onclick="edit(this)">d06</td>
                                  <td class="ip text-emerald-400">148.251.14.180</td>
                                  <td>0.01</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>1702599374</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">7</td>
                                  <td class="domain text-emerald-400" onclick="edit(this)">d07</td>
                                  <td class="ip text-emerald-400">138.201.206.53</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>1702599253</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">8</td>
                                  <td class="domain text-emerald-400" onclick="edit(this)">d08</td>
                                  <td class="ip text-emerald-400">168.119.67.246</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>1702599674</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">9</td>
                                  <td class="domain text-emerald-400" onclick="edit(this)">d09</td>
                                  <td class="ip text-emerald-400">195.201.59.221</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>1702598654</td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">10</td>
                                  <td class="domain text-emerald-400" onclick="edit(this)">d10</td>
                                  <td class="ip text-emerald-400">46.4.12.117</td>
                                  <td>0</td>
                                  <td>0.02</td>
                                  <td>0.03</td>
                                  <td>1702599434</td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">11</td>
                                  <td class="domain text-emerald-400" onclick="edit(this)">d11</td>
                                  <td class="ip text-emerald-400">195.201.60.14</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>1702598654</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="stream" class="tab-content-video">
                  <div class="rounded-xl">
                    <div class="relative rounded-xl bg-[#202940]">
                      <div class="px-2 pt-4 md:p-4">
                        <div class="mb-2">
                          <h5 class="text-emerald-400">
                            Stream : 50
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
                            <table id="table-sto" datatable data-page-size="10"
                              class="overflow-y-clip response w-full min-w-max text-white text-left border-b border-gray-100/80">
                              <thead>
                                <tr class="bg-slate-900 transition-colors text-md text-center">
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer text-center">
                                    ID
                                  </th>
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer text-center">
                                    ID SV
                                  </th>
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer">
                                    Domain
                                  </th>
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2">
                                    IPV4
                                  </th>
                                  <th class=" before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer">
                                    Password
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
                                    Provider
                                  </th>
                                  <th class="before:!bottom-2 after:!bottom-2 pl-2 py-2 cursor-pointer">
                                    Status
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="odd">
                                  <td class="sorting_1">21</td>
                                  <td>10924968</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss21</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.58.233</td>
                                  <td class="ipv6 text-emerald-400">_4Fcm,wNf8p2</td>
                                  <td class="space">14000</td>
                                  <td>7168</td>
                                  <td class="BW">150</td>
                                  <td>128.5</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">22</td>
                                  <td>10924969</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss22</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.58.232</td>
                                  <td class="ipv6 text-emerald-400">5QqX36Dfx%,j</td>
                                  <td class="space">14000</td>
                                  <td>11264</td>
                                  <td class="BW">150</td>
                                  <td>134.4</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">23</td>
                                  <td>10924970</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss23</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.58.231</td>
                                  <td class="ipv6 text-emerald-400">v4r_95MFt~Hy</td>
                                  <td class="space">14000</td>
                                  <td>13312</td>
                                  <td class="BW">150</td>
                                  <td>116.2</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">24</td>
                                  <td>10924971</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss24</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.58.230</td>
                                  <td class="ipv6 text-emerald-400">83k-pKBx^65s</td>
                                  <td class="space">14000</td>
                                  <td>11264</td>
                                  <td class="BW">150</td>
                                  <td>129.1</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">25</td>
                                  <td>10924973</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss25</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.58.229</td>
                                  <td class="ipv6 text-emerald-400">@yS42c53^Mqx</td>
                                  <td class="space">14000</td>
                                  <td>11264</td>
                                  <td class="BW">150</td>
                                  <td>131.3</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">26</td>
                                  <td>648655</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss26</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.235.198</td>
                                  <td class="ipv6 text-emerald-400">^9qSKce5_s6Y</td>
                                  <td class="space">14000</td>
                                  <td>9011.2</td>
                                  <td class="BW">100</td>
                                  <td>103</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">27</td>
                                  <td>648600</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss27</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.235.87</td>
                                  <td class="ipv6 text-emerald-400">chGvVz36x_9-</td>
                                  <td class="space">14000</td>
                                  <td>13312</td>
                                  <td class="BW">100</td>
                                  <td>127.3</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">29</td>
                                  <td>648594</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss29</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.62.23</td>
                                  <td class="ipv6 text-emerald-400">Ra,s8t%3Mj_2</td>
                                  <td class="space">14000</td>
                                  <td>10137.6</td>
                                  <td class="BW">100</td>
                                  <td>96.5</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">30</td>
                                  <td>648593</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss30</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.235.79</td>
                                  <td class="ipv6 text-emerald-400">^2Y%9Q~5bjth</td>
                                  <td class="space">14000</td>
                                  <td>11264</td>
                                  <td class="BW">100</td>
                                  <td>129.5</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">31</td>
                                  <td>67212</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss31</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.62.25</td>
                                  <td class="ipv6 text-emerald-400">4p85qRd~z^V@</td>
                                  <td class="space">14000</td>
                                  <td>12288</td>
                                  <td class="BW">100</td>
                                  <td>132.1</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">32</td>
                                  <td>67201</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss32</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.62.18</td>
                                  <td class="ipv6 text-emerald-400">@8kp-4vzVK3T</td>
                                  <td class="space">14000</td>
                                  <td>13312</td>
                                  <td class="BW">100</td>
                                  <td>120.4</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">34</td>
                                  <td>67195</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss34</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.235.77</td>
                                  <td class="ipv6 text-emerald-400">@dq4eX6.kU5w</td>
                                  <td class="space">14000</td>
                                  <td>12288</td>
                                  <td class="BW">100</td>
                                  <td>132</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">35</td>
                                  <td>21531</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss35</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">95.168.180.72</td>
                                  <td class="ipv6 text-emerald-400">vB3d~m8y@-R4</td>
                                  <td class="space">14000</td>
                                  <td>13312</td>
                                  <td class="BW">100</td>
                                  <td>123.8</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">36</td>
                                  <td>648574</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss36</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.235.89</td>
                                  <td class="ipv6 text-emerald-400">B4fv26_nyX~s</td>
                                  <td class="space">14000</td>
                                  <td>13312</td>
                                  <td class="BW">100</td>
                                  <td>123.1</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">37</td>
                                  <td>648570</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss37</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.235.76</td>
                                  <td class="ipv6 text-emerald-400">T3k6@v8ybG2~</td>
                                  <td class="space">14000</td>
                                  <td>11264</td>
                                  <td class="BW">100</td>
                                  <td>132.9</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">38</td>
                                  <td>648568</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss38</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.235.90</td>
                                  <td class="ipv6 text-emerald-400">D-6kX%42Fjfe</td>
                                  <td class="space">14000</td>
                                  <td>13312</td>
                                  <td class="BW">100</td>
                                  <td>126.7</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">39</td>
                                  <td>648563</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss39</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.235.85</td>
                                  <td class="ipv6 text-emerald-400">pGJq28x^5d,~</td>
                                  <td class="space">14000</td>
                                  <td>12288</td>
                                  <td class="BW">100</td>
                                  <td>130.4</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">40</td>
                                  <td>648561</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss40</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.236.56</td>
                                  <td class="ipv6 text-emerald-400">cC,v@j~3t52Z</td>
                                  <td class="space">14000</td>
                                  <td>12288</td>
                                  <td class="BW">100</td>
                                  <td>131.4</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">41</td>
                                  <td>648558</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss41</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.235.82</td>
                                  <td class="ipv6 text-emerald-400">6mrfUh94F%8@</td>
                                  <td class="space">14000</td>
                                  <td>13312</td>
                                  <td class="BW">100</td>
                                  <td>125.8</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">42</td>
                                  <td>648557</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss42</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.235.78</td>
                                  <td class="ipv6 text-emerald-400">_arm4XR2Z9%p</td>
                                  <td class="space">14000</td>
                                  <td>13312</td>
                                  <td class="BW">100</td>
                                  <td>128.8</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">43</td>
                                  <td>648556</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss43</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.235.84</td>
                                  <td class="ipv6 text-emerald-400">u_a5njv43JX-</td>
                                  <td class="space">14000</td>
                                  <td>13312</td>
                                  <td class="BW">100</td>
                                  <td>125.2</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">55</td>
                                  <td>26383</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss55</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.19.60.135</td>
                                  <td class="ipv6 text-emerald-400">DEvw83,m9-bY</td>
                                  <td class="space">14000</td>
                                  <td>13312</td>
                                  <td class="BW">150</td>
                                  <td>119.2</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">76</td>
                                  <td>627990</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss76</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.39.210</td>
                                  <td class="ipv6 text-emerald-400">jMsy2%45~gAq</td>
                                  <td class="space">14000</td>
                                  <td>9830.4</td>
                                  <td class="BW">100</td>
                                  <td>126.6</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">77</td>
                                  <td>87260</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss77</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.36.115</td>
                                  <td class="ipv6 text-emerald-400">Za2W9w4chb~,</td>
                                  <td class="space">14000</td>
                                  <td>11264</td>
                                  <td class="BW">100</td>
                                  <td>125.2</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">78</td>
                                  <td>107227</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss78</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.36.116</td>
                                  <td class="ipv6 text-emerald-400">y-b4H2pW,9Bc</td>
                                  <td class="space">14000</td>
                                  <td>10240</td>
                                  <td class="BW">100</td>
                                  <td>127</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">80</td>
                                  <td>631014</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss80</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.19.60.132</td>
                                  <td class="ipv6 text-emerald-400">mx5kD_8v6.%T</td>
                                  <td class="space">14000</td>
                                  <td>11264</td>
                                  <td class="BW">100</td>
                                  <td>130.6</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">81</td>
                                  <td>631021</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss81</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.63.136</td>
                                  <td class="ipv6 text-emerald-400">wjB9,2U8ye.f</td>
                                  <td class="space">14000</td>
                                  <td>10035.2</td>
                                  <td class="BW">100</td>
                                  <td>122.5</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">82</td>
                                  <td>631023</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss82</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.63.106</td>
                                  <td class="ipv6 text-emerald-400">2GCax.fR6@y8</td>
                                  <td class="space">14000</td>
                                  <td>10240</td>
                                  <td class="BW">100</td>
                                  <td>127.7</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">83</td>
                                  <td>631015</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss83</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.63.131</td>
                                  <td class="ipv6 text-emerald-400">hs9%^JU3a5~u</td>
                                  <td class="space">14000</td>
                                  <td>11264</td>
                                  <td class="BW">100</td>
                                  <td>133.3</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">84</td>
                                  <td>631011</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss84</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.61.205</td>
                                  <td class="ipv6 text-emerald-400">3dwh-W48T~ke</td>
                                  <td class="space">14000</td>
                                  <td>11264</td>
                                  <td class="BW">100</td>
                                  <td>129.3</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">85</td>
                                  <td>631022</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss85</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.62.79</td>
                                  <td class="ipv6 text-emerald-400">6uLz-Yq^5fw8</td>
                                  <td class="space">14000</td>
                                  <td>10035.2</td>
                                  <td class="BW">100</td>
                                  <td>127.7</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">86</td>
                                  <td>53540</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss86</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.35.168</td>
                                  <td class="ipv6 text-emerald-400">wv9r8V%D4,ez</td>
                                  <td class="space">14000</td>
                                  <td>11264</td>
                                  <td class="BW">100</td>
                                  <td>127</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">87</td>
                                  <td>71352</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss87</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.35.135</td>
                                  <td class="ipv6 text-emerald-400">xH7RlkzMPOoSHbCyiijZvDx4t4s19ImgEQ2</td>
                                  <td class="space">15000</td>
                                  <td>14336</td>
                                  <td class="BW">100</td>
                                  <td>122.9</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">88</td>
                                  <td>81631</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss88</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.35.248</td>
                                  <td class="ipv6 text-emerald-400">PnIejcgLncKXhtZSXsJdlIkfJZxQeXsh9VR</td>
                                  <td class="space">15000</td>
                                  <td>14336</td>
                                  <td class="BW">100</td>
                                  <td>120</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">89</td>
                                  <td>108851</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss89</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.35.239</td>
                                  <td class="ipv6 text-emerald-400">ZYau2jYXXdBORTd7ix1SdnOhwpe45G7rlEB</td>
                                  <td class="space">15000</td>
                                  <td>13312</td>
                                  <td class="BW">100</td>
                                  <td>131.7</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">90</td>
                                  <td>631024</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss90</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.63.108</td>
                                  <td class="ipv6 text-emerald-400">2dhOGFPsQW5uDwZ4xaH67WdNk8VzC1vpTzQ</td>
                                  <td class="space">15000</td>
                                  <td>14336</td>
                                  <td class="BW">100</td>
                                  <td>123.8</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">91</td>
                                  <td>631031</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss91</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.33.184</td>
                                  <td class="ipv6 text-emerald-400">qGNrb7pY2OoYOr5ijCPU0VgwsZPeseSFFCG</td>
                                  <td class="space">15000</td>
                                  <td>14336</td>
                                  <td class="BW">100</td>
                                  <td>127.6</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">92</td>
                                  <td>82957</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss92</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.239.152</td>
                                  <td class="ipv6 text-emerald-400">c_5nfWExU4%3</td>
                                  <td class="space">14000</td>
                                  <td>12288</td>
                                  <td class="BW">100</td>
                                  <td>134.6</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">93</td>
                                  <td>648764</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss93</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.35.187</td>
                                  <td class="ipv6 text-emerald-400">xfOaukZegqWXFJ8jH9UIASPURmvqSXCXQZo</td>
                                  <td class="space">15000</td>
                                  <td>14336</td>
                                  <td class="BW">100</td>
                                  <td>118.3</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">94</td>
                                  <td>648760</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss94</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.58.106</td>
                                  <td class="ipv6 text-emerald-400">t3D-2~6vC4xk</td>
                                  <td class="space">14000</td>
                                  <td>10035.2</td>
                                  <td class="BW">100</td>
                                  <td>125.9</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">95</td>
                                  <td>648863</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss95</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.58.103</td>
                                  <td class="ipv6 text-emerald-400">iFNaqdEPR8OZrVV1Dnc7pymlqF9dcL6vr2K</td>
                                  <td class="space">15000</td>
                                  <td>14336</td>
                                  <td class="BW">100</td>
                                  <td>127.6</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">96</td>
                                  <td>10924974</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss96</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.58.228</td>
                                  <td class="ipv6 text-emerald-400">zte@925CW4,c</td>
                                  <td class="space">14000</td>
                                  <td>11264</td>
                                  <td class="BW">100</td>
                                  <td>127.3</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">97</td>
                                  <td>10924975</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss97</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.58.227</td>
                                  <td class="ipv6 text-emerald-400">e269d4zTB^@h</td>
                                  <td class="space">14000</td>
                                  <td>10240</td>
                                  <td class="BW">100</td>
                                  <td>131.7</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">98</td>
                                  <td>10924976</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss98</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.58.226</td>
                                  <td class="ipv6 text-emerald-400">z5vq@6d_9tRA</td>
                                  <td class="space">14000</td>
                                  <td>10035.2</td>
                                  <td class="BW">100</td>
                                  <td>126.3</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">99</td>
                                  <td>11587890</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss99</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.235.144</td>
                                  <td class="ipv6 text-emerald-400">xsdE^5_8eU2J</td>
                                  <td class="space">14000</td>
                                  <td>10137.6</td>
                                  <td class="BW">100</td>
                                  <td>126.6</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">100</td>
                                  <td>11587893</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss100</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.235.142</td>
                                  <td class="ipv6 text-emerald-400">H29Qk-.g5zq8</td>
                                  <td class="space">14000</td>
                                  <td>11264</td>
                                  <td class="BW">100</td>
                                  <td>127.3</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">102</td>
                                  <td>67194</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss102</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.62.143</td>
                                  <td class="ipv6 text-emerald-400">e2t6x~D35g@V</td>
                                  <td class="space">14000</td>
                                  <td>9523.2</td>
                                  <td class="BW">100</td>
                                  <td>127.8</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">104</td>
                                  <td>67199</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss104</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.62.140</td>
                                  <td class="ipv6 text-emerald-400">jK5hD3%48-yp</td>
                                  <td class="space">14000</td>
                                  <td>9830.4</td>
                                  <td class="BW">100</td>
                                  <td>126.6</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="odd">
                                  <td class="sorting_1">105</td>
                                  <td>10843225</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss105</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.236.209</td>
                                  <td class="ipv6 text-emerald-400">jsuDy-6.H3h2</td>
                                  <td class="space">14000</td>
                                  <td>10137.6</td>
                                  <td class="BW">100</td>
                                  <td>124.2</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                                <tr class="even">
                                  <td class="sorting_1">107</td>
                                  <td>10858402</td>
                                  <td class="domain" onclick="edit(this)">
                                    <a class="text-emerald-400">ss107</a>
                                  </td>
                                  <td class="ipv4 text-emerald-400">23.106.236.206</td>
                                  <td class="ipv6 text-emerald-400">yc2s8Y,gL^~3</td>
                                  <td class="space">14000</td>
                                  <td>10035.2</td>
                                  <td class="BW">100</td>
                                  <td>129</td>
                                  <td class="provider">LSW_UK</td>
                                  <td class="Status d-flex justify-content-center align-items-center">
                                    <input navbarfixed="" class="rounded-xl duration-200 ease-in-out after:rounded-full after:shadow-2xl 
                                                         after:duration-200 checked:after:translate-x-5 h-5 relative 
                                                         float-left mt-1 mx-3 w-12 cursor-pointer appearance-none border
                                                         border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain 
                                                         bg-left bg-no-repeat align-top transition-all after:absolute
                                                         after:top-px after:h-4 after:w-4 after:translate-x-0.5 after:bg-white 
                                                         after:content-[''] checked:border-green-500/95 checked:bg-green-500/95 
                                                         checked:bg-none checked:bg-right" type="checkbox">
                                  </td>
                                </tr>
                              </tbody>
                            </table>
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
<!-- plugin for scrollbar  -->
<script src="../../assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- main script file  -->
<script src="../..assets/js/argon-dashboard-tailwind.js?v=1.1.8" async></script>
<script src="../../assets/datatable/datatables.min.js"></script>
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
            scrollY: "calc(100vh - 24em)",
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
    $('#sto').show();

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