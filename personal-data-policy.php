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
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Инновации на пальцах
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
                <li><a href="./#home" class="nav__link">Главная</a></li>
                <li><a href="./#about" class="nav__link">О платформе</a></li>
                <li><a href="./#courses" class="nav__link">Курсы</a></li>
                <li><a href="./#tech" class="nav__link">Технологии</a></li>
                <li><a href="./#reviews" class="nav__link">Отзывы</a></li>
            </ul>
        </nav>

        <a href="./#contact" class="btn btn--outline header__btn">Связаться</a>

        <button class="menu-toggle" id="menu-toggle" aria-label="Открыть меню">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>
<main>
    <section class="pages">
        <div class="container">
            <h1 data-aos="fade-up">Политика обработки персональных данных</h1>

            <div class="policy-intro" data-aos="fade-up">
                <p>
                    Настоящая политика (далее — «Политика») определяет порядок и условия обработки персональных
                    данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), 
                    зарегистрированной в Великобритании, и устанавливает меры по обеспечению безопасности этих данных в соответствии с регламентом GDPR.
                </p>
            </div>

            <div class="contact-cards">
                <div class="contact-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="contact-card__icon">
                        <i data-lucide="fingerprint"></i>
                    </div>
                    <h2>Ваши данные</h2>
                    <p>Мы собираем Email, имя и телефон только для связи с вами и предоставления экспертных услуг.</p>
                </div>

                <div class="contact-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="contact-card__icon">
                        <i data-lucide="shield-check"></i>
                    </div>
                    <h2>Безопасность</h2>
                    <p>Мы используем современные методы шифрования для защиты вашей информации от несанкционированного доступа.</p>
                </div>

                <div class="contact-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="contact-card__icon">
                        <i data-lucide="check-circle"></i>
                    </div>
                    <h2>Ваше согласие</h2>
                    <p>Вы всегда можете отозвать согласие на обработку данных, написав нам на электронную почту.</p>
                </div>
            </div>

            <div class="policy-details" style="margin-top: 40px;">
                <h2 data-aos="fade-up">1. Основные понятия</h2>
                <p data-aos="fade-up">
                    <strong>Персональные данные</strong> — любая информация, относящаяся к Пользователю сайта <strong><?= $fullDomain ?></strong>.
                    Обработка включает сбор, запись, накопление, хранение и удаление данных.
                </p>

                <h2 data-aos="fade-up">2. Цели обработки</h2>
                <ul data-aos="fade-up">
                    <li>Идентификация Пользователя для доступа к сервисам консалтинговой платформы.</li>
                    <li>Установление обратной связи и обработка заявок.</li>
                    <li>Исполнение договоров на консалтинговые услуги в Великобритании и Европе.</li>
                    <li>Улучшение качества работы сайта посредством аналитики.</li>
                </ul>

                <h2 data-aos="fade-up">3. Сбор и хранение</h2>
                <p data-aos="fade-up">
                    Оператор принимает все необходимые технические меры для защиты данных от взлома. 
                    Ваши номера телефонов проходят валидацию по стандартам Великобритании (UK) и Европы. 
                    Мы никогда не передаем ваши данные третьим лицам без вашего прямого согласия.
                </p>

                <h2 data-aos="fade-up">4. Ваши права (GDPR)</h2>
                <p data-aos="fade-up">
                    Вы имеете право на доступ к своим данным, их исправление, удаление («право на забвение») и ограничение обработки. Для реализации этих прав направьте запрос на нашу почту.
                </p>
            </div>

            <div class="contact-extra" data-aos="fade-up">
                <p>
                    Если у вас возникли вопросы касательно обработки данных в <strong><?= $domainTitle ?></strong>, мы на связи:
                </p>
                <div style="margin-top: 20px;">
                    Email: <a href="mailto:hello@<?= $fullDomain ?>" class="contact-link">hello@<?= $fullDomain ?></a><br>
                    Адрес: 24 Chiswell St, London EC1Y 4TY, UK
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
                    Передовая цифровая инфраструктура для вашего обучения. Технологии, которые работают на вас.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#home">Главная</a></li>
                    <li><a href="./#about">О платформе</a></li>
                    <li><a href="./#courses">Курсы</a></li>
                    <li><a href="./#tech">Технологии</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact">
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:+442094272498">+44 20 9427 2498</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@
                            <?= $fullDomain ?>
                        </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>24 Chiswell St, London EC1Y 4TY, UK</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy; 2026
                <?= $domainTitle ?>. Платформа уже доступна в Европе.
            </p>
        </div>
    </footer>
<div id="cookie-popup" class="cookie-popup">
    <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.
    </p>
    <button id="cookie-accept" class="btn btn--primary">Принять</button>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>
    <script src="script.js"></script>
</body>

</html>