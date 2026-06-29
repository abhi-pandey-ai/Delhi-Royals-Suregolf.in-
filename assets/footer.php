<footer class="dark-footer">
            <div class="container footer-container">
                <div class="footer-logo">
                    <h3>DELHI ROYALS</h3>
                    <p>A Flagship Franchise by Sure Golf LLP</p>
                </div>
                <div class="footer-links">
                    <a href="index.php">Home</a>
                    <a href="gallery.php">Gallery</a>
                    <a href="blog.php">Blog</a>
                    <a href="contact.php">Contact</a>
                </div>
                <div class="footer-social">
                    <a href="https://www.instagram.com/delhiroyals.grpl?igsh=MTVzdzBsbTJ1MnZsbQ=="><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                </div>
                <div class="footer-copyright">
                    <p>&copy; 2026 Delhi Royals - Sure Golf LLP. All rights reserved.</p>
                </div>
            </div>
        </footer>

        <script src="script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.getElementById('menuToggle');
            const navMenu = document.getElementById('navMenu');
            if (menuToggle && navMenu) {
                menuToggle.addEventListener('click', function () {
                    navMenu.classList.toggle('show');
                    const icon = this.querySelector('i');
                    icon.classList.toggle('fa-bars');
                    icon.classList.toggle('fa-times');
                });
            }
        });
    </script>