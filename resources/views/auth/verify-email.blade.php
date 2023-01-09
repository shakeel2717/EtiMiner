@extends('layouts.auth')
@section('form')
<h2 class="mb-2">Account Created!</h2>
<p class="">A email has been send to {{ auth()->user()->email }}. Please check for an
    email from company and click
    on the included link to activate your account.</p>
<form method="POST" action="{{ route('login') }}">
    <div class="row">
        <form action="{{ route('verification.send') }}" method="POST">
            @csrf
            <div class="mt-5">
                <button class="btn btn-primary">Resend Verification Email</button>
            </div>
        </form>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <div class="mt-5">
                <button type="submit" class="btn btn-outline-secondary">Logout</button>
            </div>
        </form>
    </div>

</form>
@endsection