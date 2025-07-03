<?php
$current_page = 'web-development';
include 'includes/header.php';
?>

<main>
    <section class="page-hero" style="background: linear-gradient(to right, #007bff, #00c6ff); color: white; padding: 60px 20px; text-align: center;">
        <h1>Web & Programming</h1>
        <p>Crafting Responsive, Modern, and Scalable Web Applications</p>
    </section>

    <section class="animated-section">
        <div class="container">
            <h2>What I Offer</h2>
            <div class="service-cards">
                <div class="card">
                    <h3>Frontend Development</h3>
                    <p>Beautiful and functional UIs using HTML, CSS, JavaScript, React, and more.</p>
                </div>
                <div class="card">
                    <h3>Backend Development</h3>
                    <p>Powerful APIs and server-side logic using Python.</p>
                </div>
                <div class="card">
                    <h3>Responsive Design</h3>
                    <p>Websites that look great on desktops, tablets, and smartphones.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2>Ready to build your dream website?</h2>
            <a href="contact.php" class="btn btn-primary">Contact Me</a>
        </div>
    </section>
    
    <section class="cta-section2">
        <div class="container">
            <h2>Inventory management system</h2>
            <a href="https://github.com/collins-wanjala" class="btn btn-primary">GitHub</a>
            <h2>traffic offence  management system</h2>
            <a href="https://github.com/collins-wanjala" class="btn btn-primary">GitHub</a>
            <h2>church  management system</h2>
            <a href="https://github.com/collins-wanjala" class="btn btn-primary">GitHub</a>
        </div>
    </section>

<style>
.page-hero {
    animation: slideInTop 1.5s ease-in-out;
    
}

.animated-section {
    padding: 50px 20px;
    background: #f4faff;
    animation: fadeIn 2s ease-in;
}

.animated-section h2 {
    text-align: center;
    margin-bottom: 30px;
}

.service-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 20px;
}

.card {
    background: white;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 24px rgba(0, 0, 0, 0.15);
}

.cta-section {
    background: #007bff;
    color: white;
    text-align: center;
    padding: 40px 20px;
}
.cta-section2 {
    background:rgb(73, 95, 117);
    color: white;
    text-align: right;
    padding: 40px 20px;
   
}

.btn-primary {
    background: white;
    color: #007bff;
    padding: 10px 25px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: bold;
    transition: background 0.3s;
}

.btn-primary:hover {
    background: #e0e0e0;
}

@keyframes slideInTop {
    from { transform: translateY(-100px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}
</style>

<?php include 'includes/footer.php'; ?>
