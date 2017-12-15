@extends('layouts.app')
  @section('content')
          <div class="row">
            <div class="col-md-12">
              <h1>Made a mistake ? </h1>
              <h4>Yeah d(>_<)b ,you can still change it. </h4>
              <form class = "form-group" action = "{{ route('posts.update' , $post->id) }}" method = "post">
              <input type = "hidden" name = "_token" value="{{ csrf_token() }}">
              <input type = "hidden" name = "_method" value = "PATCH">
                  <label for = "title">Title</label><br>
                    <input class = "form-control" type = "text" name = "title" value = "{{ $post->title }}" placeholder = "Your shit got a title ? No, ? your shit gotta have a title joor" required>
                  <label for = "body">Body</label><br>
                    <input class = "form-control" type = "textarea" name = "body" value = "{{ $post->body}}" placeholder = "Go Ahead, write your shit down, The world can't wait to hear those shitty ideas and relate to those shitty thoughts" required>
                    {{-- <textarea class = "form-control" name="body" rows="8" cols="120" value = "{{ $post->title}}" placeholder = "Go Ahead, write your shit down, The world can't wait to hear those shitty ideas and relate to those shitty thoughts" required></textarea><br> --}}
                  <input class = "btn btn-info" type = "submit" value = "Edit your garbbage">
              </form>
            </div>
          </div>
  @endsection
