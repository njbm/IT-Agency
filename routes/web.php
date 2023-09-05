<?php
use App\Http\Controllers\ProfileController;
use App\Models\Pharmacy_Categories;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

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



