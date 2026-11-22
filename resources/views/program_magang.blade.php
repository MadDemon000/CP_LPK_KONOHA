
@extends('layout')

@section('title', __('messages.internship_program'))

@section('content')
    <div class="antialiased">

        {{-- HEADER --}}
        <header class="bg-gradient-to-br from-slate-900 via-slate-800 to-red-950 text-white pt-28 sm:pt-32 pb-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>

            <div class="max-w-6xl mx-auto relative z-10 text-center">
                <span data-animate="fade-up"
                    class="inline-block bg-red-600/90 text-white text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-4 shadow-md">
                    {{ __('messages.program_badge') }}
                </span>

                <h1 data-animate="fade-up" data-delay="100" class="text-3xl sm:text-5xl font-extrabold tracking-tight mb-6">
                    {{ __('messages.program_title') }}
                </h1>

                <p data-animate="fade-up" data-delay="200"
                    class="text-base sm:text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed mb-10">
                    {{ __('messages.program_description') }}
                </p>

                <div data-animate="zoom-in" data-delay="300"
                    class="max-w-4xl mx-auto bg-white/10 backdrop-blur-md p-3 sm:p-4 rounded-2xl border border-white/20 custom-shadow">
                    <div class="rounded-xl overflow-hidden shadow-lg relative group">
                        <img src="{{ asset('assets/img/iconweb2.jpg') }}"
                            alt="{{ __('messages.training_photo_description') }}"
                            class="w-full h-64 sm:h-96 object-cover transition-transform duration-500 group-hover:scale-105">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-6">
                            <div class="text-left text-white">
                                <span class="bg-red-600 text-xs font-semibold px-2.5 py-1 rounded-md mb-2 inline-block">
                                    {{ __('messages.main_facility') }}
                                </span>
                                <p class="text-sm sm:text-base font-medium text-slate-100">
                                    {{ __('messages.training_photo_description') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        {{-- PERSENTASE JENIS KERJA --}}
        <section class="py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto">
            <div data-animate="fade-up" class="text-center mb-12">
                <h2 class="text-2xl sm:text-4xl font-bold text-slate-900 mb-3">
                    {{ __('messages.work_type_percentage') }}
                </h2>
                <p class="text-slate-600 max-w-xl mx-auto text-sm sm:text-base">
                    {{ __('messages.work_distribution') }}
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-white rounded-3xl p-6 sm:p-10 custom-shadow border border-slate-100">

                {{-- DONUT CHART --}}
                <div data-animate="zoom-in" class="lg:col-span-5 flex flex-col items-center justify-center relative">
                    <div class="relative w-64 h-64 sm:w-72 sm:h-72">
                        <svg viewBox="0 0 100 100" class="w-full h-full transform -rotate-90">
                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#B91C1C"
                                stroke-width="18" stroke-dasharray="67.8 251.2" stroke-dashoffset="0"
                                class="donut-segment"
                                data-title="{{ __('messages.machine_processing') }} (27%)"></circle>

                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#EA580C"
                                stroke-width="18" stroke-dasharray="52.7 251.2" stroke-dashoffset="-67.8"
                                class="donut-segment"
                                data-title="{{ __('messages.food_industry') }} (21%)"></circle>

                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#F97316"
                                stroke-width="18" stroke-dasharray="32.6 251.2" stroke-dashoffset="-120.5"
                                class="donut-segment"
                                data-title="{{ __('messages.construction') }} (13%)"></circle>

                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#EAB308"
                                stroke-width="18" stroke-dasharray="25.1 251.2" stroke-dashoffset="-153.1"
                                class="donut-segment"
                                data-title="{{ __('messages.agriculture') }} (10%)"></circle>

                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#FACC15"
                                stroke-width="18" stroke-dasharray="20.1 251.2" stroke-dashoffset="-178.2"
                                class="donut-segment"
                                data-title="{{ __('messages.plastic_products') }} (8%)"></circle>

                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#3F6212"
                                stroke-width="18" stroke-dasharray="15.1 251.2" stroke-dashoffset="-198.3"
                                class="donut-segment"
                                data-title="{{ __('messages.painting_other') }} (6%)"></circle>

                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#64748B"
                                stroke-width="18" stroke-dasharray="15.1 251.2" stroke-dashoffset="-213.4"
                                class="donut-segment"
                                data-title="{{ __('messages.elderly_care') }} (15%)"></circle>

                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#CBD5E1"
                                stroke-width="18" stroke-dasharray="22.7 251.2" stroke-dashoffset="-228.5"
                                class="donut-segment"
                                data-title="{{ __('messages.painting_other') }} (9%)"></circle>
                        </svg>

                        <div class="absolute inset-0 flex flex-col items-center justify-center text-center pointer-events-none">
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400">
                                {{ __('messages.total_sectors') }}
                            </span>
                            <span class="text-xl font-extrabold text-slate-800">100%</span>
                            <span class="text-[10px] text-slate-500">
                                {{ __('messages.december_2025') }}
                            </span>
                        </div>
                    </div>

                    <p class="text-xs text-slate-500 mt-4 text-center italic">
                        {{ __('messages.chart_instruction') }}
                    </p>
                </div>

                {{-- DAFTAR SEKTOR --}}
                <div class="lg:col-span-7 space-y-3">
                    <div data-animate="fade-up"
                        class="flex items-center justify-between p-3.5 bg-slate-50 rounded-xl border-l-4 border-red-600">
                        <span class="font-semibold text-slate-800 text-sm sm:text-base">
                            {{ __('messages.machine_processing') }}
                        </span>
                        <span class="bg-red-100 text-red-700 font-bold px-3 py-1 rounded-lg text-sm">27%</span>
                    </div>

                    <div data-animate="fade-up" data-delay="100"
                        class="flex items-center justify-between p-3.5 bg-slate-50 rounded-xl border-l-4 border-orange-600">
                        <span class="font-semibold text-slate-800 text-sm sm:text-base">
                            {{ __('messages.food_industry') }}
                        </span>
                        <span class="bg-orange-100 text-orange-700 font-bold px-3 py-1 rounded-lg text-sm">21%</span>
                    </div>

                    <div data-animate="fade-up" data-delay="200"
                        class="flex items-center justify-between p-3.5 bg-slate-50 rounded-xl border-l-4 border-amber-500">
                        <span class="font-semibold text-slate-800 text-sm sm:text-base">
                            {{ __('messages.construction') }}
                        </span>
                        <span class="bg-amber-100 text-amber-700 font-bold px-3 py-1 rounded-lg text-sm">13%</span>
                    </div>

                    <div data-animate="fade-up" data-delay="300"
                        class="flex items-center justify-between p-3.5 bg-slate-50 rounded-xl border-l-4 border-yellow-500">
                        <span class="font-semibold text-slate-800 text-sm sm:text-base">
                            {{ __('messages.agriculture') }}
                        </span>
                        <span class="bg-yellow-100 text-yellow-800 font-bold px-3 py-1 rounded-lg text-sm">10%</span>
                    </div>

                    <div data-animate="fade-up" data-delay="400"
                        class="flex items-center justify-between p-3.5 bg-slate-50 rounded-xl border-l-4 border-yellow-400">
                        <span class="font-semibold text-slate-800 text-sm sm:text-base">
                            {{ __('messages.plastic_products') }}
                        </span>
                        <span class="bg-yellow-50 text-yellow-800 font-bold px-3 py-1 rounded-lg text-sm">8%</span>
                    </div>

                    <div data-animate="fade-up" data-delay="500"
                        class="flex items-center justify-between p-3.5 bg-slate-50 rounded-xl border-l-4 border-lime-700">
                        <span class="font-semibold text-slate-800 text-sm sm:text-base">
                            {{ __('messages.painting_other') }}
                        </span>
                        <span class="bg-lime-100 text-lime-800 font-bold px-3 py-1 rounded-lg text-sm">21%</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- FOTO PRESENTASI JENIS KERJA --}}
        <section class="py-16 bg-slate-900 text-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div data-animate="fade-up" class="text-center mb-12">
                    <span class="text-red-500 font-bold text-xs uppercase tracking-widest bg-red-950/80 px-3 py-1 rounded-full border border-red-800/50">
                        {{ __('messages.interactive_exploration') }}
                    </span>

                    <h2 class="text-2xl sm:text-4xl font-bold mt-3">
                        {{ __('messages.job_photo_title') }}
                    </h2>

                    <p class="text-slate-400 text-sm sm:text-base mt-2">
                        {{ __('messages.job_photo_description') }}
                    </p>
                </div>

                {{-- TOMBOL NAVIGASI --}}
                <div data-animate="fade-up" data-delay="100" class="flex flex-wrap justify-center gap-2 sm:gap-3 mb-8">
                    <button onclick="switchJob(0)" id="jobBtn0"
                        class="job-tab-btn px-4 py-2.5 rounded-xl font-semibold text-sm transition bg-red-600 text-white shadow-lg cursor-pointer flex items-center gap-2">
                        <i class="fa-solid fa-gears"></i>
                        {{ __('messages.machine_processing') }}
                    </button>

                    <button onclick="switchJob(1)" id="jobBtn1"
                        class="job-tab-btn px-4 py-2.5 rounded-xl font-semibold text-sm transition bg-slate-800 text-slate-300 hover:bg-slate-700 cursor-pointer flex items-center gap-2">
                        <i class="fa-solid fa-seedling"></i>
                        {{ __('messages.agriculture') }}
                    </button>

                    <button onclick="switchJob(2)" id="jobBtn2"
                        class="job-tab-btn px-4 py-2.5 rounded-xl font-semibold text-sm transition bg-slate-800 text-slate-300 hover:bg-slate-700 cursor-pointer flex items-center gap-2">
                        <i class="fa-solid fa-hand-holding-medical"></i>
                        {{ __('messages.elderly_care') }}
                    </button>

                    <button onclick="switchJob(3)" id="jobBtn3"
                        class="job-tab-btn px-4 py-2.5 rounded-xl font-semibold text-sm transition bg-slate-800 text-slate-300 hover:bg-slate-700 cursor-pointer flex items-center gap-2">
                        <i class="fa-solid fa-book-open"></i>
                        {{ __('messages.language_training') }}
                    </button>
                </div>

                {{-- DETAIL SEKTOR --}}
                <div data-animate="zoom-in" data-delay="200"
                    class="bg-slate-800 rounded-3xl overflow-hidden custom-shadow border border-slate-700 grid grid-cols-1 lg:grid-cols-12">

                    <div class="lg:col-span-7 relative h-72 sm:h-96 lg:h-auto min-h-[320px]">
                        <img id="jobImage" src="{{ asset('assets/img/pm2.jpg') }}"
                            alt="{{ __('messages.job_photo_alt') }}"
                            class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500">

                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent lg:hidden flex items-end p-6">
                            <span id="jobBadgeMobile"
                                class="bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-md">
                                {{ __('messages.sector_1_largest') }}
                            </span>
                        </div>
                    </div>

                    <div class="lg:col-span-5 p-6 sm:p-8 flex flex-col justify-between">
                        <div>
                            <div class="hidden lg:inline-block mb-3">
                                <span id="jobBadgeDesktop"
                                    class="bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-md">
                                    {{ __('messages.sector_1_largest') }}
                                </span>
                            </div>

                            <h3 id="jobTitle" class="text-2xl font-bold text-white mb-3">
                                {{ __('messages.job_machine_title') }}
                            </h3>

                            <p id="jobDescription" class="text-slate-300 text-sm sm:text-base leading-relaxed mb-6">
                                {{ __('messages.job_machine_description') }}
                            </p>

                            <div class="space-y-2 mb-6 border-t border-slate-700 pt-4">
                                <div class="flex items-center text-sm text-slate-300">
                                    <i class="fa-solid fa-circle-check text-red-500 mr-2.5"></i>
                                    <span id="jobPoint1">{{ __('messages.machine_point_1') }}</span>
                                </div>

                                <div class="flex items-center text-sm text-slate-300">
                                    <i class="fa-solid fa-circle-check text-red-500 mr-2.5"></i>
                                    <span id="jobPoint2">{{ __('messages.machine_point_2') }}</span>
                                </div>

                                <div class="flex items-center text-sm text-slate-300">
                                    <i class="fa-solid fa-circle-check text-red-500 mr-2.5"></i>
                                    <span id="jobPoint3">{{ __('messages.machine_point_3') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between pt-4 border-t border-slate-700 text-xs text-slate-400">
                            <span>{{ __('messages.select_sector_instruction') }}</span>
                            <span id="jobCounter" class="font-bold text-white">
                                {{ __('messages.sector_counter_1') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- PROSEDUR SELEKSI --}}
        <section class="py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto">
            <div data-animate="fade-up" class="text-center mb-14">
                <span class="text-red-600 font-bold text-xs uppercase tracking-widest bg-red-50 px-3 py-1 rounded-full border border-red-100">
                    {{ __('messages.registration_flow') }}
                </span>

                <h2 class="text-2xl sm:text-4xl font-bold text-slate-900 mt-3">
                    {{ __('messages.selection_title') }}
                </h2>

                <p class="text-slate-600 max-w-xl mx-auto text-sm sm:text-base mt-2">
                    {{ __('messages.selection_description') }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                {{-- STEP 1 --}}
                <div data-animate="fade-up"
                    class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition border border-slate-100 relative group">
                    <div class="absolute -top-4 -left-4 w-10 h-10 bg-red-600 text-white font-bold rounded-xl flex items-center justify-center shadow-md">1</div>

                    <div class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center text-xl mb-4 mt-2">
                        <img src="{{ asset('assets/img/icon1.png') }}">
                        <i class="fa-solid fa-file-contract"></i>
                    </div>

                    <h3 class="font-bold text-slate-900 text-lg mb-2">{{ __('messages.training_order') }}</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">{{ __('messages.training_order_description') }}</p>

                    <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-semibold text-red-600">
                        {{ __('messages.estimation_one_month') }}
                    </div>
                </div>

                {{-- STEP 2 --}}
                <div data-animate="fade-up" data-delay="100"
                    class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition border border-slate-100 relative group">
                    <div class="absolute -top-4 -left-4 w-10 h-10 bg-red-600 text-white font-bold rounded-xl flex items-center justify-center shadow-md">2</div>

                    <div class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center text-xl mb-4 mt-2">
                        <img src="{{ asset('assets/img/icon2.png') }}">
                        <i class="fa-solid fa-handshake"></i>
                    </div>

                    <h3 class="font-bold text-slate-900 text-lg mb-2">{{ __('messages.regional_lpk_cooperation') }}</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">{{ __('messages.regional_lpk_description') }}</p>

                    <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-semibold text-red-600">
                        {{ __('messages.regional_coordination') }}
                    </div>
                </div>

                {{-- STEP 3 --}}
                <div data-animate="fade-up" data-delay="200"
                    class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition border border-slate-100 relative group">
                    <div class="absolute -top-4 -left-4 w-10 h-10 bg-red-600 text-white font-bold rounded-xl flex items-center justify-center shadow-md">3</div>

                    <div class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center text-xl mb-4 mt-2">
                        <img src="{{ asset('assets/img/icon3.png') }}">
                        <i class="fa-solid fa-clipboard-check"></i>
                    </div>

                    <h3 class="font-bold text-slate-900 text-lg mb-2">{{ __('messages.first_selection') }}</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">{{ __('messages.first_selection_description') }}</p>

                    <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-semibold text-red-600">
                        {{ __('messages.initial_competency_test') }}
                    </div>
                </div>

                {{-- STEP 4 --}}
                <div data-animate="fade-up" data-delay="300"
                    class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition border border-slate-100 relative group">
                    <div class="absolute -top-4 -left-4 w-10 h-10 bg-red-600 text-white font-bold rounded-xl flex items-center justify-center shadow-md">4</div>

                    <div class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center text-xl mb-4 mt-2">
                        <img src="{{ asset('assets/img/icon4.png') }}">
                        <i class="fa-solid fa-user-doctor"></i>
                    </div>

                    <h3 class="font-bold text-slate-900 text-lg mb-2">{{ __('messages.second_selection') }}</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">{{ __('messages.second_selection_description') }}</p>

                    <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-semibold text-red-600">
                        {{ __('messages.mcu_interview') }}
                    </div>
                </div>

                {{-- STEP 5 --}}
                <div data-animate="fade-up"
                    class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition border border-slate-100 relative group">
                    <div class="absolute -top-4 -left-4 w-10 h-10 bg-red-600 text-white font-bold rounded-xl flex items-center justify-center shadow-md">5</div>

                    <div class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center text-xl mb-4 mt-2">
                        <img src="{{ asset('assets/img/icon5.png') }}">
                        <i class="fa-solid fa-comments"></i>
                    </div>

                    <h3 class="font-bold text-slate-900 text-lg mb-2">{{ __('messages.company_interview') }}</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">{{ __('messages.company_interview_description') }}</p>

                    <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-semibold text-red-600">
                        {{ __('messages.estimation_one_month') }}
                    </div>
                </div>

                {{-- STEP 6 --}}
                <div data-animate="fade-up" data-delay="100"
                    class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition border border-slate-100 relative group">
                    <div class="absolute -top-4 -left-4 w-10 h-10 bg-red-600 text-white font-bold rounded-xl flex items-center justify-center shadow-md">6</div>

                    <div class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center text-xl mb-4 mt-2">
                        <img src="{{ asset('assets/img/icon6.png') }}">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>

                    <h3 class="font-bold text-slate-900 text-lg mb-2">{{ __('messages.education_training') }}</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">{{ __('messages.education_training_description') }}</p>

                    <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-semibold text-red-600">
                        {{ __('messages.duration_four_months') }}
                    </div>
                </div>

                {{-- STEP 7 --}}
                <div data-animate="fade-up" data-delay="200"
                    class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition border border-slate-100 relative group md:col-span-2 lg:col-span-2">
                    <div class="absolute -top-4 -left-4 w-10 h-10 bg-red-600 text-white font-bold rounded-xl flex items-center justify-center shadow-md">7</div>

                    <div class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center text-xl mb-4 mt-2">
                        <img src="{{ asset('assets/img/icon7.png') }}">
                        <i class="fa-solid fa-plane-departure"></i>
                    </div>

                    <h3 class="font-bold text-slate-900 text-lg mb-2">{{ __('messages.departure_process') }}</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">{{ __('messages.departure_description') }}</p>

                    <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-semibold text-red-600">
                        {{ __('messages.departure_to_japan') }}
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection

{{-- JAVASCRIPT SEKTOR PEKERJAAN --}}
@push('scripts')
<script>
    const jobData = [
        {
            title: @json(__('messages.job_machine_title')),
            badge: @json(__('messages.sector_1_largest')),
            image: "{{ asset('assets/img/pm2.jpg') }}",
            desc: @json(__('messages.job_machine_description')),
            point1: @json(__('messages.machine_point_1')),
            point2: @json(__('messages.machine_point_2')),
            point3: @json(__('messages.machine_point_3')),
            counter: @json(__('messages.sector_counter_1'))
        },
        {
            title: @json(__('messages.job_agriculture_title')),
            badge: @json(__('messages.sector_4_share')),
            image: "{{ asset('assets/img/pm3.jpg') }}",
            desc: @json(__('messages.job_agriculture_description')),
            point1: @json(__('messages.agriculture_point_1')),
            point2: @json(__('messages.agriculture_point_2')),
            point3: @json(__('messages.agriculture_point_3')),
            counter: @json(__('messages.sector_counter_2'))
        },
        {
            title: @json(__('messages.job_care_title')),
            badge: @json(__('messages.health_sector_high_demand')),
            image: "{{ asset('assets/img/pm1.jpg') }}",
            desc: @json(__('messages.job_care_description')),
            point1: @json(__('messages.care_point_1')),
            point2: @json(__('messages.care_point_2')),
            point3: @json(__('messages.care_point_3')),
            counter: @json(__('messages.sector_counter_3'))
        },
        {
            title: @json(__('messages.job_language_title')),
            badge: @json(__('messages.main_facility_konoha')),
            image: "{{ asset('assets/img/pm4.webp') }}",
            desc: @json(__('messages.job_language_description')),
            point1: @json(__('messages.language_point_1')),
            point2: @json(__('messages.language_point_2')),
            point3: @json(__('messages.language_point_3')),
            counter: @json(__('messages.sector_counter_4'))
        }
    ];

    function switchJob(index) {
        const data = jobData[index];

        if (!data) return;

        document.getElementById('jobTitle').innerText = data.title;
        document.getElementById('jobBadgeDesktop').innerText = data.badge;
        document.getElementById('jobBadgeMobile').innerText = data.badge;
        document.getElementById('jobDescription').innerText = data.desc;
        document.getElementById('jobPoint1').innerText = data.point1;
        document.getElementById('jobPoint2').innerText = data.point2;
        document.getElementById('jobPoint3').innerText = data.point3;
        document.getElementById('jobCounter').innerText = data.counter;

        const imgEl = document.getElementById('jobImage');
        imgEl.style.opacity = '0';

        setTimeout(() => {
            imgEl.src = data.image;
            imgEl.style.opacity = '1';
        }, 200);

        const buttons = document.querySelectorAll('.job-tab-btn');

        buttons.forEach((btn, i) => {
            if (i === index) {
                btn.classList.remove('bg-slate-800', 'text-slate-300');
                btn.classList.add('bg-red-600', 'text-white', 'shadow-lg');
            } else {
                btn.classList.remove('bg-red-600', 'text-white', 'shadow-lg');
                btn.classList.add('bg-slate-800', 'text-slate-300');
            }
        });
    }
</script>
@endpush
