<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::post('invia-email', function (Request $request) {

    $validated = $request->validate([
        'testo' => 'required',
        'sender_email' => ['required','email'],
        'sender_name' => 'required',
        'to' => ['required','email'],
    ]);

    Mail::html($validated['testo'], function ($message) use ($validated) {
        $message->from($validated['sender_email'], $validated['sender_name']);
        $message->to($validated['to']);
        $message->subject('Esempio Invio email');
    });

    echo "Mail inviata";
})->name('invia-email');

