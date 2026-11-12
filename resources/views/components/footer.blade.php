<div>
    <!-- ================= FOOTER ================= -->
    <footer id="kontak" class="relative overflow-hidden bg-[#142344] text-white">

        <!-- DECORATION -->
        <div class="pointer-events-none absolute -right-20 -top-20 h-72 w-72 rounded-full bg-[#c82036]/10 blur-3xl">
        </div>

        <div class="mx-auto max-w-7xl px-6 py-14 lg:px-8">

            <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-3 lg:gap-16">


                <!-- BRAND -->
                <div>

                    <a href="/" class="mb-6 flex items-center gap-3">

                        <div
                            class="flex h-14 w-14 items-center justify-center rounded-full bg-white/10 text-4xl text-[#f5a8b7]">
                            <img src="{{ asset('assets/img/logo2.png') }}" class="h-12 w-auto" alt="Logo Konoha">
                        </div>

                        <div>
                            <h2 class="text-xl font-extrabold leading-tight">
                                LPK KONOHA
                            </h2>

                            <p class="text-[9px] tracking-[2px] text-[#f5a8b7]">
                                JAPANESE LANGUAGE CENTER
                            </p>

                            <p class="text-xs text-gray-300">
                                このは日本語センター
                            </p>
                        </div>

                    </a>

                    <p class="max-w-sm text-sm leading-7 text-gray-300">
                        Wujudkan impian karier dan studi di Jepang bersama LPK Konoha.
                        Belajar bahasa, keterampilan, dan persiapkan masa depan
                        yang lebih cerah bersama kami.
                    </p>


                    <!-- SOCIAL MEDIA -->
                    <div class="mt-7 flex items-center gap-5">

                        <a href="#" aria-label="Instagram"
                            class="text-2xl text-white transition hover:-translate-y-1 hover:text-[#f5a8b7]">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7Zm0 2h10c1.66 0 3 1.34 3 3v10c0 1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3Zm11 1.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3ZM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6Z" />
                            </svg>
                        </a>

                        <a href="#" aria-label="TikTok"
                            class="text-2xl text-white transition hover:-translate-y-1 hover:text-[#f5a8b7]">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.26V2h-3.44v13.67a2.9 2.9 0 1 1-2.9-2.9c.3 0 .6.05.88.14V9.4a6.34 6.34 0 1 0 5.46 6.27V8.72a8.16 8.16 0 0 0 4.77 1.52V6.8a4.85 4.85 0 0 1-1-.11Z" />
                            </svg>
                        </a>

                        <a href="#" aria-label="YouTube"
                            class="text-2xl text-white transition hover:-translate-y-1 hover:text-[#f5a8b7]">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.6 12 3.6 12 3.6s-7.5 0-9.4.5A3 3 0 0 0 .5 6.2 31 31 0 0 0 0 12a31 31 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 0 0 2.1-2.1A31 31 0 0 0 24 12a31 31 0 0 0-.5-5.8ZM9.6 15.6V8.4l6.3 3.6-6.3 3.6Z" />
                            </svg>
                        </a>

                        <a href="#" aria-label="Facebook"
                            class="text-2xl text-white transition hover:-translate-y-1 hover:text-[#f5a8b7]">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.5 21v-8h2.7l.4-3h-3.1V8.1c0-.9.3-1.5 1.6-1.5h1.6V3.9c-.3 0-1.3-.1-2.4-.1-2.4 0-4.1 1.5-4.1 4.2V10H7.5v3h2.7v8h3.3Z" />
                            </svg>
                        </a>

                    </div>

                </div>


                <!-- QUICK LINKS -->
                <div class="border-t border-white/20 pt-8 md:border-l md:border-t-0 md:pl-10 md:pt-0">

                    <h3 class="mb-7 text-base font-bold">
                        Tautan Cepat
                    </h3>

                    <ul class="space-y-4 text-sm text-gray-300">

                        <li>
                            <a href="{{ route('beranda') }}" class="footer-link inline-block">Beranda</a>
                        </li>



                        <li>
                            <a href="#" class="footer-link inline-block">Magang Jepang</a>
                        </li>

                        <li>
                            <a href="{{ Route('galeri') }}" class="footer-link inline-block">Galeri</a>
                        </li>

                        <li>
                            <a href="#" class="footer-link inline-block">Tentang Kami</a>
                        </li>

                    </ul>

                </div>


                <!-- CONTACT -->
                <div class="border-t border-white/20 pt-8 md:border-t-0 md:pt-0">

                    <h3 class="mb-7 text-base font-bold">
                        Informasi & Kontak
                    </h3>


                    <!-- JAM -->
                    <div class="mb-6 flex gap-4">

                        <div
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-white/10 text-[#f5a8b7]">

                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="9" stroke-width="2" />
                                <path stroke-linecap="round" stroke-width="2" d="M12 7v5l3 2" />
                            </svg>

                        </div>

                        <div>
                            <h4 class="mb-1 text-sm font-semibold">Jam Operasional</h4>

                            <p class="text-xs leading-6 text-gray-300">
                                Senin - Jumat: 08.00 - 16.00 WIB
                                <br>
                                Sabtu: 08.00 - 13.00 WIB
                            </p>
                        </div>

                    </div>


                    <!-- ALAMAT -->
                    <div class="mb-6 flex gap-4">

                        <div
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-white/10 text-[#f5a8b7]">

                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657 13.414 20.9a2 2 0 0 1-2.828 0l-4.243-4.243a8 8 0 1 1 11.314 0Z" />
                                <circle cx="12" cy="11" r="2.5" stroke-width="2" />
                            </svg>

                        </div>

                        <div>
                            <h4 class="mb-1 text-sm font-semibold">Alamat</h4>

                            <p class="text-xs leading-6 text-gray-300">
                                Jl. Kramat Jaya No. 11,
                                <br>
                                Koja, Jakarta Utara
                            </p>
                        </div>

                    </div>


                    <!-- EMAIL -->
                    <div class="flex gap-4">

                        <div
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-white/10 text-[#f5a8b7]">

                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <rect x="3" y="5" width="18" height="14" rx="2" stroke-width="2" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m3 7 9 6 9-6" />
                            </svg>

                        </div>

                        <div>
                            <h4 class="mb-1 text-sm font-semibold">Email</h4>

                            <p class="text-xs text-gray-300">
                                info@lpk-konoha.com
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- COPYRIGHT -->
        <div class="border-t border-white/15 bg-[#0d1933]">

            <div class="mx-auto max-w-7xl px-6 py-5 text-center">

                <p class="text-xs text-gray-300">
                    &copy; {{ date('Y') }} LPK Konoha.
                    All Rights Reserved.
                </p>

            </div>

        </div>

    </footer>
</div>
