<?php

use App\Models\User;
use Illuminate\Http\Request;
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
        'frameworks' => [
            'Laravel', 'Vue', 'Inertia'
        ]
    ]);
});

Route::get('/users', function (Request $request) {
    // return view('welcome');
    // return inertia('Welcome');
    // return User::paginate(10);

    return Inertia::render('Users/Index', [
        // 'users' => User::all()->map(fn($user) => [
        // 'users' => User::paginate(10)->map(fn($user) => [
        //     'id' => $user->id,
        //     'name' => $user->name
        // ]),
        'users' => User::query()
            // ->when($request->input('search'), function ($query, $search) {
            ->when($request->input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString()
            ->through(fn($user) => [
                'id' => $user->id,
                'name' => $user->name
            ]),
        'time' => now()->toTimeString(),
        'filters' => $request->only(['search'])
    ]);
});

Route::get('/users/create', function (Request $request) {
    return Inertia::render('Users/Create', [
    ]);
});

Route::post('/users', function (Request $request) {

    $attributes = $request->validate([
        'name' => 'required',
        'email' => ['required', 'email'],
        'password' => 'required',
    ]);

    $user = new User($attributes);
    $user->save();

    return redirect('/users');
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
