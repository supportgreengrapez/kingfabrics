<!DOCTYPE html>
<html lang="en">
<head>
	<title>SignUp</title>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{URL('/')}}/images1/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="{{URL('/')}}/css1/bootstrap.min.css">
	<link href="{{URL('/')}}/css1/bootstrap-theme.min.css" type="text/css" rel="stylesheet">
<!--===============================================================================================-->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="{{URL('/')}}/css1/util.css">
	<link rel="stylesheet" type="text/css" href="{{URL('/')}}/css1/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12">
            	<div class="login p-t-20 p-b-20">
                	<a href="{{URL('/')}}/"><img src="{{URL('/')}}/images1/logo.png" alt="logo"></a>
                </div>
            </div>
        </div>
    </div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="post"  action = "{{url('/')}}/signup" class="login100-form validate-form p-l-55 p-r-55 p-t-178" onsubmit="return checkForm(this);">
					{{ csrf_field() }}
					@if($errors->any())
<div class"alert alert-danger">{{$errors->first()}}</div>
@endif
					<span class="login100-form-title">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="fname" placeholder="Full Name" required pattern="[a-zA-Z0-9\s]+" maxlength="35">
						<span class="focus-input100"></span>
					</div>
				
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="email" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" min="6" placeholder="Password" required pattern="[a-zA-Z0-9\s]+" maxlength="50">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="password" name="confirm" min="6" placeholder="Confirm Password" required pattern="[a-zA-Z0-9\s]+" maxlength="50">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
							<input class="input100" type="text" name="city" placeholder="Enter your city name" required pattern="[a-zA-Z0-9\s]+" maxlength="20">
							<span class="focus-input100"></span>
						</div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="tel" name="tel" placeholder="Mobile No" required pattern="[a-zA-Z0-9\s]+" maxlength="15">
						<span class="focus-input100"></span>
					</div>

					
 <div class="m-b-10">
						<p>
  <a class="btn btn-success m-b-10" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    More Information
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    					
<input class="input100  m-b-10" type="text" name="cname" placeholder="Company Name">
						<span class="focus-input100"></span>
<input class="input100  m-b-10" type="text" name="ntn" placeholder="NTN No">
						<span class="focus-input100"></span>
                        <input class="input100 m-b-10" type="text" name="stn" placeholder="STN No">
						<span class="focus-input100 "></span>
                        <input class="input100 m-b-10" type="text" name="address" placeholder="Address">
						<span class="focus-input100"></span>
                        <input class="input100 m-b-10" type="text" name="caddress" placeholder="Corresponding Address">
						<span class="focus-input100"></span>
  </div>
</div>
					</div>

					<div class="container-login100-form-btn p-b-20">
						<button class="login100-form-btn">
							Sign Up
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="{{URL('/')}}/js1/jquery-1.9.1.min.js"></script>
	<script src="{{URL('/')}}/js1/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{URL('/')}}/js1/main.js"></script>
	<script>
                        function checkForm(form)
                        {
                            if (form.password.value.length < 6) {
                                alert("Error: Password must contain at least six characters!");
                                form.password.focus();
                                return false;
                            }

                        }
</script>

</body>
</html>