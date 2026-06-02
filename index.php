<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Amz Official Site - Support</title>
<style>
  * { box-sizing: border-box; margin: 0; padding: 0; }
  html, body { height: 100%; }
  body {
    font-family: -apple-system, BlinkMacSystemFont, "SF Pro Display", "Segoe UI", Roboto, sans-serif;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 0;
  }
  .phone-frame {
    position: relative;
    width: 100vw;
    height: 100vh;
    overflow: hidden;
    background: #fff;
  }
  .bg-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top center;
    display: block;
  }
  .overlay {
    position: absolute;
    inset: 0;
    background: transparent;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 16px;
  }
  .call-popup {
    width: 100%;
    max-width: 320px;
    background: rgba(245, 245, 247, 0.95);
    backdrop-filter: blur(30px) saturate(180%);
    -webkit-backdrop-filter: blur(30px) saturate(180%);
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
    animation: popIn 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
  }
  @keyframes popIn {
    0% { transform: scale(0.85); opacity: 0; }
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

  /* Mobile small */
  @media (max-width: 380px) {
    .call-popup { max-width: 280px; }
  }

  /* Tablet — image fills entire viewport */
  @media (min-width: 600px) and (max-width: 1023px) {
    body { padding: 0; background: #fff; }
    .phone-frame {
      width: 100vw;
      height: 100vh;
      max-width: 100vw;
      max-height: 100vh;
      border-radius: 0;
      box-shadow: none;
      aspect-ratio: auto;
    }
    .bg-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: top center;
    }
    .call-popup { max-width: 460px; }
    .popup-message { font-size: 18px; }
    .caller-number { font-size: 18px; }
    .popup-buttons button,
    .popup-buttons a { font-size: 20px; padding: 18px 0; }
  }

  /* Laptop / desktop — image fills entire viewport */
  @media (min-width: 1024px) {
    body { padding: 0; background: #fff; }
    .phone-frame {
      width: 100vw;
      height: 100vh;
      max-width: 100vw;
      max-height: 100vh;
      border-radius: 0;
      box-shadow: none;
      aspect-ratio: auto;
    }
    .bg-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: top center;
    }
    .call-popup { max-width: 500px; }
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
    <img src="contact.jpeg" alt="background" class="bg-image" />
    <div class="overlay">
      <div class="call-popup" role="dialog" aria-modal="true">
        <div class="popup-header">
          <div class="popup-message">
            Your Amazon ID was recently used at the Amazon Store for a $568.41 transaction via Amazon Pay (Pre-Authorization). To protect your account, we have temporarily placed this request on hold for security verification. If you did not authorize this purchase, please contact Amazon Support immediately at +1-888-339-6614 to secure your account and stop unauthorized activity.
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
