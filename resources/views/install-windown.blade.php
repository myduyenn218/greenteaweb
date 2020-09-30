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
        height: 100px;
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

    .post-page .navbar:not(.top-nav-collapse) {
        background: #3f51b5 !important;
    }
</style>
@endsection

<body class="post-page">

    <!-- Main Navigation -->
    <header>

        @include('layouts.menu')


    </header>
    <!-- Main Navigation -->

    <!-- Main layout -->
    <main>

        <div class="container">

            <div class="card card-signup z-depth-1">

                <div class="card-body text-center">

                    <img src="https://mdbootstrap.com/wp-content/uploads/2018/06/logo-mdb-jquery-small.png"
                        class="logo">
                    <h3 class="card-title my-2">Send message</h3>
                    <p class="slogan">It's easy to give a feedback!</p>

                    <div class="md-form md-outline">
                        <input type="text" id="username12" class="form-control">
                        <label for="username12" class="">Username</label>
                    </div>

                    <div class="md-form md-outline">
                        <input type="email" id="email12" class="form-control">
                        <label for="email12">E-mail</label>
                    </div>
                    <div class="md-form md-outline">
                        <input type="text" id="" class="form-control">
                        <label for="email12">Phone</label>
                    </div>

                    <!-- Basic textarea -->
                    <div class="md-form md-outline">
                        <textarea type="text" id="form1012" class="md-textarea form-control" rows="3"></textarea>
                        <label for="form1012">Messager</label>
                    </div>

                    <div class="card-foter text-right">
                        <button type="button" class="btn btn-outline-warning btn-sm waves-effect waves-light"
                            style="width: 140px;">Send message</button>
                    </div>

                </div>


            </div>




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
