<?php
$activePage = 'gallery';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delhi Royals | Gallery</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="site-wrapper">
         <?php include 'navbar.php'; ?>

        <main class="light-content">
            <div class="container">
                <section class="content-section">
                    <h2>GALLERY</h2>
                    <p class="section-intro">Moments of excellence, elegance, and empowerment from the Delhi Royals ecosystem.</p>
                    <div class="gallery-grid" id="galleryGrid"></div>
                </section>
            </div>
        </main>

        <?php
        include 'assets/footer.php';
        ?>
    </div>
    <div class="lightbox-overlay" id="lightbox">
    <button class="lightbox-close" id="lightboxClose">&times;</button>
    <img src="" alt="Preview" id="lightboxImg">
</div>

<script src="script.js"></script>
<script>
    const galleryImages = [
        "images/wifi.jpeg",
        "images/mam1.jpeg",
        "images/katrina.jpeg",
        "images/greendrs.jpeg",
        "images/white.jpeg",
        "images/DGO_6909.jpg",
        "images/DGO_7008.jpg",
        "images/DGO_7117.jpg",
        "images/DGO_7215.jpg",
        "images/gallery1.jpg",
        "images/gallery2.jpg",
        "images/gallery3.jpg",
        "images/gallery5.jpeg",
        "images/gallery6.jpeg",
        "images/gallery7.jpeg",
    ];

    const galleryGrid = document.getElementById('galleryGrid');
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightboxImg');
    const lightboxClose = document.getElementById('lightboxClose');

    if (galleryGrid) {
        galleryImages.forEach(imgSrc => {
            const col = document.createElement('div');
            col.className = 'gallery-col';
            const img = document.createElement('img');
            img.src = imgSrc;
            img.alt = 'Delhi Royals Moment';
            img.loading = 'lazy';
            col.appendChild(img);
            col.addEventListener('click', () => {
                lightboxImg.src = imgSrc;
                lightbox.classList.add('active');
            });
            galleryGrid.appendChild(col);
        });
    }

    lightboxClose.addEventListener('click', () => lightbox.classList.remove('active'));
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) lightbox.classList.remove('active');
    });
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') lightbox.classList.remove('active');
    });
</script>
<script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menuToggle');
            const navMenu = document.getElementById('navMenu');
            if (menuToggle && navMenu) {
                menuToggle.addEventListener('click', function() {
                    navMenu.classList.toggle('show');
                    const icon = this.querySelector('i');
                    icon.classList.toggle('fa-bars');
                    icon.classList.toggle('fa-times');
                });
            }
        });
    </script>
</body>
</html>