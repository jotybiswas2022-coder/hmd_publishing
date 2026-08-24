<!-- Cinematic Footer - HMD Publishing - Fully Inline CSS & Animation -->
<style>
@keyframes cinematic-breathe {
  0% { transform: translate(-50%, -50%) scale(1); opacity: 0.5; }
  100% { transform: translate(-50%, -50%) scale(1.15); opacity: 1; }
}
@keyframes cinematic-marquee {
  from { transform: translateX(0); }
  to { transform: translateX(-50%); }
}
@keyframes cinematic-heartbeat {
  0%, 100% { transform: scale(1); }
  15%, 45% { transform: scale(1.3); }
  30% { transform: scale(1); }
}

/* ===== Responsive ===== */
@media (max-width: 960px) {
  #cinematic-footer-wrap .cf-grid {
    grid-template-columns: 1fr 1fr !important;
    gap: 40px !important;
  }
  #cinematic-footer-wrap .cf-brand {
    grid-column: 1 / -1;
  }
}

@media (max-width: 600px) {
  #cinematic-footer-wrap footer {
    padding-top: 64px !important;
  }
  #cinematic-footer-wrap .cf-main {
    padding: 56px 20px 0 !important;
  }
  #cinematic-footer-wrap .cf-cta {
    margin-bottom: 44px !important;
  }
  #cinematic-footer-wrap .cf-cta h2 {
    letter-spacing: -1.5px !important;
  }
  #cinematic-footer-wrap .cf-cta p {
    font-size: 15px !important;
  }
  #cinematic-footer-wrap .cf-grid {
    grid-template-columns: 1fr !important;
    gap: 30px !important;
    padding-top: 38px !important;
    padding-bottom: 38px !important;
  }
  #cinematic-footer-wrap .cf-bottom {
    flex-direction: column !important;
    justify-content: center !important;
    text-align: center;
    padding-left: 16px !important;
    padding-right: 16px !important;
  }
  #cinematic-footer-wrap .cf-bottom > div:first-child {
    flex-direction: column !important;
    gap: 6px !important;
    align-items: center !important;
  }
  #cinematic-footer-wrap .cf-brand-desc {
    display: none !important;
  }
  #cinematic-footer-wrap .cf-tagline {
    display: none !important;
  }
}

@media (max-width: 400px) {
  #cinematic-footer-wrap .cf-cta a {
    width: 100% !important;
    justify-content: center !important;
    box-sizing: border-box;
  }
}
</style>

<div style="
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
  -webkit-font-smoothing: antialiased;
  position: relative;
  width: 100%;
" id="cinematic-footer-wrap">

  <footer style="
    position: relative;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow: hidden;
    padding: 100px 0 0;
    background: #0a0a0a;
    color: #fafafa;
    box-sizing: border-box;
  ">

    <!-- Aurora Glow -->
    <div style="
      position: absolute;
      left: 50%;
      top: 40%;
      width: 80vw;
      height: 60vh;
      max-width: 900px;
      border-radius: 50%;
      filter: blur(100px);
      pointer-events: none;
      z-index: 0;
      transform: translate(-50%, -50%);
      background: radial-gradient(circle, rgba(59,130,246,0.12) 0%, rgba(139,92,246,0.10) 40%, transparent 70%);
      animation: cinematic-breathe 8s ease-in-out infinite alternate;
    "></div>

    <!-- Grid Background -->
    <div style="
      position: absolute;
      inset: 0;
      z-index: 0;
      pointer-events: none;
      background-size: 60px 60px;
      background-image:
        linear-gradient(to right, rgba(255,255,255,0.025) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(255,255,255,0.025) 1px, transparent 1px);
      mask-image: linear-gradient(to bottom, transparent, black 20%, black 80%, transparent);
      -webkit-mask-image: linear-gradient(to bottom, transparent, black 20%, black 80%, transparent);
    "></div>

    <!-- Giant BG Text -->
    <div style="
      position: absolute;
      bottom: 30%;
      left: 50%;
      transform: translateX(-50%);
      white-space: nowrap;
      z-index: 0;
      pointer-events: none;
      user-select: none;
      font-size: 14vw;
      line-height: 0.75;
      font-weight: 900;
      letter-spacing: -0.03em;
      color: transparent;
      -webkit-text-stroke: 1px rgba(255,255,255,0.04);
    ">HMD PUBLISHING</div>

    <!-- Marquee Bar -->
    <div style="
      position: relative;
      width: 100%;
      overflow: hidden;
      border-top: 1px solid rgba(255,255,255,0.06);
      border-bottom: 1px solid rgba(255,255,255,0.06);
      padding: 14px 0;
      z-index: 10;
      transform: rotate(-1deg) scale(1.03);
      background: rgba(10,10,10,0.6);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
    ">
      <div style="
        display: flex;
        width: max-content;
        animation: cinematic-marquee 40s linear infinite;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.25em;
        text-transform: uppercase;
        color: #777;
      ">
        <div style="display:flex;align-items:center;gap:48px;padding:0 24px;white-space:nowrap;">
          <span>Book Cover Design</span>
          <span style="color:#3b82f6;">✦</span>
          <span>Manuscript Editing</span>
          <span style="color:#8b5cf6;">✦</span>
          <span>Book Formatting</span>
          <span style="color:#3b82f6;">✦</span>
          <span>Publishing Support</span>
          <span style="color:#8b5cf6;">✦</span>
          <span>Amazon KDP Setup</span>
          <span style="color:#3b82f6;">✦</span>
          <span>10,000+ Books Published</span>
          <span style="color:#8b5cf6;">✦</span>
          <span>47 Countries Served</span>
          <span style="color:#3b82f6;">✦</span>
          <span>4.7★ Trustpilot Rating</span>
          <span style="color:#8b5cf6;">✦</span>
        </div>
        <div style="display:flex;align-items:center;gap:48px;padding:0 24px;white-space:nowrap;">
          <span>Book Cover Design</span>
          <span style="color:#3b82f6;">✦</span>
          <span>Manuscript Editing</span>
          <span style="color:#8b5cf6;">✦</span>
          <span>Book Formatting</span>
          <span style="color:#3b82f6;">✦</span>
          <span>Publishing Support</span>
          <span style="color:#8b5cf6;">✦</span>
          <span>Amazon KDP Setup</span>
          <span style="color:#3b82f6;">✦</span>
          <span>10,000+ Books Published</span>
          <span style="color:#8b5cf6;">✦</span>
          <span>47 Countries Served</span>
          <span style="color:#3b82f6;">✦</span>
          <span>4.7★ Trustpilot Rating</span>
          <span style="color:#8b5cf6;">✦</span>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div style="
      position: relative;
      z-index: 10;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 80px 24px 0;
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
    " class="cf-main">

      <!-- CTA Section -->
      <div style="text-align:center;margin-bottom:60px;" class="cf-cta">
        <h2 style="
          font-size: clamp(36px, 7vw, 72px);
          font-weight: 900;
          letter-spacing: -3px;
          margin: 0 0 20px;
          line-height: 1;
          background: linear-gradient(180deg, #fafafa 0%, rgba(255,255,255,0.4) 100%);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          background-clip: text;
          filter: drop-shadow(0 0 30px rgba(255,255,255,0.06));
        ">Ready to bring your<br>book to life?</h2>
        <p style="color:#888;font-size:17px;margin:0 0 40px;max-width:520px;margin-left:auto;margin-right:auto;line-height:1.6;">
          Tell us about your manuscript and we'll help you decide the right next step.
        </p>

        <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:14px;">
          <a href="/contact" style="
            display:inline-flex;align-items:center;gap:10px;
            padding:18px 36px;border-radius:50px;
            font-weight:700;font-size:15px;color:#fafafa;text-decoration:none;
            background:linear-gradient(145deg, rgba(255,255,255,0.06) 0%, rgba(255,255,255,0.02) 100%);
            box-shadow:0 10px 30px -10px rgba(0,0,0,0.5), inset 0 1px 1px rgba(255,255,255,0.1);
            border:1px solid rgba(255,255,255,0.1);
            backdrop-filter:blur(16px);-webkit-backdrop-filter:blur(16px);
            transition:all 0.3s cubic-bezier(0.16,1,0.3,1);
          " onmouseover="this.style.background='linear-gradient(145deg, rgba(255,255,255,0.12) 0%, rgba(255,255,255,0.04) 100%)';this.style.borderColor='rgba(255,255,255,0.25)';this.style.transform='translateY(-2px) scale(1.03)'" onmouseout="this.style.background='linear-gradient(145deg, rgba(255,255,255,0.06) 0%, rgba(255,255,255,0.02) 100%)';this.style.borderColor='rgba(255,255,255,0.1)';this.style.transform='none'">
            Start your project →
          </a>
          <a href="/services" style="
            display:inline-flex;align-items:center;gap:10px;
            padding:18px 36px;border-radius:50px;
            font-weight:700;font-size:15px;color:#aaa;text-decoration:none;
            background:transparent;
            border:1px solid rgba(255,255,255,0.12);
            transition:all 0.3s ease;
          " onmouseover="this.style.borderColor='rgba(255,255,255,0.3)';this.style.color='#fff'" onmouseout="this.style.borderColor='rgba(255,255,255,0.12)';this.style.color='#aaa'">
            Explore packages
          </a>
        </div>
      </div>

      <!-- Footer Links Grid -->
      <div style="
        display:grid;
        grid-template-columns: 2fr 1fr 1fr 1fr;
        gap:40px;
        width:100%;
        border-top:1px solid rgba(255,255,255,0.06);
        padding-top:50px;
        padding-bottom:50px;
      " class="cf-grid">

        <!-- Brand Column -->
        <div class="cf-brand">
          <div style="font-size:26px;font-weight:900;margin-bottom:14px;letter-spacing:-1px;">
            HMD <span style="color:#3b82f6;font-weight:400;">Publishing</span>
          </div>
          <p style="color:#777;font-size:14px;line-height:1.7;margin:0 0 16px;max-width:320px;" class="cf-brand-desc">
            Professional publishing services for independent authors.
            10,000+ books published across 47 countries since 2015.
          </p>
          <p style="color:#555;font-size:13px;margin:6px 0;">2 Castle Meadow Rd, Nottingham NG2 1AJ</p>
          <p style="color:#555;font-size:13px;margin:6px 0;">info@hmdpublishing.com</p>
          <p style="color:#555;font-size:13px;margin:6px 0;">+44 7888 862764</p>
        </div>

        <!-- Services Column -->
        <div>
          <h4 style="font-size:14px;font-weight:700;margin:0 0 18px;color:#fafafa;">Services</h4>
          <div style="display:flex;flex-direction:column;gap:10px;">
            <a href="/services" style="color:#777;font-size:13px;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#3b82f6'" onmouseout="this.style.color='#777'">Complete Package</a>
            <a href="/services/editing" style="color:#777;font-size:13px;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#3b82f6'" onmouseout="this.style.color='#777'">Editing</a>
            <a href="/services/book-cover-design" style="color:#777;font-size:13px;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#3b82f6'" onmouseout="this.style.color='#777'">Cover Design</a>
            <a href="/services/book-formatting" style="color:#777;font-size:13px;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#3b82f6'" onmouseout="this.style.color='#777'">Book Formatting</a>
            <a href="/services" style="color:#3b82f6;font-size:13px;text-decoration:none;font-weight:700;margin-top:6px;">All services →</a>
          </div>
        </div>

        <!-- Company Column -->
        <div>
          <h4 style="font-size:14px;font-weight:700;margin:0 0 18px;color:#fafafa;">Company</h4>
          <div style="display:flex;flex-direction:column;gap:10px;">
            <a href="/about" style="color:#777;font-size:13px;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#3b82f6'" onmouseout="this.style.color='#777'">About</a>
            <a href="/portfolio" style="color:#777;font-size:13px;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#3b82f6'" onmouseout="this.style.color='#777'">Portfolio</a>
            <a href="/team" style="color:#777;font-size:13px;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#3b82f6'" onmouseout="this.style.color='#777'">Team</a>
            <a href="/contact" style="color:#777;font-size:13px;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#3b82f6'" onmouseout="this.style.color='#777'">Contact</a>
          </div>
        </div>

        <!-- Support Column -->
        <div>
          <h4 style="font-size:14px;font-weight:700;margin:0 0 18px;color:#fafafa;">Connect</h4>
          <div style="display:flex;flex-direction:column;gap:10px;">
            <a href="https://www.fiverr.com" target="_blank" rel="noopener" style="color:#777;font-size:13px;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#3b82f6'" onmouseout="this.style.color='#777'">Fiverr</a>
            <a href="https://www.upwork.com" target="_blank" rel="noopener" style="color:#777;font-size:13px;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#3b82f6'" onmouseout="this.style.color='#777'">Upwork</a>
            <a href="https://www.peopleperhour.com" target="_blank" rel="noopener" style="color:#777;font-size:13px;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#3b82f6'" onmouseout="this.style.color='#777'">PeoplePerHour</a>
            <a href="mailto:info@hmdpublishing.com" style="color:#777;font-size:13px;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#3b82f6'" onmouseout="this.style.color='#777'">Email Us</a>
          </div>
        </div>

      </div>
    </div>

    <!-- Bottom Bar -->
    <div style="
      position: relative;
      z-index: 20;
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 24px 32px;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      flex-wrap: wrap;
      border-top:1px solid rgba(255,255,255,0.06);
      padding-top:24px;
    " class="cf-bottom">
      <div style="display:flex;align-items:center;gap:20px;flex-wrap:wrap;">
        <span style="font-size:12px;color:#555;">
          © {{ date('Y') }} HMDPublishing Limited. All rights reserved.
        </span>
        <span style="font-size:12px;color:#777;font-weight:600;" class="cf-tagline">
          You keep 100% of your rights and royalties — always.
        </span>
      </div>

      <div style="display:flex;align-items:center;gap:16px;flex-wrap:wrap;">
        <a href="#" style="font-size:12px;color:#555;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#aaa'" onmouseout="this.style.color='#555'">Privacy Policy</a>
        <a href="#" style="font-size:12px;color:#555;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#aaa'" onmouseout="this.style.color='#555'">Terms of Service</a>
        <a href="#" style="font-size:12px;color:#555;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#aaa'" onmouseout="this.style.color='#555'">Refund Policy</a>
      </div>

      <button onclick="window.scrollTo({top:0,behavior:'smooth'})" style="
        width:42px;height:42px;border-radius:50%;
        display:flex;align-items:center;justify-content:center;
        background:linear-gradient(145deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.01) 100%);
        border:1px solid rgba(255,255,255,0.06);cursor:pointer;color:#555;
        transition:all 0.3s ease;
      " onmouseover="this.style.background='linear-gradient(145deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.03) 100%)';this.style.color='#fff';this.style.transform='translateY(-3px)'" onmouseout="this.style.background='linear-gradient(145deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.01) 100%)';this.style.color='#555';this.style.transform='none'">
        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <path d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
      </button>
    </div>

  </footer>
</div>
