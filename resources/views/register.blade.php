@extends('layouts.app')

@section('title', 'Register')

@section('content')
@section('style')
    <style>
        html,
        body,
        header,
        .view {
            height: 100%;
        }

        @media (min-width: 851px) and (max-width: 1440px) {

            html,
            body,
            header,
            .view {
                height: 850px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {

            html,
            body,
            header,
            .view {
                height: 1000px;
            }
        }

        @media (min-width: 451px) and (max-width: 740px) {

            html,
            body,
            header,
            .view {
                height: 1200px;
            }
        }

        @media (max-width: 450px) {

            html,
            body,
            header,
            .view {
                height: 1400px;
            }
        }
    </style>
@endsection

@section('content')

    <body class="register-page">

    <!-- Main Navigation -->
    <header>

        <!-- Navbar -->
    @include('layouts.menu')
    <!-- Navbar -->

        <!-- Intro Section -->
        <section class="view intro-2">
            <div class="mask rgba-gradient">
                <div class="container h-100 d-flex justify-content-center align-items-center">

                    <!-- Grid row -->
                    <div class="row pt-5">

                        <!-- Grid column -->
                        <div class="col-md-12">

                            <div class="card">
                                <div class="card-body">

                                    <h2 class="font-weight-bold my-4 text-center mb-5 mt-4 font-weight-bold">
                                        <strong>REGISTER</strong>
                                    </h2>
                                    <hr>

                                    <!-- Grid row -->
                                    <div class="row mt-5">

                                        <!-- Grid column -->
                                        <div class="col-md-6 ml-lg-5 ml-md-3">

                                            <!-- Grid row -->
                                            <div class="row pb-4">
                                                <div class="col-2 col-lg-1">
                                                    <i class="fas fa-university indigo-text fa-lg"></i>
                                                </div>
                                                <div class="col-10">
                                                    <h4 class="font-weight-bold mb-4">
                                                        <strong>Safety</strong>
                                                    </h4>
                                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit. Reprehenderit maiores nam, aperiam
                                                        minima assumenda deleniti hic.</p>
                                                </div>
                                            </div>
                                            <!-- Grid row -->

                                            <!-- Grid row -->
                                            <div class="row pb-4">
                                                <div class="col-2 col-lg-1">
                                                    <i class="fas fa-desktop deep-purple-text fa-lg"></i>
                                                </div>
                                                <div class="col-10">
                                                    <h4 class="font-weight-bold mb-4">
                                                        <strong>Technology</strong>
                                                    </h4>
                                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit. Reprehenderit maiores nam, aperiam
                                                        minima assumenda deleniti hic.</p>
                                                </div>
                                            </div>
                                            <!-- Grid row -->

                                            <!-- Grid row -->
                                            <div class="row pb-4">
                                                <div class="col-2 col-lg-1">
                                                    <i class="far fa-money-bill-alt purple-text fa-lg"></i>
                                                </div>
                                                <div class="col-10">
                                                    <h4 class="font-weight-bold mb-4">
                                                        <strong>Finance</strong>
                                                    </h4>
                                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit. Reprehenderit maiores nam, aperiam
                                                        minima assumenda deleniti hic.</p>
                                                </div>
                                            </div>
                                            <!-- Grid row -->

                                        </div>
                                        <!-- Grid column -->

                                        <!-- Grid column -->
                                        <div class="col-md-5">

                                            <!-- Grid row -->
                                            <div class="row pb-4 d-flex justify-content-center mb-4">

                                                <h4 class="mt-3 mr-4">
                                                    <strong>Login with</strong>
                                                </h4>

                                                <div class="inline-ul text-center d-flex justify-content-center">
                                                    <a class="p-2 m-2 fa-lg tw-ic">
                                                        <i class="fab fa-twitter fa-lg indigo-text"></i>
                                                    </a>
                                                    <a class="p-2 m-2 fa-lg li-ic">
                                                        <i class="fab fa-linkedin-in fa-lg indigo-text"> </i>
                                                    </a>
                                                    <a class="p-2 m-2 fa-lg ins-ic">
                                                        <i class="fab fa-instagram fa-lg indigo-text"> </i>
                                                    </a>
                                                </div>

                                                <h4 class="mt-3 ml-4">
                                                    <strong>or:</strong>
                                                </h4>

                                            </div>
                                            <!-- /Grid row -->
                                            <!-- Body -->
                                            <form action="{{route('register')}}" method="POST">
                                                @csrf
                                                @error('mes')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                                @enderror
                                                @error('name')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                                @enderror
                                                <div class="md-form">
                                                    <i class="fas fa-user prefix"></i>
                                                    <input type="text" id="orangeForm-name" name="name"
                                                           class="form-control">
                                                    <label for="orangeForm-name">Your name</label>
                                                </div>
                                                @error('email')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                                @enderror
                                                <div class="md-form">
                                                    <i class="fas fa-envelope prefix"></i>
                                                    <input type="text" name="email" id="orangeForm-email"
                                                           class="form-control">
                                                    <label for="orangeForm-email">Your email</label>
                                                </div>
                                                @error('pass')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                                @enderror
                                                <div class="md-form">
                                                    <i class="fas fa-lock prefix"></i>
                                                    <input type="password" name="pass" id="orangeForm-pass"
                                                           class="form-control">
                                                    <label for="orangeForm-pass">Your password</label>
                                                </div>
                                                @error('repass')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                                @enderror
                                                <div class="md-form">
                                                    <i class="fas fa-lock prefix"></i>
                                                    <input type="password" name="repass" id="orangeForm-repass"
                                                           class="form-control">
                                                    <label for="orangeForm-repass">Your Repassword</label>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-indigo btn-rounded mt-5">Sign
                                                        up
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Grid column -->

                                    </div>
                                    <!-- Grid row -->

                                </div>
                            </div>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
            </div>
        </section>
        <!-- Intro Section -->

    </header>
    <!-- Main Navigation -->

    @include('layouts.script')
    </body>
@endsection
