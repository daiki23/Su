<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index' 
    );

Route::get('/home', 'HomeController@index');
Route::get('/about', 'AboutController@index');
Route::get('/services', 'ServicesController@index');
Route::get('/gallery', 'GalleryController@index');


//khusuzon contact
Route::get('/contact', 'ContactController@index');
Route::post('/storeContact', "ContactController@store");
//
Route::get('/admin/viewMasukkan', 'ContactController@viewMasukkan');

//khusuzon wishlist
Route::get('/wishlist', 'wishlistController@index');
Route::post('/storeWishlist', "wishlistController@store");

// show kamera
Route::get('/sewa/kamera', 'SewaKameraController@index');
Route::get('/sewa/kamera/login', 'LoginController@index');
Route::get('/detil/kamera/{id_kamera}', 'SewaKameraController@detil_kamera'); 
Route::get('/sewa/kamera/canon', 'SewaKameraController@show_canon');
Route::get('/sewa/kamera/nikon', 'SewaKameraController@show_nikon');
Route::get('/sewa/kamera/sony', 'SewaKameraController@show_sony');
Route::get('/sewa/kamera/samsung', 'SewaKameraController@show_samsung');
Route::get('/sewa/kamera/gopro', 'SewaKameraController@show_gopro');


// show lensa
Route::get('/sewa/lensa', 'SewaLensaController@index');
Route::get('/sewa/lensa/login', 'LoginController@index');
Route::get('/detil/lensa/{id_lensa}', 'SewaLensaController@detil_lensa'); 
Route::get('/sewa/lensa/canon', 'SewaLensaController@show_canon');
Route::get('/sewa/lensa/nikon', 'SewaLensaController@show_nikon');
Route::get('/sewa/lensa/sony', 'SewaLensaController@show_sony');


// show aksesoris
Route::get('/sewa/aksesoris', 'SewaAksesorisController@index');
Route::get('/sewa/aksesoris/login', 'LoginController@index');
Route::get('/detil/aksesoris/{id}', 'SewaAksesorisController@detil_aksesoris'); 
Route::get('/sewa/aksesoris/tripod', 'SewaAksesorisController@show_tripod');
Route::get('/sewa/aksesoris/lighting', 'SewaAksesorisController@show_lighting');
Route::get('/sewa/aksesoris/microphone', 'SewaAksesorisController@show_microphone');
Route::get('/sewa/aksesoris/battery', 'SewaAksesorisController@show_battery');
Route::get('/sewa/aksesoris/memory', 'SewaAksesorisController@show_memory');


//layout sub menu

Route::get('/prosedurSewa', 'MenuController@prosedur');

#login
Route::get('/login', 'LoginController@index');
Route::get('/daftar', 'DaftarController@index');
Route::get('/daftar/sukses', 'DaftarController@sukses');
Route::post('/daftar_act', 'DaftarController@store');
Route::post('/login_check', 'LoginController@login' 
    //
);


// Route::get('/logout',function(){
// Auth:logout();

// return Redirect::to('');
// })->middleware("auth");

Route::get('/logout', function() {
    //
  Auth::logout();

  return Redirect::to('/home');
})->middleware('auth');

Route::group( ['middleware' => 'admin' ], function()
{
#admin page


Route::get('/admin/home', 'AdminController@dashboard');


####


#admin page

Route::get('/admin/logout', function() {
    //
  Auth::logout();

  return Redirect::to('/login');
})->middleware('auth');
Route::get('/alogin', 'AdminController@index');
Route::get('/admin/home', 'AdminController@dashboard');


// khusuzon camera
Route::get('/admin/viewCamera', 'kameraController@viewCamera');
Route::get('/admin/insertCamera', 'kameraController@insertCamera');
Route::post('/admin/storeCamera', "kameraController@storeCamera" 
    //
);
Route::get('/admin/lihatCamera/{merk}', 'kameraController@show' 
    //
);
Route::get('/admin/editCamera/{merk}', 'kameraController@edit' 
    //
);
Route::patch('/admin/editCamera/update/{id_kamera}', "kameraController@update" 
    //
);
Route::get('/admin/deleteCamera/{id_kamera}', 'kameraController@destroy' 
    //
);

// khusuzon lensa
Route::get('/admin/viewLensa', 'LensaController@viewLensa');
Route::get('/admin/insertLensa', 'LensaController@insertLensa');
Route::get('/admin/update', 'LensaController@index');
Route::post('/admin/insertLensa', "LensaController@storeLensa" 
    //
);
Route::get('/admin/lihatLensa/{id_lensa}', 'LensaController@show' 
    //
);
Route::get('/admin/editLensa/{id_lensa}', 'LensaController@edit' 
    //
);
Route::patch('/admin/editLensa/update/{id_lensa}', "LensaController@updateLensa" 
    //
);
Route::post('/admin/storeLensa', "LensaController@storeLensa" 
    //
);
Route::get('/admin/deleteLensa/{id_lensa}', 'LensaController@destroy' 
    //
);


// khusuzon aksesoris
Route::get('/admin/viewAksesoris', 'AksesorisController@viewAksesoris');
Route::get('/admin/insertAksesoris', 'AksesorisController@insertAksesoris');
Route::get('/admin/update', 'AksesorisController@index');
Route::post('/admin/insertAksesoris', "AksesorisController@storeAksesoris" 
    //
);
Route::get('/admin/lihatAksesoris/{id}', 'AksesorisController@show' 
    //
);
Route::get('/admin/editAksesoris/{id}', 'AksesorisController@edit' 
    //
);
Route::patch('/admin/editAksesoris/update/{id}', "AksesorisController@updateAksesoris" 
    //
);
Route::post('/admin/storeAksesoris', "AksesorisController@storeAksesoris" 
    //
);
Route::get('/admin/deleteAksesoris/{id_aksesoris}', 'AksesorisController@destroy' 
    //
);  

// Route::get('admin/home', function() {
//     //
//     return view('admin.home');
// })->name('post');


    });