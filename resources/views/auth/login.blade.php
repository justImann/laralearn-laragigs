<x-layout x-transition>
    <section class="bg-white">
        <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
            <aside class="relative block h-20 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6">
                <img alt="Pattern" src="{{asset('svg/background/signup-3.svg')}}"
                    class="absolute inset-0 h-full w-full object-cover" />
            </aside>

            <div
                class="flex items-start justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:pl-20 lg:py-12 xl:col-span-6">
                <div class="max-w-xl lg:max-w-3xl">
                    <div class="flex items-center">
                        <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
                            Welcome to <a href="/" class="text-cyan-500 hover:text-primary">Stuworks</a>
                        </h1>
                    </div>

                    <p class="mt-4 leading-relaxed text-gray-500">
                        Sign-up as student / job seeker
                    </p>

                    <form class="mt-4 h" method="POST" action="/users/authenticate">
                        @csrf
                        <div class="relative z-0 w-full mb-4 group">
                            <input type="email" name="email" id="email" class="form-input peer" placeholder=" " required
                                value="{{ old('email') }}" />
                            <label for="email"
                                class="form-label peer-focus:px-2 peer-focus:text-sky-600 peer-focus:dark:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Email
                                address</label>
                            @error('email')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="relative z-0 w-full mb-4 group">
                            <input type="password" name="password" id="password" class="form-input peer" placeholder=" "
                                required value="{{ old('password') }}" />
                            <label for="password"
                                class="form-label peer-focus:px-2 peer-focus:text-sky-600 peer-focus:dark:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Password</label>
                            @error('password')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>