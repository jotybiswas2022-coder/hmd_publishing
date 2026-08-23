<!-- Cinematic Footer - Fully Inline CSS & Animation -->
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
</style>

<div style="
  font-family: 'Inter', 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
  -webkit-font-smoothing: antialiased;
  position: relative;
  width: 100%;
" id="cinematic-footer-wrap">

  <footer style="
    position: relative;
    width: 100%;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow: hidden;
    padding: 80px 0 40px;
    background: #0a0a0a;
    color: #fafafa;
    box-sizing: border-box;
  ">

    <!-- Aurora Glow -->
    <div style="
      position: absolute;
      left: 50%;
      top: 50%;
      width: 80vw;
      height: 60vh;
      max-width: 900px;
      border-radius: 50%;
      filter: blur(100px);
      pointer-events: none;
      z-index: 0;
      transform: translate(-50%, -50%);
      background: radial-gradient(circle, rgba(59,130,246,0.15) 0%, rgba(139,92,246,0.12) 40%, transparent 70%);
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
        linear-gradient(to right, rgba(255,255,255,0.03) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(255,255,255,0.03) 1px, transparent 1px);
      mask-image: linear-gradient(to bottom, transparent, black 20%, black 80%, transparent);
      -webkit-mask-image: linear-gradient(to bottom, transparent, black 20%, black 80%, transparent);
    "></div>

    <!-- Giant BG Text -->
    <div style="
      position: absolute;
      bottom: -5vh;
      left: 50%;
      transform: translateX(-50%);
      white-space: nowrap;
      z-index: 0;
      pointer-events: none;
      user-select: none;
      font-size: 22vw;
      line-height: 0.75;
      font-weight: 900;
      letter-spacing: -0.05em;
      color: transparent;
      -webkit-text-stroke: 1px rgba(255,255,255,0.04);
    ">SOBERS</div>

    <!-- Marquee Bar -->
    <div style="
      position: absolute;
      top: 40px;
      left: 0;
      width: 100%;
      overflow: hidden;
      border-top: 1px solid rgba(255,255,255,0.08);
      border-bottom: 1px solid rgba(255,255,255,0.08);
      padding: 14px 0;
      z-index: 10;
      transform: rotate(-1.5deg) scale(1.05);
      background: rgba(10,10,10,0.7);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      box-shadow: 0 10px 40px rgba(0,0,0,0.5);
    ">
      <div style="
        display: flex;
        width: max-content;
        animation: cinematic-marquee 35s linear infinite;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.3em;
        text-transform: uppercase;
        color: #888;
      ">
        <div style="display:flex;align-items:center;gap:48px;padding:0 24px;white-space:nowrap;">
          <span>Accountability Redefined</span>
          <span style="color:#3b82f6;">✦</span>
          <span>Transparent Tracking</span>
          <span style="color:#8b5cf6;">✦</span>
          <span>12-Step Progress</span>
          <span style="color:#3b82f6;">✦</span>
          <span>Sponsor Connection</span>
          <span style="color:#8b5cf6;">✦</span>
          <span>Absolute Privacy</span>
          <span style="color:#3b82f6;">✦</span>
        </div>
        <div style="display:flex;align-items:center;gap:48px;padding:0 24px;white-space:nowrap;">
          <span>Accountability Redefined</span>
          <span style="color:#3b82f6;">✦</span>
          <span>Transparent Tracking</span>
          <span style="color:#8b5cf6;">✦</span>
          <span>12-Step Progress</span>
          <span style="color:#3b82f6;">✦</span>
          <span>Sponsor Connection</span>
          <span style="color:#8b5cf6;">✦</span>
          <span>Absolute Privacy</span>
          <span style="color:#3b82f6;">✦</span>
        </div>
      </div>
    </div>

    <!-- Main Center Content -->
    <div style="
      position: relative;
      z-index: 10;
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 80px 24px 0;
      width: 100%;
      max-width: 960px;
      margin: 0 auto;
    ">
      <h2 style="
        font-size: clamp(42px, 8vw, 90px);
        font-weight: 900;
        letter-spacing: -3px;
        margin: 0 0 48px;
        text-align: center;
        line-height: 1;
        background: linear-gradient(180deg, #fafafa 0%, rgba(255,255,255,0.4) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        filter: drop-shadow(0 0 30px rgba(255,255,255,0.08));
      ">Ready to begin?</h2>

      <div style="display:flex;flex-direction:column;align-items:center;gap:24px;width:100%;">

        <!-- Primary Buttons -->
        <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:16px;width:100%;">
          <a href="#" style="
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 20px 40px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 15px;
            color: #fafafa;
            text-decoration: none;
            background: linear-gradient(145deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.01) 100%);
            box-shadow: 0 10px 30px -10px rgba(0,0,0,0.5), inset 0 1px 1px rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.08);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
          " onmouseover="this.style.background='linear-gradient(145deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.03) 100%)';this.style.borderColor='rgba(255,255,255,0.2)';this.style.transform='translateY(-2px) scale(1.03)'" onmouseout="this.style.background='linear-gradient(145deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.01) 100%)';this.style.borderColor='rgba(255,255,255,0.08)';this.style.transform='none'">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="#aaa"><path d="M17.05 20.28c-.98.95-2.05.8-3.08.35-1.09-.46-2.09-.48-3.24 0-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.8 1.18-.04 2.26-.79 3.59-.76 1.56.04 2.87.67 3.55 1.76-3.13 1.77-2.62 5.92.35 7.14-.65 1.58-1.57 3.1-2.57 4.03zm-3.21-14.7c-.55 1.4-1.89 2.37-3.25 2.28.09-1.5 1.05-2.82 2.38-3.4 1.25-.57 2.66-.41 3.25.04-.15.35-.26.72-.38 1.08z"/></svg>
            Download iOS
          </a>
          <a href="#" style="
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 20px 40px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 15px;
            color: #fafafa;
            text-decoration: none;
            background: linear-gradient(145deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.01) 100%);
            box-shadow: 0 10px 30px -10px rgba(0,0,0,0.5), inset 0 1px 1px rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.08);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
          " onmouseover="this.style.background='linear-gradient(145deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.03) 100%)';this.style.borderColor='rgba(255,255,255,0.2)';this.style.transform='translateY(-2px) scale(1.03)'" onmouseout="this.style.background='linear-gradient(145deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.01) 100%)';this.style.borderColor='rgba(255,255,255,0.08)';this.style.transform='none'">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="#aaa"><path d="M17.523 15.3414c-.5511 0-.9993-.4486-.9993-.9997s.4482-.9993.9993-.9993c.5511 0 .9993.4482.9993.9993.0004.5511-.4482.9997-.9993.9997m-11.046 0c-.5511 0-.9993-.4486-.9993-.9997s.4482-.9993.9993-.9993c.5511 0 .9993.4482.9993.9993.0004.5511-.4482.9997-.9993.9997m11.4045-6.02l1.9973-3.4592a.416.416 0 00-.1521-.5676.416.416 0 00-.5676.1521l-2.0222 3.503C15.5902 8.242 13.8533 7.85 12 7.85c-1.8533 0-3.5902.392-5.1369 1.1004L4.841 5.4475a.416.416 0 00-.5676-.1521.416.416 0 00-.1521.5676l1.9973 3.4592C2.6889 11.1867.3432 14.6589 0 18.761h24c-.3436-4.1021-2.6893-7.5743-6.1185-9.4396"/></svg>
            Download Android
          </a>
        </div>

        <!-- Secondary Links -->
        <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:12px;width:100%;margin-top:8px;">
          <a href="#" style="
            padding: 14px 28px;
            border-radius: 50px;
            font-weight: 500;
            font-size: 13px;
            color: #999;
            text-decoration: none;
            background: linear-gradient(145deg, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.01) 100%);
            box-shadow: 0 10px 30px -10px rgba(0,0,0,0.3), inset 0 1px 1px rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.06);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            transition: all 0.3s ease;
          " onmouseover="this.style.background='linear-gradient(145deg, rgba(255,255,255,0.08) 0%, rgba(255,255,255,0.02) 100%)';this.style.color='#fff';this.style.borderColor='rgba(255,255,255,0.15)'" onmouseout="this.style.background='linear-gradient(145deg, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.01) 100%)';this.style.color='#999';this.style.borderColor='rgba(255,255,255,0.06)'">
            Privacy Policy
          </a>
          <a href="#" style="
            padding: 14px 28px;
            border-radius: 50px;
            font-weight: 500;
            font-size: 13px;
            color: #999;
            text-decoration: none;
            background: linear-gradient(145deg, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.01) 100%);
            box-shadow: 0 10px 30px -10px rgba(0,0,0,0.3), inset 0 1px 1px rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.06);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            transition: all 0.3s ease;
          " onmouseover="this.style.background='linear-gradient(145deg, rgba(255,255,255,0.08) 0%, rgba(255,255,255,0.02) 100%)';this.style.color='#fff';this.style.borderColor='rgba(255,255,255,0.15)'" onmouseout="this.style.background='linear-gradient(145deg, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.01) 100%)';this.style.color='#999';this.style.borderColor='rgba(255,255,255,0.06)'">
            Terms of Service
          </a>
          <a href="#" style="
            padding: 14px 28px;
            border-radius: 50px;
            font-weight: 500;
            font-size: 13px;
            color: #999;
            text-decoration: none;
            background: linear-gradient(145deg, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.01) 100%);
            box-shadow: 0 10px 30px -10px rgba(0,0,0,0.3), inset 0 1px 1px rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.06);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            transition: all 0.3s ease;
          " onmouseover="this.style.background='linear-gradient(145deg, rgba(255,255,255,0.08) 0%, rgba(255,255,255,0.02) 100%)';this.style.color='#fff';this.style.borderColor='rgba(255,255,255,0.15)'" onmouseout="this.style.background='linear-gradient(145deg, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.01) 100%)';this.style.color='#999';this.style.borderColor='rgba(255,255,255,0.06)'">
            Support
          </a>
        </div>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div style="
      position: relative;
      z-index: 20;
      width: 100%;
      max-width: 1200px;
      margin: 60px auto 0;
      padding: 0 24px 32px;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      flex-wrap: wrap;
    ">
      <div style="
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        color: #666;
      ">
        &copy; {{ date('Y') }} {{ config('app.name', 'HMD Publishing') }}. All rights reserved.
      </div>

      <div style="
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 24px;
        border-radius: 50px;
        background: linear-gradient(145deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.01) 100%);
        border: 1px solid rgba(255,255,255,0.06);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        cursor: default;
      ">
        <span style="font-size:10px;font-weight:800;text-transform:uppercase;letter-spacing:0.15em;color:#666;">Crafted with</span>
        <span style="font-size:14px;color:#ef4444;animation:cinematic-heartbeat 2s cubic-bezier(0.25,1,0.5,1) infinite;">❤</span>
        <span style="font-size:10px;font-weight:800;text-transform:uppercase;letter-spacing:0.15em;color:#666;">by</span>
        <span style="font-weight:900;font-size:13px;color:#fafafa;">{{ config('app.name', 'HMD Publishing') }}</span>
      </div>

      <button onclick="window.scrollTo({top:0,behavior:'smooth'})" style="
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(145deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.01) 100%);
        box-shadow: 0 10px 30px -10px rgba(0,0,0,0.3);
        border: 1px solid rgba(255,255,255,0.06);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        cursor: pointer;
        color: #666;
        transition: all 0.3s ease;
      " onmouseover="this.style.background='linear-gradient(145deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.03) 100%)';this.style.color='#fff';this.style.transform='translateY(-3px)'" onmouseout="this.style.background='linear-gradient(145deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.01) 100%)';this.style.color='#666';this.style.transform='none'">
        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <path d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
      </button>
    </div>

  </footer>
</div>
