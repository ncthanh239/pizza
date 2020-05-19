<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body><br><br>
	@include('layouts.message')
	@if(Auth::check())
  		{{ Auth::user()->username }}
        @else
          Unauthenticated
        @endif
	<h3>You are admin</h3>
	<button><a href="{{route('logout')}}">Log out</a></button>
</body>
</html>