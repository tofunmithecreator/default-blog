@extends('layouts.app')

@section('content')
  <h1>Welcome</h1>
  <h3>This is a sample blog by Tofu, with the help of Mojo Blanco :)</h3>
  <p>Click the blue button to be bored out of your brains</p><br>
  <a href="{{ route('base') }}" class = "btn btn-danger">DO NOT CLICK!!!</a>
@endsection
