
<?php get_header(); ?>
<section class="site-hero">
  <div class="slide active" style="background-image:url('https://images.unsplash.com/photo-1535905557558-afc4877a26fc?auto=format&fit=crop&w=1600&q=80');">
    <div class="hero-overlay"></div>
    <div class="hero-inner wrap">
      <div class="hero-card" data-aos="fade-up">
        <h1><?php bloginfo('name'); ?></h1>
        <p>Empowering communities, corporates, and governments to co-create sustainable, scalable, and evidence-driven solutions.</p>
        <div class="btns">
          <a class="btn btn-primary" href="<?php echo esc_url(home_url('/services')); ?>">Explore Our Work</a>
          <a class="btn btn-outline" href="<?php echo esc_url(home_url('/contact')); ?>">Partner with Us</a>
        </div>
      </div>
    </div>
  </div>

  <div class="slide" style="background-image:url('https://images.unsplash.com/photo-1509099836639-18ba1795216d?auto=format&fit=crop&w=1600&q=80');">
    <div class="hero-overlay"></div>
    <div class="hero-inner wrap"><div class="hero-card" data-aos="fade-up"><h1>Global Expertise, Local Roots</h1><p>25+ years of thematic leadership working with communities and institutions.</p></div></div>
  </div>

  <div class="slide" style="background-image:url('https://images.unsplash.com/photo-1543269664-76bc3997d9ea?auto=format&fit=crop&w=1600&q=80');">
    <div class="hero-overlay"></div>
    <div class="hero-inner wrap"><div class="hero-card" data-aos="fade-up"><h1>Aligned with SDGs & Government Mandates</h1><p>Driving measurable impact aligned with national and global priorities.</p></div></div>
  </div>

  <div class="dots"></div>
</section>

<section class="panel">
  <h2>Who We Are</h2>
  <p>At Renevate Global Foundation, we act as a catalyst and connector. Communities know their challenges best; when provided with access to resources, training, capacity building and enabling systems — they can transform ideas into sustainable action.</p>
</section>

<section class="panel">
  <h2>Our Approach</h2>
  <div class="pillars">
    <div class="pillar"><div class="picon">🔁</div><h3>Renewing Opportunities</h3><p>Empower communities through health, education, and livelihoods.</p></div>
    <div class="pillar"><div class="picon">💡</div><h3>Innovating Solutions</h3><p>Leverage data, technology, and collaborative learning to co-create models.</p></div>
    <div class="pillar"><div class="picon">🌿</div><h3>Sustaining Outcomes</h3><p>Strengthen systems, promote inclusive growth and environmental stewardship.</p></div>
  </div>
</section>

<section class="panel">
  <h2>Our Services</h2>
  <div class="services-grid">
    <div class="service-card"><h3><a href="<?php echo esc_url(home_url('/service/data-research')); ?>">Data & Research</a></h3><p>Empowering Decisions with Evidence</p></div>
    <div class="service-card"><h3><a href="<?php echo esc_url(home_url('/service/csr-advisory')); ?>">CSR Advisory & Strategy</a></h3><p>Aligning Corporate Goals with Societal Impact</p></div>
    <div class="service-card"><h3><a href="<?php echo esc_url(home_url('/service/social-development')); ?>">Social Development</a></h3><p>Transforming Communities through Integrated Solutions</p></div>
    <div class="service-card"><h3><a href="<?php echo esc_url(home_url('/service/meal')); ?>">Monitoring, Evaluation & Learning (MEAL)</a></h3><p>Ensuring Accountability and Continuous Improvement</p></div>
    <div class="service-card"><h3><a href="<?php echo esc_url(home_url('/service/training')); ?>">Training & Capacity Building</a></h3><p>Building Resilient Institutions for Sustainable Impact</p></div>
  </div>
</section>

<section class="panel">
  <h2>Our Team</h2>
  <div class="team-list">
    <div class="team-item"><strong>Dr. Asha Rawat</strong><br><small>Director – Health & Nutrition</small></div>
    <div class="team-item"><strong>Mr. Ravi Singh</strong><br><small>Lead – CSR & Partnerships</small></div>
    <div class="team-item"><strong>Ms. Neha Kapoor</strong><br><small>Head – Research & M&E</small></div>
  </div>
</section>

<?php get_footer(); ?>
