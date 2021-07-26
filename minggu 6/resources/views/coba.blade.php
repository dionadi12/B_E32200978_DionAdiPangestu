@extends('layout.coba1')

@section('content')
<div class="jumbotron jumbroton-fluid">
    <div class="container">
        <h1 class="display-4">HOME PAGE</h1>
        <p class="lead">This is the Home Page</p>
    </div>
    <p> Nama : {{ $nama }}</P>
    <P> Mata Pelajaran</p>
    <ul>
        @foreach($pelajaran as $p)
        <li>{{ $p }}</li>
        @endforeach
 </div>   
@endsection