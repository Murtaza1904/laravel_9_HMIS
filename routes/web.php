<?php

use App\Http\Livewire\Login;
use App\Http\Livewire\Patients;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class)->name('login')->middleware('guest');
Route::get('/logout', [Login::class,'logout'])->name('logout')->middleware('auth');
Route::get('/patients', Patients::class)->name('patients')->middleware('auth');
