<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardProjectController;
use App\Models\Major;
use App\Models\project;
use App\Models\User;
use PharIo\Manifest\Author;

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
    return view('home',[
        'title'=> 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact'
    ]);
});

///manggil halaman project awl
Route::get('/projects', [ProjectController::class,'tampilkan']);

///manggil halaman projects ke dua (dengan slugnya )
Route::get('projects/{project:slug}',[ProjectController::class,'tampilkanDetail']);


//manggil halaman Khusus Major 
Route::get('/majors', function(){        
     return view('majors', [
       'title' => 'Major',
       'majors' => Major::all()
      ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authanticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

// route untuk memberikan function store dari RegisterController kepada /register yang mana methodnya POST
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', [DashboardProjectController::class, 'index'])->middleware('auth');

Route::get('/dashboard', function() {
    return view('dashboard.index');
    })->middleware('auth');

Route::resource('/dashboard/projects', DashboardProjectController::class)->middleware('auth');

Route::get('/dashboard/projects/checkSlug', [DashboardProjectController::class,'checkSlug'])->middleware('auth');

//manggil halaman project Khusus major

Route::get('majors/{major:slug}', function (Major $major){
    return view('projects', [
        'title' => "Project in : $major->name",
        'projects' => $major->projects->load('major', 'user'),
    ]);
});


///manggil halaman

Route::get('/authors/{author:username}', function(User $author){
    return view('projects', [
        'title' => "Project By Author : $author->name",
        'projects' => $author->project->load('major', 'user'),
    ]);
});