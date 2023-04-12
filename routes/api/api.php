<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Api\Registeration\UserController;
use App\Http\Controllers\Api\BookTripController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\TeamWorkController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/admin',[AdminController::class,'admin']);

/////////  Apis sign up
Route::get('/allUsers',[UserController :: class ,"index"]);
Route::get('/show{id}',[UserController :: class ,"show"]);
Route::post('/signup',[UserController :: class ,"store"]);
Route::post('/login',[UserController :: class ,"login"]);
Route::post('/team',[TeamWorkController :: class ,"store"]);
Route::get('/team',[TeamWorkController :: class ,"index"]);


Route::post('/about',[AboutUsController :: class ,"store"]);
Route::get('/about',[AboutUsController :: class ,"index"]);

/////////////  store Trip & Contact Us
Route::post('/storeBookTrip',[BookTripController :: class ,"storeBookTrip"]);
Route::post('/contact',[BookTripController :: class ,"contact"]);


Route::post('/storeProgram',[ProgramsController :: class ,"store"])->name('storeProgram');


    //////// teamWork
    Route::get('/teamWork',[TeamWorkController :: class ,"index"])->name('teamWork');

    /////// programs
    Route::get('/program',[ProgramsController :: class ,"index"])->name('program');

    ////////// admissionRequirements
    Route::get('/admissionRequirements',[AdmissionRequirementsController :: class ,"index"])->name('admissionRequirements');


    ////////// gallery
    Route::get('/images',[GalleryController :: class ,"indexImages"])->name('images');
    Route::get('/videos',[GalleryController :: class ,"indexVideos"])->name('videos');

        ///////// Slides
    Route::get('/slides',[SlidesController :: class ,"index"])->name('slides');