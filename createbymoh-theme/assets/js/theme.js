// Interactive scripts for CREATEBYMOH Theme

// Form inputs and toggles
function toggleNicheInput(selectElement) {
  const otherGroup = document.getElementById('other-niche-group');
  if (!otherGroup) return;
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
  const name = document.getElementById('perfume-name') ? document.getElementById('perfume-name').value : '';
  const notes = document.getElementById('scent-notes') ? document.getElementById('scent-notes').value : '';
  
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
  const form = document.getElementById('perfume-brief-form');
  if (form) form.style.display = 'none';
  const successPanel = document.getElementById('form-success');
  if (successPanel) successPanel.style.display = 'block';
}

// Global scope availability
window.toggleNicheInput = toggleNicheInput;
window.handleBriefSubmit = handleBriefSubmit;

document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('ugc-modal');
  if (!modal) return;

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
  
  // Localized URL configuration
  const baseUrl = typeof createbymohTheme !== 'undefined' ? createbymohTheme.templateUrl : '';

  const samplesData = {
    'parfum-gomme': { handle: '@parfum_homme', caption: "Sunlit pool water ripples casting caustic glow frames onto aquatic bottle shots.", video: baseUrl + '/assets/videos/perfume/parfum-gomme.mp4', likes: '14.2K' },
    'sparda-amber': { handle: '@sparda_parfums', caption: "smoky sand explosion orbiting gold amber luxury bottle.", video: baseUrl + '/assets/videos/perfume/sparda-amber.mp4', likes: '18.9K' },
    'shirt-swap': { handle: '@streetwear_swap', caption: "Garment transition cut sequence designed for streetwear lookbooks.", video: baseUrl + '/assets/videos/streetwear/shirt-swap.mp4', likes: '22.4K' },
    'hoodie-lookbook': { handle: '@hoodie_labs', caption: "Tactile closeups highlighting premium relaxed heavyweight fleece fits.", video: baseUrl + '/assets/videos/streetwear/hoodie-lookbook.mp4', likes: '15.6K' },
    'gilded-chain': { handle: '@gilded_jewelers', caption: "Macro gold chain links panners reflecting detailed custom caustics.", video: baseUrl + '/assets/videos/jewelry/gilded-chain.mp4', likes: '12.8K' },
    'gold-ring': { handle: '@aurus_rings', caption: "Classic gold band panning shots reflecting warm geometric lighting.", video: baseUrl + '/assets/videos/jewelry/gold-ring.mp4', likes: '9.4K' }
  };
  
  let currentSample = null;
  
  function openPlayer(sampleKey) {
    const data = samplesData[sampleKey];
    if (!data) return;
    currentSample = sampleKey;
    brandHandle.textContent = data.handle;
    likesCount.textContent = data.likes;
    if (likeBtn) {
      const heart = likeBtn.querySelector('.heart-icon');
      if (heart) heart.classList.remove('liked');
    }
    modal.classList.add('active');
    if (phone) {
      phone.classList.remove('paused');
      phone.classList.add('playing');
    }
    videoElement.src = data.video;
    videoElement.load();
    videoElement.muted = true;
    videoElement.play().catch(e => console.log('Autoplay blocked:', e));
  }
  
  function closePlayer() {
    modal.classList.remove('active');
    if (phone) phone.classList.remove('playing', 'paused');
    videoElement.pause();
    videoElement.src = '';
  }
  
  function togglePlay() {
    if (videoElement.paused) {
      videoElement.play().catch(e => console.log(e));
      if (phone) {
        phone.classList.remove('paused');
        phone.classList.add('playing');
      }
    } else {
      videoElement.pause();
      if (phone) {
        phone.classList.remove('playing');
        phone.classList.add('paused');
      }
    }
  }
  
  videoElement.ontimeupdate = () => {
    if (!currentSample) return;
    const percentage = (videoElement.currentTime / (videoElement.duration || 13)) * 100;
    if (progressBar) progressBar.style.width = `${Math.min(percentage, 100)}%`;
    if (captionText) captionText.textContent = samplesData[currentSample].caption;
  };
  
  // Attach single global listener to support both data-sample and class triggers beautifully
  document.addEventListener('click', (e) => {
    const triggerData = e.target.closest('[data-sample]');
    if (triggerData) {
      e.stopPropagation();
      openPlayer(triggerData.getAttribute('data-sample'));
      return;
    }
    
    const triggerClass = e.target.closest('.campaign-card');
    if (triggerClass) {
      const sampleClass = Array.from(triggerClass.classList).find(c => c.startsWith('sample-'));
      if (sampleClass) {
        e.stopPropagation();
        const sampleKey = sampleClass.replace('sample-', '');
        openPlayer(sampleKey);
      }
    }
  });
  
  if (viewport) {
    viewport.addEventListener('click', (e) => {
      if (e.target.closest('.ugc-sidebar')) return;
      togglePlay();
    });
  }
  
  if (likeBtn) {
    likeBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      const heart = likeBtn.querySelector('.heart-icon');
      if (heart && !heart.classList.contains('liked')) {
        heart.classList.add('liked');
        likesCount.textContent = (parseFloat(likesCount.textContent) + 0.1).toFixed(1) + 'K';
      }
    });
  }
  
  if (closeBtn) closeBtn.addEventListener('click', closePlayer);
  if (overlay) overlay.addEventListener('click', closePlayer);
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closePlayer();
    if (e.key === ' ' && modal.classList.contains('active')) { e.preventDefault(); togglePlay(); }
  });
});
