<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Digital Add</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
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
        /* @media (min-width: 1200px) {
            .h-\[90vh\]{

                height: 860px !important;
            }

        }

        @media (min-width: 1028px) and (max-width: 1128px) {
            .h-\[90vh\]{

                height: 74vh !important;
            }

        } */
    </style>
     {{-- @vite('resources/css/app.css') --}}
</head>

<body class="font-[font1]">
    @include('layouts.header')
    <main class="bg-[#F5F7FF] overflow-hidden">

        {{-- @include('layouts.header') --}}

        @yield('content')

        @include('layouts.footer')
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/lenis@1.2.3/dist/lenis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

<script>
    // Initialize Lenis
    const lenis = new Lenis({
        autoRaf: true,
    });
    //Swiper Js Code
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    var companySwiper = new Swiper('.companySwiper', {
        slidesPerView: 5,
        breakpoints: {
            0: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            600: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
        },
        loop: true,
        grabCursor: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
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

</html>
