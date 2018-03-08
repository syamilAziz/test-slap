<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('haulier')->user();

    //dd($users);

    return view('haulier.home');
})->name('home');

Route::get('/kvdt', 'HomeController@kvdt')->name('terminal.kvdt');
Route::get('/lumut', 'HomeController@lumut')->name('terminal.lumut');
Route::get('/prai', 'HomeController@prai')->name('terminal.prai');
Route::get('/langkawi', 'HomeController@langkawi')->name('terminal.langkawi');
Route::get('/kuantan', 'HomeController@kuantan')->name('terminal.kuantan');
Route::get('/kerteh', 'HomeController@kerteh')->name('terminal.kerteh');
Route::get('/melaka', 'HomeController@melaka')->name('terminal.melaka');
Route::get('/pasirgudang', 'HomeController@pasirgudang')->name('terminal.pasirgudang');

Route::get('/roadtanker', 'HomeController@roadtanker')->name('pages.roadtanker');

