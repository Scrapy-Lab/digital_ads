<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contct Page</title>
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
    </style>
</head>

<body>
    <main class="relative font-[font1]">
         @include('layouts.header')

        <!-- About's Hero Section Starts Here-->
        <section
            class="fade w-full h-screen relative flex items-center justify-center bg-[linear-gradient(279.16deg,#4A32FF_-27.33%,#001C3C_38.47%,#27ACFF_108.93%)] overflow-hidden">
            <div class="w-full h-full">
                <img class="w-full h-full object-cover object-top" src="./assets/images/Contactpage/12.png" alt="">
            </div>
            <div
                class="overlay absolute bottom-0 text-white w-[85%] rounded-t-[40px] h-[60%] flex items-center justify-center flex-col gap-6 text-center bg-[url(./assets/images/Contactpage/grains.png)] backdrop-blur-md mx-auto shadow-[12px_30px_14.3px_0px_#00000040] border-2 bg-clip-border border-image-source[linear-gradient(130.38deg, #FFFFFF 57.86%, rgba(152, 255, 206, 0.68) 74.98%, #3771C8 89.11%, #7E69FF 100.67%)]">
                <h1 class="text-[10vw] max-[599px]:text-[20vw] font-black text-white"
                    style="text-shadow: 12px 30px 14.3px rgba(0, 0, 0, 0.25);">Contact Us</h1>
                <p class="w-[70%] max-[599px]:w-[90%] text-[1.3vw] max-[599px]:text-[3.3vw]">Lorem Ipsum is simply dummy
                    text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                    type specimen book.</p>
            </div>
        </section>
        <!-- About's Hero Section Ends Here -->

        <section
            class="fade w-full bg-cover relative bg-center bg-gradient-to-tl from-blue-800 to-blue-950 px-20 max-[599px]:px-6 max-[1025px]:px-10 pb-20 py-12">
            <img class="absolute top-0 right-0 w-[50%] md:w-[40%] lg:w-[50%] hidden md:block"
                src="./assets/images/Contactpage/Frame.png" alt="">
            <img class="absolute bottom-[10px] left-[10px] w-[50%] md:w-[40%] lg:w-[50%] rotate-180 hidden md:block"
                src="./assets/images/Contactpage/Frame.png" alt="">
            <img class="absolute bottom-[11%] left-[35%] w-[10%] hidden md:block" src="./assets/images/Contactpage/Ellipse1.png"
                alt="">
            <img class="absolute bottom-[0%] right-[28%] w-[20%] hidden md:block"
                src="./assets/images/Contactpage/letter_send 1.png" alt="">
            <h1 class="text-center text-white text-[8vw] md:text-[6vw] font-[700]">Contact Us</h1>
            <h5 class="text-center text-white text-[4vw] md:text-[2vw] mb-8 md:mb-0">Any question or remarks? Just write
                us a message !</h5>
            <div
                class="border-2 border-white/20 rounded-xl px-4 md:px-6 py-6 bg-white/10 backdrop-blur-lg shadow-lg mt-12 flex flex-col md:flex-row gap-8 md:gap-0">
                <div
                    class="p-4 w-full md:w-[45%] bg-black/10 backdrop-blur-sm rounded-lg shadow-lg flex flex-col gap-4">
                    <h1 class="text-white text-[5vw] md:text-[2.5vw] font-bold">Contact Information</h1>
                    <div class="w-full flex items-center">
                        <img class="w-[3.5vh] h-[3vh]" src="./assets/images/Contactpage/Vector.png" alt="">
                        <h1 class="ml-4 text-white text-[3vw] md:text-[1.2vw] font-bold">contact@brandname.com</h1>
                    </div>
                    <div class="w-full flex">
                        <img class="w-[3.5vh] h-[3.5vh]" src="./assets/images/Contactpage/location.png" alt="">
                        <h1 class="ml-4 text-white text-[2.5vw] md:text-[1vw] font-bold">08 Triveni Tower 3rd Floor,
                            Central Avenue, GandhiPutla,<br>
                            Itwari, Nagpur 440002,<br>
                            India.</h1>
                    </div>
                    <img class="mt-12  md:block" src="./assets/images/Contactpage/Frame 1261155813.png" alt="">
                    <div class="w-full flex items-center justify-center gap-4 p-4">
                        <img class="w-8 md:w-auto" src="./assets/images/Contactpage/skill-icons_twitter.png" alt="">
                        <img class="w-8 md:w-auto" src="./assets/images/Contactpage/skill-icons_instagram.png" alt="">
                        <img class="w-8 md:w-auto" src="./assets/images/Contactpage/linkedin.png" alt="">
                    </div>
                </div>
                <div class="w-full md:w-[55%] md:pl-14">
                    <form action="" class="flex flex-col w-full gap-6 p-4 md:p-8">
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="w-full md:w-[55%]">
                                <label class="text-white mb-2 block">First Name</label>
                                <input class="w-full bg-transparent outline-none border-b-2 border-white p-2 text-white"
                                    type="text">
                            </div>
                            <div class="w-full md:w-[55%]">
                                <label class="text-white mb-2 block">Last Name</label>
                                <input class="w-full bg-transparent outline-none border-b-2 border-white p-2 text-white"
                                    type="text">
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="w-full md:w-[55%]">
                                <label class="text-white mb-2 block">Email</label>
                                <input class="w-full bg-transparent outline-none border-b-2 border-white p-2 text-white"
                                    type="email">
                            </div>
                            <div class="w-full md:w-[55%]">
                                <label class="text-white mb-2 block">Phone Number</label>
                                <input class="w-full bg-transparent outline-none border-b-2 border-white p-2 text-white"
                                    type="tel">
                            </div>
                        </div>

                        <div class="w-full">
                            <label class="text-white mb-2 block">Subject</label>
                            <div class="flex flex-wrap gap-4 text-white text-sm md:text-base">
                                <label class="flex items-center gap-2">
                                    <input type="radio" name="subject" value="general">
                                    General Inquiry
                                </label>
                                <label class="flex items-center gap-2">
                                    <input type="radio" name="subject" value="brand">
                                    Brand Identity
                                </label>
                                <label class="flex items-center gap-2">
                                    <input type="radio" name="subject" value="uiux">
                                    UI/UX
                                </label>
                                <label class="flex items-center gap-2">
                                    <input type="radio" name="subject" value="packaging">
                                    Packaging Design
                                </label>
                            </div>
                        </div>

                        <div class="w-full">
                            <label class="text-white mb-2 block mt-8 md:mt-12">Message</label>
                            <textarea
                                class="w-full bg-transparent outline-none border-b-2 border-white p-2 text-white resize-none"
                                rows="4"></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button
                                class="px-8 md:px-12 py-2 md:py-3 rounded-lg bg-orange-500 w-fit font-bold text-white mt-4 hover:bg-transparent outline-none hover:text-orange-500 hover:border-2 hover:border-orange-500 transition-all duration-300 float-right text-sm md:text-base"
                                type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

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
        <!-- About's Contact Section Starts Here -->

       @include('layouts.footer')
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/lenis@1.2.3/dist/lenis.min.js"></script>
    <script>
        // Initialize Lenis
        const lenis = new Lenis({
            autoRaf: true,
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