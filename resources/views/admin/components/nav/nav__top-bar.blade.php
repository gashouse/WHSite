<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="example-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Site Title</li>
      <li>
        <a href="#">One</a>
        <ul class="menu vertical">
          <li><a href="#">One</a></li>
          <li><a href="#">Two</a></li>
          <li><a href="#">Three</a></li>
        </ul>
      </li>
      <li><a href="#">Two</a></li>
      <li><a href="#">Three</a></li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><input type="search" placeholder="Search"></li>
      <li><button type="button" class="button">Search</button></li>
    </ul>
  </div>
</div>

<a class="navbar-brand" href="{{ url('/') }}">
{{ config('app.name', 'Laravel') }}

<li><a href="{{ route('hours.index') }}">Hours</a></li>
<li><a href="{{ route('excerpts.index') }}">Excerpts</a></li>
<li><a href="{{ route('menus.index') }}">Menus</a></li>
<li><a href="{{ route('pages.index') }}">Pages</a></li>

@if (Auth::guest())
<ul>
<li><a href="{{ url('/login') }}">Login</a></li>
<li><a href="{{ url('/register') }}">Register</a></li>
</ul>
@else

{{ Auth::user()->name }} <span class="caret"></span>
<a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
Logout
</a>
<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
{{ csrf_field() }}
</form>
@endif
