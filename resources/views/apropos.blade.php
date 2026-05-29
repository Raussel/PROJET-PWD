<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>À Propos - Food Reserve</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('CSS/App1.css') }}" />
    <link rel="stylesheet" href="{{ asset('CSS/apropos.css') }}" />
</head>

<body>

    {{-- HEADER --}}
    <header>
        <nav>
            <div class="logo">🍽️ Food Reserve</div>
            <ul class="nav-links" id="navMenu">
                <button class="nav-close" onclick="toggleMenu()"><i class="fas fa-times"></i></button>
                <li><a href="{{ route('accueil') }}"      class="{{ request()->routeIs('accueil')      ? 'active' : '' }}">Accueil</a></li>
                <li><a href="{{ route('apropos') }}"      class="{{ request()->routeIs('apropos')      ? 'active' : '' }}">À propos</a></li>
                <li><a href="{{ route('avis') }}"         class="{{ request()->routeIs('avis')         ? 'active' : '' }}">Avis</a></li>
                <li><a href="{{ route('connexion') }}"    class="{{ request()->routeIs('connexion')    ? 'active' : '' }}">Connexion/Inscription</a></li>
                <li><a href="{{ route('contact') }}"      class="{{ request()->routeIs('contact')      ? 'active' : '' }}">Contact</a></li>
                <li><a href="{{ route('localisation') }}" class="{{ request()->routeIs('localisation') ? 'active' : '' }}">Localisation</a></li>
            </ul>
            <button class="menu-toggle" onclick="toggleMenu()"><i class="fas fa-bars"></i></button>
        </nav>
    </header>

    {{-- HERO --}}
    <section class="ap-hero">
        <div class="ap-hero-content">
            <span class="ap-badge"><i class="fas fa-users"></i> Notre Équipe</span>
            <h1>Les Visages derrière<br>Food Reserve</h1>
            <p>Une équipe passionnée, au service de la gastronomie de Dschang</p>
        </div>
    </section>

    {{-- ÉQUIPE --}}
    <section class="ap-team-section">
        <div class="ap-section-header">
            <h2>Notre Équipe</h2>
            <p>Des personnes passionnées qui donnent vie à Food Reserve chaque jour</p>
        </div>

        <div class="ap-team-grid">

            <div class="ap-team-card">
                <div class="ap-avatar" style="background: linear-gradient(135deg, #e74c3c, #c0392b);">
                    <i class="fas fa-user-tie"></i>
                </div>
                <div class="ap-team-info">
                    <h3>Roussel Valdès</h3>
                    <span class="ap-role">Fondateur & Développeur</span>
                    <p>Passionné de technologie et de gastronomie, Roussel a créé Food Reserve pour faciliter la découverte des restaurants de Dschang.</p>
                    <div class="ap-socials">
                        <a href="mailto:rousselvaldespounde@gmail.com"><i class="fas fa-envelope"></i></a>
                        <a href="tel:+237672407787"><i class="fas fa-phone"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="ap-team-card">
                <div class="ap-avatar" style="background: linear-gradient(135deg, #3498db, #2980b9);">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <div class="ap-team-info">
                    <h3>Designer UI/UX</h3>
                    <span class="ap-role">Design & Expérience Utilisateur</span>
                    <p>Responsable de l'interface et de l'expérience visuelle de la plateforme pour offrir une navigation fluide et agréable.</p>
                    <div class="ap-socials">
                        <a href="#"><i class="fas fa-envelope"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-dribbble"></i></a>
                    </div>
                </div>
            </div>

            <div class="ap-team-card">
                <div class="ap-avatar" style="background: linear-gradient(135deg, #2ecc71, #27ae60);">
                    <i class="fas fa-handshake"></i>
                </div>
                <div class="ap-team-info">
                    <h3>Responsable Partenariats</h3>
                    <span class="ap-role">Relations Restaurants</span>
                    <p>En charge des relations avec les restaurants partenaires pour garantir une offre de qualité et des réservations fiables.</p>
                    <div class="ap-socials">
                        <a href="#"><i class="fas fa-envelope"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fas fa-phone"></i></a>
                    </div>
                </div>
            </div>

            <div class="ap-team-card">
                <div class="ap-avatar" style="background: linear-gradient(135deg, #9b59b6, #8e44ad);">
                    <i class="fas fa-headset"></i>
                </div>
                <div class="ap-team-info">
                    <h3>Support Client</h3>
                    <span class="ap-role">Assistance & Satisfaction</span>
                    <p>Disponible pour répondre à toutes vos questions et s'assurer que chaque expérience sur Food Reserve soit parfaite.</p>
                    <div class="ap-socials">
                        <a href="#"><i class="fas fa-envelope"></i></a>
                        <a href="#"><i class="fas fa-comments"></i></a>
                        <a href="#"><i class="fas fa-phone"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- CHIFFRES --}}
    <section class="ap-stats-section">
        <div class="ap-stats-grid">
            <div class="ap-stat">
                <span class="ap-stat-number" data-target="50">0</span><span>+</span>
                <p>Restaurants partenaires</p>
            </div>
            <div class="ap-stat">
                <span class="ap-stat-number" data-target="2000">0</span><span>+</span>
                <p>Réservations effectuées</p>
            </div>
            <div class="ap-stat">
                <span class="ap-stat-number" data-target="98">0</span><span>%</span>
                <p>Clients satisfaits</p>
            </div>
            <div class="ap-stat">
                <span class="ap-stat-number" data-target="4">0</span><span> ans</span>
                <p>D'expérience</p>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer>
        <p>© {{ date('Y') }} Food Reserve — Tous droits réservés</p>
        <p>
           Contact: <i class="fas fa-envelope"></i>
            <a href="mailto:rousselvaldespounde@gmail.com" style="color:var(--accent-color); margin-left:6px;">
                rousselvaldespounde@gmail.com
            </a>
        </p>
        <p>
            Tel: <i class="fas fa-phone"></i>
            <a href="tel:+237672407787" style="color:var(--accent-color); margin-left:6px;">+237 672 407 787</a>
        </p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/apropos.js') }}"></script>
</body>
</html>