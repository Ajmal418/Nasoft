<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;

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
//     return view('checkout');
// });
Route::GET('/view',[CheckoutController::class, 'view' ]);
Route::GET('/upsell_1',[CheckoutController::class, 'upsell_1' ]);
Route::GET('/upsell_2',[CheckoutController::class, 'upsell_2' ]);
Route::GET('/orderlist',[CheckoutController::class, 'orderlist' ]);
Route::POST('/memberinfo',[CheckoutController::class, 'task_sub' ]);
Route::POST('/upsell_1add',[CheckoutController::class, 'upsell' ]);
Route::POST('/upsell_2add',[CheckoutController::class, 'upsell' ]);
