<?php

class Mailer 
{
    
}

class RegistersUsers
{
    protected $mailer;
    
    public function __construct(Mailer $mailer) {
        $this->mailer = $mailer;
    }
    
    public function setMailer(Mailer $mailer) {
        $this->mailer = $mailer;
    }
}

//App::bind('RegistersUsers', function() {
//    return new RegistersUsers(new Mailer); 
//});
//
//App::singleton('RegistersUsers', function() {
//    return new RegistersUsers(new Mailer); 
//});


var_dump(App::make('RegistersUsers'));
var_dump(app('RegistersUsers'));

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    $people = ["Robert","Kamil","Michał"];
//    //$people = [];
//    return view('welcome', compact('people'));
//});

//Route::get('about', function() { 
//    return view('pages.about');
//});



//Route::group(['middleware' => ['web']], function() {
    
    Route::get('/', function(RegistersUsers $registration) {
        var_dump($registration);
    });

    Route::get('begin', function() {
        flash('This is a test message', 'alert-success');
        return redirect('/');
    });

    Route::get('/', 'PagesController@home');
    Route::get('about', 'PagesController@about');

    Route::get('cards', 'CardsController@index');
    Route::get('cards/{card}', 'CardsController@show');

    Route::post('cards/{card}/notes','NotesController@store');
    Route::get('notes/{note}/edit', 'NotesController@edit');
    Route::patch('notes/{note}', 'NotesController@update');
    
//});
    
    
Route::auth();

Route::get('/home', 'HomeController@index');
