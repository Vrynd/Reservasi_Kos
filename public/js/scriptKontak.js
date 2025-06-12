document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contactForm');

    form.addEventListener('submit', (event) => {
        event.preventDefault(); // Prevent the form from submitting normally

        // Extract form data
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        // Display a success message
        alert(`Terima kasih, ${name}! Pesan Anda telah dikirim.`);

        // Clear the form fields
        form.reset();
    });
});
