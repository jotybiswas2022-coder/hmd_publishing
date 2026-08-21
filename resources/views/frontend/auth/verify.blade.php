<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Verify Email | HMD Publishing</title>
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
                <div class="au-card-icon"><i class="bi bi-envelope-check"></i></div>
                <h2 class="au-card-title">Verify Your Email</h2>
                <p class="au-card-subtitle">We've sent you a verification link</p>
            </div>

            <div class="au-card-body">
                @if (session('resent'))
                    <div class="au-alert-success">A fresh verification link has been sent to your email address.</div>
                @endif

                <p style="color:#6b7280;font-size:15px;margin-bottom:12px;">
                    Before proceeding, please check your email for a verification link.
                </p>
                <p style="color:#6b7280;font-size:14px;margin-bottom:24px;">
                    If you did not receive the email,
                </p>

                <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="au-submit-btn">
                        <span>Click here to request another</span>
                    </button>
                </form>

                <div class="au-signup-row" style="margin-top:22px;">
                    <a href="{{ route('login') }}" class="au-signup-link">Back to Sign In <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</main>

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
.au-card-header{margin-bottom:24px;}
.au-card-icon{width:64px;height:64px;display:flex;align-items:center;justify-content:center;background:#eff6ff;border:1px solid #bfdbfe;border-radius:50%;margin:0 auto 16px;font-size:28px;color:#2563EB;}
.au-card-title{font-size:24px;font-weight:800;color:#111827;margin-bottom:6px;letter-spacing:-0.5px;}
.au-card-subtitle{font-size:14px;color:#6b7280;}
.au-card-body{}
.au-alert-success{background:#ecfdf5;border:1px solid #a7f3d0;color:#059669;border-radius:10px;padding:12px 16px;font-size:14px;margin-bottom:20px;}
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
