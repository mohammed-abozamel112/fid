<x-master-layout>
    @php
        $isRtl = app()->getLocale() === 'ar';
    @endphp
    {{-- hero section --}}
    @php
        $img = $gallery->first();

    @endphp
    <section id="hero" class="w-full h-screen relative overflow-hidden">
        {{-- Background Gradient --}}
        <div class="absolute inset-0 bg-gradient-to-br from-[#FCF7F8] via-white to-red-50"></div>

        {{-- Animated Background Elements --}}
        {{--       <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-4 -right-4 w-72 h-72 bg-[#A31621]/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-8 -left-8 w-96 h-96 bg-red-300/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/3 left-1/4 w-2 h-2 bg-[#A31621] rounded-full animate-bounce delay-300"></div>
        <div class="absolute top-2/3 right-1/4 w-3 h-3 bg-red-400 rounded-full animate-bounce delay-700"></div>
      </div> --}}

        <div class="relative z-10 container mx-auto px-4 pt-32 pb-16">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center min-h-[70vh]">
                    {{-- Left Column - Content --}}
                    <div class="space-y-8 animate-fade-in-up">
                        {{-- Badge --}}
                        <div
                            class="inline-flex items-center px-4 py-2 rounded-full bg-[#A31621]/10 text-[#A31621] text-sm font-medium">
                            <span class="w-2 h-2 bg-[#A31621] rounded-full mr-2 animate-pulse"></span>
                            Digital Agency Excellence
                        </div>

                        {{-- Main Heading --}}
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                            <span class="text-gray-900 block">Empowering Brands</span>
                            <span class="text-gray-900 block">through</span>
                            <span
                                class="bg-gradient-to-r from-[#A31621] to-red-600 bg-clip-text text-transparent block">
                                Code & Creativity
                            </span>
                        </h1>

                        {{-- Subtitle --}}
                        <p class="text-xl text-gray-600 dark:text-gray-300 leading-relaxed max-w-lg">
                            We're a modern digital agency combining creative marketing,
                            brand storytelling, and advanced programming to transform your digital presence.
                        </p>

                        {{-- Statistics --}}
                        <div class="grid grid-cols-3 gap-6 py-6 border-t border-gray-200 dark:border-slate-700">
                            <div>
                                <div class="text-2xl font-bold text-[#A31621]">150+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Projects</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-[#A31621]">98%</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Satisfaction</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-[#A31621]">8+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Years</div>
                            </div>
                        </div>

                        {{-- CTA Buttons --}}
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#portfolio"
                                class="bg-[#A31621] hover:bg-red-700 text-white px-8 py-3 rounded-full text-lg font-medium transition-all duration-200 hover:shadow-xl hover:-translate-y-1 group">
                                View Our Work
                                <span class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform">&#8594;</span>
                            </a>
                            <a href="#about"
                                class="border-[#A31621] text-[#A31621] hover:bg-[#A31621] hover:text-white px-8 py-3 rounded-full text-lg font-medium transition-all duration-200 hover:shadow-lg group">
                                <span class="mr-2 h-5 w-5">&#9654;</span>
                                Learn More
                            </a>
                        </div>

                        {{-- Trust Indicators --}}
                        {{--   <div class="pt-8">
                                <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">Trusted by innovative companies</p>
                                <div class="flex items-center space-x-6 opacity-60">
                                    <div class="text-lg font-semibold text-gray-400">TechFlow</div>
                                    <div class="text-lg font-semibold text-gray-400">UrbanCo</div>
                                    <div class="text-lg font-semibold text-gray-400">EcoMarket</div>
                                    <div class="text-lg font-semibold text-gray-400">MedTech</div>
                                </div>
                            </div> --}}
                    </div>

                    {{-- Right Column - Visual Element --}}
                    <div class="relative">
                        {{-- Main Card --}}
                        <div
                            class="relative bg-white  rounded-3xl shadow-2xl p-8 transform rotate-3 hover:rotate-0 transition-transform duration-500">
                            <div class="space-y-6">
                                {{-- Header --}}
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                        <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                        <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                    </div>
                                    <div class="text-sm text-gray-400">Fid Company</div>
                                </div>

                                {{-- Content --}}
                                <div class="space-y-4">
                                    <div class="h-4 bg-gradient-to-r from-[#A31621] to-red-400 rounded w-3/4"></div>
                                    <div class="h-3 bg-gray-200 dark:bg-slate-600 rounded w-full"></div>
                                    <div class="h-3 bg-gray-200 dark:bg-slate-600 rounded w-5/6"></div>
                                    <div class="h-3 bg-gray-200 dark:bg-slate-600 rounded w-4/6"></div>

                                </div>

                                {{-- Mock Chart --}}
                                <div class="bg-gray-50 dark:bg-slate-700 rounded-lg p-4">
                                    {{--  <div class="flex items-end space-x-2 h-20">
                                        <div class="bg-[#A31621] w-6 h-12 rounded-sm"></div>
                                        <div class="bg-red-400 w-6 h-16 rounded-sm"></div>
                                        <div class="bg-red-300 w-6 h-10 rounded-sm"></div>
                                        <div class="bg-[#A31621] w-6 h-20 rounded-sm"></div>
                                        <div class="bg-red-400 w-6 h-14 rounded-sm"></div>
                                        <div class="bg-red-300 w-6 h-8 rounded-sm"></div>
                                    </div> --}}
                                    <img class="w-full max-h-48 object-cover"
                                        src="{{ asset('storage/' . 'main.png') ?? $img->image }}" alt="">
                                </div>
                            </div>
                        </div>

                        {{-- Floating Elements --}}
                        <div
                            class="absolute -top-6 -right-6 w-16 h-16 bg-gradient-to-r from-[#A31621] to-red-600 rounded-2xl flex items-center justify-center text-white font-bold text-xl animate-bounce">
                            <span>⚡</span>
                        </div>

                        <div
                            class="absolute -bottom-4 -left-4 w-12 h-12 bg-gradient-to-r from-[#A31621] to-red-600 rounded-xl flex items-center justify-center text-white font-bold animate-pulse">
                            <span>✨</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Scroll Indicator --}}
        <a href="#about" class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce z-30">
            <div class="w-6 h-10 border-2 border-[#A31621] rounded-full flex justify-center">
                <div class="w-1 h-3 bg-[#A31621] rounded-full mt-2 animate-pulse"></div>
            </div>
        </a>
    </section>

    {{-- about us --}}
    <section class="bg-gray-200 w-full transition-colors duration-400 pt-20 pb-2" id="about">
        <div
            class="max-w-screen-xl mx-auto px-6 pt-8 grid gap-6 min-h-max
                sm:grid-cols-[350px] sm:justify-center
                xl:grid-cols-[460px_525px] xl:gap-x-36 xl:gap-y-4 xl:items-center">

            <h2 class="relative text-3xl font-bold w-max mx-auto mb-8 about-title-decoration xl:text-5xl">
                <span class="relative z-10">{{ app()->getLocale() === 'en' ? 'About Us.' : 'من نحن' }}</span>
            </h2>

            <div
                class="relative justify-self-center my-[2.5rem] mb-[4.5rem]
                    xl:order-[-1] xl:row-span-2">
                <div class="w-[220px] xl:w-[350px]">
                    <img src="https://images.unsplash.com/photo-1577565177023-d0f29c354b69?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTI3Njk4OTB8&ixlib=rb-4.0.3&q=85"
                        alt="image"
                        class="relative block max-w-full h-auto border-4 border-white z-10 rounded-lg shadow-[rgba(0,0,0,0.2)_0px_8px_24px] xl:border-6">

                    <div class="about-perfil-shadow"></div>

                    <div class="about-geometric-shape about-perfil-geometric-box-position"></div>

                    <div class="about-perfil-square-box"></div>
                </div>
            </div>

            <div class="{{ $isRtl ? 'pr-5 xl:self-start xl:pr-12' : 'pl-5 xl:self-start xl:pl-12' }}">
                <p class="relative text-black mb-6 about-description-line xl:text-2xl">
                    Passionate about creating <b>Web Pages</b> with
                    <b>UI/UX User Interface</b>, I have years of
                    experience and many clients are happy with
                    the projects carried out.
                </p>

                <ul class="text-black mb-12 xl:mb-20">
                    <li>
                        <b>{{ app()->getLocale() === 'en' ? 'Our Skills:' : 'مهاراتنا :' }}</b> HTML, CSS, JavaScript,
                        React, Git & GitHub, Bootstrap, Flutter &
                        Figma.
                    </li>
                </ul>

                <div class="flex justify-evenly items-center m-auto max-w-[50%] sm:max-w-[100%]:">
                    <a href="#contact"
                        class="flex items-center justify-center {{ $isRtl ? 'space-x-reverse' : 'space-x-2' }} bg-black text-white font-medium py-4 px-6 rounded-lg transition-colors duration-400 hover:bg-orange-500">
                        <i class="ri-send-plane-line text-xl"></i>
                        {{ app()->getLocale() === 'en' ? 'Contact Us' : 'اتصل بنا' }}
                    </a>

                    <a href="https://www.linkedin.com/" target="_blank"
                        class="flex items-center justify-center {{ $isRtl ? 'space-x-reverse' : 'space-x-2' }} border-3 border-black text-black p-2 rounded-[0.7rem] transition-all duration-400 hover:border-orange-500 hover:text-orange-500 xl:p-3">
                        <i class="ri-linkedin-box-line text-xl xl:text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- about us --}}


    {{-- services section --}}
    <section class="w-full bg-transparent text-[#A31621]" id="services">
        {{-- section for services --}}
        <h2 class="mt-2 text-8xl font-bold text-center gradient-text" id="services">
            {{ app()->getLocale() === 'en' ? 'Our services' : 'خدماتنا' }}
        </h2>
        <div class="section">
            <div class="section-wrapper py-5">
                <div class="content-wrapper py-3">
                    @foreach ($services as $index => $service)
                        <div class="content content-{{ $index + 1 }}">
                            <div class="mobile-visual">
                                <img class="card-img" src="{{ asset('storage/' . $service->image) }}"
                                    alt="{{ $service->name }}" />
                            </div>
                            <div class="meta">
                                <h2 class="text-6xl text-break py-3">{{ $service->name }}</h2>
                                <p class="desc text-2xl text-gray-500 text-break p-2 text-justify">
                                    {{ $service->short_description }}</p>
                                <!-- tag links page -->
                                {{-- only for service selection --}}

                                <div class="my-2 py-5 inline-flex flex-wrap gap-2" id="tags">
                                    @foreach ($service->tags as $tag)
                                        <a href="{{ $tag->url }}"
                                            class="inline-block rounded-full border border-gray-300 px-3 py-1 text-sm text-gray-700 hover:bg-gray-100"
                                            target="_blank" rel="noopener noreferrer">
                                            {{ $tag->name }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="visual">
                    <div class="card-wrapper">
                        @foreach ($services as $index => $service)
                            <div class="card card-{{ $index + 1 }}">
                                <img class="card-img" src="{{ asset('storage/' . $service->image) }}"
                                    alt="{{ $service['name'] }}" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- section for works --}}

    {{-- Portfolio Section --}}
    <section id="portfolio" class="w-full py-20 bg-gradient-to-br from-gray-50 to-white ">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                {{-- Section Header --}}
                <div class="text-center mb-16">
                    <div
                        class="inline-flex items-center px-4 py-2 rounded-full bg-[#A31621]/10 text-[#A31621] text-sm font-medium mb-6">
                        <span class="w-2 h-2 bg-[#A31621] rounded-full mr-2 animate-pulse"></span>
                        {{ app()->getLocale() === 'en' ? 'Our Portfolio' : 'أعمالنا' }}
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-[#A31621] mb-6">
                        {{ app()->getLocale() === 'en' ? 'Success Stories & ' : 'قصص النجاح و' }}
                        <span
                            class="text-gradient">{{ app()->getLocale() === 'en' ? 'Project Showcase' : 'عرض المشاريع' }}</span>
                    </h2>
                    <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                        {{ app()->getLocale() === 'en'
                            ? "Explore our diverse portfolio of successful projects across industries. From startups to enterprise solutions, see how we've helped clients achieve their goals."
                            : 'استكشف مجموعة متنوعة من مشاريعنا الناجحة في مختلف الصناعات. من الشركات الناشئة إلى الحلول المؤسسية، شاهد كيف ساعدنا عملاءنا على تحقيق أهدافهم.' }}
                    </p>
                </div>
                {{-- create filter using project category --}}
                <div class="mb-8">
                    <div class="flex flex-wrap gap-2 w-full justify-center">
                        <button
                            class="px-4 py-2 rounded-full bg-[#A31621]/10 text-[#A31621] text-sm font-medium hover:bg-[#A31621]/20 transition"
                            onclick="filterPortfolio('')">
                            {{ app()->getLocale() === 'en' ? 'All' : 'الكل' }}
                        </button>
                        @foreach ($portfolioProjects->pluck('category')->unique() as $category)
                            <button
                                class="px-4 py-2 rounded-full bg-[#A31621]/10 text-[#A31621] text-sm font-medium hover:bg-[#A31621]/20 transition"
                                data-filter="{{ $category }}"
                                onclick="filterPortfolio('{{ $category }}')">
                                {{ $category }}
                            </button>
                        @endforeach
                    </div>
                </div>

                {{-- Projects Grid --}}
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 mb-16">
                    @foreach ($portfolioProjects as $project)
                        <div class="portfolio-card group cursor-pointer bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300"
                            data-filter="{{ $project->category }}">
                            {{-- Project Image --}}
                            <div class="relative overflow-hidden rounded-t-2xl">
                                <img src="{{ $project->image }}" alt="{{ $project->title }}"
                                    class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500"
                                    loading="lazy" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-red-900/20 to-red-500/20 opacity-0 group-hover:opacity-90 transition-opacity duration-300 flex items-center justify-center">
                                    <div
                                        class="flex flex-col text-center text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                        <span class="inline-block mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 16h-1v-4h-1m4 4h-1v-4h-1m4 4h-1v-4h-1m4 4h-1v-4h-1" />
                                            </svg>
                                        </span>
                                        <a href="{{ $project->external_url }}" target="_blank"
                                            alt="{{ $project->title }}" class="text-sm font-medium">
                                            {{ app()->getLocale() === 'en' ? 'View Details' : 'عرض التفاصيل' }}</a>
                                    </div>
                                </div>
                            </div>
                            {{-- Project Content --}}
                            <div class="p-6 space-y-4">
                                <div class="flex items-center justify-between">
                                    <span
                                        class="text-sm text-[#A31621] font-medium bg-[#A31621]/10 px-3 py-1 rounded-full">
                                        {{ $project->category }}
                                    </span>
                                    <div class="flex space-x-2">
                                        @if ($project->github_url)
                                            <a href="{{ $project->github_url }}" target="_blank"
                                                class="p-2 text-gray-400 hover:text-[#A31621] transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 .5C5.73.5.5 5.73.5 12c0 5.08 3.29 9.39 7.86 10.91.58.11.79-.25.79-.56 0-.28-.01-1.02-.02-2-3.2.7-3.88-1.54-3.88-1.54-.53-1.34-1.3-1.7-1.3-1.7-1.06-.72.08-.71.08-.71 1.17.08 1.79 1.2 1.79 1.2 1.04 1.78 2.73 1.27 3.4.97.11-.75.41-1.27.74-1.56-2.55-.29-5.23-1.28-5.23-5.7 0-1.26.45-2.29 1.19-3.1-.12-.29-.52-1.46.11-3.05 0 0 .97-.31 3.18 1.18a11.1 11.1 0 0 1 2.9-.39c.98.01 1.97.13 2.9.39 2.2-1.49 3.17-1.18 3.17-1.18.63 1.59.23 2.76.11 3.05.74.81 1.19 1.84 1.19 3.1 0 4.43-2.69 5.41-5.25 5.7.42.36.79 1.09.79 2.2 0 1.59-.01 2.87-.01 3.26 0 .31.21.68.8.56C20.71 21.39 24 17.08 24 12c0-6.27-5.23-11.5-12-11.5z" />
                                                </svg>
                                            </a>
                                        @endif
                                        {{--  @if ($project->external_url)
                                            <a href="{{ $project->external_url }}" target="_blank" class="p-2 text-gray-400 hover:text-[#A31621] transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 3h7v7m0 0L10 21l-7-7 11-11z"/></svg>
                                            </a>
                                        @endif --}}
                                    </div>
                                </div>
                                <div>
                                    <h3
                                        class="text-xl font-bold text-gray-900 mb-2 group-hover:text-[#A31621] transition-colors">
                                        {{ $project->title }}
                                    </h3>
                                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                                        {{ $project->description }}
                                    </p>
                                </div>
                                {{-- Technologies --}}
                                <div class="flex flex-wrap gap-2">
                                    @foreach ($project->tags as $tech)
                                        <span
                                            class="text-xs bg-gray-100 dark:bg-slate-700 text-gray-600 dark:text-gray-300 px-3 py-1 rounded-full">
                                            {{ $tech->name }}
                                        </span>
                                    @endforeach
                                </div>
                                {{--   <div class="pt-4 border-t border-gray-200 dark:border-slate-700">
                                        <div
                                            class="text-[#A31621] font-medium text-sm group-hover:underline flex items-center">
                                            {{ app()->getLocale() === 'en' ? 'View Case Study' : 'عرض دراسة الحالة' }}
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                        </div>
                                    </div> --}}
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Stats Section --}}
                <div
                    class="bg-white dark:bg-slate-800 rounded-3xl p-8 md:p-12 mb-16 border border-gray-200 dark:border-slate-700">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
                            {{ app()->getLocale() === 'en' ? 'Project Impact' : 'أثر المشاريع' }}</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            {{ app()->getLocale() === 'en' ? 'Measurable results from our portfolio projects' : 'نتائج قابلة للقياس من مشاريعنا' }}
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-[#A31621] mb-2">95%</div>
                            <div class="text-gray-600 dark:text-gray-300">
                                {{ app()->getLocale() === 'en' ? 'Client Retention Rate' : 'معدل الاحتفاظ بالعملاء' }}
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-[#A31621] mb-2">2.5x</div>
                            <div class="text-gray-600 dark:text-gray-300">
                                {{ app()->getLocale() === 'en' ? 'Average ROI Increase' : 'متوسط زيادة العائد' }}</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-[#A31621] mb-2">40%</div>
                            <div class="text-gray-600 dark:text-gray-300">
                                {{ app()->getLocale() === 'en' ? 'Traffic Growth' : 'نمو الزيارات' }}</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-[#A31621] mb-2">24/7</div>
                            <div class="text-gray-600 dark:text-gray-300">
                                {{ app()->getLocale() === 'en' ? 'System Uptime' : 'تشغيل النظام' }}</div>
                        </div>
                    </div>
                </div>

                {{-- CTA Section --}}
                <div class="text-center bg-gradient-to-r from-[#A31621] to-red-600 rounded-3xl p-8 md:p-12 text-white">
                    <h3 class="text-3xl md:text-4xl font-bold mb-4">
                        {{ app()->getLocale() === 'en' ? 'Ready to Start Your Success Story?' : 'هل أنت مستعد لبدء قصة نجاحك؟' }}
                    </h3>
                    <p class="text-lg text-red-100 mb-8 max-w-2xl mx-auto">
                        {{ app()->getLocale() === 'en'
                            ? "Join our portfolio of successful projects. Let's create something amazing together that drives real business results."
                            : 'انضم إلى مجموعة مشاريعنا الناجحة. دعنا نبتكر شيئًا مذهلاً معًا يحقق نتائج حقيقية.' }}
                    </p>
                    <a href="#contact"
                        class="bg-white text-[#A31621] hover:bg-gray-100 px-8 py-4 rounded-full text-lg font-medium transition-all duration-200 hover:shadow-xl hover:-translate-y-1 group inline-flex items-center justify-center">
                        {{ app()->getLocale() === 'en' ? 'Start Your Project' : 'ابدأ مشروعك' }}
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- End Portfolio Section --}}

    {{-- section for works --}}

    {{-- Clients Section --}}

    <section id="reviews" class="py-20 w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-[#A31621] {{ $isRtl ? 'font-arabic' : '' }}">
                    {{ $isRtl ? 'ماذا يقول عملاؤنا' : 'What Our' }}
                    <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                        {{ $isRtl ? 'العملاء' : 'Clients' }}
                    </span>
                    {{ $isRtl ? 'عنا' : 'Say' }}
                </h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed text-center">
                    {{ $isRtl
                        ? 'موثوق به من قبل الشركات في مجالات التقنية والموضة والشركات الناشئة لتحقيق نتائج استثنائية ودفع نمو الأعمال.'
                        : 'Trusted by companies across tech, fashion, and startup sectors to deliver exceptional results and drive business growth.' }}
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                @foreach ($latestReviews as $review)
                    <div
                        class="relative p-8 rounded-2xl glasseff hover:shadow-xl transition-all duration-300 hover:scale-105 {{ $isRtl ? 'text-right' : 'text-left' }}">
                        <div class="absolute top-4 {{ $isRtl ? 'right-4' : 'left-4' }} text-blue-600 opacity-20">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M17 8h2a2 2 0 0 1 2 2v3a4 4 0 0 1-4 4h-1m-8-7h2a2 2 0 0 1 2 2v3a4 4 0 0 1-4 4H7" />
                            </svg>
                        </div>
                        <div class="flex justify-evenly items-center mb-6 {{ $isRtl ? 'flex-row-reverse' : '' }}">
                            <img src="{{ $review->image ?? asset('storage/logo.png') }}" alt="{{ $review->name }}"
                                class="w-16 h-16 rounded-full object-cover {{ $isRtl ? 'mr-4' : 'ml-4' }}">
                            <div class="{{ $isRtl ? 'text-right' : 'text-left' }}">
                                <h4 class="text-lg font-semibold text-[#A31621]">{{ $review->name }}</h4>
                            </div>
                        </div>

                        <p class="text-gray-600 leading-relaxed italic {{ $isRtl ? 'text-right' : 'text-left' }}">
                            "{{ $review->review }}"
                        </p>
                        <div class="flex my-4 text-yellow-400 justify-center">
                            @for ($i = 0; $i < 5; $i++)
                                @if ($i < ($review->rating ?? 5))
                                    &#9733;
                                @else
                                    <span class="text-gray-300">&#9733;</span>
                                @endif
                            @endfor
                        </div>
                    </div>
                @endforeach
            </div>
            @if ($latestReviews->isNotEmpty())
                @php
                    $averageRating = round($latestReviews->avg('rating'), 1);
                    $reviewsCount = $latestReviews->count();
                @endphp
                <div class="mt-12 text-center">
                    <div
                        class="inline-flex items-center px-6 py-3 rounded-full bg-gray-100 border border-gray-200 {{ $isRtl ? 'flex-row-reverse' : '' }}">
                        <div class="flex {{ $isRtl ? 'mr-3' : 'ml-3' }} text-yellow-400">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= floor($averageRating))
                                    &#9733;
                                @elseif ($i - $averageRating < 1)
                                    <span class="text-yellow-300">&#9733;</span>
                                @else
                                    <span class="text-gray-300">&#9733;</span>
                                @endif
                            @endfor
                        </div>
                        <span class="font-semibold text-gray-900 {{ $isRtl ? 'mr-2' : 'ml-2' }}">
                            {{ $isRtl ? "متوسط التقييم {$averageRating}/5 " : "{$averageRating}/5 Average Rating " }}
                        </span>
                        <span class="text-sm text-gray-600 {{ $isRtl ? 'mr-2' : 'ml-2' }}">
                            {{ $isRtl ? "({$reviewsCount} مراجعة)" : "({$reviewsCount} Reviews)" }}
                        </span>
                    </div>
                </div>
            @endif
        </div>
    </section>


    {{-- Clients Section --}}

    {{-- blogs --}}

    <section id="blogs" class="py-20 w-full relative overflow-hidden text-[#A31621]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    {{ app()->getLocale() === 'en' ? 'Latest Blogs' : 'أحدث المدونات' }}
                </h2>
                <p class="text-xl max-w-2xl mx-auto leading-relaxed text-gray-300">
                    {{ app()->getLocale() === 'en' ? 'Check out our latest blog posts and updates.' : 'اطلع على أحدث منشورات المدونة والتحديثات.' }}
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($latestPosts as $post)
                    <div
                        class="bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer relative min-h-[20rem] ">
                        @if ($post->tags->isNotEmpty())
                            @foreach ($post->tags as $tag)
                                <span
                                    class="bg-blue-500 text-white text-xs px-2 py-1 rounded-full inline-block whitespace-nowrap absolute z-50 top-2">
                                    {{ $tag->name }}
                                </span>
                            @endforeach
                        @else
                            <span
                                class="bg-blue-500 text-white text-xs px-2 py-1 rounded-full inline-block whitespace-nowrap absolute z-50 top-2">
                                {{ app()->getLocale() === 'en' ? 'general' : 'عام' }}
                            </span>
                        @endif
                        <a class="w-full h-full"
                            href="{{ route('blogs.show', ['lang' => app()->getLocale(), 'blog' => $post->id]) }}">
                            @if ($post->image)
                                <img src="{{ $post->image ? $post->image : asset('storage/' . $post->image) }}"
                                    alt="{{ $post->title }}" class="w-full h-full object-cover hover:blur-sm" />
                            @endif
                            <div class="p-6 absolute bottom-0">
                                <h3 class="text-2xl font-bold mb-2">{{ $post->title }}</h3>
                                <p class="text-gray-300 mb-4">
                                    {{ Str::limit($post->short_description, 150) }}</p>
                                <span
                                    class="text-blue-400 hover:underline">{{ app()->getLocale() === 'en' ? 'Read More' : 'اعرف المزيد' }}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- blogs --}}


    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif


<script>
    function filterPortfolio(category) {
        document.querySelectorAll('.portfolio-card').forEach(function(card) {
            if (category === '' || card.getAttribute('data-filter') === category) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>
</x-master-layout>
