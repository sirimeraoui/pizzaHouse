@extends('layouts.layout')


@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
         <div> 
            <h1>Pizzas</h1>
         <br/>
         <p>{{$name}}</p>
         <p>{{$age}}</p>
         @foreach($pizzas as $pizza)
           <p>{{$loop->index}} - {{$pizza['type']}}</p>
           @if($loop->first)
             <span> - Most popular</span>
            @elseif($loop->last)
             <span> - Pizza House franchise</span>
            @endif
         @endforeach 
        </div>
        </div>
@endsection