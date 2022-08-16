<?php

use App\Http\Livewire\FlowBoards;
use App\Http\Livewire\Login;
use App\Http\Livewire\Patients;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

/* Login Page route */
Route::get('/', Login::class)->name('login')->middleware('guest');

Route::middleware(['auth'])->group( function (){

    /* Logout Page route */
    Route::get('/logout', [Login::class,'logout'])->name('logout');

    /* Patient page routes */
    Route::get('/patients', Patients::class)->name('patients');

    /* Flow-Board page routes */
    Route::get('/flow-board', FlowBoards::class)->name('flow-board');

});