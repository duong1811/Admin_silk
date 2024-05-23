<!-- sidenav  -->
<aside
  class="sticky top-0 inset-x-0 flex-wrap items-center justify-between block p-0 my-0
         antialiased transition-transform duration-200 -translate-x-full border-0 shadow-xl
         ease-nav-brand z-10 xl:mx-6 rounded-lg xl:left-0 xl:translate-x-0 bg-[#202940]"
   aria-expanded="false">
  <div class="h-19 hidden">
    <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-white text-slate-400 xl:hidden"
      sidenav-close></i>
    <a class="flex px-6 py-4 m-0 text-sm whitespace-nowrap items-center" href="" target="_blank">
      <img src="../assets/img/logo3.png"
        class="brightness-150	h-full max-w-full transition-all duration-200 ease-nav-brand max-h-12"
        alt="main_logo" />
      <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">
        <img src="../assets/img/name-web3.png"
        class="brightness-150	h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8"
        alt="main_logo" />
      </span>
    </a>
  </div>
  <hr class="hidden h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent border-none" />

  <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
    <ul class="flex flex-row pl-0 mb-0">
      <li class="my-1.5 w-full">
        <a class="menu-sidebar py-1.5 text-white opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700"
          href="/dashboard">
          <div class="mr-1 flex h-4 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <i class="material-icons opacity-1">dashboard</i>
          </div>
          <span class="ml-1 duration-300 opacity-1 pointer-events-none ease" name="dashboard">Dashboard</span>
        </a>
      </li>

      <li class="my-1.5 w-full">
        <a class="menu-sidebar text-white opacity-80 py-1.5 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap font-semibold rounded-lg px-4 hover:bg-slate-900 duration-300"
          href="javascript:;" dropdown-trigger aria-expanded="false">
          <div
            class="mr-1 flex h-4 w-4 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
            <i class="material-icons opacity-1">mail</i>
          </div>
          <span class="ml-1 duration-300 opacity-1 pointer-events-none ease" name="email">Mail</span>
        </a>
        <ul class="text-sm transform-dropdown bg-[#202940] shadow-lg shadow-slate-900 duration-250 min-w-48 pointer-events-none absolute top-10 z-30 
 origin-top list-none rounded-lg border-none bg-clip-padding pr-2 py-2 text-left text-slate-500 opacity-0 transition-all sm:-mr-6 
 lg:absolute lg:left-auto lg:block lg:cursor-pointer" dropdown-menu>
          <li class="my-1.5 w-full">
            <a class="menu-sidebar text-white opacity-80 py-1.5 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap font-semibold rounded-lg px-4 hover:bg-slate-900 duration-300"
              href="/setting">
              <div class="mr-1 flex h-4 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <i class="material-icons opacity-1">commit</i>
              </div>
              <span class="ml-1 duration-300 opacity-1 pointer-events-none ease" name="setting">Mail Box</span>
            </a>
          </li>
          <li class="my-1.5 w-full">
            <a class="menu-sidebar text-white opacity-80 py-1.5 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap font-semibold rounded-lg px-4 hover:bg-slate-900 duration-300"
              href="/setting">
              <div class="mr-1 flex h-4 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <i class="material-icons opacity-1">commit</i>
              </div>
              <span class="ml-1 duration-300 opacity-1 pointer-events-none ease" name="setting">Email</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="my-1.5 w-full">
        <a class="menu-sidebar text-white opacity-80 py-1.5 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap font-semibold rounded-lg px-4 hover:bg-slate-900 duration-300"
          href="/compute">
          <div class="mr-1 flex h-4 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <i class="material-icons opacity-1">computer</i>
          </div>
          <span class="ml-1 duration-300 opacity-1 pointer-events-none ease" name="compute">Compute</span>
        </a>
      </li>
      <li class="my-1.5 w-full">
        <a class="menu-sidebar text-white opacity-80 py-1.5 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap font-semibold rounded-lg px-4 hover:bg-slate-900 duration-300"
          href="/statistic">
          <div class="mr-1 flex h-4 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <i class="material-icons opacity-1">analytics</i>
          </div>
          <span class="ml-1 duration-300 opacity-1 pointer-events-none ease" name="statistic">Statistic</span>
        </a>
      </li>
      <li class="my-1.5 w-full">
        <a class="menu-sidebar text-white opacity-80 py-1.5 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap font-semibold rounded-lg px-4 hover:bg-slate-900 duration-300"
          href="javascript:;"  dropdown-trigger aria-expanded="false">
          <div class="mr-1 flex h-4 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <i class="material-icons opacity-1">sync_alt</i>
          </div>
          <span class="ml-1 duration-300 opacity-1 pointer-events-none ease" name="task">Manage Task</span>
        </a>
        <ul class="text-sm transform-dropdown bg-[#202940] shadow-lg shadow-slate-900 duration-250 min-w-48 pointer-events-none absolute top-10 z-20
 origin-top list-none rounded-lg border-none bg-clip-padding pr-2 py-2 text-left text-slate-500 opacity-0 transition-all sm:-mr-6 
 lg:absolute lg:left-auto lg:block lg:cursor-pointer" dropdown-menu>
          <li class="my-1.5 w-full">
            <a class="menu-sidebar text-white opacity-80 py-1.5 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap font-semibold rounded-lg
px-4 hover:bg-slate-900 duration-300"
              href="/encoding-task">
              <div class="mr-1 flex h-4 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <i class="material-icons opacity-1">commit</i>
              </div>
              <span class="ml-1 duration-300 opacity-1 pointer-events-none ease" name="encoding-task">Encoding Task</span>
            </a>
          </li>
          <li class="my-1.5 w-full">
            <a class="menu-sidebar text-white opacity-80 py-1.5 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap font-semibold rounded-lg px-4 hover:bg-slate-900 duration-300"
              href="/setting">
              <div class="mr-1 flex h-4 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <i class="material-icons opacity-1">commit</i>
              </div>
              <span class="ml-1 duration-300 opacity-1 pointer-events-none ease" name="setting">Trasfer Task</span>
            </a>
          </li>
          <li class="my-1.5 w-full">
            <a class="menu-sidebar text-white opacity-80 py-1.5 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap font-semibold rounded-lg px-4 hover:bg-slate-900 duration-300"
              href="/setting">
              <div class="mr-1 flex h-4 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <i class="material-icons opacity-1">commit</i>
              </div>
              <span class="ml-1 duration-300 opacity-1 pointer-events-none ease" name="setting">Torrent Task</span>
            </a>
          </li>
          <li class="my-1.5 w-full">
            <a class="menu-sidebar text-white opacity-80 py-1.5 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap font-semibold rounded-lg px-4 hover:bg-slate-900 duration-300"
              href="/setting">
              <div class="mr-1 flex h-4 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <i class="material-icons opacity-1">commit</i>
              </div>
              <span class="ml-1 duration-300 opacity-1 pointer-events-none ease" name="setting">Stream Task</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="my-1.5 w-full">
        <a class="menu-sidebar text-white opacity-80 py-1.5 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap font-semibold rounded-lg px-4 hover:bg-slate-900 duration-300"
          href="/user">
          <div class="mr-1 flex h-4 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <i class="material-icons opacity-1">person</i>
          </div>
          <span class="ml-1 duration-300 opacity-1 pointer-events-none ease" name="user">User</span>
        </a>
      </li>

      <li class="my-1.5 w-full">
        <a class="menu-sidebar text-white opacity-80 py-1.5 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap font-semibold rounded-lg px-4 hover:bg-slate-900 duration-300"
          href="javascript:;"  dropdown-trigger aria-expanded="false">
          <div class="mr-1 flex h-4 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <i class="material-icons opacity-1">support_agent</i>
          </div>
          <span class="ml-1 duration-300 opacity-1 pointer-events-none ease" name="support">Support</span>
        </a>
        <ul class="text-sm transform-dropdown bg-[#202940] shadow-lg shadow-slate-900 duration-250 min-w-48 pointer-events-none absolute top-10 z-30
 origin-top list-none rounded-lg border-none bg-clip-padding pr-2 py-2 text-left text-slate-500 opacity-0 transition-all sm:-mr-6 
 lg:absolute lg:left-auto lg:block lg:cursor-pointer" dropdown-menu>
          <li class="my-1.5 w-full">
            <a class="menu-sidebar text-white opacity-80 py-1.5 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap font-semibold rounded-lg px-4 hover:bg-slate-900 duration-300"
              href="/support/cases">
              <div class="mr-1 flex h-4 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <i class="material-icons opacity-1">commit</i>
              </div>
              <span class="ml-1 duration-300 opacity-1 pointer-events-none ease" name="cases">Cases</span>
            </a>
          </li>
          <li class="my-1.5 w-full">
            <a class="menu-sidebar text-white opacity-80 py-1.5 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap font-semibold rounded-lg px-4 hover:bg-slate-900 duration-300"
              href="/support/report">
              <div class="mr-1 flex h-4 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <i class="material-icons opacity-1">commit</i>
              </div>
              <span class="ml-1 duration-300 opacity-1 pointer-events-none ease" name="report">Reports</span>
            </a>
          </li>
          <li class="my-1.5 w-full">
            <a class="menu-sidebar text-white opacity-80 py-1.5 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap font-semibold rounded-lg px-4 hover:bg-slate-900 duration-300"
              href="/support/customDomain">
              <div class="mr-1 flex h-4 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <i class="material-icons opacity-1">commit</i>
              </div>
              <span class="ml-1 duration-300 opacity-1 pointer-events-none ease" name="customDomain">Custom Domain</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="my-1.5 w-full">
        <a class="menu-sidebar text-white opacity-80 py-1.5 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap font-semibold rounded-lg px-4 hover:bg-slate-900 duration-300"
          href="">
          <div class="mr-1 flex h-4 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <i class="material-icons opacity-1">edit_note</i>
          </div>
          <span class="ml-1 duration-300 opacity-1 pointer-events-none ease">Advert Manage</span>
        </a>
      </li>
        <li class="my-1.5 w-full">
        <a class="menu-sidebar text-white opacity-80 py-1.5 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap font-semibold rounded-lg px-4 hover:bg-slate-900 duration-300"
          href="">
          <div class="mr-1 flex h-4 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <i class="material-icons opacity-1">payments</i>
          </div>
          <span class="ml-1 duration-300 opacity-1 pointer-events-none ease">Payment</span>
        </a>
      </li>
      <li class="my-1.5 w-full">
        <a class="menu-sidebar text-white opacity-80 py-1.5 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap font-semibold rounded-lg px-4 hover:bg-slate-900 duration-300"
          href="">
          <div class="mr-1 flex h-4 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <i class="material-icons opacity-1">error</i>
          </div>
          <span class="ml-1 duration-300 opacity-1 pointer-events-none ease">Error</span>
        </a>
      </li>
    </ul>
  </div>
</aside>

<!-- end sidenav -->