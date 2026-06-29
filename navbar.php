<?php
if (!isset($activePage)) $activePage = '';
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- ========== NAVBAR ========== -->
<header class="site-header">
    <div class="container header-container">

        <!-- LEFT: Delhi Royals Logo + Text -->
        <div class="logo-left">
            <a href="index.php">
            <img src="images/delhi.jpeg" alt="Delhi Royals Logo">
            </a>
            <div class="brand-text">
                <span class="brand-name">DELHI ROYALS</span>
                <!-- <span class="brand-tag">by Sure Golf LLP</span> -->
            </div>
        </div>

        <!-- CENTER: Navigation -->
        <nav class="main-nav">
            <ul id="navMenu">
                <li><a href="index.php"   class="<?= $activePage==='home'    ? 'active' : '' ?>">Home</a></li>
                <li><a href="team.php" class="<?= $activePage==='team' ? 'active' : '' ?>">Team</a></li>
                <li><a href="gallery.php" class="<?= $activePage==='gallery' ? 'active' : '' ?>">Gallery</a></li>
                <li><a href="smileFoundation.php" class="<?= $activePage==='smilefoundation' ? 'active' : '' ?>">Smile-Foundation</a></li>
                <li><a href="blog.php"    class="<?= $activePage==='blog'    ? 'active' : '' ?>">Media &amp; Blog</a></li>
                <!-- Tournament Dropdown -->
                <li class="has-dropdown" id="tournamentDropdown">
                    <button class="dropdown-toggle <?= $activePage==='tournament' ? 'active' : '' ?>" 
                    id="dropdownBtn" aria-haspopup="true" aria-expanded="false">
                    Tournament <span class="arrow">▼</span>
                </button>
                <div class="dropdown-menu" role="menu">
                    <a href="tournament.php?event=1"><span class="season-num">S1</span> 2026-2027</a>
                    <a href="tournament.php?event=2"><span class="season-num">S2</span> 2026-2027</a>    
                    <!-- <a href="tournament.php?event=3"><span class="season-num">S3</span> Season 3</a> -->
                    <!-- <a href="tournament.php?event=4"><span class="season-num">S4</span> Season 4</a> -->
                    <!-- <a href="tournament.php?event=5"><span class="season-num">S5</span> Season 5</a> -->
                </div>
            </li>
            <li><a href="event.php" class="<?= $activePage==='event' ? 'active' : '' ?>">Event</a></li>

                <li><a href="contact.php" class="<?= $activePage==='contact' ? 'active' : '' ?>">Contact us</a></li>

            </ul>
            <button class="mobile-menu-btn" id="menuToggle" aria-label="Toggle Menu">
                <i class="fas fa-bars"></i>
            </button>
        </nav>

        <!-- RIGHT: Sure Golf Logo -->
        <div class="logo-right">
            <a href="index.php">
            <img src="images/golf.png" alt="Sure Golf LLP Logo">
            </a>
        </div>

    </div>
</header>

<script>
    // Mobile menu toggle
document.getElementById('menuToggle').addEventListener('click', function () {
    document.getElementById('navMenu').classList.toggle('show');
    const icon = this.querySelector('i');
    icon.classList.toggle('fa-bars');
    icon.classList.toggle('fa-times');
});

// Tournament Dropdown
const dropdown = document.getElementById('tournamentDropdown');
const dropBtn = document.getElementById('dropdownBtn');

dropBtn.addEventListener('click', function(e) {
    e.stopPropagation();
    const isOpen = dropdown.classList.toggle('open');
    this.setAttribute('aria-expanded', isOpen);
});

// Bahar click karne pe band ho
document.addEventListener('click', function() {
    dropdown.classList.remove('open');
    dropBtn.setAttribute('aria-expanded', false);
});

dropdown.addEventListener('click', function(e) { e.stopPropagation(); });
</script>
<!-- ========== END NAVBAR ========== -->