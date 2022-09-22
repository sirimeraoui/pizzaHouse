<?php

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

Route::get('/pizzas', function () {
    //get data from db
    $pizzas = [
        ['type'=>'Algerian Pizza','texture'=>'Thin Crust','price'=>10],
        ['type'=>'Mediteranean','texture'=>'Wavy Crust','price'=>16],
        ['type'=>'Atlassian Pizza','texture'=>'Rocky Crust','price'=>15],
        ['type'=>'Sahara Pizza','texture'=>'Sandy Crust','price'=>10],
];
     return view('pizzas',
     [
        'pizzas' => $pizzas,
        'name'=> request('name'),
        'age'=>request('age')
    ]);
});

Route::get('/pizzas/{id}', function ($id) {
    //get particular pizza  $id from db
     return view('details',['id' => $id,]);
});