<?php

use Bolsainmobiliariape\ModuleContact\Http\Controllers\Dashboard\Contact\IndexController;
use Bolsainmobiliariape\ModuleContact\Http\Livewire\Dashboard\Contact\Index;
use Bolsainmobiliariape\ModuleContact\Http\Livewire\Dashboard\Contact\Show;
use Illuminate\Support\Facades\Route;

Route::as('dashboard.contact.')->middleware(['web'])->prefix('/dashboard/contact')->group(function (){
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('{contact}', Show::class)->name('show');
});
