@auth
    @else
    <div class="max-w-screen-xl flex flex-wrap justify-end mx-auto p-1 pr-4 xl:pr-0">
        <a href="/login">Login</a>
    </div>
@endauth
{{-- <nav class="bg-sky-900 border-gray-200 dark:bg-gray-900 z-50 sticky top-0   ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-4 px-4 xl:px-0">
        <a href="/" class="flex items-center">
            <img src="{{asset('images/stuworks/logo-1-dark.svg')}}" class="h-8 mr-3" alt="Stuworks.Logo" />
        </a>
        <div x-data="{ open: false }" class="flex md:order-2 relative">
            @auth
            <div class="relative group">
                <button type="button"
                    class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded" src="{{ asset('images/avatars/avatar.png') }}" alt="user avatar">
                </button>
                <div class="z-50 hidden peer-focus:block my-4 text-base list-none divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{auth()->user()->first_name}}
                            {{auth()->user()->full_name}}</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{auth()->user()->email}}</span>
                    </div>
                    <ul class="py-0" aria-labelledby="user-menu-button">
                        <li>
                            <form class="inline" method="POST" action="/logout">
                                @csrf
                                <button type="submit"
                                    class="block w-full px-4 py-2 rounded-b-lg text-sm text-gray-700 hover:bg-red-300 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                    out</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            @else
            <a href="/get-started"
                class="text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">Get
                started</a>
            @endauth
            <button data-collapse-toggle="navbar-cta" type="button"
                class="gajelas inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-cta" aria-expanded="false" :aria-expanded="open.toString()">
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Open main menu</span>
            </button>
        </div>
        <div class="iya hidden relative items-center justify-between w-full md:flex md:w-auto md:order-1 group"
            id="navbar-cta">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 md dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
                :class="{ 'hidden': !open }">
                <li>
                    <a href="/"
                        class="{{ request()->is('/') ? 'active' : 'text-white md:hover:text-cyan-300 md:dark:hover:text-cyan-300 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }} block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent  md:p-0 "
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/listings/manage"
                        class="{{ request()->is('listings/manage') ? 'active' : 'text-white md:hover:text-cyan-300 md:dark:hover:text-cyan-300 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }} block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent  md:p-0 ">Manage
                        Job</a>
                </li>
                <li>
                    <a href="/listings/create"
                        class="{{ request()->is('listings/create') ? 'active' : 'text-white md:hover:text-cyan-300 md:dark:hover:text-cyan-300 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }} block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent  md:p-0 ">Post
                        Job</a>
                </li>
                <li>
                    <a href="/profile/about"
                        class="{{ request()->is('listings/about') ? 'active' : 'text-white md:hover:text-cyan-300 md:dark:hover:text-cyan-300 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }}block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent  md:p-0 ">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}
<header class="flex flex-wrap md:justify-start md:flex-nowrap z-[500] w-full text-sm">
  <nav class="mt-6 relative max-w-7xl w-full bg-white border border-gray-200 rounded-[36px] mx-2 py-3 px-4 md:flex md:items-center md:justify-between md:py-0 md:px-6 lg:px-8 xl:mx-auto dark:bg-gray-800 dark:border-gray-700" aria-label="Global">
    <div class="flex items-center justify-between">
      <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">Brand</a>
      <div class="md:hidden">
        <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-full border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-sky-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
          <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
          <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </button>
      </div>
    </div>
    <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
      <div class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:items-center md:justify-end md:gap-y-0 md:gap-x-7 md:mt-0 md:pl-7">
        <a href="/" class="{{ request()->is('/') ? 'active-navbar-text' : 'inactive-navbar-text' }} " aria-current="page">Home</a>
        <a href="/jobs/manage" class="{{ request()->is('/jobs/manage') ? 'active-navbar-text' : 'inactive-navbar-text' }} ">Manage Jobs</a>
        <a href="/jobs/create" class="{{ request()->is('/jobs/create') ? 'active-navbar-text' : 'inactive-navbar-text' }} ">Post Job</a>
        <a href="/about" class="{{ request()->is('/about') ? 'active-navbar-text' : 'inactive-navbar-text' }} ">About</a>

        {{-- <div class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] md:[--trigger:hover] md:py-4">
          <button type="button" class="flex items-center w-full text-gray-500 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500 ">
            Dropdown
            <svg class="ml-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
            </svg>
          </button>

          <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 md:w-48 hidden z-10 bg-white md:shadow-md rounded-lg p-2 dark:bg-gray-800 md:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full md:border before:-top-5 before:left-0 before:w-full before:h-5">
            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-sky-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
              About
            </a>
            <div class="hs-dropdown relative [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover]">
              <button type="button" class="w-full flex justify-between items-center text-sm text-gray-800 rounded-md py-2 px-3 hover:bg-gray-100 focus:ring-2 focus:ring-sky-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                Sub Menu
                <svg class="md:-rotate-90 ml-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                </svg>
              </button>

              <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 md:w-48 hidden z-10 md:mt-2 bg-white md:shadow-md rounded-lg p-2 dark:bg-gray-800 md:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute md:border before:-right-5 before:top-0 before:h-full before:w-5 top-0 right-full !mx-[10px]">
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-sky-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                  About
                </a>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-sky-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                  Downloads
                </a>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-sky-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                  Team Account
                </a>
              </div>
            </div>

            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-sky-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
              Downloads
            </a>
            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-sky-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
              Team Account
            </a>
          </div>
        </div> --}}

        <div class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-sky-600 md:border-l md:border-gray-300 md:my-6 md:pl-6 dark:border-gray-700 dark:text-gray-400" href="#">
            @auth
            <div class="hs-dropdown relative inline-flex z-50 [--auto-close:inside]">
                <button id="user-menu" type="button" class="hs-dropdown-toggle inline-flex justify-center items-center gap-2 font-medium bg-white text-gray-700 shadow-sm align-middle rounded-full mr-1 pr-2 hover:bg-gray-50 focus:outline-none focus:ring-0 dark:focus:bg-gray-700 focus:bg-gray-100 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800 ">
                  <img class="w-8 h-auto rounded-full" src="{{ auth()->user()->profile_picture }}" alt="Maria">
                  <span class="text-gray-600 font-medium truncate max-w-[7.5rem] dark:text-gray-400">{{ auth()->user()->first_name }}</span>
                  <i class="bi bi-chevron-down hs-dropdown-open:rotate-180 text-gray-600"></i>
                </button>
              
                <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[15rem] bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-gray-800 dark:border dark:border-gray-700 divide-y divide-gray-200 dark:divide-gray-700" aria-labelledby="user-menu">
                    <div class="block py-2 last:pb-0 px-3 dark:text-gray-200">
                        @auth
                        @if (auth()->user()->role->role_type == 'company')
                        <span class="block">
                            {{ auth()->user()->first_name }} | {{ auth()->user()->role->company->company_name }}
                        </span>
                        @else
                        <span class="block">
                            {{ auth()->user()->full_name }}
                        </span>
                        @endif
                        @endauth
                        <small class="dark:text-gray-400">{{ auth()->user()->email }}</small>
                    </div>
                    <div id="menu" class="py-2 first:pt-0 last:pb-0">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                          <i class="bi bi-pencil"></i> Edit Profile
                        </a>
                        <form class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-red-100 focus:ring-2 focus:ring-red-500 dark:text-gray-400 dark:hover:bg-red-700 dark:hover:text-gray-300" method="POST" action="/logout">
                            @csrf
                            <i class="bi bi-box-arrow-in-left"></i>
                            <button type="submit"
                                > Sign
                                out</button>
                        </form>
                    </div>
                </div>
              </div>
            @else
            <i class="fa-solid fa-user"></i>
            Log in
            @endauth
        </div>
      </div>
    </div>
  </nav>
</header>