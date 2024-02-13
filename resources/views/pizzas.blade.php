@extends('layout.layout')

@section("content")
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="content">
        <img src="/img/img.jpg" alt="" width="50">
        <div class="title m-b-md">
            Pizza List
        </div>
        @foreach($pizzas as $pizza)
        <p>
        {{$loop->index}} {{ $pizza["type"]}} - {{ $pizza["base"]}} - {{ $pizza["price"]}}
        </p>
        @endforeach
    </div>
</div>
@endsection

