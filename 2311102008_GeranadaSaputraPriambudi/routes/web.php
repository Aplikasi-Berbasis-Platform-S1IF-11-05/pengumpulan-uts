use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [PortfolioController::class, 'index']);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (\Illuminate\Http\Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/admin');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
});

Route::post('/logout', function (\Illuminate\Http\Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('admin/personal-info', \App\Http\Controllers\Admin\PersonalInfoController::class)->names([
        'index' => 'admin.personal-info.index',
        'create' => 'admin.personal-info.create',
        'store' => 'admin.personal-info.store',
        'show' => 'admin.personal-info.show',
        'edit' => 'admin.personal-info.edit',
        'update' => 'admin.personal-info.update',
        'destroy' => 'admin.personal-info.destroy',
    ]);

    Route::resource('admin/skills', \App\Http\Controllers\Admin\SkillController::class)->names([
        'index' => 'admin.skills.index',
        'create' => 'admin.skills.create',
        'store' => 'admin.skills.store',
        'show' => 'admin.skills.show',
        'edit' => 'admin.skills.edit',
        'update' => 'admin.skills.update',
        'destroy' => 'admin.skills.destroy',
    ]);

    Route::resource('admin/achievements', \App\Http\Controllers\Admin\AchievementController::class)->names([
        'index' => 'admin.achievements.index',
        'create' => 'admin.achievements.create',
        'store' => 'admin.achievements.store',
        'show' => 'admin.achievements.show',
        'edit' => 'admin.achievements.edit',
        'update' => 'admin.achievements.update',
        'destroy' => 'admin.achievements.destroy',
    ]);
});
