@extends('layouts.app')
@section('content')

   <!-- BANNER SECCTION -->
    <div class="mainBanner">
        <h3>Weaving</h3>
        <h1>DIGITAL DREAMS</h1>
        <img src="images/bannerSemiImage.webp" alt="">
        <h3 style="margin-bottom: 32px;">or Innovate. Amplify. Convert.</h3>
        <a href="#">Get in Touch</a>
    </div>

    <!-- CLIENT LOGOS -->

    <div class="d-flex justify-content-around gap-2 clientLogos">
        <div class="logoclient">
            <img src="{{asset('assets/images/client1.png')}}" alt="">
        </div>
        <div class="logoclient">
            <img src="{{asset('assets/images/client2.png')}}" alt="">
        </div>
        <div class="logoclient">
            <img src="{{asset('assets/images/client3.png')}}" alt="">
        </div>
        <div class="logoclient">
            <img src="{{asset('assets/images/client4.png')}}" alt="">
        </div>
        <div class="logoclient">
            <img src="{{asset('assets/images/client5.png')}}" alt="">
        </div>
    </div>

    <!-- About Section -->
    <div class="aboutSec">
        <div class="d-flex">
            <div class="abputImage">
                <img src="{{asset('assets/images/aboutImage.png')}}" alt="">
            </div>
            <div class="aboutContent">
                <h2>Who <span>We Are</span></h2>
                <p>We’re not just another web development agency in Delhi; we’re tech savvy who blend creativity with
                    code. Our Digital Add agency in Delhi NCR creates cutting-edge web solutions that transform visions
                    into seamless online experiences. From responsive designs to scalable architectures, we focus on
                    every detail, ensuring each element contributes to our client’s success.</p>
                <a href="#">About Us</a>
            </div>
        </div>
    </div>


    <!-- What we do -->
    <div class="whatWedoSec">
        <h2>What <span>We Do</span></h2>
        <p>We don’t talk big; we deliver results. From Digital marketing to SEO, content strategy, or social media
            marketing in Delhi, you name it and we will deliver it. Our mission? To elevate brands, one story at a time.
            Whether it’s digital solutions, optimizing for search engines, or igniting social engagement, we’re your
            partners in the digital realm.</p>
        <img src="{{asset('assets/images/whatDo.webp')}}" alt="">
    </div>

    <!-- What we do -->
    <div class="ourServices">
        <h2>Our <span>Services</span></h2>
        <p>We deliver results. From Digital marketing to SEO, content strategy, or social media marketing in Delhi, you
            name it and we will deliver it.</p>

        <div class="allService d-flex">
            <div class="allServiceBox">
                <img src="{{asset('assets/images/social1.png')}}" alt="" class="serviceBoxImages">
                <h3>Social<br>Media</h3>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
            </div>
            <div class="allServiceBox">
                <img src="images/social2.png" alt="" class="serviceBoxImages">
                <h3>Digital<br>Marketing</h3>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
            </div>
            <div class="allServiceBox">
                <img src="images/social3.png" alt="" class="serviceBoxImages">
                <h3>Mobile<br>Marketing</h3>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
            </div>
            <div class="allServiceBox">
                <img src="images/social4.png" alt="" class="serviceBoxImages">
                <h3>Visual<br>Designing</h3>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
            </div>
            <div class="allServiceBox">
                <img src="images/social5.png" alt="" class="serviceBoxImages">
                <h3>Development</h3>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
            </div>
            <div class="allServiceBox">
                <img src="images/social6.png" alt="" class="serviceBoxImages">
                <h3>Content<br>Creation</h3>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="serviceLink">
                    <div class="d-flex justify-content-between">
                        <p>Social Media Marketing</p><img src="{{asset('assets/images/arrowMain.png')}}" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>



    <!-- TESTIMONIAL SLIDER -->

    <div class="mainTestimonial">
        <h2>Testim<span>onials</span></h2>
        <div class="testimonialSLideInner">
            <div id="contentCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <!-- Carousel Inner Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center align-items-center p-5" style="height: fit-content;">
                            <div class="slidesStart">
                                <h4>WHAT THEY SAY<BR>ABOUT US?</h4>
                                <p>Ask agreed answer rather joy nature admire wisdom. Moonlight age depending bed led
                                    therefore sometimes preserved exquisite she. An fail up so shot leaf wise in.
                                    Minuter highest his arrived for put and. Hopes lived by rooms oh in no death house.
                                    Ask agreed answer rather joy nature admire wisdom. Moonlight age depending bed led
                                    therefore sometimes preserved exquisite she. An fail up so shot leaf wise in.
                                    Minuter highest his arrived for put and. Hopes lived by rooms oh in no death house.
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="authorNAme">
                                        <h3>Veronica Gleason</h3>
                                        <h6>Dynamic Functionality Designer</h6>
                                    </div>
                                    <div class="5star">
                                        <img src="images/5star.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center p-5" style="height: fit-content;">
                            <div class="slidesStart">
                                <h4>WHAT THEY SAY<BR>ABOUT US?</h4>
                                <p>Ask agreed answer rather joy nature admire wisdom. Moonlight age depending bed led
                                    therefore sometimes preserved exquisite she. An fail up so shot leaf wise in.
                                    Minuter highest his arrived for put and. Hopes lived by rooms oh in no death house.
                                    Ask agreed answer rather joy nature admire wisdom. Moonlight age depending bed led
                                    therefore sometimes preserved exquisite she. An fail up so shot leaf wise in.
                                    Minuter highest his arrived for put and. Hopes lived by rooms oh in no death house.
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="authorNAme">
                                        <h3>Veronica Gleason</h3>
                                        <h6>Dynamic Functionality Designer</h6>
                                    </div>
                                    <div class="5star">
                                        <img src="images/5star.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center p-5" style="height: fit-content;">
                            <div class="slidesStart">
                                <h4>WHAT THEY SAY<BR>ABOUT US?</h4>
                                <p>Ask agreed answer rather joy nature admire wisdom. Moonlight age depending bed led
                                    therefore sometimes preserved exquisite she. An fail up so shot leaf wise in.
                                    Minuter highest his arrived for put and. Hopes lived by rooms oh in no death house.
                                    Ask agreed answer rather joy nature admire wisdom. Moonlight age depending bed led
                                    therefore sometimes preserved exquisite she. An fail up so shot leaf wise in.
                                    Minuter highest his arrived for put and. Hopes lived by rooms oh in no death house.
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="authorNAme">
                                        <h3>Veronica Gleason</h3>
                                        <h6>Dynamic Functionality Designer</h6>
                                    </div>
                                    <div class="5star">
                                        <img src="images/5star.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <button class="carousel-control-prev" type="button" data-bs-target="#contentCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#contentCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- boosOnlinw -->
    <div class="boostOnlineMain">
        <div class="boostOnlineInner">
            <h2>Boost Your Online<br>Presence</h2>
            <a href="#">Contact Us</a>
        </div>
    </div>


    @endsection
