<?php

use App\Http\Controllers\Api\Items\ProductController;
use App\Http\Controllers\Api\Items\ServiceController;
use App\Http\Controllers\Api\OrganizationController;
use App\Http\Controllers\Api\PartnerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Http\Controllers\Api\Documents\CompletionCertificateController;
use App\Http\Controllers\Auth\WorkerController;
use App\Http\Controllers\Api\Documents\PaymentInvoiceController;
use App\Http\Controllers\Api\Main\NewsController;
use App\Http\Controllers\Api\QuestionsController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('/auth')->group(function(){
    Route::post('/login',[LoginController::class,'login']);
    Route::post('/login/egov',[LoginController::class,'loginEgov']);
    Route::post('/register',[RegisterController::class,'register']);
    Route::post('/register/egov',[RegisterController::class,'registerEgov']);
});

Route::prefix('/faq')->group(function() {
    Route::get('/',[QuestionsController::class,'list']);
    Route::get('/{id}',[QuestionsController::class,'getById']);
});

Route::middleware('auth:sanctum')->group(function(){
    Route::prefix('/completion-certificate')->group(function (){
        Route::get('/{organization}',[CompletionCertificateController::class,'index']);
        Route::post('/',[CompletionCertificateController::class,'store']);
    });

    Route::prefix('/partners')->group(function(){
        Route::get('/{organization}',[PartnerController::class,'index']);
        Route::post('/',[PartnerController::class,'store']);
    });

    Route::prefix('/payment-invoice')->group(function (){
        Route::get('/{organization}',[PaymentInvoiceController::class,'index']);
        Route::post('/',[PaymentInvoiceController::class,'store']);
    });

    Route::prefix('/organizations')->group(function(){
        Route::post('/',[OrganizationController::class,'store']);
        Route::get('/',[OrganizationController::class,'index']);
    });

    Route::prefix('/workers/{organization}/')->group(function (){
        Route::post('/register',[WorkerController::class,'register']);
        Route::get('/',[WorkerController::class,'index']);
    });

    Route::prefix('/news')->group(function (){
        Route::get('/',[NewsController::class,'index']);
        Route::get('/{news}',[NewsController::class,'show']);
    });

    Route::prefix('/products')->group(function(){
        Route::get('/{organization}',[ProductController::class,'index']);
        Route::post('/',[ProductController::class,'store']);
    });

    Route::prefix('/services')->group(function(){
        Route::get('/{organization}',[ServiceController::class,'index']);
        Route::post('/',[ServiceController::class,'store']);
    });
});
Route::get('/dimensions',[ProductController::class,'dimensions']);
