<div>
    <nav class="fixed top-0 left-0 right-0 z-50 w-full bg-white border-b border-gray-200 shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-3 flex flex-wrap lg:flex-nowrap items-center justify-between gap-x-3">

            <!-- LOGO -->
            <a href="/" class="order-1 flex items-center gap-2 sm:gap-3 min-w-0">
                <img src="{{ asset('assets/img/logo.png') }}" class="h-10 sm:h-12 w-auto shrink-0" alt="Logo Konoha">

                <div class="min-w-0">
                    <h2 class="text-base sm:text-xl font-extrabold leading-tight text-[#142344] truncate">
                        LPK KONOHA
                    </h2>
                    <p class="text-[7px] sm:text-[9px] tracking-[1.5px] sm:tracking-[2px] text-[#f5a8b7] truncate">
                        JAPANESE LANGUAGE CENTER
                    </p>
                    <p class="text-10px sm:text-xs text-gray-500 truncate">
                        このは日本語センター
                    </p>
                </div>
            </a>

            <!-- AKSI: BAHASA + WHATSAPP + HAMBURGER -->
            <div class="order-2 lg:order-3 flex items-center gap-2 sm:gap-3 shrink-0">

                <!-- LANGUAGE SWITCH -->
                <form action="{{ route('language.switch') }}" method="POST">
                    @csrf
                    <div
                        class="inline-flex items-center rounded-full border-2 border-[#F4C7D0] bg-white p-0.5 text-xs sm:text-sm font-semibold">

                        <button type="submit" name="locale" value="id" aria-label="Bahasa Indonesia"
                            aria-pressed="{{ app()->getLocale() === 'id' ? 'true' : 'false' }}"
                            class="px-2.5 sm:px-3 py-1.5 rounded-full transition
                            {{ app()->getLocale() === 'id' ? 'bg-[#c82036] text-white' : 'text-[#142344] hover:bg-gray-100' }}">
                            ID
                        </button>

                        <button type="submit" name="locale" value="ja" aria-label="日本語"
                            aria-pressed="{{ app()->getLocale() === 'ja' ? 'true' : 'false' }}"
                            class="px-2.5 sm:px-3 py-1.5 rounded-full transition
                            {{ app()->getLocale() === 'ja' ? 'bg-[#c82036] text-white' : 'text-[#142344] hover:bg-gray-100' }}">
                            JA
                        </button>

                    </div>
                </form>

                <!-- WHATSAPP -->
                <a href="https://wa.me/6285890498591" target="_blank"
                    aria-label="{{ __('messages.register_now') }} via WhatsApp"
                    class="inline-flex items-center justify-center gap-2
                    bg-[#c82036] hover:bg-[#a91b2e]
                   border-2 border-[#F4C7D0] text-white font-semibold text-sm
                    w-10 h-10 sm:w-auto sm:h-auto sm:px-5 sm:py-3
                    rounded-full transition whitespace-nowrap">

                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-[#25D366]" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12.04 2a9.9 9.9 0 0 0-8.5 15l-1.3 4.7 4.8-1.25A10 10 0 1 0 12.04 2Zm0 18.2a8.2 8.2 0 0 1-4.17-1.14l-.3-.18-2.87.75.77-2.8-.2-.3A8.2 8.2 0 1 1 12.04 20.2Zm4.5-6.15c-.25-.12-1.47-.73-1.7-.81-.23-.08-.4-.12-.56.12-.17.25-.65.81-.8.98-.15.16-.3.18-.56.06-.25-.12-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.41-1.75-.15-.25-.02-.38.11-.5.11-.11.25-.29.37-.43.12-.14.16-.25.25-.42.08-.17.04-.31-.02-.43-.06-.12-.56-1.35-.77-1.85-.2-.48-.4-.42-.56-.43h-.48c-.17 0-.43.06-.65.31-.23.25-.86.84-.86 2.05s.88 2.38 1 2.54c.12.17 1.73 2.64 4.2 3.7.59.26 1.05.42 1.41.54.59.19 1.12.16 1.54.1.47-.07 1.47-.6 1.68-1.18.2-.58.2-1.08.14-1.18-.06-.1-.23-.16-.48-.29Z" />
                    </svg>

                    <span class="hidden sm:inline">{{ __('messages.contact_us') }}</span>
                </a>

                <!-- HAMBURGER -->
                <button data-collapse-toggle="navbar-konoha" type="button"
                    class="inline-flex items-center justify-center p-2
                    w-10 h-10 text-[#142344] rounded-lg lg:hidden
                    hover:bg-gray-100 transition"
                    aria-controls="navbar-konoha" aria-expanded="false">

                    <span class="sr-only">{{ __('messages.open_menu') }}</span>

                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            <!-- MENU NAVBAR -->
            <div class="order-3 lg:order-2 hidden w-full lg:flex lg:w-auto lg:flex-1 lg:justify-center"
                id="navbar-konoha">

                <ul
                    class="flex flex-col lg:flex-row lg:items-center
                    lg:gap-8 font-medium mt-3 lg:mt-0 p-2 lg:p-0
                    border border-gray-100 lg:border-0
                    rounded-xl lg:rounded-none bg-gray-50 lg:bg-transparent">

                    <li>
                        <a href="{{ route('beranda') }}"
                            class="block py-3 px-3 lg:py-2 lg:px-0 rounded-lg
                            {{ request()->routeIs('beranda') ? 'text-[#c82036] font-semibold bg-red-50 lg:bg-transparent' : 'text-[#142344] hover:text-[#c82036] hover:bg-gray-100 lg:hover:bg-transparent' }}">
                            {{ __('messages.home') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('magang') }}"
                            class="block py-3 px-3 lg:py-2 lg:px-0 rounded-lg
                            {{ request()->routeIs('magang') ? 'text-[#c82036] font-semibold bg-red-50 lg:bg-transparent' : 'text-[#142344] hover:text-[#c82036] hover:bg-gray-100 lg:hover:bg-transparent' }}">
                            {{ __('messages.internship_program') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('galeri') }}"
                            class="block py-3 px-3 lg:py-2 lg:px-0 rounded-lg
                            {{ request()->routeIs('galeri') ? 'text-[#c82036] font-semibold bg-red-50 lg:bg-transparent' : 'text-[#142344] hover:text-[#c82036] hover:bg-gray-100 lg:hover:bg-transparent' }}">
                            {{ __('messages.gallery') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('tentang-kami') }}"
                            class="block py-3 px-3 lg:py-2 lg:px-0 rounded-lg
                            {{ request()->routeIs('tentang-kami') ? 'text-[#c82036] font-semibold bg-red-50 lg:bg-transparent' : 'text-[#142344] hover:text-[#c82036] hover:bg-gray-100 lg:hover:bg-transparent' }}">
                            {{ __('messages.about_us') }}
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>
</div>
