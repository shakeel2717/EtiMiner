@extends('layouts.auth')
@section('form')
<h2 class="mb-2 text-center">Create Free Account</h2>
<p class="text-center">Open new Account at {{ env('APP_NAME') }}.</p>
<form action="{{ route('register') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <x-input name="username" placeholder="Enter Username" />
        </div>
        <div class="col-lg-12">
            <x-input name="email" placeholder="Enter Email" />
        </div>
        <div class="col-lg-12">
            <x-input type="password" name="password" placeholder="Enter Password" />
        </div>
        <div class="col-lg-12">
            <x-input type="password" name="password_confirmation" placeholder="Confirm Password" />
        </div>
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="customCheck1" required>
                <label class="form-check-label" for="customCheck1">I Agree to the Terms & Conditions</label>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">Create Account</button>
    </div>
    <p class="mt-3 text-center">
        Already have an account? <a href="{{ route('login') }}" class="text-underline">Click here to sign in.</a>
    </p>
</form>
@endsection