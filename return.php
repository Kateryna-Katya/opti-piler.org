<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Polityka zwrotów
    </title>
    <link rel="icon"
        href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='8' fill='%234F46E5'/%3E%3Cpath d='M16 8L24 16L16 24L8 16L16 8Z' fill='white'/%3E%3Ccircle cx='16' cy='16' r='3' fill='%23FFF5F0'/%3E%3C/svg%3E"
        type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Outfit:wght@500;700&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header class="header">
    <div class="container header__container">
        <a href="./#home" class="logo">
            <span class="logo__dot"></span>
            <?= $domainTitle ?>
        </a>

        <nav class="nav">
            <ul class="nav__list">
                <li><a href="./#home" class="nav__link">Strona główna</a></li>
                <li><a href="./#about" class="nav__link">O platformie</a></li>
                <li><a href="./#courses" class="nav__link">Kursy</a></li>
                <li><a href="./#tech" class="nav__link">Technologie</a></li>
                <li><a href="./#reviews" class="nav__link">Opinie</a></li>
            </ul>
        </nav>

        <a href="./#contact" class="btn btn--outline header__btn">Kontakt</a>

        <button class="menu-toggle" id="menu-toggle" aria-label="Otwórz menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<main>
    <section class="pages">
        <div class="container">
            <h1 data-aos="fade-up">Polityka zwrotu środków</h1>
            
            <p data-aos="fade-up" data-aos-delay="100">
                Dążymy do zapewnienia najwyższej jakości naszych materiałów eksperckich i usług doradczych. 
                Jeśli nie jesteś usatysfakcjonowany usługami <strong><?= $domainTitle ?></strong>, zapoznaj się z zasadami zwrotu środków.
            </p>

            <h2 data-aos="fade-up">Warunki ubiegania się o zwrot</h2>
            <div class="contact-cards">
                <div class="contact-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="contact-card__icon">
                        <i class="fa-solid fa-file-circle-exclamation"></i>
                    </div>
                    <h3>Niezgodność z programem</h3>
                    <p>Jeśli treść materiałów znacząco odbiega od programu zadeklarowanego na platformie <?= $domainTitle ?>.</p>
                </div>

                <div class="contact-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="contact-card__icon">
                        <i class="fa-solid fa-server"></i>
                    </div>
                    <h3>Awarie techniczne</h3>
                    <p>Krytyczne błędy po stronie serwisu, uniemożliwiające dostęp do opłaconych usług.</p>
                </div>

                <div class="contact-card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="contact-card__icon">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>
                    <h3>Okres odstąpienia</h3>
                    <p>Prawo do rezygnacji w ciągu 14 dni od daty płatności (pod warunkiem braku pełnego wykorzystania treści).</p>
                </div>
            </div>

            <div class="policy-details" style="margin-top: 40px;">
                <h2 data-aos="fade-up">Procedura składania wniosku</h2>
                <ol class="custom-list" data-aos="fade-up">
                    <li>Wyślij wiadomość e-mail na adres: <a href="mailto:hello@opti-piler.org" class="contact-link">hello@opti-piler.org</a>.</li>
                    <li>W temacie wpisz: „Wniosek o zwrot środków”.</li>
                    <li>Podaj swoje imię, e-mail użyty do rejestracji oraz nazwę programu.</li>
                    <li>Szczegółowo opisz przyczynę wniosku, odnosząc się do warunków polityki.</li>
                    <li>Termin rozpatrzenia wniosku przez nasze wsparcie techniczne wynosi do 3 dni roboczych.</li>
                </ol>

                <h2 data-aos="fade-up">Terminy i sposób zwrotu</h2>
                <p data-aos="fade-up">
                    Po zatwierdzeniu wniosku, środki są zwracane w ciągu 7–14 dni roboczych tą samą metodą, którą dokonano płatności. 
                    Faktyczny termin zaksięgowania zależy od regulaminu Twojego banku w <strong>Polsce</strong> lub kraju Twojego zamieszkania.
                </p>

                <h2 data-aos="fade-up">Wyłączenia</h2>
                <ul data-aos="fade-up">
                    <li>Wniosek złożony po upływie 14 dni kalendarzowych od daty transakcji.</li>
                    <li>Użytkownik zapoznał się lub pobrał więcej niż 50% materiałów programu.</li>
                    <li>Problemy z dostępem wynikają z usterek technicznych po stronie użytkownika.</li>
                    <li>Naruszenie warunków Regulaminu <?= $domainTitle ?> przez użytkownika.</li>
                </ul>
            </div>

            <div class="contact-extra" data-aos="fade-up">
                <h2>Skontaktuj się z nami</h2>
                <p>
                    W przypadku pytań dotyczących zwrotów lub warunków konsultacji, prosimy o kontakt:
                </p>
                <div style="margin-top: 20px;">
                    Email: <a href="mailto:hello@opti-piler.org" class="contact-link">hello@opti-piler.org</a><br>
                    Telefon: <a href="tel:+48228122949" class="contact-link">+48 22 812 29 49</a><br>
                    Adres: Złota 59, 00-120 Warszawa, Polska
                </div>
                <br>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="container footer__grid">
        <div class="footer__col">
            <a href="./#home" class="logo footer__logo">
                <span class="logo__dot"></span>
                <?= $domainTitle ?>
            </a>
            <p class="footer__desc">
                Zaawansowana infrastruktura cyfrowa dla Twojej edukacji. Technologie, które pracują dla Ciebie.
            </p>
        </div>

        <div class="footer__col">
            <h4 class="footer__title">Nawigacja</h4>
            <ul class="footer__links">
                <li><a href="./#home">Strona główna</a></li>
                <li><a href="./#about">O platformie</a></li>
                <li><a href="./#courses">Kursy</a></li>
                <li><a href="./#tech">Technologie</a></li>
            </ul>
        </div>

        <div class="footer__col">
            <h4 class="footer__title">Dokumenty</h4>
            <ul class="footer__links">
                <li><a href="./privacy.php">Privacy Policy</a></li>
                <li><a href="./cookies.php">Cookie Policy</a></li>
                <li><a href="./terms.php">Terms of Service</a></li>
                <li><a href="./return.php">Return Policy</a></li>
                <li><a href="./disclaimer.php">Disclaimer</a></li>
                <li><a href="./contact.php">Kontakt</a></li>
                <li><a href="./personal-data-policy.php">Polityka danych</a></li>
            </ul>
        </div>

        <div class="footer__col">
            <h4 class="footer__title">Kontakt</h4>
            <ul class="footer__contact">
                <li>
                    <i class="fa-solid fa-phone"></i>
                    <a href="tel:+48228122949">+48 22 812 29 49</a>
                </li>
                <li>
                    <i class="fa-solid fa-envelope"></i>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="contact-link">hello@<?= $fullDomain ?></a>
                </li>
                <li>
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Złota 59, 00-120 Warszawa, Polska</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="container footer__bottom">
        <p>&copy; 2026 <?= $domainTitle ?>. Platforma jest już dostępna w Europie.</p>
    </div>
</footer>

<div id="cookie-popup" class="cookie-popup">
    <p>Ta strona używa plików cookies w celu poprawy działania. Więcej informacji w naszej <a href="./cookies.php">Polityce Cookies</a>.</p>
    <button id="cookie-accept" class="btn btn--primary">Akceptuję</button>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>
    <script src="script.js"></script>
</body>

</html>