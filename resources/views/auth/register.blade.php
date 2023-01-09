@extends('layouts.auth')
@section('form')
<div class="row justify-content-center pt-5">
    <div class="col-md-9">
        <div class="card  d-flex justify-content-center mb-0 auth-card iq-auth-form">
            <div class="card-body">
                <h2 class="mb-2 text-center">Create new Account</h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <x-input name="username" placeholder="Username" />
                        </div>
                        <div class="col-lg-12">
                            <x-input type="email" name="email" placeholder="Email" />
                        </div>
                        <div class="col-lg-12">
                            <x-input type="password" name="password" placeholder="Password" />
                        </div>
                        <div class="col-lg-12">
                            <x-input type="password" name="password_confirmation" placeholder="Confirm Password" />
                        </div>
                        <div class="col-lg-12 d-flex justify-content-between mt-4">
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="customCheck1" required>
                                <label class="form-check-label" for="customCheck1">I Agree to the Terms and Conditions</label>
                            </div>
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Create Account</button>
                    </div>
                    <p class="mt-3 text-center">
                        Already have an account? <a href="{{ route('login') }}" class="text-underline">Click here to sign in.</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection