<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function view(){
           $nome = "Halisson";
            $idade = 25;
            $profissao = "Programador";
        
            $arr = [10,20,30,40,50];
        
            $nomes = ["Reiner", "Annie", "Berthold", "Giliard", "Zeke"];
        
            return view('welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'profissao' => $profissao,
                'arr' => $arr,
                'nomes' => $nomes
            ]);
        
    }

    public function create(){
        return view('events.create');

    }
}
