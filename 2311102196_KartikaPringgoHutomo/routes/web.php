<?php

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Achievement;

Route::get('/', function () {
    return view('welcome', [
        'profile' => Profile::first(),
        'skills' => Skill::all(),
        'achievements' => Achievement::all()
    ]);

});

Route::post('/admin', function () {
    if(request('password') == 'admin123'){
        session(['login' => true]);
        return redirect('/dashboard');
    }
    return back()->with('success', 'Password salah');

});

Route::post('/admin', function () {
    if(request('password') == 'admin123'){
        return redirect('/dashboard');
    }
    return back();
});

Route::get('/dashboard', function () {
    if(!session('login')){
        return redirect('/admin');
    }

    return app(AdminController::class)->index();
});

Route::post('/profile', [AdminController::class, 'updateProfile']);
Route::post('/skill', [AdminController::class, 'addSkill']);
Route::get('/skill/delete/{id}', [AdminController::class, 'deleteSkill']);
Route::post('/achievement', [AdminController::class, 'addAchievement']);
Route::get('/achievement/delete/{id}', [AdminController::class, 'deleteAchievement']);
Route::get('/logout', function () {
    session()->flush();
    return redirect('/');
});