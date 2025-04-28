<div class="swiper mySwiper mt-10 max-[599px]:mt-0 px-5">
    <div class="swiper-wrapper">

        @foreach ($getTeams as $getTeams)
            <!-- Slide 1 -->
            <div class="swiper-slide bg-white rounded-xl p-6">
                <div class="rounded-lg p-4 mb-4">
                    <img src="./assets/images/Aboutpage/team2.png" class="mx-auto rounded-md" alt="Team Member">
                </div>
                <h3 class="text-lg min-[2550px]:text-[1.3vw] font-semibold">{{ $getTeams->name }}</h3>
                <p class="text-sm min-[2550px]:text-[.9vw] text-gray-600 mt-2 m in-[2550px]:mt-3">
                    {{ $getTeams->content }}
                </p>
                <a href="mailto:{{ $getTeams->email }}"
                    class="mt-4 min-[2550px]:mt-6 inline-flex items-center text-pink-600 text-sm min-[2550px]:text-[1vw]">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M16 12H8m8 0l-4-4m4 4l-4 4" />
                    </svg>
                    EMAIL ANDRE
                </a>
            </div>
        @endforeach

    </div>

    <!-- Pagination Dots -->
    <div class="swiper-pagination translate-y-3"></div>
</div>
