<?php


use Illuminate\Support\Facades\Route;
    
use App\Http\Controllers\PHPMailercontroller;
use App\Http\Controllers\EventController;
    
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
Route::get('/', function () {
   return view('Welcome');
})->name('welcome');   
Route::get('/send',[PHPMailercontroller::class, 'index'])->name('send.php.mailer');
Route::post('/sent',[PHPMailercontroller::class, 'store'])->name('send.php.mailer.submit');
Route::get('/dbconn',function(){
   return view('dbconn');
});
Route::get('/calendar', function () {
   return view('calendar');
})->name('calendar');
Route::get('/login', function () {
   return view('Login');
})->name('login');
Route::get('/booj', function () {
   return view('booj');
})->name('login');
Route::post('/event/details', 'EventController@getEventDetails')->name('event.details');
Route::get('/jjj', function () {
   return view('create-event');
});