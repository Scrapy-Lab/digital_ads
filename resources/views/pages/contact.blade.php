@extends('layouts.app')
@section('content')
    <!-- About's Hero Section Starts Here-->
    <section
        class="w-full h-screen relative flex items-center justify-center bg-[linear-gradient(279.16deg,#4A32FF_-27.33%,#001C3C_38.47%,#27ACFF_108.93%)] overflow-hidden">
        <div class="w-full h-full">
            <img class="w-full h-full object-cover object-top scale-150" src="./assets/images/12.png" alt="">
        </div>
        <div
            class="overlay absolute bottom-0 text-white w-[85%] rounded-t-[40px] h-[60%] flex items-center justify-center flex-col gap-6 text-center bg-[url(./assets/images/grains.png)] backdrop-blur-md mx-auto shadow-[12px_30px_14.3px_0px_#00000040] border-2 bg-clip-border border-image-source[linear-gradient(130.38deg, #FFFFFF 57.86%, rgba(152, 255, 206, 0.68) 74.98%, #3771C8 89.11%, #7E69FF 100.67%)]">
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
        class="w-full bg-cover relative bg-center bg-gradient-to-tl from-blue-800 to-blue-950 px-4 md:px-[150px] pb-20 py-12">
        <img class="absolute top-0 right-0 w-[50%] md:w-[40%] lg:w-[50%] hidden md:block" src="./assets/images/Frame.png"
            alt="">
        <img class="absolute bottom-[10px] left-[10px] w-[50%] md:w-[40%] lg:w-[50%] rotate-180 hidden md:block"
            src="./assets/images/Frame.png" alt="">
        <img class="absolute bottom-[11%] left-[35%] w-[10%] hidden md:block" src="./assets/images/Ellipse1.png"
            alt="">
        <img class="absolute bottom-[0%] right-[28%] w-[20%] hidden md:block" src="./assets/images/letter_send 1.png"
            alt="">
        <h1 class="text-center text-white text-[8vw] md:text-[6vw] font-[700]">Contact Us</h1>
        <h5 class="text-center text-white text-[4vw] md:text-[2vw] mb-8 md:mb-0">Any question or remarks? Just write
            us a message !</h5>
        <div
            class="border-2 border-white/20 rounded-xl px-4 md:px-6 py-6 bg-white/10 backdrop-blur-lg shadow-lg mt-12 flex flex-col md:flex-row gap-8 md:gap-0">
            <div class="p-4 w-full md:w-[45%] bg-black/10 backdrop-blur-sm rounded-lg shadow-lg flex flex-col gap-4">
                <h1 class="text-white text-[5vw] md:text-[2.5vw] font-bold">Contact Information</h1>
                <div class="w-full flex items-center">
                    <img class="w-[3.5vh] h-[3vh]" src="./assets/images/Vector.png" alt="">
                    <h1 class="ml-4 text-white text-[3vw] md:text-[1.2vw] font-bold">contact@brandname.com</h1>
                </div>
                <div class="w-full flex">
                    <img class="w-[3.5vh] h-[3.5vh]" src="./assets/images/location.png" alt="">
                    <h1 class="ml-4 text-white text-[2.5vw] md:text-[1vw] font-bold">08 Triveni Tower 3rd Floor,
                        Central Avenue, GandhiPutla,<br>
                        Itwari, Nagpur 440002,<br>
                        India.</h1>
                </div>

                <iframe class="mt-12  md:block" style="    border-radius: 20px;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223994.21824421885!2d76.77821776940688!3d28.692348887372155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d047309fff32f%3A0xfc5606ed1b5d46c3!2sDelhi!5e0!3m2!1sen!2sin!4v1743836565899!5m2!1sen!2sin" width="720" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                {{-- <img class="mt-12  md:block" src="./assets/images/Frame 1261155813.png" alt=""> --}}
                <div class="w-full flex items-center justify-center gap-4 p-4">
                    <img class="w-8 md:w-auto" src="./assets/images/skill-icons_twitter.png" alt="">
                    <img class="w-8 md:w-auto" src="./assets/images/skill-icons_instagram.png" alt="">
                    <img class="w-8 md:w-auto" src="./assets/images/linkedin.png" alt="">
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
                        <textarea class="w-full bg-transparent outline-none border-b-2 border-white p-2 text-white resize-none" rows="4"></textarea>
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
    <section class="Contact-Us bg-[#F5F7FF] w-full h-screen relative flex items-center justify-center overflow-hidden">
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
