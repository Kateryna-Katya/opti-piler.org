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
            <h1 data-aos="fade-up">Условия использования</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                Добро пожаловать на сайт <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                (далее — «Условия» или «Соглашение») представляют собой юридически
                обязывающий договор между вами (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>
                (далее — «Компания», «мы», «нас»). Используя наш сайт и любые связанные с ним
                услуги, вы подтверждаете свое полное и безоговорочное согласие с
                данными Условиями.
            </p>

            <h2 data-aos="fade-up">1. Предмет Соглашения</h2>
            <p data-aos="fade-up">
                Компания предоставляет Пользователю доступ к использованию сайта
                <strong><?= $fullDomain ?></strong> и его функционала, включая доступ к
                инновационным материалам, статьям в блоге, экспертным консультациям и другим инструментам 
                развития. Настоящее Соглашение регулирует все аспекты взаимодействия Пользователя с платформой.
            </p>

            <h2 data-aos="fade-up">2. Обязанности и права Пользователя</h2>
            <p data-aos="fade-up">При использовании платформы <strong><?= $domainTitle ?></strong> запрещается:</p>
            
            <div class="contact-cards">
                <div class="contact-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="contact-card__icon">
                        <i data-lucide="shield-alert"></i>
                    </div>
                    <h3>Незаконный контент</h3>
                    <p>Публиковать или распространять информацию, нарушающую авторские права или закон.</p>
                </div>

                <div class="contact-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="contact-card__icon">
                        <i data-lucide="cpu"></i>
                    </div>
                    <h3>Атаки на систему</h3>
                    <p>Предпринимать действия, направленные на нарушение работы цифровой инфраструктуры компании.</p>
                </div>

                <div class="contact-card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="contact-card__icon">
                        <i data-lucide="bot"></i>
                    </div>
                    <h3>Использование ботов</h3>
                    <p>Применять автоматизированные скрипты для сбора данных без нашего разрешения.</p>
                </div>
            </div>

            <div class="policy-details" style="margin-top: 40px;">
                <h2 data-aos="fade-up">3. Интеллектуальная собственность</h2>
                <p data-aos="fade-up">
                    Весь контент, размещенный на сайте <strong><?= $fullDomain ?></strong>, включая тексты, графику и программный код, является объектом интеллектуальной
                    собственности Компании. Вам предоставляется ограниченная лицензия на использование Контента в личных целях. Любое копирование без разрешения строго запрещено.
                </p>

                <h2 data-aos="fade-up">4. Отказ от гарантий</h2>
                <p data-aos="fade-up">
                    Услуги предоставляются по принципу «как есть». Мы не гарантируем бесперебойную работу сайта в контексте динамически 
                    меняющегося рынка в <strong>Великобритании (UK)</strong> и странах ЕС. Компания не несет ответственности за любые убытки, возникшие в результате использования платформы.
                </p>

                <h2 data-aos="fade-up">5. Разрешение споров</h2>
                <p data-aos="fade-up">
                    Все споры будут разрешаться путем переговоров. В случае невозможности достижения согласия, спор подлежит рассмотрению в соответствии 
                    с действующим законодательством по месту регистрации Компании в <strong>Лондоне, Великобритания</strong>.
                </p>
            </div>

            <div class="contact-extra" data-aos="fade-up">
                <h2>Контактная информация</h2>
                <p>
                    Если у вас возникли вопросы, связанные с настоящими Условиями, пожалуйста, свяжитесь с нами:
                </p>
                <div style="margin-top: 20px;">
                    Email: <a href="mailto:hello@<?= $fullDomain ?>" class="contact-link">hello@<?= $fullDomain ?></a><br>
                    Телефон: <a href="tel:+442094272498" class="contact-link">+44 20 9427 2498</a><br>
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