<?php
$current_page = 'portfolio';
include 'includes/header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h1>Portfolio</h1>
            <p>Explore my projects and blog posts</p>
        </div>
    </section>

    <section class="portfolio-nav">
        <div class="container">
            <div class="portfolio-tabs">
                <button class="tab-btn active" data-tab="projects">Projects</button>
                <button class="tab-btn" data-tab="blog">Blog</button>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="tab-content active">
        <div class="container">
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-image">
                        <img src="assets/images/project1.png" alt="Enterprise Network System" class = "project1-img">
                    </div>
                    <div class="project-info">
                        <h3>Enterprise Network system</h3>
                        <p>A full-featured enterprise network with IPsec VPN built with in cisco packet tracer, featuring ip phonesm various departments,Data center.</p>
                        <div class="project-tech">
                            <span class="tech-tag">Cisco Packet Tracer</span>
                            <span class="tech-tag">Routing and Switching</span>
                            <span class="tech-tag">Enterprise security(IPsec VPN)</span>
                        </div>
                        <div class="project-links">
    
                            <a href="assets/images/project.png" class="btn btn-small" target="_blank">Live Demo</a>
                            <a href="#" class="btn btn-small btn-secondary">GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">
                        <img src="assets/images/project2.jpg" alt="">
                    </div>
                    <div class="project-info">
                        <h3>Enterprise Network with Site-Site VPN</h3>
                        <p>A secureenterpise  network system  with IPsec VPN between the HQ and branch
                            , with real-time simulation.</p>
                        <div class="project-tech">
                            <span class="tech-tag">Routing,switching, IPec VPN</span>
                            <span class="tech-tag">Cisco packet tracer</span>
                            <span class="tech-tag">cisco routers and switches</span>
                        </div>
                        <div class="project-links">
                             <a href="assets/images/project1.png" class="btn btn-small" target="_blank">Live Demo</a>
                            <a href="#" class="btn btn-small btn-secondary">GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">
                        <img src="assets/images/project3.jpg" alt="Blog CMS">
                    </div>
                    <div class="project-info">
                        <h3>Amamzon Web Services(AWS)</h3>
                        <p>An AWS EC2 management system with integrated Linux Operating system.</p>
                        <div class="project-tech">
                            <span class="tech-tag">EC2</span>
                            <span class="tech-tag">AWS Console</span>
                            <span class="tech-tag">MobaXterm as general emmulator</span>
                        </div>
                        <div class="project-links">
                            <a href="cloud-computing.php" class="btn btn-small">Live Demo</a>
                            <a href="https://github.com/collins-wanjala/aws-restart-labs" class="btn btn-small btn-secondary">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
     <!-- Blog Section -->
<section id="blog" class="tab-content" style="padding: 60px 20px; background: linear-gradient(to bottom right, #eef2f3, #cfd9df); font-family: 'Segoe UI', sans-serif;">
  <div style="max-width: 1200px; margin: auto;">
    <h2 style="text-align: center; font-size: 2.8rem; margin-bottom: 30px; color: #0d47a1; text-transform: uppercase; letter-spacing: 1px;">Latest Blog Posts</h2>

    <!-- Search and Filter -->
    <div style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; margin-bottom: 30px;">
      <input type="text" id="searchBlog" placeholder="Search blogs..." onkeyup="filterBlogs()" style="padding: 10px; width: 250px; border: 1px solid #ccc; border-radius: 5px;">
      <select id="filterCategory" onchange="filterBlogs()" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        <option value="">All Categories</option>
        <option value="Cloud Computing">Cloud Computing</option>
        <option value="Database Systems">Database Systems</option>
        <option value="Network Security">Network Security</option>
        <option value="Web Development">Web Development</option>
        <option value="System Administration">System Administration</option>
        <option value="DevOps">DevOps</option>
      </select>
    </div>

    <!-- Trending Carousel -->
    <div style="overflow-x: auto; white-space: nowrap; margin-bottom: 30px;">
      <div style="display: inline-block; padding: 10px; background: #fff; border-radius: 10px; margin-right: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">🔥 Trending: <strong>CI/CD with GitHub Actions</strong></div>
      <div style="display: inline-block; padding: 10px; background: #fff; border-radius: 10px; margin-right: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">☁️ Cloud Scalability with AWS</div>
      <div style="display: inline-block; padding: 10px; background: #fff; border-radius: 10px; margin-right: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">🔐 Enterprise Network Security</div>
    </div>

    <div id="blogGrid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
      <!-- Blog Cards Injected Here -->
    </div>

    <!-- Load More Button -->
    <div style="text-align: center; margin-top: 40px;">
      <button onclick="loadMoreBlogs()" style="padding: 12px 25px; font-size: 1rem; background-color: #0d47a1; color: white; border: none; border-radius: 8px; cursor: pointer;">Load More</button>
    </div>
  </div>
</section>

<script>
const blogData = [
  { id: 1, title: "Amazon Web Services and Microsoft Azure", date: "May 15, 2024", category: "Cloud Computing", image: "assets/images/blog1.jpg", description: "Explore how leading cloud platforms help modern businesses grow with scalable infrastructure and global availability." },
  { id: 2, title: "Database Optimization & Query Tuning", date: "December 10, 2023", category: "Database Systems", image: "assets/images/blog2.jpg", description: "Learn performance tuning for MySQL, PostgreSQL, and MSSQL to accelerate analytics and reduce resource usage." },
  { id: 3, title: "Best Practices in Network Security", date: "June 5, 2025", category: "Network Security", image: "assets/images/blog3.jpeg", description: "Discover how to secure enterprise networks with firewalls, VPNs, endpoint protection, and zero trust architecture." },
  { id: 4, title: "Modern Web Development Trends 2025", date: "May 20, 2025", category: "Web Development", image: "assets/images/blog4.jpg", description: "From AI-powered interfaces to serverless functions, explore what’s hot in frontend and backend development." },
  { id: 5, title: "CI/CD Pipelines with GitHub Actions", date: "May 10, 2025", category: "DevOps", image: "assets/images/blog5.jpg", description: "Build a streamlined deployment flow using Docker, GitHub Actions, and automated tests for real-time delivery." }
];

let displayed = 0;
const perPage = 3;

function loadMoreBlogs() {
  const grid = document.getElementById("blogGrid");
  const nextBlogs = blogData.slice(displayed, displayed + perPage);

  nextBlogs.forEach(blog => {
    const card = document.createElement("article");
    card.style.cssText = "background:white;border-radius:15px;overflow:hidden;box-shadow:0 8px 20px rgba(0,0,0,0.08);transition:transform 0.3s ease;";
    card.setAttribute("onmouseover", "this.style.transform='translateY(-10px)'");
    card.setAttribute("onmouseout", "this.style.transform='none'");
    card.innerHTML = `
      <img src="${blog.image}" alt="${blog.title}" style="width:100%;height:200px;object-fit:cover;">
      <div style="padding:20px;">
        <p style="color:#999;font-size:0.9rem;margin-bottom:5px;">${blog.date} | ${blog.category}</p>
        <h3 style="font-size:1.3rem;color:#0d47a1;margin:10px 0;">${blog.title}</h3>
        <p style="color:#444;line-height:1.5;">${blog.description}</p>
        <a href="portfolio.php" style="display:inline-block;margin-top:15px;color:#1e88e5;font-weight:bold;text-decoration:none;">Read More →</a>
      </div>
    `;
    grid.appendChild(card);
  });
  displayed += perPage;
  if (displayed >= blogData.length) document.querySelector("button").style.display = "none";
}

function filterBlogs() {
  const search = document.getElementById("searchBlog").value.toLowerCase();
  const category = document.getElementById("filterCategory").value;
  const grid = document.getElementById("blogGrid");
  grid.innerHTML = "";
  displayed = 0;

  let filtered = blogData.filter(b =>
    (b.title.toLowerCase().includes(search) || b.description.toLowerCase().includes(search)) &&
    (category === "" || b.category.includes(category))
  );

  filtered.slice(0, perPage).forEach(blog => {
    const card = document.createElement("article");
    card.style.cssText = "background:white;border-radius:15px;overflow:hidden;box-shadow:0 8px 20px rgba(0,0,0,0.08);transition:transform 0.3s ease;";
    card.setAttribute("onmouseover", "this.style.transform='translateY(-10px)'");
    card.setAttribute("onmouseout", "this.style.transform='none'");
    card.innerHTML = `
      <img src="${blog.image}" alt="${blog.title}" style="width:100%;height:200px;object-fit:cover;">
      <div style="padding:20px;">
        <p style="color:#999;font-size:0.9rem;margin-bottom:5px;">${blog.date} | ${blog.category}</p>
        <h3 style="font-size:1.3rem;color:#0d47a1;margin:10px 0;">${blog.title}</h3>
        <p style="color:#444;line-height:1.5;">${blog.description}</p>
        <a href="portfolio.php" style="display:inline-block;margin-top:15px;color:#1e88e5;font-weight:bold;text-decoration:none;">Read More →</a>
      </div>
    `;
    grid.appendChild(card);
  });
}

// Initial load
window.onload = () => loadMoreBlogs();
</script>

   <!-- Blog Section -->


    <!-- Portifolio Gallery  -->
<section class="portfolio-gallery">
        <div class="container">
            <h2 class="section-title">My Project Gallery</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="assets/images/project1.png" alt="Project 1">
                    <h3>FortiGate HA Firewall</h3>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/enterprise-network.png" alt="Project 2">
                    <h3>Enterprise IPsec & Dial Peering</h3>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/hospital-network.png" alt="Project 3">
                    <h3>Hospital Network System</h3>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/project4.png" alt="Project 4">
                    <h3>Campus Area Network</h3>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// Portfolio tabs functionality
document.addEventListener('DOMContentLoaded', function() {
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');
            
            // Remove active class from all tabs and contents
            tabBtns.forEach(b => b.classList.remove('active'));
            tabContents.forEach(c => c.classList.remove('active'));
            
            // Add active class to clicked tab and corresponding content
            this.classList.add('active');
            document.getElementById(targetTab).classList.add('active');
        });
    });
});

</script>

<?php include 'includes/footer.php'; ?>
