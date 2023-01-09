@extends('layouts.auth')
@section('form')
<div class="row justify-content-center pt-5">
    <div class="col-md-9">
        <div class="card  d-flex justify-content-center mb-0 auth-card iq-auth-form">
            <div class="card-body">
                <h2 class="mb-2 text-center">Sign In</h2>
                <p class="text-center">Login to stay connected.</p>
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="xyz@example.com">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" aria-describedby="password" placeholder="xxxx">
                            </div>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-between">
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                <label class="form-check-label" for="customCheck1">Remember Me</label>
                            </div>
                            <a href="recoverpw.html">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
                    <p class="text-center my-3">or sign in with other accounts?</p>
                    <div class="d-flex justify-content-center">
                        <ul class="list-group list-group-horizontal list-group-flush">
                            <li class="list-group-item border-0 pb-0">
                                <a href="#"><img src="https://templates.iqonic.design/product/qompac-ui/html/dist/assets/images/brands/gm.svg" alt="gm" loading="lazy"></a>
                            </li>
                            <li class="list-group-item border-0 pb-0">
                                <a href="#"><img src="https://templates.iqonic.design/product/qompac-ui/html/dist/assets/images/brands/fb.svg" alt="fb" loading="lazy"></a>
                            </li>
                            <li class="list-group-item border-0 pb-0">
                                <a href="#"><img src="https://templates.iqonic.design/product/qompac-ui/html/dist/assets/images/brands/im.svg" alt="im" loading="lazy"></a>
                            </li>
                            <li class="list-group-item border-0 pb-0">
                                <a href="#"><img src="https://templates.iqonic.design/product/qompac-ui/html/dist/assets/images/brands/li.svg" alt="li" loading="lazy"></a>
                            </li>
                        </ul>
                    </div>
                    <p class="mt-3 text-center">
                        Don’t have an account? <a href="sign-up.html" class="text-underline">Click here to sign up.</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection