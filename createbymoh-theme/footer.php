<footer class="footer-block">
  <div class="wrap">
    <div class="footer-grid">
      <div>
        <span class="footer-logo">CREATEBYMOH</span>
        <p class="footer-desc">Premium cinematic motion direction and campaign assets for luxury fragrance, streetwear, and accessory houses.</p>
      </div>
      
      <div class="footer-col">
        <h5>Brand Niches</h5>
        <ul>
          <li><a href="perfumes.html">Fragrance Studio</a></li>
          <li><a href="streetwear.html">Streetwear Studio</a></li>
          <li><a href="jewelry.html">Jewelry Studio</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h5>Newsletter</h5>
        <div class="footer-newsletter">
          <p style="font-size: 13.5px; color: rgba(255,255,255,0.8); margin: 0;">Subscribe to receive creative directing trends and early access offers.</p>
          <div class="newsletter-row">
            <input type="email" placeholder="Your email">
            <button>Subscribe</button>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <span>© 2026 CREATEBYMOH. All rights reserved.</span>
      <span>webwizardmarketingagency@gmail.com</span>
    </div>
  </div>
</footer>

<!-- ---------- WHATSAPP FLOATING BUTTON ---------- -->
<a href="https://wa.me/2348164802777?text=Hi%20CREATEBYMOH%2C%20I%27m%20interested%20in%20a%20free%20custom%20ad%20campaign%20for%20my%20brand!%20" class="whatsapp-float" target="_blank" aria-label="Message CREATEBYMOH on WhatsApp" title="Chat on WhatsApp">
  <svg class="whatsapp-icon" viewBox="0 0 24 24">
    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.753-1.454L0 24zm6.59-4.846c1.6.95 3.197 1.45 4.817 1.45 5.426 0 9.843-4.382 9.846-9.768.001-2.607-1.011-5.059-2.85-6.902C16.623 2.091 14.167 1.07 11.56 1.07 6.138 1.07 1.719 5.453 1.717 10.841c0 1.696.444 3.349 1.284 4.817L1.93 21.17l5.836-1.516z M16.947 13.916c-.29-.146-1.72-.85-1.986-.948-.266-.098-.46-.146-.653.146-.193.292-.748.948-.917 1.141-.17.194-.339.219-.63.073-.29-.147-1.226-.453-2.337-1.444-.864-.771-1.447-1.724-1.617-2.016-.17-.29-.018-.448.128-.593.13-.13.29-.34.435-.51.145-.17.193-.29.29-.485.097-.194.048-.364-.025-.51-.072-.147-.653-1.577-.894-2.16-.235-.568-.475-.49-.653-.495-.17-.005-.363-.006-.556-.006-.193 0-.507.073-.772.364-.266.292-1.014.992-1.014 2.422 0 1.43 1.039 2.81 1.184 3.003.145.194 2.044 1.583 4.95 2.809.691.291 1.23.465 1.65.602.695.22 1.328.19 1.827.114.557-.084 1.72-.703 1.962-1.383.242-.68.242-1.262.17-1.382-.073-.12-.266-.194-.557-.341z" />
  </svg>
</a>

<!-- ---------- INTERACTIVE UGC PLAYER MODAL ---------- -->
<div id="ugc-modal" class="ugc-modal">
  <div class="ugc-modal-overlay"></div>
  <div class="ugc-modal-container">
    <button class="ugc-close-btn" aria-label="Close Player">&times;</button>
    <div class="ugc-phone">
      <div class="phone-island"></div>
      <div class="ugc-viewport">
        <video id="ugc-video-element" class="ugc-video-element" playsinline loop></video>
        <div class="ugc-play-overlay"><div class="ugc-play-icon"></div></div>
        <div class="ugc-top-bar">
          <div class="ugc-sim-time">9:41</div>
          <div class="ugc-sim-icons">
            <svg class="battery" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" style="width:16px; height:16px;"><rect x="2" y="7" width="14" height="10" rx="2"/><rect x="17" y="10" width="3" height="4" rx="1" fill="currentColor"/><rect x="4" y="9" width="8" height="6" fill="currentColor"/></svg>
          </div>
        </div>
        <div class="ugc-progress-container"><div class="ugc-progress-bar"></div></div>
        <div class="ugc-sidebar">
          <div class="ugc-action-btn" id="ugc-like-btn"><div class="heart-icon">❤️</div><span class="count" id="ugc-likes-count">14.2K</span></div>
          <div class="ugc-action-btn"><div class="comment-icon">💬</div><span class="count">248</span></div>
          <div class="ugc-action-btn"><div class="share-icon">🔗</div><span class="count">832</span></div>
          <div class="ugc-disc-container"><div class="ugc-disc">💿</div></div>
        </div>
        <div class="ugc-caption-panel">
          <div class="ugc-brand-handle">@createbymoh</div>
          <p class="ugc-caption-text">Designing premium sensory worlds in motion...</p>
          <div class="ugc-music-row">
            <span class="music-icon">🎵</span>
            <div class="music-text-container"><div class="music-text">Original Sound - CREATEBYMOH</div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
function toggleNicheInput(selectElement) {
  const otherGroup = document.getElementById('other-niche-group');
  if (selectElement.value === 'Other') {
    otherGroup.style.display = 'flex';
    document.getElementById('other-niche').required = true;
  } else {
    otherGroup.style.display = 'none';
    document.getElementById('other-niche').required = false;
  }
}

function handleBriefSubmit(e) {
  e.preventDefault();
  const brand = document.getElementById('brand-name').value;
  const email = document.getElementById('contact-email').value;
  let niche = document.getElementById('niche-type').value;
  if (niche === 'Other') {
    niche = document.getElementById('other-niche').value;
  }
  const style = document.getElementById('ad-style').value;
  const format = document.getElementById('format-type').value;
  const name = document.getElementById('perfume-name').value;
  const notes = document.getElementById('scent-notes').value;
  
  const subject = encodeURIComponent(`New Project Brief [${niche}] from ${brand}`);
  const body = encodeURIComponent(
    `Hi CREATEBYMOH,\n\n` +
    `I'm interested in a free custom ${style} for my brand.\n\n` +
    `--- Creative Brief Details ---\n` +
    `Brand Name: ${brand}\n` +
    `Contact Email: ${email}\n` +
    `Industry Niche: ${niche}\n` +
    `Targeted Ad Style: ${style}\n` +
    `Creative Format: ${format}\n` +
    `Product Name: ${name}\n` +
    `Material Notes: ${notes}\n\n` +
    `[IMPORTANT] Please attach 2-3 product photos to this email before hitting send!\n\n` +
    `Best regards,\n` +
    `${brand}`
  );
  
  window.location.href = `mailto:webwizardmarketingagency@gmail.com?subject=${subject}&body=${body}`;
  document.getElementById('perfume-brief-form').style.display = 'none';
  document.getElementById('form-success').style.display = 'block';
}

document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('ugc-modal');
  const overlay = modal.querySelector('.ugc-modal-overlay');
  const closeBtn = modal.querySelector('.ugc-close-btn');
  const phone = modal.querySelector('.ugc-phone');
  const viewport = modal.querySelector('.ugc-viewport');
  const videoElement = document.getElementById('ugc-video-element');
  const progressBar = modal.querySelector('.ugc-progress-bar');
  const captionText = modal.querySelector('.ugc-caption-text');
  const brandHandle = modal.querySelector('.ugc-brand-handle');
  const likeBtn = document.getElementById('ugc-like-btn');
  const likesCount = document.getElementById('ugc-likes-count');
  
  const samplesData = {
    'parfum-gomme': { handle: '@parfum_homme', caption: "Sunlit pool water ripples casting caustic glow frames onto aquatic bottle shots.", video: '<?php echo get_template_directory_uri(); ?>/videos/perfume/parfum-gomme.mp4', likes: '14.2K' },
    'sparda-amber': { handle: '@sparda_parfums', caption: "smoky sand explosion orbiting gold amber luxury bottle.", video: '<?php echo get_template_directory_uri(); ?>/videos/perfume/sparda-amber.mp4', likes: '18.9K' },
    'shirt-swap': { handle: '@streetwear_swap', caption: "Garment transition cut sequence designed for streetwear lookbooks.", video: '<?php echo get_template_directory_uri(); ?>/videos/streetwear/shirt-swap.mp4', likes: '22.4K' },
    'hoodie-lookbook': { handle: '@hoodie_labs', caption: "Tactile closeups highlighting premium relaxed heavyweight fleece fits.", video: '<?php echo get_template_directory_uri(); ?>/videos/streetwear/hoodie-lookbook.mp4', likes: '15.6K' },
    'gilded-chain': { handle: '@gilded_jewelers', caption: "Macro gold chain links panners reflecting detailed custom caustics.", video: '<?php echo get_template_directory_uri(); ?>/videos/jewelry/gilded-chain.mp4', likes: '12.8K' },
    'gold-ring': { handle: '@aurus_rings', caption: "Classic gold band panning shots reflecting warm geometric lighting.", video: '<?php echo get_template_directory_uri(); ?>/videos/jewelry/gold-ring.mp4', likes: '9.4K' }
  };
  
  let currentSample = null;
  
  function openPlayer(sampleKey) {
    const data = samplesData[sampleKey];
    if (!data) return;
    currentSample = sampleKey;
    brandHandle.textContent = data.handle;
    likesCount.textContent = data.likes;
    likeBtn.querySelector('.heart-icon').classList.remove('liked');
    modal.classList.add('active');
    phone.classList.remove('paused');
    phone.classList.add('playing');
    videoElement.src = data.video;
    videoElement.load();
    videoElement.muted = true;
    videoElement.play().catch(e => console.log('Autoplay blocked:', e));
  }
  
  function closePlayer() {
    modal.classList.remove('active');
    phone.classList.remove('playing', 'paused');
    videoElement.pause();
    videoElement.src = '';
  }
  
  function togglePlay() {
    if (videoElement.paused) {
      videoElement.play().catch(e => console.log(e));
      phone.classList.remove('paused');
      phone.classList.add('playing');
    } else {
      videoElement.pause();
      phone.classList.remove('playing');
      phone.classList.add('paused');
    }
  }
  
  videoElement.ontimeupdate = () => {
    if (!currentSample) return;
    const percentage = (videoElement.currentTime / (videoElement.duration || 13)) * 100;
    progressBar.style.width = `${Math.min(percentage, 100)}%`;
    captionText.textContent = samplesData[currentSample].caption;
  };
  
  document.querySelectorAll('[data-sample]').forEach(trigger => {
    trigger.addEventListener('click', (e) => {
      e.stopPropagation();
      openPlayer(trigger.getAttribute('data-sample'));
    });
  });
  
  viewport.addEventListener('click', (e) => {
    if (e.target.closest('.ugc-sidebar')) return;
    togglePlay();
  });
  
  likeBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    const heart = likeBtn.querySelector('.heart-icon');
    if (!heart.classList.contains('liked')) {
      heart.classList.add('liked');
      likesCount.textContent = (parseFloat(likesCount.textContent) + 0.1).toFixed(1) + 'K';
    }
  });
  
  closeBtn.addEventListener('click', closePlayer);
  overlay.addEventListener('click', closePlayer);
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closePlayer();
    if (e.key === ' ' && modal.classList.contains('active')) { e.preventDefault(); togglePlay(); }
  });
});
</script>

<?php wp_footer(); ?>
</body>
