document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    const formGroups = document.querySelectorAll('.form-group');

    // Add floating label effect
    formGroups.forEach(group => {
        const input = group.querySelector('input, textarea');
        const label = group.querySelector('label');

        input.addEventListener('focus', () => {
            label.classList.add('active');
        });

        input.addEventListener('blur', () => {
            if (!input.value) {
                label.classList.remove('active');
            }
        });

        // Check if input has value on page load
        if (input.value) {
            label.classList.add('active');
        }
    });

    // Handle form submission
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(contactForm);
        
        fetch('save_contact.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            if (data.success) {
                contactForm.reset();
                formGroups.forEach(group => {
                    group.querySelector('label').classList.remove('active');
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while sending the message. Please try again.');
        });
    });
});