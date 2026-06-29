<?php
$activePage = 'team';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Delhi Royals | Our Team</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>

        /* ===== TEAM HERO ===== */
        .team-hero {
            position: relative;
            background: #0a0a0a;
            padding: 120px 0 80px;
            text-align: center;
            overflow: hidden;
        }

        .team-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse 80% 60% at 50% 0%, rgba(180,145,60,0.18) 0%, transparent 70%);
        }

        .team-hero-badge {
            display: inline-block;
            letter-spacing: 0.3em;
            font-size: 0.7rem;
            font-weight: 600;
            color: #b4913c;
            text-transform: uppercase;
            border: 1px solid rgba(180,145,60,0.4);
            padding: 6px 20px;
            border-radius: 2px;
            margin-bottom: 24px;
            position: relative;
        }

        .team-hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.8rem, 6vw, 5rem);
            color: #f5f0e8;
            font-weight: 700;
            letter-spacing: 0.06em;
            margin: 0 0 16px;
            position: relative;
        }

        .team-hero h1 span { color: #b4913c; }

        .team-hero-line {
            width: 60px;
            height: 2px;
            background: linear-gradient(90deg, transparent, #b4913c, transparent);
            margin: 20px auto 24px;
        }

        .team-hero p {
            font-size: 1rem;
            color: rgba(245,240,232,0.65);
            max-width: 560px;
            margin: 0 auto;
            line-height: 1.8;
            font-weight: 300;
            position: relative;
        }

        /* ===== TEAM SECTION ===== */
        .team-section {
            background: #f8f6f1;
            padding: 90px 0 100px;
        }

        .team-section .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 32px;
        }

        .team-section-header {
            text-align: center;
            margin-bottom: 64px;
        }

        .team-section-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 1.9rem;
            color: #1a1410;
            letter-spacing: 0.08em;
            margin: 0 0 12px;
        }

        .team-divider {
            display: flex;
            align-items: center;
            gap: 12px;
            justify-content: center;
            margin: 16px auto 0;
        }

        .team-divider span {
            display: block;
            width: 48px;
            height: 1px;
            background: #b4913c;
        }

        .team-divider i { color: #b4913c; font-size: 0.8rem; }

        /* ===== ROW 1: 2 cards centered ===== */
        .team-row-owners {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 32px;
            max-width: 720px;
            margin: 0 auto 40px;
        }

        /* ===== ROW 2: 3 cards ===== */
        .team-row-three {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 32px;
        }

        /* ===== CARD ===== */
        .team-card {
            background: #ffffff;
            border: 1px solid rgba(180,145,60,0.15);
            overflow: hidden;
            position: relative;
            cursor: pointer;
            transition: transform 0.35s ease, box-shadow 0.35s ease;
        }

        .team-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 24px 60px rgba(0,0,0,0.12), 0 0 0 1px rgba(180,145,60,0.25);
        }

        .team-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, #b4913c, transparent);
            opacity: 0;
            transition: opacity 0.35s ease;
        }

        .team-card:hover::before { opacity: 1; }

        /* Image */
        .team-card-image {
            position: relative;
            width: 100%;
            padding-bottom: 100%;
            overflow: hidden;
            background: #1a1410;
        }

        .team-card-image img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
            transition: transform 0.55s ease;
            filter: grayscale(8%);
        }

        .team-card:hover .team-card-image img {
            transform: scale(1.04);
            filter: grayscale(0%);
        }

        .team-card-image-overlay {
            position: absolute;
            height: fit-content;
            inset: 0;
            background: linear-gradient(to bottom, transparent 50%, rgba(10,8,5,0.45) 100%);
        }

        /* Info bar */
        .team-card-info {
            padding: 18px 20px 20px;
            border-top: 1px solid rgba(180,145,60,0.12);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }

        .team-card-info-text { flex: 1; min-width: 0; }

        .team-card-role {
            font-size: 0.63rem;
            letter-spacing: 0.25em;
            font-weight: 600;
            text-transform: uppercase;
            color: #b4913c;
            margin-bottom: 4px;
        }

        .team-card-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.1rem;
            color: #1a1410;
            font-weight: 600;
            margin: 0;
            line-height: 1.2;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Arrow button */
        .team-card-arrow {
            width: 36px;
            height: 36px;
            border: 1px solid rgba(180,145,60,0.35);
            background: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #b4913c;
            font-size: 0.85rem;
            flex-shrink: 0;
            transition: all 0.25s ease;
            cursor: pointer;
        }

        .team-card:hover .team-card-arrow {
            background: #1a1410;
            border-color: #b4913c;
            color: #b4913c;
        }

        /* ===== POPUP OVERLAY ===== */
        .popup-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(10,8,5,0.82);
            z-index: 9999;
            align-items: center;
            justify-content: center;
            padding: 20px;
            backdrop-filter: blur(4px);
        }

        .popup-overlay.active { display: flex; }

        .popup-modal {
            background: #ffffff;
            max-width: 760px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            display: flex;
            flex-direction: row;
        }

        .popup-image-col {
            width: 260px;
            flex-shrink: 0;
            position: relative;
            background: #1a1410;
            overflow: hidden;
        }

        .popup-image-col img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
            display: block;
        }

        .popup-content-col {
            flex: 1;
            padding: 40px 36px;
            overflow-y: auto;
        }

        .popup-close {
            position: absolute;
            top: 16px;
            right: 16px;
            width: 36px;
            height: 36px;
            background: #1a1410;
            border: 1px solid rgba(180,145,60,0.4);
            color: #b4913c;
            font-size: 1rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
            transition: background 0.2s;
        }

        .popup-close:hover { background: #b4913c; color: #1a1410; }

        .popup-role {
            font-size: 0.65rem;
            letter-spacing: 0.28em;
            font-weight: 600;
            text-transform: uppercase;
            color: #b4913c;
            margin-bottom: 8px;
        }

        .popup-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.7rem;
            color: #1a1410;
            font-weight: 700;
            margin: 0 0 6px;
            line-height: 1.2;
        }

        .popup-divider {
            width: 40px;
            height: 2px;
            background: #b4913c;
            margin: 16px 0;
        }

        .popup-desc {
            font-size: 0.88rem;
            color: #4a4238;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        /* .popup-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 24px;
        } */

        .popup-tag {
            font-size: 0.63rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            padding: 4px 12px;
            border: 1px solid rgba(180,145,60,0.35);
            color: #8a7550;
            background: rgba(180,145,60,0.06);
            font-weight: 500;
        }

        .popup-social {
            display: flex;
            gap: 10px;
            padding-top: 18px;
            border-top: 1px solid rgba(180,145,60,0.12);
        }

        .popup-social a {
            width: 34px;
            height: 34px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(180,145,60,0.3);
            color: #8a7550;
            font-size: 0.8rem;
            text-decoration: none;
            transition: all 0.25s ease;
        }

        .popup-social a:hover {
            background: #1a1410;
            border-color: #b4913c;
            color: #b4913c;
        }

        /* ===== QUOTE STRIP ===== */
        .team-quote-strip {
            background: #1a1410;
            padding: 60px 0;
            text-align: center;
        }

        .team-quote-strip blockquote {
            font-family: 'Playfair Display', serif;
            font-size: clamp(1.1rem, 2.5vw, 1.5rem);
            color: rgba(245,240,232,0.85);
            font-style: italic;
            max-width: 680px;
            margin: 0 auto 16px;
            line-height: 1.7;
            font-weight: 600;
        }

        .team-quote-strip cite {
            font-size: 0.75rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: #b4913c;
            font-style: normal;
            font-weight: 500;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .team-row-owners {
                grid-template-columns: repeat(2, 1fr);
                max-width: 100%;
            }
            .team-row-three {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 620px) {
            .team-row-owners,
            .team-row-three {
                grid-template-columns: 1fr;
                max-width: 360px;
                margin-left: auto;
                margin-right: auto;
            }
            .popup-modal { flex-direction: column; }
            .popup-image-col { width: 100%; height: 260px; }
            .popup-content-col { padding: 24px 20px; }
            .team-section .container { padding: 0 16px; }
        }
    </style>
</head>
<body>
<div class="site-wrapper">

    <?php include 'navbar.php'; ?>

    <!-- ===== TEAM HERO ===== -->
    <section class="team-hero">
        <div class="team-hero-badge">Delhi Royals · Sure Golf LLP</div>
        <h1>Meet The <span>Royals</span></h1>
        <div class="team-hero-line"></div>
        <p>The visionaries, leaders, and champions behind India's most iconic golf franchise.</p>
    </section>

    <!-- ===== TEAM GRID ===== -->
    <section class="team-section">
        <div class="container">

            <div class="team-section-header">
                <h2>OUR LEADERSHIP TEAM</h2>
                <div class="team-divider">
                    <span></span>
                    <i class="fas fa-crown"></i>
                    <span></span>
                </div>
                <p style="margin-top:14px; color:#7a6f60; font-size:0.95rem;">Excellence, vision, and royal ambition — the people driving Delhi Royals forward.</p>
            </div>

            <!-- ROW 1: 2 Owners centered -->
            <div class="team-row-owners">

                <!-- Vega -->
                <div class="team-card" onclick="openPopup('vega')">
                    <div class="team-card-image">
                        <img src="images/vegamam.jpg" alt="Vega Jahajgarhia">
                        <div class="team-card-image-overlay"></div>
                    </div>
                    <div class="team-card-info">
                        <div class="team-card-info-text">
                            <div class="team-card-role">owner</div>
                            <h3 class="team-card-name">Vega Jahajgarhia</h3>
                        </div>
                        <button class="team-card-arrow" aria-label="View details">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Tanvi -->
                <div class="team-card" onclick="openPopup('tanvi')">
                    <div class="team-card-image">
                        <img src="images/newimg.jpeg" alt="Tanvi Gupta">
                        <div class="team-card-image-overlay"></div>
                    </div>
                    <div class="team-card-info">
                        <div class="team-card-info-text">
                            <div class="team-card-role">owner</div>
                            <h3 class="team-card-name">Tanvi Gupta</h3>
                        </div>
                        <button class="team-card-arrow" aria-label="View details">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

            </div><!-- /row-owners -->

            <!-- ROW 2: 3 cards -->
            <div class="team-row-three">

                <!-- Bhagyashree -->
                <div class="team-card" onclick="openPopup('bhagya')">
                    <div class="team-card-image">
                        <img src="images/maroon.jpeg" alt="Bhagyashree Singh">
                        <div class="team-card-image-overlay"></div>
                    </div>
                    <div class="team-card-info">
                        <div class="team-card-info-text">
                            <div class="team-card-role">Board Adviser</div>
                            <h3 class="team-card-name">Bhagyashree Singh</h3>
                        </div>
                        <button class="team-card-arrow" aria-label="View details">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Geeta -->
                <div class="team-card" onclick="openPopup('geeta')">
                    <div class="team-card-image">
                        <img src="images/katrina.jpeg" alt="Geeta Basra">
                        <div class="team-card-image-overlay"></div>
                    </div>
                    <div class="team-card-info">
                        <div class="team-card-info-text">
                            <div class="team-card-role">Brand Ambassador</div>
                            <h3 class="team-card-name">Geeta Basra</h3>
                        </div>
                        <button class="team-card-arrow" aria-label="View details">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Team -->
                <div class="team-card" onclick="openPopup('team')">
                    <div class="team-card-image">
                        <img src="images/gallery5.jpeg" alt="Delhi Royals Team">
                        <div class="team-card-image-overlay"></div>
                    </div>
                    <div class="team-card-info">
                        <div class="team-card-info-text">
                            <div class="team-card-role">Delhi Royals</div>
                            <h3 class="team-card-name">Teams</h3>
                        </div>
                        <button class="team-card-arrow" aria-label="View details">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

            </div><!-- /row-three -->

        </div>
    </section>

    <!-- ===== POPUPS ===== -->

    <!-- Vega Popup -->
    <div class="popup-overlay" id="popup-vega" onclick="closeOnOverlay(event, 'vega')">
        <div class="popup-modal">
            <div class="popup-image-col">
                <img src="images/vegamam.jpg" alt="Vega Jahajgarhia">
            </div>
            <div class="popup-content-col">
                <button class="popup-close" onclick="closePopup('vega')"><i class="fas fa-times"></i></button>
                <div class="popup-role">owner · Delhi Royals</div>
                <h2 class="popup-name">Vega Jahajgarhia</h2>
                <div class="popup-divider"></div>
                <p class="popup-desc">Vega Jahajgarhia (née Vega Gupta) is a prominent Indian entrepreneur, sports owner, and co-founder of the Delhi Royals, India's first women-led golf franchise. Along with business partner Tanvi Gupta, she has established herself as a disruptive force within the premium Indian sports circuit.</p>
                <p class="popup-desc">Her vision has been instrumental in building Delhi Royals into one of India's most aspirational golf franchises — blending championship sport with luxury lifestyle and women-led empowerment.</p>
                <!-- <div class="popup-tags">
                    <span class="popup-tag">Leadership</span>
                    <span class="popup-tag">Strategy</span>
                    <span class="popup-tag">Golf</span>
                    <span class="popup-tag">Entrepreneurship</span>
                </div> -->
                <div class="popup-social">
                    <a href="https://www.instagram.com/vegagarg?igsh=MXFnanVqdGN2MWNqdg==" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tanvi Popup -->
    <div class="popup-overlay" id="popup-tanvi" onclick="closeOnOverlay(event, 'tanvi')">
        <div class="popup-modal">
            <div class="popup-image-col">
                <img src="images/newimg.jpeg" alt="Tanvi Gupta">
            </div>
            <div class="popup-content-col">
                <button class="popup-close" onclick="closePopup('tanvi')"><i class="fas fa-times"></i></button>
                <div class="popup-role">owner · Delhi Royals</div>
                <h2 class="popup-name">Tanvi Gupta</h2>
                <div class="popup-divider"></div>
                <p class="popup-desc">Tanvi Gupta is a prominent figure in the Indian golfing community, recognized as a co-owner and leader of the Delhi Royals franchise — India's first women-led golf franchise. Alongside co-owner Vega Jahajgarhia, she has brought widespread attention, glamour, and strategic intent to professional golf in India.</p>
                <p class="popup-desc">Her leadership embodies the franchise's core values of elegance, ambition, and the belief that sport can transcend boundaries and inspire an entire generation.</p>
                <!-- <div class="popup-tags">
                    <span class="popup-tag">Women's Golf</span>
                    <span class="popup-tag">Indian Sports</span>
                    <span class="popup-tag">Leadership</span>
                    <span class="popup-tag">Luxury</span>
                </div> -->
                <div class="popup-social">
                    <a href="https://www.instagram.com/tanv24?igsh=MXJsOW5udTN5c2FlaQ==" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bhagyashree Popup -->
    <div class="popup-overlay" id="popup-bhagya" onclick="closeOnOverlay(event, 'bhagya')">
        <div class="popup-modal">
            <div class="popup-image-col">
                <img src="images/maroon.jpeg" alt="Bhagyashree Singh">
            </div>
            <div class="popup-content-col">
                <button class="popup-close" onclick="closePopup('bhagya')"><i class="fas fa-times"></i></button>
                <div class="popup-role">Board Advisor · Delhi Royals</div>
                <h2 class="popup-name">Bhagyashree Singh</h2>
                <div class="popup-divider"></div>
                <p class="popup-desc">Bhagyashree Singh is the Founder& Director <a href="https://merakii.in/">Merakii Group</a>| Investor  | Women Director on Board of listed company, leading the organization with a vision of innovation, impactful communication, and strategic brand building.</p>
                <p class="popup-desc">Under her leadership, Merakii has grown into a dynamic integrated communications company delivering excellence across public relations, digital marketing, branding, events, and creative solutions — fostering meaningful connections between brands and audiences.</p>
                <!-- <div class="popup-tags">
                    <span class="popup-tag">Leadership</span>
                    <span class="popup-tag">Brand Strategy</span>
                    <span class="popup-tag">Communications</span>
                </div> -->
                <div class="popup-social">
                    <a href="https://www.linkedin.com/in/bhagyashree-singh-a40a07116" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com/iambhagyashree_?igsh=YWVsaXB3OWxwcXI4" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://x.com/Shree23Singh" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Geeta Popup -->
    <div class="popup-overlay" id="popup-geeta" onclick="closeOnOverlay(event, 'geeta')">
        <div class="popup-modal">
            <div class="popup-image-col">
                <img src="images/katrina.jpeg" alt="Geeta Basra">
            </div>
            <div class="popup-content-col">
                <button class="popup-close" onclick="closePopup('geeta')"><i class="fas fa-times"></i></button>
                <div class="popup-role">Brand Ambassador · Delhi Royals</div>
                <h2 class="popup-name">Geeta Basra</h2>
                <div class="popup-divider"></div>
                <p class="popup-desc">Actress Geeta Basra serves as the Brand Ambassador and Mentor for Delhi Royals, India's first women-led franchise in the Golf Premier League (GRPL).</p>
                <p class="popup-desc">Through her association with the team, she supports the mission of making golf more accessible and popular while helping bridge the gap between sport and culture for a wider audience. Her presence brings star power, elegance, and aspirational energy to the franchise.</p>
                <!-- <div class="popup-tags">
                    <span class="popup-tag">Brand Ambassador</span>
                    <span class="popup-tag">Mentor</span>
                    <span class="popup-tag">GRPL</span>
                </div> -->
                <div class="popup-social">
                    <a href="https://www.instagram.com/geetabasra/" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Popup -->
    <div class="popup-overlay" id="popup-team" onclick="closeOnOverlay(event, 'team')">
        <div class="popup-modal">
            <div class="popup-image-col">
                <img src="images/gallery5.jpeg" alt="Delhi Royals Playing XI">
            </div>
            <div class="popup-content-col">
                <button class="popup-close" onclick="closePopup('team')"><i class="fas fa-times"></i></button>
                <div class="popup-role">Playing XI · GRPL Season 1</div>
                <h2 class="popup-name">Delhi Royals</h2>
                <div class="popup-divider"></div>
                <p class="popup-desc">While everyone else looked for balance, Delhi Royals backed an <strong>All-Women Playing 10</strong> for the opening leg of GRPL Season 1 at Zion Hills Golf County, Kolar.</p>
                <p class="popup-desc">Led by captain <strong>Jahanvi Bakshi</strong>, the line-up brings together professionals, experienced amateurs, and rising names from across Indian golf into one franchise — a historic statement for women's sport in India.</p>
                <!-- <div class="popup-tags">
                    <span class="popup-tag">All-Women XI</span>
                    <span class="popup-tag">GRPL Season 1</span>
                    <span class="popup-tag">Indian Golf</span>
                    <span class="popup-tag">Women's Sport</span>
                </div> -->
                <div class="popup-social">
                    <a href="https://www.instagram.com/delhiroyals.grpl/" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== QUOTE STRIP ===== -->
    <section class="team-quote-strip">
        <div class="container">
            <blockquote>
                "Every great team is built on shared values — excellence, integrity, and the relentless pursuit of something extraordinary."
            </blockquote>
            <cite>— Delhi Royals Leadership</cite>
        </div>
    </section>

    <?php
        include 'assets/footer.php';
    ?>

</div>

<script>
function openPopup(id) {
    document.getElementById('popup-' + id).classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closePopup(id) {
    document.getElementById('popup-' + id).classList.remove('active');
    document.body.style.overflow = '';
}

function closeOnOverlay(event, id) {
    if (event.target === document.getElementById('popup-' + id)) {
        closePopup(id);
    }
}

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        document.querySelectorAll('.popup-overlay.active').forEach(function(el) {
            el.classList.remove('active');
        });
        document.body.style.overflow = '';
    }
});
</script>
</body>
</html>
