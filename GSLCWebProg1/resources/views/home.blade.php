<link rel="stylesheet" href="../css/home.css">
<link rel="stylesheet" type="text/css" href="{{ asset('../css/home.css') }}" >
    
@extends('template')

@section('title','InflationRPG Knowledgebase')

@include('headers')

@section('content')
    <div class="link">
        <h1 class="content-text">Contents :</h1>
        <a href="/drop" class="linktext">Go to droptable</a>
    </div>
@endsection