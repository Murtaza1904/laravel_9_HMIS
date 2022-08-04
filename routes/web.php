<?php

use App\Http\Livewire\PatientManager;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::get('/patient',PatientManager::class)->name('patient');
