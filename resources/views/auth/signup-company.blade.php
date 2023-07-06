<x-layout x-transition>
    <section class="bg-white">
        <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
            <aside class="relative block h-20 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6">
                <img alt="Pattern" src="{{asset('svg/background/signup-3.svg')}}"
                    class="absolute inset-0 h-full w-full object-cover" />
            </aside>

            <div
                class="flex items-start justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:pl-20 lg:py-12 xl:col-span-6">
                <div class="max-w-3xl lg:w-full lg:px-10">
                    <div class="flex items-center">
                        <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
                            Welcome to <a href="/" class="text-cyan-500 hover:text-primary">Stuworks</a>
                        </h1>
                    </div>

                    <p class="mt-4 leading-relaxed text-gray-500">
                        Sign-up as company
                    </p>
     
                <form class="mt-6 h-[]" x-data="{ formStep: 1 }" method="POST" action="/users"
                    enctype="multipart/form-data">
                    @csrf
                    <ol class="flex items-center w-full py-6 space-x-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:space-x-4">
                        <li class="flex items-center text-sky-600 dark:text-sky-500">
                            <span
                                class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-sky-600 rounded-full shrink-0 dark:border-sky-500">
                                1
                            </span>
                            Personal <span class="hidden sm:inline-flex sm:ml-2">Info</span>
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/10000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                            </svg>
                        </li>
                        <li x-bind:class="{ ' ': !formStep === 2, 'text-sky-600 dark:text-sky-500': formStep === 2 || formStep === 3}" class="flex items-center">
                            <span
                            x-bind:class="{ ' ': !formStep === 3, 'border-sky-600 dark:border-sky-500': formStep === 2 || formStep === 3}"
                                class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                2
                            </span>
                            Location
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/10000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                            </svg>
                        </li>
                        <li x-bind:class="{ ' ': !formStep === 3, 'text-sky-600 dark:text-sky-500': formStep === 3}" class="flex items-center whitespace-nowrap">
                            <span x-bind:class="{ ' ': !formStep === 3, 'border-sky-600 dark:border-sky-500': formStep === 3}" class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                3
                            </span>
                            Company Info
                        </li>
                    </ol>
                        <div id="formStep_1" x-cloak x-show="formStep === 1"
                            x-transition:enter="transition-transform transition-opacity ease-out duration-10000"
                            x-transition:enter-start="opacity-0 transform translate-x-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0">

                            <div class="relative z-0 w-full mb-4 group">
                                <input type="email" name="email" id="email" class="form-input peer" placeholder=" "
                                    required value="{{ old('email') }}" />
                                <label for="email"
                                    class="form-label peer-focus:px-2 peer-focus:text-sky-600 peer-focus:dark:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Email
                                    address</label>
                                @error('email')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="relative z-0 w-full mb-4 group">
                                <input type="password" name="password" id="password" class="form-input peer"
                                    placeholder=" " required value="{{ old('password') }}" />
                                <label for="password"
                                    class="form-label peer-focus:px-2 peer-focus:text-sky-600 peer-focus:dark:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Password</label>
                                @error('password')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="relative z-0 w-full mb-4 group">
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-input peer" placeholder=" " required
                                    value="{{ old('password_confirmation') }}" />
                                <label for="password_confirmation"
                                    class="form-label peer-focus:px-2 peer-focus:text-sky-600 peer-focus:dark:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Confirm
                                    password</label>
                                @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="grid md:grid-cols-2 md:gap-6">
                                <div class="relative z-0 w-full mb-4 group">
                                    <input type="text" name="first_name" id="first_name" class="form-input peer"
                                        placeholder=" " required value="{{ old('first_name') }}" />
                                    <label for="first_name"
                                        class="form-label peer-focus:px-2 peer-focus:text-sky-600 peer-focus:dark:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">First
                                        name</label>
                                    @error('first_name')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="relative z-0 w-full mb-4 group">
                                    <input type="text" name="last_name" id="last_name" class="form-input peer"
                                        placeholder=" " required value="{{ old('last_name') }}" />
                                    <label for="last_name"
                                        class="form-label peer-focus:px-2 peer-focus:text-sky-600 peer-focus:dark:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Last
                                        name</label>
                                    @error('last_name')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 md:gap-6">
                                <div class="relative z-0 w-full mb-4 group">
                                    <input type="date" name="birthdate" id="birthdate"
                                        class="form-input text-primary peer" placeholder=" " required
                                        value="{{ old('birthdate') }}" />
                                    <label for="birthdate"
                                        class="form-label peer-focus:px-2 peer-focus:text-sky-600 peer-focus:dark:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Birth date
                                        </label>
                                    @error('birthdate')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="relative z-0 w-full mb-4 group">
                                    <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phone_number"
                                        id="phone_number" class="form-input peer" placeholder="(123-456-7890)" required
                                        value="{{ old('phone_number') }}" />
                                    <label for="phone_number"
                                        class="form-label peer-focus:px-2 peer-focus:text-sky-600 peer-focus:dark:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Phone
                                        number </label>
                                    @error('phone_number')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="relative z-0 w-full mb-4 group">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    name="profile_picture" for="profile_picture">Upload your profile picture</label>
                                <input name="profile_picture"
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="profile_picture" type="file" {{ old('profile_picture') }}>
                            </div>
                        </div>

                        {{-- formstep location --}}
                        <div id="formStep_2" x-cloak x-show="formStep === 2"
                            x-transition:enter="transition-transform transition-opacity ease-out duration-10000"
                            x-transition:enter-start="opacity-0 transform translate-x-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0">

                            <div class="relative z-0 w-full mb-4 group">
                                <input type="country" name="country" id="country" class="form-input peer"
                                    placeholder=" " required value="{{ old('country') }}" />
                                <label for="country"
                                    class="form-label peer-focus:px-2 peer-focus:text-sky-600 peer-focus:dark:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Country
                                </label>
                                @error('country')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="grid md:grid-cols-2 md:gap-6">
                                <div class="relative z-0 w-full mb-4 group">
                                    <input type="text" name="province" id="province" class="form-input peer"
                                        placeholder=" " required value="{{ old('province') }}" />
                                    <label for="province"
                                        class="form-label peer-focus:px-2 peer-focus:text-sky-600 peer-focus:dark:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Province
                                    </label>
                                    @error('province')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="relative z-0 w-full mb-4 group">
                                    <input type="text" name="city" id="city" class="form-input peer" placeholder=" "
                                        required value="{{ old('city') }}" />
                                    <label for="city"
                                        class="form-label peer-focus:px-2 peer-focus:text-sky-600 peer-focus:dark:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">City
                                    </label>
                                    @error('city')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="relative z-0 w-full mb-4 group">
                                <textarea id="full_address" name="full_address" rows="4" class="form-input peer"
                                    placeholder="Write your full address here..." value="{{ old('full_address') }}"></textarea>
                                <label for="full_address" class="form-label left-1">Your Full Address
                                </label>
                                @error('full_address')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>

                        </div>
                        {{-- form step company --}}
                        <div id="formStep_3" x-cloak x-show="formStep === 3"
                            x-transition:enter="transition-transform transition-opacity ease-out duration-10000"
                            x-transition:enter-start="opacity-0 transform translate-x-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0">

                            <div class="relative z-0 w-full mb-4 group">
                                <input type="company_name" name="company_name" id="company_name" class="form-input peer"
                                    placeholder=" " required value="{{ old('company_name') }}" />
                                <label for="company_name"
                                    class="form-label peer-focus:px-2 peer-focus:text-sky-600 peer-focus:dark:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Company
                                    Name
                                </label>
                                @error('company_name')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="relative z-0 w-full mb-4 group">
                                <input type="company_website" name="company_website" id="company_website"
                                    class="form-input peer" placeholder="https://" required
                                    value="{{ old('company_website') }}" />
                                <label for="company_website"
                                    class="form-label peer-focus:px-2 peer-focus:text-sky-600 peer-focus:dark:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Company
                                    Website</label>
                                @error('company_website')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="relative z-0 w-full mb-4 group">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    name="company_logo" for="company_logo">Upload Your Company Logo</label>
                                <input name="company_logo"
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="company_logo" type="file" {{ old('company_logo') }}>
                            </div>

                            <div class="relative z-0 w-full mb-4 group">
                                <textarea id="company_bio" name="company_bio" rows="4" class="form-input peer"
                                    placeholder="Write your company bio here..." value="{{ old('company_bio') }}"></textarea>
                                <label for="company_bio" class="form-label left-1">Your
                                    company bio</label>
                                @error('company_bio')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>

                        </div>

                        {{-- hidden roles input --}}
                        <input type="hidden" name="role_type" value="company">
                        {{-- back btn --}}
                        <button x-cloak x-show="formStep > 1" @click="formStep -= 1; scrollToTop()" type="button"
                            class="btn-alternative">
                            Back
                        </button>
                        {{-- next btn --}}
                        <button x-cloak x-show="formStep < 3" @click="formStep += 1; scrollToTop()" type="button"
                            class="btn-primary">Next</button>
                        {{-- submitt btn --}}
                        <button x-cloak x-show="formStep === 3" type="submit" class="btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
</x-layout>