<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//create a user route
Route::get('/user-create',function(Request $request)
{
    App\User::create([

        'name' => ' iqbal dhillon' ,
        'email' => 'csevilleja@digitalocean.com' ,
        'password' => Hash::make('mypassword')

    ]);
}
)


//login a user


//logout a user