document.addEventListener('DOMContentLoaded', function() {

    const form = document.getElementById('contactForm');
    if (!form) return;

    const nomInput = form.querySelector('input[name="name"]');
    const emailInput = form.querySelector('input[name="email"]');
    const phoneInput = form.querySelector('input[name="phone"]');
    const messageInput = form.querySelector('textarea[name="message"]');

    function showError(input, message) {
        let errorDiv = input.nextElementSibling;
        if (!errorDiv || !errorDiv.classList.contains('error-message')) {
            errorDiv = document.createElement('div');
            errorDiv.className = 'error-message';
            errorDiv.style.color = '#e74c3c';
            errorDiv.style.fontSize = '0.85rem';
            errorDiv.style.marginTop = '5px';
            input.parentNode.appendChild(errorDiv);
        }
        errorDiv.textContent = message;
        input.style.borderColor = '#e74c3c';
    }

    function clearError(input) {
        const errorDiv = input.nextElementSibling;
        if (errorDiv && errorDiv.classList.contains('error-message')) {
            errorDiv.remove();
        }
        input.style.borderColor = '';
    }

    function validateName() {
        const value = nomInput.value.trim();
        const realLength = value.replace(/\s+/g, '').length;
        if (value === '' || realLength < 3) {
            showError(nomInput, "Le nom doit contenir au moins 3 caractères (espaces non comptés)");
            return false;
        }
        clearError(nomInput);
        return true;
    }

    function validateEmail() {
        const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (emailInput.value.trim() === '' || !regex.test(emailInput.value.trim())) {
            showError(emailInput, "Veuillez entrer une adresse email valide");
            return false;
        }
        clearError(emailInput);
        return true;
    }

    function validatePhone() {
        const phone = phoneInput.value.trim();
        if (phone === '' || !phone.startsWith('+237') || phone.length < 12) {
            showError(phoneInput, "Le numéro doit commencer par +237 et être valide");
            return false;
        }
        clearError(phoneInput);
        return true;
    }

    function validateMessage() {
        const value = messageInput.value.trim();
        const realLength = value.replace(/\s+/g, '').length;
        if (value === '' || realLength < 3) {
            showError(messageInput, "Le message doit contenir au moins 3 caractères");
            return false;
        }
        clearError(messageInput);
        return true;
    }

    // Validation en temps réel
    nomInput.addEventListener('input', validateName);
    emailInput.addEventListener('input', validateEmail);
    phoneInput.addEventListener('input', validatePhone);
    messageInput.addEventListener('input', validateMessage);

    // Soumission
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        let isValid = true;

        if (!validateName()) isValid = false;
        if (!validateEmail()) isValid = false;
        if (!validatePhone()) isValid = false;
        if (!validateMessage()) isValid = false;

        if (isValid) {
            showSuccessMessage();
            
            setTimeout(() => {
                form.reset();
                const inputs = [nomInput, emailInput, phoneInput, messageInput];
                inputs.forEach(input => input.style.borderColor = '');
            }, 2500);
        }
    });

    function showSuccessMessage() {
        let existing = document.querySelector('.success-message');
        if (existing) existing.remove();

        const successDiv = document.createElement('div');
        successDiv.className = 'success-message';
        successDiv.style.cssText = `
            background: #d4edda; color: #155724; padding: 15px 20px; 
            border-radius: 8px; border: 1px solid #c3e6cb; margin: 20px 0;
            text-align: center; font-weight: 500;
        `;
        successDiv.innerHTML = `
            <i class="fas fa-check-circle"></i> 
            Formulaire envoyé avec succès ! Nous vous contacterons bientôt.
        `;

        form.insertBefore(successDiv, form.firstChild);

        setTimeout(() => {
            successDiv.style.opacity = '0';
            setTimeout(() => successDiv.remove(), 600);
        }, 5000);
    }
});