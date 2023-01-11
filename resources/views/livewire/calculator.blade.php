<div>
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
    <div class="card">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    <div class="text-center card-body">
                        <div class="col-12">
                            <div class="icon mt-2 mb-4">
                                <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M6.447 22C3.996 22 2 19.9698 2 17.4755V12.5144C2 10.0252 3.99 8 6.437 8L17.553 8C20.005 8 22 10.0302 22 12.5256V17.4846C22 19.9748 20.01 22 17.563 22H16.623H6.447Z" fill="currentColor"></path>
                                    <path d="M11.455 2.22103L8.54604 5.06682C8.24604 5.36094 8.24604 5.83427 8.54804 6.12742C8.85004 6.41959 9.33704 6.41862 9.63704 6.12547L11.23 4.56623V6.06119V14.4515C11.23 14.8654 11.575 15.2014 12 15.2014C12.426 15.2014 12.77 14.8654 12.77 14.4515V4.56623L14.363 6.12547C14.663 6.41862 15.15 6.41959 15.452 6.12742C15.603 5.98036 15.679 5.78849 15.679 5.59566C15.679 5.40477 15.603 5.21291 15.454 5.06682L12.546 2.22103C12.401 2.07981 12.205 1.99995 12 1.99995C11.796 1.99995 11.6 2.07981 11.455 2.22103Z" fill="currentColor"></path>
                                </svg>
                            </div>
                            <h5 class="mb-2"><span id="power">{{ $total }} +9 </span><small>GH/s</small></h5>
                            <p class="mb-0 text-secondary">Get Power</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    <div class="text-center card-body">
                        <div class="col-12">
                            <div class="icon mt-2 mb-4">
                                <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M10.0833 15.958H3.50777C2.67555 15.958 2 16.6217 2 17.4393C2 18.2559 2.67555 18.9207 3.50777 18.9207H10.0833C10.9155 18.9207 11.5911 18.2559 11.5911 17.4393C11.5911 16.6217 10.9155 15.958 10.0833 15.958Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M22.0001 6.37867C22.0001 5.56214 21.3246 4.89844 20.4934 4.89844H13.9179C13.0857 4.89844 12.4102 5.56214 12.4102 6.37867C12.4102 7.1963 13.0857 7.86 13.9179 7.86H20.4934C21.3246 7.86 22.0001 7.1963 22.0001 6.37867Z" fill="currentColor"></path>
                                    <path d="M8.87774 6.37856C8.87774 8.24523 7.33886 9.75821 5.43887 9.75821C3.53999 9.75821 2 8.24523 2 6.37856C2 4.51298 3.53999 3 5.43887 3C7.33886 3 8.87774 4.51298 8.87774 6.37856Z" fill="currentColor"></path>
                                    <path d="M21.9998 17.3992C21.9998 19.2648 20.4609 20.7777 18.5609 20.7777C16.6621 20.7777 15.1221 19.2648 15.1221 17.3992C15.1221 15.5325 16.6621 14.0195 18.5609 14.0195C20.4609 14.0195 21.9998 15.5325 21.9998 17.3992Z" fill="currentColor"></path>
                                </svg>
                            </div>
                            <h5 class="mb-2">{{ $profit }} %</small></h5>
                            <p class="mb-0 text-secondary">Daily Grow Rate</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    <div class="text-center card-body">
                        <div class="col-12">
                            <div class="icon mt-2 mb-4">
                                <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16.3405 1.99976H7.67049C4.28049 1.99976 2.00049 4.37976 2.00049 7.91976V16.0898C2.00049 19.6198 4.28049 21.9998 7.67049 21.9998H16.3405C19.7305 21.9998 22.0005 19.6198 22.0005 16.0898V7.91976C22.0005 4.37976 19.7305 1.99976 16.3405 1.99976Z" fill="currentColor"></path>
                                    <path d="M10.8134 15.248C10.5894 15.248 10.3654 15.163 10.1944 14.992L7.82144 12.619C7.47944 12.277 7.47944 11.723 7.82144 11.382C8.16344 11.04 8.71644 11.039 9.05844 11.381L10.8134 13.136L14.9414 9.00796C15.2834 8.66596 15.8364 8.66596 16.1784 9.00796C16.5204 9.34996 16.5204 9.90396 16.1784 10.246L11.4324 14.992C11.2614 15.163 11.0374 15.248 10.8134 15.248Z" fill="currentColor"></path>
                                </svg>
                            </div>
                            <h5 class="mb-2">${{ $dayWiseProfit }} +0 <small>GH/s</small></h5>
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