/**
 * Omnic-Drive Project: Full Managed Script
 * Version: 2026.02 - Fixed Mobile Menu & Cookie Popup
 */

document.addEventListener('DOMContentLoaded', () => {

    // --- 1. COOKIE POPUP (ПЕРЕНЕСЕНО ВВЕРХ) ---
    const cp = document.getElementById('cookie-popup');
    const ca = document.getElementById('cookie-accept');
    
    // Показываем попап через 2 секунды, если еще не принимали
    if (cp && !localStorage.getItem('cookieAccepted')) {
        setTimeout(() => cp.classList.add('active'), 2000);
    }
    
    if (ca) {
        ca.addEventListener('click', () => {
            localStorage.setItem('cookieAccepted', 'true');
            cp.classList.remove('active');
        });
    }

    // --- 2. МОБИЛЬНОЕ МЕНЮ (ПОД ВАШ HTML) ---
    const menuToggle = document.getElementById('menu-toggle');
    const nav = document.querySelector('.nav');
    const navLinks = document.querySelectorAll('.nav__link');

    if (menuToggle && nav) {
        const toggleMenu = () => {
            const isActive = menuToggle.classList.toggle('active');
            nav.classList.toggle('active');
            
            // Блокировка скролла страницы при открытом меню
            document.body.style.overflow = isActive ? 'hidden' : '';
        };

        menuToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleMenu();
        });

        // Закрываем при клике на любую ссылку навигации
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (nav.classList.contains('active')) toggleMenu();
            });
        });

        // Закрытие при клике вне области меню
        document.addEventListener('click', (e) => {
            if (nav.classList.contains('active') && !nav.contains(e.target) && e.target !== menuToggle) {
                toggleMenu();
            }
        });
    }

    // --- 3. ИНИЦИАЛИЗАЦИЯ AOS ---
    const loadAOS = () => {
        const script = document.createElement('script');
        script.src = "https://unpkg.com/aos@2.3.1/dist/aos.js";
        document.body.appendChild(script);
        script.onload = () => {
            if (typeof AOS !== 'undefined') {
                AOS.init({ duration: 1000, once: true, offset: 50 });
            }
        };
    };
    loadAOS();

    // --- 4. HERO CANVAS ANIMATION ---
    const heroCanvas = document.getElementById('heroCanvas');
    if (heroCanvas) {
        const hCtx = heroCanvas.getContext('2d');
        let hParticles = [];
        let mouse = { x: null, y: null };

        const initHeroCanvas = () => {
            heroCanvas.width = heroCanvas.parentElement.offsetWidth;
            heroCanvas.height = heroCanvas.parentElement.offsetHeight;
        };

        window.addEventListener('mousemove', (e) => {
            const rect = heroCanvas.getBoundingClientRect();
            mouse.x = e.clientX - rect.left;
            mouse.y = e.clientY - rect.top;
        });

        class HeroParticle {
            constructor() { this.reset(); }
            reset() {
                this.x = Math.random() * heroCanvas.width;
                this.y = Math.random() * heroCanvas.height;
                this.baseX = this.x;
                this.baseY = this.y;
                this.size = Math.random() * 3 + 1;
                this.density = (Math.random() * 30) + 1;
                this.color = '#4F46E5';
            }
            update() {
                let dx = mouse.x - this.x;
                let dy = mouse.y - this.y;
                let distance = Math.hypot(dx, dy);
                if (distance < 150) {
                    let force = (150 - distance) / 150;
                    this.x -= (dx / distance) * force * this.density;
                    this.y -= (dy / distance) * force * this.density;
                } else {
                    this.x -= (this.x - this.baseX) / 15;
                    this.y -= (this.y - this.baseY) / 15;
                }
            }
            draw() {
                hCtx.fillStyle = this.color;
                hCtx.beginPath(); hCtx.arc(this.x, this.y, this.size, 0, Math.PI * 2); hCtx.fill();
            }
        }

        const setupHero = () => {
            hParticles = [];
            for (let i = 0; i < 120; i++) hParticles.push(new HeroParticle());
        };

        const animateHero = () => {
            hCtx.clearRect(0, 0, heroCanvas.width, heroCanvas.height);
            hParticles.forEach(p => { p.update(); p.draw(); });
            requestAnimationFrame(animateHero);
        };

        initHeroCanvas(); setupHero(); animateHero();
        window.addEventListener('resize', () => { initHeroCanvas(); setupHero(); });
    }

    // --- 5. NEURAL CANVAS (ABOUT) ---
    const aboutCanvas = document.getElementById('neuralCanvas');
    if (aboutCanvas) {
        const aCtx = aboutCanvas.getContext('2d');
        let aParticles = [];
        const initAboutCanvas = () => {
            aboutCanvas.width = aboutCanvas.parentElement.offsetWidth;
            aboutCanvas.height = aboutCanvas.parentElement.offsetHeight;
        };
        class AboutParticle {
            constructor() {
                this.x = Math.random() * aboutCanvas.width;
                this.y = Math.random() * aboutCanvas.height;
                this.speedX = Math.random() * 0.8 - 0.4;
                this.speedY = Math.random() * 0.8 - 0.4;
            }
            update() {
                this.x += this.speedX; this.y += this.speedY;
                if (this.x > aboutCanvas.width || this.x < 0) this.speedX *= -1;
                if (this.y > aboutCanvas.height || this.y < 0) this.speedY *= -1;
            }
            draw() {
                aCtx.fillStyle = 'rgba(79, 70, 229, 0.6)';
                aCtx.beginPath(); aCtx.arc(this.x, this.y, 2, 0, Math.PI * 2); aCtx.fill();
            }
        }
        const setupAbout = () => {
            aParticles = [];
            for (let i = 0; i < 60; i++) aParticles.push(new AboutParticle());
        };
        const animateAbout = () => {
            aCtx.clearRect(0, 0, aboutCanvas.width, aboutCanvas.height);
            aParticles.forEach((p, i) => {
                p.update(); p.draw();
                for (let j = i; j < aParticles.length; j++) {
                    const dist = Math.hypot(p.x - aParticles[j].x, p.y - aParticles[j].y);
                    if (dist < 100) {
                        aCtx.strokeStyle = `rgba(79, 70, 229, ${1 - dist / 100})`;
                        aCtx.lineWidth = 0.5;
                        aCtx.beginPath(); aCtx.moveTo(p.x, p.y); aCtx.lineTo(aParticles[j].x, aParticles[j].y); aCtx.stroke();
                    }
                }
            });
            requestAnimationFrame(animateAbout);
        };
        initAboutCanvas(); setupAbout(); animateAbout();
        window.addEventListener('resize', () => { initAboutCanvas(); setupAbout(); });
    }

    // --- 6. КОНТАКТНАЯ ФОРМА ---
    const form = document.getElementById('ajax-form');
    if (form) {
        const cLabel = document.getElementById('captcha-label');
        const cInput = document.getElementById('captcha-input');
        const response = document.getElementById('form-response');
        const n1 = Math.floor(Math.random() * 10), n2 = Math.floor(Math.random() * 10);
        const sum = n1 + n2;
        if (cLabel) cLabel.innerText = `Сколько будет ${n1} + ${n2}?`;

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            if (parseInt(cInput?.value) !== sum) {
                response.innerText = "Ошибка капчи!";
                response.className = "form-response error";
                return;
            }
            response.innerText = "Успешно отправлено!";
            response.className = "form-response success";
            response.style.display = "block";
            form.reset();
        });
    }
});