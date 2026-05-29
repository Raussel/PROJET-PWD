<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Localisation des restaurants à Dschang" />

    <title>Localisation - Food Reserve</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="{{ asset('CSS/App1.css') }}" />
    <link rel="stylesheet" href="{{ asset('CSS/localisation.css') }}" />
</head>

<body>

    {{-- HEADER / NAVIGATION --}}
    <header>
        <nav>
            <div class="logo">🍽️ Food Reserve</div>

            <ul class="nav-links" id="navMenu">
                <button class="nav-close" onclick="toggleMenu()">
                    <i class="fas fa-times"></i>
                </button>
                <li><a href="{{ route('accueil') }}"      class="{{ request()->routeIs('accueil')      ? 'active' : '' }}">Accueil</a></li>
                <li><a href="{{ route('apropos') }}"      class="{{ request()->routeIs('apropos')      ? 'active' : '' }}">À propos</a></li>
                <li><a href="{{ route('avis') }}"         class="{{ request()->routeIs('avis')         ? 'active' : '' }}">Avis</a></li>
                <li><a href="{{ route('connexion') }}"    class="{{ request()->routeIs('connexion')    ? 'active' : '' }}">Connexion/Inscription</a></li>
                <li><a href="{{ route('contact') }}"      class="{{ request()->routeIs('contact')      ? 'active' : '' }}">Contact</a></li>
                <li><a href="{{ route('localisation') }}" class="{{ request()->routeIs('localisation') ? 'active' : '' }}">Localisation</a></li>
            </ul>

            <button class="menu-toggle" onclick="toggleMenu()" aria-label="Ouvrir le menu">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
    </header>

    {{-- HERO --}}
    <section class="loc-hero">
        <div class="loc-hero-content">
            <span class="loc-badge">
                <i class="fas fa-map-marker-alt"></i> Dschang, Cameroun
            </span>
            <h1>📍 Food Reserve Localisation </h1>
            <p>Découvrez les meilleurs restaurants de Dschang autour de vous</p>
        </div>
    </section>

    {{-- SECTION CARTE --}}
    <section class="loc-section">

        <div class="loc-container">

            {{-- PANNEAU GAUCHE --}}
            <div class="loc-panel">

                <h3 class="loc-panel-title">
                    <i class="fas fa-sliders-h"></i> Actions
                </h3>

                {{-- BOUTONS --}}
                <div class="map-controls">
                    <button class="btn btn-nearest" onclick="findNearest()">
                        <i class="fas fa-star"></i>
                        <span>Plus Proche</span>
                    </button>
                    <button class="btn btn-position" onclick="showPosition()">
                        <i class="fas fa-crosshairs"></i>
                        <span>Ma Position</span>
                    </button>
                    <button class="btn btn-all" onclick="showAll()">
                        <i class="fas fa-th-list"></i>
                        <span>Tous les Restaurants</span>
                    </button>
                    <button class="btn btn-reset" onclick="resetMap()">
                        <i class="fas fa-redo"></i>
                        <span>Réinitialiser</span>
                    </button>
                </div>

                {{-- STATUT --}}
                <div id="result" class="loc-result">
                    <i class="fas fa-info-circle"></i>
                    <span>Cliquez sur un bouton pour commencer</span>
                </div>

                {{-- LISTE --}}
                <div class="loc-list">
                    <h3 class="loc-panel-title" style="margin-top:0;">
                        <i class="fas fa-utensils"></i> Restaurants
                    </h3>
                    <ul id="listItems"></ul>
                </div>

            </div>

            {{-- CARTE --}}
            <div class="loc-map-wrapper">
                <div id="map"></div>
                <div class="map-overlay" id="mapOverlay">
                    <div class="map-overlay-content">
                        <i class="fas fa-map-marked-alt"></i>
                        <p>Cliquez sur un bouton<br>pour explorer la carte</p>
                    </div>
                </div>
            </div>

        </div>

    </section>

    {{-- FOOTER --}}
    <footer>
        <p>© {{ date('Y') }} Food Reserve — Tous droits réservés</p>
        <p> 
             Tel: <i class="fas fa-envelope"></i>
            <a href="mailto:rousselvaldespounde@gmail.com" style="color:var(--accent-color); margin-left:6px;">
                rousselvaldespounde@gmail.com
            </a>
        </p>
        <p>
             Contact :<i class="fas fa-phone"></i>
            <a href="tel:+237672407787" style="color:var(--accent-color); margin-left:6px;">+237 672 407 787</a>
            &nbsp;|&nbsp;
            <a href="tel:+237670140669" style="color:var(--accent-color);">+237 670 140 669</a>
        </p>
    </footer>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/localisation.js') }}"></script>

</body>
</html>