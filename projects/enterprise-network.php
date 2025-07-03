
<main>
  <section style="background: #0077cc; color: white; padding: 40px 20px; text-align: center;">
    <h1>Enterprise Network in Cisco Packet Tracer</h1>
    <p style="max-width: 800px; margin: 20px auto; font-size: 1.2rem;">
      This project demonstrates the setup and configuration of an enterprise network using Cisco Packet Tracer. It includes VLANs, Inter-VLAN Routing, a Data Center, DNS, FTP, and a Mailing Server.
    </p>
  </section>

  <section style="padding: 40px 20px; max-width: 1200px; margin: auto;">
    <h2 style="color: #333;">Configuration Overview</h2>
    <ul style="line-height: 1.8; font-size: 1.1rem;">
      <li><strong>VLANs:</strong> VLAN10 - Admin, VLAN20 - HR, VLAN30 - IT, VLAN40 - Finance</li>
      <li><strong>Inter-VLAN Routing:</strong> Configured on a Layer 3 switch with trunk ports linking to access switches.</li>
      <li><strong>Data Center:</strong> Contains web servers and backup systems accessible across VLANs via routing.</li>
      <li><strong>Mail Server:</strong> Handles internal communications. Configured using Packet Tracer's server module.</li>
      <li><strong>FTP Server:</strong> For file transfers between departments, IP-bound access controls implemented.</li>
      <li><strong>DNS Server:</strong> Resolves hostnames for internal network resources.</li>
    </ul>
  </section>

  <section style="text-align: center; padding: 40px 20px;">
    <h2 style="color: #333;">Network Simulation GIF</h2>
    <img src="assets/images/enterprise-network.gif" alt="Enterprise Network GIF" style="width: 90%; max-width: 800px; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1);">
  </section>

  <section style="padding: 40px 20px; background: #fff;">
    <h2 style="text-align: center; color: #333;">Collaborators</h2>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
      <!-- Collaborator Card -->
      <div class="card" style="width: 250px; perspective: 1000px;">
        <div class="card-inner" style="position: relative; width: 100%; height: 300px; transition: transform 0.8s; transform-style: preserve-3d;" onclick="this.style.transform='rotateY(180deg)';">
          <div class="card-front" style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; background: #0077cc; color: white; display: flex; align-items: center; justify-content: center; border-radius: 10px;">
            <h3>John Otieno</h3>
          </div>
          <div class="card-back" style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; background: #333; color: white; transform: rotateY(180deg); padding: 20px; border-radius: 10px; text-align: center;">
            <p>Helped configure VLANs and managed the Layer 3 switch setup.</p>
          </div>
        </div>
      </div>

      <!-- Collaborator Card 2 -->
      <div class="card" style="width: 250px; perspective: 1000px;">
        <div class="card-inner" style="position: relative; width: 100%; height: 300px; transition: transform 0.8s; transform-style: preserve-3d;" onclick="this.style.transform='rotateY(180deg)';">
          <div class="card-front" style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; background: #0077cc; color: white; display: flex; align-items: center; justify-content: center; border-radius: 10px;">
            <h3>Mary Njeri</h3>
          </div>
          <div class="card-back" style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; background: #333; color: white; transform: rotateY(180deg); padding: 20px; border-radius: 10px; text-align: center;">
            <p>Assisted with DNS, FTP, and Mail Server configurations in the simulated environment.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
  // Reset card flip on mouse leave
  document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('mouseleave', function () {
      const inner = card.querySelector('.card-inner');
      inner.style.transform = 'rotateY(0deg)';
    });
  });
</script>


