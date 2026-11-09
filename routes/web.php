<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

// Topページ（未ログイン時はログイン画面へ redirect、または welcome）
Route::get('/', function () {
    return view('welcome');
});

// ユーザー登録画面
Route::get('/register', function () {
    return view('auth.register');
});

// ユーザー登録処理（登録後にダッシュボードへ）
Route::post('/register', function (Request $request) {
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    Auth::login($user);

    return redirect('/dashboard');
});

// ログイン画面
Route::get('/login', function () {
    return view('auth.login');
});

// ログイン処理
Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }

    return back()->withErrors([
        'email' => 'ログイン情報が一致しません。',
    ]);
});

// ログイン済みのみアクセスできるダッシュボード
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth']);

// ログアウト処理（ログアウト後はログイン画面へ）
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
});
