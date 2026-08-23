<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Create Account | HMD Publishing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
        *, *::before, *::after { margin:0; padding:0; box-sizing:border-box; }
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            min-height: 100vh;
            background: #050510;
            color: #fff;
            overflow-x: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .pa-bg { position: fixed; inset: 0; z-index: 0; overflow: hidden; background: #050510; }
        .pa-orb { position: absolute; border-radius: 50%; filter: blur(100px); opacity: 0.5; animation: pa-orb-float 20s ease-in-out infinite alternate; }
        .pa-orb-1 { width: 500px; height: 500px; background: radial-gradient(circle, rgba(99,102,241,0.4), transparent 70%); top: -10%; left: -5%; animation-duration: 22s; }
        .pa-orb-2 { width: 450px; height: 450px; background: radial-gradient(circle, rgba(139,92,246,0.35), transparent 70%); bottom: -10%; right: -5%; animation-duration: 18s; animation-delay: -5s; }
        .pa-orb-3 { width: 350px; height: 350px; background: radial-gradient(circle, rgba(59,130,246,0.3), transparent 70%); top: 50%; left: 50%; transform: translate(-50%, -50%); animation-duration: 25s; animation-delay: -10s; }
        @keyframes pa-orb-float { 0%{transform:translate(0,0) scale(1)} 33%{transform:translate(40px,-30px) scale(1.05)} 66%{transform:translate(-30px,40px) scale(0.95)} 100%{transform:translate(20px,-20px) scale(1.02)} }
        .pa-grid { position: absolute; inset: 0; background-size: 50px 50px; background-image: linear-gradient(to right, rgba(255,255,255,0.02) 1px, transparent 1px), linear-gradient(to bottom, rgba(255,255,255,0.02) 1px, transparent 1px); opacity: 0.5; }
        .pa-particles { position: absolute; inset: 0; overflow: hidden; }
        .pa-particle { position: absolute; width: 3px; height: 3px; background: rgba(139,92,246,0.6); border-radius: 50%; animation: pa-particle-rise linear infinite; }
        @keyframes pa-particle-rise { 0%{transform:translateY(100vh) scale(0);opacity:0} 10%{opacity:1} 90%{opacity:1} 100%{transform:translateY(-10vh) scale(1);opacity:0} }
        .pa-wrapper { position: relative; z-index: 10; width: 100%; max-width: 440px; }
        .pa-badge { display: inline-flex; align-items: center; gap: 8px; padding: 8px 16px; background: rgba(34,197,94,0.15); border: 1px solid rgba(34,197,94,0.3); border-radius: 999px; font-size: 12px; font-weight: 600; color: #4ade80; margin-bottom: 20px; backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); letter-spacing: 0.5px; }
        .pa-badge-dot { width: 6px; height: 6px; border-radius: 50%; background: #22c55e; box-shadow: 0 0 8px rgba(34,197,94,0.6); animation: pa-badge-pulse 2s ease-in-out infinite; }
        @keyframes pa-badge-pulse { 0%,100%{opacity:1} 50%{opacity:0.4} }
        .pa-card { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.08); border-radius: 24px; padding: 40px 32px; backdrop-filter: blur(24px); -webkit-backdrop-filter: blur(24px); box-shadow: 0 8px 32px rgba(0,0,0,0.3), inset 0 1px 0 rgba(255,255,255,0.05); }
        .pa-card-header { text-align: center; margin-bottom: 28px; }
        .pa-card-icon { width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, rgba(34,197,94,0.3), rgba(59,130,246,0.3)); border: 1px solid rgba(255,255,255,0.1); border-radius: 16px; margin: 0 auto 16px; font-size: 26px; color: #4ade80; backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); }
        .pa-card-title { font-size: 26px; font-weight: 800; letter-spacing: -1px; margin-bottom: 6px; background: linear-gradient(180deg, #fff 0%, rgba(255,255,255,0.6) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .pa-card-subtitle { font-size: 14px; color: rgba(255,255,255,0.45); }
        .pa-input-group { margin-bottom: 16px; }
        .pa-input-label { display: block; font-size: 13px; font-weight: 600; color: rgba(255,255,255,0.6); margin-bottom: 6px; letter-spacing: 0.3px; }
        .pa-input-wrap { position: relative; }
        .pa-input-icon { position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: rgba(255,255,255,0.25); z-index: 2; font-size: 16px; transition: color 0.2s ease; }
        .pa-input { width: 100%; padding: 14px 44px 14px 44px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; font-family: inherit; font-size: 15px; color: #fff; outline: none; transition: all 0.25s ease; }
        .pa-input::placeholder { color: rgba(255,255,255,0.2); }
        .pa-input:focus { border-color: rgba(139,92,246,0.5); background: rgba(255,255,255,0.08); box-shadow: 0 0 0 3px rgba(139,92,246,0.15); }
        .pa-input-wrap:focus-within .pa-input-icon { color: #a78bfa; }
        .pa-input-error { border-color: rgba(239,68,68,0.6) !important; }
        .pa-error-text { display: block; color: #f87171; font-size: 12px; margin-top: 5px; font-weight: 500; }
        .pa-pw-toggle { position: absolute; right: 12px; top: 50%; transform: translateY(-50%); background: none; border: none; color: rgba(255,255,255,0.3); font-size: 18px; cursor: pointer; padding: 4px; z-index: 2; transition: color 0.2s ease; }
        .pa-pw-toggle:hover { color: rgba(255,255,255,0.7); }
        .pa-terms { margin-bottom: 20px; }
        .pa-checkbox { display: inline-flex; align-items: center; gap: 8px; cursor: pointer; user-select: none; }
        .pa-checkbox input { display: none; }
        .pa-checkbox-mark { width: 18px; height: 18px; border: 2px solid rgba(255,255,255,0.15); border-radius: 5px; display: flex; align-items: center; justify-content: center; transition: all 0.2s ease; flex-shrink: 0; }
        .pa-checkbox-mark i { font-size: 11px; color: #fff; opacity: 0; transform: scale(0); transition: all 0.2s ease; }
        .pa-checkbox input:checked + .pa-checkbox-mark { background: #6366f1; border-color: #6366f1; }
        .pa-checkbox input:checked + .pa-checkbox-mark i { opacity: 1; transform: scale(1); }
        .pa-checkbox-label { font-size: 12px; color: rgba(255,255,255,0.45); font-weight: 500; }
        .pa-terms a { color: #a78bfa; text-decoration: none; font-weight: 600; }
        .pa-submit-btn { width: 100%; padding: 15px 24px; background: linear-gradient(135deg, #6366f1, #8b5cf6); border: none; border-radius: 12px; font-family: inherit; font-size: 15px; font-weight: 700; color: #fff; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 10px; transition: all 0.3s cubic-bezier(0.16,1,0.3,1); position: relative; overflow: hidden; }
        .pa-submit-btn::before { content:''; position:absolute; inset:0; background:linear-gradient(135deg,#818cf8,#a78bfa); opacity:0; transition:opacity 0.3s ease; }
        .pa-submit-btn:hover::before { opacity:1; }
        .pa-submit-btn span { position:relative; z-index:1; }
        .pa-submit-btn:hover { transform:translateY(-2px); box-shadow:0 8px 24px rgba(99,102,241,0.4); }
        .pa-submit-btn:disabled { opacity:0.6; cursor:not-allowed; transform:none; }
        .pa-submit-btn:disabled::before { display:none; }
        .pa-spinner { width:18px; height:18px; border:2.5px solid rgba(255,255,255,0.3); border-top-color:#fff; border-radius:50%; animation:pa-spin 0.7s linear infinite; position:relative; z-index:1; }
        @keyframes pa-spin { to{transform:rotate(360deg)} }
        .pa-divider { display:flex; align-items:center; margin:22px 0; }
        .pa-divider::before,.pa-divider::after { content:''; flex:1; height:1px; background:rgba(255,255,255,0.08); }
        .pa-divider span { padding:0 16px; font-size:12px; color:rgba(255,255,255,0.3); font-weight:500; text-transform:uppercase; letter-spacing:1px; }
        .pa-social-row { display:flex; gap:12px; margin-bottom:22px; }
        .pa-social-btn { flex:1; display:flex; align-items:center; justify-content:center; gap:8px; padding:12px 16px; background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.08); border-radius:12px; font-family:inherit; font-size:13px; font-weight:600; color:rgba(255,255,255,0.7); cursor:pointer; transition:all 0.25s ease; backdrop-filter:blur(10px); -webkit-backdrop-filter:blur(10px); }
        .pa-social-btn:hover { background:rgba(255,255,255,0.1); border-color:rgba(255,255,255,0.15); transform:translateY(-1px); }
        .pa-social-btn svg { width:18px; height:18px; }
        .pa-switch { text-align:center; font-size:14px; color:rgba(255,255,255,0.4); }
        .pa-switch-link { font-weight:700; color:#a78bfa; text-decoration:none; transition:color 0.2s ease; display:inline-flex; align-items:center; gap:4px; }
        .pa-switch-link:hover { color:#c4b5fd; }
        .pa-switch-link i { font-size:12px; transition:transform 0.2s ease; }
        .pa-switch-link:hover i { transform:translateX(3px); }
        .pa-card-footer { display:flex; align-items:center; justify-content:center; gap:8px; margin-top:22px; padding-top:18px; border-top:1px solid rgba(255,255,255,0.05); }
        .pa-card-footer i { font-size:13px; color:#6366f1; }
        .pa-card-footer span { font-size:12px; color:rgba(255,255,255,0.3); }
        .pa-logo { text-align:center; margin-bottom:28px; }
        .pa-logo a { text-decoration:none; font-size:22px; font-weight:800; color:#fff; letter-spacing:-1px; }
        .pa-logo a span { font-weight:400; color:rgba(255,255,255,0.4); }
        @media(max-width:480px) { .pa-card{padding:28px 20px;border-radius:20px} .pa-social-row{flex-direction:column} .pa-card-title{font-size:22px} }
    </style>
</head>
<body>

<div class="pa-bg">
    <div class="pa-grid"></div>
    <div class="pa-orb pa-orb-1"></div>
    <div class="pa-orb pa-orb-2"></div>
    <div class="pa-orb pa-orb-3"></div>
    <div class="pa-particles" id="particles"></div>
</div>

<div class="pa-wrapper">
    <div class="pa-logo"><a href="/">HMD <span>Publishing</span></a></div>
    <div style="text-align:center;">
        <div class="pa-badge" style="display:inline-flex;">
            <span class="pa-badge-dot"></span>
            Join 10,000+ published authors
        </div>
    </div>

    <div class="pa-card">
        <div class="pa-card-header">
            <div class="pa-card-icon"><i class="bi bi-person-plus-fill"></i></div>
            <h2 class="pa-card-title">Create your account</h2>
            <p class="pa-card-subtitle">Start your publishing journey today</p>
        </div>

        <form method="POST" action="{{ route('register') }}" id="regForm" autocomplete="off">
            @csrf
            @if ($errors->any())
                <input type="hidden" id="regErrors" value='{{ json_encode($errors->all()) }}'>
            @endif

            <div class="pa-input-group">
                <label class="pa-input-label" for="name">Full Name</label>
                <div class="pa-input-wrap">
                    <i class="bi bi-person-fill pa-input-icon"></i>
                    <input id="name" type="text" class="pa-input @error('name') pa-input-error @enderror" name="name" value="{{ old('name') }}" placeholder="John Doe" required autofocus>
                </div>
                @error('name')<span class="pa-error-text">{{ $message }}</span>@enderror
            </div>

            <div class="pa-input-group">
                <label class="pa-input-label" for="email">Email</label>
                <div class="pa-input-wrap">
                    <i class="bi bi-envelope-fill pa-input-icon"></i>
                    <input id="email" type="email" class="pa-input @error('email') pa-input-error @enderror" name="email" value="{{ old('email') }}" placeholder="you@example.com" required>
                </div>
                @error('email')<span class="pa-error-text">{{ $message }}</span>@enderror
            </div>

            <div class="pa-input-group">
                <label class="pa-input-label" for="password">Password</label>
                <div class="pa-input-wrap">
                    <i class="bi bi-lock-fill pa-input-icon"></i>
                    <input id="password" type="password" class="pa-input @error('password') pa-input-error @enderror" name="password" placeholder="Create a strong password" required>
                    <button type="button" class="pa-pw-toggle" id="pwToggle1" tabindex="-1"><i class="bi bi-eye-slash"></i></button>
                </div>
                @error('password')<span class="pa-error-text">{{ $message }}</span>@enderror
            </div>

            <div class="pa-input-group">
                <label class="pa-input-label" for="password_confirmation">Confirm Password</label>
                <div class="pa-input-wrap">
                    <i class="bi bi-shield-check pa-input-icon"></i>
                    <input id="password_confirmation" type="password" class="pa-input" name="password_confirmation" placeholder="Repeat your password" required>
                    <button type="button" class="pa-pw-toggle" id="pwToggle2" tabindex="-1"><i class="bi bi-eye-slash"></i></button>
                </div>
            </div>

            <div class="pa-terms">
                <label class="pa-checkbox">
                    <input type="checkbox" name="terms" id="terms" required>
                    <span class="pa-checkbox-mark"><i class="bi bi-check"></i></span>
                    <span class="pa-checkbox-label">I agree to the <a href="#">Terms of Service</a> & <a href="#">Privacy Policy</a></span>
                </label>
            </div>

            <button type="submit" class="pa-submit-btn" id="regSubmitBtn">
                <span class="pa-btn-text">Create Account</span>
            </button>
        </form>

        <div class="pa-divider"><span>Or sign up with</span></div>

        <div class="pa-social-row">
            <button type="button" class="pa-social-btn" onclick="Swal.fire({icon:'info',title:'Coming Soon',text:'Google signup coming soon!',background:'rgba(15,15,30,1)',color:'#fff',confirmButtonColor:'#6366f1'})">
                <svg viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
                Google
            </button>
            <button type="button" class="pa-social-btn" onclick="Swal.fire({icon:'info',title:'Coming Soon',text:'GitHub signup coming soon!',background:'rgba(15,15,30,1)',color:'#fff',confirmButtonColor:'#6366f1'})">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                GitHub
            </button>
        </div>

        <div class="pa-switch">
            Already have an account?
            <a href="{{ route('login') }}" class="pa-switch-link">Sign in <i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="pa-card-footer">
            <i class="bi bi-shield-lock-fill"></i>
            <span>Your information is protected with 256-bit encryption</span>
        </div>
    </div>

    <div style="text-align:center;margin-top:24px;">
        <a href="/" style="color:rgba(255,255,255,0.3);font-size:13px;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='rgba(255,255,255,0.6)'" onmouseout="this.style.color='rgba(255,255,255,0.3)'">← Back to HMD Publishing</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Particles
    const pc = document.getElementById('particles');
    if (pc) { for (let i=0;i<30;i++){const p=document.createElement('div');p.className='pa-particle';p.style.left=Math.random()*100+'%';p.style.animationDuration=(Math.random()*15+10)+'s';p.style.animationDelay=(Math.random()*20)+'s';p.style.width=p.style.height=(Math.random()*3+1)+'px';p.style.opacity=Math.random()*0.5+0.2;pc.appendChild(p);} }

    // Password toggles
    function setupPw(btnId,inputId){const b=document.getElementById(btnId);const i=document.getElementById(inputId);if(b&&i){b.addEventListener('click',function(){const t=i.getAttribute('type')==='password'?'text':'password';i.setAttribute('type',t);this.querySelector('i').className=t==='password'?'bi bi-eye-slash':'bi bi-eye';});}}
    setupPw('pwToggle1','password'); setupPw('pwToggle2','password_confirmation');

    // Submit loader
    const form=document.getElementById('regForm');const btn=document.getElementById('regSubmitBtn');
    if(form&&btn){form.addEventListener('submit',function(e){
        if(document.getElementById('password').value!==document.getElementById('password_confirmation').value){e.preventDefault();Swal.fire({icon:'error',title:"Passwords Don't Match",text:'Please make sure your passwords match.',background:'rgba(15,15,30,1)',color:'#fff',confirmButtonColor:'#6366f1'});return;}
        btn.disabled=true;const t=btn.querySelector('.pa-btn-text');t.textContent='Creating account...';const s=document.createElement('div');s.className='pa-spinner';btn.appendChild(s);
        setTimeout(function(){if(btn.disabled){btn.disabled=false;t.textContent='Create Account';if(s.parentNode)s.remove();}},10000);
    });}

    // Validation errors
    const errEl=document.getElementById('regErrors');
    if(errEl){try{const errs=JSON.parse(errEl.value);Swal.fire({icon:'error',title:'Validation Error',text:Array.isArray(errs)?errs.join('\n'):errEl.value,background:'rgba(15,15,30,1)',color:'#fff',confirmButtonColor:'#6366f1',iconColor:'#f87171'});}catch(e){}}
});
</script>
</body>
</html>
