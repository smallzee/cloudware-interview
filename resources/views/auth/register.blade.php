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
                        <form action="{{route('register')}}" method="post">
                            @csrf
                            <div class="form-groups">
                                <h4 class="form-title">Create Your Account</h4>
                                <div class="field-group">
                                    <div class="icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <input type="email" placeholder="Email Address" class="@error('email') is-invalid @enderror" name="email" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="field-group">
                                    <div class="icon">
                                        <i class="far fa-user"></i>
                                    </div>
                                    <input type="text" placeholder="Full Name" class="@error('name') is-invalid @enderror" name="name" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="field-group">
                                    <div class="icon">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <input type="text" placeholder="Phone Number" class="@error('phone_number') is-invalid @enderror" name="phone_number" required>
                                    @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="field-group">
                                    <div class="icon">
                                        <i class="far fa-lock"></i>
                                    </div>
                                    <input type="password" placeholder="Password" class="@error('password') is-invalid @enderror" name="password" required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="field-group">
                                    <div class="icon">
                                        <i class="far fa-lock"></i>
                                    </div>
                                    <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
                                </div>
                                <div class="field-group">
                                    <button type="submit">Create Account</button>
                                </div>
                            </div>
                            <div class="form-note">
                                <p>Already have an account? <a href="{{route('login')}}">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Sign In End ======-->
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
