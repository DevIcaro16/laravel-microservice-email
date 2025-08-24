<?php

use App\Jobs\CompanyCreatedJob;
use App\Mail\CompanyCreatedWelcome;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/test-send-mail', function () {

    CompanyCreatedJob::dispatch('icarorp13@gmail.com')
        ->onQueue('queue_email');

    return response()->json([
        'success' => true,
        'message' => 'Micro Email ON!',
    ], 200);
});

Route::get('/', function () {
    return response()->json([
        'success' => true,
        'message' => 'Micro Email ON!',
    ], 200);
});
