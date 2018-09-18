@extends('layout.master')

@section('content')

    <div class="col-sm-8 blog-main">

          <div class="blog-post">

            <h1>{{ $post -> title }}</h1>
              
            <p>{{ $post -> body }}</p>
              
              
            <div class="comments">
             
                <ul class="list-group">
                
                  @foreach ($post -> comments as $comment)

                        <li class="list-group-item">
                            {{$comment -> body}} &nbsp;
                            <strong>{{ $comment->created_at->diffForHumans()}}</strong>
                    </li>

                    @endforeach
              
                </ul>
                    
              </div>
              
              <br/>
              
              <div class="card">
              
                <div class="card-block">
                  
                    <form method="POST" action="/posts/{{ $post -> id }}/comments">
                        
                        {{ csrf_field() }}
                    
                        <div class="form-group">
                        
                            <textarea name="body" placeholder="Your Comment..." class="form-control">
                            </textarea>
                        
                        </div>
                        
                        <div class='form-group'>
            
                          <button type="submit" class="btn btn-primary">Add Comment</button>

                        </div>
                    
                    </form>
                  
                    @include('layout.errors')
                    
                  </div>
              
              </div>
              
        </div>
        
    </div>

@endsection