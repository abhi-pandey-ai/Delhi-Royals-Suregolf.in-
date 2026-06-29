<?php
$activePage = 'smile';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delhi Royals | Smile</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>

        /* ════════════════════════════════════════
           SMILE PAGE — COMPLETE STYLES
        ════════════════════════════════════════ */

        /* ── HERO ── */
        .smile-hero-section {
            position: relative;
            width: 100%;
            height: 100vh;
            min-height: 500px;
            overflow: hidden;
            display: flex;
            align-items: flex-end;
            justify-content: center;
        }

        .smile-hero-section img.smile-full-img {
            position: absolute;
            inset: 0;
            width: 122%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
            display: block;
            transition: transform 8s ease;
        }

        .smile-hero-section:hover img.smile-full-img {
            transform: scale(1.04);
        }

        .smile-hero-section::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(
                to bottom,
                rgba(0,0,0,0.08) 0%,
                rgba(0,0,0,0.05) 45%,
                rgba(0,0,0,0.60) 72%,
                rgba(0,0,0,0.90) 100%
            );
            pointer-events: none;
        }

        .smile-hero-content {
            position: relative;
            z-index: 10;
            text-align: center;
            padding: 0 20px 70px;
            max-width: 820px;
            animation: smileFadeUp 1s 0.4s both;
        }

        .smile-tag {
            display: inline-block;
            font-size: 10px;
            letter-spacing: 5px;
            text-transform: uppercase;
            color: #c9a84c;
            border: 1px solid #9a7a2e;
            padding: 5px 16px;
            border-radius: 2px;
            margin-bottom: 18px;
        }

        .smile-hero-content h1 {
            font-size: clamp(38px, 7vw, 80px);
            font-weight: 700;
            line-height: 1.08;
            letter-spacing: 2px;
            color: #ffffff;
            text-shadow: 0 4px 30px rgba(0,0,0,0.5);
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .smile-hero-content h1 span { color: #c9a84c; }

        .smile-hero-content p {
            font-size: clamp(13px, 1.7vw, 16px);
            font-weight: 300;
            line-height: 1.85;
            color: #cccccc;
            max-width: 620px;
            margin: 0 auto 32px;
        }

        .scroll-down-hint {
            position: absolute;
            bottom: 24px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
            animation: smileFadeUp 1s 1.2s both;
        }

        .scroll-down-hint span {
            font-size: 9px;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #c9a84c;
        }

        .scroll-down-hint .s-line {
            width: 1px;
            height: 38px;
            background: linear-gradient(to bottom, #c9a84c, transparent);
            animation: scrollBlink 2s infinite;
        }


        /* ════════════════════════════════════════
           INFINITE AUTO-SCROLL MARQUEE
        ════════════════════════════════════════ */
        .marquee-section {
            background: #ffffff;
            padding: 64px 0 56px;
            overflow: hidden;
            border-top: 1px solid #ebebeb;
            border-bottom: 1px solid #ebebeb;
        }

        .marquee-header {
            text-align: center;
            padding: 0 20px;
            margin-bottom: 44px;
        }

        .marquee-tag {
            display: inline-block;
            font-size: 10px;
            letter-spacing: 5px;
            text-transform: uppercase;
            color: #c9a84c;
            margin-bottom: 10px;
        }

        .marquee-title {
            font-size: clamp(22px, 3.5vw, 36px);
            font-weight: 700;
            color: #111111;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .marquee-gold-line {
            width: 50px;
            height: 3px;
            background: #c9a84c;
            margin: 0 auto;
        }

        .marquee-viewport {
            position: relative;
            width: 100%;
            overflow: hidden;
            -webkit-mask-image: linear-gradient(
                to right,
                transparent 0%,
                black 6%,
                black 94%,
                transparent 100%
            );
            mask-image: linear-gradient(
                to right,
                transparent 0%,
                black 6%,
                black 94%,
                transparent 100%
            );
        }

        .marquee-track {
            display: flex;
            gap: 16px;
            width: max-content;
            animation: marqueeScroll var(--marquee-duration, 28s) linear infinite;
            will-change: transform;
        }

        .marquee-viewport:hover .marquee-track,
        .marquee-viewport:focus-within .marquee-track {
            animation-play-state: paused;
        }

        @keyframes marqueeScroll {
            0%   { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .mq-card {
            flex-shrink: 0;
            width: 280px;
            height: 340px;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            border: 1px solid #e8e8e8;
            background: #f0ede6;
            cursor: pointer;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        .mq-card:hover {
            box-shadow: 0 16px 48px rgba(0,0,0,0.14);
            transform: translateY(-4px) scale(1.02);
        }

        .mq-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }

        .mq-card:hover img { transform: scale(1.07); }

        .mq-card::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(
                135deg,
                rgba(201,168,76,0) 30%,
                rgba(201,168,76,0.18) 50%,
                rgba(201,168,76,0) 70%
            );
            background-size: 200% 200%;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .mq-card:hover::after { opacity: 1; }

        .marquee-controls {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            margin-top: 32px;
            padding: 0 20px;
        }

        .mq-speed-label {
            font-size: 9px;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #aaaaaa;
        }

        .mq-speed-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 10px;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            color: #888888;
            background: transparent;
            border: 1px solid #e0e0e0;
            padding: 7px 16px;
            border-radius: 2px;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .mq-speed-btn:hover,
        .mq-speed-btn.active {
            border-color: #c9a84c;
            color: #c9a84c;
        }

        .mq-pause-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 10px;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            color: #c9a84c;
            background: transparent;
            border: 1px solid #c9a84c;
            padding: 7px 18px;
            border-radius: 2px;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .mq-pause-btn:hover,
        .mq-pause-btn.paused {
            background: #c9a84c;
            color: #111111;
        }


        /* ════════════════════════════════════════
           DONATION SECTION
        ════════════════════════════════════════ */
        .donation-section {
            background: #111111;
            padding: 80px 20px 90px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        /* Subtle gold radial glow behind content */
        .donation-section::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 700px;
            height: 400px;
            background: radial-gradient(ellipse, rgba(201,168,76,0.08) 0%, transparent 70%);
            pointer-events: none;
        }

        .donation-section .container {
            max-width: 780px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .donation-tag {
            display: inline-block;
            font-size: 10px;
            letter-spacing: 5px;
            text-transform: uppercase;
            color: #c9a84c;
            border: 1px solid #9a7a2e;
            padding: 5px 16px;
            border-radius: 2px;
            margin-bottom: 22px;
        }

        .donation-section h2 {
            font-size: clamp(26px, 4.5vw, 48px);
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #ffffff;
            line-height: 1.15;
            margin-bottom: 16px;
        }

        .donation-section h2 span { color: #c9a84c; }

        .donation-gold-line {
            width: 55px;
            height: 3px;
            background: #c9a84c;
            margin: 0 auto 28px;
        }

        .donation-section p {
            font-size: clamp(14px, 1.6vw, 16px);
            font-weight: 300;
            line-height: 1.85;
            color: #aaaaaa;
            max-width: 600px;
            margin: 0 auto 40px;
        }

        /* Amount pill badges */
        .donation-amounts {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-bottom: 40px;
        }

        .donation-pill {
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1.5px;
            color: #c9a84c;
            border: 1px solid rgba(201,168,76,0.35);
            border-radius: 100px;
            padding: 8px 22px;
            background: rgba(201,168,76,0.06);
        }

        /* CTA button — primary */
        .donate-cta-btn {
            display: inline-flex;
            align-items: center;
            gap: 14px;
            background: #c9a84c;
            color: #111111;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            text-decoration: none;
            padding: 18px 50px;
            border-radius: 3px;
            border: 2px solid #c9a84c;
            transition: all 0.3s ease;
            margin-bottom: 18px;
        }

        .donate-cta-btn:hover {
            background: transparent;
            color: #c9a84c;
            transform: translateY(-3px);
            box-shadow: 0 12px 40px rgba(201,168,76,0.30);
        }

        .donate-cta-btn i { font-size: 16px; transition: transform 0.3s ease; }
        .donate-cta-btn:hover i { transform: translateX(4px); }

        /* Secondary / learn more link */
        .donation-secondary-link {
            display: block;
            font-size: 11px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #666666;
            text-decoration: none;
            margin-top: 12px;
            transition: color 0.25s ease;
        }

        .donation-secondary-link:hover { color: #c9a84c; }

        /* Trust strip */
        .donation-trust-strip {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 28px;
            margin-top: 48px;
            padding-top: 36px;
            border-top: 1px solid rgba(255,255,255,0.08);
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 11px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #666666;
        }

        .trust-item i {
            font-size: 15px;
            color: #c9a84c;
        }


        /* ── TEXT SECTION ── */
        .smile-body-section {
            background: #ffffff;
            padding: 80px 20px 90px;
        }

        .smile-body-section .container {
            max-width: 860px;
            margin: 0 auto;
            text-align: center;
        }

        .smile-foundation-logo {
            display: block;
            width: 180px;
            height: auto;
            margin: 0 auto 32px;
            object-fit: contain;
            animation: smileFadeUp 0.8s 0.2s both;
        }

        .smile-body-section h2 {
            font-size: clamp(24px, 4vw, 38px);
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #111111;
            margin-bottom: 14px;
        }

        .smile-body-section .gold-line {
            width: 55px;
            height: 3px;
            background: #c9a84c;
            margin: 0 auto 30px;
        }

        .smile-body-section p {
            font-size: clamp(14px, 1.6vw, 16px);
            font-weight: 400;
            line-height: 1.9;
            color: #444444;
            margin-bottom: 18px;
        }

        .smile-body-section p strong {
            color: #9a7a2e;
            font-weight: 600;
        }


        /* ── LINK SECTION ── */
        .smile-link-section {
            background: #f5f5f5;
            padding: 55px 20px;
            text-align: center;
            border-top: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
        }

        .part {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 15px;
            color: #111111;
        }

        .smile-link-section p.link-label {
            font-size: 11px;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #888888;
            margin-bottom: 20px;
            margin-top: 17px;
        }

        .visit-website-btn {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: #111111;
            color: #c9a84c;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 3px;
            text-transform: uppercase;
            text-decoration: none;
            padding: 16px 40px;
            border-radius: 3px;
            border: 1px solid #c9a84c;
            transition: all 0.3s ease;
        }

        .visit-website-btn:hover {
            background: #c9a84c;
            color: #111111;
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(201,168,76,0.35);
        }

        .visit-website-btn i { font-size: 14px; transition: transform 0.3s ease; }
        .visit-website-btn:hover i { transform: translateX(4px); }


        /* ── ANIMATIONS ── */
        @keyframes smileFadeUp {
            from { opacity: 0; transform: translateY(28px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        @keyframes scrollBlink {
            0%, 100% { opacity: 0.3; }
            50%       { opacity: 1; }
        }


        /* ── RESPONSIVE ── */
        @media (max-width: 768px) {
            .smile-hero-section { height: 100svh; }
            .smile-hero-section img.smile-full-img { object-position: center center; }
            .smile-hero-content { padding: 0 16px 55px; }
            .scroll-down-hint { display: none; }
            .smile-body-section { padding: 55px 16px 65px; }
            .mq-card { width: 220px; height: 270px; }
            .marquee-section { padding: 48px 0 40px; }
            .marquee-controls { flex-wrap: wrap; gap: 10px; }
            .donation-section { padding: 60px 16px 70px; }
            .donate-cta-btn { padding: 16px 32px; font-size: 12px; letter-spacing: 2px; }
            .donation-trust-strip { gap: 18px; }
        }

        @media (max-width: 480px) {
            .smile-hero-content h1 { font-size: 34px; }
            .smile-body-section h2 { font-size: clamp(20px, 4vw, 38px); letter-spacing: -1px; }
            .visit-website-btn { font-size: 11px; padding: 13px 24px; letter-spacing: 2px; }
            .mq-card { width: 180px; height: 224px; border-radius: 6px; }
            .marquee-section { padding: 36px 0 28px; }
            .donation-section h2 { font-size: clamp(22px, 6vw, 48px); }
            .donate-cta-btn { width: 100%; justify-content: center; padding: 16px 20px; }
            .donation-amounts { gap: 8px; }
            .donation-pill { font-size: 11px; padding: 6px 16px; }
            .donation-trust-strip { flex-direction: column; gap: 14px; }
        }

    </style>
</head>
<body>
    <div class="site-wrapper">
        <?php include 'navbar.php'; ?>

        <main>

            <!-- ═══════════════════════════
                 FULL SCREEN HERO
            ════════════════════════════ -->
            <section class="smile-hero-section">
                <a href="https://www.smilefoundationindia.org/">
                    <img src="images/smile.png" alt="Delhi Royals Smile" class="smile-full-img">
                </a>

                <div class="smile-hero-content">
                    <span class="smile-tag">Delhi Royals</span>
                    <h1>Keep <span>Smiling</span><br>Keep <span>Winning</span></h1>
                    <p>
                        Because every great shot starts with a confident smile.
                        Delhi Royals — where champions carry their joy on and off the course.
                    </p>
                </div>

                <div class="scroll-down-hint">
                    <span>Scroll</span>
                    <div class="s-line"></div>
                </div>
            </section>


            <!-- ═══════════════════════════
                 INFINITE MARQUEE SECTION
            ════════════════════════════ -->
            <!-- <section class="marquee-section">

                <div class="marquee-header">
                    <span class="marquee-tag">Delhi Royals × Smile Foundation</span>
                    <h2 class="marquee-title">She Can Fly</h2>
                    <div class="marquee-gold-line"></div>
                </div>

                <div class="marquee-viewport" id="mqViewport">
                    <div class="marquee-track" id="mqTrack">

                        
                        <div class="mq-card"><img src="smilfoundation/carousel1.jpeg" alt="She Can Fly 1" loading="lazy"></div>
                        <div class="mq-card"><img src="smilfoundation/carousel2.jpeg" alt="She Can Fly 2" loading="lazy"></div>
                        <div class="mq-card"><img src="smilfoundation/carousel3.jpeg" alt="She Can Fly 3" loading="lazy"></div>
                        <div class="mq-card"><img src="smilfoundation/carousel4.jpeg" alt="She Can Fly 4" loading="lazy"></div>
                        <div class="mq-card"><img src="smilfoundation/carousel5.jpeg" alt="She Can Fly 5" loading="lazy"></div>
                        <div class="mq-card"><img src="smilfoundation/carousel6.jpeg" alt="She Can Fly 6" loading="lazy"></div>
                        <div class="mq-card"><img src="smilfoundation/carousel7.jpeg" alt="She Can Fly 7" loading="lazy"></div>
                        <div class="mq-card"><img src="smilfoundation/carousel8.jpeg" alt="She Can Fly 8" loading="lazy"></div>

                        
                        <div class="mq-card"><img src="smilfoundation/carousel1.jpeg" alt="She Can Fly 1" loading="lazy"></div>
                        <div class="mq-card"><img src="smilfoundation/carousel2.jpeg" alt="She Can Fly 2" loading="lazy"></div>
                        <div class="mq-card"><img src="smilfoundation/carousel3.jpeg" alt="She Can Fly 3" loading="lazy"></div>
                        <div class="mq-card"><img src="smilfoundation/carousel4.jpeg" alt="She Can Fly 4" loading="lazy"></div>
                        <div class="mq-card"><img src="smilfoundation/carousel5.jpeg" alt="She Can Fly 5" loading="lazy"></div>
                        <div class="mq-card"><img src="smilfoundation/carousel6.jpeg" alt="She Can Fly 6" loading="lazy"></div>
                        <div class="mq-card"><img src="smilfoundation/carousel7.jpeg" alt="She Can Fly 7" loading="lazy"></div>
                        <div class="mq-card"><img src="smilfoundation/carousel8.jpeg" alt="She Can Fly 8" loading="lazy"></div>

                    </div>
                </div>

                
                <div class="marquee-controls">
                    <span class="mq-speed-label">Speed</span>
                    <button class="mq-speed-btn" data-speed="slow">Slow</button>
                    <button class="mq-speed-btn active" data-speed="normal">Normal</button>
                    <button class="mq-speed-btn" data-speed="fast">Fast</button>
                    <button class="mq-pause-btn" id="mqPauseBtn">
                        <i class="fas fa-pause" id="mqPauseIcon"></i>
                        <span id="mqPauseLabel">Pause</span>
                    </button>
                </div>

            </section> -->


            <!-- ═══════════════════════════
                 DONATION SECTION
            ════════════════════════════ -->
            <!-- <section class="donation-section">
                <div class="container">

                    <span class="donation-tag">She Can Fly — Make a Difference</span>

                    <h2>Help a Girl<br><span>Spread Her Wings</span></h2>
                    <div class="donation-gold-line"></div>

                    <p>
                        Your support goes directly toward education, health, nutrition and mentorship for girls from underserved communities. Every rupee helps a girl stay in school, stay healthy, and believe in her future.
                    </p>

                    
                    <div class="donation-amounts">
                        <span class="donation-pill">₹500 — School Supplies</span>
                        <span class="donation-pill">₹1,000 — Monthly Nutrition</span>
                        <span class="donation-pill">₹2,500 — Term Scholarship</span>
                        <span class="donation-pill">₹5,000 — Full Year Support</span>
                    </div>

                    <a href="https://www.smilefoundationindia.org/donation/scf-delhi-royals" target="_blank" rel="noopener noreferrer" class="donate-cta-btn">
                        <i class="fas fa-heart"></i>
                        Donate Now
                        <i class="fas fa-arrow-right"></i>
                    </a>

                    <a href="https://www.smilefoundationindia.org/she-can-fly" target="_blank" rel="noopener noreferrer" class="donation-secondary-link">
                        Learn more about She Can Fly &rarr;
                    </a>

                    
                    <div class="donation-trust-strip">
                        <div class="trust-item">
                            <i class="fas fa-shield-alt"></i>
                            <span>100% Secure Payment</span>
                        </div>
                        <div class="trust-item">
                            <i class="fas fa-file-invoice"></i>
                            <span>80G Tax Exemption</span>
                        </div>
                        <div class="trust-item">
                            <i class="fas fa-check-circle"></i>
                            <span>FCRA Certified</span>
                        </div>
                        <div class="trust-item">
                            <i class="fas fa-users"></i>
                            <span>1.5 Lakh+ Girls Supported</span>
                        </div>
                    </div>

                </div>
            </section> -->


            <!-- ═══════════════════════════
                 TEXT CONTENT
            ════════════════════════════ -->
            <section class="smile-body-section">
                <div class="container">

                    <a href="https://www.smilefoundationindia.org/">
                        <img src="images/quit.jpeg" alt="Smile Foundation" class="smile-foundation-logo">
                    </a>

                    <h2>When women rise together dreams take flight</h2>
                    <div class="gold-line"></div>

                    <p>
                        This season <strong>Delhi Royals</strong> India's first all-women golf club comes together with Smile Foundation's She Can Fly initiative to support girls from underserved communities and help them move closer to a future filled with opportunity, confidence and choice.
                    </p>
                    <p>Every girl deserves the chance to learn, dream, lead and build a life on her own terms.</p>
                    <p>Yet for many girls, the journey is interrupted too early, by lack of access to education, poor nutrition, limited opportunities, and social barriers that continue to hold them back.</p>
                    <p>She Can Fly is an initiative that stands beside these girls, ensuring they receive support through education, health, nutrition, life skills and mentorship, creating an ecosystem where they are empowered not just to survive, but to thrive.</p>
                    <p>Today, women who have broken barriers themselves are extending their hand to the next generation.</p>
                    <p>Through this collaboration with <strong>Delhi Royals,</strong> every contribution becomes more than a donation. It becomes encouragement. Possibility. A reminder to a young girl that someone believes in her dreams.</p>
                    <p>Because when one girl continues her education, stays healthy, gains confidence and discovers her potential, she doesn't just change her own future, she influences families, communities and generations.</p>
                    <p>Join us in helping more girls spread their wings.</p>
                    <p><strong>She Can Fly — because every girl deserves the chance to soar.</strong></p>
                </div>
            </section>


            <!-- ═══════════════════════════
                 WEBSITE LINK
            ════════════════════════════ -->
            <section class="smile-link-section">
                <p class="link-label">Partner in Her Success or Become a Changemaker</p>
                <a href="https://www.smilefoundationindia.org/donation/scf-delhi-royals" target="_blank" rel="noopener noreferrer" class="visit-website-btn">
                    <i class="fas fa-globe"></i>
                    Donate Now
                    <i class="fas fa-external-link-alt"></i>
                </a>
                <p class="link-label">Visit Our Official Website </p>
                <a href="https://www.smilefoundationindia.org/" target="_blank" rel="noopener noreferrer" class="visit-website-btn">
                    <i class="fas fa-globe"></i>
                    Smile Foundation
                    <i class="fas fa-external-link-alt"></i>
                </a>
                <div class="footer-social part">
                    <a href="https://www.instagram.com/smilefoundationindia?igsh=NTV3aDgybjF3cmNi"><i class="fab fa-instagram"></i></a>
                    <a href="https://x.com/smilefoundation"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/smile-foundation/"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.facebook.com/share/1EZ2sFKcUC/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://youtube.com/@smilefoundationofficial?si=ArRr_luh-Z6oiNiC"><i class="fab fa-youtube"></i></a>
                </div>
            </section>

        </main>
    </div>

    <?php include 'assets/footer.php'; ?>


    <!-- ═══════════════════════════
         MARQUEE JAVASCRIPT
    ════════════════════════════ -->
    <script>
    (function () {

        var track     = document.getElementById('mqTrack');
        var pauseBtn  = document.getElementById('mqPauseBtn');
        var pauseIcon = document.getElementById('mqPauseIcon');
        var pauseLabel= document.getElementById('mqPauseLabel');
        var speedBtns = document.querySelectorAll('.mq-speed-btn');

        var speeds = { slow: 50, normal: 28, fast: 14 };
        var currentSpeed = 'normal';
        var isPaused = false;

        function setSpeed(name) {
            currentSpeed = name;
            track.style.setProperty('--marquee-duration', speeds[name] + 's');
            track.style.animationDuration = speeds[name] + 's';

            speedBtns.forEach(function (btn) {
                btn.classList.toggle('active', btn.dataset.speed === name);
            });
        }

        function togglePause() {
            isPaused = !isPaused;
            track.style.animationPlayState = isPaused ? 'paused' : 'running';
            pauseBtn.classList.toggle('paused', isPaused);
            pauseIcon.className = isPaused ? 'fas fa-play' : 'fas fa-pause';
            pauseLabel.textContent = isPaused ? 'Play' : 'Pause';
        }

        speedBtns.forEach(function (btn) {
            btn.addEventListener('click', function () { setSpeed(btn.dataset.speed); });
        });

        pauseBtn.addEventListener('click', togglePause);

        var viewport = document.getElementById('mqViewport');
        var dragStart = null;

        viewport.addEventListener('touchstart', function (e) {
            dragStart = e.touches[0].clientX;
        }, { passive: true });

        viewport.addEventListener('touchend', function () {
            dragStart = null;
        }, { passive: true });

        setSpeed('normal');

    })();
    </script>

</body>
</html>