@extends('layouts.login.master')

@section('content')
    <form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
    @csrf
					<center>
						<img src="{{ asset('template/login/images/logo.png') }}">
					</center>
					<span class="login100-form-title p-b-34 p-t-15">
                    Reset Password
					</span>
                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="text" name="email" placeholder="email">
						<span class="focus-input100" data-placeholder="&#xf2da;"></span>
					</div>

					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
                        Send Password Reset Link
						</button>
					</div>


	</form>
@endsection