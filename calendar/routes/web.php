<?php


use Illuminate\Support\Facades\Route;
    
use App\Http\Controllers\PHPMailercontroller;
    
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
Route::get('/',function(){
   return view('calendrierr');
});   
Route::get('/send',[PHPMailercontroller::class, 'index'])->name('send.php.mailer');
Route::post('/sent',[PHPMailercontroller::class, 'store'])->name('send.php.mailer.submit');