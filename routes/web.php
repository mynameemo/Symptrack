<?php

use App\Models\About;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\InsightController;
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

// FRONTEND PAGES
Route::get('/', [FrontendController::class, 'welcome']) -> name('welcome');
Route::get('/about', [FrontendController::class, 'about']) -> name('about');
Route::get('/contact', [FrontendController::class, 'contact']) -> name('contact');
Route::get('/FAQs', [FrontendController::class, 'FAQs']) -> name('FAQs');
Route::get('/add_symptom', [FrontendController::class, 'add_symptom']) -> name('add_symptom');
Route::get('/personalInfo', [FrontendController::class, 'personalInfo']) -> name('personalInfo');
Route::get('/symptom_history', [FrontendController::class, 'symptom_history']) -> name('symptom_history');
Route::get('/test', [FrontendController::class, 'test']) -> name('test');
Auth::routes();

Route::get('/home', function () {
    return redirect('/dashboard');
}); 

Route::get('/dashboard', [FrontendController::class, 'dashboard'])
    ->middleware('auth')
    ->name('dashboard');

//PROFILE
Route::get('/myProfile', [App\Http\Controllers\FrontendController::class, 'myProfile'])->name('myProfile');
Route::post('/updatePersonalInformation', [App\Http\Controllers\FrontendController::class, 'updatePersonalInformation'])->name('updatePersonalInformation');
Route::post('/updatePassword', [App\Http\Controllers\FrontendController::class, 'updatePassword'])->name('updatePassword');
Route::post('/updateProfileImage', [App\Http\Controllers\FrontendController::class, 'updateProfileImage'])->name('updateProfileImage');

//BACKEND NAV
Route::get('/showContents', [App\Http\Controllers\AboutController::class, 'showContents'])->name('showContents');
Route::get('/displayContents', [App\Http\Controllers\AboutController::class, 'displayContents'])->name('displayContents');
Route::post('/abouts', [App\Http\Controllers\AboutController::class, 'abouts'])->name('abouts');
Route::post('/missions', [App\Http\Controllers\AboutController::class, 'missions'])->name('missions');
Route::post('/values', [App\Http\Controllers\AboutController::class, 'values'])->name('values');
Route::post('/w_t_e_s', [App\Http\Controllers\AboutController::class, 'w_t_e_s'])->name('w_t_e_s');
Route::post('/locations', [App\Http\Controllers\AboutController::class, 'locations'])->name('locations');
Route::post('/contacts', [App\Http\Controllers\AboutController::class, 'contacts'])->name('contacts');
Route::post('/calls', [App\Http\Controllers\AboutController::class, 'calls'])->name('calls');
Route::post('/messages', [App\Http\Controllers\AboutController::class, 'messages'])->name('messages');
Route::post('/footers', [App\Http\Controllers\AboutController::class, 'footers'])->name('footers');   

//FRONTEND NAV
Route::get('/HomePage', [App\Http\Controllers\FrontendController::class, 'HomePage'])->name('HomePage');

//SYMPTOMS
Route::get('/symptoms', [App\Http\Controllers\SymptomController::class, 'symptoms'])->name('symptoms');

Route::post('/user-data', [App\Http\Controllers\SymptomController::class, 'storeUserData'])
    ->middleware('auth')
    ->name('user-data.store');

Route::get('/user-data', [App\Http\Controllers\SymptomController::class, 'indexUserData'])
    ->middleware('auth')
    ->name('user-data.index');
 
Route::delete('/user-data/{userData}', [App\Http\Controllers\SymptomController::class, 'destroyUserData'])
    ->middleware('auth')
    ->name('user-data.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/insights', [InsightController::class, 'getInsight']);
});    