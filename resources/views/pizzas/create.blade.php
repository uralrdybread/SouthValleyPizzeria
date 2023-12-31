@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza container">
    <h1>Create a new pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name" class="">Your name:</label>
        <input type="text" id="name" name="name" class="">
        <label for="type">Choose pizza type: </label>
        <select name="type" id="type" class="dropdown">
            <option value="margherita">Margherita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="base">Choose base type: </label>
        <select name="base" id="base">      
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & crispy</option>
            <option value="thick">Thick</option>
        </select>
        <fieldset>
            <label>Extra toppings:</label><br>
            <input class="form-check-input" type="checkbox" name="toppings[]" value="mushrooms"> Mushrooms<br />
            <input class="form-check-input" type="checkbox" name="toppings[]" value="peppers"> Peppers<br />
            <input class="form-check-input" type="checkbox" name="toppings[]" value="garlic"> Garlic<br />
            <input class="form-check-input" type="checkbox" name="toppings[]" value="olives"> Olives<br />

        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection
