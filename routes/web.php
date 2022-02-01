<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

Route::get('membersDisplay', 'MembersController@membersList');

Route::get('members', 'MembersController@membersList');

// $router->get('/members', function () use ($router) {
//     $members = App\Models\Member::all()->toArray();
//     foreach($members as $member){

//     }
//     return response()->json(['error' => false, 'data' => $members]);
// });

