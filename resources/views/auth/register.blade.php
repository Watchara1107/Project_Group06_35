@extends('layouts.login.master')

@section('content')
    <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
    @csrf
					
						
					
					<span class="login100-form-title p-b-34 p-t-15">
						register
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter name">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="email" name="email" placeholder="email">
						<span class="focus-input100" data-placeholder="&#xf2da;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Confirm password">
						<input class="input100" type="password" name="password_confirmation" placeholder="confirm Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>
	</form>
@endsection