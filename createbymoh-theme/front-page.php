<?php get_header(); ?>



<!-- ---------- HERO BLOCK ---------- -->
<div class="hero-block">
  <div class="wrap">
    <nav class="hero-nav">
      <div class="brand"><span class="star-icon">✦</span>CREATEBYMOH</div>
      <div class="nav-links">
        <a href="index.html" class="nav-link">Home</a>
        <a href="perfumes.html" class="nav-link">Perfumes</a>
        <a href="streetwear.html" class="nav-link">Streetwear</a>
        <a href="jewelry.html" class="nav-link">Jewelry</a>
      </div>
      <a class="nav-cta" href="#request-sample">Let's Talk</a>
    </nav>

    <header class="hero">
      <div class="hero-grid">
        <div class="hero-left">
          <h1>Empowering Brands<br>Through <span>Creative</span> Solutions</h1>
          <p class="sub">From high-end luxury perfumes to streetwear garments and solid-gold jewelry, we design tactile, cinematic motion campaigns that translate physical products into pure desire.</p>
          <a class="btn-secondary" href="#request-sample">Innovate Your Brand</a>
        </div>

        <div class="hero-right-visual">
          <div class="hero-main-img">
            <div class="bottle-floating-action">
              <span class="float-pill green">Start Your Project</span>
              <span class="float-pill black">Let's Collaborate</span>
            </div>
          </div>
          <div class="experience-tag">
            <div class="stars">★★★★★</div>
            <b>4 Years</b>
            <span>Experience</span>
          </div>
          <div class="hero-badge-overlay">CREATEBYMOH ✦ CINEMATIC ADS</div>
        </div>
      </div>
    </header>
  </div>
</div>

<!-- ---------- STATS BAR (Updated Copy to Look Highly Realistic) ---------- -->
<div class="stats-bar">
  <div class="wrap stats-grid">
    <div class="stat-item">
      <h2>50+</h2>
      <span>Brands Scaled</span>
    </div>
    <div class="stat-item">
      <h2>4+</h2>
      <span>Years Exp.</span>
    </div>
    <div class="stat-item">
      <h2>20M+</h2>
      <span>Campaign Views</span>
    </div>
    <div class="stat-item">
      <h2>$15M+</h2>
      <span>Tracked Revenue</span>
    </div>
  </div>
</div>

<!-- ---------- THE MASTER MIX CAMPAIGNS SHOWCASE (Homepage Grid) ---------- -->
<section id="campaigns" class="campaigns wrap">
  <div class="campaigns-head">
    <h2>Master Campaign Showcase <span>✦ Mixed Niches</span></h2>
    <div class="niche-nav-tabs">
      <a href="perfumes.html" class="niche-tab-btn">Perfumes</a>
      <a href="streetwear.html" class="niche-tab-btn">Streetwear</a>
      <a href="jewelry.html" class="niche-tab-btn">Jewelry</a>
    </div>
  </div>

  <div class="campaigns-grid">
    <!-- Campaign 1: Perfume Parfum Homme -->
    <div class="campaign-card" data-sample="parfum-gomme">
      <div class="campaign-avatar-holder">
        <video class="campaign-avatar-video" autoplay muted loop playsinline preload="metadata">
          <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/perfume/parfum-gomme.mp4" type="video/mp4">
        </video>
      </div>
      <h3>Parfum Homme</h3>
      <span class="sub-type">Perfume · Aquatic Ripples · 13s</span>
      <p>Top: Sunlit Citrus | Heart: Aquatic Caustics | Base: Wet Mineral Stones</p>
      <span class="play-btn">Play Campaign</span>
    </div>

    <!-- Campaign 2: Streetwear Shirt Swap -->
    <div class="campaign-card" data-sample="shirt-swap">
      <div class="campaign-avatar-holder">
        <video class="campaign-avatar-video" autoplay muted loop playsinline preload="metadata">
          <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/streetwear/shirt-swap.mp4" type="video/mp4">
        </video>
      </div>
      <h3>Shirt Swap Cut</h3>
      <span class="sub-type">Streetwear · Transition UGC · 15s</span>
      <p>Seamless garment swap cut designed for viral streetwear catalog discovery.</p>
      <span class="play-btn">Play Campaign</span>
    </div>

    <!-- Campaign 3: Jewelry Gilded Chain -->
    <div class="campaign-card" data-sample="gilded-chain">
      <div class="campaign-avatar-holder">
        <video class="campaign-avatar-video" autoplay muted loop playsinline preload="metadata">
          <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/jewelry/gilded-chain.mp4" type="video/mp4">
        </video>
      </div>
      <h3>Classic Gilded Chain</h3>
      <span class="sub-type">Jewelry · Luxury Closeups · 13s</span>
      <p>Macro camera panning loops displaying golden reflections and mirror finishes.</p>
      <span class="play-btn">Play Campaign</span>
    </div>

    <!-- Campaign 4: Perfume Sparda Oud -->
    <div class="campaign-card" data-sample="sparda-amber">
      <div class="campaign-avatar-holder">
        <video class="campaign-avatar-video" autoplay muted loop playsinline preload="metadata">
          <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/perfume/sparda-amber.mp4" type="video/mp4">
        </video>
      </div>
      <h3>Sparda Oud</h3>
      <span class="sub-type">Perfume · Oud Amber Explosion · 13s</span>
      <p>Top: Saffron Thread | Heart: Smoky Oud | Base: Golden Amber</p>
      <span class="play-btn">Play Campaign</span>
    </div>

    <!-- Campaign 5: Streetwear Oversized Hoodie -->
    <div class="campaign-card" data-sample="hoodie-lookbook">
      <div class="campaign-avatar-holder">
        <video class="campaign-avatar-video" autoplay muted loop playsinline preload="metadata">
          <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/streetwear/hoodie-lookbook.mp4" type="video/mp4">
        </video>
      </div>
      <h3>Oversized Hoodie</h3>
      <span class="sub-type">Streetwear · Heavyweight Fleece · 12s</span>
      <p>Tactile closeups highlighting premium fabric weight and relaxed boxy fits.</p>
      <span class="play-btn">Play Campaign</span>
    </div>

    <!-- Campaign 6: Jewelry Gold Ring -->
    <div class="campaign-card" data-sample="gold-ring">
      <div class="campaign-avatar-holder">
        <video class="campaign-avatar-video" autoplay muted loop playsinline preload="metadata">
          <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/jewelry/gold-ring.mp4" type="video/mp4">
        </video>
      </div>
      <h3>Solid Gold Band</h3>
      <span class="sub-type">Jewelry · Aesthetic Macro · 13s</span>
      <p>Sleek, slow-panning cuts of raw gold bands against deep obsidian stone.</p>
      <span class="play-btn">Play Campaign</span>
    </div>
  </div>
</section>

<!-- ---------- OUR SERVICES ---------- -->
<section id="services" class="services wrap">
  <div class="services-grid">
    <div class="services-left">
      <span class="services-label">Our Services</span>
      <h2>We offer a range of creative and digital services</h2>
      
      <div class="services-accordion">
        <div class="accordion-row">
          <h3>01 / Sensory Art Direction</h3>
          <span class="arrow">➔</span>
        </div>
        <div class="accordion-row">
          <h3>02 / Tactile Fluid Physics</h3>
          <span class="arrow">➔</span>
        </div>
        <div class="accordion-row">
          <h3>03 / Cinematic 3D Panning</h3>
          <span class="arrow">➔</span>
        </div>
        <div class="accordion-row">
          <h3>04 / High-CTR Hook Copy</h3>
          <span class="arrow">➔</span>
        </div>
      </div>
    </div>

    <div class="services-right">
      <div class="interactive-designer-card">
        <svg class="rotating-ring-svg" viewBox="0 0 100 100" fill="none">
          <circle cx="50" cy="50" r="40" stroke="var(--accent)" stroke-width="1.5" stroke-dasharray="4 4" />
          <circle cx="50" cy="50" r="6" fill="var(--accent)" />
        </svg>
      </div>

      <div class="service-perk-cards">
        <div class="perk-mini-card">
          <h4>Ever wondered how design magic happens?</h4>
          <span>See how we work ➔</span>
        </div>
        <div class="perk-mini-card green" onclick="location.href='#request-sample'">
          <h4>Looking for design experts to bring vision to life?</h4>
          <span>Meet our expert ➔</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ---------- SCROLLING TAPE ---------- -->
<div class="scrolling-tape">
  <div class="tape-track">
    <span>Innovate ✦ Inspire ✦ Create</span>
    <span>Innovate ✦ Inspire ✦ Create</span>
    <span>Innovate ✦ Inspire ✦ Create</span>
    <span>Innovate ✦ Inspire ✦ Create</span>
  </div>
</div>

<!-- ---------- BRIEF REQUEST FORM ---------- -->
<section id="request-sample" class="brief-section">
  <div class="wrap brief-grid">
    <div class="brief-info">
      <h2>Get your custom ad mockup, free of charge</h2>
      <p>Give us details on your brand's style profile and target audience. We'll hand-craft a bespoke 10-15s ad mockup with native cinematic transitions in 48 hours.</p>
      
      <div class="luxury-perks">
        <div class="perk">
          <div class="perk-bullet"></div>
          <div class="perk-text">
            <b>Product Matchmaking</b>
            <span>Visual layouts meticulously configured to match your product's specific materials (gold, silver, cotton, or liquid).</span>
          </div>
        </div>
        <div class="perk">
          <div class="perk-bullet"></div>
          <div class="perk-text">
            <b>Direct Email Forwarding</b>
            <span>All campaign details are instantly compiled and forwarded to webwizardmarketingagency@gmail.com on submit.</span>
          </div>
        </div>
        <div class="perk">
          <div class="perk-bullet"></div>
          <div class="perk-text">
            <b>Zero-Audio Focus</b>
            <span>Muted native loops that draw attention to dewy visual details, optimized for high web conversion rates.</span>
          </div>
        </div>
      </div>
    </div>

    <div class="brief-form-card">
      <form id="perfume-brief-form" class="brief-form" onsubmit="handleBriefSubmit(event)">
        <div class="form-row">
          <div class="form-group">
            <label for="brand-name">Brand Name</label>
            <input type="text" id="brand-name" required placeholder="e.g. CREATEBYMOH">
          </div>
          <div class="form-group">
            <label for="contact-email">Email Address</label>
            <input type="email" id="contact-email" required placeholder="e.g. creative@brand.com">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="niche-type">Industry Niche</label>
            <select id="niche-type" required onchange="toggleNicheInput(this)">
              <option value="Perfume & Fragrance">Perfume & Fragrance</option>
              <option value="Streetwear Clothing">Streetwear Clothing</option>
              <option value="Fine Jewelry">Fine Jewelry</option>
              <option value="Cosmetics & Skincare">Cosmetics & Skincare</option>
              <option value="Watches & Accessories">Watches & Accessories</option>
              <option value="Other">Other (Specify below)</option>
            </select>
          </div>
          <div class="form-group">
            <label for="ad-style">Targeted Ad Style</label>
            <select id="ad-style" required>
              <option value="UGC Ad">UGC Ad</option>
              <option value="Product-focused Base">Product-focused Ad</option>
              <option value="Product Review">Product Review Ad</option>
              <option value="Unboxing Style">Unboxing Style</option>
              <option value="Lifestyle & Aesthetic">Lifestyle & Aesthetic Ad</option>
            </select>
          </div>
        </div>

        <!-- Custom Niche specify field -->
        <div class="form-group" id="other-niche-group" style="display: none;">
          <label for="other-niche">Please Specify Niche</label>
          <input type="text" id="other-niche" placeholder="e.g. Luxury Footwear">
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="format-type">Creative Format</label>
            <select id="format-type" required>
              <option value="Video Creative (.mp4)">Video Creative (.mp4)</option>
              <option value="Image Ads Creative (.jpg/.png)">Image Ads Creative (.jpg/.png)</option>
            </select>
          </div>
          <div class="form-group">
            <label for="perfume-name">Product / Line Name</label>
            <input type="text" id="perfume-name" required placeholder="e.g. Heavyweight Tee">
          </div>
        </div>

        <div class="form-group">
          <label for="scent-notes">Brief Description / Material Notes</label>
          <textarea id="scent-notes" rows="3" placeholder="Tell us about the key notes, fabrics, metal finishes, or targeted client feel..."></textarea>
        </div>

        <div class="form-group">
          <label>Photos / Reference Briefing</label>
          <div class="file-drop-area" onclick="document.getElementById('file-input').click()">
            <span class="icon">📸</span>
            <span>Photos are added as email attachments upon submit</span>
            <input type="file" id="file-input" multiple accept="image/*">
          </div>
        </div>

        <button type="submit" class="brief-submit-btn">
          <span>Submit Project Brief</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:14px; height:14px;"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
        </button>
      </form>

      <!-- Success Panel -->
      <div id="form-success" class="form-success-panel">
        <span class="icon">👑</span>
        <h3>Olfactory Brief Prepared</h3>
        <p>Success! Your brief is ready. Your email client has been launched to forward the details directly to <strong>webwizardmarketingagency@gmail.com</strong>. Please attach your product photos to the email and hit Send!</p>
      </div>
    </div>
  </div>
</section>

<!-- ---------- DETAILED ROYAL COBALT BLUE FOOTER ---------- -->


<?php get_footer(); ?>
