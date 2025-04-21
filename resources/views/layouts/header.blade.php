<!-- Header Starts Here-->
<header class="fixed z-[999] top-0 left-0 w-full">
    <!-- Top Navigation (Email, Phone, Brochure) -->
    <nav
    id="topNav"
        class="w-full px-20 max-[1025px]:px-6 max-[599px]:px-4 py-2.5 bg-[#001361] text-white flex flex-wrap items-center justify-end gap-6 max-[1025px]:gap-4 text-[.8vw] max-[1025px]:text-sm max-[599px]:text-xs max-[599px]:hidden">

        <!-- Email -->
        <div class="flex items-center gap-2">
            <span class="inline-block w-4 h-4 rounded-full bg-white"></span>
            <p>info@thedigitaladd.in</p>
        </div>

        <!-- Divider -->
        <div class="hidden max-[599px]:hidden sm:flex items-center gap-2">
            <span class="inline-block w-[2px] h-6 bg-white/20"></span>
        </div>

        <!-- Phones -->
        <div class="flex items-center gap-2">
            <span class="inline-block w-4 h-4 rounded-full bg-white"></span>
            <p>+91-9999-11-8947</p>
        </div>
        <div class="flex items-center gap-2">
            <span class="inline-block w-4 h-4 rounded-full bg-white"></span>
            <p>+91-9999-23-8892</p>
        </div>

        <!-- Buttons -->
        <div class="flex items-center w-[27%] max-[1024px]:w-[40%] gap-2 max-[599px]:flex-col max-[599px]:items-start max-[599px]:w-full">
            <button
                class="px-4 py-2 border-2 border-white rounded-full text-xs max-[1025px]:text-sm w-full max-[599px]:w-full">
                Company Brochure
            </button>
            <button
                class="px-4 py-2 border-2 border-white rounded-full text-xs max-[1025px]:text-sm w-full max-[599px]:w-full">
                Test Our Services
            </button>
        </div>
    </nav>

    <!-- Main Navbar -->
    <nav
    id="mainNavbar"
        class="w-full px-20 max-[1025px]:px-6 max-[599px]:px-4 py-4 flex justify-between items-center z-30 bg-[#F5F7FF]">
        <!-- Logo -->
        <div class="logo w-[13%] max-[1025px]:w-[20%] max-[599px]:w-1/2">
            <a href="{{route('home')}}"><img class="w-full h-full object-cover" src="./assets/images/Globalimages/logo.svg" alt=""></a>
        </div>

        <!-- Hamburger (Mobile Only) -->
        <div class="hamburger w-[7%] hidden max-[599px]:block relative">
            <img class="menu-icon w-full h-full bg-cover" src="./assets/images/Globalimages/menu.svg" alt="Open Menu">
        </div>
        <img class="close-icon w-[7%] h-full bg-cover absolute top-0 right-4 z-20 hidden"
            src="./assets/images/Globalimages/close.svg" alt="Close Menu">

        <!-- Desktop Menu -->
        <div class="menu max-[599px]:hidden">
            <ul class="flex gap-6 text-[1vw] max-[1025px]:text-sm text-[#001361] font-medium">
                <li><a href="{{route('home')}}" class="hover:text-orange-500 transition-all relative group">Home</a>
                </li>

                <li class="relative group" id="servicesDropdownWrapper">
                    <a id="servicesTrigger" class="cursor-pointer">Services <span>▼</span></a>

                    <!-- Dropdown Menu -->
                    <div id="servicesMenu"
                        class="absolute top-full left-1/2 -translate-x-[60%] mt-2 hidden w-[60vw] bg-white text-[#040d2a] shadow-lg z-50 transition-all duration-300 rounded-xl">
                        <div class="flex">
                            <!-- Sidebar -->
                            <div class="w-[30%] pr-6 bg-[#E8EDFF] px-4 px-2 py-10 mx-4">
                                <h2 class="text-xl font-bold mb-4">Services</h2>
                                <p class="text-sm text-gray-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>

                            <!-- Service columns -->
                            <div class="w-[70%] flex flex-wrap gap-x-12 gap-y-8 py-10 px-6">
                                <div class="w-[150px]">
                                    <h3 class="font-semibold mb-2">Social Media</h3>
                                    <ul class="text-sm text-gray-600 space-y-1">
                                        <li><a href="{{route('social-media-marketing')}}">Social Media Marketing</a></li>
                                        <li><a href="{{route('social-media-optimization')}}">Social Media Optimization</a></li>
                                        <li><a href="{{route('social-media-community-management')}}">Social Media Community Managamenet</a></li>
                                        <li><a href="{{route('influencer-marketing')}}">Influencer Marketing</a></li>
                                    </ul>
                                </div>

                                <div class="w-[150px]">
                                    <h3 class="font-semibold mb-2">Digital Marketing</h3>
                                    <ul class="text-sm text-gray-600 space-y-1">
                                        <li><a href="{{route('digital-marketing-strategy')}}">Digital Marketing Strategy</a></li>
                                        <li><a href="{{route('search-engine-marketing')}}">Search Engine Marketing</a></li>
                                        <li><a href="{{route('digital-social-media-marketing')}}">Social Media Marketing</a></li>
                                        <li><a href="{{route('online-reputation-management')}}">Online Reputation Marketing</a></li>
                                    </ul>
                                </div>

                                <div class="w-[150px]">
                                    <h3 class="font-semibold mb-2">Mobile Marketing</h3>
                                    <ul class="text-sm text-gray-600 space-y-1">
                                        <li><a href="{{route('whatsapp-marketing')}}">Whatsapp Marketing</a></li>
                                        <li><a href="{{route('voice-sms')}}">Voice SMS</a></li>
                                        <li><a href="{{route('bulk-sms')}}">Bulk SMS</a></li>
                                    </ul>
                                </div>

                                <div class="w-[150px]">
                                    <h3 class="font-semibold mb-2">Visual Designing</h3>
                                    <ul class="text-sm text-gray-600 space-y-1">
                                        <li><a href="{{route('graphic-designing')}}">Graphic Designing</a></li>
                                        <li><a href="{{route('logo-designing')}}">Logo Designing</a></li>
                                        <li><a href="{{route('photography')}}">PhotoGraphy</a></li>
                                        <li><a href="{{route('videography')}}">VideoGraphy</a></li>
                                    </ul>
                                </div>

                                <div class="w-[150px]">
                                    <h3 class="font-semibold mb-2">Website Development</h3>
                                    <ul class="text-sm text-gray-600 space-y-1">
                                        <li><a href="{{route('website-design-and-development')}}">Website Design & Development</a></li>
                                        <li><a href="{{route('ecommerce-development')}}">Ecommerce Development</a></li>
                                        <li><a href="{{route('wordpress-website-development')}}">Wordpress Website Development</a></li>
                                        <li><a href="{{route('website-manintanance')}}">Website Maintanance</a></li>
                                    </ul>
                                </div>

                                <div class="w-[150px]">
                                    <h3 class="font-semibold mb-2">Content Creation</h3>
                                    <ul class="text-sm text-gray-600 space-y-1">
                                        <li><a href="{{route('content-writing')}}">SEO Content Writing</a></li>
                                        <li><a href="{{route('blog-writing')}}">Blog Writing</a></li>
                                        <li><a href="{{route('promotional-writing')}}">Promotional Writing</a></li>
                                        <li><a href="{{route('copy-writing')}}">Copywriting</a></li>
                                    </ul>
                                </div>
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

                <li><a href="portfolio.html" class="hover:text-orange-500 transition-all relative group">Blog</a>
                </li>
                <li><a href="portfolio.html" class="hover:text-orange-500 transition-all relative group">Portfolio</a>
                </li>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script>
    const wrapper = document.getElementById("servicesDropdownWrapper");
    const menu = document.getElementById("servicesMenu");

    wrapper.addEventListener("mouseenter", () => {
        menu.classList.remove("hidden");
    });

    menu.addEventListener("mouseleave", () => {
        menu.classList.add("hidden");
    });

    gsap.registerPlugin(ScrollTrigger);

let previousScroll = window.scrollY;
const nav = document.getElementById("topNav");

window.addEventListener("scroll", () => {
  const currentScroll = window.scrollY;

  if (currentScroll > previousScroll) {
    // Scrolling Down
    gsap.to(nav, {
      y: -100, // hide upward
      duration: 0.4,
      ease: "power2.out"
    });
  } else {
    // Scrolling Up
    gsap.to(nav, {
      y: 0, // show again
      duration: 0.4,
      ease: "power2.out"
    });
  }

  previousScroll = currentScroll;
});

const nav2 = document.getElementById("mainNavbar");
    let prevScroll = window.scrollY;

    window.addEventListener("scroll", () => {
        let currentScroll = window.scrollY;

        if (currentScroll > prevScroll && currentScroll > 100) {
            // User scrolling down
            gsap.to(nav2, {
                y: -55,
                duration: 0.4,
                ease: "power2.out"
            });
        } else {
            // User scrolling up
            gsap.to(nav2, {
                y: 0,
                duration: 0.4,
                ease: "power2.out"
            });
        }

        prevScroll = currentScroll;
    });
</script>