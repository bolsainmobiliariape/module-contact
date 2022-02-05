<?php

use Bolsainmobiliariape\ModuleContact\Http\Livewire\Dashboard\Contact\Index;
use Bolsainmobiliariape\ModuleContact\Http\Livewire\Dashboard\Contact\Show;
use Illuminate\Support\Facades\Route;

Route::as('dashboard.contact')->prefix('/dashboard/contact')->group(function (){
    Route::get('/', Index::class);
    Route::get('{id}', Show::class);
});
