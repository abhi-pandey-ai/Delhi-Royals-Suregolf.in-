// script.js - Interactive JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileBtn = document.querySelector('.mobile-menu-btn');
    const navMenu = document.querySelector('.main-nav ul');
    
    if(mobileBtn) {
        mobileBtn.addEventListener('click', function() {
            navMenu.classList.toggle('show');
        });
    }
    
    // Close mobile menu on link click
    const navLinks = document.querySelectorAll('.main-nav a');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if(navMenu.classList.contains('show')) {
                navMenu.classList.remove('show');
            }
        });
    });
    
    // Contact form handling
    const contactForm = document.getElementById('contactForm');
    if(contactForm) {
        contactForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            const statusDiv = document.getElementById('formStatus');
            
            statusDiv.innerHTML = '<i class="fas fa-spinner fa-pulse"></i> Sending message...';
            
            setTimeout(() => {
                statusDiv.innerHTML = '<span style="color: #4caf50;"><i class="fas fa-check-circle"></i> Thank you! We will get back to you soon.</span>';
                contactForm.reset();
                setTimeout(() => {
                    statusDiv.innerHTML = '';
                }, 5000);
            }, 1500);
        });
    }
    
    // Add active class to current page
    const currentPage = window.location.pathname.split('/').pop() || 'index.php';
    document.querySelectorAll('.main-nav a').forEach(link => {
        const href = link.getAttribute('href');
        if(href === currentPage) {
            link.classList.add('active');
        }
    });
});