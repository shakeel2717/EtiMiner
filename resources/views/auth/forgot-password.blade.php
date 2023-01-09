@extends('layouts.auth')
@section('form')
<h2 class="mb-2">Forgot Password</h2>
<form method="POST" action="{{ route('password.request') }}">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <x-input name="email" placeholder="Enter Email" />
        </div>
    </div>
    <div class="">
        <button type="submit" class="btn btn-primary">Forgot Password</button>
    </div>
    <p class="mt-3">
        Don’t have an account? <a href="{{ route('register') }}" class="text-underline">Click here to sign up.</a>
    </p>
</form>
@endsection