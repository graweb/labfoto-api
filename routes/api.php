<?php

use App\Http\Controllers\AdditionalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//LOGIN
Route::post('/login', [AuthController::class, 'login']);

//CHECK TOKEN
Route::post('/check_token', [AuthController::class, 'checkToken']);

//ROUTES
Route::group(['middleware' => ['auth:sanctum']], function () {

    //ENTERPRISES
    Route::resource('/enterprises', EnterpriseController::class)->only('index', 'store', 'show', 'update', 'destroy');

    //PACKAGES
    Route::resource('/packages', PackageController::class)->only('index', 'store', 'show', 'update', 'destroy');

    //ADDITIONALS
    Route::resource('/additionals', AdditionalController::class)->only('index', 'store', 'show', 'update', 'destroy');

    //CUSTOMERS
    Route::resource('/customers', CustomerController::class)->only('index', 'store', 'show', 'update', 'destroy');

    //CONTRACTS
    Route::resource('/contracts', ContractController::class)->only('index', 'store', 'show', 'update', 'destroy');

    //USERS
    Route::resource('/users', UserController::class)->only('index', 'store', 'show', 'update', 'destroy');

    //EMAIL
    Route::post('/send_contract_by_email', [EmailController::class, 'sendContractByEmail']);

    //LOGOUT
    Route::post('/logout', [AuthController::class, 'logout']);
});

//CUSTOMER CONTRACT
Route::get('/contract_customer/{id}', [PdfController::class, 'contractCustomer']);
Route::get('/contract_generate/{id}/{signed}', [PdfController::class, 'contractGenerate']);
Route::post('/store_new_customer', [CustomerController::class, 'storeNewCustomer']);
Route::get('/img_background', [PdfController::class, 'imgBackground']);
