<?php
use App\Abonnement;
use App\Inscription;


use Illuminate\Support\Facades\Auth;
Route::get('/code', function(){
    dd(Hash::make('labo'));
});

Route::post('/write', 'HomeController@write')->name('write');
Route::get('/clear/records', 'HomeController@clear')->name('clear.records');
Route::get('/open', 'SettingController@open')->name('open');
Route::get('/fix', 'HomeController@fix')->name('fix');
Route::get('/format', 'HomeController@format')->name('format');
Route::post('/write2', 'HomeController@write2')->name('write2');
Route::post('/check/port', 'SettingController@check');



Route::get('/fix', function(){

    $inscriptions = Inscription::all();
    foreach ($inscriptions as $inscription) {
        $abonnement= Abonnement::find($inscription->abonnement);
        $inscription->total = $abonnement->tarif;
        $inscription->save();
    }


});


Route::group(['prefix' => 'reclamation','middleware' =>'lang', 'as' => 'reclamation'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'ReclamationController@index']);
    Route::get('/create',['as'=>'.create', 'uses' => 'ReclamationController@create']);
    Route::post('/create', ['as' => '.store', 'uses' => 'ReclamationController@store']);
    Route::get('/destroy/{id_demande}', ['as' => '.destroy', 'uses' => 'ReclamationController@destroy']); 
    Route::get('/edit/{id_demande}', ['as' => '.edit', 'uses' => 'ReclamationController@edit']);
    Route::post('/update/{reclamation}', ['as' => '.update', 'uses' => 'ReclamationController@update']);    
});

Route::group(['prefix' => 'user','middleware' =>'lang', 'as' => 'user'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'UserController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'UserController@create']);
    Route::post('/create', ['as' => '.create', 'uses' => 'UserController@store']);
    Route::post('/store/coach', ['as' => '.store.coach', 'uses' => 'UserController@storeCoach']);
    Route::get('/destroy/{id_user}', ['as' => '.destroy', 'uses' => 'UserController@destroy']);    
    Route::get('/edit/{id_user}', ['as' => '.edit', 'uses' => 'UserController@edit']);
    Route::get('/show/{id_user}', ['as' => '.show', 'uses' => 'UserController@show']);
    Route::post('/update/{id_user}', ['as' => '.update', 'uses' => 'UserController@update']);    
});


Route::group(['prefix' => 'setting','middleware' =>'lang', 'as' => 'setting'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'SettingController@index']);
    Route::get('/create',['as'=>'.create', 'uses' => 'SettingController@create']);
    Route::post('/create', ['as' => '.store', 'uses' => 'SettingController@store']);
    Route::get('/destroy/{id_demande}', ['as' => '.destroy', 'uses' => 'SettingController@destroy']); 
    Route::get('/edit/{id_demande}', ['as' => '.edit', 'uses' => 'SettingController@edit']);
    Route::post('/update/{setting}', ['as' => '.update', 'uses' => 'SettingController@update']);    
});







Route::get('/', function(){
    return view('/welcome');
});

Auth::routes();
Route::get('/lang/{lang}', 'LangController@setLang')->name('lang');











Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('login.admin');
Route::get('/login/livreur', 'Auth\LoginController@showLivreurLoginForm')->name('login.Livreur');
Route::get('/login/fournisseur', 'Auth\LoginController@showFournisseurLoginForm')->name('login.Fournisseur');
Route::get('/login/freelancer', 'Auth\LoginController@showFreelancerLoginForm')->name('login.Freelancer');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('register.admin');
Route::get('/register/livreur', 'Auth\RegisterController@showLivreurRegisterForm')->name('register.Livreur');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/livreur', 'Auth\LoginController@livreurLogin');
Route::post('/login/fournisseur', 'Auth\LoginController@fournisseurLogin');
Route::post('/login/freelancer', 'Auth\LoginController@freelancerLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('register.admin');
Route::post('/register/livreur', 'Auth\RegisterController@createLivreur')->name('register.Livreur');


Route::get('/home', 'HomeController@index')->name('home')->middleware('lang');
Route::get('/logout', 'HomeController@logout')->name('_logout')->middleware('lang');
// Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix' => 'decharge','middleware' =>'lang', 'as' => 'decharge'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'DechargeController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'DechargeController@create']);
    Route::get('/facture/{decharge}',['as'=>'.facture', 'uses' => 'DechargeController@facture']);
    Route::post('/create', ['as' => '.create', 'uses' => 'DechargeController@store']);
    Route::get('/destroy/{id_decharge}', ['as' => '.destroy', 'uses' => 'DechargeController@destroy']);    
    Route::get('/edit/{id_decharge}', ['as' => '.edit', 'uses' => 'DechargeController@edit']);
    Route::get('/show/{id_decharge}', ['as' => '.show', 'uses' => 'DechargeController@show']);
    Route::get('/reload', ['as' => '.reload', 'uses' => 'DechargeController@reload']);
    Route::post('/update/{id_decharge}', ['as' => '.update', 'uses' => 'DechargeController@update']);    
    Route::post('/filter', ['as' => '.filter', 'uses' => 'DechargeController@filter']);    
});



Route::group(['prefix' => 'categorie','middleware' =>'lang', 'as' => 'categorie'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'CategorieController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'CategorieController@create']);
    Route::post('/create', ['as' => '.create', 'uses' => 'CategorieController@store']);
    Route::post('/update/{id_categorie}', ['as' => '.update', 'uses' => 'CategorieController@update']);
    Route::get('/destroy/{id_categorie}', ['as' => '.destroy', 'uses' => 'CategorieController@destroy']);    
    Route::get('/edit/{id_categorie}', ['as' => '.edit', 'uses' => 'CategorieController@edit']);
});


Route::get('/membre/ajax','MembreController@indexAjax');
Route::get('/membre/getMembres/','MembreController@getMembres')->name('membres.getMembres');
