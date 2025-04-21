<<<<<<< HEAD
   <!-- Header Starts Here-->
   <header>
    <nav
        class="w-full px-20 max-[599px]:px-6 py-3 max-[599px]:py-4 flex justify-between items-center fixed z-[999] top-0 left-0 bg-[#F5F7FF]">
        <div class="logo w-[20%] max-[599px]:w-1/2">
            <img class="w-full h-full object-cover" src="./assets/images/logo.svg" alt="">
        </div>
        <div class="menu max-[599px]:hidden">
            <ul class="flex gap-6">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('filamentblog.post.all')}}">Blog</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="{{route('contact')}}">Contact Us</a></li>
            </ul>
        </div>
        </div>
    </nav>
</header>
<!-- Header Ends Here-->
=======
 <!-- Header Starts Here-->
 <header class="fixed z-[999] top-0 left-0 w-full">
            <!-- Top Navigation (Email, Phone, Brochure) -->
            <nav
                class="w-full px-20 max-[1025px]:px-6 max-[599px]:px-4 py-2.5 bg-[#001361] text-white flex flex-wrap items-center justify-end gap-6 max-[1025px]:gap-4 text-[.8vw] max-[1025px]:text-sm max-[599px]:text-xs max-[599px]:hidden">

                <!-- Email -->
                <div class="flex items-center gap-2">
                    <span class="inline-block w-4 h-4 rounded-full bg-white"></span>
                    <p>hello@logoipsum.com</p>
                </div>

                <!-- Divider -->
                <div class="hidden max-[599px]:hidden sm:flex items-center gap-2">
                    <span class="inline-block w-[2px] h-6 bg-white/20"></span>
                </div>

                <!-- Phones -->
                <div class="flex items-center gap-2">
                    <span class="inline-block w-4 h-4 rounded-full bg-white"></span>
                    <p>+1 (999) 999-99-99</p>
                </div>
                <div class="flex items-center gap-2">
                    <span class="inline-block w-4 h-4 rounded-full bg-white"></span>
                    <p>+1 (999) 999-99-99</p>
                </div>

                <!-- Buttons -->
                <div class="flex items-center gap-2 max-[599px]:flex-col max-[599px]:items-start max-[599px]:w-full">
                    <button
                        class="px-4 py-1 border-2 border-white rounded-full text-xs max-[1025px]:text-sm w-full max-[599px]:w-full">
                        Company Brochure
                    </button>
                    <button
                        class="px-4 py-1 border-2 border-white rounded-full text-xs max-[1025px]:text-sm w-full max-[599px]:w-full">
                        Company Brochure
                    </button>
                </div>
            </nav>

            <!-- Main Navbar -->
            <nav
                class="w-full px-20 max-[1025px]:px-6 max-[599px]:px-4 py-3 flex justify-between items-center z-30 bg-[#F5F7FF]">
                <!-- Logo -->
                <div class="logo w-[13%] max-[1025px]:w-[20%] max-[599px]:w-1/2">
                    <img class="w-full h-full object-cover" src="./assets/images/Globalimages/logo.svg" alt="">
                </div>

                <!-- Hamburger (Mobile Only) -->
                <div class="hamburger w-[7%] hidden max-[599px]:block relative">
                    <img class="menu-icon w-full h-full bg-cover" src="./assets/images/Globalimages/menu.svg"
                        alt="Open Menu">
                </div>
                <img class="close-icon w-[7%] h-full bg-cover absolute top-0 right-4 z-20 hidden"
                    src="./assets/images/Globalimages/close.svg" alt="Close Menu">

                <!-- Desktop Menu -->
                <div class="menu max-[599px]:hidden">
                    <ul class="flex gap-6 text-[1vw] max-[1025px]:text-sm text-[#001361] font-medium">
                        <li><a href="{{route('home')}}" class="hover:text-orange-500 transition-all relative group">Home</a>
                        </li>

                        <li class="relative group">
                            <a
                                class="hover:text-orange-500 transition-all cursor-pointer flex items-center gap-1">
                                Services <span>▼</span>
                            </a>
                            <div id="servicesMenu"
                                class="hidden group-hover:flex w-[50vw] max-[1025px]:w-[90vw] bg-white text-[#040d2a] py-10 px-6 absolute top-10 -left-full -translate-x-1/2 z-50">
                                <!-- Sidebar -->
                                <div class="w-[20%]">
                                    <h2 class="text-xl font-bold mb-4">Services</h2>
                                    <p class="text-sm text-gray-500">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                </div>
                                <!-- Columns -->
                                <div class="w-[80%] flex flex-wrap gap-8">
                                    <div class="min-w-[150px]">
                                        <h3 class="font-semibold mb-2">Digital Marketing</h3>
                                        <ul class="space-y-1 text-gray-500 text-sm">
                                            <li>Lorem Ipsum</li>
                                        </ul>
                                    </div>
                                    <div class="min-w-[150px]">
                                        <h3 class="font-semibold mb-2">Visual Designing</h3>
                                        <ul class="space-y-1 text-gray-500 text-sm">
                                            <li>Lorem Ipsum</li>
                                        </ul>
                                    </div>
                                    <div class="min-w-[150px]">
                                        <h3 class="font-semibold mb-2">Content Creation</h3>
                                        <ul class="space-y-1 text-gray-500 text-sm">
                                            <li>Lorem Ipsum</li>
                                        </ul>
                                    </div>
                                    <div class="min-w-[150px]">
                                        <h3 class="font-semibold mb-2">Development</h3>
                                        <ul class="space-y-1 text-gray-500 text-sm">
                                            <li>Lorem Ipsum</li>
                                        </ul>
                                    </div>
                                    <div class="min-w-[150px]">
                                        <h3 class="font-semibold mb-2">Mobile Marketing</h3>
                                        <ul class="space-y-1 text-gray-500 text-sm">
                                            <li>Lorem Ipsum</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="relative group">
                            <a href="{{route('about')}}"
                                class="hover:text-orange-500 transition-all cursor-pointer flex items-center gap-1">
                                About
                            </a>
                        </li>

                        <li><a href="portfolio.html"
                                class="hover:text-orange-500 transition-all relative group">Portfolio</a></li>
                        <li><a href="{{route('contact')}}"
                                class="hover:text-orange-500 transition-all relative group">Contact</a></li>
                    </ul>
                </div>

                <!-- Mobile Menu -->
                <div
                    class="mobileMenu hidden w-full h-[92.5%] fixed bottom-0 left-0 z-10 bg-[#F5F7FF] transition-all duration-300 flex flex-col justify-center items-center text-center text-[5vw]">
                    <ul class="flex flex-col gap-6">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="Contact.html">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Header Ends Here-->
>>>>>>> 65e67d7bd1b5993530444fd8a84d3f012a725db9
