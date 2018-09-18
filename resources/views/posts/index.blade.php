@extends('layout.master')

@section('content')

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
              
              @foreach ($posts as $post)
              
                @include ('posts.post')
  
              @endforeach
              
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->
@endsection