<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Digital Add</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @font-face {
            font-family: font1;
            src: url("assets/fonts/HelveticaNowDisplay-Regular.ttf");
        }

        * {
            font-family: font1;
        }
    </style>
</head>

<body>

    <main class="bg-[#F5F7FF] overflow-hidden">

        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

    </main>

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
</script>

</html>
