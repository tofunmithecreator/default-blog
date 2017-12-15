@extends('layouts.app')

  @section('content')
          <div class="row">
            <div class="col-md-12">
              <h1>You can be creative with your SHITH</h1>
              <h4>don't overthink your shit, drop it and get out, and remember, comments may or may not matter, it's your choice.</h4>
              <form class = "form-group" action = "{{ route('posts.store') }}" method = "post">
              <input type = "hidden" name = "_token" value="{{ csrf_token() }}">
                  <label for = "title">Title</label><br>
                    <input class = "form-control" type = "text" name = "title" value = "" placeholder = "Your shit got a title ? No, ? your shit gotta have a title joor" required>
                  <label for = "body">Body</label><br>
                    {{-- <input class = "form-control" type = "textarea" name = "body" value = "" placeholder = "Go Ahead, write your shit down, The world can't wait to hear those shitty ideas and relate to those shitty thoughts" required> --}}
                    <textarea class = "form-control" name="body" rows="8" cols="120" value = "" placeholder = "Go Ahead, write your shit down, The world can't wait to hear those shitty ideas and relate to those shitty thoughts" required></textarea><br>
                  <input class = "btn btn-primary" type = "submit" value = "Drop it like it's hot">
              </form>
            </div>
          </div>
  @endsection
