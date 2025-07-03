<?php
$current_page = 'home';
include 'includes/header.php';
?>

<main>
    <!-- Hero Splash Animation -->
    <div class="splash-overlay"></div>

    <!-- Hero Section -->
    <section class="hero" style="background: url('assets/images/hero-bg.webp') no-repeat center center/cover;">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Hi, I'm <span class="highlight">Collins Wanjala</span></h1>
                    
                    <h2><b>Network Engineer</b></h2>
                    <p>I design, build, manage, and maintain enterprise and private networks using modern technologies.
                        Passionate about IT infrastructure experience.</p>
                    <div class="hero-buttons">
                        <a href="portfolio.php" class="btn btn-primary">View My Work</a>
                        <a href="portfolio.php" class="btn btn-secondary" Projects>
                            <i class="fas fa-download"></i> Projects
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Skills Section -->
    <section class="skills">
        <div class="container">
            <h2>Skills & Technologies</h2>
            <div class="skills-grid">
                <div class="skill-item">
                    <i class="fas fa-server"></i>
                    <h3>CCNA</h3>
                    <p>Network Essentials, Routing and Switching, Enterprise Automation and Security</p>
                </div>
                <div class="skill-item">
                    <i class="fas fa-database"></i>
                    <h3>Database Systems</h3>
                    <p>MySQL, MongoDB, PostgreSQL, Oracle Database</p>
                </div>
                <div class="skill-item">
                    <i class="fas fa-tools"></i>
                    <h3>Tools</h3>
                    <p>Git, GNS3, EVE-NG, AWS, Linux, Cisco Packet Tracer</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Animated Marquee Section -->
<section class="marquee-section">
    <div class="marquee-text" >
        <marquee behavior="scroll" direction="left" scrollamount="5" >
           <b>CCNA • HCIA-DATACOM • NETWORK SECURITY •AWS • PYTHON •LINUX ADMINISTRATION</b> 
        </marquee>
    </div>
</section>

    <!-- Client Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <h2>What Clients Say</h2>
            <div class="testimonial-slider">
                <div class="testimonial-track">
                    <div class="testimonial-card flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <p>"Collins helped us design a secure enterprise network.
                                  His skills and professionalism were unmatched!"</p>
                                <h4>- Liquid Telecom.</h4>
                            </div>
                            <div class="flip-card-back">
                                <p>Thanks to Collins, our network is fully resilient and scalable.</p>
                        
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <p>"His ability to troubleshoot and optimize our infrastructure was crucial to our success."</p>
                                <h4>- Nars Technical Services</h4>
                            </div>
                         <div class="testimonial-card flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <p>"Collins delivered our project on time and exceeded expectations in terms of performance and security."</p>
                                <h4>- CloudCore Solutions</h4>
                            </div>
                            <div class="flip-card-back">
                                <p>We will work with Collins again for future cloud infrastructure deployments.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
<section class="services">
    <div class="container">
        <h2>Skills & Services</h2>
        <div class="services-grid">
            <div class="service-card">
                <h3 >Web Development</h3>
                <p>Responsive full-stack web applications using modern frameworks and technologies.</p>
                <a href="web.php">Learn More →</a>
            </div>
            <div class="service-card">
                <h3>Cloud Computing</h3>
                <p>Designed , built and Deployed instances on AWS & Azure cloud environments securely
                 and efficiently to carry out labs.</p>
                <a href="cloud-computing.php">Learn More →</a>
            </div>
            <div class="service-card">
                <h3>Database Administration</h3>
                <p>Database systems design, performance tuning, backup strategies using MySQL, PostgreSQL, and Oracle.</p>
                <a href="database_systems.php">Learn More →</a>
            </div>
            <div class="service-card">
                <h3>Networks & Telecommunications</h3>
                <p>Setup, monitor, and secure enterprise networks, VoIP systems, and WAN infrastructures.</p>
                <a href="networks.php">Learn More →</a>
            </div>
        </div>
    </div>
</section>

   <!-- Video Animation Section -->
<section class="video-section fade-in">
    <div class="container">
        <h2>Watch My Network Project Overview</h2>
        <div class="video-wrapper">
            <video controls autoplay loop>
                <source src="assets/videos/network-demo.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</section>
 <section class="map-section">
    <h3><b>Find Me in Nairobi, Kenya</b></h3>
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.04035118158!2d36.8219467!3d-1.2920659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10dba47c41f5%3A0x94a7fcfbdcb7c35!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2ske!4v1689248408279!5m2!1sen!2ske" 
            width="100%" 
            height="250" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>
</main>

<script>
    const track = document.querySelector('.testimonial-track');
    let offset = 0;

    function slideTestimonials() {
        offset += 100;
        if (offset > 200) offset = 0;
        track.style.transform = `translateX(-${offset}%)`;
    }

    setInterval(slideTestimonials, 5000);

    // Splash animation
    window.addEventListener("load", () => {
        const splash = document.querySelector(".splash-overlay");
        splash.classList.add("animate-splash");
        setTimeout(() => splash.style.display = "none", 1000);
    });
</script>

<style>
    .testimonial-slider {
        overflow: hidden;
        position: relative;
        width: 100%;
        height: fit-content;
        margin-top: 20px;
        border:rgb(0, 162, 255);
        background:#007bff;
    }

    .testimonial-track {
        display:inline-flex;
        width: 50%;
        transition: transform 2s ease-in-out;
    }

    .testimonial-card {
        flex: 0 0 67%;
        margin: 10px;
        perspective: 100px;
    }

    .flip-card-inner {
        position: relative;
        width: 99%;
        height: 200px;
        text-align: center;
        transition: transform 1s;
        transform-style: preserve-3d;
        border-radius: 20%;
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        padding: 20px;
        border-radius: 20px;
        background: #fff;
        box-shadow: 0 6px 14px rgba(0,0,0,0.15);

    }

    .flip-card-back {
        transform:rotateY(180deg);
        background:rgb(0, 255, 170);
        color: #fff;
        width: 80%;
        height: 50;

    }

    .video-section {
        padding: 50px 0;
        background: #f8f9fa;
        text-align: center;
    }

    .video-wrapper video {
        width: 100%;
        max-width: 720px;
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    }

    .site-logo {
        width: 80px;
        height: auto;

        margin-bottom: 10px;
        animation: pulseLogo 4 infinite;
    }

    @keyframes pulseLogo {
        0% { transform: scale(1); opacity: 0.8; }
        50% { transform: scale(1.1); opacity: 1; }
        100% { transform: scale(1); opacity: 0.8; }
    }

    .splash-overlay {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, #007bff 20%, transparent);
        z-index: 1000;
        opacity: 0;
        pointer-events: none;
        transition: all 1s ease-in-out;
    }

    .splash-overlay.animate-splash {
        opacity: 1;
        transform: translateY(-100%);
    }
    .marquee-text{
        color:chocolate;
        font-style:normal;
        font-size:medium;
        width:120% ;
        height: auto;
        background:burlywood;
        text-decoration-skip-ink:all;
    }
</style>

<?php include 'includes/footer.php'; ?>
