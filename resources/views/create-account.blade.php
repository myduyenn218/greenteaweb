@extends('layouts.admin')

@section('title', 'Create Account')
<!-- DataTables.net  -->
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


        <div class="card card-signup z-depth-1">

            <div class="card-body text-center">

                <img src="https://mdbootstrap.com/wp-content/uploads/2018/06/logo-mdb-jquery-small.png" class="logo">
                <h3 class="card-title my-2">Create an account</h3>
                <p class="slogan">It's free and anyone can join!</p>

                <div class="md-form md-outline">
                    <input type="text" id="firstname" class="form-control">
                    <label for="username">First Name</label>
                </div>

                <div class="md-form md-outline">
                    <input type="text" id="lastname" class="form-control">
                    <label for="username">Last Name</label>
                </div>

                <div class="md-form md-outline">
                    <input type="email" id="email" class="form-control">
                    <label for="email">E-mail</label>
                </div>

                <div class="md-form md-outline">
                    <input type="password" id="password" class="form-control">
                    <label for="password">Password</label>
                </div>

                <div class="md-form md-outline">
                    <input type="password" id="password2" class="form-control">
                    <label for="password2">Password confirmation</label>
                </div>

                <div class="card-foter text-right">
                    <button type="button" class="btn btn-outline-primary btn-sm waves-effect waves-light"
                        style="width: 140px;">Create</button>
                </div>

            </div>

        </div>
    </div>
</main>
<!-- Main layout -->
<!-- Custom scripts -->

@endsection
