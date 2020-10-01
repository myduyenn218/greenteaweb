@extends('layouts.app')

@section('title', 'About')

@section('content')
@section('style')
<!-- Custom styles -->
<!-- Custom styles
    -->
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
@section('content')

<body class="about-page">

    <!-- Main Navigation -->
    <header>

        <!-- Navbar -->
        @include('layouts.menu')
        <!-- Navbar -->

        <!-- Intro Section -->
        <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}'
            style="background-image: url(https://mdbootstrap.com/img/Photos/Others/img%20%2853%29.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <div class="mask rgba-stylish-light">
                <div class="container h-100 d-flex justify-content-center align-items-center">
                    <div class="row pt-5 mt-3">
                        <div class="col-md-12 mb-3">
                            <div class="intro-info-content text-center">
                                <h1 class="display-3 white-text mb-5 wow fadeInDown" data-wow-delay="0.3s">WELLCOME TO
                                    GREENTEA TEAM</h1>
                                <h5 class="text-uppercase white-text mb-5 font-weight-bold wow fadeInDown"
                                    data-wow-delay="0.3s">AAAA BBBB CCCC DDDD EEEE </h5>
                                <a class="btn btn-light-blue btn-lg wow fadeInDown" data-wow-delay="0.3s">portfolio</a>
                                <a class="btn btn-indigo btn-lg wow fadeInDown" data-wow-delay="0.3s">About</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Intro Section -->

    </header>
    <!-- Main Navigation -->

    <!-- Main Layout -->
    <main>

        <div class="container">

            <!-- Section: Team v.3 -->
            <section class="section team-section wow fadeIn" data-wow-delay="0.3s">

                <!-- Section heading -->
                <h2 class="text-center my-5 h1">Our team</h2>

                <!-- Section description -->
                <p class="text-center mb-5 w-responsive mx-auto">Dưới đây là những SUPERMAN của nhóm chúng mình.</p>

                <!-- Grid row -->
                <div class="row mb-lg-4 text-center text-md-left">
                    @foreach($users as $user)
                    <!-- Grid column -->
                    <div class="col-lg-6 col-md-12 mb-4">

                        <div class="col-md-6 float-left">
                            <div class="avatar mx-auto">
                                <img src="{{$user->avt}}" class="z-depth-1" alt="First sample avatar image">
                            </div>
                        </div>

                        <div class="col-md-6 float-right">
                            <h4 class="mt-md-0 mt-4"><strong>{{$user->last_name}} {{$user->first_name}}</strong></h4>
                            {{-- <h6 class="font-weight-bold grey-text mb-4">Web Designer</h6> --}}
                            <p class="grey-text">{{$user->content}}.</p>

                            <!-- Facebook -->
                            <a class="p-2 m-2 fa-lg fb-ic"><i class="fab fa-facebook-f"> </i></a>
                            <!-- Twitter -->
                            <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter"> </i></a>
                            <!-- Dribbble -->
                            <a class="p-2 m-2 fa-lg dribbble-ic"><i class="fab fa-dribbble"> </i></a>
                        </div>

                    </div>
                    <!-- Grid column -->

                    @endforeach


                </div>
                <!-- Grid row -->


            </section>
            <!-- Section: Team v.3 -->

            <hr class="my-5">


            <!-- Section: Blog v.2 -->
            <section class="text-center my-5 wow fadeIn" data-wow-delay="0.3s">

                <!-- Section heading -->
                <h2 class="text-center my-5 h1">Our Product</h2>
                <!-- Section description -->
                <p class="text-center mb-5 w-responsive mx-auto">Dưới đây là một số sản phẩm mà nhóm chúng mình đã hoàn
                    thành.</p>

                <!-- Grid row -->

                <div class="row">
                    @foreach($products as $product)
                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                        <!-- Featured image -->
                        <div class="view overlay z-depth-1 mb-2">
                            <img src="{{$product->images()->first()->url}}" class="img-fluid" alt="First sample
                            image">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Excerpt -->
                        <a href="" class="pink-text">
                            <h6 class="mb-3 mt-3"><i class="fas fa-map "></i><strong> Environment</strong></h6>
                        </a>
                        <h4 class="font-weight-bold mb-3">{{$product->product_title}}</h4>
                        <p>{{$product->content}}</p>
                        <a class="btn btn-primary">Read more</a>
                    </div>

                    <!-- Grid row -->
                    @endforeach
                </div>


            </section>
            <!-- Section: Blog v.2 -->

            <hr class="my-5">
            <!-- Section: Blog v.3 -->
            <section class="my-5 text-center text-lg-left wow fadeIn" data-wow-delay="0.3s">

                <!-- Section heading -->
                <h2 class="text-center my-5 h1">ACTIVITY</h2>

                <!-- Section description -->
                <p class="text-center mb-5 w-responsive mx-auto">Chào mừng bạn đã đến với GREENTEA. Dưới đây là một số
                    dự án mà chúng tôi đang triển khai và thực hiện.</p>
                @foreach ($activitis as $activity)

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-4 mb-4">
                        <!-- Featured image -->
                        <div class="view overlay z-depth-1">
                            <img src="{{$activity->images()->first()->url}}" class="img-fluid" alt="First sample image">
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
                        <h4 class="mb-4"><strong>{{$activity->product_title}}</strong></h4>
                        <p>{{$activity->content}}.</p>
                        {{-- <p>by <a><strong>Jessica Clark</strong></a>, 26/08/2016</p> --}}
                        <a class="btn btn-primary">Read more</a>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                @endforeach
                {{ $activitis->render('pagination') }}

                <!-- Grid row -->


            </section>
            <!-- Section: Blog v.3 -->
            <hr class="my-5">
            <!-- Section: Contact v.2 -->
            <section class="section pb-4 wow fadeIn" data-wow-delay="0.3s">

                <!-- Section heading -->
                <h2 class="text-center my-5 h1">Contact us</h2>

                <!-- Section description -->
                <p class="text-center mb-5 w-responsive mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit.
                    Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
                    quisquam eum
                    porro a pariatur accusamus veniam.</p>

                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-8 col-xl-9">
                        <form>

                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="contact-name" class="form-control">
                                        <label for="contact-name" class="">Your name</label>
                                    </div>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="contact-email" class="form-control">
                                        <label for="contact-email" class="">Your email</label>
                                    </div>
                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" id="contact-Subject" class="form-control">
                                        <label for="contact-Subject" class="">Subject</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="row mb-4">

                                <!-- Grid column -->
                                <div class="col-md-12">

                                    <div class="md-form mb-0">
                                        <textarea type="text" id="contact-message" class="md-textarea form-control"
                                            rows="3"></textarea>
                                        <label for="contact-message">Your message</label>
                                    </div>

                                </div>
                            </div>
                            <!-- Grid row -->

                        </form>

                        <div class="text-center text-md-left mb-4">
                            <a class="btn btn-light-blue">Send</a>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-xl-3">
                        <ul class="contact-icons list-unstyled text-center">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>San Francisco, CA 94126, USA</p>
                            </li>

                            <li><i class="fas fa-phone fa-2x"></i>
                                <p>+ 01 234 567 89</p>
                            </li>

                            <li><i class="fas fa-envelope fa-2x"></i>
                                <p>contact@mdbootstrap.com</p>
                            </li>
                        </ul>
                    </div>
                    <!-- Grid column -->

                </div>

            </section>
            <!-- Section: Contact v.2 -->

        </div>

    </main>
    <!-- Main Layout -->

    <!-- Footer -->
    <footer class="page-footer pt-4 mt-4 text-center text-md-left grey">

        <!-- Footer Links -->
        <div class="container">
            <div class="row">

                <!-- First column -->
                <div class="col-md-6">
                    <h6 class="text-uppercase font-weight-bold">Footer Content</h6>
                    <p>Here you can use rows and columns here to organize your footer content.</p>
                </div>
                <!-- First column -->

                <!-- Second column -->
                <div class="col-md-3">
                    <h6 class="text-uppercase font-weight-bold">Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                    </ul>
                </div>
                <!-- Second column -->

                <!-- Third column -->
                <div class="col-md-3">
                    <h6 class="text-uppercase font-weight-bold">Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                    </ul>
                </div>
                <!-- Third column -->
            </div>
        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                &copy; 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com </a>

            </div>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!--  SCRIPTS  -->
    <!-- JQuery -->
    @include('layouts.script')

    <!-- Custom scripts -->
    <script>
        // MDB Lightbox Init
    $(function () {
      $("#mdb-lightbox-ui").load("../../mdb-addons/mdb-lightbox-ui.html");
    });

    </script>

</body>
@endsection
