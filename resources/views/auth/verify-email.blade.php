@extends('layouts.auth')
@section('form')
<div class="row justify-content-center pt-5">
    <div class="col-md-8">
        <div class="card  d-flex justify-content-center mb-0">
            <div class="card-body">
                <h2 class="mt-3 mb-4">Success !</h2>
                <p class="cnf-mail mb-1">A email has been send to {{ auth()->user()->email }}. Please check for an
                    email from company and click
                    on the included link to activate your account.</p>
                <div class="d-flex justify-content-start align-items-center">
                    <form action="{{ route('verification.send') }}" method="POST">
                        @csrf
                        <div class="mt-5">
                            <button class="btn btn-primary py-3 px-4 me-xl-3">Resend Verification Email</button>
                        </div>
                    </form>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <div class="mt-5">
                            <button type="submit" class="btn btn-outline-secondary py-3 px-4 ">Logout</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection