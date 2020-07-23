<?php

Route::view('/','home')->name('home');

Route::view('/quienes-somos','about')->name('about');

Route::view('/contacto','contact')->name('contact');

Route::resource('portafolio','ProjectController')
	->parameters(['portafolio'=>'project'])
	->names('projects');

Route::delete('/portafolio/{project}','ProjectController@destroy')->name('projects.destroy');

Route::post('contact','MessageController@store')->name('messages.store');


Auth::routes();
