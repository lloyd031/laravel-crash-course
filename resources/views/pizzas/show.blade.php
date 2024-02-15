@extends('layout.layout')

@section("content")
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="content">
        <div class="title m-b-md">
         <h1>Order from {{$pizza->name}}</h1> <br>
         - {{$pizza->type}} <br>- {{$pizza->base}}
        </div>
        <p>toppings:</p>
        <ul>
            @foreach($pizza->toppings as $topping)
                <li>{{$topping}}</li>
            @endforeach
        </ul>
    </div>
    <form action="/pizzas/{{$pizza->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button>complete order</button>
    </form>
</div>
<a href="/pizzas">Back</a>
@endsection

