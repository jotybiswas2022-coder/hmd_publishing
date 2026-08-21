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
.sc-page { padding: 24px 28px; height: 100%; }
.sc-header {
    background: var(--crd); border: 1px solid var(--cborder); border-radius: 14px;
    padding: 18px 22px; backdrop-filter: blur(8px); margin-bottom: 20px;
}
.sc-header-inner {
    display: flex; flex-wrap: wrap; justify-content: space-between;
    align-items: center; gap: 12px;
}
.sc-header-title { font-size: 18px; font-weight: 700; color: var(--ctext); margin: 0 0 2px 0; }
.sc-header-sub { font-size: 13px; color: var(--cmuted); margin: 0; }
.sc-header-actions { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
.sc-header-badge {
    display: inline-flex; align-items: center; gap: 6px;
    background: var(--cprimary-dim); color: var(--cprimary);
    padding: 8px 16px; border-radius: 24px; font-size: 13px;
    font-weight: 600; border: 1px solid rgba(96,165,250,0.2);
}
.sc-btn-add {
    display: inline-flex; align-items: center; gap: 6px;
    background: linear-gradient(135deg, #2563EB, #1E40AF);
    color: #fff; text-decoration: none; padding: 9px 18px;
    border-radius: 10px; font-size: 13px; font-weight: 600;
    box-shadow: 0 4px 12px rgba(37,99,235,0.25);
    transition: all 0.2s ease; border: none; cursor: pointer;
}
.sc-btn-add:hover { transform: translateY(-1px); box-shadow: 0 6px 20px rgba(37,99,235,0.35); color: #fff; }

.sc-btn-cancel {
    display: inline-flex; align-items: center; gap: 6px;
    background: rgba(255,255,255,0.04); border: 1px solid var(--cborder);
    color: var(--cmuted); text-decoration: none; padding: 9px 18px;
    border-radius: 10px; font-size: 13px; font-weight: 500;
    transition: all 0.2s ease;
}
.sc-btn-cancel:hover { background: rgba(255,255,255,0.08); color: var(--ctext); }
.sc-error-box {
    background: rgba(248,113,113,0.08); border: 1px solid rgba(248,113,113,0.2);
    border-radius: 12px; padding: 16px 20px; color: #fca5a5;
    font-size: 14px; margin-bottom: 20px;
}
.sc-error-box ul { padding-left: 18px; }

/* ===== Table ===== */
.sc-table-wrap {
    background: var(--crd); border: 1px solid var(--cborder);
    border-radius: 14px; overflow: hidden; backdrop-filter: blur(8px);
}
.sc-table {
    width: 100%; border-collapse: collapse;
}
.sc-table thead th {
    background: rgba(255,255,255,0.03); padding: 14px 18px;
    font-size: 11px; font-weight: 700; text-transform: uppercase;
    letter-spacing: 0.5px; color: var(--csub); text-align: left;
    border-bottom: 1px solid var(--cborder);
}
.sc-table tbody tr {
    border-bottom: 1px solid var(--cborder); transition: background 0.15s ease;
}
.sc-table tbody tr:last-child { border-bottom: none; }
.sc-table tbody tr:hover { background: var(--chover); }
.sc-table tbody td {
    padding: 14px 18px; font-size: 14px; color: var(--ctext);
}
.sc-table .sc-name { font-weight: 600; }
.sc-table .sc-slug {
    font-size: 12px; color: var(--csub); font-family: monospace;
}
.sc-table .sc-desc { color: var(--cmuted); font-size: 13px; max-width: 300px; }
.sc-table .sc-count {
    display: inline-flex; align-items: center; gap: 5px;
    font-size: 12px; font-weight: 600; color: var(--cprimary);
    background: var(--cprimary-dim); padding: 3px 10px; border-radius: 20px;
}
.sc-status {
    display: inline-block; padding: 4px 10px; border-radius: 20px;
    font-size: 12px; font-weight: 600; white-space: nowrap;
}
.sc-status-on { background: rgba(16,185,129,0.12); color: #10b981; border: 1px solid rgba(16,185,129,0.2); }
.sc-status-off { background: rgba(148,163,184,0.1); color: var(--csub); border: 1px solid var(--cborder); }
.sc-actions { display: flex; gap: 6px; }
.sc-action-btn {
    width: 34px; height: 34px; display: inline-flex; align-items: center; justify-content: center;
    background: rgba(255,255,255,0.04); border: 1px solid var(--cborder);
    border-radius: 8px; color: var(--cprimary); cursor: pointer;
    transition: all 0.2s ease; font-size: 0.9rem; text-decoration: none;
}
.sc-action-btn:hover { background: var(--cprimary-dim); color: var(--cprimary); }
.sc-action-danger { color: #f87171; }
.sc-action-danger:hover { background: rgba(248,113,113,0.1); color: #f87171; }

/* ===== Form ===== */
.sc-form-grid {
    display: grid; grid-template-columns: 1fr 1fr; gap: 18px;
}
.sc-form-card {
    background: var(--crd); border: 1px solid var(--cborder);
    border-radius: 14px; padding: 22px;
}
.sc-form-card-title {
    font-size: 15px; font-weight: 700; color: var(--ctext);
    margin-bottom: 18px; display: flex; align-items: center; gap: 8px;
}
.sc-form-card-title i { color: var(--cprimary); }
.sc-form-group { margin-bottom: 16px; }
.sc-form-label {
    display: block; font-size: 13px; font-weight: 600;
    color: var(--cmuted); margin-bottom: 7px;
}
.sc-form-input {
    width: 100%; box-sizing: border-box;
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--cborder); border-radius: 8px;
    padding: 11px 14px; color: var(--ctext); font-size: 14px;
    outline: none; transition: all 0.2s ease;
}
.sc-form-input:focus {
    border-color: rgba(96,165,250,0.5);
    box-shadow: 0 0 0 2px rgba(96,165,250,0.15);
}
.sc-form-input::placeholder { color: rgba(148,163,184,0.5); }
.sc-form-input option { background: #1e293b; color: var(--ctext); }
.sc-form-row {
    display: grid; grid-template-columns: 1fr 1fr; gap: 14px;
}
.sc-form-hint { display: block; margin-top: 6px; font-size: 12px; color: var(--csub); }

.sc-form-toggles { display: flex; flex-direction: column; gap: 14px; justify-content: flex-end; }
.sc-toggle { display: flex; align-items: center; gap: 10px; cursor: pointer; }
.sc-toggle input { display: none; }
.sc-toggle-box {
    width: 40px; height: 22px; border-radius: 20px;
    background: rgba(255,255,255,0.08); border: 1px solid var(--cborder);
    position: relative; transition: all 0.2s ease; flex-shrink: 0;
}
.sc-toggle-box::after {
    content: ''; position: absolute; top: 2px; left: 2px;
    width: 16px; height: 16px; border-radius: 50%;
    background: var(--cmuted); transition: all 0.2s ease;
}
.sc-toggle input:checked + .sc-toggle-box {
    background: rgba(96,165,250,0.25); border-color: rgba(96,165,250,0.5);
}
.sc-toggle input:checked + .sc-toggle-box::after {
    left: 20px; background: var(--cprimary);
}
.sc-toggle-text { font-size: 13px; color: var(--cmuted); font-weight: 500; }
.sc-toggle-text i { color: var(--cprimary); }

.sc-form-footer {
    display: flex; justify-content: flex-end; gap: 12px;
    margin-top: 20px; padding-top: 20px; border-top: 1px solid var(--cborder);
}
.sc-btn-save {
    display: inline-flex; align-items: center; gap: 6px;
    background: linear-gradient(135deg, #2563EB, #1E40AF);
    color: #fff; border: none; padding: 11px 26px; border-radius: 10px;
    font-size: 14px; font-weight: 600; cursor: pointer;
    box-shadow: 0 4px 12px rgba(37,99,235,0.25);
    transition: all 0.2s ease;
}
.sc-btn-save:hover { transform: translateY(-1px); box-shadow: 0 6px 20px rgba(37,99,235,0.35); }

.empty-icon { font-size: 40px; color: var(--csub); margin-bottom: 8px; display: block; }
.empty-title { font-weight: 600; font-size: 16px; color: var(--cmuted); }
.empty-sub { font-size: 13px; color: var(--csub); }
.empty-btn { margin-top: 12px; display: inline-flex; }

@media (max-width: 992px) {
    .sc-page { padding: 20px 22px; }
}
@media (max-width: 768px) {
    .sc-page { padding: 16px; }
    .sc-form-grid { grid-template-columns: 1fr; }
    .sc-form-row { grid-template-columns: 1fr; }
    .sc-header-inner { flex-direction: column; align-items: flex-start; gap: 10px; }
}
