<?php
$activePage = 'event';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delhi Royals | Events</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>

        /* ══════════════════════════════════════
           EVENT PAGE — STYLES
        ══════════════════════════════════════ */

        /* ── HERO ── */
        .event-hero {
            position: relative;
            width: 100%;
            height: 72vh;
            min-height: 420px;
            overflow: hidden;
            display: flex;
            align-items: flex-end;
            justify-content: center;
        }

        .event-hero img.hero-bg {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
            transition: transform 8s ease;
        }

        .event-hero:hover img.hero-bg {
            transform: scale(1.04);
        }

        .event-hero::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(
                to bottom,
                rgba(0,0,0,0.10) 0%,
                rgba(0,0,0,0.06) 40%,
                rgba(0,0,0,0.65) 72%,
                rgba(0,0,0,0.92) 100%
            );
            pointer-events: none;
        }

        .event-hero-content {
            position: relative;
            z-index: 10;
            text-align: center;
            padding: 0 20px 64px;
            max-width: 780px;
            animation: evFadeUp 1s 0.3s both;
        }

        .ev-tag {
            display: inline-block;
            font-size: 10px;
            letter-spacing: 5px;
            text-transform: uppercase;
            color: #c9a84c;
            border: 1px solid #9a7a2e;
            padding: 5px 16px;
            border-radius: 2px;
            margin-bottom: 16px;
        }

        .event-hero-content h1 {
            font-size: clamp(36px, 6.5vw, 76px);
            font-weight: 700;
            line-height: 1.08;
            letter-spacing: 2px;
            color: #ffffff;
            text-shadow: 0 4px 30px rgba(0,0,0,0.5);
            margin-bottom: 18px;
            text-transform: uppercase;
        }

        .event-hero-content h1 span {
            color: #c9a84c;
        }

        .event-hero-content p {
            font-size: clamp(13px, 1.6vw, 15px);
            font-weight: 300;
            line-height: 1.85;
            color: #cccccc;
            max-width: 580px;
            margin: 0 auto;
        }

        /* scroll hint */
        .ev-scroll-hint {
            position: absolute;
            bottom: 22px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
            animation: evFadeUp 1s 1.2s both;
        }

        .ev-scroll-hint span {
            font-size: 9px;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #c9a84c;
        }

        .ev-scroll-hint .ev-sline {
            width: 1px;
            height: 36px;
            background: linear-gradient(to bottom, #c9a84c, transparent);
            animation: evLineBlink 2s infinite;
        }


        /* ══════════════════════════════════════
           EVENT CARDS — alternate layout
           Even  = image RIGHT, text LEFT
           Odd   = image LEFT, text RIGHT
        ══════════════════════════════════════ */
        .events-wrapper {
            background: #ffffff;
        }

        .event-row {
            display: flex;
            align-items: stretch;
            min-height: 520px;
            border-bottom: 1px solid #ebebeb;
            overflow: hidden;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .event-row.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Image side */
        .event-img-side {
            flex: 0 0 52%;
            position: relative;
            overflow: hidden;
            min-height: 460px;
        }

        .event-img-side img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
            transition: transform 0.7s ease;
        }

        .event-row:hover .event-img-side img {
            transform: scale(1.04);
        }

        /* gold accent strip on image */
        .event-img-side::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 4px;
            background: #c9a84c;
            z-index: 2;
        }

        /* strip on LEFT edge when image is on left */
        .event-row.img-left .event-img-side::before  { left: 0; }
        /* strip on RIGHT edge when image is on right */
        .event-row.img-right .event-img-side::before { right: 0; left: auto; }

        /* Text side */
        .event-text-side {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 56px 60px;
            background: #ffffff;
        }

        .event-row.img-right .event-text-side {
            background: #fafaf8;
        }

        .event-number {
            font-size: 11px;
            letter-spacing: 5px;
            text-transform: uppercase;
            color: #c9a84c;
            margin-bottom: 12px;
            display: block;
        }

        .event-text-side h2 {
            font-size: clamp(22px, 2.8vw, 36px);
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #111111;
            line-height: 1.15;
            margin-bottom: 10px;
        }

        .ev-gold-line {
            width: 44px;
            height: 3px;
            background: #c9a84c;
            margin-bottom: 22px;
        }

        .event-text-side p {
            font-size: clamp(13px, 1.4vw, 15px);
            font-weight: 400;
            line-height: 1.9;
            color: #555555;
            margin-bottom: 12px;
        }

        .event-text-side p:last-of-type {
            margin-bottom: 28px;
        }

        /* meta badges */
        .ev-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 30px;
        }

        .ev-badge {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            font-size: 11px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #888888;
            border: 1px solid #e0e0e0;
            padding: 6px 14px;
            border-radius: 2px;
            background: #f9f9f7;
        }

        .ev-badge i {
            color: #c9a84c;
            font-size: 12px;
        }

        /* CTA button */
        .ev-cta-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #111111;
            color: #c9a84c;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 3px;
            text-transform: uppercase;
            text-decoration: none;
            padding: 14px 32px;
            border-radius: 2px;
            border: 1px solid #c9a84c;
            transition: all 0.3s ease;
            align-self: flex-start;
        }

        .ev-cta-btn:hover {
            background: #c9a84c;
            color: #111111;
            transform: translateY(-2px);
            box-shadow: 0 8px 28px rgba(201,168,76,0.30);
        }

        .ev-cta-btn i {
            font-size: 13px;
            transition: transform 0.3s ease;
        }

        .ev-cta-btn:hover i {
            transform: translateX(4px);
        }

        /* ORDER: img-left = image first, img-right = image second */
        .event-row.img-left {
            flex-direction: row;
        }

        .event-row.img-right {
            flex-direction: row-reverse;
        }


        /* ══════════════════════════════════════
           BOTTOM CTA BAND
        ══════════════════════════════════════ */
        .ev-cta-band {
            background: #111111;
            padding: 70px 20px;
            text-align: center;
            border-top: 1px solid #2a2a2a;
        }

        .ev-cta-band span {
            display: block;
            font-size: 10px;
            letter-spacing: 5px;
            text-transform: uppercase;
            color: #c9a84c;
            margin-bottom: 14px;
        }

        .ev-cta-band h2 {
            font-size: clamp(24px, 4vw, 44px);
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #ffffff;
            margin-bottom: 14px;
            line-height: 1.15;
        }

        .ev-cta-band h2 em {
            color: #c9a84c;
            font-style: normal;
        }

        .ev-cta-band p {
            font-size: clamp(13px, 1.5vw, 15px);
            color: #888888;
            line-height: 1.8;
            max-width: 520px;
            margin: 0 auto 36px;
        }

        .ev-cta-band-btn {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: transparent;
            color: #c9a84c;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 3px;
            text-transform: uppercase;
            text-decoration: none;
            padding: 16px 44px;
            border-radius: 2px;
            border: 1px solid #c9a84c;
            transition: all 0.3s ease;
        }

        .ev-cta-band-btn:hover {
            background: #c9a84c;
            color: #111111;
            transform: translateY(-2px);
            box-shadow: 0 8px 32px rgba(201,168,76,0.25);
        }


        /* ══════════════════════════════════════
           ANIMATIONS
        ══════════════════════════════════════ */
        @keyframes evFadeUp {
            from { opacity: 0; transform: translateY(28px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        @keyframes evLineBlink {
            0%, 100% { opacity: 0.3; }
            50%       { opacity: 1; }
        }


        /* ══════════════════════════════════════
           RESPONSIVE
        ══════════════════════════════════════ */
        @media (max-width: 900px) {
            .event-text-side {
                padding: 44px 40px;
            }
        }

        @media (max-width: 768px) {
            .event-hero { height: 70svh; }

            /* Stack vertically on tablet/mobile */
            .event-row,
            .event-row.img-left,
            .event-row.img-right {
                flex-direction: column !important;
            }

            .event-img-side {
                flex: none;
                width: 100%;
                min-height: 280px;
                max-height: 340px;
            }

            /* gold strip moves to top on mobile */
            .event-img-side::before {
                top: 0;
                bottom: auto;
                left: 0 !important;
                right: auto !important;
                width: 100% !important;
                height: 4px;
            }

            .event-text-side {
                padding: 36px 24px 44px;
            }

            .ev-scroll-hint { display: none; }
        }

        @media (max-width: 480px) {
            .event-hero-content h1 { font-size: 32px; }

            .event-text-side h2 {
                font-size: 22px;
                letter-spacing: 0.5px;
            }

            .ev-cta-btn {
                font-size: 10px;
                padding: 12px 22px;
                letter-spacing: 2px;
            }

            .event-img-side {
                min-height: 240px;
                max-height: 280px;
            }
        }

    </style>
</head>
<body>
    <div class="site-wrapper">
        <?php include 'navbar.php'; ?>

        <main>

            <!-- ═══════════════════════════
                 HERO SECTION
            ════════════════════════════ -->
            <section class="event-hero">
                <img src="smilfoundation/ball1.webp" alt="Delhi Royals Events" class="hero-bg">

                <div class="event-hero-content">
                    <span class="ev-tag">Delhi Royals</span>
                    <h1>Our <span>Events</span></h1>
                    <p>
                        Every tournament, every gathering, every celebration —
                        Delhi Royals brings women together to compete, connect and inspire.
                    </p>
                </div>

                <div class="ev-scroll-hint">
                    <span>Scroll</span>
                    <div class="ev-sline"></div>
                </div>
            </section>


            <!-- ═══════════════════════════
                 EVENT ROWS
                 Add / remove .event-row blocks as needed.
                 .img-left  = image on LEFT, text on RIGHT
                 .img-right = image on RIGHT, text on LEFT
            ════════════════════════════ -->
            <div class="events-wrapper">


                <!-- ── EVENT 1 — image LEFT ── -->
                <div class="event-row img-left">

                    <div class="event-img-side">
                        <img src="smilfoundation/pink2.jpg" alt="Season Opener 2025">
                    </div>

                    <div class="event-text-side">
                        <span class="event-number">GRPL S1</span>
                        <h2>The Royal Trial of India<br>Kolar leg(438)</h2>
                        <div class="ev-gold-line"></div>

                        <div class="ev-meta">
                            <span class="ev-badge"><i class="fas fa-calendar-alt"></i> May-26, 2026</span>
                            <span class="ev-badge"><i class="fas fa-map-marker-alt">Kolar leg(438)</i> </span>
                            <!-- <span class="ev-badge"><i class="fas fa-users"></i> 48 Players</span> -->
                        </div>

                        <p>
                            The much-awaited season opener brought together Delhi Royals' finest women golfers for a day of fierce competition, camaraderie and celebration on one of India's most iconic courses.
                        </p>
                        <p>
                            From sunrise warm-ups to the glittering prize ceremony, every moment reminded us why we play — for the love of the game and the strength of our community.
                        </p>
                    </div>

                </div>


                <!-- ── EVENT 2 — image RIGHT ── -->
                <!-- <div class="event-row img-right">

                    <div class="event-img-side">
                        <img src="images/event2.jpg" alt="Charity Golf Day">
                    </div>

                    <div class="event-text-side">
                        <span class="event-number">Event 02</span>
                        <h2>She Can Fly<br>Charity Golf Day</h2>
                        <div class="ev-gold-line"></div>

                        <div class="ev-meta">
                            <span class="ev-badge"><i class="fas fa-calendar-alt"></i> April 6, 2025</span>
                            <span class="ev-badge"><i class="fas fa-map-marker-alt"></i> Classic Golf Resort, Manesar</span>
                            <span class="ev-badge"><i class="fas fa-heart"></i> Charity Event</span>
                        </div>

                        <p>
                            In partnership with Smile Foundation's She Can Fly initiative, Delhi Royals hosted a special charity round raising funds to support girls from underserved communities across India.
                        </p>
                        <p>
                            Every drive, every putt and every birdie on this day carried a larger purpose — because when one girl gets the chance to learn, an entire community rises.
                        </p>

                        <a href="#" class="ev-cta-btn">
                            <i class="fas fa-arrow-right"></i> View Gallery
                        </a>
                    </div>

                </div> -->


                <!-- ── EVENT 3 — image LEFT ── -->
                <!-- <div class="event-row img-left">

                    <div class="event-img-side">
                        <img src="images/event3.jpg" alt="Mid Season Classic">
                    </div>

                    <div class="event-text-side">
                        <span class="event-number">Event 03</span>
                        <h2>Mid Season<br>Classic Invitational</h2>
                        <div class="ev-gold-line"></div>

                        <div class="ev-meta">
                            <span class="ev-badge"><i class="fas fa-calendar-alt"></i> June 22, 2025</span>
                            <span class="ev-badge"><i class="fas fa-map-marker-alt"></i> Qutab Golf Course, Delhi</span>
                            <span class="ev-badge"><i class="fas fa-trophy"></i> Invitational</span>
                        </div>

                        <p>
                            The mid-season classic invited some of Delhi's most accomplished women golfers for an afternoon of stroke play followed by an elegant sunset dinner on the greens.
                        </p>
                        <p>
                            A day that balanced competitive spirit with grace — the very essence of what Delhi Royals stands for.
                        </p>

                        <a href="#" class="ev-cta-btn">
                            <i class="fas fa-arrow-right"></i> View Gallery
                        </a>
                    </div>

                </div> -->


                <!-- ── EVENT 4 — image RIGHT ── -->
                <!-- <div class="event-row img-right">

                    <div class="event-img-side">
                        <img src="images/event4.jpg" alt="Grand Finale 2025">
                    </div>

                    <div class="event-text-side">
                        <span class="event-number">Event 04</span>
                        <h2>Grand Finale<br>Season 2025</h2>
                        <div class="ev-gold-line"></div>

                        <div class="ev-meta">
                            <span class="ev-badge"><i class="fas fa-calendar-alt"></i> October 18, 2025</span>
                            <span class="ev-badge"><i class="fas fa-map-marker-alt"></i> Jaypee Greens Golf Course</span>
                            <span class="ev-badge"><i class="fas fa-star"></i> Season Final</span>
                        </div>

                        <p>
                            The grandest occasion of the calendar — a full-day tournament followed by an awards gala celebrating the season's champions, outstanding contributors and the club's most memorable moments of 2025.
                        </p>
                        <p>
                            An evening of gold, glory and gratitude — because every Royals season ends with a celebration worthy of champions.
                        </p>

                        <a href="#" class="ev-cta-btn">
                            <i class="fas fa-arrow-right"></i> View Gallery
                        </a>
                    </div>

                </div> -->


            </div><!-- /events-wrapper -->


            <!-- ═══════════════════════════
                 BOTTOM CTA BAND
            ════════════════════════════ -->
            <section class="ev-cta-band">
                <span>Delhi Royals</span>
                <h2>Want to be part of<br>the next <em>Royal</em> event?</h2>
                <p>
                    Whether you are a seasoned golfer or just beginning your journey,
                    Delhi Royals welcomes you into a community built on passion, purpose and pride.
                </p>
                <a href="mailto:info@delhiroyals.com" class="ev-cta-band-btn">
                    <i class="fas fa-envelope"></i> Get In Touch
                </a>
            </section>

        </main>
    </div>

    <?php include 'assets/footer.php'; ?>


    <!-- ═══════════════════════════
         SCROLL REVEAL — JS
    ════════════════════════════ -->
    <script>
    (function () {
        const rows = document.querySelectorAll('.event-row');

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });

        rows.forEach(function (row) {
            observer.observe(row);
        });
    })();
    </script>

</body>
</html>