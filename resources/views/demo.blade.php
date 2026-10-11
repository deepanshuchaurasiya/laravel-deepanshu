@php
    $arr = ['name'=>'vishal','age'=>22,'class'=>12];
@endphp
@foreach ($arr as $item)
    {{-- {{$loop->first}} --}}
    {{-- {{$loop->last}} --}}
    {{-- {{$loop->index}} --}}
    {{-- {{$loop->iteration}} --}}
    {{$loop->parent}}
    <b>{{$item}}</b></br>
@endforeach
{{-- <b @class(['p-4','font-bold'=>true])@style(
    )></b> --}}
{{-- @includeWhen(true,'layout.header') --}}
@include('hello',['data'=>'Demo Page'])