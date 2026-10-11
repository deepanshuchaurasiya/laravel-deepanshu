@include('layout.header')
hello my first project 
@include('layout.footer1')

@php 
    $name="Deepanshu";
    @endphp
    @if($name=='Deepanshu1')
        {{$name}}
@elseif($name=='Sita ma')
    {{$name}}
@else
    No Record Found
@endif

@unless ($name!='Deepanshu')
    Hello world </br>
@isset($name)
    hello Isset</br>
@empty($record)
    hello Empty
@endempty

{{-- @switch($type)
    @case(1)
        
        @break
    @case(2)
        
        @break
    @default
        
@endswitch

@endforeach
@for ($i = 0;$i < $count; $i++);
@endfor --}} 

@php
$collection=[];
@endphp
@forelse ($collection as $item)
    {{$item}}
@emptyforelse

@if(empty($collection))
    no record Found
@else
    @foreach ($collection as $item)
        {{$item}}
@empty
<br>No Record Found
@endforelse