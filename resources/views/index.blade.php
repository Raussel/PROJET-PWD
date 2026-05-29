<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Réservez votre table dans les meilleurs restaurants de Dschang en quelques clics." />

    <title>Dschang Reserve - Réservation de Restaurants</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('CSS/App1.css') }}" />
    <link rel="stylesheet" href="{{ asset('CSS/acceuil.css') }}" />
       
</head>

<body>

    {{-- HEADER --}}
    <header>
        <nav>
            <div class="logo">🍽️Food Reserve</div>

            <ul class="nav-links" id="navMenu">
                <button class="nav-close" onclick="toggleMenu()">
                    <i class="fas fa-times"></i>
                </button>
                <li><a href="{{ route('accueil') }}" class="{{ request()->routeIs('accueil') ? 'active' : '' }}">Accueil</a></li>
                <li><a href="{{ route('apropos') }}" class="{{ request()->routeIs('apropos') ? 'active' : '' }}">À propos</a></li>
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

    {{-- HERO - Plat Camerounais appétissant --}}
    <section class="hero">
        <div class="hero-content">
            <h1>Réservez Vos Tables  Facilement dans les Restaurants de la  Ville de  Dschang</h1>
            <p>Découvrez les saveurs authentiques de la perle de l'Ouest Cameroun</p>

            <div class="search-bar">
                <input type="text" id="searchInput" placeholder="Quel restaurant ou plat cherchez-vous ?">
                <button onclick="searchRestaurants()">
                    <i class="fas fa-search"></i>
                </button>
            </div>

            <div class="hero-buttons">
                <a href="{{ route('connexion') }}" class="btn btn-primary">Parcourir les Restaurants</a>
                <a href="{{ route('connexion') }}" class="btn btn-secondary">Réserver Maintenant</a>
            </div>
        </div>
    </section>

    {{-- RESTAURANTS POPULAIRES --}}
    <section>
        <h2>Restaurants Populaires à Dschang</h2>
        <div class="restaurants-grid">

            <!-- Greenlife Foto -->
            <div class="restaurant-card" style="animation-delay: 0.1s">
                <div class="card-img-container">
                    <img src="https://picsum.photos/id/1080/2000/1200" 
                         class="restaurant-img" 
                         alt="Greenlife Foto"
                         loading="lazy"
                         decoding="async"
                         onerror="this.src='https://picsum.photos/id/870/800/600';">
                </div>
                <div class="card-content">
                    <h3>Greenlife Foto</h3>
                    <p class="type">Cuisine Camerounaise • Foto</p>
                    <p class="rating">⭐ 4.7 (128)</p>
                    <a href="{{ route('connexion') }}" class="btn btn-primary">Réserver une Table</a>
                </div>
            </div>

            <!-- Complexe Zanzibar -->
            <div class="restaurant-card" style="animation-delay: 0.3s">
                <div class="card-img-container">
                    <img src="https://picsum.photos/id/292/800/600" 
                         class="restaurant-img" 
                         alt="Complexe Zanzibar"
                         loading="lazy"
                         decoding="async"
                         onerror="this.src='https://picsum.photos/id/201/800/600';">
                </div>
                <div class="card-content">
                    <h3>Complexe Zanzibar</h3>
                    <p class="type">Grillades & Lounge • Rue Mazi</p>
                    <p class="rating">⭐ 4.5 (95)</p>
                    <a href="{{ route('connexion') }}" class="btn btn-primary">Réserver une Table</a>
                </div>
            </div>

            <!-- Tamanna Lounge -->
            <div class="restaurant-card" style="animation-delay: 0.5s">
                <div class="card-img-container">
                    <img src="https://picsum.photos/id/431/800/600" 
                         class="restaurant-img" 
                         alt="Tamanna Lounge"
                         loading="lazy"
                         decoding="async"
                         onerror="this.src='https://picsum.photos/id/106/800/600';">
                </div>
                <div class="card-content">
                    <h3>Tamanna Lounge</h3>
                    <p class="type">Lounge & Cuisine Moderne • Université</p>
                    <p class="rating">⭐ 4.8 (76)</p>
                    <a href="{{ route('connexion') }}" class="btn btn-primary">Réserver une Table</a>
                </div>
            </div>

        </div>
    </section>

    {{-- AVANTAGES --}}
    <section style="background: #fff8f0;">
        <h2>Pourquoi Choisir Dschang Reserve ?</h2>
        <div class="benefits-grid">
            <div class="benefit-card">
                <i class="fas fa-bolt"></i>
                <h3>Réservation Rapide</h3>
                <p>En moins de 30 secondes</p>
            </div>
            <div class="benefit-card">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Meilleures Adresses</h3>
                <p>De Dschang et ses environs</p>
            </div>
            <div class="benefit-card">
                <i class="fas fa-heart"></i>
                <h3>Expérience Locale</h3>
                <p>Authentique et savoureuse</p>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer>
        <p>© {{ date('Y') }} Dschang Reserve - Tous droits réservés</p>
        <p>Contact : <i class="fas fa-envelope"></i>
            <a href="mailto:rousselvaldespounde@gmail.com" style="color:var(--accent)">
                rousselvaldespounde@gmail.com
            </a>
        </p>
        <p> Tel:   <i class="fas fa-phone"></i>
           <a href="tel:+237672407787">+237 672 407 787</a><br>
           <a href="tel:+237670140669">+237 670 140 669</a>
        </p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>