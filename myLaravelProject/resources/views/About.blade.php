@extends('Layout.mainLayout')

@section('anchortag')
<a href="/Home">Home</a>
@endsection 
@section('content')
<h6>About Page</h6>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, provident!</p>
@endsection 
@section('sidebar')
@parent
<p>this extra line </p>
@show
