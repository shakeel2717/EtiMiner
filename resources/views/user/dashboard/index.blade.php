@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
            <div class="text-center card-body d-flex justify-content-around">
                <div>
                    <h2 class="mb-2">121<small>GH/s</small></h2>
                    <p class="mb-0 text-secondary">My Power</p>
                </div>
                <hr class="hr-vertial">
                <div>
                    <h2 class="mb-2">1 GH/s</h2>
                    <p class="mb-0 text-secondary">Free Power</p>
                </div>
                <hr class="hr-vertial">
                <div>
                    <h2 class="mb-2">0.00 <small>%</small></h2>
                    <p class="mb-0 text-secondary">Daily Grow Rate</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection