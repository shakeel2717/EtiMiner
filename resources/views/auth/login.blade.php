@extends('layouts.auth')
@section('form')
<div class="row justify-content-center pt-5">
    <div class="col-md-9">
        <div class="card  d-flex justify-content-center mb-0 auth-card iq-auth-form">
            <div class="card-body">
                <h2 class="mb-2 text-center">Sign In</h2>
                <form method="POST" action="{{ route('login') }}">
                    <div class="row">
                        <div class="col-lg-12">
                            <x-input type="email" name="email" placeholder="Email" />
                        </div>
                        <div class="col-lg-12">
                            <x-input type="password" name="password" placeholder="Password" />
                        </div>
                        <div class="col-lg-12 d-flex justify-content-between mt-4">
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                <label class="form-check-label" for="customCheck1">Remember Me</label>
                            </div>
                            <a href="recoverpw.html">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Create Account</button>
                    </div>
                    <p class="mt-3 text-center">
                        Don't have an account? <a href="{{ route('register') }}" class="text-underline">Click here to sign up.</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection