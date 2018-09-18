<div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="#">Home</a>
          <a class="nav-link" href="#">New features</a>
        @if(Auth::check())
          <a class="nav-link ml-auto" href="#" >{{ Auth::user()->name }}</a>
          <a class="nav-link ml-auto" href="{{ url('/logout') }}" >Logout</a>
        @else
            <a class="nav-link ml-auto" href="{{ url('/login') }}">Login</a>
            <a class="nav-link ml-auto" href="{{ url('/register') }}">Register</a>
        @endif
        </nav>
      </div>
    </div>


           