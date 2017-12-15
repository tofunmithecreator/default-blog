@extends('layouts.app')
  @section('content')
    <div class="row">
      <h2>Drop your SHITH</h2>
      <div class="col-md-12">
        <h3>Get your shitty idea or thought or both here and fuck off</h3>
        <a href="{{ route('posts.create') }}" class = "btn btn-default">Dump shitty idea here</a>
      </div>
    </div>
  @endsection
