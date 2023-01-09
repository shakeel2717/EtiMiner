@extends('layouts.auth')
@section('form')
<div class="row justify-content-center pt-5">
    <div class="col-md-9">
        <div class="card  d-flex justify-content-center mb-0 auth-card iq-auth-form">
            <div class="card-body">
                <h2 class="mb-2 text-center">Forgot Password</h2>
                <form method="POST" action="{{ route('password.request') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <x-input type="email" name="email" placeholder="Email" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Reset Password</button>
                    </div>
                    <p class="mt-3 text-center">
                        Remember Password? <a href="{{ route('login') }}" class="text-underline">Try Login here.</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection