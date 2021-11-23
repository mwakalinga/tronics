<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeterController as meter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[meter::class,'index']);

Route::resource('/meter',meter::class)->only(['edit','update']);