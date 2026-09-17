import './bootstrap';

import Alpine from 'alpinejs';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger);

// Initialize Alpine
window.Alpine = Alpine;
Alpine.start();

window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;

document.addEventListener('DOMContentLoaded', () => {

    // Parallax Effect for Hero Background Video
    if (document.querySelector('.hero-bg')) {
        gsap.to('.hero-bg', {
            yPercent: 50,
            ease: "none",
            scrollTrigger: {
                trigger: "#about",
                start: "top top",
                end: "bottom top",
                scrub: true
            }
        });
    }

    // Hero Text Parallax — moves up and fades as user scrolls away
    if (document.querySelector('.hero-content')) {
        gsap.to('.hero-content', {
            yPercent: 30,
            opacity: 0,
            ease: "none",
            scrollTrigger: {
                trigger: "#about",
                start: "top top",
                end: "bottom top",
                scrub: true
            }
        });
    }

    // Fade In Up for all elements with .fade-up class
    const fadeUpElements = gsap.utils.toArray('.fade-up');
    fadeUpElements.forEach((el) => {
        gsap.fromTo(el,
            { y: 50, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 1,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: el,
                    start: "top 85%",
                    toggleActions: "play none none reverse"
                }
            }
        );
    });

    // Project Image Parallax — images scroll at a different speed
    const projectImages = gsap.utils.toArray('.project-img-wrapper img');
    projectImages.forEach((img) => {
        gsap.to(img, {
            yPercent: 20,
            ease: "none",
            scrollTrigger: {
                trigger: img.parentElement,
                start: "top bottom",
                end: "bottom top",
                scrub: true
            }
        });
    });

});
