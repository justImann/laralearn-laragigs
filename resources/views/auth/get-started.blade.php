<x-layout>
    <section>
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:items-stretch">
                <div class="grid p-6 bg-primary rounded place-content-center sm:p-8">
                    <div class="max-w-md mx-auto text-center lg:text-left">
                        <header>
                            <h2 class="text-xl font-bold text-white sm:text-3xl">Sudah Punya Akun?</h2>

                            <p class="my-4 text-gray-100">
                                Langsung login aja gak si?!
                            </p>
                        </header>
                        <a type="button" href="/access-account" class="btn-alternative capitalize">Login</a>
                    </div>
                </div>

                <div class="lg:col-span-2 lg:py-8">
                    <ul class="grid grid-cols-2 gap-4">
                        <li>
                          <a href="/signup-company" class="block relative group ">
                            <div class="block relative ">
                                <img src="{{ asset('images/roles/company.jpg') }}" alt=""
                                    class="object-cover w-full rounded aspect-square brightness-75 transition-all group-hover:brightness-50" />
                                <div
                                    class="absolute p-4 sm:p-6 lg:p-8 -translate-y-24 transform opacity-0 transition-all group-hover:-translate-y-[120px] group-hover:opacity-100">
                                    <i class="fa-solid fa-building text-xl text-white"></i>
                                    <p class="text-xl text-white">
                                      Daftar sebagai <b>perusahaan</b>
                                    </p>
                                </div>
                            </div>
                            <div class="mt-2 inline-flex items-center gap-2 text-black ">
                                <p class="text-md font-medium">Daftar Sekarang</p>
                                <i
                                    class="fa-solid fa-arrow-right-long h-6 w-6 translate-y-1 transition-all group-hover:ms-3 rtl:rotate-180"></i>
                            </div>
                        </a>
                        </li>

                        <li>
                            <a href="/signup-jobseeker" class="block relative group ">
                                <div class="block relative ">
                                    <img src="{{ asset('images/roles/student.jpg') }}" alt=""
                                        class="object-cover w-full rounded aspect-square brightness-75 transition-all group-hover:brightness-50" />
                                    <div
                                        class="absolute p-4 sm:p-6 lg:p-8 -translate-y-24 transform opacity-0 transition-all group-hover:-translate-y-[150px] group-hover:opacity-100">
                                        <i class="fa-solid fa-user text-xl text-white"></i>
                                        <p class="text-xl text-white">
                                          Daftar sebagai <b>pelajar</b> atau <b>mahasiswa</b>
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-2 inline-flex items-center gap-2 text-black ">
                                    <p class="text-md font-medium">Daftar Sekarang</p>
                                    <i
                                        class="fa-solid fa-arrow-right-long h-6 w-6 translate-y-1 transition-all group-hover:ms-3 rtl:rotate-180"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</x-layout>