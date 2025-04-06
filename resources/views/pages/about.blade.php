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

    <section class="w-full min-h-screen bg-[#002169] relative overflow-hidden">
        <!-- Network background overlay -->
        <div
            class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1492321936769-b49830bc1d1e?auto=format&fit=crop&q=80&w=2671&ixlib=rb-4.0.3')] bg-cover bg-center opacity-10">
        </div>

        <!-- Content Container -->
        <div class="relative z-10 w-full h-full">
            <!-- Header -->
            <div class="w-full flex items-center justify-center flex-col pt-20 lg:pt-28">
                <h1 class="text-4xl md:text-5xl lg:text-[6vw] font-bold text-white text-center leading-[1.1]">
                    No One Can Beat Our <br>
                    <span class="text-[#FFA616]">Experience</span>
                </h1>
                <p
                    class="text-sm md:text-base lg:text-[1.3vw] mt-6 md:mt-12 w-[85%] md:w-[80%] lg:w-[70%] text-center text-white">
                    These seven principles highlight our fundamental beliefs as a team and as a business. Our core
                    values attract and unite
                    individuals focused on building a stable, desirable work environment and providing exceptional
                    solutions we are proud of.
                </p>
            </div>

            <!-- Grid of Icons - Flexible layout that wraps -->
            <div class="flex flex-wrap w-full h-full gap-6 p-10 lg:p-20 items-center justify-center">
                <!-- Hospitality -->
                <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                    <div
                        class="w-16 h-16 md:w-24 md:h-24 rounded-full border-2 border-[#FFA616] flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 md:w-12 md:h-12 text-[#FFA616]"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 21V5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v16"></path>
                            <path d="M1 21h22"></path>
                            <path d="M7 10.5V4"></path>
                            <path d="m5 12.5 2-2 2 2"></path>
                            <path d="M11.5 4v7"></path>
                            <path d="M9.5 6h4"></path>
                            <path d="M9.5 9h4"></path>
                            <path d="M15 7.5V4"></path>
                            <path d="m17 5.5-2 2-2-2"></path>
                        </svg>
                    </div>
                    <p class="text-white text-xs md:text-sm lg:text-base text-center">Hospitality</p>
                </div>

                <!-- Banking & Finance -->
                <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                    <div
                        class="w-16 h-16 md:w-24 md:h-24 rounded-full border-2 border-[#FFA616] flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 md:w-12 md:h-12 text-[#FFA616]"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="6" width="20" height="12" rx="2"></rect>
                            <circle cx="12" cy="12" r="2"></circle>
                            <path d="M6 12h.01M18 12h.01"></path>
                        </svg>
                    </div>
                    <p class="text-white text-xs md:text-sm lg:text-base text-center">Banking & Finance</p>
                </div>

                <!-- Services -->
                <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                    <div
                        class="w-16 h-16 md:w-24 md:h-24 rounded-full border-2 border-[#FFA616] flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 md:w-12 md:h-12 text-[#FFA616]"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M11.05 3.00002l-6 2.46c-.55.23-.93.76-.93 1.37v11.35c0 .8.65 1.45 1.45 1.45h.92c.8 0 1.45-.65 1.45-1.45v-5.49l9.11 3.72c.17.07.37.09.55.06.55-.1.94-.61.94-1.18v-8.38a1.18 1.18 0 0 0-.83-1.13l-6-2.3">
                            </path>
                        </svg>
                    </div>
                    <p class="text-white text-xs md:text-sm lg:text-base text-center">Services</p>
                </div>

                <!-- Publishing -->
                <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                    <div
                        class="w-16 h-16 md:w-24 md:h-24 rounded-full border-2 border-[#FFA616] flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 md:w-12 md:h-12 text-[#FFA616]"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 13V7"></path>
                            <path d="M15.5 10.5H8.5"></path>
                            <path d="M5 3a2 2 0 0 0-2 2"></path>
                            <path d="M19 3a2 2 0 0 1 2 2"></path>
                            <path d="M21 19a2 2 0 0 1-2 2"></path>
                            <path d="M5 21a2 2 0 0 1-2-2"></path>
                            <path d="M9 3h1"></path>
                            <path d="M14 3h1"></path>
                            <path d="M14 21h1"></path>
                            <path d="M9 21h1"></path>
                            <path d="M3 9v1"></path>
                            <path d="M21 9v1"></path>
                            <path d="M3 14v1"></path>
                            <path d="M21 14v1"></path>
                        </svg>
                    </div>
                    <p class="text-white text-xs md:text-sm lg:text-base text-center">Publishing</p>
                </div>

                <!-- Manufacturing -->
                <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                    <div
                        class="w-16 h-16 md:w-24 md:h-24 rounded-full border-2 border-[#FFA616] flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 md:w-12 md:h-12 text-[#FFA616]"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z">
                            </path>
                            <path d="M15 6h5"></path>
                            <path d="M17 4v4"></path>
                        </svg>
                    </div>
                    <p class="text-white text-xs md:text-sm lg:text-base text-center">Manufacturing</p>
                </div>

                <!-- Healthcare -->
                <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                    <div
                        class="w-16 h-16 md:w-24 md:h-24 rounded-full border-2 border-[#FFA616] flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 md:w-12 md:h-12 text-[#FFA616]"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                            </path>
                            <path d="M12 5 9 8l3 3 3-3-3-3Z"></path>
                        </svg>
                    </div>
                    <p class="text-white text-xs md:text-sm lg:text-base text-center">Healthcare</p>
                </div>

                <!-- Real Estate -->
                <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                    <div
                        class="w-16 h-16 md:w-24 md:h-24 rounded-full border-2 border-[#FFA616] flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 md:w-12 md:h-12 text-[#FFA616]"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                    </div>
                    <p class="text-white text-xs md:text-sm lg:text-base text-center">Real Estate</p>
                </div>

                <!-- FMCG -->
                <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                    <div
                        class="w-16 h-16 md:w-24 md:h-24 rounded-full border-2 border-[#FFA616] flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 md:w-12 md:h-12 text-[#FFA616]"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 8h14"></path>
                            <path d="M5 16h14"></path>
                            <path d="M3 12h18"></path>
                            <path d="M10 22V2"></path>
                        </svg>
                    </div>
                    <p class="text-white text-xs md:text-sm lg:text-base text-center">FMCG</p>
                </div>

                <!-- Education -->
                <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                    <div
                        class="w-16 h-16 md:w-24 md:h-24 rounded-full border-2 border-[#FFA616] flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 md:w-12 md:h-12 text-[#FFA616]"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                            <path d="M6 12v5c0 2 2 3 6 3s6-1 6-3v-5"></path>
                        </svg>
                    </div>
                    <p class="text-white text-xs md:text-sm lg:text-base text-center">Education</p>
                </div>

                <!-- Additional industries -->
                <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                    <div
                        class="w-16 h-16 md:w-24 md:h-24 rounded-full border-2 border-[#FFA616] flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 md:w-12 md:h-12 text-[#FFA616]"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M20.5 7.5A2.5 2.5 0 0 1 18 5H6a2.5 2.5 0 0 1-2.5 2.5A2.5 2.5 0 0 1 1 10V17a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2v-7a2.5 2.5 0 0 1-2.5-2.5Z">
                            </path>
                            <path d="M5 19v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1"></path>
                            <path d="M15 5V3a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2"></path>
                        </svg>
                    </div>
                    <p class="text-white text-xs md:text-sm lg:text-base text-center">Retail</p>
                </div>

                <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                    <div
                        class="w-16 h-16 md:w-24 md:h-24 rounded-full border-2 border-[#FFA616] flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 md:w-12 md:h-12 text-[#FFA616]"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect width="16" height="13" x="4" y="8" rx="2"></rect>
                            <path d="m2 13 2-2"></path>
                            <path d="m20 7 2-2"></path>
                            <path d="M15 13v3"></path>
                        </svg>
                    </div>
                    <p class="text-white text-xs md:text-sm lg:text-base text-center">FMCD</p>
                </div>

                <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                    <div
                        class="w-16 h-16 md:w-24 md:h-24 rounded-full border-2 border-[#FFA616] flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 md:w-12 md:h-12 text-[#FFA616]"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M8 3H7a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h1"></path>
                            <path d="M12 3h1a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-1"></path>
                            <path d="M2 16h20"></path>
                            <path d="M2 20h20"></path>
                        </svg>
                    </div>
                    <p class="text-white text-xs md:text-sm lg:text-base text-center">Insurance</p>
                </div>

                <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                    <div
                        class="w-16 h-16 md:w-24 md:h-24 rounded-full border-2 border-[#FFA616] flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 md:w-12 md:h-12 text-[#FFA616]"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect>
                            <line x1="7" y1="2" x2="7" y2="22"></line>
                            <line x1="17" y1="2" x2="17" y2="22"></line>
                            <line x1="2" y1="12" x2="22" y2="12"></line>
                            <line x1="2" y1="7" x2="7" y2="7"></line>
                            <line x1="2" y1="17" x2="7" y2="17"></line>
                            <line x1="17" y1="17" x2="22" y2="17"></line>
                            <line x1="17" y1="7" x2="22" y2="7"></line>
                        </svg>
                    </div>
                    <p class="text-white text-xs md:text-sm lg:text-base text-center">Entertainment</p>
                </div>

                <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                    <div
                        class="w-16 h-16 md:w-24 md:h-24 rounded-full border-2 border-[#FFA616] flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 md:w-12 md:h-12 text-[#FFA616]"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2a9 9 0 0 0-9 9c0 3.6 3.96 6.48 9 11.67 5.04-5.19 9-8.07 9-11.67a9 9 0 0 0-9-9Z">
                            </path>
                            <path d="M8 10h8"></path>
                            <path d="M12 6v8"></path>
                        </svg>
                    </div>
                    <p class="text-white text-xs md:text-sm lg:text-base text-center">Agriculture</p>
                </div>

                <div class="w-[15%] min-w-[80px] max-[599px]:w-[25%] flex flex-col items-center justify-center">
                    <div
                        class="w-16 h-16 md:w-24 md:h-24 rounded-full border-2 border-[#FFA616] flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 md:w-12 md:h-12 text-[#FFA616]"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"></path>
                            <path d="M7 2v20"></path>
                            <path d="M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Z"></path>
                        </svg>
                    </div>
                    <p class="text-white text-xs md:text-sm lg:text-base text-center">Food & B</p>
                </div>
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
    <section class="bg-[#F5F7FF] w-full min-h-screen relative flex items-center justify-center overflow-hidden">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between">
            <!-- Left Side with Rocket Illustration -->
            <div class="w-full md:w-1/2 mb-10 md:mb-0 flex justify-center">
                <img src="./assets/images/boostImage.png" alt="Rocket illustration" class="w-full max-w-md">
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
@endsection
