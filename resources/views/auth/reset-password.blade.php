@extends('layouts.auth')
@section('form')
<h2 class="mb-2">Reset Password</h2>
<form method="POST" action="{{ route('password.store') }}">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <x-input type="email" name="email" placeholder="Enter Email" value="{{ $request->email }}" />
        </div>
        <div class="col-lg-12">
            <x-input type="hidden" name="token" placeholder="Enter Token" value="{{ $request->token }}" />
        </div>
        <div class="col-lg-12">
            <x-input type="password" name="password" placeholder="Enter Password" />
        </div>
        <div class="col-lg-12">
            <x-input type="password" name="password_confirmation" placeholder="Confirm Password" />
        </div>
    </div>
    <div class="">
        <button type="submit" class="btn btn-primary">Reset Password</button>
    </div>
</form>
@endsection