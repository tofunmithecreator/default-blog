@if (count($errors) >0)
    {{-- note that in the next line, errors-> all() is an object  --}}
    @foreach ($errors->all() as $error )
      <div class="alert alert-danger">
        {{$error}}
      </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success">
      {{session('success')}}
    </div>
@endif

@if (session('success_II'))
    <div class="alert alert-danger">
      {{session('success_II')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
      {{session('error')}}
    </div>
@endif
