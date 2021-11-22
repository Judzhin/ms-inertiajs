<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    // return view('welcome');
    // return inertia('Welcome');
    return Inertia::render('Home', [
        'name' => 'Judzhin Miles',
        'frameworks'  => [
            'Laravel' , 'Vue', 'Inertia'
        ]
    ]);
});

Route::get('/users', function () {
    // return view('welcome');
    // return inertia('Welcome');
    // return User::paginate(10);

    return Inertia::render('Users', [
        // 'users' => User::all()->map(fn($user) => [
        //'users' => User::paginate(10)->map(fn($user) => [
        //    'id' => $user->id,
        //    'name' => $user->name
        //]),
        'users' => User::paginate(10),
        'time' => now()->toTimeString()
    ]);
});

Route::get('/settings', function () {
    // return view('welcome');
    // return inertia('Welcome');
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
    // dd('logging the user out');
    dd(request('foo'));
});
