<?php
$current_page = 'database';
include 'includes/header.php';
?>

<main>
    <section class="db-hero">
        <div class="container">
            <h1>Database Systems</h1>
            <p>I have proficiency in a variety of database technologies, enabling robust and scalable data solutions for enterprise environments.</p>
        </div>
    </section>

    <section class="db-grid">
        <div class="container">
            <h2 class="section-title">Technologies I Use</h2>
            <div class="db-cards">
                <div class="db-card">
                    <i class="fas fa-database"></i>
                    <h3>MySQL</h3>
                    <p>Efficient for web and enterprise apps, with excellent support and performance for relational databases.</p>
                </div>
                <div class="db-card">
                    <i class="fas fa-database"></i>
                    <h3>PostgreSQL</h3>
                    <p>Advanced open-source RDBMS with powerful features like JSON support and full ACID compliance.</p>
                </div>
                <div class="db-card">
                    <i class="fas fa-database"></i>
                    <h3>MongoDB</h3>
                    <p>NoSQL database for high-volume unstructured data, ideal for modern, scalable applications.</p>
                </div>
                <div class="db-card">
                    <i class="fas fa-database"></i>
                    <h3>Oracle</h3>
                    <p>Enterprise-grade RDBMS widely used in large systems with extensive features and high availability.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Animated Marquee Section -->
<section class="marquee-section">
    <div class="marquee-text">
        <marquee behavior="scroll" direction="left" scrollamount="6">
            MySQL • PostgreSQL • MongoDB • Oracle — Expert in Relational & NoSQL Databases
        </marquee>
    </div>
</section>

</main>

<style>
    .marquee-section {
    background-color: #d6f0ff;
    padding: 15px 0;
    border-bottom: 2px solid #00aaff;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.marquee-text {
    color: #003f5c;
    font-size: 1.3rem;
    font-weight: bold;
    text-align: center;
    animation: fadeInSlide 3s ease-in-out;
    background: burlywood;
}

/* Optional entrance animation */
@keyframes fadeInSlide {
    0% {
        transform: translateY(-20px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

.db-hero {
    background: #f0f4f8;
    padding: 60px 0;
    text-align: center;
}
.db-hero h1 {
    font-size: 2.5rem;
    color: #333;
}
.db-hero p {
    font-size: 1.2rem;
    color: #666;
}

.db-grid {
    background: #ffffff;
    padding: 50px 0;
}
.section-title {
    text-align: center;
    font-size: 2rem;
    margin-bottom: 30px;
}
.db-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 30px;
    padding: 0 20px;
}
.db-card {
    background:rgb(249, 251, 252);
    border-radius: 12px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}
.db-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.12);
}
.db-card i {
    font-size: 40px;
    color: #007bff;
    margin-bottom: 15px;
}
.db-card h3 {
    font-size: 1.3rem;
    margin-bottom: 10px;
    color: #222;
}
.db-card p {
    font-size: 0.95rem;
    color: #555;
}
</style>

<?php include 'includes/footer.php'; ?>
