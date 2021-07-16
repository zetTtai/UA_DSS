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
Route::get('/', function () {
    return view('Inicio');
});
Route::get('/quienesSomos', function () {
    return view('quienes');
});
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');
Route::get('/perfil/edit', function () {
    return view('editperfil');
})->name('editperfil');

//Usuario

Route::get('/user/createuser', 'UserController@createUser');
Route::get('/user', 'UserController@ShowAll')->name('user.showAll');
Route::get('/user/store', 'UserController@storeUser')->name('user.storeUser');

Route::get('/user/{user}/delete', 'UserController@deleteUser')->name('user.deleteUser');

Route::get('/user/{id}/edit', 'UserController@editUser')->name('user.editUser');
Route::get('/user/{user}', 'UserController@updateUser')->name('user.updateUser');
Route::get('/user/{user}/me', 'UserController@editProfile')->name('user.editProfile');

Route::get('/user/filter/{user}', 'UserController@showUser');


Route::post('user/byName', 'UserController@ByName')->name('user.ByName');

Route::post('user/byDNI', 'UserController@ByDNI')->name('user.ByDNI');


Route::get('/filterU', 'UserController@filter')->name('user.filter'); ///filter da error al pasar la página



//Appointment
Route::get('/appointment/createappointment', 'AppointmentController@createAppointment');
Route::get('/appointment', 'AppointmentController@ShowAll')->name('appointment.showAll');
Route::get('/appointment/store', 'AppointmentController@storeAppointment')->name('appointment.storeAppointment');

Route::get('/appointment/{appointment}/delete', 'AppointmentController@deleteAppointment')->name('appointment.deleteAppointment');

Route::get('/appointment/{id}/edit', 'AppointmentController@editAppointment')->name('appointment.editAppointment');
Route::get('/appointment/{appointment}', 'AppointmentController@updateAppointment')->name('appointment.updateAppointment');


Route::get('/appointment/filter/{appointment}', 'AppointmentController@showAppointment');

Route::post('appointment/byAppointment', 'AppointmentController@ByAppointment')->name('appointment.ByAppointment');

Route::post('appointment/byPrice', 'AppointmentController@ByPrice')->name('appointment.ByPrice');




//Lineorder

Route::get('/lineorder/createlineorder', 'LineorderController@createLineorder');
Route::get('/lineorder', 'LineorderController@ShowAll')->name('lineorder.showAll');
Route::get('/lineorder/store', 'LineorderController@storeLineorder')->name('lineorder.storeLineorder');

Route::get('/lineorder/{lineorder}/delete', 'LineorderController@deleteLineorder')->name('lineorder.deleteLineorder');

Route::get('/lineorder/{id}/edit', 'LineorderController@editLineorder')->name('lineorder.editLineorder');
Route::get('/lineorder/{lineorder}', 'LineorderController@updateLineorder')->name('lineorder.updateLineorder');


Route::get('/lineorder/filter/{lineorder}', 'LineorderController@showLineorder');
Route::get('/lineorder/filterN/{lineorder}', 'LineorderController@showLineorderByName');


//Order

Route::get('/order/createorder', 'OrderController@createOrder');
Route::get('/order', 'OrderController@ShowAll')->name('order.showAll');
Route::get('/order/store', 'OrderController@storeOrder')->name('order.storeOrder');

Route::get('/order/{order}/delete', 'OrderController@deleteOrder')->name('order.deleteOrder');

Route::get('/order/{id}/edit', 'OrderController@editOrder')->name('order.editOrder');
Route::get('/order/{order}', 'OrderController@updateOrder')->name('order.updateOrder');


Route::get('/order/filter/{order}', 'OrderController@showOrder');

// Pet
Route::get('/pet/createpet', 'PetController@createPet');
Route::get('/pet/store', 'PetController@storePet')->name('pet.storePet');

Route::get('/pet/{id}/edit', 'PetController@editPet')->name('pet.editPet');
Route::get('/pet/{pet}', 'PetController@updatePet')->name('pet.updatePet');
Route::get('/pet/{pet}/delete', 'PetController@deletePet')->name('pet.deletePet');
Route::get('/pet', 'PetController@ShowAll')->name('pet.showAll');

Route::get('/pet/{id}', 'PetController@showPet'); // No se usa

Route::post('pet/byName', 'PetController@ByName')->name('pet.ByName');

Route::post('pet/byAge', 'PetController@ByAge')->name('pet.ByAge');
Route::get('/filterP', 'PetController@filter')->name('pet.filter');


//Product
Route::get('/product/createproduct', 'ProductController@createProduct');

Route::get('/product/store', 'ProductController@storeProduct')->name('product.storeProduct');

Route::get('/product/{id}/edit', 'ProductController@editProduct')->name('product.editProduct');
Route::get('/product/{product}', 'ProductController@updateProduct')->name('product.updateProduct');
Route::get('/product/{product}/delete', 'ProductController@deleteProduct')->name('product.deleteProduct');
Route::get('/product', 'ProductController@ShowAll')->name('product.showAll');
Route::get('/product/filter/{product}', 'ProductController@showProduct');

Route::get('/cart', 'ProductController@cart');//Carrito
Route::get('/add-to-cart/{id}', 'ProductController@addToCart');//Carrito
Route::get('/remove-from-cart', 'ProductController@removeFromCart');//Carrito

Route::post('product/byType', 'ProductController@ByType')->name('product.ByType');

Route::post('product/byBrand', 'ProductController@ByBrand')->name('product.ByBrand');





Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
