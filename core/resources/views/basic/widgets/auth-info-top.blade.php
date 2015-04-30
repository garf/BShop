@if(!Auth::check())
    <li><a href="{{ URL::route('login') }}">Log In</a></li>
    <li><a href="#">Register</a></li>
@else
    <li><a href="{{ URL::route('logout') }}">({{ Auth::user()->name }}) Log out</a></li>
@endif