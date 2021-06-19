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

Route::get('/', function () {
    return view('home');
});
Route::post('/contractsender', [App\Http\Controllers\ContractVCController::class, 'genereaza']);
Route::post('/transcrieresender', [App\Http\Controllers\TranscriereController::class, 'genereaza']);
Route::post('/inmatricularesender', [App\Http\Controllers\InmatriculareController::class, 'genereaza']);



Route::post('/sendfeedback',[App\Http\Controllers\FeedbackController::class, 'store']); // feedback route
Route::get('/feedback',[App\Http\Controllers\FeedbackController::class, 'index'])->name('feedback');

// RUTE ADMIN
Route::group(['middleware' => ['admin']], function () {
    Route::get('/adminchat', [App\Http\Controllers\AdminController::class, 'chat']);
    Route::get('/adminchat/{roomId}/messages', [App\Http\Controllers\AdminController::class, 'messages']);
    Route::post('/adminchat/{roomId}/message', [App\Http\Controllers\AdminController::class, 'newMessage']);
    Route::get('/adminchat/rooms', [App\Http\Controllers\AdminController::class, 'rooms']);
    Route::get('/admin', function(){
        return view('adminmaster');
    });
    Route::get('/admin/utilizatori',[App\Http\Controllers\AdminController::class, 'utilizatori']);
    Route::get('/admin/utilizator/dlt/{id}',[App\Http\Controllers\AdminController::class, 'deleteutilizator']);


    Route::get('/admin/feedback',[App\Http\Controllers\AdminController::class, 'feedback']);
    Route::get('/admin/feedback/dlt/{id}',[App\Http\Controllers\AdminController::class, 'deletefeedback']);
    Route::get('/admin/feedback/up/{id}/{status}',[App\Http\Controllers\AdminController::class, 'updatefeedback']);

    Route::get('/admin/bugs',[App\Http\Controllers\AdminController::class, 'bugs']);
    Route::get('/admin/bugs/dlt/{id}',[App\Http\Controllers\AdminController::class, 'deletebug']);
    Route::get('/admin/bugs/up/{id}/{status}',[App\Http\Controllers\AdminController::class, 'updatebug']);
    Route::post('/admin/bugs/nou',[App\Http\Controllers\AdminController::class, 'bugnou']);
});


Route::get('/documente', function () {// documente landing start
    return view('documente.landing');
})->name('documente');



Route::get('/contract', [App\Http\Controllers\ContractVCController::class, 'index']);
Route::get('/transcriere', [App\Http\Controllers\TranscriereController::class, 'index']);
Route::get('/inmatriculare', [App\Http\Controllers\InmatriculareController::class, 'index']);

//documente end

Route::get('/chat', function () {
    return view('chat');//chat master
})->name('chat');
Route::post('/chat/captcha', [App\Http\Controllers\ChatController::class,'index']);
Route::get('/chat/room',function(){//return room
    return Auth::id();
});
Route::get('/chat/messages',[App\Http\Controllers\ChatController::class,'messages']);
Route::post('/chat/message',[App\Http\Controllers\ChatController::class,'newMessage']);





Auth::routes();



Route::get('/logout', function(){

    Auth::logout();
    return redirect('/');
});
