<!-- =========================================================
     TOP BAR (shared)
========================================================= -->
<div class="hpn-topbar">
    <div class="hpn-container hpn-topbar-inner">
        <div class="hpn-topbar-tag">Trusted by 10,000+ authors</div>
        <div class="hpn-topbar-contacts">
            <span>📞 UK +44 7888 862764</span>
            <span>|</span>
            <span>📞 US +1 888 832 8969</span>
            <span>|</span>
            <span>✉️ info@hmdpublishing.com</span>
        </div>
    </div>
</div>

<!-- =========================================================
     NAVBAR (shared)
========================================================= -->
<header class="hpn-header">
    <div class="hpn-container hpn-header-inner">

        <a href="/" class="hpn-brand">
            HMD <span class="hpn-brand-light">Publishing</span>
        </a>

        <nav class="hpn-nav">

            <div class="services-menu">

                <a href="/services" class="services-btn">
                    Services
                    <span class="services-arrow">⌄</span>
                </a>

                <div class="services-dropdown">

                    <div class="services-left">

                        <div class="service-column">
                            <div class="service-label">Create your book</div>

                            <a href="/services/book-writing">Book Writing & Ghostwriting</a>
                            <a href="/services/editing">Editing Services</a>
                            <a href="/services/book-cover-design">Book Cover Design</a>
                            <a href="{{ route('services.bookFormatting') }}">Book Formatting</a>
                        </div>

                        <div class="service-column">
                            <div class="service-label">Publish professionally</div>

                            <a href="/services/publishing">Publishing & Distribution</a>
                            <a href="#">Complete Package</a>
                            <a href="#">Audiobook Production</a>
                        </div>

                        <div class="service-column">
                            <div class="service-label">Grow your audience</div>

                            <a href="#">Amazon Advertising</a>
                            <a href="#">Book Launch Strategy</a>
                            <a href="#">PR & Podcast Outreach</a>
                        </div>

                    </div>

                    <div class="services-feature">

                        <div class="feature-small">Complete package</div>

                        <h3>
                            Complete Publishing Package
                        </h3>

                        <p>
                            Editing, design, formatting and publishing —
                            one team, from £997.
                        </p>

                        <a href="#" class="feature-link">
                            See what's included
                            <span>→</span>
                        </a>

                    </div>

                    <div class="services-bottom">
                        <a href="/services">
                            View all 24 services
                            <span>→</span>
                        </a>
                    </div>

                </div>

            </div>

            <a href="/#pricing">Pricing</a>
            <a href="/tools">Tools</a>
            <a href="{{ route('portfolio') }}">Portfolio</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>

            <a href="https://wa.me/447888862764" class="hpn-nav-cta hpn-whatsapp-btn" target="_blank" rel="noopener">
                <svg viewBox="0 0 32 32" width="17" height="17" fill="currentColor" aria-hidden="true">
                    <path d="M16.004 3c-7.18 0-13 5.82-13 13 0 2.29.6 4.53 1.74 6.5L3 29l6.68-1.75A12.94 12.94 0 0 0 16 29c7.18 0 13-5.82 13-13s-5.82-13-13-13zm0 23.7c-2.28 0-4.5-.61-6.42-1.77l-.46-.27-4.1 1.07 1.1-4-.3-.48A10.65 10.65 0 0 1 5.34 16c0-5.88 4.78-10.66 10.66-10.66S26.66 10.12 26.66 16 21.88 26.7 16 26.7zm5.85-7.94c-.32-.16-1.89-.93-2.18-1.04-.29-.11-.5-.16-.72.16-.21.32-.82 1.04-1 1.25-.19.21-.37.24-.69.08-.32-.16-1.35-.5-2.57-1.59-.95-.85-1.59-1.9-1.78-2.22-.19-.32-.02-.49.14-.65.14-.14.32-.37.48-.56.16-.19.21-.32.32-.53.11-.21.05-.4-.03-.56-.08-.16-.72-1.73-.98-2.37-.26-.64-.52-.55-.72-.56h-.61c-.21 0-.56.08-.85.4-.29.32-1.12 1.09-1.12 2.66 0 1.57 1.14 3.08 1.3 3.3.16.21 2.25 3.43 5.45 4.81.76.33 1.36.53 1.82.67.77.24 1.46.21 2.01.13.61-.09 1.89-.77 2.16-1.52.27-.75.27-1.39.19-1.52-.08-.14-.29-.21-.61-.37z"/>
                </svg>
                WhatsApp
            </a>

        </nav>

    </div>
</header>

    <style>
        /* ===== Shared Navbar Styles ===== */

        .hpn-container {
            max-width: 1200px;
            margin: auto;
        }

        /* ===== TOP BAR ===== */
        .hpn-topbar {
            background: #111;
            color: #fff;
            padding: 10px 5%;
            font-size: 13px;
        }

        .hpn-topbar-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .hpn-topbar-contacts {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        /* ===== HEADER ===== */
        .hpn-header {
            background: #fff;
            padding: 20px 5%;
            border-bottom: 1px solid #eee;
        }

        .hpn-header-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .hpn-brand {
            text-decoration: none;
            color: #111;
            font-size: 25px;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .hpn-brand-light {
            font-weight: 400;
        }

        .hpn-nav {
            display: flex;
            align-items: center;
            gap: 25px;
            font-size: 14px;
        }

        .hpn-nav a {
            text-decoration: none;
            color: #222;
        }

        .hpn-nav-cta {
            background: #111;
            color: #fff;
            padding: 13px 20px;
            border-radius: 5px;
            font-weight: 600;
        }

        /* ===== WHATSAPP CTA ===== */
        .hpn-nav-cta.hpn-whatsapp-btn {
            background: #25d366;
            color: #fff;
            padding: 13px 18px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            transition: background .25s ease;
        }

        .hpn-nav-cta.hpn-whatsapp-btn:hover {
            background: #1ebe5b;
        }

        /* ===== SERVICES DROPDOWN ===== */
        .services-menu {
            position: relative;
            display: inline-block;
            font-family: Arial, Helvetica, sans-serif;
        }

        .services-btn {
            border: 0;
            outline: none;
            background: transparent;
            color: #111;
            font-size: 14px;
            font-weight: 500;
            padding: 14px 4px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 7px;
            text-decoration: none;
            transition: color .25s ease;
        }

        .services-btn:hover {
            color: #666;
        }

        .services-menu::before {
            content: "";
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            height: 18px;
            z-index: 9999;
        }

        .services-arrow {
            font-size: 15px;
            transition: transform .3s ease;
        }

        .services-dropdown {
            position: absolute;
            top: calc(100% + 18px);
            left: 50%;
            transform: translateX(-50%) translateY(10px);

            width: 780px;

            background: #fff;
            border: 1px solid #e9e9e9;
            border-radius: 18px;

            padding: 28px;

            box-shadow:
                0 25px 70px rgba(0,0,0,.12),
                0 5px 20px rgba(0,0,0,.05);

            display: grid;
            grid-template-columns: 1fr 270px;
            gap: 25px;

            opacity: 0;
            visibility: hidden;
            pointer-events: none;

            transition:
                opacity .25s ease,
                transform .25s ease,
                visibility .25s ease;

            z-index: 9999;
        }

        .services-dropdown::before {
            content: "";
            position: absolute;
            top: -7px;
            left: 50%;
            width: 13px;
            height: 13px;
            background: #fff;
            border-left: 1px solid #e9e9e9;
            border-top: 1px solid #e9e9e9;
            transform: translateX(-50%) rotate(45deg);
        }

        .services-menu:hover .services-dropdown {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
            transform: translateX(-50%) translateY(0);
        }

        .services-menu:hover .services-arrow {
            transform: rotate(180deg);
        }

        .services-left {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .service-label {
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .08em;
            color: #999;
            margin-bottom: 14px;
        }

        .service-column a {
            display: block;
            color: #151515;
            text-decoration: none;
            font-size: 14px;
            line-height: 1.4;
            padding: 7px 0;
            transition:
                color .2s ease,
                transform .2s ease;
        }

        .service-column a:hover {
            color: #777;
            transform: translateX(3px);
        }

        .services-feature {
            background: #f5f5f2;
            border-radius: 14px;
            padding: 23px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .feature-small {
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .1em;
            color: #888;
            margin-bottom: 10px;
        }

        .services-feature h3 {
            margin: 0 0 10px;
            font-size: 21px;
            line-height: 1.15;
            font-weight: 600;
            color: #111;
        }

        .services-feature p {
            margin: 0 0 18px;
            color: #666;
            font-size: 13px;
            line-height: 1.55;
        }

        .feature-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #111;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            transition: gap .25s ease;
        }

        .feature-link:hover {
            gap: 13px;
        }

        .services-bottom {
            grid-column: 1 / -1;
            padding-top: 18px;
            border-top: 1px solid #ededed;
        }

        .services-bottom a {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #111;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: gap .25s ease;
        }

        .services-bottom a:hover {
            gap: 13px;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 850px) {
            .services-dropdown {
                width: calc(100vw - 30px);
                grid-template-columns: 1fr;
                padding: 22px;
                left: 0;
                transform: translateY(10px);
            }

            .services-menu:hover .services-dropdown {
                transform: translateY(0);
            }

            .services-dropdown::before {
                left: 45px;
            }

            .services-left {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .services-feature {
                margin-top: 5px;
            }
        }

        @media (max-width: 768px) {
            .hpn-header-inner {
                flex-direction: column;
                gap: 15px;
            }

            .hpn-nav {
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }

            .hpn-topbar-inner {
                justify-content: center;
                text-align: center;
            }
        }
    </style>