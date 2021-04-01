<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
    box-sizing: border-box;
}

body {
    font-family: 'Montserrat', sans-serif;
    background: #f6f5f7;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: -20px 0 50px;
		margin-top: 20px;
}
    .container {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, .2), 0 10px 10px rgba(0, 0, 0, .2);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 800px;
}

.form-container form {
    background: #fff;
    display: flex;
    flex-direction: column;
    padding:  0 50px;
    height: 100%;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.social-container {
    margin: 20px 0;
}

.social-container a {
    border: 1px solid #ddd;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    height: 40px;
    width: 40px;
}

.form-container input {
    background: #eee;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
}

button {
    border-radius: 20px;
    border: 1px solid #ff4b2b;
    background: #ff445c;
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
}

button:active {
    transform: scale(.95);
}

button:focus {
    outline: none;
}

button.ghost {
    background: transparent;
    border-color: #fff;
}

.form-container {
    position: absolute;
    top: 0;
    height: 100%;
    transition: all .6s ease-in-out;
}

.sign-in-container {
    left: 0;
    width: 50%;
    z-index: 2;
}

.sign-up-container {
    left: 0;
    width: 50%;
    z-index: 1;
    opacity: 0;
}

.overlay-container {
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: transform .6s ease-in-out;
    z-index: 100;
}

.overlay {
    background: #ff416c;
    background: linear-gradient(to right, #ff4b2b, #ff416c) no-repeat 0 0 / cover;
    color: #fff;
    position: relative;
    left: -100%;
    height: 100%;
    width: 200%;
    transform: translateY(0);
    transition: transform .6s ease-in-out;
}

.overlay-panel {
    position: absolute;
    top: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 0 40px;
    height: 100%;
    width: 50%;
    text-align: center;
    transform: translateY(0);
    transition: transform .6s ease-in-out;
}

.overlay-right {
    right: 0;
    transform: translateY(0);
}

.overlay-left {
    transform: translateY(-20%);
}

/* Move signin to right */
.container.right-panel-active .sign-in-container {
    transform: translateY(100%);
}

/* Move overlay to left */
.container.right-panel-active .overlay-container {
    transform: translateX(-100%);
}

/* Bring signup over signin */
.container.right-panel-active .sign-up-container {
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
}

/* Move overlay back to right */
.container.right-panel-active .overlay {
    transform: translateX(50%);
}

/* Bring back the text to center */
.container.right-panel-active .overlay-left {
    transform: translateY(0);
}

/* Same effect for right */
.container.right-panel-active .overlay-right {
    transform: translateY(20%);
}

.footer {
	margin-top: 25px;
	text-align: center;
}


.icons {
	display: flex;
	width: 30px;
	height: 30px;
	letter-spacing: 15px;
	align-items: center;
}
a {
    color: #333;
    font-size: 14px;
    text-decoration: none;
    margin: 15px 0;
}

</style>
<!--===============================================================================================-->
</head>
<body>
    
<div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="post"  action = "{{url('/')}}/signup" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					{{ csrf_field() }}
					@if($errors->any())
<div class"alert alert-danger">{{$errors->first()}}</div>
@endif
                <h1>Create Account</h1>
                <span>or use your email for registration</span>
                <input  type="text" name="fname" placeholder="Full Name" required pattern="[a-zA-Z0-9\s]+" maxlength="35">
<input  type="password" name="password" min="6" placeholder="Password" required pattern="[a-zA-Z0-9\s]+" maxlength="50">
<input  type="password" name="confirm" min="6" placeholder="Confirm Password" required pattern="[a-zA-Z0-9\s]+" maxlength="50">
<input  type="text" name="city" placeholder="Enter your city name" required pattern="[a-zA-Z0-9\s]+" maxlength="20">
<input  type="tel" name="tel" placeholder="Mobile No" required pattern="[a-zA-Z0-9\s]+" maxlength="15">
<input type="text" name="cname" placeholder="Company Name">
<input type="text" name="ntn" placeholder="NTN No">
<input type="text" name="stn" placeholder="STN No">
<input type="text" name="address" placeholder="Address">
<input type="text" name="caddress" placeholder="Corresponding Address">
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form method="post" action = "{{url('/')}}/login" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					{{ csrf_field() }}
					@if($errors->any())
					<div class="alert alert-danger">{{$errors->first()}}</div>
					@endif
                <h1>Sign in</h1>
                <span>or use your account</span>
                <input type="email" name="username" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <a href="{{URL('/')}}/password/reset">Forgot your password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    
    <div class="logo"><a href="{{url('/')}}/"><img src="{{url('/')}}/client/images/logo_gr.png" alt="Logo"> KING FABRICS</a></div>
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    
    <div class="logo"><a href="{{url('/')}}/"><img src="{{url('/')}}/client/images/logo_gr.png" alt="Logo"> KING FABRICS</a></div>
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    
<script>
    
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () =>
container.classList.add('right-panel-active'));

signInButton.addEventListener('click', () =>
container.classList.remove('right-panel-active'));
</script>

</body>
</html>