@extends('layouts.base')

@section('title', 'Log In')

@section('content')
<div class="container" style="max-width: 500px; padding: 30px; border: 2px solid; border-radius: 25px;">
    <ul class="nav nav-pills nav-justified mb-3">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="pill" href="#pills-login">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#pills-register">Register</a>
        </li>
    </ul>

    <div class="tab-content">
        <!-- Login Form -->
        <div class="tab-pane fade show active" id="pills-login">
            <form>
                <div class="text-center mb-3">
                    <p>Sign in with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1"><i class="fab fa-facebook-f"></i></button>
                    <button type="button" class="btn btn-link btn-floating mx-1"><i class="fab fa-google"></i></button>
                    <button type="button" class="btn btn-link btn-floating mx-1"><i class="fab fa-twitter"></i></button>
                    <button type="button" class="btn btn-link btn-floating mx-1"><i class="fab fa-github"></i></button>
                </div>
                <p class="text-center">or:</p>
                <div class="mb-4">
                    <input type="email" class="form-control" placeholder="Email or username" />
                </div>
                <div class="mb-4">
                    <input type="password" class="form-control" placeholder="Password" />
                </div>
                <div class="d-flex justify-content-between mb-4">
                    <div>
                        <input type="checkbox" /> Remember me
                    </div>
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit" class="btn btn-primary w-100">Sign in</button>
                <p class="text-center mt-3">Not a member? <a href="#">Register</a></p>
            </form>
        </div>

        <!-- Register Form -->
        <div class="tab-pane fade" id="pills-register">
            <form>
                <div class="text-center mb-3">
                    <p>Sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1"><i class="fab fa-facebook-f"></i></button>
                    <button type="button" class="btn btn-link btn-floating mx-1"><i class="fab fa-google"></i></button>
                    <button type="button" class="btn btn-link btn-floating mx-1"><i class="fab fa-twitter"></i></button>
                    <button type="button" class="btn btn-link btn-floating mx-1"><i class="fab fa-github"></i></button>
                </div>
                <p class="text-center">or:</p>
                <div class="mb-4">
                    <input type="text" class="form-control" placeholder="Name" />
                </div>
                <div class="mb-4">
                    <input type="email" class="form-control" placeholder="Email" />
                </div>
                <div class="mb-4">
                    <input type="password" class="form-control" placeholder="Password" />
                </div>
                <button type="submit" class="btn btn-primary w-100">Sign up</button>
            </form>
        </div>
    </div>
</div>
@endsection
