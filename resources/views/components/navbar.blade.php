<div>
    <div>
        <nav class="bg-white border-b border-gray-200 shadow-sm">
            <div class="max-w-7xl flex flex-wrap items-center justify-between mx-auto p-4">

                <!-- LOGO -->
                <a href="/" class="flex items-center space-x-3">
                    <img src="{{ asset('assets/img/logo.png') }}" class="h-12 w-auto" alt="Logo Konoha">
                    <div>
                        <h2 class="text-xl font-extrabold leading-tight">
                            LPK KONOHA
                        </h2>

                        <p class="text-[9px] tracking-[2px] text-[#f5a8b7]">
                            JAPANESE LANGUAGE CENTER
                        </p>

                        <p class="text-xs text-gray-500">
                            このは日本語センター
                        </p>
                    </div>

                </a>

                <!-- TOMBOL WHATSAPP + HAMBURGER -->
                <div class="flex items-center gap-3 lg:order-2">
                    <a href="https://wa.me/6285890498591" target="_blank"
                        class="inline-flex items-center gap-2 bg-[#c82036] hover:bg-[#a91b2e] text-white font-semibold px-5 py-3 rounded-full transition">

                        <svg class="w-7 h-7 text-[#25D366]" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12.04 2a9.9 9.9 0 0 0-8.5 15l-1.3 4.7 4.8-1.25A10 10 0 1 0 12.04 2Zm0 18.2a8.2 8.2 0 0 1-4.17-1.14l-.3-.18-2.87.75.77-2.8-.2-.3A8.2 8.2 0 1 1 12.04 20.2Zm4.5-6.15c-.25-.12-1.47-.73-1.7-.81-.23-.08-.4-.12-.56.12-.17.25-.65.81-.8.98-.15.16-.3.18-.56.06-.25-.12-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.41-1.75-.15-.25-.02-.38.11-.5.11-.11.25-.29.37-.43.12-.14.16-.25.25-.42.08-.17.04-.31-.02-.43-.06-.12-.56-1.35-.77-1.85-.2-.48-.4-.42-.56-.43h-.48c-.17 0-.43.06-.65.31-.23.25-.86.84-.86 2.05s.88 2.38 1 2.54c.12.17 1.73 2.64 4.2 3.7.59.26 1.05.42 1.41.54.59.19 1.12.16 1.54.1.47-.07 1.47-.6 1.68-1.18.2-.58.2-1.08.14-1.18-.06-.1-.23-.16-.48-.29Z" />
                        </svg>

                        Hubungi Saya
                    </a>

                    <button data-collapse-toggle="navbar-konoha" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-600 rounded-lg lg:hidden hover:bg-gray-100"
                        aria-controls="navbar-konoha" aria-expanded="false">
                        <span class="sr-only">Buka menu</span>
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>

                <!-- MENU NAVBAR -->
                <div class="hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-konoha">
                    <ul
                        class="flex flex-col lg:flex-row lg:items-center lg:space-x-6
                       font-medium mt-4 lg:mt-0 p-4 lg:p-0
                       border border-gray-100 lg:border-0
                       rounded-lg bg-gray-50 lg:bg-white">

                        <li>
                            <a href="{{ route('beranda') }}" class="block py-2 px-3 rounded lg:p-0 {{ request()->routeIs('beranda') ? 'text-[#c82036] font-semibold' : 'text-[#142344] hover:text-[#c82036]' }}">
                                Beranda
                            </a>
                        </li>

                        <li>
                            <a href="#" class="block py-2 px-3 lg:p-0 {{ request()->routeIs('/') ? 'text-[#c82036] font-semibold' : 'text-[#142344] hover:text-[#c82036]' }}">
                                Program Magang
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('galeri') }}" class="block py-2 px-3 lg:p-0 {{ request()->routeIs('galeri') ? 'text-[#c82036] font-semibold' : 'text-[#142344] hover:text-[#c82036]' }}">
                                Galeri
                            </a>
                        </li>

                        <li>
                            <a href="#" class="block py-2 px-3 lg:p-0 {{ request()->routeIs('/') ? 'text-[#c82036] font-semibold' : 'text-[#142344] hover:text-[#c82036]' }}">
                                Tentang Kami
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
