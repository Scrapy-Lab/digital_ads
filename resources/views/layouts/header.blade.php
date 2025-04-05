   <!-- Header Starts Here-->
   <header>
    <nav
        class="w-full px-20 max-[599px]:px-6 py-3 max-[599px]:py-4 flex justify-between items-center fixed z-[999] top-0 left-0 bg-[#F5F7FF]">
        <div class="logo w-[20%] max-[599px]:w-1/2">
            <img class="w-full h-full object-cover" src="./assets/images/logo.svg" alt="">
        </div>
        <div class="menu max-[599px]:hidden">
            <ul class="flex gap-6">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="{{route('contact')}}">Contact Us</a></li>
            </ul>
        </div>
        </div>
    </nav>
</header>
<!-- Header Ends Here-->
