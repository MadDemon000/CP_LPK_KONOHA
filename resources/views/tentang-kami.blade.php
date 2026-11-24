@extends('layout')

@section('title', __('messages.about_page_title'))
@section('content')
    <div>
        {{-- HERO / HEADER & MOTTO LPK --}}
        <section class="hero-section relative flex items-start bg-cover bg-center bg-no-repeat"
            style="background-image: url('{{ asset('assets/img/background.jpg') }}');">
            <div class="max-w-7xl mx-auto px-6 md:px-10 text-center relative z-10 pt-24 pb-16 md:pt-28 md:pb-20"
                data-animate="fade-up">
                <span
                    class="inline-block bg-red-600/90 text-white text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-4 shadow-md">
                    {{ __('messages.about_profile_badge') }}
                </span>

                <h1 class="text-3xl md:text-5xl font-extrabold mt-3 mb-5 leading-tight text-[#142344]">
                    {{ __('messages.about_hero_title') }}
                    <span class="text-[#c82036]">LPK Konoha</span>
                </h1>
                <p class="text-[#142344] max-w-3xl mx-auto text-base md:text-lg leading-relaxed mb-10">
                    {{ __('messages.about_hero_description') }}
                </p>

                {{-- MOTTO LPK --}}
                <div class="">
                    <span class="text-[#c82036] font-semibold text-sm tracking-[3px] uppercase">
                        {{ __('messages.about_motto_label') }}
                    </span>
                    <p class="text-xl md:text-2xl font-bold italic text-[#161615]">
                        {{ __('messages.about_motto') }}
                    </p>
                </div>
            </div>
        </section>

        {{-- VISI & MISI --}}
        <section class="w-full bg-white py-16 md:py-20">
            <div class="max-w-7xl mx-auto px-6 md:px-10" data-animate="fade-up">
                <div class="text-center mb-12">
                    <span class="text-[#c82036] font-semibold text-sm tracking-[3px] uppercase">
                        {{ __('messages.about_direction') }}
                    </span>
                    <h2 class="text-2xl md:text-3xl font-bold text-[#142344] mt-2">
                        {{ __('messages.about_vision_mission') }}
                    </h2>
                    <div class="w-16 h-1 bg-[#FFD21F] mx-auto mt-4 rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    {{-- VISI --}}
                    <div class="bg-white p-8 md:p-10 rounded-xl border-l-4 border-[#c82036]">
                        <span
                            class="inline-block bg-[#142344] text-white text-xs font-bold px-3 py-1 rounded uppercase tracking-wider mb-4">
                            {{ __('messages.about_vision_label') }}
                        </span>

                        <h3 class="text-xl md:text-2xl font-bold text-[#142344] mb-4">
                            {{ __('messages.about_vision_heading') }}
                        </h3>

                        <p class="text-[#142344] text-base leading-relaxed text-justify">
                            {{ __('messages.about_vision_description') }}
                        </p>
                    </div>

                    {{-- MISI --}}
                    <div
                        class="bg-white p-8 md:p-10 rounded-xl border border-gray-200 shadow-sm border-l-4 border-l-[#FFD21F]">
                        <span
                            class="inline-block bg-[#FFD21F] text-[#142344] text-xs font-bold px-3 py-1 rounded uppercase tracking-wider mb-4">
                            {{ __('messages.about_mission_label') }}
                        </span>

                        <h3 class="text-xl md:text-2xl font-bold text-[#142344] mb-4">
                            {{ __('messages.about_mission_heading') }}
                        </h3>

                        <ul class="space-y-3 text-gray-700 text-base leading-relaxed">
                            <li class="flex items-start gap-3">
                                <span class="text-[#c82036] font-bold mt-0.5">•</span>
                                <span>{{ __('messages.about_mission_1') }}</span>
                            </li>

                            <li class="flex items-start gap-3">
                                <span class="text-[#c82036] font-bold mt-0.5">•</span>
                                <span>{{ __('messages.about_mission_2') }}</span>
                            </li>

                            <li class="flex items-start gap-3">
                                <span class="text-[#c82036] font-bold mt-0.5">•</span>
                                <span>{{ __('messages.about_mission_3') }}</span>
                            </li>

                            <li class="flex items-start gap-3">
                                <span class="text-[#c82036] font-bold mt-0.5">•</span>
                                <span>{{ __('messages.about_mission_4') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        {{-- SISTEM PELATIHAN --}}
        <section class="w-full bg-[#e9edeb] py-16 md:py-20">
            <div class="max-w-7xl mx-auto px-6 md:px-10" data-animate="fade-up">
                <div class="text-center mb-12">
                    <span class="text-[#c82036] font-semibold text-sm tracking-[3px] uppercase">
                        {{ __('messages.about_learning_method') }}
                    </span>

                    <h2 class="text-2xl md:text-3xl font-bold text-[#142344] mt-2">
                        {{ __('messages.about_training_system') }}
                    </h2>

                    <div class="w-16 h-1 bg-[#FFD21F] mx-auto mt-4 rounded-full"></div>

                    <p class="max-w-2xl mx-auto text-gray-700 text-sm md:text-base mt-5">
                        {{ __('messages.about_training_description') }}
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white p-7 rounded-xl shadow-sm border-t-4 border-[#142344]">
                        <span class="text-3xl font-extrabold text-[#c82036]">01</span>
                        <h3 class="text-lg font-bold text-[#142344] mt-3 mb-2">
                            {{ __('messages.about_training_1_title') }}
                        </h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            {{ __('messages.about_training_1_description') }}
                        </p>
                    </div>

                    <div class="bg-white p-7 rounded-xl shadow-sm border-t-4 border-[#c82036]">
                        <span class="text-3xl font-extrabold text-[#c82036]">02</span>
                        <h3 class="text-lg font-bold text-[#142344] mt-3 mb-2">
                            {{ __('messages.about_training_2_title') }}
                        </h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            {{ __('messages.about_training_2_description') }}
                        </p>
                    </div>

                    <div class="bg-white p-7 rounded-xl shadow-sm border-t-4 border-[#FFD21F]">
                        <span class="text-3xl font-extrabold text-[#c82036]">03</span>
                        <h3 class="text-lg font-bold text-[#142344] mt-3 mb-2">
                            {{ __('messages.about_training_3_title') }}
                        </h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            {{ __('messages.about_training_3_description') }}
                        </p>
                    </div>

                    <div class="bg-white p-7 rounded-xl shadow-sm border-t-4 border-[#142344]">
                        <span class="text-3xl font-extrabold text-[#c82036]">04</span>
                        <h3 class="text-lg font-bold text-[#142344] mt-3 mb-2">
                            {{ __('messages.about_training_4_title') }}
                        </h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            {{ __('messages.about_training_4_description') }}
                        </p>
                    </div>
                </div>
            </div>
        </section>


        {{-- BIAYA PELATIHAN --}}
        <section class="w-full bg-white py-16 md:py-20">
            <div class="max-w-7xl mx-auto px-6 md:px-10" data-animate="fade-up">
                <div class="text-center mb-12">
                    <span class="text-[#c82036] font-semibold text-sm tracking-[3px] uppercase">
                        {{ __('messages.about_education_transparency') }}
                    </span>
                    <h2 class="text-2xl md:text-3xl font-bold text-[#142344] mt-2">
                        {{ __('messages.about_training_cost') }}
                    </h2>
                    <div class="w-16 h-1 bg-[#FFD21F] mx-auto mt-4 rounded-full"></div>
                    <p class="max-w-2xl mx-auto text-gray-600 text-sm md:text-base mt-5">
                        {{ __('messages.about_cost_description') }}
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
                    {{-- PAKET 1 --}}
                    <div
                        class="bg-[#142344] text-white rounded-xl p-8 flex flex-col shadow-lg relative border-2 border-[#FFD21F]">
                        <h3 class="text-xl font-bold text-white">
                            {{ __('messages.about_regular_class') }}
                        </h3>
                        <p class="text-sm text-white mt-1">
                            {{ __('messages.about_regular_duration') }}
                        </p>
                        <div class="my-6 pb-6 border-b border-gray-100">
                            <span class="text-3xl font-extrabold text-[#FFD21F]">
                                {{ __('messages.about_regular_price') }}</span>
                            <span class="text-white text-sm block mt-1">
                                {{ __('messages.about_installment_2x') }}
                            </span>
                        </div>
                        <ul class="space-y-3 text-sm text-white mb-8 flex-1">
                            <li class="flex items-center gap-2">
                                <span class="text-[#FFD21F] font-bold">✓</span>
                                {{ __('messages.about_regular_feature_1') }}
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-[#FFD21F] font-bold">✓</span>
                                {{ __('messages.about_regular_feature_2') }}
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-[#FFD21F] font-bold">✓</span>
                                {{ __('messages.about_regular_feature_3') }}
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-[#FFD21F] font-bold">✓</span>
                                {{ __('messages.about_regular_feature_4') }}
                            </li>
                        </ul>
                        <a href="https://wa.me/6285890498591"
                            class="w-full text-center py-3 px-4 bg-[#e9edeb] hover:bg-[#c82036] text-[#142344] hover:text-white font-semibold rounded-lg transition">
                            {{ __('messages.about_ask_program') }}
                        </a>
                    </div>

                    {{-- PAKET 2 (UNGGULAN) --}}
                    <div
                        class="bg-[#142344] text-white rounded-xl p-8 flex flex-col shadow-lg relative border-2 border-[#FFD21F]">
                        <span
                            class="bg-[#FFD21F] text-[#142344] text-xs font-extrabold px-3 py-1 rounded-full self-start mb-4 uppercase tracking-wider">
                            {{ __('messages.about_featured_program') }}
                        </span>
                        <h3 class="text-xl font-bold">
                            {{ __('messages.about_intensive_program') }}
                        </h3>
                        <p class="text-sm text-gray-300 mt-1">
                            {{ __('messages.about_intensive_duration') }}
                        </p>
                        <div class="my-6 pb-6 border-b border-white/15">
                            <span
                                class="text-3xl font-extrabold text-[#FFD21F]">{{ __('messages.about_intensive_price') }}</span>
                            <span class="text-gray-300 text-sm block mt-1">
                                {{ __('messages.about_financing_option') }}
                            </span>
                        </div>
                        <ul class="space-y-3 text-sm text-gray-100 mb-8 flex-1">
                            <li class="flex items-center gap-2">
                                <span class="text-[#FFD21F] font-bold">✓</span>
                                {{ __('messages.about_intensive_feature_1') }}
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-[#FFD21F] font-bold">✓</span>
                                {{ __('messages.about_intensive_feature_2') }}
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-[#FFD21F] font-bold">✓</span>
                                {{ __('messages.about_intensive_feature_3') }}
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-[#FFD21F] font-bold">✓</span>
                                {{ __('messages.about_intensive_feature_4') }}
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-[#FFD21F] font-bold">✓</span>
                                {{ __('messages.about_intensive_feature_5') }}
                            </li>
                        </ul>
                        <a href="{{ route('daftar') }}"
                            class="w-full text-center py-3 px-4 hover:bg-white bg-[#c82036] hover:text-[#142344] text-white font-semibold rounded-lg transition">
                            {{ __('messages.about_register_program') }}
                        </a>
                    </div>

                    {{-- PAKET 3 --}}
                    <div
                        class="bg-[#142344] text-white rounded-xl p-8 flex flex-col shadow-lg relative border-2 border-[#FFD21F]">
                        <h3 class="text-xl font-bold text-white">
                            {{ __('messages.about_ssw_program') }}
                        </h3>
                        <p class="text-sm text-white mt-1">
                            {{ __('messages.about_ssw_description') }}
                        </p>
                        <div class="my-6 pb-6 border-b border-gray-100">
                            <span
                                class="text-3xl font-extrabold text-[#FFD21F]">{{ __('messages.about_ssw_price') }}</span>
                            <span class="text-gray-500 text-sm block mt-1">
                                {{ __('messages.about_ssw_duration') }}
                            </span>
                        </div>
                        <ul class="space-y-3 text-sm text-white mb-8 flex-1">
                            <li class="flex items-center gap-2">
                                <span class="text-[#FFD21F] font-bold">✓</span>
                                {{ __('messages.about_ssw_feature_1') }}
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-[#FFD21F] font-bold">✓</span>
                                {{ __('messages.about_ssw_feature_2') }}
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-[#FFD21F] font-bold">✓</span>
                                {{ __('messages.about_ssw_feature_3') }}
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-[#FFD21F] font-bold">✓</span>
                                {{ __('messages.about_ssw_feature_4') }}
                            </li>
                        </ul>
                        <a href="https://wa.me/6285890498591"
                            class="w-full text-center py-3 px-4 bg-[#e9edeb] hover:bg-[#c82036] text-[#142344] hover:text-white font-semibold rounded-lg transition">
                            {{ __('messages.about_ask_program') }}
                        </a>
                    </div>
                </div>
            </div>
        </section>


        {{-- SUSUNAN PENGURUS & TENAGA PENGAJAR --}}
        <section class="w-full bg-[#e9edeb] py-10 md:py-15">
            <div class="max-w-7xl mx-auto px-6 md:px-10" data-animate="fade-up">

                {{-- SUSUNAN PENGURUS --}}
                <div class="mb-20">
                    <div class="text-center mb-12">
                        <span class="text-[#c82036] font-semibold text-sm tracking-[3px] uppercase">
                            {{ __('messages.about_management') }}
                        </span>
                        <h2 class="text-2xl md:text-3xl font-bold text-[#142344] mt-2">
                            {{ __('messages.about_management_structure') }}
                        </h2>
                        <div class="w-16 h-1 bg-[#FFD21F] mx-auto mt-4 rounded-full"></div>
                    </div>

                    @php
                        $pengurus = [
                            [
                                'nama' => 'Mujibur Rahman Qiyami, S.Kom.',
                                'jabatan' => 'management_director',
                                'img' => 'assets/img/profil1.jpg',
                            ],
                            [
                                'nama' => 'Dhilla Lutfiyana Novianti, S. Kom.',
                                'jabatan' => 'management_education',
                                'img' => 'assets/img/profil2.jpg',
                            ],
                            [
                                'nama' => 'M.Rivaldi Samsudin, S. Kom.',
                                'jabatan' => 'management_placement',
                                'img' => 'assets/img/profil3.jpg',
                            ],
                            [
                                'nama' => 'Satrio Dwi Putra, S. Kom.',
                                'jabatan' => 'management_administration',
                                'img' => 'assets/img/profil4.jpg',
                            ],
                        ];
                    @endphp

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach ($pengurus as $item)
                            <div
                                class="bg-white p-6 rounded-xl shadow-sm text-center border-b-4 border-[#142344] hover:shadow-md transition-shadow">
                                <img src="{{ $item['img'] }}" alt="{{ $item['nama'] }}"
                                    class="w-40 h-40 rounded-full object-cover mx-auto mb-4 border-2 border-[#142344]">

                                <h3 class="text-lg font-bold text-[#142344]">{{ $item['nama'] }}</h3>
                                <p class="text-sm font-medium text-[#c82036] mt-1">
                                    {{ __('messages.' . $item['jabatan']) }}</p>
                            </div>
                        @endforeach
                    </div>

                    {{-- TENAGA PENGAJAR --}}
                    <div class="text-center mb-5 w-full py-12 md:py-16">
                        <span class="text-[#c82036] font-semibold text-sm tracking-[3px] uppercase">
                            {{ __('messages.about_academic_team') }}
                        </span>

                        <h2 class="text-2xl md:text-3xl font-bold text-[#142344] mt-2">
                            {{ __('messages.about_teachers') }}
                        </h2>

                        <div class="w-16 h-1 bg-[#FFD21F] mx-auto mt-4 rounded-full"></div>

                        <p class="max-w-2xl mx-auto text-gray-700 text-sm md:text-base mt-5">
                            {{ __('messages.about_teacher_description') }}
                        </p>
                    </div>

                    @php
                        $pengajar = [
                            [
                                'nama' => 'Hafiz Basa (Sensei)',
                                'spesialisasi' => 'teacher_hafiz_specialization',
                                'kualifikasi' => 'teacher_hafiz_qualification',
                            ],
                            [
                                'nama' => 'Khael Takahashi',
                                'spesialisasi' => 'teacher_khael_specialization',
                                'kualifikasi' => 'teacher_khael_qualification',
                            ],
                            [
                                'nama' => 'Zakri Fah, S.Pd.',
                                'spesialisasi' => 'teacher_zakri_specialization',
                                'kualifikasi' => 'teacher_zakri_qualification',
                            ],
                            [
                                'nama' => 'Carol Aquilla',
                                'spesialisasi' => 'teacher_carol_specialization',
                                'kualifikasi' => 'teacher_carol_qualification',
                            ],
                        ];
                    @endphp

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach ($pengajar as $guru)
                            <div
                                class="bg-white p-6 rounded-xl shadow-sm flex items-start gap-4 border-l-4 border-[#c82036]">
                                <div
                                    class="w-14 h-14 rounded-lg bg-[#e9edeb] text-[#142344] shrink-0 flex items-center justify-center font-extrabold text-xl">
                                    {{ substr($guru['nama'], 0, 1) }}
                                </div>

                                <div>
                                    <h3 class="text-lg font-bold text-[#142344]">
                                        {{ $guru['nama'] }}
                                    </h3>

                                    <p class="text-sm font-semibold text-[#c82036] mt-0.5">
                                        {{ __('messages.' . $guru['spesialisasi']) }}
                                    </p>

                                    <p class="text-xs md:text-sm text-gray-600 mt-2 leading-relaxed">
                                        {{ __('messages.' . $guru['kualifikasi']) }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
        </section>

        <section class="w-full bg-white py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-6 md:px-10" data-animate="fade-up">
                <div class="grid grid-cols-1 gap-10">

                    {{-- MITRA LPK --}}
                    <div>

                        {{-- HEADER MITRA --}}
                        <div class="text-center mb-8">
                            <span class="text-[#c82036] font-semibold text-sm tracking-[3px] uppercase">
                                {{ __('messages.about_partnership_network') }}
                            </span>

                            <h2 class="text-2xl md:text-3xl font-bold text-[#142344] mt-2">
                                {{ __('messages.about_official_partners') }}
                            </h2>

                            <div class="w-16 h-1 bg-[#FFD21F] mx-auto mt-4 mb-6 rounded-full"></div>

                            <p class="text-gray-600 text-sm md:text-base leading-relaxed max-w-3xl mx-auto">
                                {{ __('messages.about_partner_description') }}
                            </p>
                        </div>

                        {{-- DAFTAR MITRA --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="bg-[#e9edeb] p-5 rounded-lg border-l-4 border-[#142344]">
                                <h4 class="font-bold text-[#142344]">
                                    {{ __('messages.partner_nihon_name') }}
                                </h4>
                                <p class="text-xs text-gray-600 mt-1">
                                    {{ __('messages.partner_nihon_description') }}
                                </p>
                            </div>

                            <div class="bg-[#e9edeb] p-5 rounded-lg border-l-4 border-[#142344]">
                                <h4 class="font-bold text-[#142344]">
                                    {{ __('messages.partner_sakura_name') }}
                                </h4>
                                <p class="text-xs text-gray-600 mt-1">
                                    {{ __('messages.partner_sakura_description') }}
                                </p>
                            </div>

                            <div class="bg-[#e9edeb] p-5 rounded-lg border-l-4 border-[#142344]">
                                <h4 class="font-bold text-[#142344]">
                                    {{ __('messages.partner_kansai_name') }}
                                </h4>
                                <p class="text-xs text-gray-600 mt-1">
                                    {{ __('messages.partner_kansai_description') }}
                                </p>
                            </div>

                            <div class="bg-[#e9edeb] p-5 rounded-lg border-l-4 border-[#142344]">
                                <h4 class="font-bold text-[#142344]">
                                     {{ __('messages.partner_lsp_name') }}
                                </h4>
                                <p class="text-xs text-gray-600 mt-1">
                                    {{ __('messages.partner_lsp_description') }}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

    </div>
@endsection
