<link rel="stylesheet" href="../css/drop.css">

@extends('template')

@section('title','InflationRPG DropTable')

@include('headers')

@section('content')
    <div class="droptableheader">
        <h1>Drop Table for Bosses in InflationRPG</h1>
    </div>
    <div class ="droptableitem">
        @foreach ($drop as $dr)
                <h1 class="bossname">{{$dr->name}} (Area {{$dr->area}} Boss) ({{$dr->difficulty}} Version)</h1>   
                <img src="{{$dr->imageurl}}" alt="">
                <h1>Drop = {{$dr->drop}} </h1>
                <h1>Drop rate = {{$dr->basedroprate}}%</h1>
            @endforeach
    </div>
    
@endsection