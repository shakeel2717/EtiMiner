<div class="row mt-4">
    <div class="col-md-12">
        <h3 class="my-4">Investment Calculator</h3>
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="crypto">Crypto</label>
                    <input type="text" name="crypto" id="crypto" class="form-control" wire:model="crypto">
                    <small>@error('crypto') <span class="text-danger">{{ $message }}</span> @enderror</small>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="usd">USD</label>
                    <input type="text" name="usd" id="usd" class="form-control" wire:model="usd">
                    <small>@error('usd') <span class="text-danger">{{ $message }}</span> @enderror</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    <div class="text-center card-body d-flex justify-content-around">
                        <div>
                            <h2 class="mb-2"><span id="power">{{ $total }} +9 </span><small>GH/s</small></h2>
                            <p class="mb-0 text-secondary">Get Power</p>
                        </div>
                        <hr class="hr-vertial">
                        <div>
                            <h2 class="mb-2">{{ $profit }} %</h2>
                            <p class="mb-0 text-secondary">Daily Grow Rate</p>
                        </div>
                        <hr class="hr-vertial">
                        <div>
                            <h2 class="mb-2">${{ $dayWiseProfit }} +0 <small>GH/s</small></h2>
                            <div class="d-flex align-items-center justify-content-center mb-0 text-secondary">
                                <p class="m-2">In</p>
                                <div class="input">
                                    <input style="width:100px;" type="number" class="form-control form-control-sm text-center" name="days" wire:model="days" id="days">
                                    @error('days')<small> <span class="text-danger">{{ $message }}</span></small> @enderror
                                </div>
                                <p class="m-2">Day(s)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>