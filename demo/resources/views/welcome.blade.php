{{"Hello From blade template "}}

{{20 + 20}}

{!! "<h2>This is heading two in blade template</h2>" !!}

@php
    $name = "Ram kumar";
    $village = "Maniyari";
    $current_Location = "Noida";
    $names = ['Ram',"shyam","mohan"];
@endphp

@foreach ($names as $value )
    <h4>Name is {{$value}} </h4>
@endforeach

{{$name}}
<h3>Your village is  {{$village}} </h3>
<h2>Current Location {{$current_Location}} </h2>

@if($name)
    {{"Name is ". $name }}

@endif

@for ($i = 0; $i < 10; $i++)
    <h3>The Current value is {{$i}} </h3>
@endfor