<?php

use App\Http\Controllers\MemberController;
use App\Models\Member;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('about', 'about');
Route::view('projects', 'projects');

Route::post('new-member', [MemberController::class, 'addMember']);
// Route::view('contact', 'contact');