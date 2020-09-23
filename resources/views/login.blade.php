@extends('layouts.app')

@section('title', 'Login')
@section('style')
<style>
    html,
    body,
    header,
    .view {
        height: 100%;
    }

    @media (min-width: 560px) and (max-width: 740px) {

        html,
        body,
        header,
        .view {
            height: 650px;
        }
    }

    @media (min-width: 800px) and (max-width: 850px) {

        html,
        body,
        header,
        .view {
            height: 650px;
        }
    }
</style>
@endsection
@section('content')

<body class="login-page">

    <!-- Main Navigation -->
    <header>

        @include('layouts.menu')
        <!-- Intro Section -->
        <section class="view intro-2">
            <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-5">

                            <!-- Form with header -->
                            <div class="card wow fadeIn" data-wow-delay="0.3s">
                                <div class="card-body">

                                    <!-- Header -->
                                    <div class="form-header purple-gradient">
                                        <h3 class="font-weight-500 my-2 py-1"><i class="fas fa-user"></i> Log in:</h3>
                                    </div>
                                    <form method="POST" action="{{route("login")}}">
                                        @csrf
                                        @if(Session::has('ok'))
                                            <small class="form-text text-success">{{ Session::get('ok') }}</small>
                                        @endif


                                        @if(Session::has('lockLogin'))
                                            <small id="lockWrapper" class="form-text text-danger mb-2">You are locked. Please retry for
                                                <span
                                                    id="countdown">{{\Carbon\Carbon::now()->diffInSeconds(Session::get('lockLogin')->copy()->addMinutes(5), false)}}</span>
                                                seconds!</small>
                                        @else
                                            @error('mes')
                                            <small class="form-text text-danger mb-2">{{ $message }}</small>
                                            @enderror
                                        @endif
                                    <div class="md-form">
                                        <i class="fas fa-envelope prefix white-text"></i>
                                        <input type="text" id="orangeForm-email" name="email" class="form-control">
                                        <label for="orangeForm-email">Your email</label>
                                    </div>

                                    <div class="md-form">
                                        <i class="fas fa-lock prefix white-text"></i>
                                        <input type="password" id="orangeForm-pass" name="pass" class="form-control">
                                        <label for="orangeForm-pass">Your password</label>
                                    </div>
                                        {{-- ReCaptcha here --}}
                                        @if(Session::has('reCaptcha'))
                                            <div class="mt-4 d-flex">
                                                <div class="ml-auto">
                                                    <div class="g-recaptcha" data-sitekey="{{ config('app.sitekey','')}}"></div>
                                                </div>
                                            </div>
                                            @error('captcha')
                                            <div class="d-flex">
                                                <div class="ml-auto">
                                                    <small class="form-text text-danger">{{ $message }}</small>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="d-flex">
                                            <div class="ml-auto">
                                                <small id="errCaptcha" class="form-text text-danger"></small>
                                            </div>
                                        </div>
                                        @endif
                                    <div class="text-center">
                                        <button name="submit" class="btn purple-gradient btn-lg">LOG IN</button>
                                        <hr class="mt-4">
                                        <div class="inline-ul text-center d-flex justify-content-center">
                                            <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text"></i></a>
                                            <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text">
                                                </i></a>
                                            <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text">
                                                </i></a>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Form with header -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Intro Section -->

    </header>
    <!-- Main Navigation -->

    <!-- SCRIPTS -->
    @include('layouts.script')

</body>
@endsection
