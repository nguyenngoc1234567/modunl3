<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ngoc', function () {
    return view('nn');
});
// longin
Route::get('/login', function () {
    return view('login');
});
// register 
Route::get('/register', function () {
    echo '<h1>trang dang ki</h1>';
});

// xulylogin
Route::post('/xu-ly-login', function (Request $request){
 //dump = var_dump;
 //die = die; 
//  dd($request->all());
 $username = $request->username;
 $password = $request->password;
 echo $username . '===== ' . $password;
 

});
//xulyregister 
Route::post('/xu_ly_register', function () {
   
});
//hien thi fom calulation
Route::get('/calulation', function () {
    return view('caculator');
});
//xu ly calulation
Route::post('/xu_ly_calulation', function (Request $request) {
    //in du lieu gui len
    // dd($request->all());
    $product_description = $request->product_description;
    $list_price = $request->list_price;
    $discount_percent = $request->discount_percent;
    $Discount_Amount = (int)$list_price * (int)$discount_percent * 0.1;
    echo $Discount_Amount;
 });

//hiện thi form từ điển 
Route::get('/tudien', function () {
    return view('dich');
});
Route::post('/tudien', function (Request $request) {
    $tudien = $request->input('tudien');
    $tudien = [
        "hello" => "xin chào",
        "love"  => "yêu",
        "book"  => "quyển sách",
        "dog"   => "con chó",
        "cat"   => "con mèo",
        "school"=> "trường học"
    ];
    $searchWord = $_POST["tudien"];
        $flag = 0;
        foreach ($tudien as $key => $value) {
            if ($key == $searchWord) {
                echo  $value;
                echo "<br/>";
                $flag = 1;
                break;
            }
            else if($searchWord == $value){
                echo  $key;
                $flag = 1;
                break;

            }
        }
        if ($flag == 0) {
            echo "Không tìm thấy từ cần tra.";
        }
   
    });