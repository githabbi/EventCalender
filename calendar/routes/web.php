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
use App\Http\Controllers\Auth\LoginController;

//Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
//Route::post('/login', [LoginController::class, 'login']);
use App\Http\Controllers\SuserController;


Route::get('/calendar/id', [SuserController::class, 'index'])->name('calendarr');
Route::get('/admin', [AdminController::class, 'index'])->name('calendarrr');

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
Route::post('/login', function () {
   return view('login');
})->name('login');
Route::get('/login', function () {
   return view('login');
})->name('loginget');



Route::post('/event/details', 'EventController@getEventDetails')->name('event.details');
Route::get('/jjj', function () {
   return view('create-event');
});