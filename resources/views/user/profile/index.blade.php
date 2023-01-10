@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card p-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
            <form action="#" method="POST">
                @csrf
                <div class="row">
                    <h2>Profile Overview</h2>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <x-input type="text" name="username" placeholder="Your Username" :value="auth()->user()->username" attribute="readonly" />
                    </div>
                    <div class="col-md-12">
                        <x-input type="email" name="email" placeholder="Your Email" :value="auth()->user()->email" attribute="readonly" />
                    </div>
                    <div class="col-md-12">
                        <x-input type="text" name="refer" placeholder="Sponser" :value="auth()->user()->refer" attribute="readonly" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection