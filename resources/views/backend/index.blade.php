@extends('backend.app')

@section('content')

<div class="db-page">

    {{-- BG Orbs --}}
    <div class="db-orb db-orb-1"></div>
    <div class="db-orb db-orb-2"></div>
    <div class="db-orb db-orb-3"></div>
    <div class="db-orb db-orb-4"></div>

    {{-- Particles --}}
    <div class="db-particles" id="dbParticles"></div>

    {{-- Dashboard Header --}}
    <div class="db-header animate-in">
        <div class="db-header-bg"></div>
        <div class="db-header-glow"></div>

        <div class="db-header-content">
            <div class="db-header-left">
                <div class="db-admin-logo">
                    <div class="db-admin-logo-fallback">
                        {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                    </div>
                    <span class="db-admin-logo-dot"></span>
                </div>
                <div>
                    <span class="db-greeting"><span class="db-greeting-dot"></span> {{ now()->format('l, d F Y') }} &nbsp;·&nbsp; <span id="dbClock">--:--</span></span>
                    <h1 class="db-header-title">Welcome back, <span class="db-header-name">{{ auth()->user()->name ?? 'Admin' }}</span></h1>
                    <p class="db-header-sub">Here's what's happening with your publishing house today.</p>
                </div>
            </div>
            <div class="db-header-right">
                <div class="db-header-stat">
                    <span class="db-header-stat-num">{{ $stats['contacts'] }}</span>
                    <span class="db-header-stat-label">Messages</span>
                </div>
                <div class="db-header-stat">
                    <span class="db-header-stat-num">{{ $stats['orders'] }}</span>
                    <span class="db-header-stat-label">Orders</span>
                </div>
                <div class="db-header-stat">
                    <span class="db-header-stat-num">{{ $stats['briefs'] + $stats['samples'] }}</span>
                    <span class="db-header-stat-label">New Leads</span>
                </div>
                <div class="db-header-stat">
                    <span class="db-header-stat-num">{{ $stats['portfolio'] }}</span>
                    <span class="db-header-stat-label">Projects</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Stat Cards --}}
    <div class="db-stats">
        <a href="{{ route('contact.index') }}" class="db-stat-card" style="--accent:#2563EB;--accent-bg:rgba(37,99,235,0.12);">
            <div class="db-stat-icon"><i class="bi bi-chat-dots"></i></div>
            <div class="db-stat-info">
                <span class="db-stat-value">{{ $stats['contacts'] }}</span>
                <span class="db-stat-label">Total Messages</span>
            </div>
            <span class="db-stat-trend"><i class="bi bi-arrow-right-circle"></i></span>
        </a>

        <a href="{{ route('orders.index') }}" class="db-stat-card" style="--accent:#10b981;--accent-bg:rgba(16,185,129,0.12);">
            <div class="db-stat-icon"><i class="bi bi-bag-check"></i></div>
            <div class="db-stat-info">
                <span class="db-stat-value">{{ $stats['orders'] }}</span>
                <span class="db-stat-label">Total Orders</span>
            </div>
            <span class="db-stat-trend"><i class="bi bi-arrow-right-circle"></i></span>
        </a>

        <a href="{{ route('bookbriefs.index') }}" class="db-stat-card" style="--accent:#8b5cf6;--accent-bg:rgba(139,92,246,0.12);">
            <div class="db-stat-icon"><i class="bi bi-book-half"></i></div>
            <div class="db-stat-info">
                <span class="db-stat-value">{{ $stats['briefs'] }}</span>
                <span class="db-stat-label">Book Briefs</span>
            </div>
            <span class="db-stat-trend"><i class="bi bi-arrow-right-circle"></i></span>
        </a>

        <a href="{{ route('editsamples.index') }}" class="db-stat-card" style="--accent:#f59e0b;--accent-bg:rgba(245,158,11,0.12);">
            <div class="db-stat-icon"><i class="bi bi-pencil-square"></i></div>
            <div class="db-stat-info">
                <span class="db-stat-value">{{ $stats['samples'] }}</span>
                <span class="db-stat-label">Edit Samples</span>
            </div>
            <span class="db-stat-trend"><i class="bi bi-arrow-right-circle"></i></span>
        </a>

        <a href="{{ route('formatsamples.index') }}" class="db-stat-card" style="--accent:#14b8a6;--accent-bg:rgba(20,184,166,0.12);">
            <div class="db-stat-icon"><i class="bi bi-layout-text-window"></i></div>
            <div class="db-stat-info">
                <span class="db-stat-value">{{ $stats['formats'] }}</span>
                <span class="db-stat-label">Format Samples</span>
            </div>
            <span class="db-stat-trend"><i class="bi bi-arrow-right-circle"></i></span>
        </a>

        <a href="{{ route('service-pages.index') }}" class="db-stat-card" style="--accent:#f43f5e;--accent-bg:rgba(244,63,94,0.12);">
            <div class="db-stat-icon"><i class="bi bi-file-earmark-text"></i></div>
            <div class="db-stat-info">
                <span class="db-stat-value">{{ $stats['service_pages'] }}</span>
                <span class="db-stat-label">Service Pages</span>
            </div>
            <span class="db-stat-trend"><i class="bi bi-arrow-right-circle"></i></span>
        </a>

        <a href="{{ route('portfolio.items.index') }}" class="db-stat-card" style="--accent:#06b6d4;--accent-bg:rgba(6,182,212,0.12);">
            <div class="db-stat-icon"><i class="bi bi-images"></i></div>
            <div class="db-stat-info">
                <span class="db-stat-value">{{ $stats['portfolio'] }}</span>
                <span class="db-stat-label">Portfolio Items</span>
            </div>
            <span class="db-stat-trend"><i class="bi bi-arrow-right-circle"></i></span>
        </a>
    </div>

    {{-- Quick Actions --}}
    <div class="db-actions">
        <span class="db-actions-title"><i class="bi bi-lightning-charge"></i> Quick actions</span>
        <div class="db-action-chip db-action-chip-pf">
            <a href="{{ route('portfolio.items.create') }}"><i class="bi bi-plus-lg"></i> Portfolio Item</a>
        </div>
        <div class="db-action-chip db-action-chip-services">
            <a href="{{ route('service-categories.create') }}"><i class="bi bi-plus-lg"></i> Service Category</a>
        </div>
        <div class="db-action-chip db-action-chip-plan">
            <a href="{{ route('service-pages.create') }}"><i class="bi bi-plus-lg"></i> Service Page</a>
        </div>
    </div>

    {{-- Recent Activity --}}
    <div class="db-grid-3">

        {{-- Recent Orders --}}
        <div class="db-panel">
            <div class="db-panel-head">
                <div class="db-panel-title">
                    <div class="db-panel-icon" style="color:#10b981;background:rgba(16,185,129,0.1);"><i class="bi bi-receipt"></i></div>
                    <div>
                        <h3 class="db-panel-h">Recent Orders</h3>
                        <p class="db-panel-sub">Latest checkout activity</p>
                    </div>
                </div>
                <a href="{{ route('orders.index') }}" class="db-panel-link">View all <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="db-panel-body">
                @forelse ($recentOrders as $order)
                    <a href="{{ route('orders.show', $order) }}" class="db-item">
                        <div class="db-item-main">
                            <span class="db-item-title">#{{ $order->order_number }}</span>
                            <span class="db-item-sub">{{ $order->customer_name }}</span>
                        </div>
                        <div class="db-item-side">
                            <span class="db-item-price">${{ number_format($order->total) }}.00</span>
                            <span class="db-pill db-pill-{{ $order->status }}">{{ $order->status }}</span>
                        </div>
                    </a>
                @empty
                    <div class="db-mini-empty">
                        <i class="bi bi-bag-x"></i>
                        <span>No orders yet</span>
                    </div>
                @endforelse
            </div>
        </div>

        {{-- Recent Book Briefs --}}
        <div class="db-panel">
            <div class="db-panel-head">
                <div class="db-panel-title">
                    <div class="db-panel-icon" style="color:#8b5cf6;background:rgba(139,92,246,0.1);"><i class="bi bi-book-half"></i></div>
                    <div>
                        <h3 class="db-panel-h">Book Briefs</h3>
                        <p class="db-panel-sub">Project-fit review submissions</p>
                    </div>
                </div>
                <a href="{{ route('bookbriefs.index') }}" class="db-panel-link">View all <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="db-panel-body">
                @forelse ($recentBriefs as $brief)
                    <div class="db-item">
                        <div class="db-item-main">
                            <span class="db-item-title">{{ $brief->email }}</span>
                            <span class="db-item-sub">{{ $brief->book_type }} · {{ $brief->target_length }}</span>
                        </div>
                        <div class="db-item-side">
                            <span class="db-item-date">{{ \Carbon\Carbon::parse($brief->created_at)->timezone('Asia/Dhaka')->format('d M') }}</span>
                        </div>
                    </div>
                @empty
                    <div class="db-mini-empty">
                        <i class="bi bi-book-half"></i>
                        <span>No briefs yet</span>
                    </div>
                @endforelse
            </div>
        </div>

        {{-- Edit Samples --}}
        <div class="db-panel">
            <div class="db-panel-head">
                <div class="db-panel-title">
                    <div class="db-panel-icon" style="color:#f59e0b;background:rgba(245,158,11,0.1);"><i class="bi bi-pencil-square"></i></div>
                    <div>
                        <h3 class="db-panel-h">Edit Samples</h3>
                        <p class="db-panel-sub">Free sample edit requests</p>
                    </div>
                </div>
                <a href="{{ route('editsamples.index') }}" class="db-panel-link">View all <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="db-panel-body">
                @forelse ($recentSamples as $sample)
                    <div class="db-item">
                        <div class="db-item-main">
                            <span class="db-item-title">{{ $sample->email }}</span>
                            <span class="db-item-sub">{{ \Illuminate\Support\Str::limit($sample->sample, 42) }}</span>
                        </div>
                        <div class="db-item-side">
                            <span class="db-item-date">{{ \Carbon\Carbon::parse($sample->created_at)->timezone('Asia/Dhaka')->format('d M') }}</span>
                        </div>
                    </div>
                @empty
                    <div class="db-mini-empty">
                        <i class="bi bi-pencil-square"></i>
                        <span>No samples yet</span>
                    </div>
                @endforelse
            </div>
        </div>

        {{-- Format Samples --}}
        <div class="db-panel">
            <div class="db-panel-head">
                <div class="db-panel-title">
                    <div class="db-panel-icon" style="color:#14b8a6;background:rgba(20,184,166,0.1);"><i class="bi bi-layout-text-window"></i></div>
                    <div>
                        <h3 class="db-panel-h">Format Samples</h3>
                        <p class="db-panel-sub">Free chapter formatting requests</p>
                    </div>
                </div>
                <a href="{{ route('formatsamples.index') }}" class="db-panel-link">View all <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="db-panel-body">
                @forelse ($recentFormats as $format)
                    <div class="db-item">
                        <div class="db-item-main">
                            <span class="db-item-title">{{ $format->email }}</span>
                            <span class="db-item-sub">Style: {{ $format->style ?: 'Not specified' }} @if($format->file_path)· File attached @endif</span>
                        </div>
                        <div class="db-item-side">
                            <span class="db-item-date">{{ \Carbon\Carbon::parse($format->created_at)->timezone('Asia/Dhaka')->format('d M') }}</span>
                        </div>
                    </div>
                @empty
                    <div class="db-mini-empty">
                        <i class="bi bi-layout-text-window"></i>
                        <span>No format samples yet</span>
                    </div>
                @endforelse
            </div>
        </div>

    </div>

    {{-- Recent Messages --}}
    <div class="db-messages">
        <div class="db-messages-header">
            <div class="db-messages-header-left">
                <div class="db-messages-icon"><i class="bi bi-chat-dots"></i></div>
                <div>
                    <h2 class="db-messages-title">Recent Messages</h2>
                    <p class="db-messages-sub">Latest inquiries from the contact form.</p>
                </div>
            </div>
            <a href="{{ route('contact.index') }}" class="db-messages-link">
                View all <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        @if($contacts->isEmpty())
            <div class="db-empty">
                <div class="db-empty-icon"><i class="bi bi-inbox"></i></div>
                <h3 class="db-empty-title">No messages yet</h3>
                <p class="db-empty-desc">Messages from the contact form will appear here.</p>
            </div>
        @else
            <div class="db-table-wrap">
                <table class="db-table">
                    <thead>
                        <tr>
                            <th class="db-th db-th-name">Name</th>
                            <th class="db-th db-th-email">Email</th>
                            <th class="db-th db-th-msg">Message</th>
                            <th class="db-th db-th-date">Date</th>
                            <th class="db-th db-th-time">Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $index => $contact)
                            <tr class="db-tr">
                                <td class="db-td db-td-name">
                                    <div class="db-avatar">
                                        {{ strtoupper(substr($contact->name, 0, 1)) }}
                                    </div>
                                    <span>{{ $contact->name }}</span>
                                </td>
                                <td class="db-td db-td-email">
                                    <a href="mailto:{{ $contact->email }}" class="db-email-link">{{ $contact->email }}</a>
                                </td>
                                <td class="db-td db-td-msg">
                                    <span class="db-msg-text">{{ \Illuminate\Support\Str::limit($contact->message, 80) }}</span>
                                </td>
                                <td class="db-td db-td-date">
                                    {{ \Carbon\Carbon::parse($contact->created_at)->timezone('Asia/Dhaka')->format('d M Y') }}
                                </td>
                                <td class="db-td db-td-time">
                                    {{ \Carbon\Carbon::parse($contact->created_at)->timezone('Asia/Dhaka')->format('h:i A') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

</div>

<style>
/* ===== RESET (scoped) ===== */
.db-page {
    --clr-primary: #2563EB;
    --clr-light: #60A5FA;
    --clr-dark: #1E40AF;
    --clr-bg: #0f172a;
    --clr-card: rgba(255,255,255,0.04);
    --clr-border: rgba(255,255,255,0.06);
    --clr-text: #f1f5f9;
    --clr-muted: #94a3b8;
    --clr-hover: rgba(37,99,235,0.08);
    --font: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;

    font-family: var(--font);
    color: var(--clr-text);
    -webkit-font-smoothing: antialiased;
    position: relative;
    background: var(--clr-bg);
    min-height: calc(100vh - 80px);
    padding: 28px 24px;
    overflow: hidden;
}

/* ===== ORBS ===== */
.db-orb {
    position: fixed; border-radius: 50%; filter: blur(80px); pointer-events: none; z-index: 0;
}
.db-orb-1 {
    width: 500px; height: 500px;
    background: radial-gradient(circle, rgba(37,99,235,0.1), transparent 70%);
    top: -200px; right: -100px;
    animation: dbo1 14s ease-in-out infinite;
}
.db-orb-2 {
    width: 400px; height: 400px;
    background: radial-gradient(circle, rgba(96,165,250,0.07), transparent 70%);
    bottom: -150px; left: -80px;
    animation: dbo2 16s ease-in-out infinite;
}
.db-orb-3 {
    width: 300px; height: 300px;
    background: radial-gradient(circle, rgba(30,64,175,0.08), transparent 70%);
    top: 30%; left: 60%;
    animation: dbo3 18s ease-in-out infinite;
}
.db-orb-4 {
    width: 250px; height: 250px;
    background: radial-gradient(circle, rgba(37,99,235,0.05), transparent 70%);
    bottom: 20%; right: 30%;
    animation: dbo1 22s ease-in-out infinite reverse;
}
@keyframes dbo1 { 0%,100% { transform:translate(0,0) scale(1); } 50% { transform:translate(60px,40px) scale(1.1); } }
@keyframes dbo2 { 0%,100% { transform:translate(0,0) scale(1); } 50% { transform:translate(-40px,-60px) scale(1.08); } }
@keyframes dbo3 { 0%,100% { transform:translate(0,0) scale(1); } 50% { transform:translate(25px,-35px) scale(1.12); } }

/* ===== PARTICLES ===== */
.db-particles { position:fixed; inset:0; overflow:hidden; pointer-events:none; z-index:1; }
.db-p {
    position:absolute;
    background:linear-gradient(135deg,var(--clr-primary),var(--clr-light));
    border-radius:50%;
    animation:dbr linear infinite;
}
@keyframes dbr {
    0% { transform:translateY(0) rotate(0deg); opacity:0; }
    10% { opacity:0.35; }
    90% { opacity:0.1; }
    100% { transform:translateY(-100vh) rotate(360deg); opacity:0; }
}

/* ===== ANIMATIONS ===== */
@keyframes fadeUp {
    from { opacity:0; transform:translateY(24px); }
    to { opacity:1; transform:translateY(0); }
}
@keyframes fadeIn {
    from { opacity:0; }
    to { opacity:1; }
}
.db-header.animate-in {
    animation:fadeUp 0.8s cubic-bezier(.16,1,.3,1) forwards;
}

/* ===== HEADER ===== */
.db-header {
    position:relative; z-index:5;
    background:linear-gradient(135deg, rgba(37,99,235,0.08), rgba(30,64,175,0.04));
    border:1px solid rgba(37,99,235,0.1);
    border-radius:20px; padding:28px 32px; margin-bottom:24px;
    overflow:hidden;
}
.db-header-bg {
    position:absolute; inset:0;
    background:
        radial-gradient(ellipse at 20% 50%, rgba(37,99,235,0.1), transparent 60%),
        radial-gradient(ellipse at 80% 20%, rgba(96,165,250,0.06), transparent 50%);
    pointer-events:none;
}
.db-header-glow {
    position:absolute; bottom:0; left:0; right:0; height:1px;
    background:linear-gradient(90deg,transparent,rgba(37,99,235,0.2),transparent);
}
.db-header-left {
    display: flex;
    align-items: center;
    gap: 20px;
}

/* ── Admin Logo ── */
.db-admin-logo {
    position: relative;
    flex-shrink: 0;
}
.db-admin-logo-fallback {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--clr-primary), var(--clr-dark));
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: 700;
    color: #fff;
    border: 2px solid rgba(37,99,235,0.3);
    box-shadow: 0 4px 16px rgba(37,99,235,0.2);
    transition: all 0.3s ease;
}
.db-admin-logo-fallback:hover {
    transform: scale(1.05);
    border-color: rgba(96,165,250,0.6);
}
.db-admin-logo-dot {
    position: absolute;
    bottom: 2px;
    right: 2px;
    width: 14px;
    height: 14px;
    background: #22c55e;
    border: 2.5px solid var(--clr-bg);
    border-radius: 50%;
    animation: dbPulse 2s ease-in-out infinite;
}

.db-header-content {
    position:relative; z-index:1;
    display:flex; align-items:center; justify-content:space-between; gap:24px; flex-wrap:wrap;
}
.db-greeting {
    display:inline-flex; align-items:center; gap:7px;
    font-size:0.8rem; font-weight:600; color:var(--clr-light);
    margin-bottom:8px; letter-spacing:0.3px;
}
.db-greeting-dot {
    width:6px; height:6px; border-radius:50%; background:#22c55e;
    animation:dbPulse 2s ease-in-out infinite;
}
@keyframes dbPulse { 0%,100% { box-shadow:0 0 0 0 rgba(34,197,94,0.5); } 50% { box-shadow:0 0 0 5px rgba(34,197,94,0); } }
#dbClock { font-variant-numeric: tabular-nums; }
.db-header-title {
    font-size:1.6rem; font-weight:800; color:var(--clr-text);
    margin-bottom:4px; letter-spacing:-0.3px;
}
.db-header-name {
    background:linear-gradient(135deg,var(--clr-light),var(--clr-primary));
    -webkit-background-clip:text; -webkit-text-fill-color:transparent;
    background-clip:text;
}
.db-header-sub { font-size:0.88rem; color:var(--clr-muted); }
.db-header-right { display:flex; gap:16px; }
.db-header-stat {
    text-align:center; padding:10px 20px;
    background:rgba(255,255,255,0.03);
    border:1px solid rgba(255,255,255,0.05);
    border-radius:12px; min-width:90px;
    transition:all .25s ease;
}
.db-header-stat:hover { border-color:rgba(37,99,235,0.25); background:rgba(37,99,235,0.05); }
.db-header-stat-num {
    display:block; font-size:1.3rem; font-weight:800; color:var(--clr-light);
    line-height:1.2;
}
.db-header-stat-label {
    display:block; font-size:0.7rem; color:var(--clr-muted); font-weight:500;
    text-transform:uppercase; letter-spacing:0.5px;
}

/* ===== STAT CARDS ===== */
.db-stats {
    display:grid; grid-template-columns:repeat(3,1fr); gap:16px;
    margin-bottom:20px; position:relative; z-index:5;
}
.db-stat-card {
    display:flex; align-items:center; gap:14px;
    background:var(--clr-card); backdrop-filter:blur(16px) saturate(180%);
    -webkit-backdrop-filter:blur(16px) saturate(180%);
    border:1px solid var(--clr-border);
    border-radius:16px; padding:20px 22px;
    transition:all 0.4s cubic-bezier(.16,1,.3,1); cursor:pointer;
    position:relative; overflow:hidden; text-decoration:none;
}
.db-stat-card:hover {
    transform:translateY(-4px);
    border-color:var(--accent);
    box-shadow:0 12px 40px rgba(0,0,0,0.2);
}
.db-stat-card::before {
    content:''; position:absolute; top:0; left:0;
    width:4px; height:100%;
    background:var(--accent);
    border-radius:0 2px 2px 0;
}
.db-stat-card::after {
    content:''; position:absolute; right:-30px; top:-30px;
    width:90px; height:90px; border-radius:50%;
    background:radial-gradient(circle,var(--accent-bg),transparent 70%);
    opacity:0; transition:opacity .4s ease;
}
.db-stat-card:hover::after { opacity:1; }
.db-stat-icon {
    width:48px; height:48px; display:flex; align-items:center; justify-content:center;
    background:var(--accent-bg);
    border-radius:12px; font-size:1.3rem; color:var(--accent); flex-shrink:0;
}
.db-stat-info { flex:1; }
.db-stat-value {
    display:block; font-size:1.5rem; font-weight:800; color:var(--clr-text);
    line-height:1.2; letter-spacing:-0.5px;
}
.db-stat-label {
    display:block; font-size:0.78rem; color:var(--clr-muted); font-weight:500; margin-top:2px;
}
.db-stat-trend {
    display:flex; align-items:center; gap:2px;
    font-size:0.75rem; font-weight:600;
    padding:4px 10px; border-radius:6px;
    color:var(--accent); background:var(--accent-bg);
    transition:all .3s ease;
}
.db-stat-trend i { font-size:1rem; }
.db-stat-card:hover .db-stat-trend i { transform:translateX(2px); }

/* ===== QUICK ACTIONS ===== */
.db-actions {
    position:relative; z-index:5;
    display:flex; align-items:center; flex-wrap:wrap; gap:10px;
    background:var(--clr-card); backdrop-filter:blur(16px) saturate(180%);
    -webkit-backdrop-filter:blur(16px) saturate(180%);
    border:1px solid var(--clr-border);
    border-radius:16px; padding:14px 18px; margin-bottom:24px;
}
.db-actions-title {
    display:inline-flex; align-items:center; gap:7px;
    font-size:0.78rem; font-weight:700; color:var(--clr-muted);
    text-transform:uppercase; letter-spacing:0.6px; margin-right:6px;
}
.db-actions-title i { color:var(--clr-light); font-size:1rem; }
.db-action-chip {
    border-radius:10px; overflow:hidden;
    transition:transform .25s ease, box-shadow .25s ease;
}
.db-action-chip a {
    display:inline-flex; align-items:center; gap:7px;
    padding:9px 16px; font-size:0.82rem; font-weight:600;
    color:#e2e8f0; text-decoration:none; border:1px solid transparent;
    transition:all .25s ease;
}
.db-action-chip a i { font-size:0.9rem; }
.db-action-chip-plan a { background:rgba(244,63,94,0.1); border-color:rgba(244,63,94,0.25); color:#fda4af; }
.db-action-chip-plan a:hover { background:rgba(244,63,94,0.2); }
.db-action-chip-addon a { background:rgba(139,92,246,0.1); border-color:rgba(139,92,246,0.25); color:#c4b5fd; }
.db-action-chip-addon a:hover { background:rgba(139,92,246,0.2); }
.db-action-chip-pf a { background:rgba(6,182,212,0.1); border-color:rgba(6,182,212,0.25); color:#67e8f9; }
.db-action-chip-pf a:hover { background:rgba(6,182,212,0.2); }
.db-action-chip-services a { background:rgba(16,185,129,0.1); border-color:rgba(16,185,129,0.25); color:#6ee7b7; }
.db-action-chip-services a:hover { background:rgba(16,185,129,0.2); }
.db-action-chip:hover { transform:translateY(-2px); box-shadow:0 8px 24px rgba(0,0,0,0.25); }

/* ===== RECENT ACTIVITY PANELS ===== */
.db-grid-3 {
    display:grid; grid-template-columns:repeat(3,1fr); gap:16px;
    margin-bottom:24px; position:relative; z-index:5;
}
.db-panel {
    background:var(--clr-card); backdrop-filter:blur(16px) saturate(180%);
    -webkit-backdrop-filter:blur(16px) saturate(180%);
    border:1px solid var(--clr-border);
    border-radius:18px; overflow:hidden;
    transition:border-color .3s ease, transform .3s ease;
}
.db-panel:hover { border-color:rgba(37,99,235,0.12); }
.db-panel-head {
    display:flex; align-items:center; justify-content:space-between; gap:12px;
    padding:18px 18px 14px; border-bottom:1px solid rgba(255,255,255,0.04);
}
.db-panel-title { display:flex; align-items:center; gap:12px; min-width:0; }
.db-panel-icon {
    width:40px; height:40px; flex-shrink:0;
    display:flex; align-items:center; justify-content:center;
    border-radius:10px; font-size:1.1rem;
}
.db-panel-h { font-size:0.98rem; font-weight:700; color:var(--clr-text); margin:0 0 2px; }
.db-panel-sub { font-size:0.74rem; color:var(--clr-muted); margin:0; }
.db-panel-link {
    display:inline-flex; align-items:center; gap:4px; flex-shrink:0;
    font-size:0.76rem; font-weight:600; color:var(--clr-primary);
    text-decoration:none; transition:all .25s ease;
}
.db-panel-link:hover { color:var(--clr-light); gap:7px; }
.db-panel-link i { transition:transform .25s ease; }
.db-panel-link:hover i { transform:translateX(3px); }
.db-panel-body { padding:6px 8px 8px; }
.db-item {
    display:flex; align-items:center; justify-content:space-between; gap:12px;
    padding:11px 10px; border-radius:10px; text-decoration:none;
    transition:background .25s ease;
}
.db-item:hover { background:var(--clr-hover); }
.db-item-main { min-width:0; }
.db-item-title {
    display:block; font-size:0.84rem; font-weight:600; color:var(--clr-text);
    white-space:nowrap; overflow:hidden; text-overflow:ellipsis;
}
.db-item-sub {
    display:block; font-size:0.75rem; color:var(--clr-muted); margin-top:2px;
    white-space:nowrap; overflow:hidden; text-overflow:ellipsis;
}
.db-item-side { display:flex; flex-direction:column; align-items:flex-end; gap:4px; flex-shrink:0; }
.db-item-price { font-size:0.84rem; font-weight:700; color:var(--clr-light); }
.db-item-date { font-size:0.72rem; color:var(--clr-muted); font-weight:500; }
.db-mini-empty {
    display:flex; align-items:center; gap:9px;
    padding:22px 12px; color:var(--clr-muted); font-size:0.82rem;
}
.db-mini-empty i { font-size:1.1rem; opacity:0.5; }

/* ===== STATUS PILLS ===== */
.db-pill {
    display:inline-block; padding:3px 10px; border-radius:20px;
    font-size:0.68rem; font-weight:700; text-transform:capitalize; letter-spacing:0.3px;
}
.db-pill-pending { background:rgba(245,158,11,0.12); color:#fbbf24; border:1px solid rgba(245,158,11,0.2); }
.db-pill-paid { background:rgba(16,185,129,0.12); color:#34d399; border:1px solid rgba(16,185,129,0.2); }
.db-pill-processing { background:rgba(96,165,250,0.12); color:#93c5fd; border:1px solid rgba(96,165,250,0.2); }
.db-pill-completed { background:rgba(139,92,246,0.12); color:#c4b5fd; border:1px solid rgba(139,92,246,0.2); }
.db-pill-cancelled { background:rgba(248,113,113,0.12); color:#fca5a5; border:1px solid rgba(248,113,113,0.2); }

/* ===== MESSAGES SECTION ===== */
.db-messages {
    position:relative; z-index:5;
    background:var(--clr-card); backdrop-filter:blur(16px) saturate(180%);
    -webkit-backdrop-filter:blur(16px) saturate(180%);
    border:1px solid var(--clr-border);
    border-radius:20px; overflow:hidden;
    transition:all 0.4s cubic-bezier(.16,1,.3,1);
}
.db-messages:hover { border-color:rgba(37,99,235,0.1); }

.db-messages-header {
    display:flex; align-items:center; justify-content:space-between;
    padding:22px 24px; gap:16px;
    border-bottom:1px solid rgba(255,255,255,0.04);
}
.db-messages-header-left { display:flex; align-items:center; gap:14px; }
.db-messages-icon {
    width:42px; height:42px; display:flex; align-items:center; justify-content:center;
    background:rgba(37,99,235,0.1);
    border:1px solid rgba(37,99,235,0.12);
    border-radius:10px; font-size:1.15rem; color:var(--clr-light);
}
.db-messages-title { font-size:1.1rem; font-weight:700; color:var(--clr-text); margin:0; }
.db-messages-sub { font-size:0.78rem; color:var(--clr-muted); margin:2px 0 0; }
.db-messages-link {
    display:inline-flex; align-items:center; gap:5px;
    font-size:0.82rem; font-weight:600; color:var(--clr-primary);
    text-decoration:none; transition:all 0.3s ease;
    padding:6px 14px; border-radius:8px;
    background:rgba(37,99,235,0.06);
}
.db-messages-link:hover { color:var(--clr-light); gap:8px; background:rgba(37,99,235,0.1); }
.db-messages-link i { transition:transform 0.3s ease; }
.db-messages-link:hover i { transform:translateX(3px); }

/* ===== TABLE ===== */
.db-table-wrap { overflow-x:auto; }
.db-table {
    width:100%; border-collapse:collapse; font-size:0.85rem;
}
.db-th {
    text-align:left; padding:14px 18px; font-weight:600; font-size:0.75rem;
    color:var(--clr-muted); text-transform:uppercase; letter-spacing:0.5px;
    background:rgba(255,255,255,0.02);
    border-bottom:1px solid rgba(255,255,255,0.04);
    white-space:nowrap;
}
.db-tr {
    transition:background 0.3s ease;
}
.db-tr:hover { background:var(--clr-hover); }
.db-td {
    padding:14px 18px; color:var(--clr-text); vertical-align:middle;
    border-bottom:1px solid rgba(255,255,255,0.03);
}
.db-td-name { display:flex; align-items:center; gap:10px; }
.db-avatar {
    width:34px; height:34px; border-radius:50%;
    background:linear-gradient(135deg,var(--clr-primary),var(--clr-dark));
    display:flex; align-items:center; justify-content:center;
    font-size:0.75rem; font-weight:700; color:#fff; flex-shrink:0;
}
.db-email-link { color:var(--clr-primary); text-decoration:none; font-weight:500; transition:color 0.3s; }
.db-email-link:hover { color:var(--clr-light); text-decoration:underline; }

.db-msg-text {
    display:block; font-size:0.84rem; color:var(--clr-muted); line-height:1.5;
    max-width:340px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;
}

/* ===== EMPTY STATE ===== */
.db-empty {
    text-align:center; padding:60px 20px;
}
.db-empty-icon {
    font-size:2.5rem; color:rgba(255,255,255,0.06); margin-bottom:12px;
}
.db-empty-title { font-size:1.05rem; font-weight:700; color:var(--clr-text); margin-bottom:6px; }
.db-empty-desc { font-size:0.85rem; color:var(--clr-muted); }

/* ===== RESPONSIVE ===== */
@media (max-width: 1200px) {
    .db-grid-3 { grid-template-columns:1fr 1fr; }
    .db-grid-3 .db-panel:last-child { grid-column:1 / -1; }
}
@media (max-width: 992px) {
    .db-page { padding:20px 16px; }
    .db-stats { grid-template-columns:repeat(2,1fr); }
    .db-header-content { flex-direction:column; align-items:flex-start; }
    .db-header-right { width:100%; justify-content:space-around; }
    .db-header-stat { min-width:0; flex:1; }
    .db-th-email, .db-td-email { display:none; }
}
@media (max-width: 640px) {
    .db-page { padding:16px 12px; }
    .db-header { padding:20px 18px; border-radius:16px; }
    .db-header-title { font-size:1.25rem; }
    .db-header-right { gap:8px; }
    .db-header-stat { padding:8px 12px; }
    .db-header-stat-num { font-size:1.1rem; }
    .db-stats { grid-template-columns:1fr; gap:12px; }
    .db-grid-3 { grid-template-columns:1fr; }
    .db-grid-3 .db-panel:last-child { grid-column:auto; }
    .db-actions { padding:12px 14px; }
    .db-messages-header { flex-direction:column; align-items:flex-start; }
    .db-th-date, .db-td-date { display:none; }
    .db-th-time, .db-td-time { display:none; }
    .db-messages { border-radius:14px; }
    .db-stat-card { padding:16px 18px; }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ===================== LIVE CLOCK =====================
    function tickClock() {
        var clock = document.getElementById('dbClock');
        if (!clock) return;
        var parts = new Intl.DateTimeFormat('en-GB', {
            hour: '2-digit', minute: '2-digit', second: '2-digit',
            hour12: true
        }).format(new Date());
        clock.innerText = parts;
    }
    tickClock();
    setInterval(tickClock, 1000);

    // ===================== PARTICLES =====================
    const pc = document.getElementById('dbParticles');
    if (pc) {
        for (let i = 0; i < 25; i++) {
            const p = document.createElement('div');
            p.className = 'db-p';
            const s = Math.random() * 3 + 2;
            p.style.cssText = `
                width:${s}px;height:${s}px;
                left:${Math.random() * 100}%;
                animation-duration:${Math.random() * 14 + 10}s;
                animation-delay:${Math.random() * 5}s;
                bottom:-10px;
                opacity:${Math.random() * 0.35 + 0.1};
            `;
            pc.appendChild(p);
        }
    }

    // ===================== STAGGER ANIMATION =====================
    const cards = document.querySelectorAll('.db-stat-card');
    cards.forEach((el, i) => {
        el.style.animation = `fadeUp 0.6s cubic-bezier(.16,1,.3,1) ${0.15 + i * 0.08}s forwards`;
        el.style.opacity = '0';
    });

    const panels = document.querySelectorAll('.db-panel');
    panels.forEach((el, i) => {
        el.style.animation = `fadeUp 0.6s cubic-bezier(.16,1,.3,1) ${0.5 + i * 0.1}s forwards`;
        el.style.opacity = '0';
    });

    const actions = document.querySelectorAll('.db-action-chip');
    actions.forEach((el, i) => {
        el.style.animation = `fadeUp 0.5s cubic-bezier(.16,1,.3,1) ${0.3 + i * 0.06}s forwards`;
        el.style.opacity = '0';
    });

    const tableRows = document.querySelectorAll('.db-tr');
    tableRows.forEach((el, i) => {
        el.style.animation = `fadeIn 0.4s ease ${0.4 + i * 0.06}s forwards`;
        el.style.opacity = '0';
    });
});
</script>

@endsection