<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

$middleware = ['auth','throttle:120,1'];


Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('frontend.home');
Route::get('/about-us', [\App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('frontend.about');
Route::get('/news/{page?}', [\App\Http\Controllers\Frontend\NewsController::class, 'index'])->name('frontend.news');
Route::get('/news/load-more', [\App\Http\Controllers\Frontend\NewsController::class, 'loadMore'])->name('frontend.news.loadmore');
Route::get('/contact-us', [\App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('frontend.contact');
Route::get('/webseries', [\App\Http\Controllers\Frontend\WebseriesController::class, 'index'])->name('frontend.webseries');
Route::get('/movies', [\App\Http\Controllers\Frontend\MovieController::class, 'index'])->name('frontend.movies');

if(config('constants.MOBILE_OTP_LOGIN') || config('constants.EMAIL_OTP_LOGIN')){
    array_push($middleware,'twofactor');
}

Route::group(['middleware' => $middleware], function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'root'])->name('root');

    Route::get('verify/resend', [\App\Http\Controllers\Auth\TwoFactorController::class, 'resend'])->name('verify.resend');
    Route::resource('verify', \App\Http\Controllers\Auth\TwoFactorController::class)->only(['index', 'store']);


    //Update User Details
    Route::post('/update-profile/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'updateProfile'])->name('updateProfile');
    Route::post('/update-password/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'updatePassword'])->name('updatePassword');

    // Role Controller
    Route::get('/status/{id}', [\App\Http\Controllers\Admin\RoleController::class, 'changeStatus'])->name('role.status');
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);

    // Permission Controller
    Route::get('/status/{id}', [\App\Http\Controllers\Admin\PermissionController::class, 'changeStatus'])->name('permission.status');
    Route::resource('permission', \App\Http\Controllers\Admin\PermissionController::class);

    // User Controller Route
    Route::get('/usermanagement/status/{id}', [\App\Http\Controllers\Admin\UserController::class, 'changeStatus'])->name('usermanagements.status');
    Route::resource('usermanagements', \App\Http\Controllers\Admin\UserController::class);

    // User Profile Controller
    Route::get('/profile', [\App\Http\Controllers\Admin\UserProfileController::class, 'index'])->name('profile.index');
    Route::post('/change/password', [\App\Http\Controllers\Admin\UserProfileController::class, 'changePassword'])->name('change.password');
    Route::resource('profiles', \App\Http\Controllers\Admin\UserProfileController::class);
    
    //News Controller
    Route::get('/admin/news/status/{id}', [\App\Http\Controllers\Admin\NewsController::class, 'changeStatus'])->name('news.status');
    Route::resource('admin/news',\App\Http\Controllers\Admin\NewsController::class);

    //Movie Controller
    Route::get('/admin/movie/status/{id}', [\App\Http\Controllers\Admin\MovieController::class, 'changeStatus'])->name('movie.status');
    Route::post('/admin/movie/delete/{movieId}/{imageName}/{ext}', [\App\Http\Controllers\Admin\MovieController::class, 'deleteImage'])->name('movie.delete.image');
    Route::resource('admin/movie',\App\Http\Controllers\Admin\MovieController::class);

    //Webseries Controller
    Route::get('/admin/webseries/status/{id}', [\App\Http\Controllers\Admin\WebseriesController::class, 'changeStatus'])->name('webseries.status');
    Route::post('/admin/webseries/delete/{webseriesId}/{imageName}/{ext}', [\App\Http\Controllers\Admin\WebseriesController::class, 'deleteImage'])->name('webseries.delete.image');
    Route::resource('admin/webseries',\App\Http\Controllers\Admin\WebseriesController::class);

    // Email Template Controller
    Route::get('email-templates', [App\Http\Controllers\Admin\MessageTemplateController::class,'emailIndex'])->name('email.templates');
    Route::post('email-templates', [App\Http\Controllers\Admin\MessageTemplateController::class,'emailStore'])->name('email.templates.store');
    Route::get('sms-templates', [App\Http\Controllers\Admin\MessageTemplateController::class,'SMSIndex'])->name('sms.templates');
    Route::post('sms-templates', [App\Http\Controllers\Admin\MessageTemplateController::class,'SMSStore'])->name('sms.templates.store');
    Route::get('whatsapp-templates', [App\Http\Controllers\Admin\MessageTemplateController::class,'WhatsAppIndex'])->name('whatsapp.templates');
    Route::post('whatsapp-templates', [App\Http\Controllers\Admin\MessageTemplateController::class,'WhatsAppStore'])->name('whatsapp.templates.store');

});

Route::get('/form-custom-field',function (){
 return view('custom-form-field');
});
