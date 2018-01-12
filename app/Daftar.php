<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;

// class Daftar extends Model
// {

use Illuminate\Foundation\Auth\User as Authenticatable;

class Daftar extends Authenticatable
{	
    //


protected $table="daftar_admins";
	
    public static function formstore($data){
    // echo "inilah modelnya"; -->buat testing

    // var_dump($data); --> buat testing

 	$username=Input::get('username');
 	// echo $username;
 	 	$email=Input::get('email');
 	// echo $email;
 	 	$pass=Hash::make(Input::get('password'));
 	// echo $pass;
 	 	$telp=Input::get('tel');

 	 	$gambar=Input::get('gambar');

 	 	$level=Input::get('level');

 	 	$users=new daftar();

 	 	$users->name=$username;
 	 	$users->email=$email;
 	 	$users->password=$pass;
 	 	$users->tel=$telp;
 	 	$users->gambar=$gambar;
        $users->level=$level;

 	 	$users->save();

}


}
