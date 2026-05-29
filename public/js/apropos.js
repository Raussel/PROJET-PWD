        // Animation compteur
        const counters = document.querySelectorAll('.ap-stat-number');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = +entry.target.dataset.target;
                    let count = 0;
                    const step = Math.ceil(target / 60);
                    const timer = setInterval(() => {
                        count += step;
                        if (count >= target) { count = target; clearInterval(timer); }
                        entry.target.textContent = count.toLocaleString();
                    }, 30);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        counters.forEach(c => observer.observe(c));