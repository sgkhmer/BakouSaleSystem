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

// Front End Design
Route::get('/', function () {
    return view('frontend/index');
});

// authentication 

Route::post('login', function(Illuminate\Http\Request $request) 
{
    if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
        return response()->json(['success' => true, 'message' => 'Login successfully performed'], 200);
    }

    return response()->json(['success' => false, 'message' => 'Unable to login'], 401);
});

Route::group(['middleware' => 'auth'], function() {
    

    Route::post('logout', function()
    {
        Auth::logout();
        return response()->json(['success' => true, 'message' => 'You logout with success'], 200);
    });

    Route::get('users', function() {
        $users = App\User::all();

        return response()->json(['success' => 'true', 'message' => 'Loading users', 'data' => ['users' => $users->toJson()]], 200);
    });
});


Route::get('admin/', function () {
    return view('welcome');
});