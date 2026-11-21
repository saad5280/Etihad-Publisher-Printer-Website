// Etihad Publishers & Printers - Client Application Scripts
// Featuring Lenis Smooth Scrolling & Framer Motion Scroll Orchestration

import Lenis from 'lenis';

// Initialize Lenis Smooth Scrolling
let lenisInstance = null;

function initLenis() {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    if (!lenisInstance) {
        lenisInstance = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // easeOutExpo
            orientation: 'vertical',
            gestureOrientation: 'vertical',
            smoothWheel: true,
            wheelMultiplier: 1,
            touchMultiplier: 2,
        });

        function raf(time) {
            lenisInstance.raf(time);
            requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);
    }
}

// Framer Motion Style Intersection Observer
const revealSelector = '.reveal-from-left, .reveal-from-right, .reveal-from-bottom, .reveal-scale, .framer-card, .glass-card, .glass-panel';
let revealObserver = null;

function initHeaderMotion() {
    const header = document.querySelector('[data-site-header]');
    if (!header) {
        return;
    }

    const updateHeader = () => header.classList.toggle('is-scrolled', window.scrollY > 48);
    updateHeader();
    if (header.scrollHandler) {
        window.removeEventListener('scroll', header.scrollHandler);
    }
    header.scrollHandler = updateHeader;
    window.addEventListener('scroll', header.scrollHandler, { passive: true });
}

function initAnchorScrolling() {
    document.addEventListener('click', (event) => {
        const link = event.target.closest('a[href^="#"]');
        if (!link || !lenisInstance) {
            return;
        }

        const target = document.querySelector(link.getAttribute('href'));
        if (target) {
            event.preventDefault();
            lenisInstance.scrollTo(target, { offset: -104, duration: 1.15 });
        }
    });
}

function initScrollReveal() {
    const elements = [...document.querySelectorAll(revealSelector)];

    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        revealObserver?.disconnect();
        revealObserver = null;
        document.documentElement.classList.remove('motion-ready');
        elements.forEach((element) => element.classList.add('is-revealed'));
        return;
    }

    document.documentElement.classList.add('motion-ready');
    revealObserver?.disconnect();

    const pendingElements = elements.filter((element) => !element.classList.contains('is-revealed'));
    if (!pendingElements.length) {
        revealObserver = null;
        return;
    }

    if (!('IntersectionObserver' in window)) {
        pendingElements.forEach((element) => element.classList.add('is-revealed'));
        revealObserver = null;
        return;
    }

    revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-revealed');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.05,
        rootMargin: '0px 0px -6% 0px',
    });

    pendingElements.forEach((element) => revealObserver.observe(element));
}

function initApp() {
    initLenis();
    initScrollReveal();
    initHeaderMotion();
    initAnchorScrolling();
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initApp, { once: true });
} else {
    initApp();
}

document.addEventListener('livewire:navigated', () => {
    initScrollReveal();
    initHeaderMotion();
    if (lenisInstance) {
        lenisInstance.scrollTo(0, { immediate: true });
    }
});

window.addEventListener('pageshow', (event) => {
    if (event.persisted) {
        initScrollReveal();
    }
});
