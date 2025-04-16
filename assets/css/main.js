// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function () {
    // Mobile menu handler
    const menuToggle = document.createElement('div');
    menuToggle.className = 'mobile-menu-toggle';
    menuToggle.innerHTML = '<span></span><span></span><span></span>';
    document.querySelector('.main-navigation').prepend(menuToggle);

    // Toggle menu
    menuToggle.addEventListener('click', function () {
        document.querySelector('.primary-menu').classList.toggle('active');
        this.classList.toggle('open');
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });


// Sticky header
window.addEventListener('scroll', function () {
    const header = document.querySelector('.site-header');
    if (window.scrollY > 100) {
        header.classList.add('sticky');
    } else {
        header.classList.remove('sticky');
    }
});
}
