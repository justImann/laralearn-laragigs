<x-layout x-transition>
    <section class="bg-white">
        <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
            <aside class="relative block h-20 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6">
                <img alt="Pattern" src="{{asset('svg/background/signup-3.svg')}}"
                    class="absolute inset-0 h-full w-full object-cover" />
            </aside>

            <div
                class="flex items-start justify-center w-full px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:pl-20 lg:py-12 xl:col-span-6">
                <div class="max-w-3xl lg:w-full lg:px-10">
                    <div class="flex items-center">
                        <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
                            Welcome to <a href="/" class="text-cyan-500 hover:text-primary">Stuworks</a>
                        </h1>
                    </div>

                    <p class="mt-4 leading-relaxed text-gray-500">
                        Sign-up as student / job seeker
                    </p>

                    <form class="mt-6 h-[]" x-data="{ formStep: 1 }" method="POST" action="/users"
                        enctype="multipart/form-data">
                        @csrf
                        <ol
                            class="flex items-center w-full py-6 space-x-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:space-x-4">
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
                            <li x-bind:class="{ ' ': !formStep === 2, 'text-sky-600 dark:text-sky-500': formStep === 2 || formStep === 3}"
                                class="flex items-center">
                                <span
                                    x-bind:class="{ ' ': !formStep === 3, 'border-sky-600 dark:border-sky-500': formStep === 2 || formStep === 3}"
                                    class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                    2
                                </span>
                                Location
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

                            <div class="grid md:grid-cols-2 md:gap-4">
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

                            <div class="grid md:grid-cols-2 md:gap-4">
                                <div class="relative z-0 w-full mb-4 group">
                                    <input type="date" name="birthdate" id="birthdate"
                                        class="form-input text-primary peer" placeholder=" " required
                                        value="{{ old('birthdate') }}" />
                                    <label for="birthdate"
                                        class="form-label peer-focus:px-2 peer-focus:text-sky-600 peer-focus:dark:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Company
                                        (Ex. Google)</label>
                                    @error('birthdate')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="relative z-0 w-full mb-4 group">
                                    <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phone_number"
                                        id="phone_number" class="form-input peer" placeholder=" " required
                                        value="{{ old('phone_number') }}" 
                                        />
                                    <label for="phone_number"
                                        class="form-label peer-focus:px-2 peer-focus:text-sky-600 peer-focus:dark:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2  peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Phone
                                        number</label>
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

                            <div class="relative z-0 w-full mb-4 group">
                                <input type="institution_name" name="institution_name" id="institution_name"
                                    class="form-input peer" placeholder=" " required
                                    value="{{ old('institution_name') }}" />
                                <label for="institution_name"
                                    class="form-label peer-focus:px-2 peer-focus:text-sky-600 peer-focus:dark:text-sky-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                    Institution name
                                </label>
                                @error('institution_name')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="relative z-0 w-full mb-4 group">
                                <h3 class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Identification</h3>
                                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <li
                                        class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center pl-3">
                                            <input id="highschool_student" type="radio" 
                                                value="highschool_student"
                                                name="level"
                                                class="w-4 h-4 text-sky-600 bg-gray-100 border-gray-300 focus:ring-sky-500 dark:focus:ring-sky-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="highschool_student"
                                                class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                High School</label>
                                        </div>
                                    </li>
                                    <li
                                        class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center pl-3">
                                            <input id="college_student" type="radio" 
                                                value="college_student" 
                                                name="level"
                                                class="w-4 h-4 text-sky-600 bg-gray-100 border-gray-300 focus:ring-sky-500 dark:focus:ring-sky-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="college_student"
                                                class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                College</label>
                                        </div>
                                    </li>
                                    <li class="w-full dark:border-gray-600">
                                        <div class="flex items-center pl-3">
                                            <input id="guest" type="radio" 
                                                value="guest"
                                                name="level"
                                                class="w-4 h-4 text-sky-600 bg-gray-100 border-gray-300 focus:ring-sky-500 dark:focus:ring-sky-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="guest"
                                                class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                Non Student</label>
                                        </div>
                                    </li>
                                </ul>
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

                            <div class="grid md:grid-cols-2 md:gap-4">
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
                                    placeholder="Write your full address here..."
                                    value="{{ old('full_address') }}"></textarea>
                                <label for="full_address" class="form-label left-1">Your Full Address
                                </label>
                                @error('full_address')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>

                        </div>

                        {{-- hidden roles input --}}
                        <input type="hidden" name="role_type" value="job_seeker">
                        {{-- back btn --}}
                        <button x-cloak x-show="formStep > 1" @click="formStep -= 1; scrollToTop()" type="button" --}}
                            class="btn-alternative">
                            Back
                        </button>
                        {{-- next btn --}}
                        <button x-data x-cloak x-show="formStep < 2" @click="formStep += 1; scrollToTop()" type="button"
                            class="btn-primary">Next</button>
                        {{-- submitt btn --}}
                        <button x-cloak x-show="formStep === 2" type="submit" class="btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>