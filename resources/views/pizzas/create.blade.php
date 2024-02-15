@extends('layout.layout')

@section("content")
<div class="wrapper create-pizza">
    <h1>Create a new Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">name:</label>
        <input type="text" id="name" name="name">
        <label for="type">type:</label>
        <select name="type" id="type">
        <option value="Margarita">Margarita</option>
        <option value="Hawaiian">Hawaiian</option>
        <option value="Vege Supreme">Vege Supreme</option>
        <option value="Volcano">Volcano</option>
        </select>
        <label for="base">base:</label>
        <select name="base" id="type">
        <option value="Cheesy crust">Cheesy crust</option>
        <option value="Garlic crust">Garlic crust</option>
        <option value="Thin & crispy">Thin and crispy</option>
        <option value="Thick">Thick</option>
        </select>
        <fieldset>
            <label>toppings</label><br>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers <br>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic <br>
        </fieldset>
        <input type="submit" value="order">
    </form>
</div>
@endsection