/* SLIDING IN ANIMATION */
document.addEventListener('DOMContentLoaded', (event) => {
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate__slideInUp');
                observer.unobserve(entry.target);
            }
        });
    });

    const elements = document.querySelectorAll('.animate-on-scroll');
    elements.forEach(element => {
        observer.observe(element);
    });
});
/* ZOOMING IN ANIMATION */
document.addEventListener('DOMContentLoaded', (event) => {
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate__zoomIn');
                observer.unobserve(entry.target);
            }
        });
    });

    const elements = document.querySelectorAll('.animate-zoom-on-scroll');
    elements.forEach(element => {
        observer.observe(element);
    });
});
/* MOBILE NAVBAR TOGGLER */
function toggleNav() {
    var nav = document.getElementById("mobileNav");
    nav.classList.toggle("open");
    var navbar = document.querySelector(".navbar");
    navbar.classList.toggle("dark-background");
}

/* HOVER ANIMATION  */
document.addEventListener('DOMContentLoaded', () => {
    const blurBackground = document.getElementById('background-blur');
    const phones = document.querySelectorAll('.phone');

    let lastHoveredElement = localStorage.getItem('lastHoveredElement');

    if (lastHoveredElement) {
        const savedPhone = document.getElementById(lastHoveredElement);
        if (savedPhone) {
            const rect = savedPhone.getBoundingClientRect();
            blurBackground.style.transform = `translate(${rect.left}px, ${rect.top}px)`;
        }
    }

    phones.forEach(phone => {
        phone.addEventListener('mouseenter', () => {
            const rect = phone.getBoundingClientRect();
            blurBackground.style.transform = `translate(${phone.offsetLeft}px, ${phone.offsetTop}px)`;
            localStorage.setItem('lastHoveredElement', phone.id);
        });
    });
});
/* TRIGGER EARTH ANIMATION ON SCROLL */
document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.5 // Trigger when 50% of target is visible
    };

    const fadeInElements = document.querySelectorAll('.h2-hiro');

    fadeInElements.forEach(el => {
        el.style.opacity = '0'; // Initially hide other elements
    });

    const images = document.querySelectorAll('.im-planet');
    images.forEach((img, index) => {
        if (index !== 0) {
            img.style.opacity = '0'; // Initially hide other images
        }
    });

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.intersectionRatio >= 0.5) {
                images.forEach((img, index) => {
                    img.style.opacity = '1'; // Fade in all images
                });
                fadeInElements.forEach(el => {
                    el.style.opacity = '1'; 
                });
            } else {
                images.forEach((img, index) => {
                    if (index !== 0) {
                        img.style.opacity = '0'; // Fade out other images when out of view
                    }
                });
                fadeInElements.forEach(el => {
                    el.style.opacity = '0'; 
                });
            }
        });
    }, observerOptions);

    const target = document.querySelector('.box-im-planet'); // Observe the container of Earth images
    observer.observe(target);
});
