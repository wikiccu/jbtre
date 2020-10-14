<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('ass//img/logo.png') }}" class="logo" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
                <li 
                        class="nav-item active mr-3"
                        class="nav-item mr-3"
                >
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li 
                    {{-- {% if 'about' in request.path %} --}}
                        class="nav-item active mr-3"
                    {{-- {% else %} --}}
                        class="nav-item mr-3"
                    {{-- {% endif %} --}}
                >
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li 
                    {{-- {% if 'listings' in request.path %} --}}
                        class="nav-item active mr-3"
                    {{-- {% else %} --}}
                        class="nav-item mr-3"
                    {{-- {% endif %} --}}
                >
                    {{-- <a class="nav-link" href="{% url 'listings' %}">Featured Listings</a> --}}
                </li>
            </ul>
            @if (Route::has('login'))
                <ul class="navbar-nav ml-auto">
                    
                    @auth
                        <li
                                class="nav-item active mr-3"
                                class="nav-item mr-3"
                        >
                        <a  class="nav-link" href="{{ url('/dashboard') }}" >Dashboard</a>
                        </li>
                    @else
                        <li
                                class="nav-item active mr-3"
                                class="nav-item mr-3"
                        >
                            <a class="nav-link" href="{{ route('register') }}">
                                <i class="fas fa-user-plus"></i> Register</a>
                        </li>
                        <li
                                class="nav-item active mr-3"
                                class="nav-item mr-3"
                        >
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="fas fa-sign-in-alt"></i>

                                Login</a>
                        </li>
                    @endif
                </ul>
            @endif
        </div>
    </div>
</nav>
