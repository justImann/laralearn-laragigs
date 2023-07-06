<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/stuworks/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- glide --}}
    <title>Stuworks | Where Students Look for Work</title>
</head>

<body class="relative mx-auto">
{{-- <body x-data="{ showOverflow: true }" x-init="setTimeout(() => showOverflow = false, 5000)" :class="{ 'overflow-hidden': showOverflow }" class="relative mx-auto"> --}}
    {{-- <x-loader /> --}}
    @include('partials._navbar')
    <main {{ $attributes->merge(['class' => 'mx-auto relative']) }}>
        {{$slot}}
    </main>
    {{-- <footer
      class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-red-500 text-white h-24 mt-24 opacity-90 md:justify-center">
      <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
      
      <a href="/listings/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post Job</a>
    </footer> --}}

    <footer class="bg-sky-900">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('images/company/logo-2-dark.svg') }}" class="h-10 mr-3" alt="Stuworks Logo" />
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-white sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="/profile/about" class="mr-4 hover:underline md:mr-6 ">About</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-white sm:text-center dark:text-gray-400">© 2023 <a href="/"
                    class="hover:underline">Stuworks™</a>. All Rights Reserved.</span>
        </div>
    </footer>

    <x-flash-message class="fixed top-8 left-1/2 transform -translate-x-1/2 z-[70]"/>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/js/app.js')
    <script>
        window.onbeforeunload = function() {
        window.scrollTo(0, 0);
        }
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/flowbite.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @stack('script')
    @yield('script')
</body>

</html>