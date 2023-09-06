<?php
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Pharmacy_Categories;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/pharmacy_category',[Pharmacy_Categories::class,'categoryView'])->name('pharmacy_category');

Route::get('/rakib',function(){
    dd(app());
});

require __DIR__.'/auth.php';


//frontend

// Route::get('/index', [HomeController::class, 'index'])->name('frontend.index');
Route::get('/', [HomeController::class, 'index'])->name('frontend.index');
Route::get('/about', [HomeController::class, 'about'])->name('frontend.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('frontend.contact');
Route::get('/services', [HomeController::class, 'service'])->name('frontend.services');
Route::get('/project', [HomeController::class, 'project'])->name('frontend.project');
Route::get('/blog', [HomeController::class, 'blog'])->name('frontend.blog');
Route::get('/technology', [HomeController::class, 'technology'])->name('frontend.technology');


Route::get('/service_view', [HomeController::class, 'service_view'])->name('frontend.servicesView');


// Route::get('/user_login', [HomeController::class, 'login'])->name('frontend.login');
// Route::get('/user_register', [HomeController::class, 'register'])->name('frontend.register');





