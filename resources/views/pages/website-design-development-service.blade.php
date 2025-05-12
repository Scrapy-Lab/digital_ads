@extends('layouts.app')
@section('content')
    <!-- Hero Section -->
    <section
        class="hero w-full h-[100vh] max-[599px]:hidden max-[1025px]:h-[40vh] max-[599px]:h-[80vh] bg-contain max-[1025px]:bg-cover max-[1025px]:bg-center bg-no-repeat mt-20 max-[599px]:mt-10 max-[599px]:pt-20 max-[599px]:bg-[60%] flex items-center justify-start px-20 max-[1025px]:px-10 max-[599px]:px-4"
        style="background-image: url('{{ $data['banner_image'] }}');">
    </section>

    <!-- Mobile Hero Section -->
    <section
        class="hero w-full h-[100vh] max-[599px]:block hidden max-[599px]:h-[30vh] bg-cover max-[1025px]:bg-cover max-[1025px]:bg-center bg-no-repeat mt-20 max-[599px]:pt-20 flex items-center justify-start px-20 max-[1025px]:px-10 max-[599px]:px-4"
        style="background-image: url('{{ $data['banner_image'] }}');">
    </section>

    <!-- Company Section Starts Here -->
    <section class="companySwiper w-full px-4 py-8 -mt-6 max-[1005px]:-mt-0 max-[599px]:mt-0">
        @livewire('clients')
    </section>
    <!-- Company Section Starts Here -->

    <!-- Unlock Exceptional Growth Opportunities Section -->
    <section class="flex flex-col items-center justify-between bg-[#F3F5FE] p-10 max-[599px]:p-6 ">

<div class="flex items-center justify-between w-full max-[1025px]:flex-col bg-white p-10 max-[599px]:p-6 rounded-2xl min-[2550px]:p-20" style="box-shadow: -16px 5px 33px 2px #00000014;">

    <!-- Left Image Section -->
    <div class="relative w-[40%] max-[1025px]:w-full min-[2550px]:px-10">
        <img src="{{ $data['section_1']['banner_img'] }}" alt="Community Management Visual"
            class="w-full max-[599px]:hidden h-auto rounded-md shadow-lg">
        <img src="{{ $data['section_1']['mobile_banner_img'] }}" alt="Community Management Visual"
            class="w-full max-[599px]:block hidden h-auto rounded-md shadow-lg">
    </div>


    <!-- Right Content Section -->
    <div class="w-[60%] max-[1025px]:w-full px-10 max-[1025px]:py-10 max-[1025px]:px-0 min-[2550px]:px-20">
        <h2 class="text-xl lg:text-3xl min-[2550px]:text-5xl font-bold mb-4 max-[599px]:mb-2">
            {{ $data['section_1']['title'] }}
        </h2>
        <p class="mb-6 max-[599px]:mb-3 max-[599px]:text-[3.2vw] text-gray-700 min-[2550px]:text-2xl">
            {{ $data['section_1']['subtitle'] }}
        </p>

        <ul class="space-y-4 text-gray-800 max-[599px]:text-[3.2vw] min-[2550px]:text-2xl">
            @foreach ($data['section_1']['bullet_points'] as $point)
                <li class="flex items-start">
                    <span class="text-blue-600 mt-1 mr-2">•</span>
                    <p>{!! $point !!}</p>
                </li>
            @endforeach
            <li class="flex items-start">
                <span class="text-blue-600 mt-1 mr-2">•</span>
                <p><strong>How to create and implement an effective Digital Markeing strategy?</strong></p>
            </li>
            <li class="flex items-start">
                <span class="text-blue-600 mt-1 mr-2">•</span>
                <p><strong>Which platforms are best suited for your industry?</strong></p>
            </li>
        </ul>

        <button class="mt-6 max-[599px]:mt-3 max-[599px]:text-[3.2vw] border border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white transition px-10 py-2 rounded font-semibold min-[2550px]:text-2xl min-[2550px]:px-14 min-[2550px]:py-4">
            Contact Us
        </button>
    </div>
</div>

</section>


<!-- Understanding Digital Community Management Strategy Section -->
<section class="flex flex-col lg:flex-row-reverse items-center justify-between bg-[#F3F5FE] p-10 max-[599px]:p-6 ">

<div class="flex items-center justify-between w-full max-[1025px]:flex-col bg-white p-10 max-[599px]:p-6 rounded-2xl min-[2550px]:p-20" style="box-shadow: -16px 5px 33px 2px #00000014;">

    <!-- Left Image Section -->
    <div class="w-[60%] max-[1025px]:w-full px-10 max-[1025px]:py-10 max-[1025px]:px-0 min-[2550px]:px-20">
        <h2 class="text-xl lg:text-3xl min-[2550px]:text-5xl font-bold mb-4 max-[599px]:mb-2">
            {{ $data['section_2']['title'] }}
        </h2>
        <p class="mb-6 max-[599px]:mb-3 max-[599px]:text-[3.2vw] text-gray-700 min-[2550px]:text-2xl">
            {{ $data['section_2']['subtitle'] }}
        </p>

        <ul class="space-y-4 text-gray-800 max-[599px]:text-[3.2vw] min-[2550px]:text-2xl">
            @foreach ($data['section_2']['bullet_points'] as $point)
                <li class="flex items-start">
                    <span class="text-blue-600 mt-1 mr-2">•</span>
                    <p>{!! $point !!}</p>
                </li>
            @endforeach
            <li class="flex items-start">
                <span class="text-blue-600 mt-1 mr-2">•</span>
                <p><strong>How to create and implement an effective Digital Markeing strategy?</strong></p>
            </li>
            <li class="flex items-start">
                <span class="text-blue-600 mt-1 mr-2">•</span>
                <p><strong>Which platforms are best suited for your industry?</strong></p>
            </li>
        </ul>

        <button class="mt-6 max-[599px]:mt-3 max-[599px]:text-[3.2vw] border border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white transition px-10 py-2 rounded font-semibold min-[2550px]:text-2xl min-[2550px]:px-14 min-[2550px]:py-4">
            Contact Us
        </button>
    </div>

    <!-- Right Content Section -->
    <div class="relative w-[40%] max-[1025px]:w-full min-[2550px]:px-10">
        <img src="{{ $data['section_2']['banner_img'] }}" alt="Community Management Visual"
            class="w-full max-[599px]:hidden h-auto rounded-md shadow-lg">
        <img src="{{ $data['section_2']['mobile_banner_img'] }}" alt="Community Management Visual"
            class="w-full max-[599px]:block hidden h-auto rounded-md shadow-lg">
    </div>
</div>

</section>

    <!-- Why Digital Community Management Matters Section -->
    <section class="w-full flex flex-col items-center max-[599px]:gap-4 relative mt-20 max-[1025px]:mt-10 max-[599px]:mt-4">

<img src="assets/images/Globalimages/dev.png" alt="">
    </section>

    <section class="fade min-h-screen max-[1025px]:min-h-[50vh] min-[2550px]:min-h-[75vh] relative px-20 max-[1025px]:px-6 max-[599px]:px-4 text-black overflow-hidden bg-cover bg-center max-[1025px]:bg-[90%] max-[599px]:bg-left"
        style="background-image: url('./assets/images/Globalimages/Faq2.png');">

        <div class="container min-[2550px]:w-[80vw] min-[2550px]:mx-10 mx-auto px-4 py-10 relative z-10">
            <div class="headings w-full flex gap-2 items-center justify-center max-[599px]:flex-col mb-10 min-[2550px]:translate-x-[30%]">
                <span class="capitalize font-[500] text-[3.5vw] max-[599px]:text-[9.5vw]">Frequentle Asked</span>
                <span
                    class="capitalize rounded-md text-white text-[3.5vw] max-[599px]:text-[9.5vw] font-[600] bg-gradient-to-r from-[#FF6F1F] to-[#E08A00] px-2 py-2 leading-none text-center">
                    Questions</span>
            </div>
            <div
                class="flex flex-col md:flex-row gap-10 max-[1025px]:gap-4 items-center md:items-start max-[599px]:gap-5 max-[599px]:text-[3.5vw] min-[2550px]:text-[1.3vw]">
                <!-- Right Image Section -->
                <!-- Left Content - FAQ Items -->
                <div class="md:w-[60%] w-full min-[2550px]:w-[80%]">
                    <div class="space-y-6 w-full">
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($data['faqs'] as $faq)
                            <!-- FAQ Item 1 -->
                            <div class="border-b border-black border-opacity-20 pb-4">
                                <button class="flex items-start gap-3 w-full text-left hover:no-underline faq-btn">
                                    <span class="text-black font-bold">0{{$i}}</span>
                                    <span class="flex-1 font-semibold">{{ $faq['que'] }}</span>
                                    <span class="text-black transition-transform duration-200 faq-icon">+</span>
                                </button>
                                <div class="ml-8 text-black text-opacity-80 mt-2 hidden faq-content">
                                    <p>{{ $faq['ans'] }}</p>
                                </div>
                            </div>
                            @php
                                $i++
                            @endphp
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript for FAQ toggle -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const faqButtons = document.querySelectorAll('.faq-btn');

        faqButtons.forEach(button => {
            button.addEventListener('click', function () {
                const content = this.nextElementSibling;
                const icon = this.querySelector('.faq-icon');

                // Close all other contents
                faqButtons.forEach(btn => {
                    const otherContent = btn.nextElementSibling;
                    const otherIcon = btn.querySelector('.faq-icon');

                    if (btn !== this) {
                        otherContent.classList.add('hidden');
                        if (otherIcon) otherIcon.textContent = '+';
                    }
                });

                // Toggle current content
                content.classList.toggle('hidden');
                icon.textContent = content.classList.contains('hidden') ? '+' : '-';
            });
        });
    });
</script>

    <!-- Teastimonials Section Starts Here -->
    <section class="w-full py-32 max-[599px]:py-10 overflow-hidden">
        @livewire('testimonial')
    </section>
    <!-- Teastimonials Section Ends Here -->

    <!-- JS Slider Logic -->
    <script>
        const testimonials = [{
                quote: "Ask agreed answer rather joy nature admire wisdom. Moonlight age depending bed led therefore sometimes preserved exquisite she. An fail up so shot leaf wise in. Minuter highest his arrived for put and. Hopes lived by rooms oh in no death house.",
                name: "Veronica Gleason",
                role: "Dynamic Functionality Designer",
                stars: 4
            },
            {
                quote: "Social strategy magic! Results in 3 weeks. We doubled engagement. They're amazing. Highly recommend!",
                name: "Jared Lawson",
                role: "Community Management Executive",
                stars: 5
            },
            {
                quote: "Our Digital Markeing was dead — now we have leads daily. The transformation is unreal. ROI is through the roof.",
                name: "Amina Castillo",
                role: "Startup Founder",
                stars: 5
            }
        ];

        let current = 0;
        const testimonialDiv = document.getElementById("testimonial");
        const dotsContainer = document.getElementById("dots");

        function updateTestimonial(index) {
            const t = testimonials[index];
            testimonialDiv.querySelector("p").innerText = t.quote;
            testimonialDiv.querySelector("h3").innerText = t.name;
            testimonialDiv.querySelector("p + div p").innerText = t.role;

            const starsEl = testimonialDiv.querySelector(".text-xl");
            starsEl.innerHTML = "";
            for (let i = 0; i < 5; i++) {
                starsEl.innerHTML += < span class = "${i < t.stars ? '' : 'opacity-40'}" > ★ < /span>;
            }

            [...dotsContainer.children].forEach((dot, i) => {
                dot.classList.toggle("opacity-90", i === index);
                dot.classList.toggle("opacity-30", i !== index);
            });
        }

        document.getElementById("prev").addEventListener("click", () => {
            current = (current - 1 + testimonials.length) % testimonials.length;
            updateTestimonial(current);
        });

        document.getElementById("next").addEventListener("click", () => {
            current = (current + 1) % testimonials.length;
            updateTestimonial(current);
        });

        updateTestimonial(current);
    </script>

    <!-- Book A Free Consultation Section -->
    <section class="relative py-16 max-[1025px]:py-6 overflow-hidden">

        <div class="absolute inset-0 w-full h-full pointer-events-none">
            <img class="w-full h-full object-cover" src="./assets/images/Globalimages/CTA.png" alt="" />
        </div>

        <div class="relative z-10 text-center px-4">
            <h2 class="text-white text-2xl md:text-3xl max-[599px]:text-[6vw] font-semibold mb-8 max-[599px]:mb-4">
                Book A Free Consultation
            </h2>

            <button
                class="relative inline-block px-20 py-2 font-semibold text-black rounded-lg m-[2px] bg-[linear-gradient(90deg,_#FFE330_0%,_#FF592B_29%,_#FFD752_77%,_#FF4800_100%)] z-[-1]">
                <span class="absolute inset-0 rounded-lg m-[3px] bg-white"></span>
                <span class="relative z-10 text-[1.5vw] max-[599px]:text-[3.5vw]">Let’s Talk</span>
            </button>

        </div>
    </section>
@endsection
