<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Confirm Password | HMD Publishing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
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
    <div class="au-container" style="max-width:500px;">
        <div class="au-card" style="text-align:center;">

            <div class="au-card-header">
                <div class="au-card-icon"><i class="bi bi-shield-lock"></i></div>
                <h2 class="au-card-title">Confirm Password</h2>
                <p class="au-card-subtitle">Please confirm your password before continuing.</p>
            </div>

            <div class="au-card-body">
                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <div class="au-input-group">
                        <label class="au-input-label" for="password">Password</label>
                        <div class="au-input-wrap">
                            <i class="bi bi-lock-fill au-input-icon"></i>
                            <input id="password" type="password" class="au-input @error('password') au-input-error @enderror"
                                   name="password" required autocomplete="current-password">
                            <button type="button" class="au-pw-toggle" id="pwToggle1" tabindex="-1"><i class="bi bi-eye-slash"></i></button>
                        </div>
                        @error('password')<span class="au-error-text">{{ $message }}</span>@enderror
                    </div>

                    <button type="submit" class="au-submit-btn" style="margin-top:8px;">
                        <span>Confirm Password</span>
                    </button>
                </form>

                @if (Route::has('password.request'))
                    <div class="au-signup-row" style="margin-top:22px;">
                        <a href="{{ route('password.request') }}" class="au-signup-link">Forgot your password? <i class="bi bi-arrow-right"></i></a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('pwToggle1');
    const inp = document.getElementById('password');
    if (btn && inp) {
        btn.addEventListener('click', function() {
            const t = inp.getAttribute('type') === 'password' ? 'text' : 'password';
            inp.setAttribute('type', t);
            this.querySelector('i').className = t === 'password' ? 'bi bi-eye-slash' : 'bi bi-eye';
        });
    }
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
.au-main{background:#f8fafc;padding:60px 5% 80px;min-height:calc(100vh - 120px);display:flex;align-items:center;justify-content:center;}
.au-card{width:100%;background:#fff;border:1px solid #e5e7eb;border-radius:16px;padding:40px 36px;box-shadow:0 4px 20px rgba(0,0,0,0.06);}
.au-card-header{margin-bottom:28px;}
.au-card-icon{width:64px;height:64px;display:flex;align-items:center;justify-content:center;background:#eff6ff;border:1px solid #bfdbfe;border-radius:50%;margin:0 auto 16px;font-size:28px;color:#2563EB;}
.au-card-title{font-size:24px;font-weight:800;color:#111827;margin-bottom:6px;letter-spacing:-0.5px;}
.au-card-subtitle{font-size:14px;color:#6b7280;}
.au-card-body{text-align:left;}
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
.au-submit-btn{width:100%;padding:14px 24px;background:#111827;border:none;border-radius:10px;font-family:inherit;font-size:15px;font-weight:700;color:#fff;cursor:pointer;transition:all 0.2s ease;}
.au-submit-btn:hover{background:#2563EB;transform:translateY(-1px);box-shadow:0 4px 12px rgba(37,99,235,0.3);}
.au-signup-row{text-align:center;font-size:14px;color:#6b7280;display:flex;align-items:center;justify-content:center;gap:6px;}
.au-signup-link{display:inline-flex;align-items:center;gap:4px;font-weight:700;color:#2563EB;text-decoration:none;transition:all 0.2s ease;}
.au-signup-link:hover{color:#1d4ed8;}
.au-signup-link i{font-size:13px;transition:transform 0.2s ease;}
.au-signup-link:hover i{transform:translateX(3px);}
@media(max-width:600px){.au-topbar{display:none;}.au-header-inner{flex-direction:column;gap:15px;}.au-nav{flex-wrap:wrap;justify-content:center;gap:15px;}.au-card{padding:28px 20px;}}
</style>
</body>
</html>
