@extends('clients.layouts.roberto')
@section('title')
    Shoes And Magic - Cuciin Aja Dulu di Kita
@endsection
@section('WelcomeSlide')
        <section class="welcome-area">
            <div class="welcome-slides owl-carousel">
                <!-- Single Welcome Slide -->
                <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url( {{asset('/roberto/img/bg-img/16.jpg')}});" data-img-url="img/bg-img/16.jpg">
                    <!-- Welcome Content -->
                    <div class="welcome-content h-100">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <!-- Welcome Text -->
                                <div class="col-12">
                                    <div class="welcome-text text-center">
                                        <h6 data-animation="fadeInLeft" data-delay="200ms">Hotel &amp; Resort</h6>
                                        <h2 data-animation="fadeInLeft" data-delay="500ms">Welcome To Roberto</h2>
                                        <a href="#" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Welcome Slide -->
                <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url( {{asset('/roberto/img/bg-img/17.jpg')}});" data-img-url="img/bg-img/17.jpg">
                    <!-- Welcome Content -->
                    <div class="welcome-content h-100">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <!-- Welcome Text -->
                                <div class="col-12">
                                    <div class="welcome-text text-center">
                                        <h6 data-animation="fadeInUp" data-delay="200ms">Hotel &amp; Resort</h6>
                                        <h2 data-animation="fadeInUp" data-delay="500ms">Welcome To Roberto</h2>
                                        <a href="#" class="btn roberto-btn btn-2" data-animation="fadeInUp" data-delay="800ms">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Welcome Slide -->
                <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url({{asset('/roberto/img/bg-img/18.jpg')}});" data-img-url="img/bg-img/18.jpg">
                    <!-- Welcome Content -->
                    <div class="welcome-content h-100">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <!-- Welcome Text -->
                                <div class="col-12">
                                    <div class="welcome-text text-center">
                                        <h6 data-animation="fadeInDown" data-delay="200ms">Hotel &amp; Resort</h6>
                                        <h2 data-animation="fadeInDown" data-delay="500ms">Welcome To Roberto</h2>
                                        <a href="#" class="btn roberto-btn btn-2" data-animation="fadeInDown" data-delay="800ms">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
@section('Content')
<section class="roberto-about-area section-padding-100-0">
            <!-- Hotel Search Form Area -->
            <div class="hotel-search-form-area">
                <div class="container-fluid">
                    <div class="hotel-search-form">
                        <form action="/status" method="GET">
                            <div class="row justify-content-between align-items-end">
                                <div class="col-12 col-md-9 col-lg-9">
                                    <label for="checkIn">Cari Status Pencucian Sepatumu</label>
                                    <input type="text" class="form-control" id="checkIn" name="checkstatus">
                                </div>
                                <div class="col-12 col-md-3">
                                    <!--<button type="submit" class="form-control btn roberto-btn w-100">Check Availability</button> !-->
                                    <input type="submit" value="CARI" class="form-control btn roberto-btn w-100">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="container mt-100">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <!-- Section Heading -->
                        <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                            <h6>Tentang Kita</h6>
                            <h2>Shoes and Magic<br>Cuci Aja Dulu di Kita</h2>
                        </div>
                        <div class="about-us-content mb-100">
                            <h5 class="wow fadeInUp" data-wow-delay="300ms">With over 340 hotels worldwide, NH Hotel Group offers a wide variety of hotels catering for a perfect stay no matter where your destination.</h5>
                            <p class="wow fadeInUp" data-wow-delay="400ms">Manager: <span>Michen Taylor</span></p>
                            <img src="img/core-img/signature.png" alt="" class="wow fadeInUp" data-wow-delay="500ms">
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                            <div class="row no-gutters">
                                <div class="col">
                                    <div class="single-thumb">
                                        <img src="{{ asset('roberto/img/bg-img/13.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Area End -->

        <!-- Service Area Start -->
        <div class="roberto-service-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="service-content d-flex align-items-center justify-content-between">
                            <!-- Single Service Area -->
                            <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="100ms">
                               <i class="fa fa-home" style="color:#7fc8b2;"></i> 
                                <h5>Transportion</h5>
                            </div>

                            <!-- Single Service Area -->
                            <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                                <img src="img/core-img/icon-2.png" alt="">
                                <h5>Reiseservice</h5>
                            </div>

                            <!-- Single Service Area -->
                            <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="500ms">
                                <img src="img/core-img/icon-3.png" alt="">
                                <h5>Spa Relaxtion</h5>
                            </div>

                            <!-- Single Service Area -->
                            <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="700ms">
                                <img src="img/core-img/icon-4.png" alt="">
                                <h5>Restaurant</h5>
                            </div>

                            <!-- Single Service Area -->
                            <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="900ms">
                                <img src="img/core-img/icon-1.png" alt="">
                                <h5>Bar &amp; Drink</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Area End -->

        <!-- Our Room Area Start -->
        <section class="roberto-rooms-area" id="harga">
            <div class="rooms-slides owl-carousel">
                <!-- Single Room Slide -->
                <div class="single-room-slide d-flex align-items-center">
                    <!-- Thumbnail -->
                    <div class="room-thumbnail h-100 bg-img" style="background-image: url({{ asset('roberto/img/bg-img/16.jpg') }});"></div>

                    <!-- Content -->
                    <div class="room-content">
                        <h2 data-animation="fadeInUp" data-delay="100ms">Premium King Room</h2>
                        <h3 data-animation="fadeInUp" data-delay="300ms">400$ <span>/ Day</span></h3>
                        <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                            <li><span><i class="fa fa-check"></i> Size</span> <span>: 30 ft</span></li>
                            <li><span><i class="fa fa-check"></i> Capacity</span> <span>: Max persion 5</span></li>
                            <li><span><i class="fa fa-check"></i> Bed</span> <span>: King Beds</span></li>
                            <li><span><i class="fa fa-check"></i> Services</span> <span>: Wifi, Television, Bathroom</span></li>
                        </ul>
                        <a href="#" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                    </div>
                </div>

                <!-- Single Room Slide -->
                <div class="single-room-slide d-flex align-items-center">
                    <!-- Thumbnail -->
                    <div class="room-thumbnail h-100 bg-img" style="background-image: url({{ asset('roberto/img/bg-img/17.jpg') }});"></div>

                    <!-- Content -->
                    <div class="room-content">
                        <h2 data-animation="fadeInUp" data-delay="50ms">Best King Room</h2>
                        <h3 data-animation="fadeInUp" data-delay="100ms">125$ <span>/ Day</span></h3>
                        <ul class="room-feature" data-animation="fadeInUp" data-delay="200ms">
                            <li><span><i class="fa fa-check"></i> Size</span> <span>: 30 ft</span></li>
                            <li><span><i class="fa fa-check"></i> Capacity</span> <span>: Max persion 5</span></li>
                            <li><span><i class="fa fa-check"></i> Bed</span> <span>: King Beds</span></li>
                            <li><span><i class="fa fa-check"></i> Services</span> <span>: Wifi, Television, Bathroom</span></li>
                        </ul>
                        <a href="#" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                    </div>
                </div>

                <!-- Single Room Slide -->
                <div class="single-room-slide d-flex align-items-center">
                    <!-- Thumbnail -->
                    <div class="room-thumbnail h-100 bg-img" style="background-image: url({{ asset('roberto/img/bg-img/16.jpg') }});"></div>

                    <!-- Content -->
                    <div class="room-content">
                        <h2 data-animation="fadeInUp" data-delay="100ms">Best Queen Room</h2>
                        <h3 data-animation="fadeInUp" data-delay="300ms">125$ <span>/ Day</span></h3>
                        <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                            <li><span><i class="fa fa-check"></i> Size</span> <span>: 30 ft</span></li>
                            <li><span><i class="fa fa-check"></i> Capacity</span> <span>: Max persion 5</span></li>
                            <li><span><i class="fa fa-check"></i> Bed</span> <span>: King Beds</span></li>
                            <li><span><i class="fa fa-check"></i> Services</span> <span>: Wifi, Television, Bathroom</span></li>
                        </ul>
                        <a href="#" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Room Area End -->

        <!-- Testimonials Area Start -->
        <section class="roberto-testimonials-area section-padding-100-0" id="testimoni">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="testimonial-thumbnail owl-carousel mb-100">
                            <img src="img/bg-img/10.jpg" alt="">
                            <img src="img/bg-img/11.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <h6>Testimonials</h6>
                            <h2>Our Guests Love Us</h2>
                        </div>
                        <!-- Testimonial Slide -->
                        <div class="testimonial-slides owl-carousel mb-100">

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide">
                                <h5>“This can be achieved by applying search engine optimization or popularly known as SEO. This is a marketing strategy which increases the quality and quantity of traffic flow to a particular website via search engines.”</h5>
                                <div class="rating-title">
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <h6>Robert Downey <span>- CEO Deercreative</span></h6>
                                </div>
                            </div>

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide">
                                <h5>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus delectus facilis molestias, error vitae praesentium quos eaque qui ea, tempore blanditiis sint reprehenderit, quaerat. Commodi ab architecto sit suscipit exercitationem!”</h5>
                                <div class="rating-title">
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <h6>Akash Downey <span>- CEO Deercreative</span></h6>
                                </div>
                            </div>

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide">
                                <h5>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, ex quos. Alias a rem maiores, possimus dicta sit distinctio quis iusto!”</h5>
                                <div class="rating-title">
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <h6>Downey Sarah <span>- CEO Deercreative</span></h6>
                                </div>
                            </div>

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide">
                                <h5>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore sequi laboriosam fugit suscipit aspernatur, minima minus voluptatum, id ab atque similique ex earum. Magni.”</h5>
                                <div class="rating-title">
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <h6>Robert Brown <span>- CEO Deercreative</span></h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials Area End -->
        
        <!-- Call To Action Area Start -->
        <section class="roberto-cta-area" id="contact">
            <div class="container">
                <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/1.jpg);">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-7">
                            <div class="cta-text mb-50">
                                <h2>Contact us now!</h2>
                                <h6>Contact (+12) 345-678-9999 to book directly or for advice</h6>
                            </div>
                        </div>
                        <div class="col-12 col-md-5 text-right">
                            <a href="#" class="btn roberto-btn mb-50">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action Area End -->

@endsection