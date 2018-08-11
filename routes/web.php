<?php

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('welcome');
});


Route::get('/test/part1/{name?}', function ($name = '홍길동') {
    return view('test/part1', [
		'name'=>$name,
		'script'=>'<script>alert(\'hi\')</script>',
		'array'=>array('사과','배','바나나','토마토')
		]
	);
});


Route::get('/test/part2/{name?}', function ($name = '홍길동') {
    return view('/test/part2', [
		'name'=>$name,
		'script'=>'<script>alert(\'hi\')</script>',
		'array'=>array('사과','배','바나나','토마토')
		]
	);
});
