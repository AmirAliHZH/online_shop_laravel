<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::prefix("/admin")->group(function () {
    Route::get('/',[SiteController::class,"showAdminDashboard"]);
});
