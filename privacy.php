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
        <?= $domainTitle ?> — Polityka prywatności
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
            <h1 data-aos="fade-up">Polityka prywatności</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                Polityka prywatności dotyczy danych osobowych przekazywanych przez klientów <strong><?= $domainTitle ?></strong>, 
                zarówno w celu świadczenia różnego rodzaju usług doradczych, jak i innych interakcji w formacie elektronicznym, 
                w tym wsparcia technicznego i informacyjnego.
            </p>

            <div class="contact-cards">
                <div class="contact-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="contact-card__icon">
                        <i class="fa-solid fa-database"></i>
                    </div>
                    <h2>Gromadzenie danych</h2>
                    <p><?= $domainTitle ?> gromadzi dane wyłącznie za Twoją zgodą, aby świadczyć wysokiej jakości usługi consultingowe.</p>
                </div>

                <div class="contact-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="contact-card__icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h2>Bezpieczeństwo</h2>
                    <p>Stosujemy nowoczesne protokoły szyfrowania i szereg środków zapobiegających wyciekowi Twoich informacji.</p>
                </div>

                <div class="contact-card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="contact-card__icon">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <h2>Przechowywanie</h2>
                    <p>Dane są przechowywane do momentu osiągnięcia celu przetwarzania lub do oficjalnego wycofania zgody przez użytkownika.</p>
                </div>
            </div>

            <div class="policy-details" style="margin-top: 40px;">
                <p data-aos="fade-up">
                    <strong><?= $domainTitle ?></strong> zastrzega sobie prawo do wprowadzania zmian w Polityce. Przekazując swoje dane, wyrażasz pełną zgodę na ich przetwarzanie w sposób przewidziany w niniejszym dokumencie.
                </p>

                <h2 data-aos="fade-up">Informacje techniczne</h2>
                <ul data-aos="fade-up">
                    <li>Czas dostępu, adres IP i typ przeglądarki;</li>
                    <li>Źródła odesłań do zasobu <strong><?= $fullDomain ?></strong>;</li>
                    <li>Odwiedzane strony i wyświetlenia bloków informacyjnych;</li>
                    <li>Numer telefonu (w przypadku kontaktu telefonicznego).</li>
                </ul>

                <h2 data-aos="fade-up">Informacje o działaniach</h2>
                <ul data-aos="fade-up">
                    <li>Dane o umowach i programach eksperckich;</li>
                    <li>Zapytania wysyłane przez formularze kontaktowe;</li>
                    <li>Dokonane płatności zgodnie z przepisami prawa polskiego i UE.</li>
                </ul>

                <h2 data-aos="fade-up">Przekazywanie danych</h2>
                <p data-aos="fade-up">
                    Nie udostępniamy danych osobom trzecim, z wyjątkiem przypadków wyraźnej zgody użytkownika lub wymagań właściwych organów Rzeczypospolitej Polskiej.
                </p>

                <h2 data-aos="fade-up">Wykorzystanie Cookies</h2>
                <p data-aos="fade-up">
                    Pliki cookie pomagają nam analizować ruch i zachowywać Twoje preferencje (np. ustawienia regionu), aby korzystanie z serwisu było jak najbardziej efektywne. Możesz je wyłączyć w ustawieniach przeglądarki.
                </p>
            </div>

            <div class="contact-extra" data-aos="fade-up">
                <h2>Prawa użytkownika</h2>
                <p>
                    Jeśli chcesz edytować swoje dane lub całkowicie zaprzestać ich przetwarzania zgodnie z RODO (GDPR), 
                    skontaktuj się z zespołem <strong><?= $domainTitle ?></strong>:
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