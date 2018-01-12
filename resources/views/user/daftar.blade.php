<!DOCTYPE html>
<html>
<head>
  <title>Daftar | Page </title>

 <link rel="stylesheet" type="text/css" href="{{asset('logpage/style2.css')}}">

</head>
<body>

<div class="login-box">
<img src="{{URL::to('logpage/avatar.png')}}" class="avatar" >

@if(Session::has('succes'))
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-succes" style="text-align: center">{{Session::get('succes')}}</div>
	</div>
</div>
@endif

<h1>Registrasi</h1>
<form action="daftar_act" method="post">

<input type="hidden" name="_token" value="{{csrf_token()}}">

	<p>Username</p>
  @if($errors->has('username')) {{$errors->first('username')}}@endif {{-- untuk validasi require --}}
	<input type="text" name="username" placeholder=" Masukkan Username">

	<p>Password</p>
  @if($errors->has('username')) {{$errors->first('password')}}@endif {{-- untuk validasi require --}}
	<input type="password" name="password" placeholder=" Masukkan Password">

	<p>Konfirmasi Password</p>
  @if($errors->has('username')) {{$errors->first('cpassword')}}@endif {{-- untuk validasi require --}}
	<input type="password" name="cpassword" placeholder=" Masukkan Password">

	<p>Level</p>
	<input type="text" name="level" id="level" placeholder="Masukkan level">

	<p>Email</p>
  @if($errors->has('username')) {{$errors->first('email')}}@endif {{-- untuk validasi require --}}
	<input type="email" name="email" placeholder=" Masukkan Email">

	<p>Nomor Telpon</p>
  @if($errors->has('username')) {{$errors->first('tel')}}@endif {{-- untuk validasi require --}}
	<input type="tel" name="tel" placeholder=" Masukkan Nomor Telpon">

      			  <div class="form-group">
                  <label for="gambar">Masukkan Foto</label>
                  <input type="file" id="gambar" name="gambar">


	<input type="submit" name="submit" value="Daftar" style="margin-bottom: unset;">
	<a href="/home">Kembali ke Home</a>

</form>

</div>

</body>
</html>
