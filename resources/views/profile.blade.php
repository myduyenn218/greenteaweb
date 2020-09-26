@extends('layouts.app')

@section('title', 'Login')@section('style')
    <style>
        html,
        body,

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

        .white-skin .navbar {
            background-color: #3f51b5;
        }
    </style>
@endsection
@section('content')
    <body class="fixed-sn white-skin">
    <!-- Main Navigation -->
    <header>
    @include('layouts.menu')
    <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed">
            <ul class="custom-scrollbar">
                <!-- Logo -->
                <li class="logo-sn waves-effect py-3">
                    <div class="text-center">
                        <a href="#" class="pl-0"><img
                                src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png"/></a>
                    </div>
                </li>

            </ul>
            <div class="sidenav-bg mask-strong"></div>
        </div>
        <!-- Sidebar navigation -->

        <!-- Navbar -->
        <!-- Navbar -->
    </header>
    <!-- Main Navigation -->

    <!-- Main layout -->
    <main>
        <div class="container-fluid">

            <!-- Section: Edit Account -->
            <section class="section">
                <!-- First row -->
                <div class="row">
                    <!-- First column -->
                    <div class="col-lg-4 mb-4">

                        <!-- Card -->
                        <div class="card card-cascade narrower">

                            <!-- Card image -->
                            <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                                <h5 class="mb-0 font-weight-bold">Edit Photo</h5>
                            </div>
                            <!-- Card image -->

                            <!-- Card content -->
                            <div class="card-body card-body-cascade text-center">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" alt="User Photo"
                                     class="z-depth-1 mb-3 mx-auto"/>

                                <p class="text-muted"><small>Profile photo will be changed automatically</small></p>
                                <div class="row flex-center">
                                    <button class="btn btn-info btn-rounded btn-sm">Upload New Photo</button>
                                    <br>
                                    <button class="btn btn-danger btn-rounded btn-sm">Delete</button>
                                </div>
                            </div>
                            <!-- Card content -->

                        </div>
                        <!-- Card -->

                    </div>
                    <!-- First column -->

                    <!-- Second column -->
                    <div class="col-lg-8 mb-4">

                        <!-- Card -->
                        <div class="card card-cascade narrower">

                            <!-- Card image -->
                            <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                                <h5 class="mb-0 font-weight-bold">Edit Account</h5>
                            </div>
                            <!-- Card image -->

                            <!-- Card content -->
                            <div class="card-body card-body-cascade text-center">

                                <!-- Edit Form -->
                                <form method="POST" action="{{route('changprofile')}}">
                                    @csrf
                                    <div class="row">
                                        <!-- First column -->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="form81" name="first_name" value="{{$user->first_name}}" class="form-control validate">
                                                <label for="form81" data-error="wrong" data-success="right">First
                                                    name</label>
                                            </div>
                                        </div>

                                        <!-- Second column -->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="form82" name="last_name" value="{{$user->last_name}}" class="form-control validate">
                                                <label for="form82" data-error="wrong" data-success="right">Last
                                                    name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- First row -->

                                    <!-- Second row -->
                                    <div class="row">

                                        <!-- First column -->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="email" name="email" value="{{$user->email}}" disabled id="form76" class="form-control validate">
                                                <label for="form76">Email address</label>
                                            </div>
                                        </div>
                                        <!-- Second column -->

                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="form77" name="phone" value="{{$user->phone}}" class="form-control validate">
                                                <label for="form77" data-error="wrong"
                                                       data-success="right">Phone</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Second row -->

                                    <!-- Third row -->
                                    <div class="row">

                                        <!-- First column -->
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <textarea type="text"  name="content" id="form78"class="md-textarea form-control"
                                                          rows="3">{{$user->content}}</textarea>
                                                <label for="form78">About me</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Third row -->

                                    <!-- Fourth row -->
                                    <div class="row">
                                        <div class="col-md-12 text-center my-4">
                                            <input type="submit" value="Update Account"
                                                   class="btn btn-info btn-rounded">
                                        </div>
                                    </div>
                                    <!-- Fourth row -->

                                </form>
                                <!-- Edit Form -->

                            </div>
                            <!-- Card content -->

                        </div>
                        <!-- Card -->

                    </div>
                    <!-- Second column -->

                </div>
                <!-- First row -->

            </section>
            <!-- Section: Edit Account -->

        </div>

    </main>
    <!-- Main layout -->

    <!-- SCRIPTS -->
    <!-- SCRIPTS -->
    @include('layouts.script')
    <!-- TinyMCE -->
    <script type="text/javascript" src="../../js/vendor/tinymce/tinymce.min.js"></script>

    <!-- Custom scripts -->
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();

        var container = document.querySelector(".custom-scrollbar");
        var ps = new PerfectScrollbar(container, {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20,
        });

        // TinyMCE Initialization
        tinymce.init({
            selector: "#post_content",
            menubar: false,
            height: "294",
        });
    </script>
    </body>
@endsection
