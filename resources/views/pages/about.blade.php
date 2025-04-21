<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Digital Add</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        @font-face {
            font-family: 'font2';
            src: url("./assets/fonts/HelveticaNowDisplay-Regular.ttf");
        }

        @font-face {
            font-family: 'font1';
            src: url('./assets/fonts/Inter.ttf');
        }

        .swiper-pagination-bullet {
            background-color: #e5e5e5;
            /* light gray */
            opacity: 1;
            margin: 0 6px;
            border-radius: 9999px;
            /* full circle */
            transition: background-color 0.3s;
        }

        .swiper-pagination-bullet-active {
            background-color: #001260;
            /* deep navy blue */
        }
    </style>
</head>

<body class="font-[font1]">
   @include('layouts.header')

    <main class="overflow-hidden">

        <!-- About's Hero Section Starts Here-->
        <section
            class="fade w-full h-screen relative flex items-center justify-center bg-[linear-gradient(279.16deg,#4A32FF_-27.33%,#001C3C_38.47%,#27ACFF_108.93%)] overflow-hidden">
            <div class="w-full h-full">
                <img class="w-full h-full object-cover object-top scale-150" src="./assets/images/Aboutpage/aboutbg1.png" alt="">
            </div>
            <div
                class="overlay absolute bottom-0 text-white w-[85%] rounded-t-[40px] h-[60%] flex items-center justify-center flex-col gap-6 text-center bg-[url(./assets/images/Globalimages/grains.png)] backdrop-blur-md mx-auto shadow-[12px_30px_14.3px_0px_#00000040] border-2 bg-clip-border border-image-source[linear-gradient(130.38deg, #FFFFFF 57.86%, rgba(152, 255, 206, 0.68) 74.98%, #3771C8 89.11%, #7E69FF 100.67%)]">
                <h1 class="text-[10vw] max-[599px]:text-[20vw] font-black text-white"
                    style="text-shadow: 12px 30px 14.3px rgba(0, 0, 0, 0.25);">Who We Are</h1>
                <p class="w-[70%] max-[599px]:w-[90%] text-[1.3vw] max-[599px]:text-[3.3vw]">Lorem Ipsum is simply dummy
                    text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                    type specimen book.</p>
            </div>
        </section>
        <!-- About's Hero Section Ends Here -->

        <!-- About's Our Vision Section Starts Here -->
        <section class="fade Our-Vision w-full bg-[#F5F7FF] ">
            <div class="w-full flex max-[599px]:flex-col">
                <div class="w-1/2 max-[599px]:w-full">
                    <img src="./assets/images/Aboutpage/Group 1261155440.png" alt="">
                </div>
                <div class="w-1/2 max-[599px]:w-full px-16 max-[599px]:px-0 py-4 flex items-center justify-center flex-col">
                    <h1 class="text-[#001362] text-[6.5vw] font-black">Our <span class="text-[#FFA616]">Vision</span>.
                    </h1>
                    <p class=" text-[1.4vw] max-[599px]:text-[3.4vw] max-[599px]:pt-3 pl-6 max-[599px]:px-4 text-[#083E68] w-[90%] max-[599px]:w-full">These
                        seven principles highlight our fundamental beliefs as a
                        team and as a business. Our core values attract and unite
                        individuals focused on building a stable, desirable work
                        environment and providing exceptional solutions we are
                        proud of..</p>
                </div>
            </div>
            <div class="w-full flex max-[599px]:flex-col-reverse max-[599px]:pb-6">
                <div class="w-1/2 max-[599px]:w-full flex items-center px-16 max-[599px]:px-0 pt-4 justify-center flex-col">
                    <h1 class="text-[#001362] text-[6vw] font-black">Our <span class="text-[#FFA616]">Mission</span>.
                    </h1>
                    <p class=" text-[1.4vw] max-[599px]:text-[3.4vw] max-[599px]:pt-3 pl-6 max-[599px]:px-4 text-[#083E68] w-[90%] max-[599px]:w-full">These
                        seven principles highlight our fundamental beliefs as a
                        team and as a business. Our core values attract and unite
                        individuals focused on building a stable, desirable work
                        environment and providing exceptional solutions we are
                        proud of..</p>
                </div>
                <div class="w-1/2 max-[599px]:w-full">
                    <img src="./assets/images/Aboutpage/Group 1261155449.png" alt="">

                </div>
            </div>
        </section>
        <!-- About's Our Vision Section Ends Here -->

        <section class="fade w-full relative overflow-hidden">
            <!-- Network background overlay -->
            <div class="absolute inset-0 bg-[url('./assets/images/Aboutpage/experiencebg.png')] bg-cover bg-center">
            </div>

            <!-- Content Container -->
            <div class="relative z-10 w-full h-full">
                <!-- Header -->
                <div class="w-full flex items-center justify-center flex-col pt-20 max-[599px]:pt-10 max-[1025px]:py-10">
                    <h1 class="text-2xl md:text-5xl lg:text-[6vw] font-bold text-white text-center leading-[1.1]">
                        No One Can Beat Our <br>
                        <span class="text-[#FFA616]">Experience</span>
                    </h1>
                    <p
                        class="text-sm max-[599px]:text-[2.5vw] md:text-base lg:text-[1.3vw] mt-6 md:mt-12 w-[85%] md:w-[80%] lg:w-[70%] text-center text-white">
                        These seven principles highlight our fundamental beliefs as a team and as a business. Our core
                        values attract and unite
                        individuals focused on building a stable, desirable work environment and providing exceptional
                        solutions we are proud of.
                    </p>
                </div>

                <!-- Grid of Icons - Flexible layout that wraps -->
                <div
                    class="flex flex-wrap w-full h-full gap-6 max-[599px]:gap-2 p-4 mb-20 max-[1025px]:mb-10 lg:p-20 max-[1025px]:p-0 items-center justify-center">
                    <!-- Hospitality -->
                    <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                        <img class="w-[60%]" src="./assets/images/Aboutpage/hospitality.png" alt="">
                    </div>

                    <!-- Banking & Finance -->
                    <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                        <img class="w-[93%]" src="./assets/images/Aboutpage/banking.png" alt="">
                    </div>

                    <!-- Services -->
                    <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                        <img class="w-[60%]" src="./assets/images/Aboutpage/services.png" alt="">
                    </div>

                    <!-- Publishing -->
                    <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                        <img class="w-[60%]" src="./assets/images/Aboutpage/publishing.png" alt="">
                    </div>

                    <!-- Manufacturing -->
                    <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                        <img class="w-[78%]" src="./assets/images/Aboutpage/manufacture.png" alt="">
                    </div>

                    <!-- Healthcare -->
                    <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                        <img class="w-[60%]" src="./assets/images/Aboutpage/healthcare.png" alt="">
                    </div>

                    <!-- Real Estate -->
                    <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                        <img class="w-[60%]" src="./assets/images/Aboutpage/realestate.png" alt="">
                    </div>

                    <!-- FMCG -->
                    <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                        <img class="w-[60%]" src="./assets/images/Aboutpage/fmcg.png" alt="">
                    </div>

                    <!-- Education -->
                    <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                        <img class="w-[60%]" src="./assets/images/Aboutpage/education.png" alt="">
                    </div>

                    <!-- Additional industries -->
                    <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                        <img class="w-[60%]" src="./assets/images/Aboutpage/retail.png" alt="">
                    </div>

                    <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                        <img class="w-[68%]" src="./assets/images/Aboutpage/fmcd.png" alt="">
                    </div>

                    <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                        <img class="w-[60%] -translate-y-2" src="./assets/images/Aboutpage/insurance.png" alt="">
                    </div>

                    <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                        <img class="w-[72%]" src="./assets/images/Aboutpage/entertainment.png" alt="">
                    </div>

                    <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                        <img class="w-[60%]" src="./assets/images/Aboutpage/agriculture.png" alt="">
                    </div>

                    <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                        <img class="w-[60%]" src="./assets/images/Aboutpage/food.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- About's Experience Section Ends Here -->

        <!-- About's Our Journey Section Starts Here -->
        <section
            class="fade Our-Journey w-full relative pt-20 max-[1025px]:py-10 max-[599px]:py-5 pb-10 max-[599px]:px-0 flex flex-col items-center justify-center bg-[linear-gradient(278.17deg,#4F92F1_35.62%,#4F92F1_49.14%,#2E548B_110.84%)]">
            <h1 class="text-white text-[6.5vw] font-black text-center">Our <span class="text-[#FFD471]">Journey</span>.
            <img class="pt-10" src="./assets/images/Aboutpage/Group 1261156942.png" alt="">
        </section>
        <!-- About's Our Journey Section Starts Here -->

        <!-- About's Our Team Section Starts Here -->
        <section class="fade py-16 px-20 max-[599px]:px-0 max-[599px]:py-10 bg-white text-center">
            <h2 class="text-4xl font-bold">
                <span class="text-[#0C0C5F]">Our </span><span class="text-[#FFA500]">Team</span>
            </h2>

            <div class="swiper mySwiper mt-10 max-[599px]:mt-0 px-5">
                <div class="swiper-wrapper">

                    <!-- Slide 1 -->
                    <div class="swiper-slide bg-white rounded-xl p-6">
                        <div class="rounded-lg p-4 mb-4">
                            <img src="./assets/images/Aboutpage/team2.png" class="mx-auto rounded-md" alt="Team Member">
                        </div>
                        <h3 class="text-lg font-semibold">Need a team?</h3>
                        <p class="text-sm text-gray-600 mt-2">
                            I will help you build a team of top talent to boost your business reach its potential.
                        </p>
                        <a href="#" class="mt-4 inline-flex items-center text-pink-600 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M16 12H8m8 0l-4-4m4 4l-4 4" />
                            </svg>
                            EMAIL ANDRE
                        </a>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide bg-white rounded-xl p-6">
                        <div class="rounded-lg p-4 mb-4">
                            <img src="./assets/images/Aboutpage/team3.png" class="mx-auto rounded-md" alt="Team Member">
                        </div>
                        <h3 class="text-lg font-semibold">Need a team?</h3>
                        <p class="text-sm text-gray-600 mt-2">
                            I will help you build a team of top talent to boost your business reach its potential.
                        </p>
                        <a href="#" class="mt-4 inline-flex items-center text-pink-600 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M16 12H8m8 0l-4-4m4 4l-4 4" />
                            </svg>
                            EMAIL ANDRE
                        </a>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide bg-white rounded-xl p-6">
                        <div class=" rounded-lg p-4 mb-4">
                            <img src="./assets/images/Aboutpage/team1.png" class="mx-auto rounded-md" alt="Team Member">
                        </div>
                        <h3 class="text-lg font-semibold">Need a team?</h3>
                        <p class="text-sm text-gray-600 mt-2">
                            I will help you build a team of top talent to boost your business reach its potential.
                        </p>
                        <a href="#" class="mt-4 inline-flex items-center text-pink-600 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M16 12H8m8 0l-4-4m4 4l-4 4" />
                            </svg>
                            EMAIL ANDRE
                        </a>
                    </div>

                    <!-- Slide 4 -->
                    <div class="swiper-slide bg-white rounded-xl p-6">
                        <div class="rounded-lg p-4 mb-4">
                            <img src="./assets/images/Aboutpage/team2.png" class="mx-auto rounded-md" alt="Team Member">
                        </div>
                        <h3 class="text-lg font-semibold">Need a team?</h3>
                        <p class="text-sm text-gray-600 mt-2">
                            I will help you build a team of top talent to boost your business reach its potential.
                        </p>
                        <a href="#" class="mt-4 inline-flex items-center text-pink-600 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M16 12H8m8 0l-4-4m4 4l-4 4" />
                            </svg>
                            EMAIL ANDRE
                        </a>
                    </div>

                    <!-- Slide 5 -->
                    <div class="swiper-slide bg-white rounded-xl p-6">
                        <div class="rounded-lg p-4 mb-4">
                            <img src="./assets/images/Aboutpage/team3.png" class="mx-auto rounded-md" alt="Team Member">
                        </div>
                        <h3 class="text-lg font-semibold">Need a team?</h3>
                        <p class="text-sm text-gray-600 mt-2">
                            I will help you build a team of top talent to boost your business reach its potential.
                        </p>
                        <a href="#" class="mt-4 inline-flex items-center text-pink-600 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M16 12H8m8 0l-4-4m4 4l-4 4" />
                            </svg>
                            EMAIL ANDRE
                        </a>
                    </div>

                    <!-- Slide 6 -->
                    <div class="swiper-slide bg-white rounded-xl p-6">
                        <div class=" rounded-lg p-4 mb-4">
                            <img src="./assets/images/Aboutpage/team1.png" class="mx-auto rounded-md" alt="Team Member">
                        </div>
                        <h3 class="text-lg font-semibold">Need a team?</h3>
                        <p class="text-sm text-gray-600 mt-2">
                            I will help you build a team of top talent to boost your business reach its potential.
                        </p>
                        <a href="#" class="mt-4 inline-flex items-center text-pink-600 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M16 12H8m8 0l-4-4m4 4l-4 4" />
                            </svg>
                            EMAIL ANDRE
                        </a>
                    </div>


                </div>

                <!-- Pagination Dots -->
                <div class="swiper-pagination translate-y-3"></div>
            </div>
        </section>
        <!-- About's Our Team Section Starts Here -->

        <!-- About's Contact Section Starts Here -->
        <section
            class="fade bg-[#F5F7FF] w-full relative flex items-center justify-center overflow-hidden pt-20 pb-10">
            <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between">
                <!-- Left Side with Rocket Illustration -->
                <div class="w-full md:w-1/2 mb-10 md:mb-0 flex justify-center">
                    <img src="./assets/images/Globalimages/boostImage.png" alt="Rocket illustration" class="w-full max-w-md">
                </div>

                <!-- Right Side with Text and Button -->
                <div class="w-full md:w-1/2 flex flex-col items-center md:items-start">
                    <h1 class="text-4xl md:text-5xl font-bold text-[#1D3F6E] text-center md:text-left">
                        Boost Your <span class="text-[#1D3F6E] border-b-4 border-[#FF6F1F]">Online</span>
                    </h1>
                    <h1 class="text-4xl md:text-5xl font-bold text-[#1D3F6E] mt-2 text-center md:text-left">
                        Presence
                    </h1>

                    <!-- Contact Button -->
                    <button
                        class="mt-6 bg-[#FF6F1F] text-white text-lg px-12 py-2 rounded-md hover:bg-[#E05F1C] transition-all">
                        Contact Us
                    </button>
                </div>
            </div>

            <!-- Small decorative elements -->
            <div class="absolute top-10 right-1/4 w-6 h-6 text-[#1D3F6E]">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <circle cx="12" cy="12" r="4"></circle>
                    <line x1="12" y1="2" x2="12" y2="4"></line>
                    <line x1="12" y1="20" x2="12" y2="22"></line>
                    <line x1="2" y1="12" x2="4" y2="12"></line>
                    <line x1="20" y1="12" x2="22" y2="12"></line>
                </svg>
            </div>

            <!-- Butterfly/Bowtie element -->
            <div class="absolute top-1/4 right-10 w-16 h-16">
                <svg viewBox="0 0 24 24" fill="none" stroke="#4A7DFF" stroke-width="1">
                    <path d="M12 2L8 7L12 9L16 7L12 2Z"></path>
                    <path d="M12 9L8 11L12 16L16 11L12 9Z"></path>
                    <circle cx="12" cy="9" r="1" fill="#4A7DFF"></circle>
                </svg>
            </div>

            <!-- Additional small decorative dots -->
            <div class="absolute top-10 left-1/4 w-1 h-1 bg-[#1D3F6E] rounded-full"></div>
            <div class="absolute top-20 left-1/3 w-1 h-1 bg-[#1D3F6E] rounded-full"></div>
            <div class="absolute top-15 left-2/3 w-1 h-1 bg-[#1D3F6E] rounded-full"></div>
        </section>
        <!-- About's Contact Section Ends Here -->

        @include('layouts.footer')

    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/lenis@1.2.3/dist/lenis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        // Initialize Lenis
        const lenis = new Lenis({
            autoRaf: true,
        });

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });

        const menu = document.querySelector(".mobileMenu");
        const menuOpen = document.querySelector(".menu-icon");
        const menuClose = document.querySelector(".close-icon");

        menuOpen.addEventListener("click", () => {
            menu.classList.remove("hidden");
            menuOpen.classList.add("hidden");
            menuClose.classList.remove("hidden");
        });

        menuClose.addEventListener("click", () => {
            menu.classList.add("hidden");
            menuOpen.classList.remove("hidden");
            menuClose.classList.add("hidden");
        });


        function toggleServices() {
            const menu = document.getElementById('servicesMenu');
            menu.classList.toggle('hidden');
        }
        function toggleAbout() {
            const menu = document.getElementById('aboutMenu');
            menu.classList.toggle('hidden');
        }

        const fades = document.querySelectorAll(".fade");

gsap.from(".anim", {
    opacity: 0,
    x: -100,
    duration: 0.5,
    willChange: "transform opacity",
});
gsap.from("nav .logo", {
    opacity: 0,
    y: -50,
    duration: 0.5,
    willChange: "transform opacity",
});
gsap.fromTo("nav a", {
    opacity: 0,
    y: -50,
}, {
    opacity: 1,
    y: 0,
    willChange: "transform opacity",
    stagger: 0.1,
}, ">");

fades.forEach(fade => {
    gsap.fromTo(fade, {
        opacity: 0,
        y: 50,
    }, {
        opacity: 1,
        y: 0,
        willChange: "transform, opacity",
        scrollTrigger: {
            trigger: fade,
            start: "top center",
            end: "bottom center",
        }
    });
});
    </script>
</body>

</html>