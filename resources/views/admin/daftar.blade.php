<!DOCTYPE html>
<html>
<head>
  <title>Daftar | Page </title>
  
 <link rel="stylesheet" type="text/css" href="{{asset('logpage/style.css')}}">
</head>
<body>

<div class="login-box">
<img src="{{URL::to('logpage/bromo.jpg')}}" class="avatar" >

@if(Session::has('succes'))
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-succes">{{Session::get('succes')}}</div>
	</div>
</div>
@endif

<h1>Registrasi</h1>
<form action="daftar_act" method="post">

<input type="hidden" name="_token" value="{{csrf_token()}}">

	<p>Username</p>
	<input type="text" name="username" placeholder="Masukkan Username">

	@if($errors->has('username')) {{$errors->first('username')}}@endif {{-- untuk validasi require --}}

	<p>Password</p>
	<input type="password" name="password" placeholder="Masukkan Password">

	@if($errors->has('username')) {{$errors->first('password')}}@endif {{-- untuk validasi require --}}

	<p>Konfirmasi Password</p>
	<input type="password" name="cpassword" placeholder="Masukkan Password">

	@if($errors->has('username')) {{$errors->first('cpassword')}}@endif {{-- untuk validasi require --}}

	<p>Email</p>
	<input type="email" name="email" placeholder="Masukkan Email">

	@if($errors->has('username')) {{$errors->first('email')}}@endif {{-- untuk validasi require --}}

	<p>Nomor Telpon</p>
	<input type="tel" name="tel" placeholder="Masukkan Nomor Telpon">


	<p>Level</p>
	<input type="text" name="text" placeholder="Masukkan level">

	@if($errors->has('username')) {{$errors->first('tel')}}@endif {{-- untuk validasi require --}}
	
	<input type="submit" name="submit" value="Daftar">


	<a href="#">Forget Password</a>

</form>

</div>

</body>
</html>