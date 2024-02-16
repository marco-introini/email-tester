<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::post('invia-email', function (){
    $testoHtml = request()->post('testo');

    \Illuminate\Support\Facades\Mail::html($testoHtml, function ($message){
        $message->from('noreply@example.com', 'Example');
        $message->to('john@example.com');
        $message->subject('Esempio Invio email');
    });

    echo "Mail inviata";
})->name('invia-email');
