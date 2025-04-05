@extends('layouts.app')
@section('content')
    <!-- Hero Section Starts Here -->
    <section
        class="hero w-full min-h-screen bg-[url(./assets/images/mainBanner.webp)] bg-cover max-[599px]:bg-[60%] flex items-center justify-start px-20 max-[599px]:px-6 pt-20 max-[599px]:pt-0">
        <div class="relative w-1/2 max-[599px]:w-full whitespace-nowrap max-[599px]:whitespace-normal">
            <!-- Blurred Background Layer -->
            <!-- <div class="absolute inset-0 bg-[#2880D4]/10 backdrop-blur-[10px] rounded-lg"></div> -->

            <div
                class="relative flex flex-col text-white leading-[1] max-[599px]:leading-tighter items-start inset-0 shadow-[0px_-4px_-19px_-2px_#2880D4]">
                <h3 class="text-[3.5vw] max-[599px]:text-[9.5vw] font-[400] tracking-[0]">Weaving</h3>
                <h1
                    class="text-[6vw] max-[599px]:text-[18vw] font-[950] uppercase tracking-[1.04px] drop-shadow-lg leading-[6.67vw] max-[599px]:leading-tight text-[#FFD324]">
                    Digital Dreams</h1>
                <div class="w-full max-[599px]:w-[80%]">
                    <img class="object-cover" src="./assets/images/bannerSemiImage.webp" alt="">
                </div>
                <h4 class="text-[3.5vw] max-[599px]:text-[9.5vw] font-[400] tracking-[0]">or Innovate. Amplify.
                    Convert.</h4>
                <button
                    class="px-16 py-3 text-[1.5vw] max-[599px]:text-[3.5vw] tracking-[0] mt-2 w-fit font-[600] text-[#F47815] bg-white border-2 border-[#F27A13]
                   shadow-[0px_4px_19px_2px_#FFC6996B] rounded-md
                   hover:shadow-[0px_4px_19px_4px_#F47815AA] transition-all duration-300">
                    Get in Touch
                </button>

            </div>
        </div>
    </section>
    <!-- Hero Section Ends Here -->

    <!-- Company Section Starts Here -->
    <section class="Company w-full p-4 flex items-center justify-center max-[599px]:flex-wrap gap-4 max-[599px]:gap-2">
        <div
            class="box p-2 w-[20%] max-[599px]:w-[45%] h-full bg-white rounded-xl max-[599px]:rounded-b-lg shadow-[0px_4px_19px_0px_#00000008]">
            <img class="object-cover" src="./assets/images/client1.png" alt="">
        </div>
        <div
            class="box p-2 w-[20%] max-[599px]:w-[45%] h-full bg-white rounded-xl max-[599px]:rounded-b-lg shadow-[0px_4px_19px_0px_#00000008]">
            <img class="w-full h-full object-cover" src="./assets/images/client2.png" alt="">
        </div>
        <div
            class="box p-2 w-[20%] max-[599px]:w-[45%] h-full bg-white rounded-xl max-[599px]:rounded-b-lg shadow-[0px_4px_19px_0px_#00000008]">
            <img class="w-full h-full object-cover" src="./assets/images/client3.png" alt="">
        </div>
        <div
            class="box p-2 w-[20%] max-[599px]:w-[45%] h-full bg-white rounded-xl max-[599px]:rounded-b-lg shadow-[0px_4px_19px_0px_#00000008]">
            <img class="w-full h-full object-cover" src="./assets/images/client4.png" alt="">
        </div>
        <div
            class="box w-[20%] max-[599px]:w-[45%] max-[599px]:px-2 max-[599px]:py-1 h-full bg-white rounded-xl max-[599px]:rounded-b-lg shadow-[0px_4px_19px_0px_#00000008]">
            <img class="w-full h-full object-cover" src="./assets/images/client5.png" alt="">
        </div>
    </section>
    <!-- Company Section Starts Here -->

    '<!--Who We Are Section Starts Here -->
    <section
        class="Who-We-Are h-screen w-full flex items-center justify-center px-20 max-[599px]:px-6 py-16 max-[599px]:py-4 overflow-hidden">
        <div
            class="child-sec w-full h-full flex max-[599px]:flex-col rounded-[30px] pt-4 bg-[url(./assets/images/aboutBg.png)] bg-cover overflow-hidden">
            <div class="left w-1/2 max-[599px]:w-full h-full overflow-hidden rounded-l-[30px] max-[599px]:rounded-none">
                <img class="w-full h-full object-cover" src="./assets/images/aboutImage.png" alt="">
            </div>
            <div class="right w-1/2 max-[599px]:w-full h-full mt-6 rounded-r-[30px] max-[599px]:rounded-none">
                <div class="flex items-center justify-start gap-4 max-[599px]:gap-0">
                    <span
                        class="capitalize italic text-white text-[6.5vw] max-[599px]:text-[9.5vw] leading-none max-[599px]:ml-3">who</span>
                    <span
                        class="capitalize font-semibold rounded-md text-white text-[3.5vw] max-[599px]:text-[9.5vw] bg-[#F57C00] text-center px-2">
                        we are
                    </span>
                </div>
                <h3
                    class="text-[1.75vw] max-[599px]:text-[3.75vw] pt-2 text-zinc-100 px-3 leading-9 max-[599px]:leading-6 tracking-[1px]">
                    We’re not just another web development agency in Delhi; we’re tech savvy who blend creativity
                    with code. Our Digital Add agency in Delhi NCR creates cutting-edge web solutions that
                    transform visions into seamless online experiences. From responsive designs to scalable
                    architectures,
                    we focus on every detail, ensuring each element contributes to our client’s success.
                </h3>
                <button
                    class="px-12 py-2 text-[1.5vw] max-[599px]:text-[3.5vw] tracking-[0] mt-4 ml-3 w-fit font-[600] text-[#F47815] bg-white border-2 border-[#F27A13]
            shadow-[0px_4px_19px_2px_#FFC6996B] rounded-md
            hover:shadow-[0px_4px_19px_4px_#F47815AA] transition-all duration-300">
                    About Us
                </button>
            </div>
        </div>
    </section>
    <!-- Who We Are Section Starts Here -->

    <!-- What We Do Section Starts Here -->
    <section class="What-We-Do w-full p-4 flex items-center flex-col gap-4">
        <div class="headings flex gap-2 items-center justify-start">
            <span class="capitalize font-[500] text-[3.5vw] max-[599px]:text-[9.5vw]">what</span>
            <span
                class="capitalize rounded-md text-white text-[3.5vw] max-[599px]:text-[9.5vw] font-[600] bg-gradient-to-r from-[#FF6F1F] to-[#E08A00] px-2 py-2 leading-none text-center">
                we do</span>
        </div>
        <div class="description w-[80%] max-[599px]:w-full">
            <h3
                class="text-[1.7vw] max-[599px]:text-[3.7vw] tracking-[1px] leading-tight ml-4 max-[599px]:ml-0 font-[500] text-[#000B28] text-center">
                We
                don’t
                talk big; we
                deliver results. From Digital marketing to SEO, content strategy, or social
                media marketing in Delhi, you name it and we will deliver it. Our mission? To elevate brands,
                one story at a time. Whether it’s digital solutions, optimizing for search engines, or igniting
                social engagement, we’re your partners in the digital realm</h3>
        </div>
        <div class="w-full h-full overflow-hidden rounded-4xl px-16 max-[599px]:px-0 mt-2">
            <img class="w-full h-full object-cover object-center" src="./assets/images/whatDo.webp" alt="">
        </div>
    </section>
    <!-- What We Do Section Starts Here -->

    <!-- Services Section Starts Here -->
    <section class="Services w-full flex items-center flex-col gap-6 mt-6 px-20 max-[599px]:px-6">
        <div class="headings flex gap-2 items-center justify-start">
            <span class="capitalize font-[500] text-[3.5vw] max-[599px]:text-[9.5vw]">Our</span>
            <span
                class="capitalize rounded-md text-white text-[3.5vw] max-[599px]:text-[9.5vw] font-[600] px-3 py-2 leading-none text-center bg-gradient-to-r from-[#FF6F1F] to-[#E08A00]">
                Services</span>
        </div>
        <div class="description w-[65%] max-[599px]:w-full">
            <h3
                class="text-[1.7vw] max-[599px]:text-[3.75vw] tracking-[1px] leading-tight ml-4 max-[599px]:ml-0 font-[500] text-[#000B28] text-center">
                We
                deliver results. From Digital marketing to SEO, content strategy, or social media marketing in
                Delhi, you name it and we will deliver it.</h3>
        </div>
        <div class="w-full flex gap-3 flex-wrap max-[599px]:flex-nowrap items-center justify-center mt-10">
            <div class="card-1 w-[32%] max-[599px]:w-full relative p-6 max-[599px]:p-4 bg-[#327493] pt-28">
                <img class="w-[40%] absolute right-[10%] top-0" src="./assets/images/social1.png" alt="">
                <h1 class="text-[8vh] text-[#F5F7FF]">Social <br> Media</h1>
                <div class="flex flex-col mt-2 gap-y-3">
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Social Media Marketing</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Social Media Optimization</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Social Media Community Management</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Influencer Marketing</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                </div>
            </div>
            <div class="card-2 w-[32%] max-[599px]:w-full relative p-6 max-[599px]:p-4 bg-[#6775D0] pt-28">
                <img class="w-[35%] absolute right-0 top-0" src="./assets/images/social2.png" alt="">
                <h1 class="text-[8vh] text-[#F5F7FF]">Digital <br> Marketing</h1>
                <div class="flex flex-col mt-2 gap-y-3">
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Social Media Marketing</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Social Media Optimization</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Social Media Community Management</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Influencer Marketing</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                </div>
            </div>
            <div class="card-3 w-[32%] max-[599px]:w-full relative p-6 max-[599px]:p-4 bg-[#479392] pt-28">
                <img class="w-[35%] absolute right-0 top-0" src="./assets/images/social3.png" alt="">
                <h1 class="text-[8vh] text-[#F5F7FF]">Mobile <br> Marketing</h1>
                <div class="flex flex-col mt-2 gap-y-3">
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Social Media Marketing</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Social Media Optimization</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Social Media Community Management</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Influencer Marketing</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                </div>
            </div>
            <div class="card-4 w-[32%] max-[599px]:w-full relative p-6 max-[599px]:p-4 bg-[#30679E] pt-28">
                <img class="w-[45%] absolute right-[20%] top-0" src="./assets/images/social4.png" alt="">
                <h1 class="text-[8vh] text-[#F5F7FF]">Visual <br> Designing</h1>
                <div class="flex flex-col mt-2 gap-y-3">
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Social Media Marketing</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Social Media Optimization</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Social Media Community Management</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Influencer Marketing</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                </div>
            </div>
            <div class="card-5 w-[32%] max-[599px]:w-full relative p-6 max-[599px]:p-4 bg-[#8A6597] pt-28">
                <img class="w-[25%] absolute left-0 top-0" src="./assets/images/social5.png" alt="">
                <h1 class="text-[8vh] text-[#F5F7FF]">Web <br> Development</h1>
                <div class="flex flex-col mt-2 gap-y-3">
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Social Media Marketing</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Social Media Optimization</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Social Media Community Management</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Influencer Marketing</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                </div>
            </div>
            <div class="card-6 w-[32%] max-[599px]:w-full relative p-6 max-[599px]:p-4 bg-[#37456E] pt-28">
                <img class="w-[40%] absolute right-0 top-0" src="./assets/images/social6.png" alt="">
                <h1 class="text-[8vh] text-[#F5F7FF]">Content <br> Creation</h1>
                <div class="flex flex-col mt-2 gap-y-3">
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Social Media Marketing</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Social Media Optimization</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Social Media Community Management</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                    <div
                        class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                        <h1 class="text-[2.5vh] font-semibold">Influencer Marketing</h1>
                        <img class="w-7 h-7 cursor-pointer" src="./assets/images/arrowMain.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section Starts Here -->

    <!-- Teastimonials Section Starts Here -->
    <section class="w-full pt-32 max-[599px]:pt-6 overflow-hidden">
        <div class="relative w-full h-full">
            <div class="absolute w-[28%] right-0 -top-24 max-[599px]:top-14 z-30">
                <img class="w-full h-full object-cover" src="./assets/images/testimonialBg.png" alt="">
            </div>
            <div class="w-full p-4 flex items-center flex-col">
                <div class="headings flex items-center justify-start">
                    <span class="capitalize font-[500] text-[3.5vw] max-[599px]:text-[9.5vw]">testim</span>
                    <span
                        class="rounded-md text-white text-[3.5vw] max-[599px]:text-[9.5vw] font-[600] px-2 py-2 leading-none text-center bg-gradient-to-r from-[#FF6F1F] to-[#E08A00]">
                        onilas
                    </span>
                </div>
            </div>

            <!-- Swiper Container -->
            <div class="swiper mySwiper h-[500px] w-full relative flex mt-3 items-center justify-center">
                <div class="swiper-wrapper">
                    <!-- Testimonial Slide 1 -->
                    <div class="swiper-slide relative flex items-center justify-center h-[320px]">
                        <div
                            class="w-[70%] h-full z-10 bg-[linear-gradient(120.02deg,#4F92F1_-6.05%,#4F92F1_9.3%,#2E548B_79.32%)] flex flex-col gap-y-10 rounded-2xl p-10 max-[599px]:p-6">
                            <h1 class="uppercase font-[200] text-[2vw] max-[599px]:text-[6vw] text-zinc-50">What
                                They Say <br> About Us ?
                            </h1>
                            <p class="text-zinc-100 text-[1.2vw] max-[599px]:text-[3.2vw] leading-tighter">
                                Ask agreed answer rather joy nature admire wisdom. Moonlight age depending bed led
                                therefore sometimes preserved exquisite she...
                            </p>
                            <div class="w-full flex justify-between items-center">
                                <div>
                                    <h1 class="text-[3vw] max-[599px]:text-[5vw] text-zinc-50 font-bold">Veronica
                                        Gleason</h1>
                                    <p class="text-zinc-200 text-[0.8vw] max-[599px]:text-[2.8vw]">Dynamic
                                        Functionality Designer</p>
                                </div>
                                <div class="w-[20%]">
                                    <img class="w-full h-full object-cover" src="./assets/images/5star.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <!-- Shadows (Fixed Height) -->
                        <div class="absolute bg-[#141B3026] top-14 rounded-xl w-[65%] opacity-[0.6] h-[300px]">
                        </div>
                        <div class="absolute bg-[#141B3026] top-20 rounded-xl w-[58%] opacity-[0.7] h-[300px]">
                        </div>
                    </div>

                    <!-- Testimonial Slide 2 -->
                    <div class="swiper-slide relative flex items-center justify-center h-[270px]">
                        <div
                            class="w-[70%] h-full z-10 bg-[linear-gradient(120.02deg,#4F92F1_-6.05%,#4F92F1_9.3%,#2E548B_79.32%)] flex flex-col gap-y-10 max-[599px]:gap-y-6 rounded-2xl p-10 max-[599px]:p-6">
                            <h1 class="uppercase font-[200] text-[2vw] max-[599px]:text-[6vw] text-zinc-50">Client
                                Testimonials</h1>
                            <p class="text-zinc-100 text-[1.2vw] max-[599px]:text-[3.2vw] leading-tighter">
                                The experience was amazing! Highly recommend this service. Their expertise is
                                outstanding...
                            </p>
                            <div class="w-full flex justify-between items-center">
                                <div>
                                    <h1 class="text-[3vw] max-[599px]:text-[5vw] text-zinc-50 font-bold">John Doe
                                    </h1>
                                    <p class="text-zinc-200 text-[0.8vw] max-[599px]:text-[2.8vw]">Software Engineer
                                    </p>
                                </div>
                                <div class="w-[20%]">
                                    <img class="w-full h-full object-cover" src="./assets/images/5star.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <!-- Shadows (Fixed Height) -->
                        <div class="absolute bg-[#141B3026] top-14 rounded-xl w-[65%] opacity-[0.6] h-[250px]">
                        </div>
                        <div class="absolute bg-[#141B3026] top-20 rounded-xl w-[58%] opacity-[0.7] h-[250px]">
                        </div>
                    </div>
                </div>

                <!-- Swiper Buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <!-- Teastimonials Section Starts Here -->

    <!-- Contact Us Section Starts Here -->
    <section
        class="Contact-Us -mt-32 max-[599px]:-mt-52 w-full h-screen relative flex items-center justify-center overflow-hidden">
        <div class="absolute top-[20%] w-[40%] max-[599px]:w-full left-[10%] max-[599px]:-left-10">
            <img class="h-full w-full object-cover" src="./assets/images/boostImage.png  " alt="">
        </div>
        <div
            class="relative w-full h-full translate-x-[40%] max-[599px]:translate-x-0 flex items-start max-[599px]:items-center justify-center max-[599px]:justify-end max-[599px]:-translate-y-32 px-6 flex-col">
            <!-- Heading -->
            <h1 class="text-4xl md:text-5xl font-bold text-[#1D3F6E]">
                Boost Your <span class="text-[#1D3F6E] border-b-4 border-[#FF6F1F]">Online</span>
            </h1>
            <h1 class="text-4xl md:text-5xl font-bold text-[#1D3F6E]">Presence</h1>

            <!-- Contact Button -->
            <button class="mt-6 bg-[#FF6F1F] text-white text-lg px-12 py-2 rounded-md hover:bg-[#E05F1C] transition-all">
                Contact Us
            </button>

            <!-- Pen Icon (SVG) -->
            <svg class="absolute top-0 right-[-50px] w-14 h-14 text-[#1D3F6E]" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 19h.01" />
                <path d="M17 6l4 4L7 20H3v-4L17 6z" />
                <path d="M3 3l18 18" />
            </svg>
        </div>
    </section>
    <!-- Contact Us Section Starts Here -->
@endsection
