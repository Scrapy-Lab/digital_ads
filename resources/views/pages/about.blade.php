@extends('layouts.app')
@section('content')
    <!-- About's Hero Section Starts Here-->
    <section
        class="w-full h-screen relative flex items-center justify-center bg-[linear-gradient(279.16deg,#4A32FF_-27.33%,#001C3C_38.47%,#27ACFF_108.93%)] overflow-hidden">
        <div class="w-full h-full">
            <img class="w-full h-full object-cover object-top scale-150" src="./assets/images/aboutbg1.png" alt="">
        </div>
        <div
            class="overlay absolute bottom-0 text-white w-[85%] rounded-t-[40px] h-[60%] flex items-center justify-center flex-col gap-6 text-center bg-[url(./assets/images/grains.png)] backdrop-blur-md mx-auto shadow-[12px_30px_14.3px_0px_#00000040] border-2 bg-clip-border border-image-source[linear-gradient(130.38deg, #FFFFFF 57.86%, rgba(152, 255, 206, 0.68) 74.98%, #3771C8 89.11%, #7E69FF 100.67%)]">
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
    <section class="Our-Vision w-full bg-[#F5F7FF] ">
        <div class="w-full flex max-[599px]:flex-col">
            <div class="w-1/2 max-[599px]:w-full">
                <img src="./assets/images/Group 1261155440.png" alt="">
            </div>
            <div class="w-1/2 max-[599px]:w-full px-16 py-4 flex items-center justify-center flex-col">
                <img src="./assets/images/Heading 2 → Our values..png" alt="">
                <p class=" text-[1.5vw] max-[599px]:text-[3.5vw] pt-5 max-[599px]:pt-0 text-[#083E68]">Lorem ipsum
                    dolor sit, amet consectetur adipisicing
                    elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, iure! Dolor nobis
                    voluptas voluptate aut rerum ipsam cumque, iste eos aspernatur expedita nostrum doloremque
                    doloribus quidem nam labore possimus tempora similique eveniet.</p>
            </div>
        </div>
        <div class="w-full flex max-[599px]:flex-col-reverse max-[599px]:pb-6">
            <div class="w-1/2 max-[599px]:w-full flex items-center px-16 pt-4 justify-center flex-col">
                <img src="./assets/images/Group 1261156943.png" alt="">
            </div>
            <div class="w-1/2 max-[599px]:w-full">
                <img src="./assets/images/Group 1261155449.png" alt="">
            </div>
        </div>
    </section>
    <!-- About's Our Vision Section Ends Here -->

    <!-- About's Experience Section Starts Here -->
    <section class="Experience w-full min-h-screen bg-[url('./assets/images/background.png')] bg-cover bg-center">
        <div class="w-full flex items-center justify-center flex-col pt-28">
            <h1 class="text-[6vw] font-bold text-white text-center leading-[1]"> No One Can Beat Our <br> <span
                    class="text-[rgb(255,166,22)]">Experience</span></h1>
            <p class="text-[1.3vw] mt-12 w-[70%] text-center text-white"> These seven principles
                highlight our fundamental beliefs as a team and as a business. Our core values attract and unite
                individuals focused on building a stable, desirable work environment and providing exceptional
                solutions we are proud of.</p>
        </div>
        <div class=" flex flex-wrap w-full h-full gap-6 p-20 max-[599px]:p-10 items-center justify-center">
            <div class="w-[15%] flex items-center justify-center max-[599px]:w-[25%]">
                <img class="w-full h-full object-cover" src="./assets/images/Group 1261156968.png" alt="">
            </div>
            <div class="w-[23%] flex items-center justify-center max-[599px]:w-[25%]">
                <img class="w-full h-full object-cover" src="./assets/images/Group 1261156967.png" alt="">
            </div>
            <div class="w-[15%] flex items-center justify-center max-[599px]:w-[25%]">
                <img class="w-full h-full object-cover" src="./assets/images/Group 1261156966.png" alt="">
            </div>
            <div class="w-[15%] flex items-center justify-center max-[599px]:w-[25%]">
                <img class="w-full h-full object-cover" src="./assets/images/Group 1261156965.png" alt="">
            </div>
            <div class="w-[25%] flex items-center justify-center max-[599px]:w-[25%]">
                <img class="w-w-full h-full object-cover" src="./assets/images/Group 1261156964.png" alt="">
            </div class="w-[15%] max-[599px]:w-[25%]">>
            <div class="w-[15%] flex items-center justify-center">
                <img class="w-full h-full object-cover" src="./assets/images/Group 1261156971.png" alt="">
            </div>
            <div class="w-[15%] flex items-center justify-center max-[599px]:w-[25%]">
                <img class="w-full h-full object-cover" src="./assets/images/Group 1261156954.png" alt="">
            </div>
            <div class="w-[15%] flex items-center justify-center max-[599px]:w-[25%]">
                <img class="w-full h-full object-cover" src="./assets/images/Group 1261156970.png" alt="">
            </div>
            <div class="w-[15%] flex items-center justify-center max-[599px]:w-[25%]">
                <img class="w-full h-full object-cover" src="./assets/images/Group 1261156972.png" alt="">
            </div>
            <div class="w-[15%] flex items-center justify-center max-[599px]:w-[25%]">
                <img class="w-full h-full object-cover" src="./assets/images/Group 1261156973.png" alt="">
            </div>
            <div class="w-[17%] flex items-center justify-center max-[599px]:w-[25%]">
                <img class="w-full h-full object-cover" src="./assets/images/Group 1261156974.png" alt="">
            </div>
            <div class="w-[15%] flex items-center justify-center max-[599px]:w-[25%]">
                <img class="w-full h-full object-cover" src="./assets/images/Group 1261156975.png" alt="">
            </div>
            <div class="w-[17%] flex items-center justify-center max-[599px]:w-[25%]">
                <img class="w-full h-full object-cover" src="./assets/images/Group 1261156976.png" alt="">
            </div>
            <div class="w-[15%] flex items-center justify-center">
                <img class="w-full h-full object-cover" src="./assets/images/Group 1261156977.png" alt="">
            </div>
            <div class="w-[15%] flex items-center justify-center">
                <img class="w-full h-full object-cover" src="./assets/images/Group 1261156978.png" alt="">
            </div>
        </div>
    </section>
    <!-- About's Experience Section Ends Here -->

    <!-- About's Our Journey Section Starts Here -->
    <section
        class="Our-Journey w-full relative py-20 max-[599px]:px-6 flex flex-col items-center justify-center bg-[linear-gradient(278.17deg,#4F92F1_35.62%,#4F92F1_49.14%,#2E548B_110.84%)]">
        <img class="pb-[10vh] w-[60vh]" src="./assets/images/Heading 1 → Who We Are..png" alt="">
        <img class="w-[84vh] absolute left-0 top-0" src="./assets/images/Ellipse 5.png" alt="">
        <img src="./assets/images/Group 1261156942.png" alt="">
    </section>
    <!-- About's Our Journey Section Starts Here -->

    <!-- About's Our Team Section Starts Here -->
    <section
        class="Our-Team w-full items-center gap-y-34 max-[599px]:gap-y-16 justify-center p-16 max-[599px]:px-6 bg-[#F5F7FF] flex flex-col overflow-hidden">
        <img class="w-[55vh] pt-20" src="./assets/images/Our Team.png" alt="">
        <div class="flex w-[100%] gap-x-7 items-center justify-center max-[599px]:flex-col">
            <img class="w-[50vh]" src="./assets/images/Frame 1000005909.png" alt="">
            <img class="w-[50vh]" src="./assets/images/Frame 1000005910.png" alt="">
            <img class="w-[50vh]" src="./assets/images/Frame 1000005911.png" alt="">
        </div>
        <img class="w-[12vh]" src="./assets/images/Group 1261156941.png" alt="">
    </section>
    <!-- About's Our Team Section Starts Here -->

    <!-- About's Contact Section Starts Here -->
    <section
        class="Contact-Us bg-[#F5F7FF] -mt-32 max-[599px]:-mt-52 w-full h-screen relative flex items-center justify-center overflow-hidden">
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
    <!-- About's Contact Section Starts Here -->
@endsection
