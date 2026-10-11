<div>
    @php
    $a=[1,2,4,5];
    print_r($data);
    @endphp
    @foreach($data as $item)
    <b>{{$item}}</b>
    @endforeach
</div>