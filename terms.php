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
        <?= $domainTitle ?> — Warunki użytkowania
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
            <h1 data-aos="fade-up">Warunki użytkowania</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                Witamy na stronie <strong><?= $domainTitle ?></strong>! Niniejsze Warunki użytkowania 
                (dalej – „Warunki” lub „Umowa”) stanowią prawnie wiążącą umowę między Tobą (dalej – „Użytkownik”) 
                a <strong><?= $domainTitle ?></strong> (dalej – „Firma”, „my”, „nas”). Korzystając z naszej strony 
                oraz wszelkich powiązanych usług, potwierdzasz pełną i bezwarunkową akceptację niniejszych Warunków.
            </p>

            <h2 data-aos="fade-up">1. Przedmiot Umowy</h2>
            <p data-aos="fade-up">
                Firma zapewnia Użytkownikowi dostęp do strony <strong><?= $fullDomain ?></strong> oraz jej funkcjonalności, 
                w tym dostępu do innowacyjnych materiałów, artykułów blogowych, konsultacji eksperckich i innych narzędzi 
                rozwojowych. Niniejsza Umowa reguluje wszelkie aspekty interakcji Użytkownika z platformą.
            </p>

            <h2 data-aos="fade-up">2. Prawa i obowiązki Użytkownika</h2>
            <p data-aos="fade-up">Podczas korzystania z platformy <strong><?= $domainTitle ?></strong> zabrania się:</p>
            
            <div class="contact-cards">
                <div class="contact-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="contact-card__icon">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <h3>Nielegalne treści</h3>
                    <p>Publikowania lub rozpowszechniania informacji naruszających prawa autorskie lub obowiązujące prawo.</p>
                </div>

                <div class="contact-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="contact-card__icon">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <h3>Ataki na system</h3>
                    <p>Podejmowania działań mających na celu zakłócenie działania infrastruktury cyfrowej Firmy.</p>
                </div>

                <div class="contact-card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="contact-card__icon">
                        <i class="fa-solid fa-robot"></i>
                    </div>
                    <h3>Używanie botów</h3>
                    <p>Stosowania zautomatyzowanych skryptów do zbierania danych bez naszej uprzedniej zgody.</p>
                </div>
            </div>

            <div class="policy-details" style="margin-top: 40px;">
                <h2 data-aos="fade-up">3. Własność intelektualna</h2>
                <p data-aos="fade-up">
                    Wszystkie treści zamieszczone na stronie <strong><?= $fullDomain ?></strong>, w tym teksty, grafiki oraz kod oprogramowania, 
                    stanowią własność intelektualną Firmy. Użytkownik otrzymuje ograniczoną licencję na korzystanie z Treści do celów osobistych. 
                    Jakiekolwiek kopiowanie bez zgody jest surowo zabronione.
                </p>

                <h2 data-aos="fade-up">4. Wyłączenie gwarancji</h2>
                <p data-aos="fade-up">
                    Usługi są świadczone na zasadzie „tak jak są”. Nie gwarantujemy nieprzerwanego działania strony w kontekście 
                    dynamicznie zmieniającego się rynku w <strong>Polsce</strong> oraz UE. Firma nie ponosi odpowiedzialności za jakiekolwiek 
                    straty wynikające z korzystania z platformy.
                </p>

                <h2 data-aos="fade-up">5. Rozstrzyganie sporów</h2>
                <p data-aos="fade-up">
                    Wszelkie spory będą rozstrzyganie drodze negocjacji. W przypadku braku porozumienia, spór podlega rozpatrzeniu 
                    zgodnie z obowiązującymi przepisami prawa właściwego dla miejsca rejestracji Firmy w <strong>Warszawie, Polska</strong>.
                </p>
            </div>

            <div class="contact-extra" data-aos="fade-up">
                <h2>Informacje kontaktowe</h2>
                <p>
                    Jeśli masz jakiekolwiek pytania dotyczące niniejszych Warunków, prosimy o kontakt:
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
        <p>&copy; 2026 <?= $domainTitle ?>. Platforma jest już dostępna w całej Europie.</p>
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