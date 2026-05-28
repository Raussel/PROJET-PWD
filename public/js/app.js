//
  function toggleMenu() {
            const menu = document.getElementById('navMenu');
            menu.classList.toggle('active');
            // Bloquer le scroll quand le menu est ouvert
            document.body.style.overflow = menu.classList.contains('active') ? 'hidden' : '';
        }

        // Fermer le menu en cliquant sur un lien
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('navMenu').classList.remove('active');
                document.body.style.overflow = '';
            });
        });

        function searchRestaurants() {
            const query = document.getElementById('searchInput').value;
            if (query) {
                window.location.href = "{{ route('restaurants') }}?search=" + encodeURIComponent(query);
            }
        }

        // Animation au scroll
        window.addEventListener('scroll', () => {
            document.querySelectorAll('.restaurant-card').forEach((card) => {
                if (card.getBoundingClientRect().top < window.innerHeight * 0.8) {
                    card.style.opacity = '1';
                }
            });
        });