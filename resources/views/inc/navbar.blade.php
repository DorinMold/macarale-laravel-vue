<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#"><img src="{{ asset('assets/sigla.png') }}" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" 
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <span> </span>
            <span> </span>
            <span> </span>
        </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav float-right">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/') }}">Acasa <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ Request::is('despre') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/despre') }}">Despre</a>
            </li>
            <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                <!-- <a class="nav-link" href=" {{ url('/contact') }} ">Contact</a> -->
                <a class="contactButton nav-link">Contact</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>  -->
        </ul>
    </div>
</nav>