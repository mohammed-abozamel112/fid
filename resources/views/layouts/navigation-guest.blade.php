@php
    $isRtl = app()->getLocale() === 'ar';
@endphp
<header class="w-full fixed top-0 lg:max-w-4xl max-w-[335px] text-sm not-has-[nav]:hidden z-50">
    @if (Route::has('login'))
        <nav class="fixed top-0 z-50 w-full bg-transparent text-[#A31621] shadow-md">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <div class="flex flex-shrink-0 items-center space-x-2">
                            <div class="flex h-12 w-12 items-center justify-center">
                                <img src="{{ asset('storage/logo.png') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Menu -->
                    <div class="hidden md:flex md:items-center md:space-x-6">
                        @php
                            $navLinks = [
                                [
                                    'name' => app()->getLocale() === 'en' ? 'Home' : 'الرئيسية',
                                    'href' => url(route('home', ['lang' => app()->getLocale()], false)),
                                ],
                                [
                                    'name' => app()->getLocale() === 'en' ? 'About' : 'من نحن',
                                    'href' => url(app()->getLocale() . '#about'),
                                ],
                                [
                                    'name' => app()->getLocale() === 'en' ? 'Services' : 'خدماتنا',
                                    'href' => url(app()->getLocale() . '#services'),
                                ],
                            ];
                            $activeLink = request()->url();
                        @endphp
                        @foreach ($navLinks as $link)
                            <a href="{{ $link['href'] }}"
                                class="min-w-max cursor-pointer px-3 py-2 text-sm font-medium nav-scroll-trigger
                                    {{ $activeLink === $link['href'] ? 'border-b-2 border-blue-500 text-[#A31621]' : 'text-[#A31621] hover:border-b-2 hover:border-blue-500' }}">
                                {{ $link['name'] }}
                            </a>
                        @endforeach
                        <a href="#" target="_blank"
                            class="min-w-max bg-[#A31621] hover:bg-red-700 text-white px-6 py-1 rounded-full text-lg font-medium transition-all duration-200 hover:shadow-xl hover:-translate-y-1 group">
                            {{ app()->getLocale() === 'en' ? 'Connect' : 'تواصل معنا' }}
                        </a>

                        {{--  button to change lang --}}
                        {{--  <a
                            href="{{ route(Route::currentRouteName(), ['lang' => app()->getLocale() === 'ar' ? 'en' : 'ar', 'tag' => request()->route('tag'),'blog'=>request()->route('blog')]) }}">
                            {{ app()->getLocale() === 'ar' ? 'English' : 'العربية' }}
                        </a> --}}
                        @php
                            // Define languages
                            $locales = ['en' => 'English', 'ar' => 'العربية'];
                            $currentLocale = app()->getLocale();
                            $nextLocale = $currentLocale === 'en' ? 'ar' : 'en';

                            // Get current route info
                            $currentRoute = request()->route();
                            $currentRouteName = $currentRoute->getName();
                            $currentRouteParameters = $currentRoute->parameters();

                            // Merge parameters with new lang
                            $params = array_merge($currentRouteParameters, ['lang' => $nextLocale]);

                            try {
                                $url = route($currentRouteName, $params);
                            } catch (\Exception $e) {
                                $url = url('/' . $nextLocale);
                            }
                        @endphp

                        <div class="flex items-center w-full {{ $isRtl ? 'sm:me-6' : 'sm:ms-6' }}">
                            <a href="{{ $url }}"
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md
              text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                {{ app()->getLocale() === 'en' ? 'العربية' : 'English' }}
                            </a>
                        </div>




                    </div>

                    <!-- Mobile menu button -->
                    <div class="flex items-center md:hidden">
                        <button id="mobile-menu-button" type="button"
                            class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-blue-500 focus:outline-none focus:ring-inset"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg id="menu-open-icon" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <svg id="menu-close-icon" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden space-y-1 bg-[#c4c4cf80] px-2 pt-2 pb-3 md:hidden">
                @foreach ($navLinks as $link)
                    <a href="{{ $link['href'] }}"
                        class="block cursor-pointer rounded-md px-3 py-2 text-center text-base font-medium
                            {{ $activeLink === $link['href'] ? 'bg-[#A31621] text-white' : 'text-[#A31621] hover:bg-[#A31621] hover:text-white' }}">
                        {{ $link['name'] }}
                    </a>
                @endforeach
                <button type="button"
                    class="mt-2 w-full rounded-md bg-gradient-to-r from-purple-600 to-blue-500 px-4 py-2 transition-colors duration-300 hover:from-blue-500 hover:to-purple-600">
                    Connect
                </button>
                @php
                    // Define languages
                    $locales = ['en' => 'English', 'ar' => 'العربية'];
                    $currentLocale = app()->getLocale();
                    $nextLocale = $currentLocale === 'en' ? 'ar' : 'en';

                    // Get current route info
                    $currentRoute = request()->route();
                    $currentRouteName = $currentRoute->getName();
                    $currentRouteParameters = $currentRoute->parameters();

                    // Merge parameters with new lang
                    $params = array_merge($currentRouteParameters, ['lang' => $nextLocale]);

                    try {
                        $url = route($currentRouteName, $params);
                    } catch (\Exception $e) {
                        $url = url('/' . $nextLocale);
                    }
                @endphp

                <div class="flex items-center w-full">
                    <a href="{{ $url }}"
                        class="w-full inline-flex justify-center items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md
              text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        {{ app()->getLocale() === 'en' ? 'العربية' : 'English' }}
                    </a>
                </div>



            </div>
        </nav>
    @endif

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const links = document.querySelectorAll(".nav-scroll-trigger");

            function setActiveLink(hash) {
                links.forEach(link => {
                    if (link.hash === hash) {
                        link.classList.add("border-b-2", "border-[#A31621]", "text-[#A31621]");
                        link.classList.remove("text-[#A31621]");
                    } else {
                        link.classList.remove("border-b-2", "border-[#A31621]", "text-[#A31621]");
                        link.classList.add("text-[#A31621]");
                    }
                });
            }

            // Click → update active
            links.forEach(link => {
                link.addEventListener("click", function() {
                    setActiveLink(this.hash);
                });
            });

            // If page opens with a hash
            if (window.location.hash) {
                setActiveLink(window.location.hash);
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuOpenIcon = document.getElementById('menu-open-icon');
            const menuCloseIcon = document.getElementById('menu-close-icon');

            // Toggle mobile menu
            menuButton.addEventListener('click', function(e) {
                e.stopPropagation();
                const isHidden = mobileMenu.classList.contains('hidden');
                mobileMenu.classList.toggle('hidden', !isHidden);
                menuOpenIcon.classList.toggle('hidden', isHidden);
                menuCloseIcon.classList.toggle('hidden', !isHidden);
                menuButton.setAttribute('aria-expanded', isHidden ? 'true' : 'false');
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                if (
                    !mobileMenu.classList.contains('hidden') &&
                    !mobileMenu.contains(event.target) &&
                    !menuButton.contains(event.target)
                ) {
                    mobileMenu.classList.add('hidden');
                    menuOpenIcon.classList.remove('hidden');
                    menuCloseIcon.classList.add('hidden');
                    menuButton.setAttribute('aria-expanded', 'false');
                }
            });

            // Optional: Close menu when a link is clicked (for better UX)
            mobileMenu.querySelectorAll('a, button').forEach(function(el) {
                el.addEventListener('click', function() {
                    mobileMenu.classList.add('hidden');
                    menuOpenIcon.classList.remove('hidden');
                    menuCloseIcon.classList.add('hidden');
                    menuButton.setAttribute('aria-expanded', 'false');
                });
            });
        });
    </script>
</header>
