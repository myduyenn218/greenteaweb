@extends('layouts.app')

@section('title', 'Home')

@section('content')
@section('style')
<!-- Custom styles -->
<style>
    html,
    body,
    header,
    .jarallax {
        height: 700px;
    }

    @media (max-width: 740px) {

        html,
        body,
        header,
        .jarallax {
            height: 100vh;
        }
    }

    @media (min-width: 800px) and (max-width: 850px) {

        html,
        body,
        header,
        .jarallax {
            height: 100vh;
        }
    }
</style>
@endsection

<body class="post-page">

    <!-- Main Navigation -->
    <header>

        @include('layouts.menu')
        <!-- Intro Section -->
        <div class="view jarallax" data-jarallax='{"speed": 0.2}'
            style="background-image: url(https://mdbootstrap.com/img/Photos/Others/img%20%2848%29.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <div class="mask rgba-black-light">
                <div class="container h-100 d-flex justify-content-center align-items-center">
                    <div class="row pt-5 mt-3">
                        <div class="col-md-12">
                            <div class="text-center">
                                <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-3 wow fadeInDown"
                                    data-wow-delay="0.3s"><strong>welcome
                                        to greentea team</strong></h1>
                                <hr class="hr-light mt-4 wow fadeInDown" data-wow-delay="0.4s">
                                <h5 class="text-uppercase mb-5 white-text wow fadeInDown" data-wow-delay="0.4s">
                                    <strong>Photography &
                                        design</strong></h5>
                                <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">portfolio</a>
                                <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">About me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- Main Navigation -->

    <!-- Main layout -->
    <main>

        <div class="container">

            <!-- Section: Blog v.3 -->
            <section class="my-5 text-center text-lg-left wow fadeIn" data-wow-delay="0.3s">

                <!-- Section heading -->
                <h2 class="text-center my-5 h1">OUR PROJECT</h2>

                <!-- Section description -->
                <p class="text-center mb-5 w-responsive mx-auto">Chào mừng bạn đã đến với GREENTEA. Dưới đây là một số
                    dự án mà chúng tôi đang triển khai và thực hiện.</p>
                @foreach ($users as $user)

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-4 mb-4">
                        <!-- Featured image -->
                        <div class="view overlay z-depth-1">
                            <img src="{{$user->avt}}" class="img-fluid" alt="First sample image">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-7 mb-4">
                        <!-- Excerpt -->
                        <a href="" class="teal-text">
                            <h6 class="pb-1"><i class="fas fa-heart"></i><strong>
                                </strong></h6>
                        </a>
                        <h4 class="mb-4"><strong>{{$user->last_name}} {{$user->first_name}}</strong></h4>
                        <p>{{$user->content}}.</p>
                        {{-- <p>by <a><strong>Jessica Clark</strong></a>, 26/08/2016</p> --}}
                        <a class="btn btn-primary">Read more</a>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <hr class="mb-5">
                @endforeach
                {{ $users->render('pagination') }}

                <!-- Grid row -->


            </section>
            <!-- Section: Blog v.3 -->

            <hr class="mb-5">



        </div>

    </main>
    <!-- Main layout -->

    <!-- Footer -->
    <footer class="page-footer pt-4 mt-0 text-center text-md-left">

        <!-- Footer Links -->
        <div class="container">
            <div class="row mt-3">

                <!-- First column -->
                <div class="col-md-3 col-lg-4 col-xl-3 offset-xl-1 col-12 mb-4">
                    <h6 class="text-uppercase font-weight-bold mb-4">Company name</h6>
                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit
                        amet,
                        consectetur
                        adipisicing elit.</p>
                </div>
                <!-- /.First column -->

                <hr class="w-100 clearfix d-md-none">

                <!-- Second column -->
                <div class="col-md-2 offset-xl-1 col-12 mb-4">
                    <h6 class="text-uppercase font-weight-bold mb-4">Products</h6>
                    <p><a href="#!">MDBootstrap</a></p>
                    <p><a href="#!">MDWordPress</a></p>
                    <p><a href="#!">BrandFlow</a></p>
                    <p><a href="#!">Bootstrap Angular</a></p>
                </div>
                <!-- /.Second column -->

                <hr class="w-100 clearfix d-md-none">

                <!-- Third column -->
                <div class="col-md-3 col-lg-2 col-12 mb-4">
                    <h6 class="text-uppercase font-weight-bold mb-4">Useful links</h6>
                    <p><a href="#!">Your Account</a></p>
                    <p><a href="#!">Become an Affiliate</a></p>
                    <p><a href="#!">Shipping Rates</a></p>
                    <p><a href="#!">Help</a></p>
                </div>
                <!-- /.Third column -->

                <hr class="w-100 clearfix d-md-none">

                <!-- Fourth column -->
                <div class="col-md-4 col-lg-3 col-12">
                    <h6 class="text-uppercase font-weight-bold mb-4">Contact</h6>
                    <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

                </div>
                <!-- /.Fourth column -->

            </div>

            <!-- /.Footer Links -->

            <hr>

            <!-- Footer Links -->
            <div class="row mt-3 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-12">

                    <!-- Copyright -->
                    <p class="text-left grey-text">© 2019 Copyright: <a
                            href="https://mdbootstrap.com/education/bootstrap/"><strong>
                                MDBootstrap.com</strong></a></p>
                    <!-- Copyright -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-12">
                    <!-- Social buttons -->
                    <div class="social-section">
                        <ul class="list-unstyled list-inline d-flex justify-content-end">
                            <li class="list-inline-item"><a class="btn-floating btn-small rgba-white-slight"><i
                                        class="fab fa-facebook-f">
                                    </i></a></li>
                            <li class="list-inline-item"><a class="btn-floating btn-small rgba-white-slight"><i
                                        class="fab fa-twitter">
                                    </i></a></li>
                            <li class="list-inline-item"><a class="btn-floating btn-small rgba-white-slight"><i
                                        class="fab fa-google-plus-g">
                                    </i></a></li>
                            <li class="list-inline-item"><a class="btn-floating btn-small rgba-white-slight"><i
                                        class="fab fa-linkedin-in">
                                    </i></a></li>
                        </ul>
                    </div>
                    <!-- /.Social buttons -->
                </div>
                <!-- Grid column -->

            </div>
    </footer>
    <!-- Footer -->

    <!-- SCRIPTS -->
    @include('layouts.script')
</body>
@endsection
