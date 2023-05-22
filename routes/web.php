<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\Ingredients;
use App\Http\Controllers\AddValue;
use App\Http\Controllers\Applicants;
use App\Http\Controllers\customers;
// use App\Http\Controllers\Ingredients;
// use App\Http\Controllers\Food_ordering;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/accounting-system", function(){
    return view('accounting-system');
});
Route::get("/add-allergies", function(){
    return view('add-allergies');
});
Route::get("/add-nutritional-values", function(){
    return view('add-nutritional-values');
});
Route::get("/add-ready-ingredient", function(){
    return view('add-ready-meal-ingredient');
});
Route::get("/add-ready-meal", function(){
    return view('add-ready-meal');
});
Route::get("/add-recommend", function(){
    return view('add-recommend');
});
Route::get("/add-recipe-ingredient", function(){
    return view('add-recipe-ingredient');
});
Route::get("/allergy-list", function(){
    return view('allergy-list');
});
Route::get("/applicant-list", function(){
    return view('applicant-list');
});
Route::get("/applicant-profile", function(){
    return view('applicant-profile');
});
Route::get("/change-password", function(){
    return view('change-password');
});
Route::get("/create-ingredient", function(){
    return view('create-ingredient');
});
Route::get("/create-recipe-category", function(){
    return view('create-recipe-category');
});
Route::get("/create-recipe-tag", function(){
    return view('create-recipe-tag');
});
Route::get("/create-recipe", function(){
    return view('create-recipe');
});
Route::get("/customer-list", function(){
    return view('customer-list');
});
Route::get("/edit-allergies", function(){
    return view('edit-allergies');
});
Route::get("/editProfile", function(){
    return view('edit-profile');
});
Route::get("/food-overview", function(){
    return view('food-overview');
});
Route::get("/forgot-password", function(){
    return view('forgot-password');
});
Route::get("/imprint", function(){
    return view('imprint');
});
Route::get("/login", function(){
    return view('login');
});
Route::get("/manage-point", function(){
    return view('manage-point-system');
});
Route::get("/privacy", function(){
    return view('privacy');
});
Route::get("/push-notification", function(){
    return view('push-notification');
});
Route::get("/ready-meal", function(){
    return view('ready-meal');
});
Route::get("/recommendation", function(){
    return view('recommendation');
});
Route::get("/recipe", function(){
    return view('recipe');
});
Route::get("/request-coach", function(){
    return view('request-coach');
});
Route::get("/reset-password", function(){
    return view('reset-password');
});
Route::get("/restaurant-profile", function(){
    return view('restaurant-profile-setting');
});
Route::get("/terms", function(){
    return view('terms');
});
Route::get("/userdashboard", function(){
    return view('userdashboard');
});
Route::get("/video-list", function(){
    return view('video-list');
});
Route::get("/product", function(){
    return view('product');
});
Route::post("/add-nutritional-values", [Ingredients::class, 'addIngredients']);
Route::post("food-overview", [AddValue::class, 'addIngs']);
Route::get("/applicant-list", [Applicants::class, 'getApplicants']);
Route::get("/customer-list", [customers::class, 'getAll']);