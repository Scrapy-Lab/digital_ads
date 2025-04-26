@extends('layouts.app')
@section('content')
    {{-- @include('layouts.header') --}}

    <!-- Hero Section Starts Here -->
    <section
        class="fade hero w-full min-h-screen max-[1025px]:h-[60vh] max-[599px]:h-[80vh] bg-[url(./assets/images/Homepage/Banner.png)] bg-cover max-[1025px]:bg-cover max-[1025px]:bg-center bg-no-repeat pt-20 max-[599px]:bg-[60%] flex items-center justify-start px-20 max-[1025px]:px-10 max-[599px]:px-4">

        <div class="relative w-1/2 max-[1025px]:w-[70%] max-[599px]:w-full whitespace-nowrap max-[599px]:whitespace-normal">

            <div
                class="relative font-[font2] flex flex-col -mt-20 text-white leading-[1] max-[599px]:leading-tight items-start inset-0">

                <!-- Subheading -->
                <h3 class="text-[3.5vw] max-[1025px]:text-[4.5vw] max-[599px]:text-[9vw] font-[400] tracking-[0]">
                    Weaving
                </h3>

                <!-- Main Heading -->
                <h1
                    class="text-[6vw] max-[1025px]:text-[7vw] max-[599px]:text-[14vw] font-black uppercase tracking-[1.04px] drop-shadow-lg leading-[6.67vw] max-[1025px]:leading-[7vw] max-[599px]:leading-tight text-[#FFD324]">
                    Digital Dreams
                </h1>

                <!-- Image -->
                <div class="w-full max-[599px]:w-[80%] my-4">
                    <img class="object-cover w-full h-auto" src="./assets/images/Homepage/bannerSemiImage.webp" alt="">
                </div>

                <!-- Subheading 2 -->
                <h4 class="text-[3.5vw] max-[1025px]:text-[4.5vw] max-[599px]:text-[9vw] font-[400] tracking-[0]">
                    or Innovate. Amplify. Convert.
                </h4>

                <!-- Button -->
                <button
                    class="px-16 py-3 text-[1.5vw] max-[1025px]:text-[2vw] max-[599px]:text-[4vw] tracking-[0] mt-4 w-fit font-[600] text-[#F47815] bg-white border-2 border-[#F27A13]
               shadow-[0px_4px_19px_2px_#FFC6996B] rounded-md
               hover:bg-[linear-gradient(92.21deg,_#F47A14_37.26%,_#FFC917_126.39%)] hover:text-white hover:border-transparent
               transition-all duration-300">
                    Get in Touch
                </button>

            </div>
        </div>
    </section>
    <!-- Hero Section Ends Here -->

    <!-- Company Section Starts Here -->
    <section class="fade companySwiper w-full px-4 py-8 max-[599px]:py-4">
        <div class="swiper-wrapper flex gap-4">

            <!-- Slide 1 -->
            <div
                class="swiper-slide box p-2 w-[20%] max-[1024px]:w-[25%] max-[599px]:w-[45%] bg-white rounded-xl max-[599px]:rounded-b-lg shadow-[0px_4px_19px_0px_#00000008]">
                <img class="w-full h-full object-contain" src="./assets/images/Globalimages/client1.png" alt="Client 1">
            </div>

            <!-- Slide 2 -->
            <div
                class="swiper-slide box p-2 w-[20%] max-[1024px]:w-[25%] max-[599px]:w-[45%] bg-white rounded-xl max-[599px]:rounded-b-lg shadow-[0px_4px_19px_0px_#00000008]">
                <img class="w-full h-full object-contain" src="./assets/images/Globalimages/client2.png" alt="Client 2">
            </div>

            <!-- Slide 3 -->
            <div
                class="swiper-slide box p-2 w-[20%] max-[1024px]:w-[25%] max-[599px]:w-[45%] bg-white rounded-xl max-[599px]:rounded-b-lg shadow-[0px_4px_19px_0px_#00000008]">
                <img class="w-full h-full object-contain" src="./assets/images/Globalimages/client3.png" alt="Client 3">
            </div>

            <!-- Slide 4 -->
            <div
                class="swiper-slide box p-2 w-[20%] max-[1024px]:w-[25%] max-[599px]:w-[45%] bg-white rounded-xl max-[599px]:rounded-b-lg shadow-[0px_4px_19px_0px_#00000008]">
                <img class="w-full h-full object-contain" src="./assets/images/Globalimages/client4.png" alt="Client 4">
            </div>

            <!-- Slide 5 -->
            <div
                class="swiper-slide box w-[20%] max-[1024px]:w-[25%] max-[599px]:w-[45%] bg-white rounded-xl max-[599px]:rounded-b-lg shadow-[0px_4px_19px_0px_#00000008]">
                <img class="w-full h-full object-contain" src="./assets/images/Globalimages/client5.png" alt="Client 5">
            </div>



            <!-- Slide 1 -->
            <div
                class="swiper-slide box p-2 w-[20%] max-[1024px]:w-[25%] max-[599px]:w-[45%] bg-white rounded-xl max-[599px]:rounded-b-lg shadow-[0px_4px_19px_0px_#00000008]">
                <img class="w-full h-full object-contain" src="./assets/images/Globalimages/client1.png" alt="Client 1">
            </div>

            <!-- Slide 2 -->
            <div
                class="swiper-slide box p-2 w-[20%] max-[1024px]:w-[25%] max-[599px]:w-[45%] bg-white rounded-xl max-[599px]:rounded-b-lg shadow-[0px_4px_19px_0px_#00000008]">
                <img class="w-full h-full object-contain" src="./assets/images/Globalimages/client2.png" alt="Client 2">
            </div>

            <!-- Slide 3 -->
            <div
                class="swiper-slide box p-2 w-[20%] max-[1024px]:w-[25%] max-[599px]:w-[45%] bg-white rounded-xl max-[599px]:rounded-b-lg shadow-[0px_4px_19px_0px_#00000008]">
                <img class="w-full h-full object-contain" src="./assets/images/Globalimages/client3.png" alt="Client 3">
            </div>

            <!-- Slide 4 -->
            <div
                class="swiper-slide box p-2 w-[20%] max-[1024px]:w-[25%] max-[599px]:w-[45%] bg-white rounded-xl max-[599px]:rounded-b-lg shadow-[0px_4px_19px_0px_#00000008]">
                <img class="w-full h-full object-contain" src="./assets/images/Globalimages/client4.png" alt="Client 4">
            </div>

            <!-- Slide 5 -->
            <div
                class="swiper-slide box w-[20%] max-[1024px]:w-[25%] max-[599px]:w-[45%] bg-white rounded-xl max-[599px]:rounded-b-lg shadow-[0px_4px_19px_0px_#00000008]">
                <img class="w-full h-full object-contain" src="./assets/images/Globalimages/client5.png" alt="Client 5">
            </div>


        </div>
    </section>
    <!-- Company Section Starts Here -->

    <!--Who We Are Section Starts Here -->
    <section
        class="fade Who-We-Are w-full flex items-center justify-center px-20 py-16 max-[599px]:px-6 max-[599px]:py-8 max-[1025px]:py-8 max-[1025px]:px-6 overflow-hidden">
        <div
            class="child-sec w-full h-full flex items-center max-[599px]:flex-col rounded-[30px] pt-4 bg-[url('./assets/images/Homepage/aboutBg.png')] bg-cover bg-center overflow-hidden">
            <!-- Left Image -->
            <div
                class="left w-1/2 max-[599px]:w-full h-full overflow-hidden rounded-l-[30px] max-[599px]:rounded-t-[30px] max-[599px]:rounded-b-none">
                <img class="w-full h-full object-cover" src="./assets/images/Homepage/who we are witout bg.png"
                    alt="Who We Are" />
            </div>

            <!-- Right Text Content -->
            <div
                class="right w-1/2 max-[599px]:w-full h-full px-6 py-6 max-[599px]:pt-4 max-[599px]:pb-6 rounded-r-[30px] max-[599px]:rounded-b-[30px] max-[599px]:rounded-t-none">
                <!-- Heading -->
                <div class="flex items-center justify-start gap-2 max-[599px]:gap-1">
                    <span class="capitalize text-white text-[3.5vw] max-[599px]:text-[9vw] leading-none">
                        who
                    </span>
                    <span
                        class="capitalize font-semibold rounded-md text-white text-[3vw] max-[599px]:text-[9vw] bg-[#F57C00] text-center px-2">
                        we are
                    </span>
                </div>

                <!-- Paragraph -->
                <p
                    class="text-[1.3vw] max-[599px]:text-[3.2vw] pt-3 pr-4 text-zinc-100 leading-[2.5vw] max-[599px]:leading-6 tracking-wide">
                    We’re not just another web development agency in Delhi; we’re tech savvy who blend creativity
                    with code. Our Digital Add agency in Delhi NCR creates cutting-edge web solutions that transform
                    visions into seamless online experiences. From responsive designs to scalable architectures, we
                    focus on every detail, ensuring each element contributes to our client’s success.
                </p>

                <!-- Button -->
                <button
                    class="px-12 py-2 text-[1.5vw] max-[599px]:text-[3.5vw] tracking-normal mt-6 font-semibold text-[#F47815] bg-white border-2 border-[#F27A13]
          shadow-[0px_4px_19px_2px_#FFC6996B] rounded-md
          hover:bg-[linear-gradient(92.21deg,_#F47A14_37.26%,_#FFC917_126.39%)] hover:text-white hover:border-transparent
          transition-all duration-300">
                    About Us
                </button>
            </div>
        </div>
    </section>
    <!-- Who We Are Section Starts Here -->

    <!-- What We Do Section Starts Here -->
    <section class="fade What-We-Do w-full px-6 py-8 max-[599px]:py-4 flex flex-col items-center gap-6 max-[599px]:gap-4">
        <!-- Heading -->
        <div class="headings flex gap-2 items-center justify-start">
            <span class="capitalize font-medium text-[3.5vw] max-[599px]:text-[9.5vw] text-[#000B28]">
                what
            </span>
            <span
                class="capitalize font-semibold text-white text-[3.5vw] max-[599px]:text-[9.5vw] px-3 py-1 rounded-md bg-gradient-to-r from-[#FF6F1F] to-[#E08A00] leading-none text-center">
                we do
            </span>
        </div>

        <!-- Description -->
        <div class="description w-[80%] max-[599px]:w-full">
            <p
                class="text-[1.3vw] max-[599px]:text-[3.3vw] font-medium text-[#000B28] leading-[2.2vw] max-[599px]:leading-6 tracking-wide text-center">
                We don’t talk big; we deliver results. From digital marketing to SEO, content strategy, or social
                media
                marketing in Delhi — you name it, and we will deliver it. Our mission? To elevate brands, one story
                at a time.
                Whether it’s digital solutions, optimizing for search engines, or igniting social engagement, we’re
                your partners
                in the digital realm.
            </p>
        </div>

        <!-- Image -->
        <div class="w-full h-full overflow-hidden rounded-[2rem] px-16 max-[1025px]:px-0 mt-10 max-[599px]:mt-0">
            <img class="w-full h-full object-cover object-center" src="./assets/images/Homepage/whatDo.webp"
                alt="What We Do" />
        </div>
    </section>
    <!-- What We Do Section Starts Here -->

    <!-- Services Section Starts Here -->
    <section class="fade Services w-full flex items-center flex-col gap-6 mt-16 max-[599px]:mt-10 px-20 max-[1025px]:px-6">
        <div class="headings flex gap-1 items-center justify-start">
            <span class="capitalize font-[500] text-[3.5vw] max-[1025px]:text-[5vw] max-[599px]:text-[9.5vw]">Our</span>
            <span
                class="capitalize rounded-md text-white text-[3.5vw] max-[1025px]:text-[5vw] max-[599px]:text-[9.5vw] font-[600] bg-gradient-to-r from-[#FF6F1F] to-[#E08A00] px-3 py-2 leading-none text-center">
                Services</span>
        </div>
        <div class="description w-[65%] max-[1025px]:w-[80%] max-[599px]:w-full">
            <p
                class="text-[1.3vw] max-[599px]:text-[3.3vw] max-[1025px]:text-[2.2vw] tracking-[1px] leading-[30px] ml-4 max-[599px]:ml-0 font-[500] text-[#000B28] text-center">
                We
                deliver results. From Digital marketing to SEO, content strategy, or social media marketing in
                Delhi, you name it and we will deliver it.</p>
        </div>
        <div class="w-full h-full flex gap-3 min-[2550px]:gap-6 flex-wrap items-center justify-center mt-10 max-[599px]:mt-0">
            <div
                class="card-1 w-[32%] h-[70vh] flex flex-col justify-end max-[1025px]:w-[48%] max-[599px]:w-full rounded-xl relative p-6 min-[2550px]:p-10 max-[599px]:p-4 bg-[#327493]">
                <img class="w-[40%] absolute right-[10%] top-0" src="./assets/images/Homepage/social1.png" alt="">
                <h1 class="text-[8vh] text-[#F5F7FF] leading-tight">Social <br> Media</h1>
                <div class="flex flex-col mt-4 gap-y-3">
                    <a href="{{ route('social-media-marketing') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">Social Media Marketing</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png" alt="">
                        </div>
                    </a>
                    <a href="{{ route('social-media-optimization') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">Social Media Optimization</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png" alt="">
                        </div>
                    </a>
                    <a href="{{ route('social-media-community-management') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">Social Media Community Management</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                alt="">
                        </div>
                    </a>
                    <a href="{{ route('influencer-marketing') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">Influencer Marketing</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div
                class="card-2 w-[32%] h-[70vh] flex flex-col justify-end max-[1025px]:w-[48%]  max-[599px]:w-full rounded-xl relative p-6 min-[2550px]:p-10 max-[599px]:p-4 bg-[#6775D0]">
                <img class="w-[35%] absolute right-0 top-0" src="./assets/images/Homepage/social2.png" alt="">
                <h1 class="text-[8vh] text-[#F5F7FF] leading-tight -translate-y-6">Digital <br> Marketing</h1>
                <div class="flex flex-col mt-2 gap-y-3">
                    <a href="{{ route('digital-marketing-strategy') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">Digital Marketing Strategy</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                alt="">
                        </div>
                    </a>
                    <a href="{{ route('search-engine-marketing') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">SEM (Search Engine Marketing)</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                alt="">
                        </div>
                    </a>
                    <a href="{{ route('digital-social-media-marketing') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">SEO (Social Media Marketing)</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                alt="">
                        </div>
                    </a>
                    <a href="{{ route('online-reputation-management') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">ORM (Online Reputation Marketing)</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div
                class="card-3 w-[32%] h-[70vh] flex flex-col justify-center max-[1025px]:w-[48%]  max-[599px]:w-full rounded-xl relative p-6 min-[2550px]:p-10 max-[599px]:p-4 bg-[#479392]">
                <img class="w-[35%] absolute right-0 top-0" src="./assets/images/Homepage/social3.png" alt="">
                <h1 class="text-[8vh] text-[#F5F7FF] leading-tight">Mobile <br> Marketing</h1>
                <div class="flex flex-col mt-2 gap-y-3">
                    <a href="{{ route('whatsapp-marketing') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">Whatsapp Marketing</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                alt="">
                        </div>
                    </a>
                    <a href="{{ route('voice-sms') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">Voice SMS </h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                alt="">
                        </div>
                    </a>
                    <a href="{{ route('bulk-sms') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">Bulk SMS</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div
                class="card-4 w-[32%]  h-[70vh] flex flex-col justify-end max-[1025px]:w-[48%]  max-[599px]:w-full rounded-xl relative p-6 min-[2550px]:p-10 max-[599px]:p-4 bg-[#30679E]">
                <img class="w-[45%] absolute right-[20%] top-0" src="./assets/images/Homepage/social4.png"
                    alt="">
                <h1 class="text-[8vh] text-[#F5F7FF] leading-tight">Visual <br> Designing</h1>
                <div class="flex flex-col mt-6 gap-y-3">
                    <a href="{{ route('graphic-designing') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">Graphic Designing</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                alt="">
                        </div>
                    </a>
                    <a href="{{ route('logo-designing') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">Logo Designing</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                alt="">
                        </div>
                    </a>
                    <a href="{{ route('photography') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">Photography</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                alt="">
                        </div>
                    </a>
                    <a href="{{ route('videography') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">VideoGraphy</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div
                class="card-5 w-[32%] h-[70vh] flex flex-col justify-end max-[1025px]:w-[48%]  max-[599px]:w-full rounded-xl relative p-6 min-[2550px]:p-10 max-[599px]:p-4 bg-[#8A6597]">
                <img class="w-[25%] absolute left-0 top-0" src="./assets/images/Homepage/social5.png" alt="">
                <h1 class="text-[8vh] max-[599px]:text-[7vh] text-[#F5F7FF] leading-tight">Web <br> Development</h1>
                <div class="flex flex-col mt-6 gap-y-3">
                    <a href="{{ route('website-design-and-development') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">Website Designing & Development</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                alt="">
                        </div>
                    </a>
                    <a href="{{ route('ecommerce-development') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">Ecommerce Development</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                alt="">
                        </div>
                    </a>
                    <a href="{{ route('wordpress-website-development') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">Wordpress Website Development</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                alt="">
                        </div>
                    </a>
                    <a href="{{ route('website-manintanance') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">Website Maintanance<h1>
                                    <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                        alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div
                class="card-6 w-[32%] h-[70vh] flex flex-col justify-end max-[1025px]:w-[48%] max-[599px]:w-full rounded-xl relative p-6 min-[2550px]:p-10 max-[599px]:p-4 bg-[#37456E]">
                <img class="w-[40%] absolute right-0 top-0" src="./assets/images/Homepage/social6.png" alt="">
                <h1 class="text-[8vh] text-[#F5F7FF] leading-tight">Content <br> Creation</h1>
                <div class="flex flex-col mt-6 gap-y-3">
                    <a href="{{ route('content-writing') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">SEO Content Writing</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                alt="">
                        </div>
                    </a>
                    <a href="{{ route('blog-writing') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">Blog Writing</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                alt="">
                        </div>
                    </a>
                    <a href="{{ route('promotional-writing') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">Promotional Writing</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                alt="">
                        </div>
                    </a>
                    <a href="{{ route('copy-writing') }}">
                        <div
                            class="w-full cursor-pointer rounded-xl shadow pr-2 pl-4 py-2 bg-[#F5F7FF] text-[#163D4F] hover:text-[#3D3600] hover:bg-yellow-300 transition-all flex justify-between items-center">
                            <h1 class="text-[2.5vh] font-semibold">Copywriting</h1>
                            <img class="w-7 h-7 cursor-pointer" src="./assets/images/Homepage/arrowMain.png"
                                alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section Starts Here -->

    <!-- Teastimonials Section Starts Here -->
    <section class="fade w-full pt-32 max-[599px]:pt-6 overflow-hidden">
        <div class="relative w-full h-full">
            <div class="absolute w-[28%] right-0 -top-[12.2vh] min-[2550px]:-top-[13.3vh]  max-[1025px]:hidden z-30">
                <img class="w-full h-full object-cover" src="./assets/images/Globalimages/testimonialBg.png"
                    alt="">
            </div>
            <div class="w-full p-4 flex items-center flex-col">
                <div class="headings flex items-center justify-start">
                    <span
                        class="capitalize font-[500] text-[3.5vw] max-[599px]:text-[9.5vw] max-[1025px]:text-[5vw]">testim</span>
                    <span
                        class="rounded-md text-white text-[3.5vw] max-[1025px]:text-[5vw] max-[599px]:text-[9.5vw] font-[600] px-2 py-2 leading-none text-center bg-gradient-to-r from-[#FF6F1F] to-[#E08A00]">
                        onilas
                    </span>
                </div>
            </div>

            <!-- Swiper Container -->
            <div class="swiper mySwiper relative flex mt-3 items-center justify-center">
                <div class="swiper-wrapper">
                    <!-- Testimonial Slide 1 -->
                    <div class="swiper-slide relative flex items-center justify-center py-10 max-[599px]:py-0 px-6">
                        <!-- Main Box (no fixed height) -->
                        <div style="background: linear-gradient(120.02deg, #4F92F1 -6.05%, #4F92F1 9.3%, #2E548B 79.32%);"
                            class="relative bg-[#4F92F1] via-[#4F92F1] to-[#2E548B] h-full w-[65%] max-[1025px]:w-[80%] max-[599px]:w-full text-white flex flex-col justify-between rounded-2xl p-10 max-[599px]:p-6 shadow-2xl overflow-hidden">

                            <!-- Inner Quote Icon -->
                            <div class="absolute w-[10%] max-[599px]:w-[20%] top-5 left-4 text-white select-none">
                                <img class="w-full h-full object-cover" src="./assets/images/Homepage/quote.svg"
                                    alt="">
                            </div>


                            <!-- Content -->
                            <div class="z-10 relative">
                                <h4
                                    class="text-xl min-[2550px]:text-[1.3vw] font-medium mb-5 max-[599px]:mb-3 leading-tight tracking-wide uppercase">
                                    What they say <br>
                                    about us?</h4>
                                <p class="text-sm min-[2550px]:text-[1.1vw]" style="line-height: 30px;">
                                    Ask agreed answer rather joy nature admire wisdom. Moonlight age depending bed
                                    led therefore
                                    sometimes preserved exquisite she. An fail up so shot leaf wise in. Minuter
                                    highest his
                                    arrived for put and. Hopes lived by rooms oh in no death house. Ask agreed
                                    answer rather joy nature admire wisdom. Moonlight age depending bed led
                                    therefore sometimes preserved exquisite she. An fail up so shot leaf wise in.
                                    Minuter highest his arrived for put and. Hopes lived by rooms oh in no death
                                    house.
                                </p>
                            </div>

                            <!-- Footer -->
                            <div
                                class="flex flex-col md:flex-row md:items-center md:justify-between mt-10 max-[599px]:mb-3 z-10 relative">
                                <div>
                                    <h3 class="text-4xl font-bold">Veronica Gleason</h3>
                                    <p class="text-sm opacity-80 min-[2550px]:text-[0.8vw]">Dynamic Functionality Designer</p>
                                </div>
                                <div class="flex mt-3 md:mt-0 space-x-1 text-3xl">
                                    <span>★</span><span>★</span><span>★</span><span>★</span><span
                                        class="opacity-40">★</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Testimonial Slide 2 -->
                    <div class="swiper-slide relative flex items-center justify-center py-10 max-[599px]:py-0 px-6">
                        <!-- Main Box (no fixed height) -->
                        <div style="background: linear-gradient(120.02deg, #4F92F1 -6.05%, #4F92F1 9.3%, #2E548B 79.32%);"
                            class="relative bg-[#4F92F1] via-[#4F92F1] to-[#2E548B] h-full w-[65%] max-[1025px]:w-[80%] max-[599px]:w-full text-white flex flex-col justify-between rounded-2xl p-10 max-[599px]:p-6 shadow-2xl overflow-hidden">

                            <!-- Inner Quote Icon -->
                            <div class="absolute w-[10%] max-[599px]:w-[20%] top-5 left-4 text-white select-none">
                                <img class="w-full h-full object-cover" src="./assets/images/Homepage/quote.svg"
                                    alt="">
                            </div>


                            <!-- Content -->
                            <div class="z-10 relative">
                                <h4
                                    class="text-xl min-[2550px]:text-[1.3vw] font-medium mb-5 max-[599px]:mb-3 leading-tight tracking-wide uppercase">
                                    What they say <br>
                                    about us?</h4>
                                <p class="text-sm min-[2550px]:text-[1.1vw]" style="line-height: 30px;">
                                    Ask agreed answer rather joy nature admire wisdom. Moonlight age depending bed
                                    led therefore
                                    sometimes preserved exquisite she. An fail up so shot leaf wise in. Minuter
                                    highest his
                                    arrived for put and. Hopes lived by rooms oh in no death house. Ask agreed
                                    answer rather joy nature admire wisdom. Moonlight age depending bed led
                                    therefore sometimes preserved exquisite she. An fail up so shot leaf wise in.
                                    Minuter highest his arrived for put and. Hopes lived by rooms oh in no death
                                    house.
                                </p>
                            </div>

                            <!-- Footer -->
                            <div
                                class="flex flex-col md:flex-row md:items-center md:justify-between mt-10 max-[599px]:mb-3 z-10 relative">
                                <div>
                                    <h3 class="text-4xl font-bold">Veronica Gleason</h3>
                                    <p class="text-sm opacity-80 min-[2550px]:text-[0.8vw]">Dynamic Functionality Designer</p>
                                </div>
                                <div class="flex mt-3 md:mt-0 space-x-1 text-3xl">
                                    <span>★</span><span>★</span><span>★</span><span>★</span><span
                                        class="opacity-40">★</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Teastimonials Section Ends Here -->

    <!-- Contact Section Starts Here -->
    <section class="fade bg-[#F5F7FF] w-full pt-20 pb-10 relative flex items-center justify-center overflow-hidden">
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
    <!-- Contact Section Ends Here -->

    {{-- @include('layouts.footer') --}}
@endsection
