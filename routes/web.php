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
    $nome="Mucumbe";
    $idade="29";
    $arr=[10,20,30,40,50];
    $nomes=["Blandino","Junior","Sibone","Mucumbe"];

    return view('welcome', 
    [   'nome'=> $nome,
        'idade'=>$idade,
        'profissao'=>"Eng Informatico",
        'arr'=>$arr,
        'nomes'=>$nomes
    ]);
});

Route::get('/contacto', function () {
    return view('contact');
});

Route::get('/produtos/{id?}', function ($id=null) {
    //$id=0;
    return view('product',['id'=>$id]);
});

Route::get('/produto', function ($id=null) {
    //$id=0;
    $busca=request('search');
    return view('products',['busca'=>$busca]);
});


