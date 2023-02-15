<?php

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\QueueController;
use App\Models\Phone;
use App\Models\User;

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
    return view('welcome');
});

Route::get('sendMail', function(){
    $mailData = [
        "name" => "Test NAME",
        "dob" => "12/12/1990"
    ];

    Mail::to("hello@example.com")->send(new TestMail($mailData));

    dd("Mail Sent Successfully!");
});



Route::get('users',function(){

    return App\Models\User::all();
});



Route::get('users_with_phones/{id?}',function($id=Null){

    //return Phone::all();

    if(empty($id)){

        return User::all();

    } else 
    
    return User::with('getPhone')->where('id',$id)->get();
  
});



Route::get('scope',function(){

    //return Phone::all();
    
    //return Phone::with('getUser')->where('user_id',$id)->get();
    return Phone::phone()->get();
}); 


Route::get('phones_with_users/{id?}',function($id=null){

    if(empty($id)){

        return Phone::all()->except('id');

    } else 
    
    return Phone::with('getUser')->where('id',$id)->get();
  
});
    




Route::get('sendMail',[MailController::class,'sendMail']);

Route::get('queues',[QueueController::class,'getAll']);
Route::get('queues',[ModelController::class,'getAll']);







