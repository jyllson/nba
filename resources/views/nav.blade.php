<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="https://www.helloworld.rs/public/files/_thumb/200x200/public/company/462/2/vivify.png" width="150" height="150" alt="">
  </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item pull-right">
        @if (Auth::check())
          <span class="oi oi-person"></span> {{ Auth()->user()->name }} <a class="nav-link" href="/logout">Logout</a>
        @else
          <a class="nav-link ml-auto" href="/login">Login</a>
        @endif
      </li>
    </ul>
  </div>
</nav>

