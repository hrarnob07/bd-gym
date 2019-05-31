<?php


Auth::routes();
Route::get('/', function () {
//    return redirect()->route('login');

    return view('welcome');
});
//'middleware'=>'auth'
Route::group(['prefix' => 'admin'],function(){
    Route::get('/','BackendController@index');


});


Route::group(['prefix'=>'exercise/package'],function(){
    Route::get('/index','ExercisePackageController@index')->name('exercise.package.index');
    Route::get('/create','ExercisePackageController@create')->name('exercise.package.create');
    Route::post('/store','ExercisePackageController@store')->name('exercise.package.store');
    Route::get('/edit/{id}','ExercisePackageController@edit')->name('exercise.package.edit');
    Route::post('/update/{id}','ExercisePackageController@update')->name('exercise.package.update');
    Route::get('/delete/{id}','ExercisePackageController@delete')->name('exercise.package.delete');
});

Route::group(['prefix'=>'exercise'],function(){
    Route::get('/index','ExerciseController@index')->name('exercise.index');
    Route::get('/create','ExerciseController@create')->name('exercise.create');
    Route::post('/store','ExerciseController@store')->name('exercise.store');
    Route::get('/edit/{id}','ExerciseController@edit')->name('exercise.edit');
    Route::post('/update/{id}','ExerciseController@update')->name('exercise.update');
    Route::get('/delete/{id}','ExerciseController@delete')->name('exercise.delete');
});



//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

Route::get('/test', 'TestController@index')->name('test.index');
Route::post('/file-import', 'TestController@fileImport')->name('file.import');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


