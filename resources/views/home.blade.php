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
                        <p class="wow fadeInLeft" data-wow-delay="0.4s">
                            Sed ut perspiciatis unde omnis iste natus error voluptate accus antium doloremque laudantium totam aperiam
                        </p>

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

@endpush
