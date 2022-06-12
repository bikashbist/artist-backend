<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtistFormcontroller;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProvienceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ImageCoverController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\UserController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/artist-detail-artist/{id}', [HomeController::class, 'detailArtist']);
Route::get('/artist-form', [HomeController::class, 'detailForm']);
Route::post('/artist-form-store', [HomeController::class, 'artistStore']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add-category', [AdminController::class, 'addCategory']);
Route::post('/category-store', [AdminController::class, 'categoryStore']);
Route::get('/category-edit/{id}', [AdminController::class, 'editCategory']);
Route::put('/updateCategory/{id}', [AdminController::class, 'categoryupdate']);
Route::get('/artist-detail/{id}', [AdminController::class, 'artistDetail']);
Route::get('/artist-mail/{id}', [AdminController::class, 'artistMail']);
Route::post('/add-artist', [AdminController::class, 'addArtist']);
Route::get('/artist-list', [AdminController::class, 'listArtist']);
Route::get('/user-artist-delete/{id}', [AdminController::class, 'DeleteArtist']);

Route::get('/new-artist-detail/{id}', [AdminController::class, 'NewartistDetail']);


Route::resource('gallery', GalleryController::class);
Route::resource('address', ProvienceController::class);
Route::resource('Artist-profile', ProfileController::class);
Route::resource('Artist-cover', ImageCoverController::class);
Route::get('/artist-edit/{id}', [ArtistController::class, 'editArtist']);
Route::post('/update-detail/{id}', [ArtistController::class, 'updateDetail']);
Route::post('/user-artist', [ArtistController::class, 'userArtist']);


Route::get('/new-artist-detail/{id}', [AdminController::class, 'NewartistDetail']);
//send mail
Route::POST('/sendmail/{id}', [ArtistController::class, 'sendmail']);


// user controller
Route::get('/artists', [UserController::class, 'index'])->name('artists.index');
Route::get('/search', [UserController::class, 'search']);






