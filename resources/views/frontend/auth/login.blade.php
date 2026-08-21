<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sign In | HMD Publishing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>

<!-- =========================================================
     TOP BAR
========================================================= -->
<div class="login-topbar">
    <div class="login-container login-topbar-inner">
        <div class="login-topbar-tag">Trusted by 10,000+ authors</div>
        <div class="login-topbar-contacts">
            <span>📞 UK +44 7888 862764</span>
            <span>|</span>
            <span>📞 US +1 888 832 8969</span>
            <span>|</span>
            <span>✉️ info@hmdpublishing.com</span>
        </div>
    </div>
</div>

<!-- =========================================================
     HEADER
========================================================= -->
<header class="login-header">
    <div class="login-container login-header-inner">
        <a href="/" class="login-brand">
            HMD <span class="login-brand-light">Publishing</span>
        </a>
        <nav class="login-nav">
            <a href="/">Home</a>
            <a href="/services">Services</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </nav>
    </div>
</header>

<!-- =========================================================
     MAIN LOGIN AREA
========================================================= -->
<main class="login-main">

    <div class="login-container login-grid">

        {{-- Left: Brand Section --}}
        <div class="login-brand-section">
            <div class="login-brand-content">
                <div class="login-brand-badge">Welcome Back</div>

                <h1 class="login-brand-title">
                    Sign in to your<br>
                    <span class="login-brand-highlight">author dashboard</span>
                </h1>

                <p class="login-brand-desc">
                    Manage your publishing projects, track orders,
                    and continue your book's journey from manuscript to market.
                </p>

                {{-- Stats --}}
                <div class="login-brand-stats">
                    <div class="login-stat-item">
                        <span class="login-stat-num">10,000+</span>
                        <span class="login-stat-label">Books Published</span>
                    </div>
                    <div class="login-stat-divider"></div>
                    <div class="login-stat-item">
                        <span class="login-stat-num">47</span>
                        <span class="login-stat-label">Countries Served</span>
                    </div>
                    <div class="login-stat-divider"></div>
                    <div class="login-stat-item">
                        <span class="login-stat-num">4.7★</span>
                        <span class="login-stat-label">Trustpilot</span>
                    </div>
                </div>

                {{-- Feature List --}}
                <div class="login-feature-list">
                    <div class="login-feature-item">
                        <i class="bi bi-shield-check"></i>
                        <span>Secure & encrypted</span>
                    </div>
                    <div class="login-feature-item">
                        <i class="bi bi-lightning-fill"></i>
                        <span>Real-time order tracking</span>
                    </div>
                    <div class="login-feature-item">
                        <i class="bi bi-globe2"></i>
                        <span>Global publishing reach</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Right: Login Card --}}
        <div class="login-card-wrapper">
            <div class="login-card">

                {{-- Card Header --}}
                <div class="login-card-header">
                    <div class="login-card-icon">
                        <i class="bi bi-person-circle"></i>
                    </div>
                    <h2 class="login-card-title">Sign in</h2>
                    <p class="login-card-subtitle">Welcome back! Please enter your details.</p>
                </div>

                {{-- Card Body --}}
                <div class="login-card-body">
                    <form method="POST" action="{{ route('login') }}" id="loginForm" autocomplete="off">
                        @csrf

                        {{-- Validation Errors --}}
                        @if ($errors->any())
                            <input type="hidden" id="validationErrors" value='{{ json_encode($errors->all()) }}'>
                        @endif

                        @if (session('success'))
                            <input type="hidden" id="sessionSuccess" value="{{ session('success') }}">
                        @endif

                        {{-- Email --}}
                        <div class="login-input-group">
                            <label class="login-input-label" for="email">Email</label>
                            <div class="login-input-wrap">
                                <i class="bi bi-envelope-fill login-input-icon"></i>
                                <input id="email" type="email"
                                       class="login-input @error('email') login-input-error @enderror"
                                       name="email"
                                       value="{{ old('email') }}"
                                       placeholder="you@example.com"
                                       required autocomplete="off" autofocus>
                            </div>
                            @error('email')
                                <span class="login-error-text">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="login-input-group">
                            <label class="login-input-label" for="password">Password</label>
                            <div class="login-input-wrap">
                                <i class="bi bi-lock-fill login-input-icon"></i>
                                <input id="password" type="password"
                                       class="login-input @error('password') login-input-error @enderror"
                                       name="password"
                                       placeholder="••••••••"
                                       required autocomplete="current-password">
                                <button type="button" class="login-pw-toggle" id="pwToggle" tabindex="-1">
                                    <i class="bi bi-eye-slash"></i>
                                </button>
                            </div>
                            @error('password')
                                <span class="login-error-text">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Options --}}
                        <div class="login-options-row">
                            <label class="login-checkbox">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="login-checkbox-mark">
                                    <i class="bi bi-check"></i>
                                </span>
                                <span class="login-checkbox-label">Remember me</span>
                            </label>

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="login-forgot-link">
                                    Forgot password?
                                </a>
                            @endif
                        </div>

                        {{-- Submit --}}
                        <button type="submit" class="login-submit-btn" id="submitBtn">
                            <span class="login-btn-text">Sign In</span>
                            <span class="login-btn-loader" id="btnLoader">
                                <i class="bi bi-arrow-right"></i>
                            </span>
                        </button>
                    </form>

                    {{-- Divider --}}
                    <div class="login-divider"><span>Or continue with</span></div>

                    {{-- Social Login --}}
                    <div class="login-social-row">
                        <button type="button" class="login-social-btn" onclick="Swal.fire({icon:'info',title:'Coming Soon',text:'Google login coming soon!',background:'#fff',color:'#111827',confirmButtonColor:'#2563EB'})">
                            <svg viewBox="0 0 24 24" width="20" height="20">
                                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z"/>
                                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                            </svg>
                            Google
                        </button>
                        <button type="button" class="login-social-btn" onclick="Swal.fire({icon:'info',title:'Coming Soon',text:'GitHub login coming soon!',background:'#fff',color:'#111827',confirmButtonColor:'#2563EB'})">
                            <i class="bi bi-github"></i>
                            GitHub
                        </button>
                    </div>

                    {{-- Sign Up Link --}}
                    <div class="login-signup-row">
                        <span>Don't have an account?</span>
                        <a href="{{ route('register') }}" class="login-signup-link">
                            Create account
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                {{-- Card Footer --}}
                <div class="login-card-footer">
                    <i class="bi bi-lock-fill"></i>
                    <span>Your data is fully encrypted and secure.</span>
                </div>
            </div>
        </div>

    </div>
</main>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {

    // ===================== PASSWORD TOGGLE =====================
    const pwToggle = document.getElementById('pwToggle');
    const pwInput = document.getElementById('password');
    if (pwToggle && pwInput) {
        pwToggle.addEventListener('click', function() {
            const type = pwInput.getAttribute('type') === 'password' ? 'text' : 'password';
            pwInput.setAttribute('type', type);
            this.querySelector('i').className = type === 'password' ? 'bi bi-eye-slash' : 'bi bi-eye';
        });
    }

    // ===================== SUBMIT BUTTON LOADER =====================
    const loginForm = document.getElementById('loginForm');
    const submitBtn = document.getElementById('submitBtn');
    const btnLoader = document.getElementById('btnLoader');
    const btnText = submitBtn?.querySelector('.login-btn-text');

    if (loginForm && submitBtn) {
        loginForm.addEventListener('submit', function() {
            submitBtn.disabled = true;
            submitBtn.style.pointerEvents = 'none';
            btnText.textContent = 'Signing in...';
            btnLoader.innerHTML = '<div class="login-spinner"></div>';

            setTimeout(function() {
                if (submitBtn.disabled) {
                    submitBtn.disabled = false;
                    submitBtn.style.pointerEvents = '';
                    btnText.textContent = 'Sign In';
                    btnLoader.innerHTML = '<i class="bi bi-arrow-right"></i>';
                }
            }, 10000);
        });
    }

    // ===================== SWEETALERT2 TOASTS =====================
    const validationErrors = document.getElementById('validationErrors');
    if (validationErrors) {
        try {
            const errors = JSON.parse(validationErrors.value);
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: Array.isArray(errors) ? errors.join('\n') : validationErrors.value,
                background: '#fff',
                color: '#111827',
                confirmButtonColor: '#2563EB',
                confirmButtonText: 'Try Again',
                iconColor: '#ef4444',
            });
        } catch(e) {}
    }

    const sessionSuccess = document.getElementById('sessionSuccess');
    if (sessionSuccess) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: sessionSuccess.value,
            background: '#fff',
            color: '#111827',
            confirmButtonColor: '#2563EB',
            timer: 3000,
            timerProgressBar: true,
            iconColor: '#22c55e',
        });
    }
});
</script>

<style>
/* ===================== RESET & BASE ===================== */
* { margin:0; padding:0; box-sizing:border-box; }
body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    background: #ffffff;
    color: #111827;
    line-height: 1.6;
}
.login-container { max-width:1200px; margin:auto; }

/* ===================== TOP BAR ===================== */
.login-topbar {
    background: #111;
    color: #fff;
    padding: 10px 5%;
    font-size: 13px;
}
.login-topbar-inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
}
.login-topbar-contacts {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
}

/* ===================== HEADER ===================== */
.login-header {
    background: #fff;
    padding: 20px 5%;
    border-bottom: 1px solid #eee;
}
.login-header-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 30px;
}
.login-brand {
    text-decoration: none;
    color: #111;
    font-size: 25px;
    font-weight: 800;
    letter-spacing: -1px;
}
.login-brand-light { font-weight: 400; }
.login-nav {
    display: flex;
    align-items: center;
    gap: 25px;
    font-size: 14px;
}
.login-nav a {
    text-decoration: none;
    color: #222;
    transition: color 0.2s ease;
}
.login-nav a:hover { color: #2563EB; }

/* ===================== MAIN AREA ===================== */
.login-main {
    background: #f8fafc;
    padding: 60px 5% 80px;
    min-height: calc(100vh - 120px);
    display: flex;
    align-items: center;
}
.login-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    max-width: 1100px;
}

/* ===================== BRAND SECTION (LEFT) ===================== */
.login-brand-section {
    max-width: 480px;
}
.login-brand-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 14px;
    background: #eff6ff;
    border: 1px solid #bfdbfe;
    border-radius: 999px;
    font-size: 13px;
    font-weight: 600;
    color: #2563EB;
    margin-bottom: 24px;
}
.login-brand-badge::before {
    content: '';
    width: 6px; height: 6px;
    border-radius: 50%;
    background: #22c55e;
}
.login-brand-title {
    font-size: 42px;
    line-height: 1.1;
    letter-spacing: -2px;
    font-weight: 800;
    color: #111827;
    margin-bottom: 16px;
}
.login-brand-highlight {
    color: #2563EB;
}
.login-brand-desc {
    font-size: 17px;
    color: #6b7280;
    margin-bottom: 36px;
    line-height: 1.7;
}

/* Stats */
.login-brand-stats {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 36px;
    padding: 20px 24px;
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 14px;
}
.login-stat-item { text-align: center; flex:1; }
.login-stat-num {
    display: block;
    font-size: 22px;
    font-weight: 800;
    color: #111827;
    line-height: 1.2;
}
.login-stat-label {
    font-size: 12px;
    color: #6b7280;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-top: 4px;
}
.login-stat-divider {
    width: 1px; height: 40px;
    background: #e5e7eb;
}

/* Feature List */
.login-feature-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
}
.login-feature-item {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 15px;
    color: #6b7280;
}
.login-feature-item i {
    font-size: 18px;
    color: #2563EB;
    width: 24px;
    text-align: center;
}

/* ===================== LOGIN CARD (RIGHT) ===================== */
.login-card-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
}
.login-card {
    width: 100%;
    max-width: 420px;
    background: #ffffff;
    border: 1px solid #e5e7eb;
    border-radius: 16px;
    padding: 36px 32px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
}

/* Card Header */
.login-card-header {
    text-align: center;
    margin-bottom: 28px;
}
.login-card-icon {
    width: 56px; height: 56px;
    display: flex; align-items: center; justify-content: center;
    background: #eff6ff;
    border: 1px solid #bfdbfe;
    border-radius: 16px;
    margin: 0 auto 16px;
    font-size: 24px;
    color: #2563EB;
}
.login-card-title {
    font-size: 24px;
    font-weight: 800;
    color: #111827;
    margin-bottom: 6px;
    letter-spacing: -0.5px;
}
.login-card-subtitle {
    font-size: 14px;
    color: #6b7280;
}

/* Card Body */
.login-card-body { }

/* ===================== INPUTS ===================== */
.login-input-group {
    margin-bottom: 18px;
}
.login-input-label {
    display: block;
    font-size: 14px;
    font-weight: 600;
    color: #374151;
    margin-bottom: 6px;
}
.login-input-wrap {
    position: relative;
}
.login-input-icon {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: #9ca3af;
    z-index: 2;
    font-size: 16px;
    transition: all 0.2s ease;
}
.login-input {
    width: 100%;
    padding: 13px 44px 13px 44px;
    background: #f9fafb;
    border: 1.5px solid #e5e7eb;
    border-radius: 10px;
    font-family: inherit;
    font-size: 15px;
    color: #111827;
    outline: none;
    transition: all 0.2s ease;
}
.login-input::placeholder { color: #9ca3af; }
.login-input:focus {
    border-color: #2563EB;
    background: #fff;
    box-shadow: 0 0 0 3px rgba(37,99,235,0.1);
}
.login-input:focus + .login-input-icon,
.login-input-wrap:focus-within .login-input-icon {
    color: #2563EB;
}
.login-input-error {
    border-color: #ef4444 !important;
}
.login-error-text {
    display: block;
    color: #ef4444;
    font-size: 13px;
    margin-top: 6px;
    font-weight: 500;
}

/* Password Toggle */
.login-pw-toggle {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: #9ca3af;
    font-size: 18px;
    cursor: pointer;
    padding: 4px;
    z-index: 2;
    transition: color 0.2s ease;
}
.login-pw-toggle:hover { color: #374151; }

/* ===================== OPTIONS ROW ===================== */
.login-options-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 22px;
}
.login-checkbox {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    user-select: none;
}
.login-checkbox input { display: none; }
.login-checkbox-mark {
    width: 18px; height: 18px;
    border: 2px solid #d1d5db;
    border-radius: 5px;
    display: flex; align-items: center; justify-content: center;
    transition: all 0.2s ease;
    flex-shrink: 0;
}
.login-checkbox-mark i {
    font-size: 11px;
    color: #fff;
    opacity: 0;
    transform: scale(0);
    transition: all 0.2s ease;
}
.login-checkbox input:checked + .login-checkbox-mark {
    background: #2563EB;
    border-color: #2563EB;
}
.login-checkbox input:checked + .login-checkbox-mark i {
    opacity: 1;
    transform: scale(1);
}
.login-checkbox-label {
    font-size: 14px;
    color: #6b7280;
    font-weight: 500;
}
.login-forgot-link {
    font-size: 14px;
    font-weight: 600;
    color: #2563EB;
    text-decoration: none;
    transition: color 0.2s ease;
}
.login-forgot-link:hover { color: #1d4ed8; }

/* ===================== SUBMIT BUTTON ===================== */
.login-submit-btn {
    width: 100%;
    padding: 14px 24px;
    background: #111827;
    border: none;
    border-radius: 10px;
    font-family: inherit;
    font-size: 15px;
    font-weight: 700;
    color: #fff;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    transition: all 0.2s ease;
}
.login-submit-btn:hover {
    background: #2563EB;
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(37,99,235,0.3);
}
.login-submit-btn:disabled {
    opacity: 0.7;
    cursor: not-allowed;
    transform: none;
}
.login-btn-loader {
    font-size: 16px;
    display: flex;
    align-items: center;
}
.login-spinner {
    width: 18px; height: 18px;
    border: 2.5px solid rgba(255,255,255,0.3);
    border-top-color: #fff;
    border-radius: 50%;
    animation: login-spin 0.7s linear infinite;
}
@keyframes login-spin { to { transform: rotate(360deg); } }

/* ===================== DIVIDER ===================== */
.login-divider {
    display: flex;
    align-items: center;
    margin: 22px 0;
}
.login-divider::before,
.login-divider::after {
    content: '';
    flex: 1;
    height: 1px;
    background: #e5e7eb;
}
.login-divider span {
    padding: 0 16px;
    font-size: 13px;
    color: #9ca3af;
    font-weight: 500;
}

/* ===================== SOCIAL BUTTONS ===================== */
.login-social-row {
    display: flex;
    gap: 12px;
    margin-bottom: 22px;
}
.login-social-btn {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 12px 16px;
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    font-family: inherit;
    font-size: 14px;
    font-weight: 600;
    color: #374151;
    cursor: pointer;
    transition: all 0.2s ease;
}
.login-social-btn:hover {
    background: #f9fafb;
    border-color: #d1d5db;
}
.login-social-btn i,
.login-social-btn svg {
    font-size: 18px;
}

/* ===================== SIGNUP ROW ===================== */
.login-signup-row {
    text-align: center;
    font-size: 14px;
    color: #6b7280;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    flex-wrap: wrap;
}
.login-signup-link {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    font-weight: 700;
    color: #2563EB;
    text-decoration: none;
    transition: all 0.2s ease;
}
.login-signup-link:hover { color: #1d4ed8; }
.login-signup-link i {
    font-size: 13px;
    transition: transform 0.2s ease;
}
.login-signup-link:hover i { transform: translateX(3px); }

/* ===================== CARD FOOTER ===================== */
.login-card-footer {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    margin-top: 22px;
    padding-top: 18px;
    border-top: 1px solid #f3f4f6;
}
.login-card-footer i { font-size: 13px; color: #2563EB; }
.login-card-footer span { font-size: 12px; color: #9ca3af; }

/* ===================== RESPONSIVE ===================== */
@media (max-width: 900px) {
    .login-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    .login-brand-section { max-width: 100%; text-align: center; }
    .login-brand-title { font-size: 32px; }
    .login-brand-stats { justify-content: center; }
    .login-feature-list { flex-direction: row; flex-wrap: wrap; justify-content: center; }
    .login-card-wrapper { justify-content: center; }
    .login-card { max-width: 440px; }
    .login-main { padding: 40px 5% 60px; }
}
@media (max-width: 600px) {
    .login-topbar { display: none; }
    .login-header-inner { flex-direction: column; gap: 15px; }
    .login-nav { flex-wrap: wrap; justify-content: center; gap: 15px; }
    .login-card { padding: 28px 20px; }
    .login-social-row { flex-direction: column; }
    .login-options-row { flex-direction: column; gap: 12px; align-items: flex-start; }
    .login-brand-title { font-size: 28px; letter-spacing: -1px; }
}
</style>
</body>
</html>
