        // ── ÉTOILES INTERACTIVES ──
        const stars     = document.querySelectorAll('.av-star');
        const noteInput = document.getElementById('note');
        const noteLabel = document.getElementById('noteLabel');
        const labels    = ['', 'Mauvais', 'Passable', 'Bien', 'Très bien', 'Excellent !'];

        stars.forEach(star => {
            star.addEventListener('mouseover', () => {
                const val = +star.dataset.value;
                stars.forEach((s, i) => s.classList.toggle('hovered', i < val));
            });
            star.addEventListener('mouseout', () => {
                stars.forEach(s => s.classList.remove('hovered'));
            });
            star.addEventListener('click', () => {
                const val = +star.dataset.value;
                noteInput.value = val;
                noteLabel.textContent = labels[val];
                stars.forEach((s, i) => s.classList.toggle('selected', i < val));
            });
        });

        // ── SOUMETTRE AVIS ──
        function submitAvis() {
            const nom        = document.getElementById('nom').value.trim();
            const restaurant = document.getElementById('restaurant').value;
            const note       = document.getElementById('note').value;
            const commentaire = document.getElementById('commentaire').value.trim();

            if (!nom || !restaurant || note === '0' || !commentaire) {
                alert('Veuillez remplir tous les champs et donner une note.');
                return;
            }

            const msg = document.getElementById('successMsg');
            msg.style.display = 'flex';
            document.getElementById('avisForm').reset();
            stars.forEach(s => s.classList.remove('selected', 'hovered'));
            noteInput.value = '0';
            noteLabel.textContent = 'Cliquez pour noter';

            setTimeout(() => { msg.style.display = 'none'; }, 4000);
        }

        // ── ANIMATION CARTES ──
        const observer = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) e.target.style.opacity = '1';
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.av-card').forEach(c => observer.observe(c));