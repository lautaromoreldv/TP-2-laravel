<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TituloController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProSkillController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\TrabajoController;
use Spatie\Permission\Models\Role;


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


Route::get('/portfolio/{slug}', function($slug){
    $user = User::with('about')->with('education')->with('features')->with('hago')->with('skill')->with('proskill')->with('proyects')->with('reviews')->with('skill')->with('trabajo')->where('slug', $slug)->first();
    if($user){
        return view('portfolio')->with('user', $user);
    }
    return view('welcome');
});

Route::get('logout-user', UserController::class.'@logout_user')->name('logout-user');

Route::resource('usuario', UserController::class);
Route::resource('skill', SkillController::class);
Route::resource('about', AboutController::class);
Route::resource('titulo', tituloController::class);
Route::resource('proskill', ProSkillController::class);
Route::resource('education', EducationController::class);
Route::resource('trabajo', TrabajoController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


/*Route::group(['middleware' => ['auth:sanctum', 'verified']], function (){
    Route::group(['middleware' => ['role:admin']], function(){

        Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::resource('usuario', UserController::class)->except([
            'show'
        ]);
        
        Route::resource('skill', SkillController::class)->except([
            'show'
        ]);
    }); 

    Route::group(['middleware' => ['role:cliente']], function() {
    
        Route::get('my-portfolio', function(){
    
            return view('my-portfolio');
        })->name('my-portfolio');

        Route::resource('usuario.index', UserController::class)->except([
            'show'
        ]);

        /*Route::get(UserController::class, 'editUser');
        Route::get(UserController::class, 'updateUser');
        Route::get(UserController::class, 'destroyUser');
    });
});*/
