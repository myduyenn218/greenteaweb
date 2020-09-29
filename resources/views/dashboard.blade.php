@extends('layouts.app')

@section('title', 'Login')
@section('style')
<style>
    .white-skin .navbar {
        background-color: #3f51b5;
    }
</style>
@endsection

@section('content')
<main>

    <div class="container">
        <!-- Section: Create Page -->
        <section class="my-5">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-lg-8">
                    <!-- First card -->
                    <div class="card mb-4 post-title-panel">
                        <div class="card-body">
                            <div class="md-form mt-1 mb-0">
                                <input type="text" id="form1" class="form-control"
                                    value="Lorem ipsum dolor sit amet delit" />
                                <label class="form-check-label" for="form1" class="">Post title</label>
                            </div>
                        </div>
                    </div>
                    <!-- First card -->

                    <!-- Second card -->
                    <div class="card mb-4">
                        <textarea name="" id="post_content"></textarea>
                    </div>
                    <!-- Second card -->

                    <!-- Third Card -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="md-form mb-0 mt-2">
                                <textarea type="text" id="form7" class="md-textarea form-control"
                                    rows="3"></textarea>
                                <label class="form-check-label" for="form7">Custom CSS Code</label>
                            </div>
                        </div>
                    </div>
                    <!-- Third Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4">
                    <!-- Card -->
                    <div class="card card-cascade narrower mb-5">
                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header blue-gradient">
                            <h4 class="font-weight-500 mb-0">
                                Publish
                            </h4>
                        </div>
                        <!-- Card image -->

                        <!-- Card content -->
                        <div class="card-body card-body-cascade">
                            <p>
                                <i class="fas fa-flag mr-1" aria-hidden="true"></i>
                                Status: <strong>Draft</strong>
                            </p>
                            <p>
                                <i class="far fa-eye mr-1" aria-hidden="true"></i>
                                Visibility <strong>Public</strong>
                            </p>
                            <p>
                                <i class="fas fa-archive mr-1 mr-1" aria-hidden="true"></i>
                                Revisions: <strong>2</strong>
                            </p>
                            <p>
                                <i class="far fa-calendar-alt mr-1" aria-hidden="true"></i>
                                Publish: <strong>Immediately</strong>
                            </p>
                            <div class="text-right">
                                <button class="btn btn-flat waves-effect">
                                    Discard
                                </button>
                                <button class="btn btn-primary">
                                    Publish
                                </button>
                            </div>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->

                    <!-- Card -->
                    <div class="card card-cascade narrower">
                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header blue-gradient">
                            <h4 class="font-weight-500 mb-0">
                                Categories
                            </h4>
                        </div>
                        <!-- Card image -->

                        <!-- Card content -->
                        <div class="card-body card-body-cascade">
                            <fieldset class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="color-1" />
                                <label class="form-check-label" for="color-1">Material Design</label>
                            </fieldset>
                            <fieldset class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="color-2" />
                                <label class="form-check-label" for="color-2">Tutorials</label>
                            </fieldset>
                            <fieldset class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="color-3" />
                                <label class="form-check-label" for="color-3">Marketing Automation</label>
                            </fieldset>
                            <fieldset class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="color-4" />
                                <label class="form-check-label" for="color-4">Design Resources</label>
                            </fieldset>
                            <fieldset class="form-check">
                                <input class="form-check-input" type="checkbox" id="color-5" />
                                <label class="form-check-label" for="color-5">Random Stories</label>
                            </fieldset>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </section>
        <!-- Section: Create Page -->
    </div>

</main>
<!-- Main layout -->
@endsection

</html>