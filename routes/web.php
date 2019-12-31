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
    return view('index');
});
// Route::get('candidatelandingpage', function () {
//   return view('nominees.president');
// });


Route::get('/login', function () {
  if (Session::get('logged_inv')) {
    return redirect('/voting');
  }
  elseif (Session::get('logged_inv')) {
    return redirect('/dashboard');
  }
  else {
  return view('/login');
}

})->name('login');

Route::post('/login', 'accountController@login');


Route::group(['middleware' => ['isUser']], function () {
  Route::post('/candidatelandingpage', 'candidateController@candidatelandingpage');
  Route::get('/candidatelandingpage', 'candidateController@candidatelandingpage');
 Route::get('/votingDashboard', 'voting@votingDashboard');
 // Route::POST('/', 'candidateController@candidatelandingpage');

});


Route::group(['middleware' => ['isAdmin', 'isUser']], function () {
  // account_update

  Route::get('/dashboard', 'accountController@dashboard');

  Route::post('/account_update', 'c_ustomer@updateProfile');
  //

  Route::get('/registerVoter', 'votersController@registerVoterv');
  Route::post('/registerVoter', 'accountController@registerVoter');
  Route::get('/registerCandidate', 'candidateController@registerCandidatev');
  Route::post('/registerCandidate', 'accountController@registerCandidate');
  Route::get('/registeredVoter', 'votersController@registeredVoterv');
  // Route::get('/registeredVoter', 'accountController@registeredVoter');
 Route::get('/registeredCandidate', 'candidateController@registeredCandidatev');
 Route::get('/viewResult', 'OrdersController@viewResult');
  

});
