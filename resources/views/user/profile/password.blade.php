@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card p-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
            <form action="{{ route('user.profile.password.update') }}" method="POST">
                @csrf
                <div class="row">
                    <h2>Change Password</h2>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <x-input type="password" name="cpassword" placeholder="Current Password" />
                    </div>
                    <div class="col-md-12">
                        <x-input type="password" name="password" placeholder="New Password" />
                    </div>
                    <div class="col-md-12">
                        <x-input type="password" name="password_confirmation" placeholder="Confirm New Password" />
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Update Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection