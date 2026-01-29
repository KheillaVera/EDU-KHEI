<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intego Corporates | Excellence in Business</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <nav class="navbar">
        <div class="container">
            <h1 class="logo">Intego Corporates</h1>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact" class="btn-nav">Contact Us</a></li>
            </ul>
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <header id="home" class="hero">
        <div class="container hero-content">
            <h1>Building Your Vision with Integrity</h1>
            <p>Intego Corporates delivers professional solutions tailored to your business goals. We turn strategy into action.</p>
            <a href="#contact" class="btn-primary">Get a Quote</a>
        </div>
    </header>

    <section id="about" class="section-light">
        <div class="container">
            <div class="section-title">
                <h2>Who We Are</h2>
                <div class="underline"></div>
            </div>
            <div class="about-grid">
                <div class="about-text">
                    <h3>Committed to Excellence</h3>
                    <p>At Intego Corporates, we believe in the power of clear goals. Founded with a vision to serve, we assist our clients in navigating complex challenges with simple, effective solutions.</p>
                    <p>Whether you need consultancy, logistics, or management, our team is ready to deliver.</p>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Office Meeting">
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="section-dark">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
                <div class="underline"></div>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <i class="fas fa-briefcase fa-3x"></i>
                    <h3>Consultancy</h3>
                    <p>Strategic advice to help your business grow and optimize operations.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-truck fa-3x"></i>
                    <h3>Logistics</h3>
                    <p>Efficient supply chain solutions ensuring delivery on time, every time.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-handshake fa-3x"></i>
                    <h3>Partnerships</h3>
                    <p>Connecting you with the right stakeholders to expand your reach.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section-light">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
                <div class="underline"></div>
            </div>
            <div class="contact-wrapper">
                <div class="contact-info">
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Kigali, Rwanda</p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <p>info@integocorporates.com</p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <p>+250 700 000 000</p>
                    </div>
                </div>
                
                <form class="contact-form" action="send_mail.php" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Intego Corporates. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>