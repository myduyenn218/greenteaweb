@extends('layouts.admin')

@section('title', 'Create Project')
@section('style')
<style>
    .white-skin .navbar {
        background-color: #3f51b5;
    }
</style>
@endsection

@section('content')
<!-- Main layout -->
<main>
    <div class="container">
        <!-- Section: Create Page -->
        <section class="my-5">
            <!-- Grid row -->
            <form class="row justify-content-center" method="POST" action={{route('create-page')}}>
                @csrf
                <!-- Grid column -->
                <div class="col-lg-10">
                    <!-- First card -->
                    <div class="card mb-4 post-title-panel">
                        <div class="card-body">
                            <div class="md-form mt-1 mb-0">
                                <input type="text" id="form1" name="title" class="form-control"
                                    placeholder="Hoạt động..." />
                                <label class="form-check-label" for="form1" class="">Tiêu đề</label>
                            </div>
                        </div>
                    </div>
                    <!-- First card -->

                    <!-- Second card -->
                    <div class="card mb-4">
                        <textarea name="content" id="post_content"></textarea>
                    </div>
                    <!-- Second card -->
                    <div class="text-right">
                        <button class="btn btn-primary waves-effect waves-light">Publish</button>
                    </div>
                </div>
                <!-- Grid column -->
            </form>

            <!-- G  rid row -->
        </section>
        <!-- Section: Create Page -->


    </div>
</main>
<!-- Main layout -->

<!-- SCRIPTS -->
<!-- SCRIPTS -->
<!-- TinyMCE -->

@endsection

@section('script')
<script type="text/javascript" src="{{asset('js/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('plugin/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('plugin/ckfinder/ckfinder.js')}}"></script>

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

       
            var editor = CKEDITOR.replace('post_content',{
                height: 300
            });
            CKFinder.setupCKEditor( editor );

            
</script>
@if ($mess ?? '')
<script>
    toastr.success('{{$mess ?? ''}}');
</script>
@endif
@endsection