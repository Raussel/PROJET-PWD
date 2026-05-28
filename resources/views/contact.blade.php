<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Contactez Dschang Reserve pour toute réservation ou information." />

    <title>Contact - Dschang Reserve</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('CSS/App1.css') }}" />
    <link rel="stylesheet" href="{{ asset('CSS/contact.css') }}" />

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

    {{-- HERO CONTACT --}}
    <section class="hero">
        <div class="hero-content" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h1>Contactez-Nous</h1>
            <p>Nous sommes à votre écoute pour toute réservation ou information</p>
        </div>
    </section>

    {{-- SECTION CONTACT --}}
    <section style="padding: 80px 20px; background: #f9f9f9;">
        <div class="container" style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 60px; padding: 0 20px;">
            
            <!-- Formulaire -->
            <div class="contact-form">
                <h2>Nous Contacter</h2>
                <form id="contactForm"  method="POST">
                    @csrf
                    
                    <div style="margin-bottom: 20px;">
                        <label>Nom complet</label>
                        <input type="text" name="name" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;"placeholder="Entrez Votre Nom">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label>Email</label>
                        <input type="email" name="email" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;"placeholder="exemple@gmail.com">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label>Téléphone</label>
                        <input type="tel" name="phone" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;"placeholder="Exemple: +237672407780">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label>Message</label>
                        <textarea name="message" rows="6" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; resize: vertical;"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-size: 1.1rem;">
                        <i class="fas fa-paper-plane"></i> Envoyer le Message
                    </button>
                </form>
            </div>

            <!-- Coordonnées -->
            <div>
                <h2>Nos Coordonnées</h2>
                <div style="margin: 30px 0;">
                    <p><strong><i class="fas fa-phone"></i> Téléphone :</strong></p>
                    <p>+237 672 40 77 87</p>
                    <p>+237 670 14 06 69</p>
                </div>

                <div style="margin: 30px 0;">
                    <p><strong><i class="fas fa-envelope"></i> Email :</strong></p>
                    <p><a href="mailto:rousselvaldespounde@gmail.com">rousselvaldespounde@gmail.com</a></p>
                </div>

                <div style="margin: 30px 0;">
                    <p><strong><i class="fas fa-map-marker-alt"></i> Adresse :</strong></p>
                    <p>Dschang, Région de l'Ouest<br>Cameroun</p>
                </div>

                <div style="margin-top: 40px;">
                    <h3>Horaires</h3>
                    <p>Lundi - Dimanche : 08h00 - 23h00</p>
                </div>
            </div>
        </div>
    </section>

    {{-- AVANTAGES --}}
    <section style="background: #fff8f0; padding: 60px 20px;">
        <h2 style="text-align:center;">Pourquoi Nous Contacter ?</h2>
        <div class="benefits-grid">
            <div class="benefit-card">
                <i class="fas fa-bolt"></i>
                <h3>Réponse Rapide</h3>
                <p>Nous vous répondons sous 24h</p>
            </div>
            <div class="benefit-card">
                <i class="fas fa-headset"></i>
                <h3>Service Client</h3>
                <p>Disponible 7j/7</p>
            </div>
            <div class="benefit-card">
                <i class="fas fa-heart"></i>
                <h3>Accompagnement</h3>
                <p>Pour une expérience parfaite</p>
            </div>
        </div>
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

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>

</body>
</html>