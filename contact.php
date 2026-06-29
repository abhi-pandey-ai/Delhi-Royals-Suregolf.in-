<?php
$activePage = 'contact';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delhi Royals | Contact</title>
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
                    <h2>CONTACT US</h2>
                    <p class="section-intro">Connect with Delhi Royals for partnerships, media inquiries, or membership information.</p>
                    
                    <div class="contact-wrapper">
                        <div class="contact-info">
                            <div class="info-card">
                                <i class="fas fa-map-marker-alt"></i>
                                <h3>Visit Us</h3>
                                <p>Flat no 3, Plot no 2,<br>R.K Puram New Delhi<br>Rao Tula Marg,  – 110022</p>
                            </div>
                            <div class="info-card">
                                <i class="fas fa-phone-alt"></i>
                                <h3>Call Us</h3>
                                <p>+91 85879 05523</p>
                            </div>
                            <div class="info-card">
                                <i class="fas fa-envelope"></i>
                                <h3>Email Us</h3>
                                <p>Suregolf2@gmail.com</p>
                            </div>
                            <div class="info-card">
                                <i class="fas fa-clock"></i>
                                <h3>Office Hours</h3>
                                <p>Monday - Friday: 10:00 AM - 7:00 PM<br>Saturday: By Appointment</p>
                            </div>
                        </div>
                        
                        <div class="contact-form">
                            <form id="contactForm" method="POST">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Full Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email Address" required>
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <select name="inquiry">
                                        <option value="">Select Inquiry Type</option>
                                        <option value="partnership">Partnership Opportunities</option>
                                        <option value="media">Media & Press</option>
                                        <option value="membership">Membership</option>
                                        <option value="general">General Inquiry</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                                </div>
                                <button type="submit" class="submit-btn">Send Message <i class="fas fa-paper-plane"></i></button>
                                <div id="formStatus"></div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
        <?php
        include 'assets/footer.php';
        ?>
</body>
</html>