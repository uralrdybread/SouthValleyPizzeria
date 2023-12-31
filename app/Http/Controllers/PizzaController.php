<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{




    public function index() {

        // $pizzas = Pizza::orderBy('name', 'desc')->get();
        $pizzas = Pizza::where('type', 'hawaiian')->get();
        $pizzas = Pizza::latest()->get();
    
        return view('pizzas.index', [
            'pizzas' => $pizzas,
        ]);
    }



    public function show($id) {

        $pizza = Pizza::findorFail($id);

        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create() {
        return view ('pizzas.create');
    }

    public function store() {
        
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        

        $pizza->save();


        return redirect('/')->with('mssg', "Thank you for your order, we'll take it from here!");
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
