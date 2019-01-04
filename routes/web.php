<?php

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

Route::get('/add', function () {
    $a = 1 + 5;

    return $a;
});

Route::get('/a-propos', function () {
    return 'À propos';
});

Route::get('/bonjour/{nom}', function () {
    return view('bonjour', [
        'prenom' => request('nom'),
    ]);
});

Route::get('/inscription', function () {
    return view('inscription');
});

Route::post('/inscription', function () {

    $utilisateur = new App\Utilisateurs;
    $utilisateur->email = request('email');
    $utilisateur->mot_de_passe = request('password');
    $utilisateur->age = request('age');
    $utilisateur->save();
    
    return 'Votre email est ' . $_POST['email'];
});

// Route::get('/utilisateurs/{age}', function(int $age){
//     $utilisateurs = App\Utilisateurs::all();
//     return view('utilisateurs')->with('utilisateurs',$utilisateurs);
// })->where('age','[0-9]+');

Route::get('/utilisateurs/{age}', function(int $age){
    $utilisateurs = App\Utilisateurs::where('age','>',$age)
        ->orderBy('email', 'desc')
        ->get();
    return view('utilisateurs',['age'=> request('age'),])->with('utilisateurs',$utilisateurs);
})->where('age','[0-9]+');

