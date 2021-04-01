<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/css/main.css">
<!--===============================================================================================-->
</head>
@yield('content')