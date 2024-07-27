<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astor Bank</title>
    <link rel="icon" href="./assets/images/logo.svg" />
    <link href="https://fonts.cdnfonts.com/css/chakra-petch" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/teko" rel="stylesheet">
    <link rel="stylesheet" href="./styles/common.css"/>
    <link rel="stylesheet" href="./styles/header.css"/>
    <link rel="stylesheet" href="./styles/hero.css"/>
    <link rel="stylesheet" href="./styles/nav.css"/>
    <link rel="stylesheet" href="./styles/features.css"/>
    <link rel="stylesheet" href="./styles/form.css"/>
    <link rel="stylesheet" href="./styles/footer.css"/>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <p class="header__title">Privacy-first. Owned by everyone.</p>
                <div class="header__lang-selector">
                    <button type="button" class="header__dropdown-btn">
                        <img src="./assets/images/flags/flag-en.svg" class="header__dropdown-flag"/>
                        <p class="header__dropdown-btn-text">EN</p>
                        <div class="header__dropdown-icon-box">
                            <img src="./assets/images/arrow-down.svg" alt="icon">
                        </div>
                    </button>
                    <ul class="header__dropdown-menu">
                        <li data-lang="en"><img src="./assets/images/flags/flag-en.svg"/> EN</li>
                        <li data-lang="ac"><img src="./assets/images/flags/flag-en.svg"/> AC</li>
                        <li data-lang="ad"><img src="./assets/images/flags/flag-ad.svg"/> AD</li>
                        <li data-lang="ab"><img src="./assets/images/flags/flag-ab.svg"/> AB</li>
                        <li data-lang="ad"><img src="./assets/images/flags/flag-ad.svg"/> AD</li>
                        <li data-lang="de"><img src="./assets/images/flags/flag-de.svg"/> DE</li>
                        <li data-lang="df"><img src="./assets/images/flags/flag-df.svg"/> DF</li>
                        <li data-lang="fr"><img src="./assets/images/flags/flag-fr.svg"/> FR</li>
                        <li data-lang="cr"><img src="./assets/images/flags/flag-cr.svg"/> CR</li>
                        <li data-lang="tc"><img src="./assets/images/flags/flag-tc.svg"/> TC</li>
                        <li data-lang="bn"><img src="./assets/images/flags/flag-bn.svg"/> BN</li>
                        <li data-lang="vb"><img src="./assets/images/flags/flag-vb.svg"/> VB</li>
                        <li data-lang="bt"><img src="./assets/images/flags/flag-bt.svg"/> BT</li>
                        <li data-lang="be"><img src="./assets/images/flags/flag-be.svg"/> BE</li>
                        <li data-lang="ra"><img src="./assets/images/flags/flag-ra.svg"/> RA</li>
                        <li data-lang="rt"><img src="./assets/images/flags/flag-rt.svg"/> RT</li>
                        <li data-lang="yh"><img src="./assets/images/flags/flag-yh.svg"/> YH</li>
                        <li data-lang="nn"><img src="./assets/images/flags/flag-nn.svg"/> NN</li>
                        <li data-lang="de"><img src="./assets/images/flags/flag-de.svg"/> DE</li>
                        <li data-lang="ty"><img src="./assets/images/flags/flag-ty.svg"/> TY</li>
                        <li data-lang="yu"><img src="./assets/images/flags/flag-yu.svg"/> YU</li>
                        <li data-lang="hn"><img src="./assets/images/flags/flag-hn.svg"/> HN</li>
                        <li data-lang="tv"><img src="./assets/images/flags/flag-tv.svg"/> TV</li>
                        <li data-lang="vp"><img src="./assets/images/flags/flag-vp.svg"/> VP</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="nav">
                <button class="nav__btn" id="nav-btn">
                    <img src="./assets/images/burger.svg" alt="icon">
                    Menu
                </button>
                <img src="./assets/images/logo.svg" alt="logo" class="nav__logo">
                <div class="navbar" id="navbar">
                    <ul class="navbar__list">
                        <li class="navbar__item"><img src="./assets/images/arrow-right-blue.svg" alt="icon">How it works</li>
                        <li class="navbar__item"><img src="./assets/images/arrow-right-blue.svg" alt="icon">Partnership</li>
                        <li class="navbar__item"><img src="./assets/images/arrow-right-blue.svg" alt="icon">Faq</li>
                        <li class="navbar__item"><img src="./assets/images/arrow-right-blue.svg" alt="icon">Sign In</li>
                        <li class="navbar__item">
                            <a href="#form" class="navbar__item">
                                <img src="./assets/images/arrow-right-blue.svg" alt="icon">Get Started
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-desc">
                    <ul class="navbar__list--desc">
                        <li class="navbar__item--desc"><img src="./assets/images/arrow-right-blue.svg" alt="icon">How it works</li>
                        <li class="navbar__item--desc"><img src="./assets/images/arrow-right-blue.svg" alt="icon">Partnership</li>
                        <li class="navbar__item--desc"><img src="./assets/images/arrow-right-blue.svg" alt="icon">Faq</li>
                        <li class="navbar__item--desc"><img src="./assets/images/arrow-right-blue.svg" alt="icon">Sign In</li>
                        <li class="navbar__item--desc">
                            <a href="#form" class="navbar__item">
                                <img src="./assets/images/arrow-right-blue.svg" alt="icon">Get Started
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="hero__section">
        <div class="container">
            <div class="hero">
                <div class="hero__text">
                    <h1 class="hero__title">Astor Bank <span>first</span> Web3 banking system</h1>
                    <p class="hero__text">With great experience of financial advising, trust management and  investing strategies, AstorTrust is reformed to be one.</p>
                    <a href="#form">
                        <button type="button" class="hero__btn">
                            <div class="hero__btn-icon-box">
                                <svg class="hero__btn-svg">
                                    <use href="./assets/images/sprite.svg#icon-arrow-blue"/>
                                </svg>
                            </div>
                            Start Your Banking
                        </button>
                    </a>
                </div>
                <div class="hero__cards">
                    <picture>
                        <source media="(max-width: 1279px)" srcset="./assets/images/mob-card1@1x.jpg, ./assets/images/mob-card1@2x.jpg 2x"/>
                        <source media="(min-width: 1280px)" srcset="./assets/images/desc-card1@1x.jpg, ./assets/images/desc-card1@2x.jpg 2x"/>
                        <img src="./assets/images/mob-card1@1x.jpg" alt="card" class="hero__cards--first">
                    </picture>
                    <picture>
                        <source media="(max-width: 1279px)" srcset="./assets/images/mob-card2@1x.jpg, ./assets/images/mob-card2@2x.jpg 2x"/>
                        <source media="(min-width: 1280px)" srcset="./assets/images/desc-card2@1x.jpg, ./assets/images/desc-card2@2x.jpg 2x"/>
                        <img src="./assets/images/mob-card2@1x.jpg" alt="card" class="hero__cards--second">
                    </picture>    
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="features" id="features">
                <ul class="features__list">
                   <li class="features__item">
                        <img src="./assets/images/features1.svg" alt="illustration" class="features__item-img">
                        <div>
                            <h2 class="features__item-title">Empower Your Credit with Crypto:</h2>
                            <p class="features__item-desc">Explore financial empowerment with AstorBank's Crypto-Backed Credit Card. This unique offering allows consumers to access a credit line based on their crypto holdings, all without the need to sell them. Enjoy the benefits of financial flexibility while your crypto assets continue to grow.</p>
                        </div>
                   </li>
                   <li>
                    <img src="./assets/images/vector.png" alt="vector" class="features__vector-mob">
                    <img src="./assets/images/vector-desc.png" alt="vector" class="features__vector-desc">
                   </li>
                   <li class="features__item">
                        <img src="./assets/images/features2.svg" alt="illustration" class="features__item-img">
                        <div>
                            <h2 class="features__item-title">Empower Your Credit with Crypto:</h2>
                            <p class="features__item-desc">Explore financial empowerment with AstorBank's Crypto-Backed Credit Card. This unique offering allows consumers to access a credit line based on their crypto holdings, all without the need to sell them. Enjoy the benefits of financial flexibility while your crypto assets continue to grow.</p>
                        </div>
                   </li>
                   <li>
                    <img src="./assets/images/vector.png" alt="vector" class="features__vector-mob">
                    <img src="./assets/images/vector-desc.png" alt="vector" class="features__vector-desc">
                   </li>
                   <li class="features__item">
                        <img src="./assets/images/features3.svg" alt="illustration" class="features__item-img">
                        <div>
                            <h2 class="features__item-title">Earn Crypto Cashback with Every Swipe:</h2>
                            <p class="features__item-desc">AstorBank is proud to present Crypto-Cashback, a program where users earn valuable crypto incentives with every shopping endeavor. With each swipe of your AstorBank card, you not only make purchases but also accumulate crypto CashBack, creating a truly rewarding banking experience.</p>
                        </div>
                   </li>
                   <li>
                    <img src="./assets/images/vector.png" alt="vector" class="features__vector-mob">
                    <img src="./assets/images/vector-desc.png" alt="vector" class="features__vector-desc">
                   </li>
                   <li class="features__item">
                        <img src="./assets/images/features4.svg" alt="illustration" class="features__item-img">
                        <div>
                            <h2 class="features__item-title">Prepaid Precision, Crypto Convenience:</h2>
                            <p class="features__item-desc">Our Prepaid Card at AstorBank is designed with precision and convenience in mind. Topped up with your preferred currency (e.g., U.S. dollars or Euros) when selling crypto holdings, this card ensures a seamless fusion of traditional and crypto financial landscapes. AstorBank is committed to providing a comprehensive suite of financial tools that align seamlessly with your evolving crypto journey. Embrace the future of banking with AstorBank's Crypto Debit and Prepaid Cards.</p>
                        </div>
                   </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="form__section">
        <div class="container">
            <div class="form-bg">
                <form class="form" id="form">
                    <h2 class="form__title">BECAME a PARTNER</h2>
                    <p class="form__desc">We focus on expanding our network to reach diverse locations globally.</p>
                    <div class="form__input-box">
                        <input type="text" name="name" placeholder="Name" class="form__input" required>
                        <span class="form__error-message" id="name-error"></span>
                        <input type="text" name="email" placeholder="Email" class="form__input" required>
                        <span class="form__error-message" id="email-error"></span>
                        <input type="tel" name="phone" placeholder="Phone number" class="form__input" maxLength="13" required>
                        <span class="form__error-message" id="phone-error"></span>
                        <input type="text" name="telegram" placeholder="Your telegram" class="form__input">
                        <input type="text" name="amount" placeholder="Enter amount" class="form__input">
                    </div>
                    <div class="form__message" id="form-message"></div>
                    <button type="submit" class="form__btn" id="submit-btn">
                        <div class="form__btn-icon-box">
                            <img src="./assets/images/icon-arrow-gray.svg" alt="icon" class="form__btn-img">
                        </div>
                        Send request
                    </button>
                </form>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer__logo-box">
            <div class="container">
                <img src="./assets/images/vector.png" alt="vector" class="footer__vector-img">
                <img src="./assets/images/vector.png" alt="vector" class="footer__vector-img-desc">
                <img src="./assets/images/logo-white.svg" alt="logo" class="footer__logo">
            </div>
        </div>
        <div class="footer__block">
            <div class="container">
                <div class="footer__wrapper">
                    <div class="footer__contacts-phones">
                        <div><a href="tel:9075550101">(907) 555 01 01</a></div>
                        <div><a href="tel:9075552212">(907) 555 22 12</a></div>
                    </div>
                    <div class="footer__rating">
                        <p class="footer__rating-text">Rated us:</p>
                        <div class="footer__rating-icons">
                            <img src="./assets/images/star.svg" alt="star">
                            <img src="./assets/images/star.svg" alt="star">
                            <img src="./assets/images/star.svg" alt="star">
                            <img src="./assets/images/star.svg" alt="star">
                            <img src="./assets/images/star.svg" alt="star">
                        </div>
                    </div>
                </div>
                <div class="footer__socials-nav-block">
                    <div class="footer__socials">
                        <a href="#">
                            <img src="./assets/images/social-x.svg" alt="icon" class="footer__socials-img">
                        </a>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="./assets/images/social-facebook.svg" alt="icon" class="footer__socials-img">
                        </a>
                        <a href="https://www.whatsapp.com" target="_blank">
                            <img src="./assets/images/social-whatsapp.svg" alt="icon" class="footer__socials-img">
                        </a>
                        <a href="https://t.me" target="_blank">
                            <img src="./assets/images/social-telegram.svg" alt="icon" class="footer__socials-img">
                        </a>
                        <a href="https://www.youtube.com" target="_blank">
                            <img src="./assets/images/social-youtube.svg" alt="icon" class="footer__socials-img">
                        </a>
                    </div>
                    <div class="footer__nav">
                        <div class="footer__nav-item">
                            <h3 class="footer__nav-title">Clients</h3>
                            <ul class="footer__nav-elements">
                                <li class="footer__nav-el"><a href="#features">About us</a></li>
                                <li class="footer__nav-el">Partnership</li>
                                <li class="footer__nav-el">Cards</li>
                                <li class="footer__nav-el">How it works</li>
                            </ul>
                        </div>
                        <div class="footer__nav-item">
                            <h3 class="footer__nav-title">Personal</h3>
                            <ul class="footer__nav-elements">
                                <li class="footer__nav-el">Sign in</li>
                                <li class="footer__nav-el">Sign up</li>
                            </ul>
                        </div>
                        <div class="footer__nav-item">
                            <h3 class="footer__nav-title">Information</h3>
                            <ul class="footer__nav-elements">
                                <li class="footer__nav-el">Documents</li>
                                <li class="footer__nav-el">FAQ</li>
                                <li class="footer__nav-el">Blog</li>
                                <li class="footer__nav-el">Privacy Policy</li>
                                <li class="footer__nav-el">Cookie</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer__rights">
                    <p class="footer__rights-text">All Rights Reserved 2024</p>
                    <div class="footer__payment-icons">
                        <img src="./assets/images/payment-1.svg" alt="icon">
                        <img src="./assets/images/payment-2.svg" alt="icon">
                        <div class="footer__payment-icon">
                            <img src="./assets/images/payment-3.svg" alt="icon">
                        </div>
                    </div>
                </div>
                <div class="footer__bottom">
                    <h3 class="footer__bottom-subtitle">Disclaimer:</h3>
                    <p class="footer__bottom-text">The content on this website is intended for general informational purposes and lies in United Kingdom legal field. While we strive for accuracy, AstorBank encourages users to draw their own conclusions. Our services are subject to terms and conditions.</p>
                    <p class="footer__bottom-text">The opinions expressed are as of February 2024 and are subject to change without notice. The strategies discussed are strictly for illustrative and educational purposes and are not a recommendation, offer or solicitation to buy or sell any securities or to adopt any investment strategy. There is no guarantee that any strategies discussed will be effective. Investing in commodity-related companies may increase volatility. Price movements are outside of the Fund’s control and may be influenced by weather and climate conditions, livestock disease, war, terrorism, political conflicts and economic events, interest rates, currency and exchange rates, government regulation and taxation. Commodity futures trading may be illiquid. In addition, suspensions or disruptions of market trading in the commodities markets and related futures markets may adversely affect the value of the Fund.</p>
                    <p class="footer__bottom-text">Funds that concentrate investments in specific industries, sectors, markets or asset classes may underperform or be more volatile than other industries, sectors, markets or asset classes and than the general securities market.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="./js/lang-dropdown.js"></script>
    <script src="./js/nav-dropdown.js"></script>
    <script src="./js/form.js"></script>
</body>
</html>