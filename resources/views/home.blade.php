@extends('layouts.frontend.app')

@push('content')
    <!--====== Start Hero Area ======-->
    <section class="hero-area-v3">
        <div class="container">
            <div class="row align-items-end justify-content-lg-between justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="hero-content">
                        <h1 class="hero-title wow fadeInLeft" data-wow-delay="0.3s">
                            Solutions <br> Your Problem <br> <span>In One</span> Hand
                        </h1>

                    </div>
                </div>

            </div>
        </div>
        <div class="hero-particle">
            <img src="{{static_asset('particle/particle-8.png')}}" alt="#" class="particle-1 animate-rotate-me">
            <img src="{{static_asset('particle/particle-9.png')}}" alt="#" class="particle-2 animate-zoom-fade">
        </div>
    </section>
    <!--====== End Hero Area ======-->

    <!--====== Feature Section Start ======-->
    <section class="feature-section p-t-130 p-b-130">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="common-heading title-line-bottom m-b-50">
                        <span class="tagline">How Can Help You</span>
                        <h2 class="title">Build an Awesome  Apps With Us</h2>
                        <img src="{{static_asset('particle/title-line-2.png')}}" alt="Image" class="Line">
                    </div>
                </div>
                <div class="col-lg-7">
                    <!-- Feature Boxes -->
                    <div class="row justify-content-between iconic-boxes-v1">
                        <div class="col-xl-5 col-lg-6 col-md-5 col-sm-6">
                            <div class="iconic-box no-shadow">
                                <div class="icon icon-gradient-1">
                                    <i class="far fa-cog"></i>
                                </div>
                                <h4 class="title">Easy to Manage Data</h4>
                                <p>
                                    Sed ut perspiciatis unde omnis este error voluptate accusantium doloremque.
                                </p>
                                <a href="#" class="box-link">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-5 col-sm-6">
                            <div class="iconic-box no-shadow">
                                <div class="icon icon-gradient-2">
                                    <i class="far fa-cog"></i>
                                </div>
                                <h4 class="title">Device Quality Design</h4>
                                <p>
                                    Quis autem veleure prehender quinea voluptate velit esse quam molestiae consequatur
                                </p>
                                <a href="#" class="box-link">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-inner-line m-t-100 m-b-130"></div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <div class="preview-image-v1 m-r-60">
                        <img src="{{static_asset('preview-gallery/manage-data.png')}}" alt="Image" class="animate-float-bob-y">
                    </div>
                </div>
                <div class="col-lg-5 col-md-8 col-sm-11">
                    <div class="feature-text-block p-l-30 p-l-lg-0">
                        <div class="common-heading title-line-bottom m-b-30">
                            <h2 class="title">Manage Your Mobile  Data Very Easily</h2>
                            <img src="{{static_asset('particle/title-line-2.png')}}" alt="Image" class="Line">
                        </div>
                        <p>
                            Nentore veritatis quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem voluptas sit aspernatur aut quia consequuntur
                        </p>

                        <!-- Fancy Check List v1 -->
                        <ul class="fancy-check-list-v1 m-t-50">
                            <li class="wow fadeInUp" data-wow-delay="0.3s">
                                <h5 class="title">Innovative Solution</h5>
                                <p>
                                    On the other hand denounce with righteous indignation and dislike beguiled
                                </p>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="0.4s">
                                <h5 class="title">Devices With Quality</h5>
                                <p>
                                    But I must explain to you how all mistaken denouncing pleasure and praising
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Feature Section End ======-->

@endpush
