<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Question;


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

//Route::get('/post/{id}', 'App\Http\Controllers\PostsController@index');
    

//Route::resource('posts', 'App\Http\Controllers\PostsController');



//Route::get('/test', array('as'=>'test.func', function () {
//    //$url = route('test.func');
//    //return $url;
//    return view('testwelcome');

//}));

 
// RAW SQL QUERYS

//Route::get('/addQuestion', function () {
//    
//    DB::insert('insert into question (id_registered_user, title,message, vote_number) values (?, ?, ?, ?)', ['1','PHP with Laravel', 'PHP Laravel is very cool!', '2']);
//
//});

//Route::get('/showQuestion', function(){
//        $results = DB::select('select * from question where id = ?', [1]);
//        
//          LOOPING THROUGH ELEMENTS
//        foreach($results as $row){
//           
//
//            return $row->title;
//        }


//});

/// ELOQUENT

//Route::get('/showQ', function () {
    
//    $question = Question::all();
    
//    foreach($question as $q){
//        return $q->title;
//    }




//});

/// INSERTING DATA
//Route::get('/addQ', function(){
//    $q = new Question();

    // ELOQUENT TITLE
//    $q->title = "Question title";
//    $q->message = "Question message";
//    $q->id_registered_user = 0;
//    $q->vote_number = 0;
//    $q->save();

//});


//Route::get('/addnewquestion', function () {
    
//    Question::create(['title'=>'questions title', 'message'=>'questionmessage', 'id_registered_user'=>0,'vote_number'=>0]);
//});




//Route::get('/', function () {
//    return view('index');
//});


//Route::get('/updatequestion', function(){

 //   Question::where('id', 2)->where('id_registered_user', 0)->update(['title'=>'new record']);



//});

Route::get('/', function () {
    return redirect("/question");
});

Route::resource('/question', QuestionController::class);