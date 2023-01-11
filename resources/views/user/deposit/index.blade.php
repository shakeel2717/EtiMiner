@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <x-notice />
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <form action="{{ route('user.deposit.store') }}" method="POST">
            @csrf
            <div class="row">
                @foreach ($coins as $coin)
                <div class="col-md-6">
                    <div class="card border border-primary">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="">
                                    <input type="radio" name="coin" id="{{ $coin->symbol }}" class="form-check-input" value="{{ $coin->symbol }}">
                                    <label class="ms-2 h6 form-check-label" for="{{ $coin->symbol }}">
                                        {{ $coin->name }}
                                    </label>
                                </div>
                                <img src="{{ asset('assets/crypto/') }}/{{ $coin->img }}" alt="{{ $coin->name }} Icon" width="30">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="mt-2 text-end">
                    <button type="submit" class="btn btn-primary btn-lg">Make Deposit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@livewire('calculator')
<div class="row mt-4">
    @foreach($plans as $plan)
    <div class="col-md-4">
        <div class="card border {{ ($plan->name == 'Investor') ? 'border-primary' : '' }}">
            <div class="card-body">
                <h5 class="card-title text-start {{ ($plan->name == 'Investor') ? 'text-warning' : '' }}">{{$plan->name}}</h5>
                <h4 class="card-title text-start {{ ($plan->name == 'Investor') ? 'text-warning' : '' }}"><b>{{$plan->percentage}} %</b> / per day </h4>
                <hr>
                <br>
                <ul>
                    <li>
                        <p>$6 / 120 GH/s bonus</p>
                    </li>
                    <li>
                        <p>Investment period {{ $plan->duration }} days</p>
                    </li>
                    <li>
                        @if ($plan->min_invest == 0)
                        <p>Without deposit</p>
                        @else
                        <p>From {{ $plan->min_invest }}$ or {{ $plan->min_power }} GH/s</p>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection