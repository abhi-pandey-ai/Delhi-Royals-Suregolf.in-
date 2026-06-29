<?php
$activePage = 'event';

// Event ID from URL — default to 1
$eventId = isset($_GET['event']) ? intval($_GET['event']) : 1;

// ── EVENT META ──────────────────────────────────────────
$events = [
    1 => [
        'label'    => 'GRPL S1',
        'title'    => 'The Royal Trial of India — Kolar Leg',
        'date'     => 'May 26, 2026',
        'venue'    => 'Kolar Leg (438)',
        // Replace src values with your real image paths
        'images'   => [
            ['src' => 'tournament/t8.jpeg',  'caption' => 'Tee-off at Dawn'],
            ['src' => 'tournament/t9.jpeg',  'caption' => 'The Fairway'],
            ['src' => 'tournament/t10.jpeg',  'caption' => 'Approach Shot'],
            ['src' => 'tournament/t1.jpeg',  'caption' => 'On the Green'],
            ['src' => 'tournament/t11.jpeg',        'caption' => 'Prize Ceremony'],
            ['src' => 'tournament/t12.jpeg',        'caption' => 'Champions'],
            ['src' => 'tournament/t13.jpeg',        'caption' => 'Team Royals'],
            ['src' => 'tournament/t4.jpeg',        'caption' => 'Sunset Round'],
            ['src' => 'tournament/t6.jpeg',        'caption' => 'Celebrating Together'],
        ],
    ],
    2 => [
        'label'    => 'GRPL  02',
        'title'    => 'The Royal Trial of India —Hyderabad ',
        'date'     => 'june 19-20, 2026',
        'venue'    => 'Hills Golf & Country Club in Hyderabad',
        'images'   => [
            ['src' => 'tournament/haydrabad5.jpeg',  'caption' => 'Charity Round Begins'],
            ['src' => 'tournament/haydrabad1.jpeg',  'caption' => 'Smile Foundation Partnership'],
            ['src' => 'tournament/haydrabad4.jpeg',  'caption' => 'She Can Fly'],
            ['src' => 'tournament/haydrabad3.jpeg',  'caption' => 'On The Fairway'],
            ['src' => 'tournament/hydrabad8.jpeg',  'caption' => 'Community Spirit'],
            ['src' => 'tournament/haydrabad2.jpeg',  'caption' => 'Award Moment'],
            ['src' => 'tournament/hydrabad9.jpeg',  'caption' => 'Award Moment'],
            ['src' => 'tournament/hydrabad10.jpeg',  'caption' => 'Together We Rise'],
            ['src' => 'tournament/hydrabad11.jpeg',  'caption' => 'Closing Ceremony'],
            ['src' => 'tournament/haydrabad6.jpeg',  'caption' => 'Closing Ceremony'],
            ['src' => 'tournament/hydrabad7.jpeg',  'caption' => 'Closing Ceremony'],
        ],
    ],
    // add next math images 
    // 3 => [
    //     'label'    => 'Event 03',
    //     'title'    => 'Mid Season Classic Invitational',
    //     'date'     => 'June 22, 2025',
    //     'venue'    => 'Qutab Golf Course, Delhi',
    //     'images'   => [
    //         ['src' => 'images/event3-1.jpg', 'caption' => 'Morning Tee'],
    //         ['src' => 'images/event3-2.jpg', 'caption' => 'Classic Stroke Play'],
    //         ['src' => 'images/event3-3.jpg', 'caption' => 'Sunset Dinner'],
    //         ['src' => 'images/event3-4.jpg', 'caption' => 'Invitational Trophy'],
    //         ['src' => 'images/event3-5.jpg', 'caption' => 'Grace & Game'],
    //         ['src' => 'images/event3-6.jpg', 'caption' => 'Qutab Greens'],
    //     ],
    // ],
    // 4 => [
    //     'label'    => 'Event 04',
    //     'title'    => 'Grand Finale — Season 2025',
    //     'date'     => 'October 18, 2025',
    //     'venue'    => 'Jaypee Greens Golf Course',
    //     'images'   => [
    //         ['src' => 'images/event4-1.jpg', 'caption' => 'Grand Opening'],
    //         ['src' => 'images/event4-2.jpg', 'caption' => 'Final Round'],
    //         ['src' => 'images/event4-3.jpg', 'caption' => 'Champions Walk'],
    //         ['src' => 'images/event4-4.jpg', 'caption' => 'Awards Gala'],
    //         ['src' => 'images/event4-5.jpg', 'caption' => 'Season Champions 2025'],
    //         ['src' => 'images/event4-6.jpg', 'caption' => 'Gold & Glory'],
    //         ['src' => 'images/event4-7.jpg', 'caption' => 'Royal Celebration'],
    //     ],
    // ],
];

// Fallback if invalid event
if (!array_key_exists($eventId, $events)) {
    $eventId = 1;
}

$current = $events[$eventId];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delhi Royals | <?= htmlspecialchars($current['title']) ?> — Gallery</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* ══════════════════════════════════════
           GALLERY PAGE STYLES
        ══════════════════════════════════════ */

        :root {
            --gold:      #c9a84c;
            --gold-dim:  #9a7a2e;
            --black:     #111111;
            --bg:        #f7f5f0;
            --text:      #444444;
            --border:    #e0ddd5;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            background: var(--bg);
            font-family: 'Inter', sans-serif;
            color: var(--text);
        }

        /* ── GALLERY HERO ───────────────────── */
        .gal-hero {
            background: var(--black);
            padding: 72px 24px 52px;
            text-align: center;
            border-bottom: 1px solid #222;
            position: relative;
            overflow: hidden;
        }

        /* subtle diagonal gold lines bg */
        .gal-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: repeating-linear-gradient(
                -55deg,
                transparent,
                transparent 60px,
                rgba(201,168,76,0.04) 60px,
                rgba(201,168,76,0.04) 61px
            );
            pointer-events: none;
        }

        .gal-breadcrumb {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-size: 10px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #666;
            margin-bottom: 24px;
            position: relative;
        }

        .gal-breadcrumb a {
            color: var(--gold);
            text-decoration: none;
            transition: opacity 0.2s;
        }
        .gal-breadcrumb a:hover { opacity: 0.75; }
        .gal-breadcrumb i { font-size: 8px; color: #444; }

        .gal-hero-tag {
            display: inline-block;
            font-size: 10px;
            letter-spacing: 5px;
            text-transform: uppercase;
            color: var(--gold);
            border: 1px solid var(--gold-dim);
            padding: 5px 18px;
            border-radius: 2px;
            margin-bottom: 16px;
            position: relative;
        }

        .gal-hero h1 {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(30px, 5vw, 58px);
            font-weight: 700;
            color: #ffffff;
            line-height: 1.12;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 18px;
            position: relative;
        }

        .gal-hero h1 span { color: var(--gold); }

        .gal-meta-row {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            position: relative;
        }

        .gal-meta-pill {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            font-size: 11px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #888;
            border: 1px solid #2a2a2a;
            padding: 6px 16px;
            border-radius: 2px;
        }

        .gal-meta-pill i { color: var(--gold); font-size: 11px; }

        .gal-count-badge {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            font-size: 11px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: var(--gold);
            border: 1px solid var(--gold-dim);
            padding: 6px 16px;
            border-radius: 2px;
        }

        /* ── EVENT SWITCHER TABS ────────────── */
        .gal-tabs-bar {
            background: var(--black);
            border-top: 1px solid #1e1e1e;
            border-bottom: 3px solid #1e1e1e;
            display: flex;
            justify-content: center;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
        }
        .gal-tabs-bar::-webkit-scrollbar { display: none; }

        .gal-tab {
            flex-shrink: 0;
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            gap: 2px;
            padding: 16px 28px;
            font-size: 10px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #555;
            text-decoration: none;
            border-bottom: 3px solid transparent;
            margin-bottom: -3px;
            transition: all 0.25s ease;
            white-space: nowrap;
        }

        .gal-tab:hover { color: var(--gold); border-bottom-color: var(--gold-dim); }

        .gal-tab.active {
            color: var(--gold);
            border-bottom-color: var(--gold);
        }

        .gal-tab-num {
            font-size: 18px;
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            color: inherit;
            line-height: 1;
        }

        /* ── GALLERY GRID ───────────────────── */
        .gal-body {
            max-width: 1400px;
            margin: 0 auto;
            padding: 56px 24px 80px;
        }

        .gal-section-label {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 36px;
        }

        .gal-section-label span {
            font-size: 10px;
            letter-spacing: 5px;
            text-transform: uppercase;
            color: var(--gold);
            white-space: nowrap;
        }

        .gal-section-label::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--border);
        }

        /* Masonry-style CSS grid */
        .gal-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
        }

        /* Make certain items larger for variety */
        .gal-item:nth-child(1)  { grid-column: span 2; grid-row: span 2; }
        .gal-item:nth-child(7)  { grid-column: span 2; }
        .gal-item:nth-child(11) { grid-column: span 2; }

        .gal-item {
            position: relative;
            overflow: hidden;
            cursor: pointer;
            background: #1a1a1a;
            border-radius: 2px;
        }

        /* Ensure square-ish proportions for normal items */
        .gal-item::before {
            content: '';
            display: block;
            padding-top: 75%;
        }

        /* Taller for span-2 rows */
        .gal-item:nth-child(1)::before   { padding-top: 72%; }
        .gal-item:nth-child(7)::before   { padding-top: 55%; }
        .gal-item:nth-child(11)::before  { padding-top: 55%; }

        .gal-item img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
            transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .gal-item:hover img { transform: scale(1.06); }

        /* Gold overlay on hover */
        .gal-item-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.75) 0%, transparent 55%);
            opacity: 0;
            transition: opacity 0.35s ease;
            display: flex;
            align-items: flex-end;
            padding: 20px;
        }

        .gal-item:hover .gal-item-overlay { opacity: 1; }

        .gal-item-caption {
            color: #ffffff;
            font-size: 12px;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: 500;
        }

        .gal-item-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.6);
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: rgba(201,168,76,0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--black);
            font-size: 14px;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .gal-item:hover .gal-item-icon {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }

        /* Fade-in animation for grid items */
        .gal-item {
            opacity: 0;
            transform: translateY(20px);
            transition:
                opacity 0.5s ease,
                transform 0.5s ease,
                /* keep hover transitions */
                box-shadow 0.3s ease;
        }

        .gal-item.appeared {
            opacity: 1;
            transform: translateY(0);
        }

        /* ── LIGHTBOX ───────────────────────── */
        .lb-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.96);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        .lb-overlay.open {
            opacity: 1;
            pointer-events: all;
        }

        .lb-close {
            position: absolute;
            top: 20px;
            right: 24px;
            width: 44px;
            height: 44px;
            border: 1px solid #333;
            background: transparent;
            border-radius: 2px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 18px;
            transition: all 0.2s ease;
        }

        .lb-close:hover { border-color: var(--gold); color: var(--gold); }

        .lb-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            border: 1px solid #333;
            background: transparent;
            border-radius: 2px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 18px;
            transition: all 0.2s ease;
            z-index: 2;
        }

        .lb-arrow:hover { border-color: var(--gold); color: var(--gold); }
        .lb-prev { left: 20px; }
        .lb-next { right: 20px; }

        .lb-content {
            max-width: min(90vw, 1100px);
            max-height: 85vh;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 14px;
        }

        .lb-content img {
            max-width: 100%;
            max-height: 75vh;
            object-fit: contain;
            display: block;
            border-radius: 2px;
            transition: opacity 0.25s ease;
        }

        .lb-caption-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            padding: 0 4px;
        }

        .lb-caption {
            font-size: 12px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--gold);
        }

        .lb-counter {
            font-size: 11px;
            letter-spacing: 2px;
            color: #555;
        }

        /* ── BACK BUTTON ────────────────────── */
        .gal-back-bar {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px 24px 0;
        }

        .gal-back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 10px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--gold-dim);
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .gal-back-btn:hover { color: var(--gold); }
        .gal-back-btn i { font-size: 11px; }

        /* ── EMPTY STATE ────────────────────── */
        .gal-empty {
            text-align: center;
            padding: 60px 20px;
            color: #888;
            font-size: 13px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .gal-empty i {
            font-size: 32px;
            color: var(--gold-dim);
            display: block;
            margin-bottom: 14px;
        }

        /* ══════════════════════════════════════
           RESPONSIVE
        ══════════════════════════════════════ */
        @media (max-width: 900px) {
            .gal-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            /* Reset special spans on tablet */
            .gal-item:nth-child(1),
            .gal-item:nth-child(7),
            .gal-item:nth-child(11) {
                grid-column: span 1;
                grid-row: span 1;
            }
            .gal-item::before,
            .gal-item:nth-child(1)::before,
            .gal-item:nth-child(7)::before,
            .gal-item:nth-child(11)::before { padding-top: 75%; }

            .lb-arrow { display: none; }

            .lb-content {
                max-width: 95vw;
            }
        }

        @media (max-width: 540px) {
            .gal-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 6px;
            }

            .gal-tab { padding: 12px 16px; font-size: 9px; letter-spacing: 2px; }
            .gal-hero { padding: 60px 16px 40px; }
            .gal-body { padding: 36px 14px 60px; }

            .lb-content img { max-height: 65vh; }
        }

    </style>
</head>
<body>
<div class="site-wrapper">
    <?php include 'navbar.php'; ?>

    <main>

        <!-- ═══════════════════════════
             GALLERY HERO
        ════════════════════════════ -->
        <section class="gal-hero">
            <nav class="gal-breadcrumb">
                <a href="event.php"><i class="fas fa-home"></i> Events</a>
                <i class="fas fa-chevron-right"></i>
                <span><?= htmlspecialchars($current['label']) ?> Gallery</span>
            </nav>

            <div class="gal-hero-tag"><?= htmlspecialchars($current['label']) ?></div>

            <h1><?php
                // Split title at em dash for gold accent
                $parts = explode('—', $current['title'], 2);
                if (count($parts) === 2) {
                    echo htmlspecialchars(trim($parts[0])) . ' — <span>' . htmlspecialchars(trim($parts[1])) . '</span>';
                } else {
                    echo htmlspecialchars($current['title']);
                }
            ?></h1>

            <div class="gal-meta-row">
                <span class="gal-meta-pill">
                    <i class="fas fa-calendar-alt"></i>
                    <?= htmlspecialchars($current['date']) ?>
                </span>
                <span class="gal-meta-pill">
                    <i class="fas fa-map-marker-alt"></i>
                    <?= htmlspecialchars($current['venue']) ?>
                </span>
                <span class="gal-count-badge">
                    <i class="fas fa-images"></i>
                    <?= count($current['images']) ?> Photos
                </span>
            </div>
        </section>


        <!-- ═══════════════════════════
             EVENT SWITCHER TABS
        ════════════════════════════ -->
        <nav class="gal-tabs-bar" aria-label="Event Galleries">
            <?php foreach ($events as $id => $ev): ?>
            <a href="tournament.php?event=<?= $id ?>"
               class="gal-tab <?= ($id === $eventId) ? 'active' : '' ?>">
                <span class="gal-tab-num"><?= str_pad($id, 2, '0', STR_PAD_LEFT) ?></span>
                <?= htmlspecialchars($ev['label']) ?>
            </a>
            <?php endforeach; ?>
        </nav>


        <!-- ═══════════════════════════
             GALLERY GRID
        ════════════════════════════ -->
        <div class="gal-back-bar">
            <a href="index.php" class="gal-back-btn">
                <i class="fas fa-arrow-left"></i> Back to Home
            </a>
        </div>

        <div class="gal-body">
            <div class="gal-section-label">
                <span>Photo Gallery</span>
            </div>

            <?php if (!empty($current['images'])): ?>
            <div class="gal-grid" id="galGrid">
                <?php foreach ($current['images'] as $i => $img): ?>
                <div class="gal-item"
                     data-index="<?= $i ?>"
                     data-src="<?= htmlspecialchars($img['src']) ?>"
                     data-caption="<?= htmlspecialchars($img['caption']) ?>"
                     role="button"
                     tabindex="0"
                     aria-label="Open photo: <?= htmlspecialchars($img['caption']) ?>">
                    <img src="<?= htmlspecialchars($img['src']) ?>"
                         alt="<?= htmlspecialchars($img['caption']) ?>"
                         loading="lazy">
                    <div class="gal-item-overlay">
                        <span class="gal-item-caption"><?= htmlspecialchars($img['caption']) ?></span>
                    </div>
                    <div class="gal-item-icon"><i class="fas fa-expand-alt"></i></div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php else: ?>
            <div class="gal-empty">
                <i class="fas fa-images"></i>
                Gallery coming soon
            </div>
            <?php endif; ?>
        </div>


        <!-- ═══════════════════════════
             LIGHTBOX
        ════════════════════════════ -->
        <div class="lb-overlay" id="lightbox" role="dialog" aria-modal="true" aria-label="Photo viewer">
            <button class="lb-close" id="lbClose" aria-label="Close"><i class="fas fa-times"></i></button>
            <button class="lb-arrow lb-prev" id="lbPrev" aria-label="Previous photo"><i class="fas fa-chevron-left"></i></button>
            <button class="lb-arrow lb-next" id="lbNext" aria-label="Next photo"><i class="fas fa-chevron-right"></i></button>

            <div class="lb-content">
                <img src="" alt="" id="lbImg">
                <div class="lb-caption-row">
                    <span class="lb-caption" id="lbCaption"></span>
                    <span class="lb-counter" id="lbCounter"></span>
                </div>
            </div>
        </div>

    </main>
</div>

<?php include 'assets/footer.php'; ?>


<script>
(function () {
    /* ── Scroll reveal ── */
    var items = document.querySelectorAll('.gal-item');
    var revealObs = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry, idx) {
            if (entry.isIntersecting) {
                // stagger each item
                setTimeout(function () {
                    entry.target.classList.add('appeared');
                }, Array.from(items).indexOf(entry.target) * 60);
                revealObs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.08 });

    items.forEach(function (el) { revealObs.observe(el); });


    /* ── Lightbox ── */
    var images = <?= json_encode(array_values($current['images'])) ?>;
    var lb        = document.getElementById('lightbox');
    var lbImg     = document.getElementById('lbImg');
    var lbCaption = document.getElementById('lbCaption');
    var lbCounter = document.getElementById('lbCounter');
    var current   = 0;

    function openLb(index) {
        current = index;
        updateLb();
        lb.classList.add('open');
        document.body.style.overflow = 'hidden';
        lbImg.focus();
    }

    function closeLb() {
        lb.classList.remove('open');
        document.body.style.overflow = '';
    }

    function updateLb() {
        var item = images[current];
        lbImg.style.opacity = '0';
        lbImg.src = item.src;
        lbImg.alt = item.caption;
        lbImg.onload = function () { lbImg.style.opacity = '1'; };
        lbCaption.textContent = item.caption;
        lbCounter.textContent = (current + 1) + ' / ' + images.length;
    }

    function prevImg() { current = (current - 1 + images.length) % images.length; updateLb(); }
    function nextImg() { current = (current + 1) % images.length; updateLb(); }

    // Open on click / keyboard
    items.forEach(function (el) {
        el.addEventListener('click', function () { openLb(parseInt(el.dataset.index)); });
        el.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                openLb(parseInt(el.dataset.index));
            }
        });
    });

    document.getElementById('lbClose').addEventListener('click', closeLb);
    document.getElementById('lbPrev').addEventListener('click', prevImg);
    document.getElementById('lbNext').addEventListener('click', nextImg);

    // Click outside image to close
    lb.addEventListener('click', function (e) {
        if (e.target === lb) closeLb();
    });

    // Keyboard navigation
    document.addEventListener('keydown', function (e) {
        if (!lb.classList.contains('open')) return;
        if (e.key === 'Escape')      closeLb();
        if (e.key === 'ArrowLeft')   prevImg();
        if (e.key === 'ArrowRight')  nextImg();
    });

    // Touch swipe support
    var touchStartX = 0;
    lb.addEventListener('touchstart', function (e) { touchStartX = e.changedTouches[0].screenX; }, { passive: true });
    lb.addEventListener('touchend', function (e) {
        var diff = touchStartX - e.changedTouches[0].screenX;
        if (Math.abs(diff) > 40) { diff > 0 ? nextImg() : prevImg(); }
    });

})();
</script>

</body>
</html>