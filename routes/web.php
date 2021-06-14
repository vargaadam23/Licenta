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
Route::get('/chat/room',function(){//return room
    return Auth::id();
});
Route::get('/chat/messages',[App\Http\Controllers\ChatController::class,'messages']);
Route::post('/chat/message',[App\Http\Controllers\ChatController::class,'newMessage']);




Auth::routes();



Route::get('/logout', function(){

    Auth::logout();
    return redirect('/home');
});
