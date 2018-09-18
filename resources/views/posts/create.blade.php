@extends('layout.master')

@section('content')

    <div class="col-sm-8 blog-main">
        
        <h1>Create A Damn Fine Post My Good Freind!</h1>
        
        <form method="POST" action="/posts">
            {{ csrf_field() }}
            
          <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>
            
          <div class="form-group">
            <label for="body">What's Got You thinking?</label>
            <textarea id="body" name="body" class="form-control"></textarea>
          </div>
            
        <div class='form-group'>
            
          <button type="submit" class="btn btn-primary">Publish</button>
         
        </div>
            
       @include('layout.errors')

        </form>
        
    </div>

@endsection