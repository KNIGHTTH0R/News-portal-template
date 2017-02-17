<nav class="navbar navbar-toggleable-md fixed-top navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto"
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                @if(Auth::check())
                <li class="nav-item"><a class="nav-link" href="#">Hi, {{Auth::user()->name}}</a></li>
                <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
                @endif
                @if(!Auth::check())
                <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="/register">Registration</a></li>
                @endif
            </ul>
    </div>
</nav>
