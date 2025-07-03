<?php
$current_page = 'network';
include 'includes/header.php';
?>

<main>
    <section class="network-hero">
        <div class="container">
            <h1 class="animated fadeInDown">Networking & Telecommunications Projects</h1>
            <p class="animated fadeInUp delay-1s">Explore key network infrastructure solutions I have designed and deployed.</p>
        </div>
    </section>

    <section class="network-projects">
        <div class="container">
            <div class="project-card animated fadeInLeft">
                <h2><a href="projects/enterprise-network.php">Enterprise Network System with IPsec VPN</a></h2>
                <p>Designed and implemented a secure and scalable enterprise network with redundant links, VLAN segmentation, and firewall protection.</p>
                <a class="doc-link" href="assets/enterprise-network.pdf" target="_blank" >Download PDF</a>
            </div>

            <div class="project-card animated fadeInRight">
                <h2><a href="projects/campus-area-network.php">Campus Area Network (CAN)</a></h2>
                <p>Engineered a full CAN with inter-building fiber links, wireless access points, core/distribution/access switch architecture using Huawei S series switches.</p>
                <a class="doc-link" href="docs/campus-network.pdf" target="_blank">Download PDF</a>
                
            </div>

            <div class="project-card animated fadeInLeft">
                <h2><a href="projects/isp-backbone.php">ISP Backbone Design</a></h2>
                <p>Configured BGP routing and traffic engineering policies on Cisco and MikroTik routers for an ISP backbone spanning multiple PoPs.</p>
                <a class="doc-link" href="docs/isp-backbone.pdf" target="_blank">Download PDF</a>
            </div>

            <div class="project-card animated fadeInRight">
                <h2><a href="projects/fortigate-ha.php">High Availability in FortiGate Firewalls</a></h2>
                <p>Implemented Active-Passive HA using FortiGate firewalls with full session synchronization, link monitoring, and automated failover in a data center environment.</p>
                <a class="doc-link" href="docs/fortigate-ha.pdf" target="_blank">Download PDF</a>
            </div>

            <div class="project-card animated fadeInLeft">
                <h2><a href="projects/ipsec-dial-peering.php">IPsec VPN & Dial Peering</a></h2>
                <p>Established site-to-site IPsec VPNs with dynamic peer discovery and dial-peer failover for remote enterprise branches, ensuring secure communications.</p>
                <a class="doc-link" href="docs/ipsec-dial-peering.pdf" target="_blank">Download PDF</a>
            </div>

            <div class="project-card animated fadeInRight">
                <h2><a href="projects/hospital-network.php">Hospital Network System</a></h2>
                <p>Designed and deployed a secure hospital network integrating EMR systems, VLANs for departments, firewall rules for compliance, and uninterrupted VoIP services.</p>
                <a class="doc-link" href="docs/hospital-network.pdf" target="_blank">Download PDF</a>
            </div>

            <div class="project-card animated fadeInLeft">
                <h2><a href="projects/huawei-usg6000v.php">Enterprise network Using Huawei USG6000V Firewall</a></h2>
                <p>Fully configured Huawei USG6000V firewall with DMZ, inside, and outside zones, and enforced policies for traffic flows between LAN, DMZ, and the Internet.</p>
                <a class="doc-link" href="docs/huawei-usg6000v.pdf" target="_blank">Download PDF</a>
            </div>
        </div>
    </section>
</main>

<style>
.network-hero {
    background: linear-gradient(135deg, #007bff, #00c6ff);
    color: white;
    padding:50px 20px;
    text-align: center;
}

.network-hero h1 {
    font-size: 3rem;
    margin-bottom: 20px;
}

.network-hero p {
    font-size: 1.3rem;
    max-width: 700px;
    margin: 0 auto;
}

.network-projects {
    padding: 50px 20px;
    background-color: #f4f7fa;
}

.project-card {
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    margin-bottom: 30px;
    transition: transform 0.3s ease;
}

.project-card:hover {
    transform: translateY(-5px);
}

.project-card h2 {
    color: #007bff;
    margin-bottom: 15px;
    font-size: 1.5rem;
}

.project-card h2 a {
    color: inherit;
    text-decoration: none;
}

.doc-link {
    display: inline-block;
    margin-top: 50px;
    color: #0056b3;
    font-weight: bold;
    text-decoration: underline;
}

.animated {
    opacity: 0;
    animation-fill-mode: forwards;
}

.fadeInDown {
    animation: fadeInDown 1s ease-out forwards;
}

.fadeInUp {
    animation: fadeInUp 1s ease-out forwards;
}

.fadeInLeft {
    animation: fadeInLeft 1s ease-out forwards;
}

.fadeInRight {
    animation: fadeInRight 1s ease-out forwards;
}

.delay-1s {
    animation-delay: 1s;
}

@keyframes fadeInDown {
    from { transform: translateY(-20px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

@keyframes fadeInUp {
    from { transform: translateY(20px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

@keyframes fadeInLeft {
    from { transform: translateX(-30px); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}

@keyframes fadeInRight {
    from { transform: translateX(30px); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}
</style>

<?php include 'includes/footer.php'; ?>
