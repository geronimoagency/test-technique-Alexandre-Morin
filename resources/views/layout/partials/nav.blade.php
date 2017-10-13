<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">

            <!-- Collapsed burger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('imgs/logo.svg') }}" alt="dsgn.media">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">Pop Culture</a></li>
                <li><a href="{{ url('/') }}">Design</a></li>
                <li><a href="{{ url('/') }}">Photography</a></li>
                <li><a href="{{ url('/') }}">About Us</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href=""><img src="{{ url('imgs/ic-facebook-connect.svg') }}" alt=""><span class="icon">connect with Facebook</span></a></li>
            </ul>
        </div>
    </div>
</nav>