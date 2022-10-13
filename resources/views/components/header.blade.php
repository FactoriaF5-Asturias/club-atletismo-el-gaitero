<nav id="nav-menu">
    <div id="logo">
        <img class="logo-img" src="https://st2.depositphotos.com/1012338/6938/v/600/depositphotos_69381837-stock-illustration-running-shield.jpg" alt="logo club de atletismo">
    </div>

    <h1>Club de Atletismo El Gaitero</h1>

    <div class="buttons">
        <a href="{{ url('/') }}" class="active">INICIO</a>
        <a href="{{ url('/history') }}">HISTORIA</a>
        <a href="{{ url('/team') }}">EQUIPO</a>
        <a href="{{ url('/news') }}">NOTICIAS</a>
        <a href="{{ url('/achievements') }}">LOGROS</a>
        <a href="{{ url('/calendar') }}">CALENDARIO</a>
    </div>
    <a class="menu-toggle" onclick="toggle()">
        <img src="{{asset('assets/img/menu.png')}}" alt="menu">
    </a>
</nav>
<div id="menu" class="hidden">
    <div class="mobile-menu">
        <a href="{{ url('/') }}">INICIO</a>
        <a href="{{ url('/history') }}">HISTORIA</a>
        <a href="{{ url('/team') }}">EQUIPO</a>
        <a href="{{ url('/news') }}">NOTICIAS</a>
        <a href="{{ url('/achievements') }}">LOGROS</a>
        <a href="{{ url('/calendar') }}">CALENDARIO</a>
    </div>
</div>

<script>
    const menu = document.getElementById('menu');
    const toggle = () => menu.classList.toggle("hidden");
</script>
