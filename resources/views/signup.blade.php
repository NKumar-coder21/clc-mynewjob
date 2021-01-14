@extends('layouts.auth')

@section('title')
			My New Job | Sign Up
@endsection()

@section('content')
        <div class="d-flex flex-column justify-content-center" id="login-box">
            <div class="login-box-header">
                <h4 style="color:rgb(139,139,139);margin-bottom:0px;font-weight:400;font-size:27px;">Sign Up</h4>
            </div>
            <div class="login-box-content">
                <div class="fb-login box-shadow"><a class="d-flex flex-row align-items-center social-login-link"
                        href="#"><i class="fa fa-facebook"
                            style="margin-left:0px;padding-right:20px;padding-left:22px;width:56px;"></i>Sign Up with
                        Facebook</a></div>
                <div class="gp-login box-shadow"><a class="d-flex flex-row align-items-center social-login-link"
                        style="margin-bottom:10px;" href="#"><i class="fa fa-google"
                            style="color:rgb(255,255,255);width:56px;"></i>Sign Up with Google+</a></div>
            </div>
            <div class="d-flex flex-row align-items-center login-box-seperator-container">
                <div class="login-box-seperator"></div>
                <div class="login-box-seperator-text">
                    <p
                        style="margin-bottom:0px;padding-left:10px;padding-right:10px;font-weight:400;color:rgb(201,201,201);">
                        or</p>
                </div>
                <div class="login-box-seperator"></div>
            </div>
            <div class="email-login" style="background-color:#ffffff;">
                <form>
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="John Doe">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" placeholder="example@example.com">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="text" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="text" class="form-control" placeholder="Confirm Password">
                        </div>
                    </div>
                </form>
            </div>
            <div class="submit-row" style="margin-bottom:8px;padding-top:0px;"><button
                    class="btn btn-primary btn-block box-shadow" id="submit-id-submit" type="submit">Sign Up</button>
            </div>
            <div id="login-box-footer" style="padding:10px 20px;padding-bottom:23px;padding-top:18px;">
                <p style="margin-bottom:0px;">Have an account?<a id="register-link" href="/login">Login</a></p>
            </div>
        </div>
@endsection()

@section('scripts')
@endsection()