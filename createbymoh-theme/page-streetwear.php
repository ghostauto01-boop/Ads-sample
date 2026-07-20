<?php
/*
Template Name: Streetwear Division Template
*/
get_header(); ?>



<!-- ---------- HERO BLOCK ---------- -->
<div class="hero-block">
  <div class="wrap">
    <nav class="hero-nav">
      <div class="brand"><span class="star-icon">✦</span>CREATEBYMOH</div>
      <div class="nav-links">
        <a href="index.html" class="nav-link">Home</a>
        <a href="perfumes.html" class="nav-link">Perfumes</a>
        <a href="jewelry.html" class="nav-link">Jewelry</a>
      </div>
      <a class="nav-cta" href="#request-sample">Let's Talk</a>
    </nav>

    <header class="hero">
      <div class="hero-grid">
        <div class="hero-left">
          <h1>Cinematic Ads for<br><span>Streetwear</span> Brands</h1>
          <p class="sub">High-converting social garment campaigns, oversized lookbook cuts, and seamless outfit transit clips that showcase fabric luxury and maximize Reels & TikTok conversions.</p>
          <a class="btn-secondary" href="#request-sample">Get Free Garment Mockup</a>
        </div>

        <div class="hero-right-visual">
          <div class="hero-main-img">
            <div class="bottle-floating-action">
              <span class="float-pill green">Apparel</span>
              <span class="float-pill black">Ready to wear</span>
            </div>
          </div>
          <div class="experience-tag">
            <div class="stars">★★★★★</div>
            <b>4 Years</b>
            <span>Experience</span>
          </div>
          <div class="hero-badge-overlay">STREETWEAR DIVISION</div>
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

<!-- ---------- PORTFOLIO CAMPAIGNS (9:16) ---------- -->
<section id="campaigns" class="campaigns wrap">
  <div class="campaigns-head">
    <h2>Streetwear & Fashion Portfolio</h2>
  </div>

  <div class="campaigns-grid">
    <div class="campaign-card" data-sample="shirt-swap">
      <div class="campaign-avatar-holder">
        <video class="campaign-avatar-video" autoplay muted loop playsinline preload="metadata">
          <source src="<?php echo get_template_directory_uri(); ?>/videos/streetwear/shirt-swap.mp4" type="video/mp4">
        </video>
      </div>
      <h3>Shirt Swap Transition</h3>
      <span class="sub-type">Lifestyle UGC · 15s</span>
      <p>A fast-paced streetwear swap cut sequence built for viral social reach and high catalog discovery.</p>
      <span class="play-btn">Play Campaign</span>
    </div>

    <div class="campaign-card" data-sample="hoodie-lookbook">
      <div class="campaign-avatar-holder">
        <video class="campaign-avatar-video" autoplay muted loop playsinline preload="metadata">
          <source src="<?php echo get_template_directory_uri(); ?>/videos/streetwear/hoodie-lookbook.mp4" type="video/mp4">
        </video>
      </div>
      <h3>Oversized Hoodie</h3>
      <span class="sub-type">Heavyweight Fleece · 12s</span>
      <p>Tactile closeups displaying robust fabric drapes, premium relaxed fits, and clean drop shoulders.</p>
      <span class="play-btn">Play Campaign</span>
    </div>

    <div class="campaign-card" data-sample="tracksuit">
      <div class="campaign-avatar-holder">
        <video class="campaign-avatar-video" autoplay muted loop playsinline preload="metadata">
          <source src="<?php echo get_template_directory_uri(); ?>/videos/streetwear/tracksuit.mp4" type="video/mp4">
        </video>
      </div>
      <h3>Tracksuit Campaign</h3>
      <span class="sub-type">Active Lifestyle · 15s</span>
      <p>Full tracksuit lookbook movement cuts displaying active street cuts.</p>
      <span class="play-btn">Play Campaign</span>
    </div>

    <div class="campaign-card" data-sample="retro-tee">
      <div class="campaign-avatar-holder">
        <video class="campaign-avatar-video" autoplay muted loop playsinline preload="metadata">
          <source src="<?php echo get_template_directory_uri(); ?>/videos/streetwear/retro-tee.mp4" type="video/mp4">
        </video>
      </div>
      <h3>Retro Tee Lookbook</h3>
      <span class="sub-type">Vintage Wash · 10s</span>
      <p>Aesthetic lookbook frames highlighting raw collar washes, luxury chest graphic embroidery, and boxy fit.</p>
      <span class="play-btn">Play Campaign</span>
    </div>

    <div class="campaign-card" data-sample="cargo-sweatpants">
      <div class="campaign-avatar-holder">
        <video class="campaign-avatar-video" autoplay muted loop playsinline preload="metadata">
          <source src="<?php echo get_template_directory_uri(); ?>/videos/streetwear/cargo-sweatpants.mp4" type="video/mp4">
        </video>
      </div>
      <h3>Cargo Sweatpants Drop</h3>
      <span class="sub-type">Heavy Utility · 13s</span>
      <p>Detailed closeups of utility pocket stitching, robust waist ties, and premium fleece textures.</p>
      <span class="play-btn">Play Campaign</span>
    </div>

    <div class="campaign-card" data-sample="heavyweight-fleece">
      <div class="campaign-avatar-holder">
        <video class="campaign-avatar-video" autoplay muted loop playsinline preload="metadata">
          <source src="<?php echo get_template_directory_uri(); ?>/videos/streetwear/heavyweight-fleece.mp4" type="video/mp4">
        </video>
      </div>
      <h3>Heavyweight Fleece</h3>
      <span class="sub-type">Product review UGC · 14s</span>
      <p>Conversational, tactile unboxing feel reviewing material thickness, cozy inner fleece linings, and fit sizing.</p>
      <span class="play-btn">Play Campaign</span>
    </div>
  </div>
</section>

<!-- ---------- GALLERY / ART PORTFOLIO (Only Real Streetwear Images) ---------- -->
<section id="gallery" class="gallery wrap">
  <div class="campaigns-head">
    <h2>Art Direction Universe</h2>
  </div>
  <div class="gallery-grid">
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_7931.PNG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_7931</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_7936.PNG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_7936</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_7957.PNG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_7957</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_7958.PNG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_7958</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_8052.JPG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_8052</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_8053.JPG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_8053</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_8057.JPG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_8057</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_8060.JPG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_8060</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_8063.JPG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_8063</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_8065.JPG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_8065</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_8098.PNG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_8098</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_8112.JPG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_8112</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_8113.JPG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_8113</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_8116.JPG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_8116</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_8117.JPG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_8117</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_8123.PNG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_8123</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_8124.PNG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_8124</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_8128.PNG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_8128</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_8129.PNG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_8129</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_8130.PNG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_8130</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_8531.PNG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_8531</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_8533.PNG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_8533</span></div></div>
    <div class="gallery-item"><div class="gallery-item-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/thumbs/streetwear/IMG_9269.PNG');"></div><div class="gallery-overlay"><b>Streetwear Concept</b><span>IMG_9269</span></div></div>
  </div>
</section>

<!-- ---------- BRIEF REQUEST FORM ---------- -->
<section id="request-sample" class="brief-section">
  <div class="wrap brief-grid">
    <div class="brief-info">
      <h2>Get your custom streetwear mockup, free</h2>
      <p>Provide details on your garment's fabric weight and target style. We will generate a free custom 10-15s vertical lookbook or transition mock in 48 hours.</p>
      <div class="luxury-perks">
        <div class="perk"><div class="perk-bullet"></div><div class="perk-text"><b>Fabric Matchmaking</b><span>Visual layouts meticulously configured to highlight heavy cotton drapes, texture weaves, or print details.</span></div></div>
        <div class="perk"><div class="perk-bullet"></div><div class="perk-text"><b>Direct email briefing</b><span>Brief options are instantly structured and pre-filled in your default email draft to webwizardmarketingagency@gmail.com on submit.</span></div></div>
      </div>
    </div>

    <div class="brief-form-card">
      <form id="perfume-brief-form" class="brief-form" onsubmit="handleBriefSubmit(event)">
        <div class="form-row">
          <div class="form-group"><label for="brand-name">Garment Brand</label><input type="text" id="brand-name" required placeholder="e.g. CREATEBYMOH"></div>
          <div class="form-group"><label for="contact-email">Email Address</label><input type="email" id="contact-email" required placeholder="e.g. creative@brand.com"></div>
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
          <div class="form-group"><label for="bottle-type">Fabric Material & GSM</label><input type="text" id="bottle-type" required placeholder="e.g. 100% Cotton 450GSM"></div>
        </div>
        <div class="form-group"><label for="scent-notes">Key Design Details & targeted lookbook feel</label><textarea id="scent-notes" rows="3" placeholder="Tell us about the drop shoulders, utility pockets, print graphics, or wash textures..."></textarea></div>
        <div class="form-group">
          <label>Photos / Reference Briefing</label>
          <div class="file-drop-area" onclick="document.getElementById('file-input').click()">
            <span class="icon">📸</span><span>Photos are added as email attachments upon submit</span>
            <input type="file" id="file-input" multiple accept="image/*">
          </div>
        </div>
        <button type="submit" class="brief-submit-btn"><span>Submit Streetwear Brief</span></button>
      </form>
      <div id="form-success" class="form-success-panel"><span class="icon">👑</span><h3>Brief Prepared</h3><p>Success! Your email client has been launched to forward the details directly to <strong>webwizardmarketingagency@gmail.com</strong>. Please attach your product photos and hit Send!</p></div>
    </div>
  </div>
</section>

<!-- ---------- ROYAL COBALT BLUE FOOTER ---------- -->


<?php get_footer(); ?>
