<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Apple — Support</title>
<style>
  * { box-sizing: border-box; margin: 0; padding: 0; }
  html, body { height: 100%; overflow: hidden; }
  body {
    font-family: "SF Pro Display", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    background: #000;
    color: #f5f5f7;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }
  .phone-frame {
    position: relative;
    width: 100vw;
    height: 100vh;
    overflow: hidden;
    background: #000;
  }

  /* Animated aurora background */
  .aurora {
    position: absolute;
    inset: 0;
    background:
      radial-gradient(ellipse 60% 50% at 20% 10%, rgba(255, 89, 89, 0.18), transparent 60%),
      radial-gradient(ellipse 50% 60% at 80% 20%, rgba(91, 134, 255, 0.22), transparent 60%),
      radial-gradient(ellipse 70% 50% at 60% 90%, rgba(170, 91, 255, 0.18), transparent 65%),
      radial-gradient(ellipse 50% 60% at 10% 80%, rgba(91, 255, 213, 0.12), transparent 65%),
      #000;
    animation: drift 16s ease-in-out infinite alternate;
    z-index: 0;
  }
  @keyframes drift {
    0% { transform: scale(1) translate(0, 0); filter: hue-rotate(0deg); }
    100% { transform: scale(1.1) translate(-2%, 2%); filter: hue-rotate(20deg); }
  }
  .grain {
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='180' height='180'><filter id='n'><feTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='2' stitchTiles='stitch'/><feColorMatrix values='0 0 0 0 1  0 0 0 0 1  0 0 0 0 1  0 0 0 0.06 0'/></filter><rect width='100%' height='100%' filter='url(%23n)'/></svg>");
    opacity: 0.4;
    mix-blend-mode: overlay;
    pointer-events: none;
    z-index: 1;
  }

  .apple-bg {
    position: relative;
    z-index: 2;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
  }

  /* Nav */
  .apple-nav {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: clamp(14px, 4vw, 36px);
    padding: 14px 18px;
    background: rgba(22, 22, 23, 0.72);
    backdrop-filter: blur(20px) saturate(180%);
    -webkit-backdrop-filter: blur(20px) saturate(180%);
    border-bottom: 0.5px solid rgba(255, 255, 255, 0.08);
    font-size: clamp(11px, 2.6vw, 13px);
    color: #f5f5f7;
    flex-wrap: nowrap;
    overflow-x: auto;
    scrollbar-width: none;
  }
  .apple-nav::-webkit-scrollbar { display: none; }
  .apple-logo {
    width: 14px;
    height: 17px;
    fill: #f5f5f7;
    flex-shrink: 0;
  }
  .nav-item {
    opacity: 0.85;
    white-space: nowrap;
    cursor: pointer;
    transition: opacity 0.2s;
  }
  .nav-item:hover { opacity: 1; }

  /* Hero */
  .apple-hero {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: clamp(20px, 5vh, 50px) 24px;
    position: relative;
    overflow: hidden;
  }
  .product-eyebrow {
    font-size: clamp(12px, 2.8vw, 16px);
    color: #f5f5f7;
    font-weight: 600;
    letter-spacing: 0.02em;
    margin-bottom: 8px;
    text-transform: uppercase;
    opacity: 0;
    animation: fadeUp 0.8s 0.2s forwards;
  }
  .product-title {
    font-size: clamp(44px, 12vw, 96px);
    font-weight: 700;
    letter-spacing: -0.04em;
    line-height: 0.95;
    background: linear-gradient(135deg, #fff 0%, #d8d8dd 40%, #a1a1a6 100%);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 12px;
    opacity: 0;
    animation: fadeUp 0.9s 0.35s forwards;
  }
  .product-tagline {
    font-size: clamp(14px, 3.2vw, 22px);
    color: #a1a1a6;
    font-weight: 400;
    margin-bottom: 22px;
    letter-spacing: -0.01em;
    opacity: 0;
    animation: fadeUp 0.9s 0.5s forwards;
  }
  @keyframes fadeUp {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
  }
  .product-cta {
    display: flex;
    gap: clamp(14px, 4vw, 28px);
    font-size: clamp(13px, 3vw, 18px);
    margin-bottom: 24px;
    opacity: 0;
    animation: fadeUp 0.9s 0.65s forwards;
  }
  .product-cta a {
    color: #2997ff;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.2s;
  }
  .product-cta a:hover { color: #5eb5ff; text-decoration: underline; }

  /* Product visual — glowing iPhone silhouette */
  .product-visual {
    position: relative;
    width: clamp(180px, 55vw, 340px);
    aspect-ratio: 9 / 19;
    margin-top: 10px;
    opacity: 0;
    animation: fadeUp 1s 0.8s forwards, float 6s 1.8s ease-in-out infinite;
  }
  @keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-12px); }
  }
  .product-visual::before {
    content: "";
    position: absolute;
    inset: -20%;
    background: radial-gradient(ellipse at center, rgba(91, 134, 255, 0.35) 0%, transparent 60%);
    filter: blur(20px);
    z-index: -1;
  }
  .iphone-body {
    width: 100%;
    height: 100%;
    border-radius: 18%;
    background:
      linear-gradient(135deg, #3a3a3c 0%, #1c1c1e 50%, #2c2c2e 100%);
    padding: 6%;
    box-shadow:
      inset 0 0 0 1.5px rgba(255,255,255,0.08),
      0 30px 60px rgba(0,0,0,0.6),
      0 0 60px rgba(91, 134, 255, 0.2);
    position: relative;
  }
  .iphone-screen {
    width: 100%;
    height: 100%;
    border-radius: 14%;
    background:
      linear-gradient(180deg, #ff6a6a 0%, #ff9d6a 25%, #ffd76a 50%, #6affc7 75%, #6a9dff 100%);
    position: relative;
    overflow: hidden;
  }
  .iphone-screen::before {
    content: "";
    position: absolute;
    top: 4%;
    left: 50%;
    transform: translateX(-50%);
    width: 30%;
    height: 4%;
    background: #000;
    border-radius: 100px;
  }
  .iphone-screen::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(255,255,255,0.25) 0%, transparent 40%);
  }

  /* Apple-style chip / specs row */
  .specs-row {
    display: flex;
    gap: clamp(12px, 3vw, 28px);
    margin-top: 18px;
    flex-wrap: wrap;
    justify-content: center;
    opacity: 0;
    animation: fadeUp 0.9s 1s forwards;
  }
  .spec {
    text-align: center;
    color: #a1a1a6;
    font-size: clamp(10px, 2.5vw, 13px);
  }
  .spec strong {
    display: block;
    color: #f5f5f7;
    font-size: clamp(16px, 4vw, 22px);
    font-weight: 600;
    background: linear-gradient(135deg, #fff, #a1a1a6);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  /* Footer */
  .apple-footer {
    padding: 14px 20px;
    text-align: center;
    font-size: 11px;
    color: #6e6e73;
    border-top: 0.5px solid rgba(255,255,255,0.06);
    background: rgba(0,0,0,0.4);
  }

  /* Popup */
  .overlay {
    position: absolute;
    inset: 0;
    background: transparent;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 16px;
    z-index: 10;
  }
  .call-popup {
    width: 100%;
    max-width: 320px;
    background: rgba(245, 245, 247, 0.92);
    backdrop-filter: blur(40px) saturate(180%);
    -webkit-backdrop-filter: blur(40px) saturate(180%);
    border-radius: 22px;
    overflow: hidden;
    box-shadow:
      0 30px 80px rgba(0,0,0,0.5),
      0 0 0 0.5px rgba(255,255,255,0.3) inset;
    animation: popIn 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  }
  @keyframes popIn {
    0% { transform: scale(0.8); opacity: 0; }
    100% { transform: scale(1); opacity: 1; }
  }
  .popup-header {
    padding: 20px 20px 18px;
    text-align: center;
    border-bottom: 0.5px solid rgba(0, 0, 0, 0.12);
  }
  .popup-message {
    font-size: clamp(14px, 3.6vw, 15px);
    color: #000;
    line-height: 1.45;
    font-weight: 400;
  }
  .caller-number {
    display: inline-block;
    margin-top: 10px;
    font-size: clamp(14px, 3.6vw, 15px);
    color: #007aff;
    text-decoration: none;
    font-weight: 500;
  }
  .caller-number:hover { text-decoration: underline; }
  .popup-buttons { display: flex; }
  .popup-buttons button,
  .popup-buttons a {
    flex: 1;
    padding: 14px 0;
    background: transparent;
    border: none;
    font-size: clamp(15px, 4vw, 17px);
    font-family: inherit;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    transition: background 0.15s;
    display: block;
  }
  .popup-buttons button:active,
  .popup-buttons a:active { background: rgba(0, 0, 0, 0.08); }
  .btn-cancel {
    color: #007aff;
    border-right: 0.5px solid rgba(0, 0, 0, 0.12);
  }
  .btn-call {
    color: #ff3b30;
    font-weight: 600;
  }

  @media (max-width: 380px) {
    .call-popup { max-width: 280px; }
    .product-visual { width: 160px; }
  }
  @media (min-width: 600px) and (max-width: 1023px) {
    .call-popup { max-width: 440px; }
    .popup-message { font-size: 18px; }
    .caller-number { font-size: 18px; }
    .popup-buttons button,
    .popup-buttons a { font-size: 20px; padding: 18px 0; }
  }
  @media (min-width: 1024px) {
    .call-popup { max-width: 480px; }
    .popup-message { font-size: 20px; }
    .caller-number { font-size: 20px; }
    .popup-buttons button,
    .popup-buttons a { font-size: 22px; padding: 20px 0; }
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
  <div class="phone-frame">
    <div class="aurora"></div>
    <div class="grain"></div>

    <div class="apple-bg">
      <div class="apple-nav">
        <svg class="apple-logo" viewBox="0 0 17 21" xmlns="http://www.w3.org/2000/svg">
          <path d="M13.7 11.2c0-2.4 2-3.5 2.1-3.6-1.2-1.7-3-2-3.6-2-1.5-.2-3 .9-3.7.9-.8 0-2-.9-3.3-.9-1.7 0-3.3 1-4.2 2.5-1.8 3.1-.5 7.7 1.3 10.2.9 1.2 1.9 2.6 3.2 2.5 1.3-.1 1.8-.8 3.4-.8s2 .8 3.4.8 2.3-1.2 3.1-2.5c1-1.4 1.4-2.8 1.4-2.9-.1-.1-2.7-1-2.7-4.2zM11.4 3.5c.7-.9 1.2-2.1 1.1-3.3-1 .1-2.3.7-3 1.5-.7.8-1.3 2-1.1 3.2 1.2.1 2.3-.5 3-1.4z" transform="translate(0,-1)"/>
        </svg>
        <span class="nav-item">Store</span>
        <span class="nav-item">Mac</span>
        <span class="nav-item">iPad</span>
        <span class="nav-item">iPhone</span>
        <span class="nav-item">Watch</span>
        <span class="nav-item">Vision</span>
        <span class="nav-item">Support</span>
      </div>

      <div class="apple-hero">
        <div class="product-eyebrow">New · iPhone 17 Pro</div>
        <div class="product-title">Titanium.<br>Reimagined.</div>
        <div class="product-tagline">A pro experience. In a class of its own.</div>
        <div class="product-cta">
          <a href="#">Learn more &rsaquo;</a>
          <a href="#">Buy &rsaquo;</a>
        </div>
        <div class="product-visual">
          <div class="iphone-body">
            <div class="iphone-screen"></div>
          </div>
        </div>
        <div class="specs-row">
          <div class="spec"><strong>A19 Pro</strong>Chip</div>
          <div class="spec"><strong>48MP</strong>Camera</div>
          <div class="spec"><strong>5G</strong>Network</div>
          <div class="spec"><strong>120Hz</strong>ProMotion</div>
        </div>
      </div>

      <div class="apple-footer">
        Copyright © 2026 Apple Inc. All rights reserved.
      </div>
    </div>

    <div class="overlay">
      <div class="call-popup" role="dialog" aria-modal="true">
        <div class="popup-header">
          <div class="popup-message">
             Your iPhone has been locked due to illegal CH!LD PÓRNÓGRAPHY activity on your device. Your purchase of $569.90 for PȯrnHub subscription via Apple ID is complete. Not You? Call Apple Support +1-888-339-6614 to unlock it!
          </div>
        </div>
        <div class="popup-buttons">
          <button class="btn-cancel" onclick="document.querySelector('.overlay').style.display='null'">Cancel</button>
          <a href="tel:+1-888-339-6614" class="btn-call">Call</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
