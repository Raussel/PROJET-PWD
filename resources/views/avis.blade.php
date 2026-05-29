<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Avis - Food Reserve</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('CSS/App1.css') }}" />
    <link rel="stylesheet" href="{{ asset('CSS/avis.css') }}" />
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
    <section class="av-hero">
        <div class="av-hero-content">
            <span class="av-badge"><i class="fas fa-star"></i> Avis Clients</span>
            <h1>Ce que disent<br>nos Clients</h1>
            <p>Des centaines de Dschangois partagent leur expérience Food Reserve</p>
            <div class="av-hero-stats">
                <div class="av-hero-stat">
                    <strong>4.8</strong>
                    <div class="av-stars-sm">★★★★★</div>
                    <span>Note moyenne</span>
                </div>
                <div class="av-hero-divider"></div>
                <div class="av-hero-stat">
                    <strong>500+</strong>
                    <span>Avis vérifiés</span>
                </div>
                <div class="av-hero-divider"></div>
                <div class="av-hero-stat">
                    <strong>98%</strong>
                    <span>Recommandent</span>
                </div>
            </div>
        </div>
    </section>

    {{-- CARTES AVIS --}}
    <section class="av-section">
        <div class="av-section-header">
            <h2>Avis Récents</h2>
            <p>Découvrez les expériences de nos utilisateurs</p>
        </div>

        <div class="av-grid">

            <div class="av-card">
                <div class="av-card-header">
                    <div class="av-avatar" style="background:linear-gradient(135deg,#e74c3c,#c0392b);">P</div>
                    <div>
                        <h4>Pounde Roussel</h4>
                        <span class="av-date">Il y a 2 jours</span>
                    </div>
                    <div class="av-stars">★★★★★</div>
                </div>
                <p class="av-comment">"Food Reserve m'a permis de trouver le Complexe Zanzibar en moins de 2 minutes. La réservation était simple et le restaurant excellent !"</p>
                <span class="av-restaurant"><i class="fas fa-utensils"></i> Complexe Zanzibar</span>
            </div>

            <div class="av-card av-card-featured">
                <div class="av-featured-badge">⭐ Coup de cœur</div>
                <div class="av-card-header">
                    <div class="av-avatar" style="background:linear-gradient(135deg,#3498db,#2980b9);">S</div>
                    <div>
                        <h4>Sikounmo Clara</h4>
                        <span class="av-date">Il y a 5 jours</span>
                    </div>
                    <div class="av-stars">★★★★★</div>
                </div>
                <p class="av-comment">"Je recommande vivement cette application ! J'ai découvert La Terrasse grâce à Food Reserve. Une expérience culinaire inoubliable à Dschang."</p>
                <span class="av-restaurant"><i class="fas fa-utensils"></i> Le Gourmet</span>
            </div>

            <div class="av-card">
                <div class="av-card-header">
                    <div class="av-avatar" style="background:linear-gradient(135deg,#2ecc71,#27ae60);">T</div>
                    <div>
                        <h4>Talet Brayan</h4>
                        <span class="av-date">Il y a 1 semaine</span>
                    </div>
                    <div class="av-stars">★★★★☆</div>
                </div>
                <p class="av-comment">"Super plateforme pour découvrir les restaurants de Dschang. La carte interactive est très pratique pour trouver le restaurant le plus proche."</p>
                <span class="av-restaurant"><i class="fas fa-utensils"></i> Greenlife Foto</span>
            </div>

            <div class="av-card">
                <div class="av-card-header">
                    <div class="av-avatar" style="background:linear-gradient(135deg,#9b59b6,#8e44ad);">N</div>
                    <div>
                        <h4>Ngassa Andy</h4>
                        <span class="av-date">Il y a 2 semaines</span>
                    </div>
                    <div class="av-stars">★★★★★</div>
                </div>
                <p class="av-comment">"Excellente initiative ! On a enfin une plateforme dédiée aux restaurants de Dschang. Le service est rapide et les informations sont fiables."</p>
                <span class="av-restaurant"><i class="fas fa-utensils"></i> Tamana Glacier</span>
            </div>

            <div class="av-card">
                <div class="av-card-header">
                    <div class="av-avatar" style="background:linear-gradient(135deg,#e67e22,#d35400);">D</div>
                    <div>
                        <h4>Donfack Stéphane</h4>
                        <span class="av-date">Il y a 3 semaines</span>
                    </div>
                    <div class="av-stars">★★★★☆</div>
                </div>
                <p class="av-comment">"Très bonne application, interface agréable et intuitive. J'aurais aimé encore plus de restaurants listés mais le service est top !"</p>
                <span class="av-restaurant"><i class="fas fa-utensils"></i> Platinium Lounge</span>
            </div>

            <div class="av-card">
                <div class="av-card-header">
                    <div class="av-avatar" style="background:linear-gradient(135deg,#1abc9c,#16a085);">F</div>
                    <div>
                        <h4>Franky Brayan</h4>
                        <span class="av-date">Il y a 1 mois</span>
                    </div>
                    <div class="av-stars">★★★★★</div>
                </div>
                <p class="av-comment">"La géolocalisation fonctionne parfaitement ! J'ai trouvé le restaurant le plus proche en un clic. Je recommande à tous les habitants de Dschang."</p>
                <span class="av-restaurant"><i class="fas fa-utensils"></i> Mange Lapin</span>
            </div>

        </div>
    </section>

    {{-- FORMULAIRE AVIS --}}
    <section class="av-form-section">
        <div class="av-section-header">
            <h2>Laissez votre Avis</h2>
            <p>Votre expérience compte pour toute la communauté Food Reserve</p>
        </div>

        <div class="av-form-wrapper">
            <form class="av-form" id="avisForm">
                @csrf

                <div class="av-form-row">
                    <div class="av-form-group">
                        <label for="nom"><i class="fas fa-user"></i> Votre nom</label>
                        <input type="text" id="nom" name="nom" placeholder="Ex: Pounde Roussel" required />
                    </div>
                    <div class="av-form-group">
                        <label for="restaurant"><i class="fas fa-utensils"></i> Restaurant visité</label>
                        <select id="restaurant" name="restaurant" required>
                            <option value="">-- Choisir un restaurant --</option>
                            <option>Complexe Zanzibar</option>
                            <option>Greenlife Foto</option>
                            <option>Greenlife Maazi</option>
                            <option>Tamana Glacier</option>
                            <option>Le Combattant Lillois</option>
                            <option>Le Sims</option>
                            <option>Restaurant Fosso</option>
                            <option>Le Gourmet</option>
                            <option>Djimiquick</option>
                            <option>Palais des Étoiles de Mbouoh</option>
                            <option>Platinium Lounge</option>
                            <option>Mange Lapin</option>
                        </select>
                    </div>
                </div>

                {{-- ÉTOILES INTERACTIVES --}}
                <div class="av-form-group">
                    <label><i class="fas fa-star"></i> Votre note</label>
                    <div class="av-star-rating" id="starRating">
                        <span class="av-star" data-value="1">★</span>
                        <span class="av-star" data-value="2">★</span>
                        <span class="av-star" data-value="3">★</span>
                        <span class="av-star" data-value="4">★</span>
                        <span class="av-star" data-value="5">★</span>
                    </div>
                    <input type="hidden" id="note" name="note" value="0" />
                    <span class="av-note-label" id="noteLabel">Cliquez pour noter</span>
                </div>

                <div class="av-form-group">
                    <label for="commentaire"><i class="fas fa-comment"></i> Votre commentaire</label>
                    <textarea id="commentaire" name="commentaire" rows="4"
                        placeholder="Partagez votre expérience avec Food Reserve..." required></textarea>
                </div>

                <button type="button" class="av-submit-btn" onclick="submitAvis()">
                    <i class="fas fa-paper-plane"></i> Publier mon avis
                </button>

                <div class="av-success-msg" id="successMsg">
                    <i class="fas fa-check-circle"></i> Merci ! Votre avis a été envoyé avec succès.
                </div>

            </form>
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
    <script src="{{ asset('js/avis.js') }}"></script>

</body>
</html>