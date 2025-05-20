<div class="relative w-full h-full">
    <div class="absolute w-[28%] right-0 -top-[12.2vh] min-[2550px]:-top-[13.3vh]  max-[1025px]:hidden z-30">
        <img class="w-full h-full object-cover" src="./assets/images/Globalimages/testimonialBg.png" alt="">
    </div>
    <div class="w-full p-4 flex items-center flex-col">
        <div class="headings flex items-center justify-start">
            <span
                class="capitalize font-[500] text-[3.5vw] max-[599px]:text-[9.5vw] max-[1025px]:text-[5vw]">testim</span>
            <span
                class="rounded-md text-white text-[3.5vw] max-[1025px]:text-[5vw] max-[599px]:text-[9.5vw] font-[600] px-2 py-2 leading-none text-center bg-gradient-to-r from-[#FF6F1F] to-[#E08A00]">
                onials
            </span>
        </div>
    </div>

    <!-- Swiper Container -->
    <div class="swiper mySwiper relative flex mt-3 items-center justify-center">
        <div class="swiper-wrapper">
            <!-- Testimonial Slide 1 -->
            {{-- @dd($getTestimonials) --}}
            @foreach ($getTestimonials as $getTestimonial)
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
                                {{ $getTestimonial->content }}
                            </p>
                        </div>

                        <!-- Footer -->
                        <div
                            class="flex flex-col md:flex-row md:items-center md:justify-between mt-10 max-[599px]:mb-3 z-10 relative">
                            <div>
                                <h3 class="text-4xl font-bold"> {{ $getTestimonial->name }}</h3>
                                <p class="text-sm opacity-80 min-[2550px]:text-[0.8vw]">
                                    {{ $getTestimonial->desgination }}
                                </p>
                            </div>
                            <div class="flex mt-3 md:mt-0 space-x-1 text-3xl">

                                @for ($i = 1; $i <= $getTestimonial->star; $i++)
                                    <span>★</span>
                                @endfor
                                @for ($i = 1; $i <= 5 - $getTestimonial->star; $i++)
                                <span class="opacity-40">★</span>
                                @endfor

                                {{-- <span>★</span><span>★</span><span>★</span> --}}
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>
</div>
