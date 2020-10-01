@extends('layouts.app')

@section('title', 'Detail')

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
            <section class="mt-5 pb-3 wow fadeIn">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-12">

                        <!-- Featured image -->
                        <div class="card card-cascade wider reverse">
                            <div class="view view-cascade overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(134).jpg"
                                    alt="Wide sample post image" class="img-fluid">
                                <a>
                                    <div class=""></div>
                                </a>
                            </div>

                            <!-- Post data -->
                            <div class="card-body card-body-cascade text-center">
                                <h2><a><strong>This is title of the news</strong></a></h2>
                                <p>Written by <a>Abby Madison</a>, 26/08/2016</p>

                                {{-- <!-- Social shares -->
                                <div class="social-counters ">

                                    <!-- Facebook -->
                                    <a class="btn btn-fb ">
                                        <i class="fab fa-facebook-f left "></i>
                                        <span class="hidden-md-down ">Facebook</span>
                                    </a>
                                    <span class="counter ">46</span>

                                    <!-- Twitter -->
                                    <a class="btn btn-tw ">
                                        <i class="fab fa-twitter left "></i>
                                        <span class="hidden-md-down ">Twitter</span>
                                    </a>
                                    <span class="counter ">22</span>

                                    <!-- Dribbble -->
                                    <a class="btn btn-dribbble ">
                                        <i class="fab fa-dribbble left "></i>
                                        <span class="hidden-md-down ">Dribbble</span>
                                    </a>
                                    <span class="counter ">31</span>

                                    <!-- Comments -->
                                    <a class="btn btn-blue-grey ">
                                        <i class="fas fa-comments-o left "></i>
                                        <span class="hidden-md-down ">Comments</span>
                                    </a>
                                    <span class="counter ">18</span>

                                </div> --}}
                                <!-- Social shares -->

                            </div>
                            <!-- Post data -->
                        </div>

                        <!-- Excerpt -->
                        <div class="excerpt mt-5 wow fadeIn" data-wow-delay="0.3s">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum
                                deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                cupiditate
                                non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est
                                laborum
                                et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                            </p>

                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
                                quod
                                maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                                Temporibus
                                autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et
                                voluptates
                                repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente
                                delectus,
                                ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus.</p>

                            <blockquote class="blockquote mt-4 mb-4">
                                <p class="mb-0"><em>Temporibus autem quibusdam et aut officiis debitis aut rerum
                                        necessitatibus saepe
                                        eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque
                                        earum rerum hic
                                        tenetur a sapiente delectus.</em></p>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source
                                        Title</cite></footer>
                            </blockquote>


                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium,
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                beatae
                                vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                odit
                                aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.
                            </p>

                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                velit,
                                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
                                quaerat
                                voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                                suscipit
                                laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure
                                reprehenderit
                                qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>


                            <div class="mt-4 d-flex justify-content-end">
                                <span class="badge pink">Travel</span>
                                <span class="badge badge-primary mx-1">Adventure</span>
                                <span class="badge grey mr-1">Photography</span>
                                <span class="badge badge-info">Education</span>
                            </div>

                        </div>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!-- Section: Blog v.4 -->

            <hr class="mb-5 mt-4">

            <!-- Section: Blog v.2 -->
            <section class="mb-5 wow fadeIn" data-wow-delay="0.3s">

                <!-- Section heading -->
                <h3 class="text-center my-5 text-center h3">Recent posts</h3>

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-12 mb-4">

                        <!-- Card Light -->
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20%28147%29.jpg"
                                    class="card-img-top" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!-- /.Card image -->
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Social shares button -->
                                <a class="activator mr-3"><i class="fas fa-share-alt"></i></a>
                                <!-- Title -->
                                <h4 class="card-title">Card title</h4>
                                <hr>
                                <!-- Text -->
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    card's content.</p>
                                <a class="link-text">
                                    <h5>Read more <i class="fas fa-chevron-right"></i></h5>
                                </a>
                            </div>
                            <!-- /.Card content -->
                        </div>
                        <!-- /.Card Light -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <!-- Card Light -->
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20%2850%29.jpg"
                                    class="card-img-top" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!-- /.Card image -->
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Social shares button -->
                                <a class="activator mr-3"><i class="fas fa-share-alt"></i></a>
                                <!-- Title -->
                                <h4 class="card-title">Card title</h4>
                                <hr>
                                <!-- Text -->
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    card's content.</p>
                                <a class="link-text">
                                    <h5>Read more <i class="fas fa-chevron-right"></i></h5>
                                </a>
                            </div>
                            <!-- /.Card content -->
                        </div>
                        <!-- /.Card Light -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <!-- Card Light -->
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20%2897%29.jpg"
                                    class="card-img-top" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!-- /.Card image -->
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Social shares button -->
                                <a class="activator mr-3"><i class="fas fa-share-alt"></i></a>
                                <!-- Title -->
                                <h4 class="card-title">Card title</h4>
                                <hr>
                                <!-- Text -->
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    card's content.</p>
                                <a class="link-text">
                                    <h5>Read more <i class="fas fa-chevron-right"></i></h5>
                                </a>
                            </div>
                            <!-- /.Card content -->
                        </div>
                        <!-- /.Card Light -->

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!-- Section: Blog v.2 -->



            </section>
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
                                Greentea.com</strong></a></p>
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
