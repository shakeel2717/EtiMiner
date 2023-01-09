@extends('layouts.auth')
@section('form')
<h2 class="mb-2 text-center">Sign In</h2>
<p class="text-center">Login to stay connected.</p>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <x-input name="email" placeholder="Enter Email" />
        </div>
        <div class="col-lg-12">
            <x-input type="password" name="password" placeholder="Enter Password" />
        </div>
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="customCheck1">
                <label class="form-check-label" for="customCheck1">Remember Me</label>
            </div>
            <a href="{{ route('password.request') }}">Forgot Password?</a>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">Sign In</button>
    </div>
    <p class="mt-3 text-center">
        Don’t have an account? <a href="{{ route('register') }}" class="text-underline">Click here to sign up.</a>
    </p>
</form>
@endsection