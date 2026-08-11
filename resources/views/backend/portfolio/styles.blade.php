:root {
    --cbg: #0f172a;
    --crd: rgba(255,255,255,0.04);
    --ctext: #f1f5f9;
    --cmuted: #94a3b8;
    --csub: #64748b;
    --cborder: rgba(255,255,255,0.08);
    --cprimary: #60A5FA;
}
.pf-page { padding: 24px 28px; height: 100%; }
.pf-header {
    background: var(--crd); border: 1px solid var(--cborder); border-radius: 14px;
    padding: 18px 22px; backdrop-filter: blur(8px); margin-bottom: 20px;
}
.pf-header-inner {
    display: flex; flex-wrap: wrap; justify-content: space-between;
    align-items: center; gap: 12px;
}
.pf-header-title { font-size: 18px; font-weight: 700; color: var(--ctext); margin: 0 0 2px 0; }
.pf-header-sub { font-size: 13px; color: var(--cmuted); margin: 0; }
.pf-header-actions { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
.pf-header-badge {
    display: inline-flex; align-items: center; gap: 6px;
    background: var(--cprimary-dim, rgba(96,165,250,0.12)); color: var(--cprimary);
    padding: 8px 16px; border-radius: 24px; font-size: 13px;
    font-weight: 600; border: 1px solid rgba(96,165,250,0.2);
}
.pf-btn-add {
    display: inline-flex; align-items: center; gap: 6px;
    background: linear-gradient(135deg, #2563EB, #1E40AF);
    color: #fff; text-decoration: none; padding: 9px 18px;
    border-radius: 10px; font-size: 13px; font-weight: 600;
    box-shadow: 0 4px 12px rgba(37,99,235,0.25);
    transition: all 0.2s ease; border: none; cursor: pointer;
}
.pf-btn-add:hover { transform: translateY(-1px); box-shadow: 0 6px 20px rgba(37,99,235,0.35); color: #fff; }
.pf-btn-cancel {
    display: inline-flex; align-items: center; gap: 6px;
    background: rgba(255,255,255,0.04); border: 1px solid var(--cborder);
    color: var(--cmuted); text-decoration: none; padding: 9px 18px;
    border-radius: 10px; font-size: 13px; font-weight: 500;
    transition: all 0.2s ease;
}
.pf-btn-cancel:hover { background: rgba(255,255,255,0.08); color: var(--ctext); }
.pf-error-box {
    background: rgba(248,113,113,0.08); border: 1px solid rgba(248,113,113,0.2);
    border-radius: 12px; padding: 16px 20px; color: #fca5a5;
    font-size: 14px; margin-bottom: 20px;
}
.pf-error-box ul { padding-left: 18px; }
.pf-card-wrap {
    border-radius: 14px; border: 1px solid var(--cborder);
    background: var(--crd); overflow: hidden; backdrop-filter: blur(8px);
}
.table-scroll-wrap { overflow-x: auto; }
.pf-table { width: 100%; border-collapse: collapse; font-size: 14px; }
.pf-table thead { background: rgba(255,255,255,0.05); position: sticky; top: 0; z-index: 5; }
.pf-table th {
    padding: 14px 16px; text-align: center; font-weight: 600;
    font-size: 12px; color: var(--cmuted); text-transform: uppercase;
    letter-spacing: 0.4px; border-bottom: 1px solid var(--cborder);
}
.pf-table th i { color: var(--cprimary); }
.pf-table td {
    padding: 14px 16px; text-align: center; color: var(--ctext);
    border-bottom: 1px solid var(--cborder); vertical-align: middle;
}
.pf-table tbody tr { transition: background 0.18s ease; }
.pf-table tbody tr:hover { background: rgba(255,255,255,0.06); }
.pf-table tbody tr:last-child td { border-bottom: none; }
.pf-thumb {
    width: 42px; height: 48px; object-fit: cover; border-radius: 6px;
    border: 1px solid var(--cborder); display: block; margin: auto;
}
.pf-title { font-weight: 600; color: var(--ctext); }
.pf-author { font-size: 12px; color: var(--csub); margin-top: 2px; }
.pf-cat { font-weight: 600; color: var(--cprimary); text-transform: capitalize; font-size: 13px; }
.pf-featured { color: #f59e0b; font-size: 16px; }
.pf-featured-no { color: var(--csub); opacity: 0.4; font-size: 16px; }
.pf-status {
    display: inline-block; padding: 4px 12px; border-radius: 20px;
    font-size: 12px; font-weight: 600;
}
.pf-status-on { background: rgba(16,185,129,0.12); color: #10b981; border: 1px solid rgba(16,185,129,0.2); }
.pf-status-off { background: rgba(148,163,184,0.1); color: var(--csub); border: 1px solid var(--cborder); }
.pf-actions { display: flex; gap: 6px; justify-content: center; }
.pf-action-btn {
    width: 34px; height: 34px; display: inline-flex; align-items: center; justify-content: center;
    background: rgba(255,255,255,0.04); border: 1px solid var(--cborder);
    border-radius: 8px; color: var(--cprimary); cursor: pointer;
    transition: all 0.2s ease; font-size: 0.9rem; text-decoration: none;
}
.pf-action-btn:hover { background: rgba(96,165,250,0.12); color: var(--cprimary); }
.pf-action-danger { color: #f87171; }
.pf-action-danger:hover { background: rgba(248,113,113,0.1); color: #f87171; }
.pf-empty-row { text-align: center; padding: 60px 20px !important; }
.pf-empty { display: flex; flex-direction: column; align-items: center; gap: 8px; }
.pf-empty-icon { font-size: 40px; color: var(--csub); margin-bottom: 8px; display: block; }
.pf-empty-title { font-weight: 600; font-size: 16px; color: var(--cmuted); }
.pf-empty-sub { font-size: 13px; color: var(--csub); }

.pf-form-card {
    background: var(--crd); border: 1px solid var(--cborder);
    border-radius: 14px; padding: 22px; max-width: 760px;
}
.pf-form-card-title {
    font-size: 15px; font-weight: 700; color: var(--ctext);
    margin-bottom: 18px; display: flex; align-items: center;
}
.pf-form-card-title i { color: var(--cprimary); }
.pf-form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
.pf-form-group { margin-bottom: 16px; }
.pf-form-label { display: block; font-size: 13px; font-weight: 600; color: var(--cmuted); margin-bottom: 7px; }
.pf-form-input {
    width: 100%; box-sizing: border-box;
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--cborder); border-radius: 8px;
    padding: 11px 14px; color: var(--ctext); font-size: 14px;
    outline: none; transition: all 0.2s ease;
}
.pf-form-input:focus { border-color: rgba(96,165,250,0.5); box-shadow: 0 0 0 2px rgba(96,165,250,0.15); }
.pf-form-input::placeholder { color: rgba(148,163,184,0.5); }
select.pf-form-input option { background: #1e293b; color: #f1f5f9; }
.pf-form-hint { display: block; margin-top: 6px; font-size: 12px; color: var(--csub); }
.pf-cover-preview {
    margin-top: 10px; width: 72px; height: 82px; object-fit: cover;
    border-radius: 8px; border: 1px solid var(--cborder); display: block;
}
.pf-toggle { display: flex; align-items: center; gap: 18px; margin-top: 4px; flex-wrap: wrap; }
.pf-toggle label { display: flex; align-items: center; gap: 10px; cursor: pointer; font-size: 13px; color: var(--cmuted); font-weight: 500; }
.pf-toggle input { display: none; }
.pf-toggle-box {
    width: 40px; height: 22px; border-radius: 20px;
    background: rgba(255,255,255,0.08); border: 1px solid var(--cborder);
    position: relative; transition: all 0.2s ease; flex-shrink: 0;
}
.pf-toggle-box::after {
    content: ''; position: absolute; top: 2px; left: 2px;
    width: 16px; height: 16px; border-radius: 50%;
    background: var(--cmuted); transition: all 0.2s ease;
}
.pf-toggle input:checked + .pf-toggle-box { background: rgba(96,165,250,0.25); border-color: rgba(96,165,250,0.5); }
.pf-toggle input:checked + .pf-toggle-box::after { left: 20px; background: var(--cprimary); }
.pf-form-footer {
    display: flex; justify-content: flex-start; gap: 12px;
    margin-top: 20px; padding-top: 20px; border-top: 1px solid var(--cborder);
    max-width: 760px;
}
.pf-btn-save {
    display: inline-flex; align-items: center; gap: 6px;
    background: linear-gradient(135deg, #2563EB, #1E40AF);
    color: #fff; border: none; padding: 11px 26px; border-radius: 10px;
    font-size: 14px; font-weight: 600; cursor: pointer;
    box-shadow: 0 4px 12px rgba(37,99,235,0.25);
    transition: all 0.2s ease;
}
.pf-btn-save:hover { transform: translateY(-1px); box-shadow: 0 6px 20px rgba(37,99,235,0.35); }

@media (max-width: 992px) {
    .pf-page { padding: 20px 22px; }
}
@media (max-width: 768px) {
    .pf-page { padding: 16px; }
    .pf-form-row { grid-template-columns: 1fr; }
    .pf-header-inner { flex-direction: column; align-items: flex-start; gap: 10px; }
}
