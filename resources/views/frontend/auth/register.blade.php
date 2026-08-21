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
</head>
<body>

<!-- TOP BAR -->
<div class="au-topbar">
    <div class="au-container au-topbar-inner">
        <div class="au-topbar-tag">Trusted by 10,000+ authors</div>
        <div class="au-topbar-contacts">
            <span>📞 UK +44 7888 862764</span>
            <span>|</span>
            <span>📞 US +1 888 832 8969</span>
            <span>|</span>
            <span>✉️ info@hmdpublishing.com</span>
        </div>
    </div>
</div>

<!-- HEADER -->
<header class="au-header">
    <div class="au-container au-header-inner">
        <a href="/" class="au-brand">HMD <span class="au-brand-light">Publishing</span></a>
        <nav class="au-nav">
            <a href="/">Home</a>
            <a href="/services">Services</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </nav>
    </div>
</header>

<!-- MAIN -->
<main class="au-main">
    <div class="au-container au-grid">

        {{-- Left: Brand --}}
        <div class="au-brand-section">
            <div class="au-brand-content">
                <div class="au-brand-badge">Join HMD Publishing</div>
                <h1 class="au-brand-title">Create your<br><span class="au-brand-highlight">author account</span></h1>
                <p class="au-brand-desc">Track your publishing projects, manage orders, and collaborate with our team — all in one place.</p>

                <div class="au-brand-stats">
                    <div class="au-stat-item">
                        <span class="au-stat-num">10,000+</span>
                        <span class="au-stat-label">Books Published</span>
                    </div>
                    <div class="au-stat-divider"></div>
                    <div class="au-stat-item">
                        <span class="au-stat-num">47</span>
                        <span class="au-stat-label">Countries Served</span>
                    </div>
                    <div class="au-stat-divider"></div>
                    <div class="au-stat-item">
                        <span class="au-stat-num">4.7★</span>
                        <span class="au-stat-label">Trustpilot</span>
                    </div>
                </div>

                <div class="au-feature-list">
                    <div class="au-feature-item"><i class="bi bi-shield-check"></i><span>Secure & encrypted</span></div>
                    <div class="au-feature-item"><i class="bi bi-lightning-fill"></i><span>Real-time order tracking</span></div>
                    <div class="au-feature-item"><i class="bi bi-globe2"></i><span>Global publishing reach</span></div>
                </div>
            </div>
        </div>

        {{-- Right: Register Card --}}
        <div class="au-card-wrapper">
            <div class="au-card">
                <div class="au-card-header">
                    <div class="au-card-icon"><i class="bi bi-person-plus-fill"></i></div>
                    <h2 class="au-card-title">Create Account</h2>
                    <p class="au-card-subtitle">Fill in your details to get started.</p>
                </div>

                <div class="au-card-body">
                    <form method="POST" action="{{ route('register') }}" id="regForm" autocomplete="off">
                        @csrf

                        @if ($errors->any())
                            <input type="hidden" id="regErrors" value='{{ json_encode($errors->all()) }}'>
                        @endif

                        {{-- Name --}}
                        <div class="au-input-group">
                            <label class="au-input-label" for="name">Full Name</label>
                            <div class="au-input-wrap">
                                <i class="bi bi-person-fill au-input-icon"></i>
                                <input id="name" type="text" class="au-input @error('name') au-input-error @enderror"
                                       name="name" value="{{ old('name') }}" placeholder="John Doe" required autofocus>
                            </div>
                            @error('name')<span class="au-error-text">{{ $message }}</span>@enderror
                        </div>

                        {{-- Email --}}
                        <div class="au-input-group">
                            <label class="au-input-label" for="email">Email</label>
                            <div class="au-input-wrap">
                                <i class="bi bi-envelope-fill au-input-icon"></i>
                                <input id="email" type="email" class="au-input @error('email') au-input-error @enderror"
                                       name="email" value="{{ old('email') }}" placeholder="you@example.com" required>
                            </div>
                            @error('email')<span class="au-error-text">{{ $message }}</span>@enderror
                        </div>

                        {{-- Password --}}
                        <div class="au-input-group">
                            <label class="au-input-label" for="password">Password</label>
                            <div class="au-input-wrap">
                                <i class="bi bi-lock-fill au-input-icon"></i>
                                <input id="password" type="password" class="au-input @error('password') au-input-error @enderror"
                                       name="password" placeholder="Create a strong password" required>
                                <button type="button" class="au-pw-toggle" id="pwToggle1" tabindex="-1"><i class="bi bi-eye-slash"></i></button>
                            </div>
                            @error('password')<span class="au-error-text">{{ $message }}</span>@enderror
                        </div>

                        {{-- Confirm Password --}}
                        <div class="au-input-group">
                            <label class="au-input-label" for="password_confirmation">Confirm Password</label>
                            <div class="au-input-wrap">
                                <i class="bi bi-shield-check au-input-icon"></i>
                                <input id="password_confirmation" type="password" class="au-input"
                                       name="password_confirmation" placeholder="Repeat your password" required>
                                <button type="button" class="au-pw-toggle" id="pwToggle2" tabindex="-1"><i class="bi bi-eye-slash"></i></button>
                            </div>
                        </div>

                        {{-- Terms --}}
                        <div class="au-terms">
                            <label class="au-checkbox">
                                <input type="checkbox" name="terms" id="terms" required>
                                <span class="au-checkbox-mark"><i class="bi bi-check"></i></span>
                                <span class="au-checkbox-label">I agree to the <a href="#" class="au-link-inline">Terms of Service</a> & <a href="#" class="au-link-inline">Privacy Policy</a></span>
                            </label>
                        </div>

                        {{-- Submit --}}
                        <button type="submit" class="au-submit-btn" id="submitBtn">
                            <span class="au-btn-text">Create Account</span>
                            <span class="au-btn-loader" id="btnLoader"><i class="bi bi-arrow-right"></i></span>
                        </button>
                    </form>

                    <div class="au-divider"><span>Or sign up with</span></div>

                    <div class="au-social-row">
                        <button type="button" class="au-social-btn" onclick="Swal.fire({icon:'info',title:'Coming Soon',text:'Google signup coming soon!',background:'#fff',color:'#111827',confirmButtonColor:'#2563EB'})">
                            <svg viewBox="0 0 24 24" width="20" height="20"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
                            Google
                        </button>
                        <button type="button" class="au-social-btn" onclick="Swal.fire({icon:'info',title:'Coming Soon',text:'GitHub signup coming soon!',background:'#fff',color:'#111827',confirmButtonColor:'#2563EB'})">
                            <i class="bi bi-github"></i> GitHub
                        </button>
                    </div>

                    <div class="au-signup-row">
                        <span>Already have an account?</span>
                        <a href="{{ route('login') }}" class="au-signup-link">Sign in <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="au-card-footer">
                    <i class="bi bi-lock-fill"></i>
                    <span>Your information is protected with 256-bit encryption.</span>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    function setupPwTog(btnId, inputId) {
        const btn = document.getElementById(btnId);
        const inp = document.getElementById(inputId);
        if (btn && inp) {
            btn.addEventListener('click', function() {
                const t = inp.getAttribute('type') === 'password' ? 'text' : 'password';
                inp.setAttribute('type', t);
                this.querySelector('i').className = t === 'password' ? 'bi bi-eye-slash' : 'bi bi-eye';
            });
        }
    }
    setupPwTog('pwToggle1', 'password');
    setupPwTog('pwToggle2', 'password_confirmation');

    const form = document.getElementById('regForm');
    const btn = document.getElementById('submitBtn');
    const btnLoader = document.getElementById('btnLoader');
    const btnText = btn?.querySelector('.au-btn-text');

    if (form && btn) {
        form.addEventListener('submit', function(e) {
            if (document.getElementById('password').value !== document.getElementById('password_confirmation').value) {
                e.preventDefault();
                Swal.fire({icon:'error',title:"Passwords Don't Match",text:'Please make sure your passwords match.',background:'#fff',color:'#111827',confirmButtonColor:'#2563EB'});
                return;
            }
            btn.disabled = true; btn.style.pointerEvents = 'none';
            btnText.textContent = 'Creating account...';
            btnLoader.innerHTML = '<div class="au-spinner"></div>';
            setTimeout(function() { if (btn.disabled) { btn.disabled = false; btn.style.pointerEvents = ''; btnText.textContent = 'Create Account'; btnLoader.innerHTML = '<i class="bi bi-arrow-right"></i>'; } }, 10000);
        });
    }

    const errEl = document.getElementById('regErrors');
    if (errEl) { try { const errs = JSON.parse(errEl.value); Swal.fire({icon:'error',title:'Validation Error',text:Array.isArray(errs)?errs.join('\n'):errEl.value,background:'#fff',color:'#111827',confirmButtonColor:'#2563EB',iconColor:'#ef4444'}); } catch(e){} }
});
</script>

<style>
*{margin:0;padding:0;box-sizing:border-box;}
body{font-family:'Inter',-apple-system,BlinkMacSystemFont,sans-serif;background:#fff;color:#111827;line-height:1.6;}
.au-container{max-width:1200px;margin:auto;}
.au-topbar{background:#111;color:#fff;padding:10px 5%;font-size:13px;}
.au-topbar-inner{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:10px;}
.au-topbar-contacts{display:flex;align-items:center;gap:8px;flex-wrap:wrap;}
.au-header{background:#fff;padding:20px 5%;border-bottom:1px solid #eee;}
.au-header-inner{display:flex;align-items:center;justify-content:space-between;gap:30px;}
.au-brand{text-decoration:none;color:#111;font-size:25px;font-weight:800;letter-spacing:-1px;}
.au-brand-light{font-weight:400;}
.au-nav{display:flex;align-items:center;gap:25px;font-size:14px;}
.au-nav a{text-decoration:none;color:#222;transition:color 0.2s ease;}
.au-nav a:hover{color:#2563EB;}
.au-main{background:#f8fafc;padding:60px 5% 80px;min-height:calc(100vh - 120px);display:flex;align-items:center;}
.au-grid{display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;max-width:1100px;}
.au-brand-section{max-width:480px;}
.au-brand-badge{display:inline-flex;align-items:center;gap:6px;padding:6px 14px;background:#eff6ff;border:1px solid #bfdbfe;border-radius:999px;font-size:13px;font-weight:600;color:#2563EB;margin-bottom:24px;}
.au-brand-badge::before{content:'';width:6px;height:6px;border-radius:50%;background:#22c55e;}
.au-brand-title{font-size:42px;line-height:1.1;letter-spacing:-2px;font-weight:800;color:#111827;margin-bottom:16px;}
.au-brand-highlight{color:#2563EB;}
.au-brand-desc{font-size:17px;color:#6b7280;margin-bottom:36px;line-height:1.7;}
.au-brand-stats{display:flex;align-items:center;gap:20px;margin-bottom:36px;padding:20px 24px;background:#fff;border:1px solid #e5e7eb;border-radius:14px;}
.au-stat-item{text-align:center;flex:1;}
.au-stat-num{display:block;font-size:22px;font-weight:800;color:#111827;line-height:1.2;}
.au-stat-label{font-size:12px;color:#6b7280;font-weight:500;text-transform:uppercase;letter-spacing:0.5px;margin-top:4px;}
.au-stat-divider{width:1px;height:40px;background:#e5e7eb;}
.au-feature-list{display:flex;flex-direction:column;gap:12px;}
.au-feature-item{display:flex;align-items:center;gap:12px;font-size:15px;color:#6b7280;}
.au-feature-item i{font-size:18px;color:#2563EB;width:24px;text-align:center;}
.au-card-wrapper{display:flex;align-items:center;justify-content:center;}
.au-card{width:100%;max-width:420px;background:#fff;border:1px solid #e5e7eb;border-radius:16px;padding:36px 32px;box-shadow:0 4px 20px rgba(0,0,0,0.06);}
.au-card-header{text-align:center;margin-bottom:28px;}
.au-card-icon{width:56px;height:56px;display:flex;align-items:center;justify-content:center;background:#eff6ff;border:1px solid #bfdbfe;border-radius:16px;margin:0 auto 16px;font-size:24px;color:#2563EB;}
.au-card-title{font-size:24px;font-weight:800;color:#111827;margin-bottom:6px;letter-spacing:-0.5px;}
.au-card-subtitle{font-size:14px;color:#6b7280;}
.au-input-group{margin-bottom:18px;}
.au-input-label{display:block;font-size:14px;font-weight:600;color:#374151;margin-bottom:6px;}
.au-input-wrap{position:relative;}
.au-input-icon{position:absolute;left:14px;top:50%;transform:translateY(-50%);color:#9ca3af;z-index:2;font-size:16px;transition:all 0.2s ease;}
.au-input{width:100%;padding:13px 44px 13px 44px;background:#f9fafb;border:1.5px solid #e5e7eb;border-radius:10px;font-family:inherit;font-size:15px;color:#111827;outline:none;transition:all 0.2s ease;}
.au-input::placeholder{color:#9ca3af;}
.au-input:focus{border-color:#2563EB;background:#fff;box-shadow:0 0 0 3px rgba(37,99,235,0.1);}
.au-input-wrap:focus-within .au-input-icon{color:#2563EB;}
.au-input-error{border-color:#ef4444!important;}
.au-error-text{display:block;color:#ef4444;font-size:13px;margin-top:6px;font-weight:500;}
.au-pw-toggle{position:absolute;right:12px;top:50%;transform:translateY(-50%);background:none;border:none;color:#9ca3af;font-size:18px;cursor:pointer;padding:4px;z-index:2;transition:color 0.2s ease;}
.au-pw-toggle:hover{color:#374151;}
.au-terms{margin-bottom:22px;}
.au-checkbox{display:inline-flex;align-items:center;gap:8px;cursor:pointer;user-select:none;}
.au-checkbox input{display:none;}
.au-checkbox-mark{width:18px;height:18px;border:2px solid #d1d5db;border-radius:5px;display:flex;align-items:center;justify-content:center;transition:all 0.2s ease;flex-shrink:0;}
.au-checkbox-mark i{font-size:11px;color:#fff;opacity:0;transform:scale(0);transition:all 0.2s ease;}
.au-checkbox input:checked+.au-checkbox-mark{background:#2563EB;border-color:#2563EB;}
.au-checkbox input:checked+.au-checkbox-mark i{opacity:1;transform:scale(1);}
.au-checkbox-label{font-size:14px;color:#6b7280;font-weight:500;}
.au-link-inline{color:#2563EB;text-decoration:none;font-weight:600;}
.au-link-inline:hover{color:#1d4ed8;}
.au-submit-btn{width:100%;padding:14px 24px;background:#111827;border:none;border-radius:10px;font-family:inherit;font-size:15px;font-weight:700;color:#fff;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:10px;transition:all 0.2s ease;}
.au-submit-btn:hover{background:#2563EB;transform:translateY(-1px);box-shadow:0 4px 12px rgba(37,99,235,0.3);}
.au-submit-btn:disabled{opacity:0.7;cursor:not-allowed;transform:none;}
.au-btn-loader{font-size:16px;display:flex;align-items:center;}
.au-spinner{width:18px;height:18px;border:2.5px solid rgba(255,255,255,0.3);border-top-color:#fff;border-radius:50%;animation:au-spin 0.7s linear infinite;}
@keyframes au-spin{to{transform:rotate(360deg);}}
.au-divider{display:flex;align-items:center;margin:22px 0;}
.au-divider::before,.au-divider::after{content:'';flex:1;height:1px;background:#e5e7eb;}
.au-divider span{padding:0 16px;font-size:13px;color:#9ca3af;font-weight:500;}
.au-social-row{display:flex;gap:12px;margin-bottom:22px;}
.au-social-btn{flex:1;display:flex;align-items:center;justify-content:center;gap:8px;padding:12px 16px;background:#fff;border:1px solid #e5e7eb;border-radius:10px;font-family:inherit;font-size:14px;font-weight:600;color:#374151;cursor:pointer;transition:all 0.2s ease;}
.au-social-btn:hover{background:#f9fafb;border-color:#d1d5db;}
.au-signup-row{text-align:center;font-size:14px;color:#6b7280;display:flex;align-items:center;justify-content:center;gap:6px;flex-wrap:wrap;}
.au-signup-link{display:inline-flex;align-items:center;gap:4px;font-weight:700;color:#2563EB;text-decoration:none;transition:all 0.2s ease;}
.au-signup-link:hover{color:#1d4ed8;}
.au-signup-link i{font-size:13px;transition:transform 0.2s ease;}
.au-signup-link:hover i{transform:translateX(3px);}
.au-card-footer{display:flex;align-items:center;justify-content:center;gap:8px;margin-top:22px;padding-top:18px;border-top:1px solid #f3f4f6;}
.au-card-footer i{font-size:13px;color:#2563EB;}
.au-card-footer span{font-size:12px;color:#9ca3af;}
@media(max-width:900px){.au-grid{grid-template-columns:1fr;gap:40px;}.au-brand-section{max-width:100%;text-align:center;}.au-brand-title{font-size:32px;}.au-brand-stats{justify-content:center;}.au-feature-list{flex-direction:row;flex-wrap:wrap;justify-content:center;}.au-card-wrapper{justify-content:center;}.au-card{max-width:440px;}.au-main{padding:40px 5% 60px;}}
@media(max-width:600px){.au-topbar{display:none;}.au-header-inner{flex-direction:column;gap:15px;}.au-nav{flex-wrap:wrap;justify-content:center;gap:15px;}.au-card{padding:28px 20px;}.au-social-row{flex-direction:column;}.au-brand-title{font-size:28px;letter-spacing:-1px;}}
</style>
</body>
</html>
