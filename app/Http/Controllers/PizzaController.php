<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        
    $pizzas = [
        [
            "type" => "Hawaiian", 
            "base"=>"cheesy crust",
            "price" => 12,
        ],
        [
            "type" => "Peppironi", 
            "base"=>"garlic crust",
            "price" => 10,
        ],
        [
            "type" => "Volcano", 
            "base"=>"thin & crispy crust",
            "price" => 20,
        ],
            
    ];
   return view('pizzas', [
    "pizzas" => $pizzas
    ]);
  

    }

    public function show($id)
    {
        return view('details',['id'=>$id]);
    }
}
