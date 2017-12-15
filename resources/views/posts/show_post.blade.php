@extends('layouts.app')
  @section('content')
        <div class = "row">
          <div class = "container">
            <h1>{{ $post->title }}</h1><br><br>
            <div class="well">
              <p>{{ $post->body }}</p>
              <small>Written on : {{ $post->created_at}}</small><br>
              <small>Edited on: {{ $post->updated_at }}</small>
            </div>
          </div>
        </div>
  @endsection
