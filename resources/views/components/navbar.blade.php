

<nav class="navbar navbar-expand-sm navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/images/logo_1.png" alt="" width="35" height="35" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler menu-item" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav  menu-item me-auto">
                <a class="nav-link" href="/">Domov</a>
                <a class="nav-link" href="/about">O nás</a>
                <a class="nav-link" href="/contact">Kontakty</a>  
                <a class="nav-link" href="/">Ponuka</a>  
            </div>
            <div class="navbar-nav  menu-item">
                @guest
                    <a class="nav-link" href="/login"> Prihlásenie </a>
                    <a class="nav-link" href="/register"> Registrácia </a>
                @else
                    <a class="nav-link" href="/profile">{{ ucwords(auth()->user()->first_name) . ' ' . ucwords(auth()->user()->last_name)  }}</a>
                    <a class="nav-link" href="/logout">Odhlásiť</a>
                @endguest
            </div>
            
        </div>
    </div>
</nav>
