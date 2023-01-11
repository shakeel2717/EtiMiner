@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <x-notice />
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
            <div class="text-center card-body d-flex justify-content-around">
                <div>
                    <h2 class="mb-2"><span id="power">{{ power(auth()->user()->id) }}</span><small>GH/s</small></h2>
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
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">PORTFOLIO DIVERSIFICATION</h5>
                <div class="row">
                    @foreach ($coins as $coin)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/crypto/') }}/{{ $coin->img }}" alt="{{ $coin->name }} Icon" width="50">
                                    <div class="data">
                                        <h4 class="ms-2">{{ $coin->name }} ({{ $coin->symbol }})</h4>
                                        <p class="ms-2 text-success">{{ number_format(0,12) }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <input type="range" class="form-control" min="0" max="100" id="{{ $coin->symbol }}Range" value="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<script>
    $(document).ready(function() {
        $($("#BTCRange")).change(function() {
            var range = $("#BTCRange").val();
            var availablePower = <?php echo power(auth()->user()->id) ?>;
            var percentage = availablePower * range / 100;
            var amount = availablePower - percentage;
            $("#power").html(amount);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': "{{csrf_token()}}",
                },
                url: "{{route('user.invest.store')}}",
                type: "post",
                data: {
                    amount: amount,
                    percentage: percentage,
                },
                success: function(response) {

                    alert(response);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        });
    });
</script>
@endsection