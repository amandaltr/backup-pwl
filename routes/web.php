<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\PostingController;
use App\Http\Controllers\UserController;

// //Route::get('/post/{nomor}', [PostingController::class, 'index']);
// Route::resource('/', UserController::class);
 //Route::resource('/akun', UserController::class, 'index');
//  Route::resource('/backend',PostingController::class)->middleware('auth');
// use App\Http\Controllers\akun;

// route::get('/', [PostingController::class,'utama']);



// Route::resource('/latihan/{create}', akun::class);
// Route::resource('/edit/{$id}', akun::class);
// Route::resource('/latihan/delete/{$id}', akun::class, );


// Route::get('/', function () {
//     return view('index');
// });

// use App\Http\Controllers\QuizController;
// rOUTE::GET('/Amanda',[QuizController::class, 'index']);
// Route::get('/tampil', function () {
//     $title = "SBMPTN";
//     $penulis = "John Doe";
//     return view('website.tampil', compact('title', 'penulis'));
// });

// Route::get('/beranda', function () {
//     return view('landing');
// });
// Route::get('/article', function () {
//     return view('articles');
// });
// Route::get('/articles/{article}', function ($slug) {
//     $path = __DIR__ . "/../resources/articles/{$slug}.html";
//     if (! file_exists($path)) {
//         //abort(404); 
//         return redirect('/');
//     }
//     $article = file_get_contents($path);

//     return view('article', [
//         'article' => $article
//     ]);
// });
<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome-bc');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require _DIR_.'/auth.php';