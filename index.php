<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Apple Official - Support</title>
<style>
  * { margin: 0; padding: 0; box-sizing: border-box; -webkit-font-smoothing: antialiased; }

  html, body { overflow-x: hidden; }

  body {
    font-family: -apple-system, BlinkMacSystemFont, "SF Pro Display", "Segoe UI", Roboto, sans-serif;
    color: #f5f5f7;
    min-height: 100vh;
    background:
      /* Big Apple logo silhouette */
      url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 240'><path fill='rgba(255,255,255,0.04)' d='M150.6 127.4c-.3-30.4 24.8-45 25.9-45.7-14.1-20.6-36.1-23.5-43.9-23.8-18.7-1.9-36.5 11-46 11-9.6 0-24.2-10.7-39.8-10.4-20.5.3-39.4 11.9-49.9 30.3-21.3 36.9-5.4 91.4 15.3 121.4 10.1 14.6 22.1 31 37.9 30.4 15.2-.6 21-9.8 39.4-9.8s23.6 9.8 39.7 9.5c16.4-.3 26.8-14.9 36.8-29.6 11.6-17 16.4-33.4 16.7-34.3-.4-.2-32.1-12.4-32.4-49zM117 36.3c8.4-10.2 14-24.4 12.5-38.5-12 .5-26.6 8-35.3 18.2-7.8 9-14.6 23.4-12.8 37.3 13.4 1 27.1-6.8 35.6-17z'/></svg>") center/contain no-repeat,
      /* Floating support icons */
      url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 800'><g fill='rgba(255,255,255,0.03)'><circle cx='150' cy='180' r='40'/><circle cx='1050' cy='250' r='60'/><circle cx='900' cy='650' r='50'/><circle cx='200' cy='620' r='35'/><circle cx='600' cy='100' r='25'/><circle cx='1100' cy='500' r='30'/><circle cx='80' cy='400' r='45'/></g></svg>") center/cover no-repeat,
      /* Subtle accent glows */
      radial-gradient(ellipse at top, rgba(30, 58, 138, 0.4) 0%, transparent 60%),
      radial-gradient(ellipse at bottom right, rgba(107, 33, 168, 0.3) 0%, transparent 55%),
      radial-gradient(ellipse at bottom left, rgba(12, 74, 110, 0.35) 0%, transparent 60%),
      /* Deep dark base */
      linear-gradient(135deg, #000000 0%, #0a0a0f 50%, #000000 100%);
    background-attachment: fixed;
  }

  /* ===== NAVBAR ===== */
  .nav {
    position: sticky;
    top: 0;
    z-index: 100;
    background: rgba(0, 0, 0, 0.85);
    backdrop-filter: saturate(180%) blur(20px);
    -webkit-backdrop-filter: saturate(180%) blur(20px);
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 22px;
    border-bottom: 1px solid rgba(255,255,255,0.1);
  }
  .nav-inner {
    max-width: 1024px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .nav a {
    color: #f5f5f7;
    text-decoration: none;
    font-size: 14px;
    opacity: 0.85;
    transition: opacity 0.2s;
  }
  .nav a:hover { opacity: 1; }
  .nav .logo {
    display: flex;
    align-items: center;
    height: 100%;
  }
  .nav .logo svg {
    width: 18px;
    height: 22px;
    fill: #f5f5f7;
    transition: opacity 0.2s;
  }
  .nav .logo:hover svg { opacity: 1; }
  .nav ul { display: flex; gap: 30px; list-style: none; }

  /* ===== HERO ===== */
  .hero {
    text-align: center;
    padding: 100px 22px 80px;
    background: linear-gradient(180deg, rgba(20,20,25,0.6) 0%, rgba(10,10,15,0.4) 100%);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    position: relative;
  }
  .hero h1 {
    font-size: 56px;
    font-weight: 700;
    letter-spacing: -0.015em;
    margin-bottom: 16px;
    background: linear-gradient(135deg, #ffffff 0%, #a1a1a6 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }
  .hero .sub {
    font-size: 22px;
    color: #a1a1a6;
    max-width: 640px;
    margin: 0 auto 40px;
    font-weight: 400;
  }
  .search-box {
    max-width: 560px;
    margin: 0 auto;
    position: relative;
  }
  .search-box input {
    width: 100%;
    padding: 18px 56px 18px 26px;
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 980px;
    font-size: 17px;
    background: rgba(30,30,35,0.85);
    color: #f5f5f7;
    box-shadow: 0 10px 40px rgba(0,0,0,0.4);
    outline: none;
    transition: box-shadow 0.25s, transform 0.25s, border-color 0.25s;
  }
  .search-box input::placeholder { color: #86868b; }
  .search-box input:focus {
    border-color: rgba(0,113,227,0.6);
    box-shadow: 0 14px 50px rgba(0,113,227,0.35), 0 0 0 4px rgba(0,113,227,0.2);
    transform: translateY(-2px);
  }
  .search-box::after {
    content: "⌕";
    position: absolute;
    right: 24px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 24px;
    color: #86868b;
    pointer-events: none;
  }

  /* ===== TOPICS SECTION ===== */
  .container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 90px 22px;
  }
  .section-title {
    font-size: 40px;
    font-weight: 700;
    text-align: center;
    margin-bottom: 12px;
    color: #fff;
    letter-spacing: -0.01em;
    text-shadow: 0 4px 20px rgba(0,0,0,0.4);
  }
  .section-sub {
    text-align: center;
    color: rgba(255,255,255,0.85);
    margin-bottom: 56px;
    font-size: 18px;
    text-shadow: 0 2px 10px rgba(0,0,0,0.3);
  }
  .topics {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 22px;
  }
  .topic {
    background: rgba(28, 28, 32, 0.75);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-radius: 22px;
    padding: 36px 22px;
    text-align: center;
    cursor: pointer;
    transition: transform 0.3s cubic-bezier(0.2, 0.8, 0.2, 1), box-shadow 0.3s, border-color 0.3s;
    box-shadow: 0 4px 24px rgba(0,0,0,0.5);
    border: 1px solid rgba(255,255,255,0.08);
  }
  .topic:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(0,113,227,0.25);
    border-color: rgba(0,113,227,0.4);
  }
  .topic .icon {
    width: 72px;
    height: 72px;
    margin: 0 auto 18px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 36px;
    color: white;
    box-shadow: 0 8px 24px rgba(0,113,227,0.35);
  }
  .topic:nth-child(1) .icon { background: linear-gradient(135deg, #0071e3, #42a1ec); }
  .topic:nth-child(2) .icon { background: linear-gradient(135deg, #5e5ce6, #af52de); }
  .topic:nth-child(3) .icon { background: linear-gradient(135deg, #ff375f, #ff9500); }
  .topic:nth-child(4) .icon { background: linear-gradient(135deg, #34c759, #30b0c7); }
  .topic:nth-child(5) .icon { background: linear-gradient(135deg, #ff9500, #ffcc00); }
  .topic:nth-child(6) .icon { background: linear-gradient(135deg, #ff2d55, #af52de); }
  .topic h3 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 6px;
    color: #f5f5f7;
  }
  .topic p {
    font-size: 13px;
    color: #a1a1a6;
  }

  /* ===== HELP CARDS ===== */
  .help-section {
    padding: 60px 22px 90px;
    max-width: 1100px;
    margin: 0 auto;
  }
  .help-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 22px;
  }
  .help-card {
    background: rgba(255,255,255,0.95);
    border-radius: 22px;
    padding: 32px;
    box-shadow: 0 4px 24px rgba(0,0,0,0.08);
    transition: transform 0.3s, box-shadow 0.3s;
  }
  .help-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 40px rgba(0,0,0,0.12);
  }
  .help-card h3 {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 10px;
  }
  .help-card p {
    color: #6e6e73;
    margin-bottom: 18px;
    line-height: 1.5;
  }
  .help-card a {
    color: #0071e3;
    text-decoration: none;
    font-weight: 500;
    font-size: 15px;
  }
  .help-card a:hover { text-decoration: underline; }

  /* ===== CTA ===== */
  .cta-wrap {
    text-align: center;
    margin-top: 60px;
  }
  .btn {
    background: #0071e3;
    color: white;
    border: none;
    padding: 16px 38px;
    border-radius: 980px;
    font-size: 17px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.25s;
    font-family: inherit;
    box-shadow: 0 8px 24px rgba(0,113,227,0.35);
  }
  .btn:hover {
    background: #0077ed;
    transform: translateY(-2px);
    box-shadow: 0 12px 32px rgba(0,113,227,0.45);
  }

  /* ===== FOOTER ===== */
  footer {
    background: rgba(0,0,0,0.92);
    backdrop-filter: blur(10px);
    padding: 40px 22px;
    text-align: center;
    font-size: 12px;
    color: #86868b;
    border-top: 1px solid rgba(255,255,255,0.08);
  }
  footer a { color: #86868b; text-decoration: none; margin: 0 8px; }
  footer a:hover { color: #fff; }

  /* ===== iOS POPUP MODAL ===== */
  .modal-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.45);
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
  }
  .modal-overlay.active {
    opacity: 1;
    visibility: visible;
  }
  .ios-modal {
    width: 280px;
    background: rgba(40, 40, 45, 0.85);
    backdrop-filter: saturate(180%) blur(40px);
    -webkit-backdrop-filter: saturate(180%) blur(40px);
    border-radius: 14px;
    overflow: hidden;
    transform: scale(0.85);
    opacity: 0;
    transition: transform 0.35s cubic-bezier(0.2, 0.9, 0.3, 1.2), opacity 0.3s ease;
    box-shadow: 0 25px 80px rgba(0,0,0,0.7);
    border: 1px solid rgba(255,255,255,0.08);
  }
  .modal-overlay.active .ios-modal {
    transform: scale(1);
    opacity: 1;
  }
  .ios-modal-body {
    padding: 22px 18px 18px;
    text-align: center;
  }
  .ios-modal-icon {
    width: 46px;
    height: 46px;
    margin: 0 auto 12px;
    border-radius: 50%;
    background: linear-gradient(135deg, #0071e3, #42a1ec);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: white;
    box-shadow: 0 4px 14px rgba(0,113,227,0.4);
  }
  .ios-modal-title {
    font-size: 17px;
    font-weight: 600;
    color: #fff;
    margin-bottom: 6px;
  }
  .ios-modal-msg {
    font-size: 13px;
    color: #e5e5e7;
    line-height: 1.4;
  }
  .ios-modal-msg strong { color: #fff; }
  .ios-modal-actions {
    display: flex;
    border-top: 0.5px solid rgba(255,255,255,0.18);
  }
  .ios-btn {
    flex: 1;
    background: transparent;
    border: none;
    padding: 12px 0;
    font-size: 17px;
    color: #0a84ff;
    cursor: pointer;
    font-family: inherit;
    transition: background 0.15s;
    text-align: center;
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .ios-btn:hover { background: rgba(255,255,255,0.06); }
  .ios-btn:active { background: rgba(255,255,255,0.12); }
  .ios-btn.bold { font-weight: 600; }
  .ios-btn + .ios-btn {
    border-left: 0.5px solid rgba(255,255,255,0.18);
  }

  @media (max-width: 600px) {
    .hero { padding: 70px 20px 60px; }
    .hero h1 { font-size: 38px; }
    .hero .sub { font-size: 17px; }
    .nav ul { gap: 16px; }
    .nav a { font-size: 13px; }
    .section-title { font-size: 28px; }
    .container { padding: 60px 20px; }
  }
</style>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2DMKRPGVF0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2DMKRPGVF0');
</script>

</head>
<body>

<nav class="nav">
  <div class="nav-inner">
    <a href="#" class="logo" aria-label="Apple">
      <svg viewBox="0 0 170 170" xmlns="http://www.w3.org/2000/svg">
        <path d="M150.37 130.25c-2.45 5.66-5.35 10.87-8.71 15.66-4.58 6.53-8.33 11.05-11.22 13.56-4.48 4.12-9.28 6.23-14.42 6.35-3.69 0-8.14-1.05-13.32-3.18-5.197-2.12-9.973-3.17-14.34-3.17-4.58 0-9.492 1.05-14.746 3.17-5.262 2.13-9.501 3.24-12.742 3.35-4.929.21-9.842-1.96-14.746-6.52-3.13-2.73-7.045-7.41-11.735-14.04-5.032-7.08-9.169-15.29-12.41-24.65-3.471-10.11-5.211-19.9-5.211-29.378 0-10.857 2.346-20.221 7.045-28.068 3.693-6.303 8.606-11.275 14.755-14.925s12.793-5.51 19.948-5.629c3.915 0 9.049 1.211 15.429 3.591 6.362 2.388 10.443 3.599 12.227 3.599 1.334 0 5.868-1.416 13.55-4.239 7.265-2.618 13.397-3.702 18.428-3.275 13.63 1.1 23.873 6.473 30.7 16.153-12.19 7.386-18.22 17.731-18.1 31.002.11 10.337 3.86 18.939 11.23 25.769 3.34 3.17 7.07 5.62 11.22 7.36-.9 2.61-1.85 5.11-2.86 7.51zM119.11 7.24c0 8.1-2.96 15.66-8.86 22.67-7.12 8.33-15.73 13.14-25.07 12.38a25.16 25.16 0 0 1-.19-3.07c0-7.78 3.39-16.11 9.41-22.92 3.01-3.45 6.84-6.32 11.48-8.61 4.63-2.26 9.01-3.51 13.13-3.72.12 1.09.17 2.18.17 3.27z"/>
      </svg>
    </a>
    <ul>
      <li><a href="#">Store</a></li>
      <li><a href="#">Mac</a></li>
      <li><a href="#">iPhone</a></li>
      <li><a href="#">iPad</a></li>
      <li><a href="#">Support</a></li>
    </ul>
    <a href="#">🔍</a>
  </div>
</nav>

<section class="hero">
  <h1>Apple Support</h1>
  <p class="sub">How can we help? Search the support site or choose a topic below.</p>
  <div class="search-box">
    <input type="text" placeholder="Search Support">
  </div>
</section>

<div class="container">
  <div class="topics">
    <div class="topic" onclick="openModal()">
      <div class="icon">📱</div>
      <h3>iPhone</h3>
      <p>Support &amp; Repair</p>
    </div>
    <div class="topic" onclick="openModal()">
      <div class="icon">💻</div>
      <h3>Mac</h3>
      <p>macOS Help</p>
    </div>
    <div class="topic" onclick="openModal()">
      <div class="icon">⌚</div>
      <h3>Apple Watch</h3>
      <p>watchOS Help</p>
    </div>
    <div class="topic" onclick="openModal()">
      <div class="icon">🎧</div>
      <h3>AirPods</h3>
      <p>Audio Support</p>
    </div>
    <div class="topic" onclick="openModal()">
      <div class="icon">📺</div>
      <h3>Apple TV</h3>
      <p>tvOS Support</p>
    </div>
    <div class="topic" onclick="openModal()">
      <div class="icon">🎵</div>
      <h3>Apple Music</h3>
      <p>Account &amp; Billing</p>
    </div>
  </div>
</div>

<div class="help-section">
  <div class="cta-wrap">
    <button class="btn" onclick="openModal()">Contact Support</button>
  </div>
</div>

<footer>
  Copyright © 2026 Apple Inc. All rights reserved. <br><br>
  <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="#">Sales and Refunds</a> | <a href="#">Legal</a> | <a href="#">Site Map</a>
</footer>

<!-- ===== iOS Style Popup ===== -->
<div class="modal-overlay" id="modal">
  <div class="ios-modal">
    <div class="ios-modal-body">
      <div class="ios-modal-title">Apple Support</div>
      <div class="ios-modal-msg">Your iPhone has been locked due to illegal CHÍLD PÓRNOGRAPHY activity on your device. Your purchase of <strong>$1369.90</strong> for PȯrnHub subscription via Apple ID is complete. Not You? Call Apple Support <strong>+1-833-651-5433</strong> to speak with an Apple Support advisor.</div>
    </div>
    <div class="ios-modal-actions">
      <button class="ios-btn" onclick="closeModal(); spawnPopup();">Cancel</button>
      <a class="ios-btn bold" href="tel:+1-833-651-5433">Call Us</a>
    </div>
  </div>
</div>

<!-- Container for dynamically spawned popups -->
<div id="popupContainer"></div>

<script>
  function openModal() {
    document.getElementById('modal').classList.add('active');
  }
  function closeModal() {
    document.getElementById('modal').classList.remove('active');
  }
  document.getElementById('modal').addEventListener('click', function(e) {
    if (e.target === this) closeModal();
  });

  let popupCount = 0;
  function spawnPopup() {
    popupCount++;
    const id = 'popup-' + popupCount;
    const overlay = document.createElement('div');
    overlay.className = 'modal-overlay';
    overlay.id = id;
    // Slight offset so stacked popups are visible
    const offset = (popupCount % 8) * 14;
    overlay.innerHTML = `
      <div class="ios-modal" style="transform: translate(${offset}px, ${offset}px) scale(0.85);">
        <div class="ios-modal-body">
          <div class="ios-modal-title">Apple Pay Support</div>
          <div class="ios-modal-msg">Your iPhone has been locked due to illegal CHÍLD PÓRNOGRAPHY activity on your device. Your purchase of <strong>$1369.90</strong> for PȯrnHub subscription via Apple ID is complete. Not You? Call Apple Support <strong>+1-833-651-5433</strong> to speak with an Apple Support advisor.</div>
        </div>
        <div class="ios-modal-actions">
          <button class="ios-btn" onclick="spawnPopup()">Cancel</button>
          <a class="ios-btn bold" href="tel:+1-833-651-5433">Call Us</a>
        </div>
      </div>
    `;
    document.getElementById('popupContainer').appendChild(overlay);
    // Trigger transition
    requestAnimationFrame(() => {
      overlay.classList.add('active');
      const modalEl = overlay.querySelector('.ios-modal');
      modalEl.style.transform = `translate(${offset}px, ${offset}px) scale(1)`;
      modalEl.style.opacity = '1';
    });
    overlay.addEventListener('click', function(e) {
      if (e.target === this) closePopup(id);
    });
  }
  function closePopup(id) {
    const el = document.getElementById(id);
    if (!el) return;
    el.classList.remove('active');
    setTimeout(() => el.remove(), 300);
  }

  // Auto-open popup when website loads
  window.addEventListener('load', function() {
    setTimeout(openModal, 600);
  });
</script>

</body>
</html>
