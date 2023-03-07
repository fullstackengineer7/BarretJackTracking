<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\CampaignController;

Route::get('/{path?}', function () {
    return view('admin/auth/sign-in');
    // return view('admin/home');
})->where('path', '^(?!api).*?');

Route::group(['prefix' => 'api'], function () {

    Route::post('/admin-login', [AuthController::class, 'adminLogin'])->name('admin.login');
    Route::get('/sign-in', [AuthController::class, 'showSignin'])->name('sign-in-page');
    Route::get('/sign-up', [AuthController::class, 'showSignup'])->name('sign-up-page');
    Route::post('/sign-up', [AuthController::class, 'signup'])->name('sign-up');
    Route::get('/admin/newlead', [LeadController::class, 'create'])->name('admin.create-new-lead');
    Route::get('/admin/newcampaign', [CampaignController::class, 'create'])->name('admin.create-new-campaign');
    Route::get('/admin/showcampaign', [CampaignController::class, 'show'])->name('admin.show-campaign');
    Route::get('/admin/campaign-detail', [CampaignController::class, 'detail'])->name('admin.campaign-detail');
    
    // Route::get('/admin-signup', [AuthController::class, 'showAdminRegister'])->name('admin.signup');
    // Route::post('/admin-register', [AuthController::class, 'adminRegister'])->name('admin.register');
    // Route::get('/admin-login-page', [AuthController::class, 'showAdminLogin'])->name('admin.login.page');


    // Route::middleware(['auth', 'is-admin'])->group(function () {   
    //     Route::get('/signout', [AuthController::class, 'signout'])->name('user.signout');
       
    //     Route::get('/add-product',    [ProductController::class, 'addProduct'])->name('admin.add-product');
    //     Route::post('/create-product',    [ProductController::class, 'createProduct'])->name('admin.create-product');
    //     Route::get('/view-products',  [ProductController::class, 'viewProducts'])->name('admin.view-products');
    //     Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('admin.edit-product');
    //     Route::post('/update-product', [ProductController::class, 'updateProduct'])->name('admin.update-product');
    //     Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('admin.delete-product');
    //     Route::get('/view-license/{id}', [ProductController::class, 'viewLicense'])->name('admin.view-license');


    //     Route::get('/add-license', [LicenseController::class, 'addLicense'])->name('admin.add-license');
    //     Route::post('/create-license', [LicenseController::class, 'createLicense'])->name('admin.create-license');
    //     Route::get('/view-all-licenses', [LicenseController::class, 'viewAllLicenses'])->name('admin.view-all-licenses');
    //     Route::get('/send-request', [LicenseController::class, 'sendRequest'])->name('admin.send-request');
    //     Route::get('/delete-license/{id}', [LicenseController::class, 'deleteLicense'])->name('admin.delete-license');
    //     Route::get('/edit-license/{id}', [LicenseController::class, 'editLicense'])->name('admin.edit-license');
    //     Route::post('/update-license', [LicenseController::class, 'updateLicense'])->name('admin.update-license');

    //     Route::get('/add-user',    [UserController::class, 'addUser'])->name('admin.add-user');
    //     Route::post('/create-user',    [UserController::class, 'createUser'])->name('admin.user-create');
    //     Route::get('/view-users',  [UserController::class, 'viewUsers'])->name('admin.view-users');
    //     Route::get('/edit-user/{id}',   [UserController::class, 'editUser'])->name('admin.edit-user');
    //     Route::get('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('admin.delete-user');
    //     Route::get('/user-roles',  [UserController::class, 'userRoles'])->name('admin.user-roles');
    //     Route::post('/update-user',  [UserController::class, 'updateUser'])->name('admin.update-user');

    //     Route::get('/show-request',  [RequestController::class, 'showPage'])->name('admin.show-request');

    // });
        // Route::post('/license-request',  [RequestController::class, 'licenseRequest'])->name('admin.license-request');
});