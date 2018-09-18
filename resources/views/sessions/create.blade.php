@extends('layout.master')

@section('content')

    <div class="col-sm-8 blog-main">
        
        <h1>Sign In</h1>
        
        <form method="post" action="/login">
            
            {{ csrf_field() }}
            
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" required>
              </div>
                
                <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
            
                <button type="submit" class="btn btn-primary">Sign In</button>
            
                @include('layout.errors')
            
        </form>
        
</div>

@endsection