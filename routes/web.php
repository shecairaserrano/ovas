<?php



Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('register_login');
})->name('login');

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/consultation', function () {
    return view('consultation');
});

Route::get('/surgery', function () {
    return view('surgery');
});

Route::get('/grooming', function () {
    return view('grooming');
});

Route::get('/urgent', function () {
    return view('urgent');
});

Route::post('/login','AuthController@login_check')->name('login_check');
Route::post('/register','AuthController@register_check')->name('register_check');

Route::group(['prefix'=> 'admin','middleware'=> 'auth'], function(){

    Route::get('/', function () {
        return view('admin.admin');
    });

     Route::get('/logout','AdminController@logout')->name('logout');

   
    //CLIENT CRUD
    Route::get('/clientrecord','AdminController@view_client')->name('view_client');
    Route::post('create-client','AdminController@create_client')->name('create_client');
    Route::post('delete-client','AdminController@delete_client')->name('delete_client');
    Route::post('find-client','AdminController@find_client')->name('find_client');
    Route::post('update-client','AdminController@update_client')->name('update_client');

    //PET CRUD
    Route::get('/petrecord','AdminController@pet_record')->name('pet_record');
    Route::post('/create-pet','AdminController@create_pet')->name('create_pet');
    Route::post('/delete-pet','AdminController@delete_pet')->name('delete_pet');
    Route::post('/find-pet','AdminController@find_pet')->name('find_pet');
    Route::post('/update-pet','AdminController@update_pet')->name('update_pet');

    //appointment

    Route::get('/appointment','AdminController@appointment')->name('appointment');

    //announcement
    Route::get('/announcement','AdminController@announcement')->name('announcement');

    //concern
    Route::get('/concern','AdminController@concern')->name('concern');

    //appointment actions
    Route::get('/appointment-accept/{id}','AdminController@appointment_accept')->name('appointment_accept');
    Route::get('/appointment-decline/{id}','AdminController@appointment_decline')->name('appointment_decline');


});

Route::group(['prefix' => 'client','middleware'=> 'auth'], function(){
    Route::get('/profile','UserController@profile')->name('profile');
    Route::get('/profile-settings','UserController@profile_settings')->name('profile_settings');
    Route::get('/logout','UserController@logout')->name('client_logout');
    Route::post('/update-info','UserController@update_info')->name('update_info');
    Route::post('/update-password','UserController@update_password')->name('update_password');

    //Appointment
    Route::get('/appointment','UserController@appointment_first')->name('appointment_first');
    Route::get('/appointment-type','UserController@appointment_type')->name('appointment_type');
    Route::get('/cat','UserController@cat')->name('cat');
    Route::get('/dog','UserController@dog')->name('dog');
    Route::get('/appointment-reason','UserController@appointment_reason')->name('appointment_reason');
    Route::get('/calendar','UserController@calendar')->name('calendar');
    Route::get('/confirmation','UserController@confirmation')->name('confirmation');
    Route::post('/appointment','UserController@set_appointment')->name('set_appointment');

    //Grooming
    Route::get('/appointment/{name}','UserController@appointment_first_groom')->name('appointment_first_groom');
    Route::get('/grooming-confirmation','UserController@grooming_confirmation')->name('grooming_confirmation');

});