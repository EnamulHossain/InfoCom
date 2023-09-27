<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangePass;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\NewConnectionController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ReconnectionController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Models\Director;
use App\Models\User;
use App\Models\Multipic;
use App\Models\Package;
use App\Models\Slider;
use Illuminate\Support\Facades\DB;


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');

Route::get('/', function () {
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->first();
    $images = Multipic::all();
    $slider = Slider::all();
    $packages = Package::orderBy('order')->take(6)->get();
    return view('front/index', compact('brands', 'abouts', 'images','slider','packages'));
});

Route::get('/front-board', [HomeController::class, 'Directors'])->name('f.board');


Route::get('/front-packages', function () {
    return view("front.packages");
})->name('f.packages');

Route::get('/front-blog', function () {
    return view("front.blog");
})->name('f.blog');
Route::get('/front-contact', function () {
    return view("front.contact-us");
})->name('f.contact');
Route::get('/front-business', function () {
    return view("front.business");
})->name('f.business');

Route::get('/front-support', function () {
    return view("front.support");
})->name('f.support');
Route::get('/front-about', function () {
    return view("front.about_us");
})->name('f.about-us');
Route::get('/front-pay-bill', function () {
    return view("front.paybill");
})->name('f.paybill');

Route::get('/front-board', function () {
    return view("front.about-sub.board");
})->name('f.board');

Route::get('/front-management', function () {
    return view("front.about-sub.management");
})->name('f.management');

Route::get('/team', function () {
    return view("front.about-sub.team");
})->name('f.team');

Route::get('/home', function () {
    echo " This is Home page ";
});
Route::get('/about', function () {
    return view('about');
});


Route::get('/contactasd-asdf-asdfsad', [ContactController::class, 'index'])->name('ariyan');

// Category Controller 
Route::get('/category/all', [CategoryController::class, 'AllCat'])->name('all.category');
Route::post('/category/add', [CategoryController::class, 'AddCat'])->name('store.category');

Route::get('/category/edit/{id}', [CategoryController::class, 'Edit']);
Route::post('/category/update/{id}', [CategoryController::class, 'Update']);
Route::get('/softdelete/category/{id}', [CategoryController::class, 'SoftDelete']);

Route::get('/category/restore/{id}', [CategoryController::class, 'Restore']);
Route::get('/pdelete/category/{id}', [CategoryController::class, 'Pdelete']);

/// For Brand Route
Route::get('/brand/all', [BrandController::class, 'AllBrand'])->name('all.brand');
Route::post('/brand/add', [BrandController::class, 'StoreBrand'])->name('store.brand');
Route::get('/brand/edit/{id}', [BrandController::class, 'Edit']);
Route::post('/brand/update/{id}', [BrandController::class, 'Update']);
Route::get('/brand/delete/{id}', [BrandController::class, 'Delete']);


// Multi Image Route
Route::get('/multi/image', [BrandController::class, 'Multpic'])->name('multi.image');
Route::post('/multi/add', [BrandController::class, 'StoreImg'])->name('store.image');

// Admin ALL Route
Route::get('/home/slider', [HomeController::class, 'HomeSlider'])->name('home.slider');
Route::get('/add/slider', [HomeController::class, 'AddSlider'])->name('add.slider');
Route::post('/store/slider', [HomeController::class, 'StoreSlider'])->name('store.slider');
Route::get('/slider/edit/{id}', [HomeController::class, 'EditSlider'])->name('edit.slider');
Route::put('/slider/update/{id}', [HomeController::class, 'UpdateSlider'])->name('update.slider');
Route::get('/slider/delete/{id}', [HomeController::class, 'DeleteSlider'])->name('delete.slider');


// Slider


// Home About All Route
Route::get('/home/About', [AboutController::class, 'HomeAbout'])->name('home.about');
Route::get('/add/About', [AboutController::class, 'AddAbout'])->name('add.about');
Route::post('/store/About', [AboutController::class, 'StoreAbout'])->name('store.about');
Route::get('/about/edit/{id}', [AboutController::class, 'EditAbout']);
Route::post('/update/homeabout/{id}', [AboutController::class, 'UpdateAbout']);
Route::get('/about/delete/{id}', [AboutController::class, 'DeleteAbout']);

//Portfolio Page Route
Route::get('/portfolio', [AboutController::class, 'Portfolio'])->name('portfolio');




// Amdin Contact Page Route 
Route::get('/admin/contact', [ContactController::class, 'AdminContact'])->name('admin.contact');
Route::get('/admin/add/contact', [ContactController::class, 'AdminAddContact'])->name('add.contact');
Route::post('/admin/store/contact', [ContactController::class, 'AdminStoreContact'])->name('store.contact');
Route::get('/admin/message', [ContactController::class, 'AdminMessage'])->name('admin.message');
Route::get('/message/delete/{id}', [ContactController::class, 'messagedelete'])->name('message.delete');




/// Home Contact Page Route 
// Route::get('/contact', [ContactController::class, 'Contact'])->name('contact');
Route::post('/contact/form', [ContactController::class, 'ContactForm'])->name('contact.form');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    // $users = User::all();
    // $users = DB::table('users')->get();

    return view('admin.index');
})->name('dashboard');
Route::get('/user/logout', [BrandController::class, 'Logout'])->name('user.logout');


/// Chanage Password and user Profile Route 
Route::get('/user/password', [ChangePass::class, 'CPassword'])->name('change.password');
Route::post('/password/update', [ChangePass::class, 'UpdatePassword'])->name('password.update');

// User Profile 
Route::get('/user/profile', [ChangePass::class, 'PUpdate'])->name('profile.update');
Route::post('/user/profile/update', [ChangePass::class, 'UpdateProfile'])->name('update.user.profile');



// Reconnection
Route::resource('reconnections', ReconnectionController::class);
Route::resource('new-connections', NewConnectionController::class);
Route::resource('client', ClientController::class);
Route::resource('package', PackageController::class);


Route::resource('admin/team', TeamController::class);
Route::resource('admin/management', ManagementController::class);
Route::resource('admin/directors', DirectorController::class);

