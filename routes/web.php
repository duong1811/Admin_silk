<?php

use Illuminate\Support\Facades\Route;

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
//--------------------------------transferController-----------------------------------------------
Route::get('/uploadVideoTransfer', 'transferController@uploadVideoTransfer');
//--------------------------------testController-----------------------------------------------
Route::get('/test2', 'testController@test2');
//=================================================================================================
Route::get('/', function () {
    return view('play');
});
Route::get('/play2', function () {
    return view('play2');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/compute', function () {
    return view('compute/compute');
});
Route::get('/statistic', function () {
    return view('statistic/statistic');
});
Route::get('/manage-task', function () {
    return view('manageTask/manageTask');
});
Route::get('/encoding-task', function () {
    return view('manageTask/encodingTask');
});
Route::get('/user', function () {
    return view('user/user');
});
Route::get('/inforuser', function () {
    return view('user/inforuser');
});
Route::get('/support/customDomain', function () {
    return view('support/customdomain');
});
Route::get('/support/report', function () {
    return view('support/reports');
});
Route::get('/support/cases', function () {
    return view('support/cases');
});
