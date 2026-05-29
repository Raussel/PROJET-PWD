<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos - Dschang Reserve</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('CSS/App1.css') }}" />
    <link rel="stylesheet" href="{{ asset('CSS/apropos.css') }}" />
</head>
<body style="background: #f8f1e9;">

    {{-- HEADER --}}
    <header>
        <nav>
            <div class="logo">🍽️ Dschang Reserve</div>
            <ul class="nav-links" id="navMenu">
                <button class="nav-close" onclick="toggleMenu()"><i class="fas fa-times"></i></button>
                <li><a href="{{ route('accueil') }}" class="{{ request()->routeIs('accueil') ? 'active' : '' }}">Accueil</a></li>
                <li><a href="{{ route('apropos') }}" class="{{ request()->routeIs('apropos') ? 'active' : '' }}">À propos</a></li>
                <li><a href="{{ route('avis') }}" class="{{ request()->routeIs('avis') ? 'active' : '' }}">Avis</a></li>
                <li><a href="{{ route('connexion') }}" class="{{ request()->routeIs('connexion') ? 'active' : '' }}">Connexion/Inscription</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                <li><a href="{{ route('localisation') }}" class="{{ request()->routeIs('localisation') ? 'active' : '' }}">Localisation</a></li>
            </ul>
            <button class="menu-toggle" onclick="toggleMenu()"><i class="fas fa-bars"></i></button>
        </nav>
    </header>

    {{-- HERO --}}
    <section class="ap-hero">
        <div class="ap-hero-content">
            <span class="ap-badge"><i class="fas fa-users"></i> Équipe de Développement</span>
            <h1>Rencontrez Notre Équipe</h1>
            <p>Quatre étudiants passionnés en Licence 2 Informatique / Génie Logiciel à l’Université de Dschang</p>
        </div>
    </section>

    {{-- ÉQUIPE --}}
    <section class="ap-team-section">
        <div class="ap-section-header">
            <h2>Les Développeurs</h2>
            <p>Une équipe dynamique de 4 étudiants motivés par l’innovation et la gastronomie locale.</p>
        </div>

        <div class="ap-team-grid">

            <!-- Roussel Valdès -->
            <div class="ap-team-card team-card">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop&crop=face" 
                     class="ap-avatar-img" alt="Roussel Valdès">
                <div class="ap-team-info">
                    <span class="student-badge">Fondateur & Développeur Principal</span>
                    <h3>Poundé Roussel Valdès</h3>
                    <span class="ap-role">Licence 2 - Informatique</span>
                    <p>Passionné de développement web (Laravel, JavaScript). Initiateur du projet Dschang Reserve.</p>
                </div>
            </div>

            <!-- Zaina Clara -->
            <div class="ap-team-card team-card">
                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=400&fit=crop&crop=face" 
                     class="ap-avatar-img" alt="Zaina Clara">
                <div class="ap-team-info">
                    <span class="student-badge">Développeuse Frontend</span>
                    <h3>Sikounmo Ngueno Zaina Clara</h3>
                    <span class="ap-role">Licence 2 - Génie Logiciel</span>
                    <p>Spécialisée dans le design d’interface et l’expérience utilisateur. Rêveuse et créative.</p>
                </div>
            </div>

            <!-- Brayan Sonkeng -->
            <div class="ap-team-card team-card">
                <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400&h=400&fit=crop&crop=face" 
                     class="ap-avatar-img" alt="Brayan Sonkeng">
                <div class="ap-team-info">
                    <span class="student-badge">Développeur Backend</span>
                    <h3>Sonkeng Talet Brayan</h3>
                    <span class="ap-role">Licence 2 - Informatique</span>
                    <p>Expert en logique métier et gestion de base de données.</p>
                </div>
            </div>

            <!-- Stevy Dadche -->
            <div class="ap-team-card team-card">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=400&fit=crop&crop=face" 
                     class="ap-avatar-img" alt="Stevy Dadche">
                <div class="ap-team-info">
                    <span class="student-badge">Développeur Full Stack</span>
                    <h3>Dadche Djidjou Stevy</h3>
                    <span class="ap-role">Licence 2 - Génie Logiciel</span>
                    <p>Polyvalent, participe à toutes les parties du projet (Frontend + Backend).</p>
                </div>
            </div>

        </div>
    </section>

    {{-- CHIFFRES --}}
    <section class="ap-stats-section">
        <div class="ap-stats-grid">
            <div class="ap-stat">
                <span class="ap-stat-number" data-target="4">0</span>
                <p>Développeurs</p>
            </div>
            <div class="ap-stat">
                <span class="ap-stat-number" data-target="2">0</span>
                <p>Année de Licence</p>
            </div>
            <div class="ap-stat">
                <span class="ap-stat-number" data-target="100">0</span><span>%</span>
                <p>Motivés</p>
            </div>
            <div class="ap-stat">
                <span class="ap-stat-number" data-target="1">0</span>
                <p>Projet</p>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
  <footer>
        <p>© {{ date('Y') }} Food Reserve — Tous droits réservés</p>
        <p>
             Contact:  <i class="fas fa-envelope"></i>
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