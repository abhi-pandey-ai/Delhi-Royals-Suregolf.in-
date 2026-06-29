<?php
$activePage = 'Media &amp; Blog';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delhi Royals | Blog</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Press Source Image - Responsive Fix */
.press-source {
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    margin-bottom: 12px;
}

.press-source img {
    max-height: 90px;
    max-width: 140px;
    width: auto;
    height: auto;
    object-fit: contain;
    display: block;
}

/* Fallback: agar image load na ho toh text dikhega */
.press-source:not(:has(img)) {
    font-size: 14px;
    font-weight: 600;
    color: #333;
    letter-spacing: 0.5px;
    background: #f5f5f5;
    padding: 6px 12px;
    border-radius: 6px;
    width: fit-content;
    height: auto;
}

/* Mobile responsive */
@media (max-width: 768px) {
    .press-source {
        height: 40px;
        margin-bottom: 10px;
    }

    .press-source img {
        max-height: 32px;
        max-width: 110px;
    }
}

@media (max-width: 480px) {
    .press-source {
        height: 36px;
    }

    .press-source img {
        max-height: 65px;
        max-width: 100px;
    }
}
    </style>
</head>
<body>
    <div class="site-wrapper">

     <?php include 'navbar.php'; ?>
        <main class="light-content">
            <div class="container">
                <section class="content-section">
                    <h2>OUR BLOG</h2>
                    <p class="section-intro">Insights, stories, and updates from the world of Delhi Royals and Indian golf.</p>
                    
                    <div class="blog-container" id="blogContainer">

                       <!-- external media sec-- -->
                        <div class="press-section">
                            <h3 class="press-heading">IN THE PRESS</h3>
                            <p class="press-subtext">Delhi Royals making headlines across the world of golf.</p>

                            <div class="press-cards">

                                <!-- Press Card 1 -->
                                <a href="https://4moles.com/golfing-news/golf-never-really-had-franchise-faces-before-that-might-be-changing?utm_source=ig&utm_medium=social&utm_content=link_in_bio&fbclid=PAdGRleAR7wqJleHRuA2FlbQIxMQBzcnRjBmFwcF9pZA8xMjQwMjQ1NzQyODc0MTQAAaeeuyBDlm7hIcYI7BIfi-f6T3C_U6iIxSfOk-PXpWaqhstBQw20KXjajJhlrA_aem_KThQUKd_bjiHcNzhkOwa5g" target="_blank" class="press-card">
                                    <div class="press-source"><img src="images/moles.png" alt="4Moles Golf"></div>
                                    <h4>Golf Never Really Had Franchise Faces Before — That Might Be Changing</h4>
                                    <p>A new era of franchise-led golf is taking shape in India, and Delhi Royals is at the forefront of this transformation. Discover how the franchise model is redefining the sport's identity.</p>
                                    <span class="press-read-more">Read Full Article <i class="fas fa-arrow-right"></i></span>
                                </a>

                                <!-- Press Card 2 -->
                                <a href="https://4moles.com/golfing-news/delhi-royals-get-louder-as-geeta-basra-joins-as-brand-ambassador?utm_source=ig&utm_medium=social&utm_content=link_in_bio&fbclid=PAdGRleAR7woVleHRuA2FlbQIxMQBzcnRjBmFwcF9pZA8xMjQwMjQ1NzQyODc0MTQAAadkEOtMsDHD_DvL-y9gAw71t_QCT6BzUmpNrmPk4UWKmZUqkAiODr7FSAEOrw_aem_2JRrsQBvXyTj7kiAVAS2cw" target="_blank" class="press-card">
                                    <div class="press-source"><img src="images/moles.png" alt="4Moles Golf"></div>
                                    <h4>Delhi Royals Get Louder as Geeta Basra Joins as Brand Ambassador</h4>
                                    <p>Bollywood actress and sports enthusiast Geeta Basra joins Delhi Royals as official Brand Ambassador, amplifying the franchise's vision of blending glamour, lifestyle, and elite golf.</p>
                                    <span class="press-read-more">Read Full Article <i class="fas fa-arrow-right"></i></span>
                                </a>

                                <!-- Press Card 3 -->
                                <a href="https://4moles.com/golfing-news/delhi-royals-power-prestige-presence?utm_source=ig&utm_medium=social&utm_content=link_in_bio&fbclid=PAdGRleAR7wiNleHRuA2FlbQIxMQBzcnRjBmFwcF9pZA8xMjQwMjQ1NzQyODc0MTQAAaeKRnermxkNYiKEFYzygJqr8Eznb2Wf0xWQcqjIL7OBGWxQjl9ahCSMye__1w_aem_Moel6fyuRzMjKqez8uNQyQ" target="_blank" class="press-card">
                                    <div class="press-source"><img src="images/moles.png" alt="4Moles Golf"></div>
                                    <h4>Delhi Royals: Power, Prestige & Presence</h4>
                                    <p>An in-depth feature on how Delhi Royals has carved its place as one of India's most powerful and prestigious golf franchises — built on vision, excellence, and an unwavering commitment to the sport.</p>
                                    <span class="press-read-more">Read Full Article <i class="fas fa-arrow-right"></i></span>
                                </a>

                            </div>
                        </div>
                        <!-- ===================== END PRESS SECTION ===================== -->

                        <!-- Blog Post 1: Text + Video -->
                        <article class="blog-card-full">
                            <div class="blog-row">
                                <div class="blog-content">
                                    <div class="blog-category">🎥 Video Feature</div>
                                    <h3>Delhi Royals Inaugural Season Highlights</h3>
                                    <div class="blog-meta">
                                        <span><i class="far fa-calendar-alt"></i> March 20, 2025</span>
                                        <span><i class="far fa-user"></i> Media Team</span>
                                    </div>
                                    <p class="blog-excerpt">Watch the best moments from Delhi Royals' spectacular inaugural season. From stunning drives to emotional victories, experience the journey of champions.</p>
                                    <p class="blog-full-text">The Delhi Royals made history in their very first season, setting new standards for excellence in Indian golf. This video compilation captures the energy, passion, and skill that defines our franchise. Watch as our players showcase their talent on the greens, celebrating every victory and learning from every challenge.</p>
                                </div>
                                <div class="blog-media video-blog">
                                    <div class="video-wrapper-blog">
                                        <video id="blogVideo1" class="blog-video" poster="images/gallery5.jpeg">
                                            <source src="images/hero.mp4" type="video/mp4">
                                            Your browser does not support video.
                                        </video>
                                        <div class="video-controls-blog">
                                            <button class="play-pause-blog" data-video="blogVideo1">
                                                <i class="fas fa-play"></i>
                                            </button>
                                            <span class="video-label">Watch Highlights</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 2: Image + Text -->
                        <article class="blog-card-full">
                            <div class="blog-row reverse">
                                <div class="blog-media image-blog">
                                    <img src="images/gallery5.jpeg" alt="Golf Tournament" class="blog-image-full">
                                    <div class="image-caption">Inaugural Tournament - Champions Ceremony</div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-category">📸 Photo Story</div>
                                    <h3>Grand Opening: Delhi Royals Inaugural Tournament</h3>
                                    <div class="blog-meta">
                                        <span><i class="far fa-calendar-alt"></i> March 18, 2025</span>
                                        <span><i class="far fa-user"></i> Event Coverage</span>
                                    </div>
                                    <p class="blog-excerpt">The grand opening of Delhi Royals' first tournament brought together golf legends, celebrities, and enthusiasts from across the nation.</p>
                                    <p class="blog-full-text">The inaugural tournament was a spectacular celebration of golf, luxury, and community. With over 500 attendees, the event featured elite players, VIP hospitality lounges, and networking sessions that redefined what a golf tournament can be. The energy was electric as the Delhi Royals made their mark on Indian golf history.</p>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 3: Text + Video -->
                        <article class="blog-card-full">
                            <div class="blog-row">
                                <div class="blog-content">
                                    <div class="blog-category">🎥 Women's Leadership</div>
                                    <h3>Women Leading the Fairway</h3>
                                    <div class="blog-meta">
                                        <span><i class="far fa-calendar-alt"></i> March 15, 2025</span>
                                        <span><i class="far fa-user"></i> Delhi Royals Team</span>
                                    </div>
                                    <p class="blog-excerpt">How Delhi Royals is championing women-led leadership in Indian sports. A new era of empowerment and excellence is here.</p>
                                    <p class="blog-full-text">Delhi Royals proudly stands as a representation of modern women-led leadership in the sports industry. The franchise embodies confidence, vision, innovation, and strategic thinking that inspires future generations. From management to coaching staff, women are playing pivotal roles in shaping the future of golf in India.</p>
                                </div>
                                <div class="blog-media video-blog">
                                    <div class="video-wrapper-blog">
                                        <video id="blogVideo2" class="blog-video" poster="images/Screenshot 2026-05-20 013304.png">
                                            <source src="images/suncity.mp4" type="video/mp4">
                                            Your browser does not support video.
                                        </video>
                                        <div class="video-controls-blog">
                                            <button class="play-pause-blog" data-video="blogVideo2">
                                                <i class="fas fa-play"></i>
                                            </button>
                                            <span class="video-label">Women in Golf</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 4: Text + Image -->
                        <article class="blog-card-full">
                            <div class="blog-row reverse">
                                <div class="blog-media image-blog">
                                    <img src="images/wifi.jpeg" alt="Luxury Golf Experience" class="blog-image-full">
                                    <div class="image-caption">Luxury Lounge at Delhi Royals Event</div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-category">🏌️ Lifestyle</div>
                                    <h3>Luxury Meets Golf: The Delhi Royals Experience</h3>
                                    <div class="blog-meta">
                                        <span><i class="far fa-calendar-alt"></i> March 10, 2025</span>
                                        <span><i class="far fa-user"></i> Editorial Team</span>
                                    </div>
                                    <p class="blog-excerpt">Exploring the fusion of premium lifestyle and championship golf that defines our franchise. Where elegance meets the fairway.</p>
                                    <p class="blog-full-text">Delhi Royals is positioned as a premium sporting brand where golf meets elegance, exclusivity, and refined lifestyle experiences. Every tournament, event, and collaboration reflects sophistication, class, and elevated experiences that go beyond the sport. From champagne lounges to celebrity appearances, we redefine what it means to experience golf.</p>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 5: Text + Video (3rd Video) -->
                        <article class="blog-card-full">
                            <div class="blog-row">
                                <div class="blog-content">
                                    <div class="blog-category">🎥 Academy Spotlight</div>
                                    <h3>Youth Talent Development Program</h3>
                                    <div class="blog-meta">
                                        <span><i class="far fa-calendar-alt"></i> March 5, 2025</span>
                                        <span><i class="far fa-user"></i> Sports Desk</span>
                                    </div>
                                    <p class="blog-excerpt">Delhi Royals announces a nation-wide initiative to identify and nurture young golfing talent across India.</p>
                                    <p class="blog-full-text">The franchise aims to inspire and encourage the next generation of golfers by creating visibility, opportunities, mentorship, and engagement within the sport. A comprehensive program covering training, equipment, and tournament exposure has been launched across 10 cities, with plans to expand to 25 cities by end of year.</p>
                                </div>
                                <div class="blog-media video-blog">
                                    <div class="video-wrapper-blog">
                                        <video id="blogVideo3" class="blog-video" poster="images/Screenshot 2026-05-20 013805.png">
                                            <source src="images/invite.mp4" type="video/mp4">
                                            Your browser does not support video.
                                        </video>
                                        <div class="video-controls-blog">
                                            <button class="play-pause-blog" data-video="blogVideo3">
                                                <i class="fas fa-play"></i>
                                            </button>
                                            <span class="video-label">Youth Academy Launch</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>
            </div>
        </main>

        <?php
        include 'assets/footer.php';
        ?>
    </div>

    <script>
        // Video Play/Pause Controller for Blog Videos
        document.addEventListener('DOMContentLoaded', function() {
            // Get all video play/pause buttons
            const playPauseButtons = document.querySelectorAll('.play-pause-blog');
            
            playPauseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const videoId = this.getAttribute('data-video');
                    const video = document.getElementById(videoId);
                    const icon = this.querySelector('i');
                    
                    if (video.paused) {
                        // Pause all other videos first
                        document.querySelectorAll('.blog-video').forEach(otherVideo => {
                            if (otherVideo.id !== videoId && !otherVideo.paused) {
                                otherVideo.pause();
                                const otherBtn = document.querySelector(`.play-pause-blog[data-video="${otherVideo.id}"]`);
                                if (otherBtn) {
                                    otherBtn.querySelector('i').className = 'fas fa-play';
                                }
                            }
                        });
                        
                        // Play current video
                        video.play();
                        icon.className = 'fas fa-pause';
                    } else {
                        video.pause();
                        icon.className = 'fas fa-play';
                    }
                });
            });
            
            // Optional: Reset play button when video ends
            document.querySelectorAll('.blog-video').forEach(video => {
                video.addEventListener('ended', function() {
                    const btn = document.querySelector(`.play-pause-blog[data-video="${this.id}"]`);
                    if (btn) {
                        btn.querySelector('i').className = 'fas fa-play';
                    }
                });
            });
        });
    </script>
</body>
</html>