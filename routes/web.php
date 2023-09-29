<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Car;
use App\Models\Product;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});


// Route::get('/nice', function () {
//     $user=User::find(2);
//     if($user->role->name=='admin'){
//         echo "you're admin";
//     }
// });


// Route::get('/insert',function(){
//     // User::create(['name'=>'user1','email'=>'user1@gmail.com','password'=>'user1_']);
//     // User::create(['name'=>'user2','email'=>'user2@gmail.com','password'=>'user2_']);
//     // User::create(['name'=>'user3','email'=>'user3@gmail.com','password'=>'user3_']);
    
//     // Product::create(['name'=>'tea','price'=>'12.5','user_id'=>'1']);
//     // Product::create(['name'=>'icetea','price'=>'16.5','user_id'=>'1']);
//     // Product::create(['name'=>'coffe','price'=>'14.5','user_id'=>'2']);
//     // Product::create(['name'=>'icecoffe','price'=>'17.5','user_id'=>'2']);

//     // Role::create(['name'=>'user']);
//     // Role::create(['name'=>'admin']);
// });
//Route::get('/crud','App\Http\Controllers\ProductController@index');

Route::prefix('admin')->middleware(['auth','isadmin'])->group(function(){
    Route::resource('product', ProductController::class);
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/blog','App\Http\Controllers\UserController@index');
Route::get('/single',function(){
    return view('single');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

