<style>
@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap');

.cinematic-footer-wrapper {
  font-family: 'Plus Jakarta Sans', sans-serif;
  -webkit-font-smoothing: antialiased;
  
  --pill-bg-1: color-mix(in oklch, var(--foreground, #000) 3%, transparent);
  --pill-bg-2: color-mix(in oklch, var(--foreground, #000) 1%, transparent);
  --pill-shadow: color-mix(in oklch, var(--background, #fff) 50%, transparent);
  --pill-highlight: color-mix(in oklch, var(--foreground, #000) 10%, transparent);
  --pill-inset-shadow: color-mix(in oklch, var(--background, #fff) 80%, transparent);
  --pill-border: color-mix(in oklch, var(--foreground, #000) 8%, transparent);
  
  --pill-bg-1-hover: color-mix(in oklch, var(--foreground, #000) 8%, transparent);
  --pill-bg-2-hover: color-mix(in oklch, var(--foreground, #000) 2%, transparent);
  --pill-border-hover: color-mix(in oklch, var(--foreground, #000) 20%, transparent);
  --pill-shadow-hover: color-mix(in oklch, var(--background, #fff) 70%, transparent);
  --pill-highlight-hover: color-mix(in oklch, var(--foreground, #000) 20%, transparent);
}

@keyframes footer-breathe {
  0% { transform: translate(-50%, -50%) scale(1); opacity: 0.6; }
  100% { transform: translate(-50%, -50%) scale(1.1); opacity: 1; }
}

@keyframes footer-scroll-marquee {
  from { transform: translateX(0); }
  to { transform: translateX(-50%); }
}

@keyframes footer-heartbeat {
  0%, 100% { transform: scale(1); filter: drop-shadow(0 0 5px color-mix(in oklch, #ef4444 50%, transparent)); }
  15%, 45% { transform: scale(1.2); filter: drop-shadow(0 0 10px color-mix(in oklch, #ef4444 80%, transparent)); }
  30% { transform: scale(1); }
}

.animate-footer-breathe {
  animation: footer-breathe 8s ease-in-out infinite alternate;
}

.animate-footer-scroll-marquee {
  animation: footer-scroll-marquee 40s linear infinite;
}

.animate-footer-heartbeat {
  animation: footer-heartbeat 2s cubic-bezier(0.25, 1, 0.5, 1) infinite;
}

.footer-bg-grid {
  background-size: 60px 60px;
  background-image: 
    linear-gradient(to right, color-mix(in oklch, var(--foreground, #000) 3%, transparent) 1px, transparent 1px),
    linear-gradient(to bottom, color-mix(in oklch, var(--foreground, #000) 3%, transparent) 1px, transparent 1px);
  mask-image: linear-gradient(to bottom, transparent, black 30%, black 70%, transparent);
  -webkit-mask-image: linear-gradient(to bottom, transparent, black 30%, black 70%, transparent);
}

.footer-aurora {
  background: radial-gradient(
    circle at 50% 50%, 
    color-mix(in oklch, #3b82f6 15%, transparent) 0%, 
    color-mix(in oklch, #8b5cf6 15%, transparent) 40%, 
    transparent 70%
  );
}

.footer-glass-pill {
  background: linear-gradient(145deg, var(--pill-bg-1) 0%, var(--pill-bg-2) 100%);
  box-shadow: 
      0 10px 30px -10px var(--pill-shadow), 
      inset 0 1px 1px var(--pill-highlight), 
      inset 0 -1px 2px var(--pill-inset-shadow);
  border: 1px solid var(--pill-border);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.footer-glass-pill:hover {
  background: linear-gradient(145deg, var(--pill-bg-1-hover) 0%, var(--pill-bg-2-hover) 100%);
  border-color: var(--pill-border-hover);
  box-shadow: 
      0 20px 40px -10px var(--pill-shadow-hover), 
      inset 0 1px 1px var(--pill-highlight-hover);
  color: var(--foreground, #000);
}

.footer-giant-bg-text {
  font-size: 26vw;
  line-height: 0.75;
  font-weight: 900;
  letter-spacing: -0.05em;
  color: transparent;
  -webkit-text-stroke: 1px color-mix(in oklch, var(--foreground, #000) 5%, transparent);
  background: linear-gradient(180deg, color-mix(in oklch, var(--foreground, #000) 10%, transparent) 0%, transparent 60%);
  -webkit-background-clip: text;
  background-clip: text;
}

.footer-text-glow {
  background: linear-gradient(180deg, var(--foreground, #000) 0%, color-mix(in oklch, var(--foreground, #000) 40%, transparent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  filter: drop-shadow(0px 0px 20px color-mix(in oklch, var(--foreground, #000) 15%, transparent));
}
</style>

<!-- Cinematic Footer Wrapper -->
<div class="cinematic-footer-wrapper relative" id="cinematic-footer-wrapper" style="clip-path: polygon(0% 0, 100% 0%, 100% 100%, 0 100%);">
  
  <footer class="relative w-full flex flex-col justify-between overflow-hidden py-8" style="background: #0a0a0a; color: #fafafa;">
    
    <!-- Ambient Light & Grid Background -->
    <div class="footer-aurora absolute left-1/2 top-1/2 h-[60vh] w-[80vw] -translate-x-1/2 -translate-y-1/2 animate-footer-breathe rounded-full blur-[80px] pointer-events-none z-0"></div>
    <div class="footer-bg-grid absolute inset-0 z-0 pointer-events-none"></div>

    <!-- Giant background text -->
    <div class="footer-giant-bg-text absolute -bottom-[5vh] left-1/2 -translate-x-1/2 whitespace-nowrap z-0 pointer-events-none select-none">
      SOBERS
    </div>

    <!-- Diagonal Sleek Marquee -->
    <div class="absolute top-12 left-0 w-full overflow-hidden border-y py-4 z-10 -rotate-2 scale-110 shadow-2xl" style="border-color: rgba(255,255,255,0.1); background: rgba(0,0,0,0.6); backdrop-filter: blur(12px);">
      <div class="flex w-max animate-footer-scroll-marquee text-xs md:text-sm font-bold tracking-[0.3em] uppercase" style="color: #a0a0a0;">
        <div class="flex items-center space-x-12 px-6">
          <span>Accountability Redefined</span>
          <span style="color: #3b82f6;">✦</span>
          <span>Transparent Tracking</span>
          <span style="color: #8b5cf6;">✦</span>
          <span>12-Step Progress</span>
          <span style="color: #3b82f6;">✦</span>
          <span>Sponsor Connection</span>
          <span style="color: #8b5cf6;">✦</span>
          <span>Absolute Privacy</span>
          <span style="color: #3b82f6;">✦</span>
        </div>
        <div class="flex items-center space-x-12 px-6">
          <span>Accountability Redefined</span>
          <span style="color: #3b82f6;">✦</span>
          <span>Transparent Tracking</span>
          <span style="color: #8b5cf6;">✦</span>
          <span>12-Step Progress</span>
          <span style="color: #3b82f6;">✦</span>
          <span>Sponsor Connection</span>
          <span style="color: #8b5cf6;">✦</span>
          <span>Absolute Privacy</span>
          <span style="color: #3b82f6;">✦</span>
        </div>
      </div>
    </div>

    <!-- Main Center Content -->
    <div class="relative z-10 flex flex-1 flex-col items-center justify-center px-6 mt-20 w-full max-w-5xl mx-auto">
      <h2 class="text-5xl md:text-8xl font-black footer-text-glow tracking-tighter mb-12 text-center">
        Ready to begin?
      </h2>

      <!-- Interactive Links -->
      <div class="flex flex-col items-center gap-6 w-full">
        <!-- Download Links (Primary) -->
        <div class="flex flex-wrap justify-center gap-4 w-full">
          <a href="#" class="footer-glass-pill px-10 py-5 rounded-full font-bold text-sm md:text-base flex items-center gap-3 group" style="color: #fafafa;">
            <svg class="w-6 h-6 transition-colors" style="color: #a0a0a0;" viewBox="0 0 24 24" fill="currentColor">
              <path d="M17.05 20.28c-.98.95-2.05.8-3.08.35-1.09-.46-2.09-.48-3.24 0-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.8 1.18-.04 2.26-.79 3.59-.76 1.56.04 2.87.67 3.55 1.76-3.13 1.77-2.62 5.92.35 7.14-.65 1.58-1.57 3.1-2.57 4.03zm-3.21-14.7c-.55 1.4-1.89 2.37-3.25 2.28.09-1.5 1.05-2.82 2.38-3.4 1.25-.57 2.66-.41 3.25.04-.15.35-.26.72-.38 1.08z" />
            </svg>
            Download iOS
          </a>
          
          <a href="#" class="footer-glass-pill px-10 py-5 rounded-full font-bold text-sm md:text-base flex items-center gap-3 group" style="color: #fafafa;">
            <svg class="w-6 h-6 transition-colors" style="color: #a0a0a0;" viewBox="0 0 24 24" fill="currentColor">
              <path d="M17.523 15.3414c-.5511 0-.9993-.4486-.9993-.9997s.4482-.9993.9993-.9993c.5511 0 .9993.4482.9993.9993.0004.5511-.4482.9997-.9993.9997m-11.046 0c-.5511 0-.9993-.4486-.9993-.9997s.4482-.9993.9993-.9993c.5511 0 .9993.4482.9993.9993.0004.5511-.4482.9997-.9993.9997m11.4045-6.02l1.9973-3.4592a.416.416 0 00-.1521-.5676.416.416 0 00-.5676.1521l-2.0222 3.503C15.5902 8.242 13.8533 7.85 12 7.85c-1.8533 0-3.5902.392-5.1369 1.1004L4.841 5.4475a.416.416 0 00-.5676-.1521.416.416 0 00-.1521.5676l1.9973 3.4592C2.6889 11.1867.3432 14.6589 0 18.761h24c-.3436-4.1021-2.6893-7.5743-6.1185-9.4396" />
            </svg>
            Download Android
          </a>
        </div>

        <!-- Secondary Text Links -->
        <div class="flex flex-wrap justify-center gap-3 md:gap-6 w-full mt-2">
          <a href="#" class="footer-glass-pill px-6 py-3 rounded-full font-medium text-xs md:text-sm" style="color: #a0a0a0;">
            Privacy Policy
          </a>
          <a href="#" class="footer-glass-pill px-6 py-3 rounded-full font-medium text-xs md:text-sm" style="color: #a0a0a0;">
            Terms of Service
          </a>
          <a href="#" class="footer-glass-pill px-6 py-3 rounded-full font-medium text-xs md:text-sm" style="color: #a0a0a0;">
            Support
          </a>
        </div>
      </div>
    </div>

    <!-- Bottom Bar / Credits -->
    <div class="relative z-20 w-full pb-8 px-6 md:px-12 flex flex-col md:flex-row items-center justify-between gap-6 mt-16">
      
      <!-- Copyright -->
      <div class="text-[10px] md:text-xs font-semibold tracking-widest uppercase order-2 md:order-1" style="color: #a0a0a0;">
        &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
      </div>

      <!-- "Made with Love" Badge -->
      <div class="footer-glass-pill px-6 py-3 rounded-full flex items-center gap-2 order-1 md:order-2 cursor-default" style="border-color: rgba(255,255,255,0.1);">
        <span class="text-[10px] md:text-xs font-bold uppercase tracking-widest" style="color: #a0a0a0;">Crafted with</span>
        <span class="animate-footer-heartbeat text-sm md:text-base">❤</span>
        <span class="text-[10px] md:text-xs font-bold uppercase tracking-widest" style="color: #a0a0a0;">by</span>
        <span class="font-black text-xs md:text-sm tracking-normal ml-1">{{ config('app.name', 'Laravel') }}</span>
      </div>

      <!-- Back to top -->
      <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="w-12 h-12 rounded-full footer-glass-pill flex items-center justify-center group order-3" style="color: #a0a0a0;">
        <svg class="w-5 h-5 transform group-hover:-translate-y-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
      </button>

    </div>
  </footer>
</div>

<!-- GSAP Scripts for Footer Animation -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Wait for GSAP to load
  if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
    console.warn('GSAP or ScrollTrigger not loaded');
    return;
  }

  gsap.registerPlugin(ScrollTrigger);

  const wrapper = document.getElementById('cinematic-footer-wrapper');
  if (!wrapper) return;

  const giantText = wrapper.querySelector('.footer-giant-bg-text');
  const heading = wrapper.querySelector('h2');
  const links = wrapper.querySelector('.flex.flex-col.items-center.gap-6');

  // Background Parallax
  if (giantText) {
    gsap.fromTo(giantText,
      { y: '10vh', scale: 0.8, opacity: 0 },
      {
        y: '0vh',
        scale: 1,
        opacity: 1,
        ease: 'power1.out',
        scrollTrigger: {
          trigger: wrapper,
          start: 'top 80%',
          end: 'bottom bottom',
          scrub: 1,
        },
      }
    );
  }

  // Staggered Content Reveal
  if (heading && links) {
    gsap.fromTo([heading, links],
      { y: 50, opacity: 0 },
      {
        y: 0,
        opacity: 1,
        stagger: 0.15,
        ease: 'power3.out',
        scrollTrigger: {
          trigger: wrapper,
          start: 'top 40%',
          end: 'bottom bottom',
          scrub: 1,
        },
      }
    );
  }

  // Magnetic button effect on glass pills
  const pills = wrapper.querySelectorAll('.footer-glass-pill');
  pills.forEach(pill => {
    pill.addEventListener('mousemove', (e) => {
      const rect = pill.getBoundingClientRect();
      const h = rect.width / 2;
      const w = rect.height / 2;
      const x = e.clientX - rect.left - h;
      const y = e.clientY - rect.top - w;

      gsap.to(pill, {
        x: x * 0.4,
        y: y * 0.4,
        rotationX: -y * 0.15,
        rotationY: x * 0.15,
        scale: 1.05,
        ease: 'power2.out',
        duration: 0.4,
      });
    });

    pill.addEventListener('mouseleave', () => {
      gsap.to(pill, {
        x: 0,
        y: 0,
        rotationX: 0,
        rotationY: 0,
        scale: 1,
        ease: 'elastic.out(1, 0.3)',
        duration: 1.2,
      });
    });
  });
});
</script>
