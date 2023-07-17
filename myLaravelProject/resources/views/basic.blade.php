@php
$name = ["Ali","Manahil","Umar","Farhan","Hania",];
@endphp
<ul>
    @foreach ($name as $n)
    <li>{{$loop->iteration}}-{{$n}}</li>
@endforeach
</ul>
<ol >
    @foreach ($name as $n)
    @if($loop->even)
    <li style="color:red;">{{$n}}</li>
    @elseif($loop->odd)
    <li style="color:green;">{{$n}}</li>
    
    @endif
@endforeach
</ol>