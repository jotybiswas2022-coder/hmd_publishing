:root {
    --cbg: #0f172a;
    --crd: rgba(255,255,255,0.04);
    --ctext: #f1f5f9;
    --cmuted: #94a3b8;
    --csub: #64748b;
    --cborder: rgba(255,255,255,0.08);
    --cprimary: #60A5FA;
    --cprimary-dim: rgba(96,165,250,0.12);
    --chover: rgba(255,255,255,0.06);
}
.svc-page { padding: 24px 28px; height: 100%; }
.svc-header {
    background: var(--crd); border: 1px solid var(--cborder); border-radius: 14px;
    padding: 18px 22px; backdrop-filter: blur(8px); margin-bottom: 20px;
}
.svc-header-inner {
    display: flex; flex-wrap: wrap; justify-content: space-between;
    align-items: center; gap: 12px;
}
.svc-header-title { font-size: 18px; font-weight: 700; color: var(--ctext); margin: 0 0 2px 0; }
.svc-header-sub { font-size: 13px; color: var(--cmuted); margin: 0; }
.svc-header-actions { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
.svc-header-badge {
    display: inline-flex; align-items: center; gap: 6px;
    background: var(--cprimary-dim); color: var(--cprimary);
    padding: 8px 16px; border-radius: 24px; font-size: 13px;
    font-weight: 600; border: 1px solid rgba(96,165,250,0.2);
}
.svc-btn-add {
    display: inline-flex; align-items: center; gap: 6px;
    background: linear-gradient(135deg, #2563EB, #1E40AF);
    color: #fff; text-decoration: none; padding: 9px 18px;
    border-radius: 10px; font-size: 13px; font-weight: 600;
    box-shadow: 0 4px 12px rgba(37,99,235,0.25);
    transition: all 0.2s ease; border: none; cursor: pointer;
}
.svc-btn-add:hover { transform: translateY(-1px); box-shadow: 0 6px 20px rgba(37,99,235,0.35); color: #fff; }

.svc-btn-cancel {
    display: inline-flex; align-items: center; gap: 6px;
    background: rgba(255,255,255,0.04); border: 1px solid var(--cborder);
    color: var(--cmuted); text-decoration: none; padding: 9px 18px;
    border-radius: 10px; font-size: 13px; font-weight: 500;
    transition: all 0.2s ease;
}
.svc-btn-cancel:hover { background: rgba(255,255,255,0.08); color: var(--ctext); }
.svc-error-box {
    background: rgba(248,113,113,0.08); border: 1px solid rgba(248,113,113,0.2);
    border-radius: 12px; padding: 16px 20px; color: #fca5a5;
    font-size: 14px; margin-bottom: 20px;
}
.svc-error-box ul { padding-left: 18px; }

/* ===== Folders ===== */
.svc-folder-list { display: flex; flex-direction: column; gap: 12px; }
.svc-folder {
    border-radius: 14px; border: 1px solid var(--cborder);
    background: var(--crd); overflow: hidden; backdrop-filter: blur(8px);
}
.svc-folder-head {
    width: 100%; display: flex; align-items: center; gap: 12px;
    background: none; border: none; cursor: pointer; padding: 16px 20px;
    color: var(--ctext); text-align: left; transition: background 0.18s ease;
}
.svc-folder-head:hover { background: var(--chover); }
.svc-folder-chevron {
    width: 28px; height: 28px; flex-shrink: 0; border-radius: 8px;
    background: var(--cprimary-dim); color: var(--cprimary);
    display: flex; align-items: center; justify-content: center;
    transition: transform 0.2s ease;
}
.svc-folder-label { font-size: 15px; font-weight: 700; color: var(--ctext); }
.svc-folder-count {
    margin-left: auto; background: rgba(255,255,255,0.06);
    color: var(--cmuted); border: 1px solid var(--cborder);
    padding: 3px 12px; border-radius: 20px; font-size: 12px; font-weight: 600;
}
.svc-folder-body {
    max-height: 0; overflow: hidden; opacity: 0;
    transition: max-height 0.3s ease, opacity 0.3s ease;
    border-top: 0 solid var(--cborder);
}
.svc-folder.open .svc-folder-body {
    max-height: 3000px; opacity: 1; border-top-width: 1px;
}
.svc-folder.open .svc-folder-chevron { transform: rotate(90deg); }

/* ===== Rows ===== */
.svc-row {
    display: flex; align-items: center; gap: 18px;
    padding: 14px 20px; border-bottom: 1px solid var(--cborder);
    flex-wrap: wrap;
}
.svc-row:last-child { border-bottom: none; }
.svc-row:hover { background: var(--chover); }
.svc-row-main { min-width: 200px; flex: 1; }
.svc-name { font-weight: 600; color: var(--ctext); font-size: 14px; display: flex; align-items: center; gap: 8px; }
.svc-slug { font-size: 12px; color: var(--csub); margin-top: 2px; font-family: monospace; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; max-width: 320px; }
.svc-cell { display: flex; flex-direction: column; gap: 3px; min-width: 90px; }
.svc-cell-label {
    font-size: 10px; text-transform: uppercase; letter-spacing: 0.4px;
    color: var(--csub); font-weight: 600;
}
.svc-price { font-weight: 700; color: var(--ctext); font-size: 13px; }
.svc-muted { color: var(--csub); font-size: 13px; }
.svc-dark-tag {
    display: inline-block; background: rgba(15,23,42,0.6); color: #fff;
    border: 1px solid rgba(255,255,255,0.12); padding: 3px 8px;
    border-radius: 6px; font-size: 11px; font-weight: 700; white-space: nowrap;
}
.svc-arrow-tag {
    display: inline-block; background: rgba(96,165,250,0.12); color: var(--cprimary);
    border: 1px solid rgba(96,165,250,0.2); padding: 3px 8px;
    border-radius: 6px; font-size: 11px; font-weight: 700; white-space: nowrap;
}
.svc-badge-tag {
    display: inline-block; background: rgba(245,158,11,0.12);
    color: #fbbf24; border: 1px solid rgba(245,158,11,0.2);
    padding: 3px 8px; border-radius: 6px; font-size: 11px; font-weight: 700;
    white-space: nowrap;
}
.svc-status {
    display: inline-block; padding: 4px 10px; border-radius: 20px;
    font-size: 12px; font-weight: 600; white-space: nowrap;
}
.svc-status-on { background: rgba(16,185,129,0.12); color: #10b981; border: 1px solid rgba(16,185,129,0.2); }
.svc-status-off { background: rgba(148,163,184,0.1); color: var(--csub); border: 1px solid var(--cborder); }
.svc-row-actions { display: flex; gap: 6px; margin-left: auto; }
.svc-action-btn {
    width: 34px; height: 34px; display: inline-flex; align-items: center; justify-content: center;
    background: rgba(255,255,255,0.04); border: 1px solid var(--cborder);
    border-radius: 8px; color: var(--cprimary); cursor: pointer;
    transition: all 0.2s ease; font-size: 0.9rem; text-decoration: none;
}
.svc-action-btn:hover { background: var(--cprimary-dim); color: var(--cprimary); }
.svc-action-danger { color: #f87171; }
.svc-action-danger:hover { background: rgba(248,113,113,0.1); color: #f87171; }
.svc-group-label { display: inline-flex; align-items: center; gap: 5px; font-size: 11px; font-weight: 600; color: var(--cprimary); background: var(--cprimary-dim); border: 1px solid rgba(96,165,250,0.2); padding: 2px 8px; border-radius: 20px; }

/* ===== Form ===== */
.svc-form-grid {
    display: grid; grid-template-columns: 1fr 1fr; gap: 18px;
}
.svc-form-card {
    background: var(--crd); border: 1px solid var(--cborder);
    border-radius: 14px; padding: 22px;
}
.svc-form-card-title {
    font-size: 15px; font-weight: 700; color: var(--ctext);
    margin-bottom: 18px; display: flex; align-items: center;
    justify-content: space-between;
}
.svc-form-card-title i { color: var(--cprimary); }
.svc-form-group { margin-bottom: 16px; }
.svc-form-label {
    display: block; font-size: 13px; font-weight: 600;
    color: var(--cmuted); margin-bottom: 7px;
}
.svc-form-input {
    width: 100%; box-sizing: border-box;
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--cborder); border-radius: 8px;
    padding: 11px 14px; color: var(--ctext); font-size: 14px;
    outline: none; transition: all 0.2s ease;
}
.svc-form-input:focus {
    border-color: rgba(96,165,250,0.5);
    box-shadow: 0 0 0 2px rgba(96,165,250,0.15);
}
.svc-form-input::placeholder { color: rgba(148,163,184,0.5); }
.svc-form-input select.svc-form-input, select.svc-form-input { cursor: pointer; }
.svc-form-input option { background: #1e293b; color: var(--ctext); }
.svc-form-row {
    display: grid; grid-template-columns: 1fr 1fr; gap: 14px;
}
.svc-form-hint { display: block; margin-top: 6px; font-size: 12px; color: var(--csub); }
.svc-form-hint b { color: var(--cprimary); }

.svc-form-toggles { display: flex; flex-direction: column; gap: 14px; justify-content: flex-end; }
.svc-toggle { display: flex; align-items: center; gap: 10px; cursor: pointer; }
.svc-toggle input { display: none; }
.svc-toggle-box {
    width: 40px; height: 22px; border-radius: 20px;
    background: rgba(255,255,255,0.08); border: 1px solid var(--cborder);
    position: relative; transition: all 0.2s ease; flex-shrink: 0;
}
.svc-toggle-box::after {
    content: ''; position: absolute; top: 2px; left: 2px;
    width: 16px; height: 16px; border-radius: 50%;
    background: var(--cmuted); transition: all 0.2s ease;
}
.svc-toggle input:checked + .svc-toggle-box {
    background: rgba(96,165,250,0.25); border-color: rgba(96,165,250,0.5);
}
.svc-toggle input:checked + .svc-toggle-box::after {
    left: 20px; background: var(--cprimary);
}
.svc-toggle-text { font-size: 13px; color: var(--cmuted); font-weight: 500; }
.svc-toggle-text i { color: var(--cprimary); }

.svc-form-footer {
    display: flex; justify-content: flex-end; gap: 12px;
    margin-top: 20px; padding-top: 20px; border-top: 1px solid var(--cborder);
}
.svc-btn-save {
    display: inline-flex; align-items: center; gap: 6px;
    background: linear-gradient(135deg, #2563EB, #1E40AF);
    color: #fff; border: none; padding: 11px 26px; border-radius: 10px;
    font-size: 14px; font-weight: 600; cursor: pointer;
    box-shadow: 0 4px 12px rgba(37,99,235,0.25);
    transition: all 0.2s ease;
}
.svc-btn-save:hover { transform: translateY(-1px); box-shadow: 0 6px 20px rgba(37,99,235,0.35); }

.empty-icon { font-size: 40px; color: var(--csub); margin-bottom: 8px; display: block; }
.empty-title { font-weight: 600; font-size: 16px; color: var(--cmuted); }
.empty-sub { font-size: 13px; color: var(--csub); }
.empty-btn { margin-top: 12px; display: inline-flex; }

@media (max-width: 992px) {
    .svc-page { padding: 20px 22px; }
}
@media (max-width: 768px) {
    .svc-page { padding: 16px; }
    .svc-form-grid { grid-template-columns: 1fr; }
    .svc-form-row { grid-template-columns: 1fr; }
    .svc-header-inner { flex-direction: column; align-items: flex-start; gap: 10px; }
    .svc-row { flex-direction: column; align-items: flex-start; gap: 10px; }
    .svc-row-main { min-width: 100%; }
    .svc-row-actions { margin-left: 0; }
}