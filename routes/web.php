<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\AdmissionRequirementsController;
use App\Http\Controllers\Api\Registeration\UserController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\TeamWorkController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();
//////// Login
Route::get('/',[AdminController::class,'login'])->name('login');
Route::post('/store_login',[AdminController::class,'store_login'])->name('store_login');


// Route::get('/admin',[AdminController::class,'admin'])->name('admin')->middleware('auth:sanctum');
Route::get('/admin',[AdminController::class,'admin'])->name('admin');

/////// all users
Route::get('/allUsers',[UserController :: class ,"index"])->name('allUsers');
Route::delete('/deleteUser/{id}',[AdminController :: class ,"destroy"])->name('deleteUser');

///////// about
Route::get('/about',[AboutUsController :: class ,"about"])->name('about');
Route::put('/updateAbout/{id}',[AboutUsController :: class ,"update"])->name('updateAbout');

//////// teamWork
Route::get('/teamWork',[TeamWorkController :: class ,"index"])->name('teamWork');
Route::get('/addTeamWork',[TeamWorkController :: class ,"create"])->name('addTeamWork');
Route::post('/addTeamWork',[TeamWorkController :: class ,"store"])->name('storeTeamWork');
Route::delete('/deleteTeamWork/{id}',[TeamWorkController :: class ,"destroy"])->name('deleteTeamWork');

/////// programs
Route::get('/program',[ProgramsController :: class ,"index"])->name('program');
Route::get('/storeProgram',[ProgramsController :: class ,"create"])->name('storeProgram');
Route::post('/storeProgram',[ProgramsController :: class ,"store"])->name('storeProgram');
Route::delete('/deleteProgram/{id}',[ProgramsController :: class ,"destroy"])->name('deleteProgram');
Route::get('/editProgram/{id}/edit', [ProgramsController::class, 'edit'])->name('editProgram');
Route::put('/updateProgram/{id}', [ProgramsController::class ,'updated'])->name('updateProgram');

////////// admissionRequirements

Route::get('/admissionRequirements',[AdmissionRequirementsController :: class ,"index"])->name('admissionRequirements');
Route::get('/storeRequirements',[AdmissionRequirementsController :: class ,"create"])->name('storeRequirements');
Route::post('/storeRequirements',[AdmissionRequirementsController :: class ,"store"])->name('storeRequirements');
Route::delete('/deleteRequirement/{id}',[AdmissionRequirementsController :: class ,"destroy"])->name('deleteRequirement');


////////// gallery
Route::get('/images',[GalleryController :: class ,"indexImages"])->name('images');
Route::post('/storeImage',[GalleryController :: class ,"storeImage"])->name('storeImage');
Route::delete('/deleteImage/{id}',[GalleryController :: class ,"destroyImage"])->name('destroyImage');

Route::get('/videos',[GalleryController :: class ,"indexVideos"])->name('videos');
Route::post('/storeVideo',[GalleryController :: class ,"storeVideo"])->name('storeVideo');
Route::delete('/deleteVideo/{id}',[GalleryController :: class ,"destroyVideo"])->name('deleteVideo');






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
