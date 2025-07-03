<?php
$current_page = 'cloud';
include 'includes/header.php';
?>

<main>
    <!-- Hero Section -->
    <section class="cloud-hero">
        <div class="container">
            <h1 class="animated fadeInDown">Cloud Computing</h1>
            <p class="animated fadeInUp">Explore my expertise in AWS and Azure Cloud platforms, delivering secure, scalable, and cost-effective solutions.</p>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="cloud-skills">
        <div class="container">
            <h2>Platforms & Services</h2>
            <div class="skills-grid">
                <div class="skill-box">
                    <h3>AWS</h3>
                    <ul>
                        <li>Compute(EC2), Storage(S3),Datbases(RDS), Lambda,VPC</li>
                        <li>CloudFormation & Terraform</li>
                        <li>IAM, CloudTrail, CloudWatch</li>
                    </ul>
                </div>
                <div class="skill-box">
                    <h3>Azure</h3>
                    <ul>
                        <li>Azure VMs, Storage, Functions</li>
                        <li>Azure Resource Manager</li>
                        <li>Monitoring & Security Center</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Showcase -->
    <section class="cloud-projects">
        <div class="container">
            <h2>Cloud Projects</h2>
            <div class="project-grid">
                <div class="project-card">
                    <h3>Hybrid Cloud Setup</h3>
                    <p>Integrated AWS with on-prem infrastructure to enable disaster recovery and secure hybrid communication using VPNs and Direct Connect.</p>
                </div>
                <div class="project-card">
                    <h3>Azure DevOps CI/CD Pipeline</h3>
                    <p>Configured CI/CD pipeline using Azure DevOps for seamless deployment of .NET applications to Azure App Service.</p>
                </div>
                <div class="project-card">
                    <h3>Serverless Architecture</h3>
                    <p>Built a fully serverless web application using AWS Lambda, API Gateway, DynamoDB, and S3 for cost-efficient scaling.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.cloud-hero {
    background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
    color: #fff;
    padding: 80px 20px;
    text-align: center;
}
.cloud-hero h1 {
    font-size: 48px;
    margin-bottom: 10px;
}
.cloud-hero p {
    font-size: 18px;
    max-width: 600px;
    margin: 0 auto;
}
.cloud-skills, .cloud-projects {
    padding: 60px 20px;
    background: #f4f7fa;
}
.skills-grid, .project-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 30px;
}
.skill-box, .project-card {
    background: white;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}
.skill-box:hover, .project-card:hover {
    transform: translateY(-5px);
}
</style>

<?php include 'includes/footer.php'; ?>
