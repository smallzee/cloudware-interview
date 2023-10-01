@extends('layouts.frontend.app')


@push('content')
    <!--====== Page title area Start ======-->
    <section class="page-title-area">
        <div class="container">
            <div class="page-title-content text-center">
                <h1 class="page-title">{{ $page_title }}</h1>

                <ul class="breadcrumb-nav">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class="active">{{ $page_title }}</li>
                </ul>
            </div>
        </div>
        <div class="page-title-effect d-none d-md-block">
            @for($i =1; $i <= 5; $i++)
                <img class="particle-1 animate-zoom-fade" src="{{static_asset("particle/particle-".$i.".png")}}" alt="particle {{$i}}">
            @endfor
        </div>
    </section>
    <!--====== Page title area End ======-->

    <!--====== Sign In Content  ======-->
    <section class="sign-in-section p-t-120 p-b-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
                    <div class="sign-in-up-wrapper">
                        <form action="{{route('login')}}" method="post">
                            @csrf
                            <div class="form-groups">
                                <h4 class="form-title">Log In To Your Account</h4>
                                <div class="field-group">
                                    <div class="icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <input type="email" required autocomplete="email" class=" @error('email') is-invalid @enderror" name="email" placeholder="Email Address">
                                    @error('email')
                                    <span class="invalid-feedback" style="text-align: left" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="field-group">
                                    <div class="icon">
                                        <i class="far fa-lock"></i>
                                    </div>
                                    <input type="password" required class="@error('password') is-invalid @enderror" name="password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="field-group">
                                    <button type="submit">Log In</button>
                                </div>
                            </div>
                            <div class="form-note">
                                <p>Don't have an account <a href="{{route('register')}}">Register</a></p>
                            </div>
                        </form>
                        @if (Route::has('password.request'))
                            <a href="{{route('password.request')}}" class="forgot-password">Forgot your password?</a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Sign In End ======-->
@endpush

