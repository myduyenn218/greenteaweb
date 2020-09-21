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

        @include('menu')
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

                                    <!-- Body -->
                                    <div class="md-form">
                                        <i class="fas fa-user prefix white-text"></i>
                                        <input type="text" id="orangeForm-name" class="form-control">
                                        <label for="orangeForm-name">Your name</label>
                                    </div>

                                    <div class="md-form">
                                        <i class="fas fa-envelope prefix white-text"></i>
                                        <input type="text" id="orangeForm-email" class="form-control">
                                        <label for="orangeForm-email">Your email</label>
                                    </div>

                                    <div class="md-form">
                                        <i class="fas fa-lock prefix white-text"></i>
                                        <input type="password" id="orangeForm-pass" class="form-control">
                                        <label for="orangeForm-pass">Your password</label>
                                    </div>

                                    <div class="text-center">
                                        <button class="btn purple-gradient btn-lg">Sign up</button>
                                        <hr class="mt-4">
                                        <div class="inline-ul text-center d-flex justify-content-center">
                                            <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text"></i></a>
                                            <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text">
                                                </i></a>
                                            <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text">
                                                </i></a>
                                        </div>
                                    </div>

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
    @include('script')

</body>
@endsection
