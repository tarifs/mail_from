<?php

Route::get('/', function () {
    return redirect('/foxtrot');
});

Route::get('/foxtrot', function () {
    return view('welcome');
});

Route::post('/mail_sent','MailController@MailSent')->name('mail_sent');