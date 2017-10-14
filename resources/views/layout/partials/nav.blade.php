<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('imgs/logo.svg') }}" alt="dsgn.media">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{ url('/') }}">Pop Culture</a></li>
                <li><a href="{{ url('/') }}">Design</a></li>
                <li><a href="{{ url('/') }}">Photography</a></li>
                <li><a href="{{ url('/') }}">About Us</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(!session()->has('user'))
                    <li><a href="{{ url('auth/facebook') }}"><img src="{{ url('imgs/ic-facebook-connect.svg') }}" alt=""><span class="icon">Connect with Facebook</span></a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"role="button" aria-haspopup="true" aria-expanded="false"><img src="http://graph.facebook.com/{{ session('user.id') }}/picture" alt="" class="img-round"><span class="icon">{{ session('user.name') }}</span> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ session()->forget('user') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>