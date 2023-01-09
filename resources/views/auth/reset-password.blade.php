@extends('layouts.auth')
@section('form')
<div class="row justify-content-center pt-5">
    <div class="col-md-9">
        <div class="card  d-flex justify-content-center mb-0 auth-card iq-auth-form">
            <div class="card-body">
                <h2 class="mb-2 text-center">Reset Password</h2>
                <form method="POST" action="{{ route('password.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <x-input type="email" name="email" placeholder="Email" value="{{ $request->email }}" attribute="readonly" />
                        </div>
                    </div>
                    <x-input type="hidden" name="token" placeholder="token" value="{{ $request->token }}" attribute="readonly" />
                    <div class="row">
                        <div class="col-lg-12">
                            <x-input type="password" name="password" placeholder="New Password" />
                        </div>
                        <div class="col-lg-12 mb-4">
                            <x-input type="password" name="password_confirmation" placeholder="Confirm New Password" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection