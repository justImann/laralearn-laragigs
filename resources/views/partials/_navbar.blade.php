<nav class="bg-sky-900 border-gray-200 dark:bg-gray-900 sticky top-0 z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center">
            <img src="{{asset('images/company/logo-1-dark.svg')}}" class="h-8 mr-3" alt="Stuworks. Logo" />
        </a>
        <div x-data="{ open: false }" class="flex md:order-2 relative">
            @auth
            <div class="relative group">
                <button type="button"
                    class="flex mr-3 text-sm bg-gray-800 rounded-sm md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-sm" src="{{ asset('images/avatars/avatar.png') }}" alt="user avatar">
                </button>
                <div class="z-50 hidden bg-white peer-focus:block my-4 text-base list-none divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{auth()->user()->first_name}}
                            {{auth()->user()->last_name}}</span>
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
            {{-- access account` --}}
            {{-- <a href="/access-account"
                class="btn-alternative">Get
                started</a> --}}
            <a href="/register"
                class="btn-alternative">
                Register</a>
            <a href="/login"
                class="btn-alternative">
                Login</a>
            @endauth
            <button x-on:click="open = !open" data-collapse-toggle="navbar-cta" type="button"
                class="gajelas inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-cta" aria-expanded="false"
                :aria-expanded="open.toString()">
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Open main menu</span>
            </button>
        </div>
        <div x-show="open" :class="{ 'hidden': !open }"
            class="iya hidden relative items-center justify-between w-full md:flex md:w-auto md:order-1 group"
            id="navbar-cta">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 md dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700" :class="{ 'hidden': !open }">
                <li>
                    <a href="/" class="{{ request()->is('/') ? 'active' : 'text-white md:hover:text-cyan-300 md:dark:hover:text-cyan-300 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }} block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent  md:p-0 " aria-current="page">Home</a>
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
</nav>