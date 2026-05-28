<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Localisation des restaurants à Dschang" />

    <title>Localisation - Food Reserve</title>

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    {{-- Leaflet CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    {{-- CSS Laravel --}}
    <link rel="stylesheet" href="{{ asset('CSS/App1.css') }}" />
    <link rel="stylesheet" href="{{ asset('CSS/localisation.css') }}" />
</head>

<body>

 {{-- HEADER / NAVIGATION --}}
    <header>
        <nav>
            <div class="logo">🍽️Food Reserve</div>

            <ul class="nav-links" id="navMenu">
                <button class="nav-close" onclick="toggleMenu()">
                    <i class="fas fa-times"></i>
                </button>
                <li><a href="{{ route('accueil') }}" class="{{ request()->routeIs('accueil') ? 'active' : '' }}">Accueil</a></li>
                <li><a href="{{ route('apropos') }}" class="{{ request()->routeIs('apropos') ? 'active' : '' }}">Apropos</a></li>
                <li><a href="{{ route('avis') }}" class="{{ request()->routeIs('avis') ? 'active' : '' }}">Avis</a></li>
                <li><a href="{{ route('connexion') }}" class="{{ request()->routeIs('connexion') ? 'active' : '' }}">Connexion/Inscription</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                <li><a href="{{ route('localisation') }}" class="{{ request()->routeIs('localisation') ? 'active' : '' }}">Localisation</a></li>
            </ul>

            <button class="menu-toggle" onclick="toggleMenu()" aria-label="Ouvrir le menu">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
    </header>

{{-- HERO --}}
<section class="hero">
    <div class="hero-content" style="text-align:center;">
        <h1>📍 Localisation des Restaurants</h1>
        <p>Découvrez les meilleurs restaurants de Dschang autour de vous</p>
    </div>
</section>

{{-- MAP SECTION --}}
<section style="padding: 60px 20px;">

    <h2 style="text-align:center;">Carte interactive de Food Reserve</h2>

    {{-- BUTTONS --}}
    <div class="map-controls">
        <button class="btn btn-primary" onclick="findNearest()">
            ⭐ Plus proche
        </button>

        <button class="btn btn-secondary" onclick="showAll()">
            🍔 Tous les restaurants
        </button>

        <button class="btn btn-primary" onclick="showPosition()">
            📍 Ma position
        </button>
    </div>

    {{-- MAP --}}
    <div id="map"></div>

    {{-- RESULT --}}
    <div id="result"></div>

</section>

  {{-- FOOTER --}}
    <footer>
        <p>© {{ date('Y') }} Dschang Reserve - Tous droits réservés</p>
        <p>Contact : 
            <a href="mailto:rousselvaldespounde@gmail.com" style="color:var(--accent)">
                rousselvaldespounde@gmail.com
            </a>
        </p>
        <p> Tel:
           <a href="tel:+237672407787">+237 672 407 787</a><br>
           <a href="tel:+237670140669">+237 670 140 669</a>
        </p>
    </footer>


{{-- SCRIPTS --}}
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="{{ asset('js/app.js')}}"></script>
<script src="{{ asset('js/localisation.js') }}"></script>

</body>
</html>