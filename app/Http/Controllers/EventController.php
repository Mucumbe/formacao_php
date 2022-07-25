<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){

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
    }

    public function create(){

        return view('events.create');
    }
}
