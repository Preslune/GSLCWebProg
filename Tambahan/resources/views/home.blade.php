<link rel="stylesheet" href="../css/home.css">
<link rel="stylesheet" type="text/css" href="{{ asset('../css/home.css') }}" >
    
@extends('template')

@section('title','InflationRPG Knowledgebase')

@include('headers')

@section('content')
    <div class="logo">
        <img src="https://static.wikia.nocookie.net/inflation-rpg/images/d/d3/IRPG_LOGO.png" alt="">
    </div>
    <div class="summary">
        Welcome, this is a rendition of the InflationRPG wiki which aims to put information not on the wiki
    </div>
    <div class="link">
        <h1 class="content-text">Contents :</h1>
        <a href="/drop" class="linktext">Drop table <br> </a>
        <a href="/drop" class="linkimage"><img src="{{ asset('../storage/image/wing1.png') }}" alt=""> <br></a>
        <a href="/mods" class="linkmods">Mods</a>
    </div>
@endsection