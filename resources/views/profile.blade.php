@extends('layouts.admin')

@section('title', 'Login')
@section('style')
<style>
    .white-skin .navbar {
        background-color: #3f51b5;
    }

    .avt-wrapper {
        height: 100px;
        width: 100px;
    }

    #avt_img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

@endsection
@section('content')
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
                        <div class="view view-cascade gradient-card-header mdb-color">
                            <h5 class="mb-0 font-weight-bold">Edit Photo</h5>
                            @error('avatar')
                            <h6>{{ $message }}</h6>
                            @enderror

                        </div>
                        <!-- Card image -->

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">
                            <div class="mx-auto avt-wrapper">
                                <img id='avt_img'
                                    src="{{$user->avatar==null?"https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg":$user->avatar}}"
                                    alt="User Photo" class="z-depth-1 mb-3 mx-auto" />
                            </div>


                            <p class="text-muted"><small>Profile photo will be changed automatically</small></p>
                            <div class="row flex-center">
                                <input id="avatar_val" type="text" class="form-control"
                                    value="{{ old('avatar',$user->avatar) }}" style=" width: 88%;float: left;"
                                    name="avatar" required placeholder="Ảnh đại diện" tabindex="2">
                                <button id="avatar_open"
                                    class="btn btn-indigo btn-rounded btn-sm waves-effect waves-light">Upload New
                                    Photo</button>
                                <br>
                                <button
                                    class="btn btn-danger btn-rounded btn-sm waves-effect waves-light">Delete</button>
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
                        <div class="view view-cascade gradient-card-header mdb-color">
                            <h5 class="mb-0 font-weight-bold">Edit Account</h5>
                            @if(Session::has('mes'))
                            <small class="form-text text-success">{{ Session::get('ok') }}</small>
                            @endif
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
                                            <input type="text" id="form81" name="first_name"
                                                value="{{$user->first_name}}" class="form-control validate">
                                            <label for="form81" data-error="wrong" data-success="right">First
                                                name</label>
                                        </div>
                                    </div>

                                    <!-- Second column -->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="form82" name="last_name" value="{{$user->last_name}}"
                                                class="form-control validate">
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
                                            <input type="email" name="email" value="{{$user->email}}" disabled
                                                id="form76" class="form-control validate">
                                            <label for="form76">Email address</label>
                                        </div>
                                    </div>
                                    <!-- Second column -->

                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="form77" name="phone" value="{{$user->phone}}"
                                                class="form-control validate">
                                            <label for="form77" data-error="wrong" data-success="right">Phone</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Second row -->

                                <!-- Third row -->
                                <div class="row">

                                    <!-- First column -->
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <textarea type="text" name="content" id="form78"
                                                class="md-textarea form-control" rows="3">{{$user->content}}</textarea>
                                            <label for="form78">About me</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Third row -->

                                <!-- Fourth row -->
                                <div class="row">
                                    <div class="col-md-12 text-center my-4">
                                        <input type="submit" value="Update Account"
                                            class="btn btn-indigo  fo btn-rounded">
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
@endsection

@section('script')
<script type="text/javascript" src="{{asset('js/vendor/tinymce/tinymce.min.js')}}"></script>
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
<script src="{{asset('plugin/ckfinder/ckfinder.js')}}"></script>
<script src="{{asset('js/ckfinder.js')}}"></script>

<script language="JavaScript">
    $('#avatar_open').click(function () {
            avatar('avatar_val','avt_img');
        });
</script>
@endsection