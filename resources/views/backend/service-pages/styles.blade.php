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
    --csuccess: #10b981;
    --cdanger: #f87171;
}
.sp-page { padding: 24px 28px; height: 100%; }
.sp-header {
    background: var(--crd); border: 1px solid var(--cborder); border-radius: 14px;
    padding: 18px 22px; backdrop-filter: blur(8px); margin-bottom: 20px;
}
.sp-header-inner {
    display: flex; flex-wrap: wrap; justify-content: space-between;
    align-items: center; gap: 12px;
}
.sp-header-title { font-size: 18px; font-weight: 700; color: var(--ctext); margin: 0 0 2px 0; }
.sp-header-sub { font-size: 13px; color: var(--cmuted); margin: 0; }
.sp-header-actions { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
.sp-header-badge {
    display: inline-flex; align-items: center; gap: 6px;
    background: var(--cprimary-dim); color: var(--cprimary);
    padding: 8px 16px; border-radius: 24px; font-size: 13px;
    font-weight: 600; border: 1px solid rgba(96,165,250,0.2);
}
.sp-btn-add {
    display: inline-flex; align-items: center; gap: 6px;
    background: linear-gradient(135deg, #2563EB, #1E40AF);
    color: #fff; text-decoration: none; padding: 9px 18px;
    border-radius: 10px; font-size: 13px; font-weight: 600;
    box-shadow: 0 4px 12px rgba(37,99,235,0.25);
    transition: all 0.2s ease; border: none; cursor: pointer;
}
.sp-btn-add:hover { transform: translateY(-1px); box-shadow: 0 6px 20px rgba(37,99,235,0.35); color: #fff; }

.sp-btn-cancel {
    display: inline-flex; align-items: center; gap: 6px;
    background: rgba(255,255,255,0.04); border: 1px solid var(--cborder);
    color: var(--cmuted); text-decoration: none; padding: 9px 18px;
    border-radius: 10px; font-size: 13px; font-weight: 500;
    transition: all 0.2s ease;
}
.sp-btn-cancel:hover { background: rgba(255,255,255,0.08); color: var(--ctext); }
.sp-error-box {
    background: rgba(248,113,113,0.08); border: 1px solid rgba(248,113,113,0.2);
    border-radius: 12px; padding: 16px 20px; color: #fca5a5;
    font-size: 14px; margin-bottom: 20px;
}
.sp-error-box ul { padding-left: 18px; }

/* ===== Folder List ===== */
.sp-folder-list { display: flex; flex-direction: column; gap: 12px; }
.sp-folder {
    border-radius: 14px; border: 1px solid var(--cborder);
    background: var(--crd); overflow: hidden; backdrop-filter: blur(8px);
}
.sp-folder-head {
    width: 100%; display: flex; align-items: center; gap: 12px;
    background: none; border: none; cursor: pointer; padding: 16px 20px;
    color: var(--ctext); text-align: left; transition: background 0.18s ease;
}
.sp-folder-head:hover { background: var(--chover); }
.sp-folder-chevron {
    width: 28px; height: 28px; flex-shrink: 0; border-radius: 8px;
    background: var(--cprimary-dim); color: var(--cprimary);
    display: flex; align-items: center; justify-content: center;
    transition: transform 0.2s ease;
}
.sp-folder-label { font-size: 15px; font-weight: 700; color: var(--ctext); }
.sp-folder-count {
    margin-left: auto; background: rgba(255,255,255,0.06);
    color: var(--cmuted); border: 1px solid var(--cborder);
    padding: 3px 12px; border-radius: 20px; font-size: 12px; font-weight: 600;
}
.sp-folder-body {
    max-height: 0; overflow: hidden; opacity: 0;
    transition: max-height 0.3s ease, opacity 0.3s ease;
    border-top: 0 solid var(--cborder);
}
.sp-folder.open .sp-folder-body {
    max-height: 5000px; opacity: 1; border-top-width: 1px;
}
.sp-folder.open .sp-folder-chevron { transform: rotate(90deg); }

/* ===== Rows ===== */
.sp-row {
    display: flex; align-items: center; gap: 18px;
    padding: 14px 20px; border-bottom: 1px solid var(--cborder);
    flex-wrap: wrap;
}
.sp-row:last-child { border-bottom: none; }
.sp-row:hover { background: var(--chover); }
.sp-row-main { min-width: 200px; flex: 1; }
.sp-name { font-weight: 600; color: var(--ctext); font-size: 14px; display: flex; align-items: center; gap: 8px; }
.sp-slug { font-size: 12px; color: var(--csub); margin-top: 2px; font-family: monospace; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; max-width: 320px; }
.sp-cell { display: flex; flex-direction: column; gap: 3px; min-width: 90px; }
.sp-cell-label {
    font-size: 10px; text-transform: uppercase; letter-spacing: 0.4px;
    color: var(--csub); font-weight: 600;
}
.sp-price { font-weight: 700; color: var(--ctext); font-size: 13px; }
.sp-muted { color: var(--csub); font-size: 13px; }
.sp-badge-tag {
    display: inline-block; background: rgba(245,158,11,0.12);
    color: #fbbf24; border: 1px solid rgba(245,158,11,0.2);
    padding: 3px 8px; border-radius: 6px; font-size: 11px; font-weight: 700;
    white-space: nowrap;
}
.sp-status {
    display: inline-block; padding: 4px 10px; border-radius: 20px;
    font-size: 12px; font-weight: 600; white-space: nowrap;
}
.sp-status-on { background: rgba(16,185,129,0.12); color: #10b981; border: 1px solid rgba(16,185,129,0.2); }
.sp-status-off { background: rgba(148,163,184,0.1); color: var(--csub); border: 1px solid var(--cborder); }
.sp-row-actions { display: flex; gap: 6px; margin-left: auto; }
.sp-action-btn {
    width: 34px; height: 34px; display: inline-flex; align-items: center; justify-content: center;
    background: rgba(255,255,255,0.04); border: 1px solid var(--cborder);
    border-radius: 8px; color: var(--cprimary); cursor: pointer;
    transition: all 0.2s ease; font-size: 0.9rem; text-decoration: none;
}
.sp-action-btn:hover { background: var(--cprimary-dim); color: var(--cprimary); }
.sp-action-danger { color: var(--cdanger); }
.sp-action-danger:hover { background: rgba(248,113,113,0.1); color: var(--cdanger); }
.sp-cat-label {
    display: inline-flex; align-items: center; gap: 5px; font-size: 11px;
    font-weight: 600; color: var(--cprimary); background: var(--cprimary-dim);
    border: 1px solid rgba(96,165,250,0.2); padding: 2px 8px; border-radius: 20px;
}
.sp-plans-count {
    display: inline-flex; align-items: center; gap: 5px;
    font-size: 12px; font-weight: 600; color: #10b981;
    background: rgba(16,185,129,0.12); padding: 3px 10px; border-radius: 20px;
}

/* ===== Form ===== */
.sp-form-card {
    background: var(--crd); border: 1px solid var(--cborder);
    border-radius: 14px; padding: 22px; margin-bottom: 18px;
}
.sp-form-card-title {
    font-size: 15px; font-weight: 700; color: var(--ctext);
    margin-bottom: 18px; display: flex; align-items: center;
    justify-content: space-between;
}
.sp-form-card-title-left {
    display: flex; align-items: center; gap: 8px;
}
.sp-form-card-title i { color: var(--cprimary); }
.sp-form-group { margin-bottom: 16px; }
.sp-form-label {
    display: block; font-size: 13px; font-weight: 600;
    color: var(--cmuted); margin-bottom: 7px;
}
.sp-form-input {
    width: 100%; box-sizing: border-box;
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--cborder); border-radius: 8px;
    padding: 11px 14px; color: var(--ctext); font-size: 14px;
    outline: none; transition: all 0.2s ease;
}
.sp-form-input:focus {
    border-color: rgba(96,165,250,0.5);
    box-shadow: 0 0 0 2px rgba(96,165,250,0.15);
}
.sp-form-input::placeholder { color: rgba(148,163,184,0.5); }
.sp-form-input option { background: #1e293b; color: var(--ctext); }
textarea.sp-form-input { resize: vertical; min-height: 80px; }
.sp-form-row {
    display: grid; grid-template-columns: 1fr 1fr; gap: 14px;
}
.sp-form-row-3 {
    display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 14px;
}
.sp-form-hint { display: block; margin-top: 6px; font-size: 12px; color: var(--csub); }

.sp-form-toggles { display: flex; flex-direction: column; gap: 14px; justify-content: flex-end; }
.sp-toggle { display: flex; align-items: center; gap: 10px; cursor: pointer; }
.sp-toggle input { display: none; }
.sp-toggle-box {
    width: 40px; height: 22px; border-radius: 20px;
    background: rgba(255,255,255,0.08); border: 1px solid var(--cborder);
    position: relative; transition: all 0.2s ease; flex-shrink: 0;
}
.sp-toggle-box::after {
    content: ''; position: absolute; top: 2px; left: 2px;
    width: 16px; height: 16px; border-radius: 50%;
    background: var(--cmuted); transition: all 0.2s ease;
}
.sp-toggle input:checked + .sp-toggle-box {
    background: rgba(96,165,250,0.25); border-color: rgba(96,165,250,0.5);
}
.sp-toggle input:checked + .sp-toggle-box::after {
    left: 20px; background: var(--cprimary);
}
.sp-toggle-text { font-size: 13px; color: var(--cmuted); font-weight: 500; }
.sp-toggle-text i { color: var(--cprimary); }

/* ===== Plans Section ===== */
.sp-plan-card {
    background: rgba(255,255,255,0.02); border: 1px solid var(--cborder);
    border-radius: 10px; padding: 16px; margin-bottom: 12px;
    position: relative;
}
.sp-plan-card-header {
    display: flex; align-items: center; justify-content: space-between;
    margin-bottom: 12px;
}
.sp-plan-card-num {
    font-size: 12px; font-weight: 700; color: var(--cprimary);
    background: var(--cprimary-dim); padding: 3px 10px; border-radius: 20px;
}
.sp-plan-remove {
    background: rgba(248,113,113,0.1); border: 1px solid rgba(248,113,113,0.2);
    color: var(--cdanger); border-radius: 8px; padding: 5px 10px;
    cursor: pointer; font-size: 12px; font-weight: 600;
    transition: all 0.2s ease;
}
.sp-plan-remove:hover { background: rgba(248,113,113,0.2); }
.sp-add-plan {
    display: inline-flex; align-items: center; gap: 6px;
    background: rgba(16,185,129,0.1); border: 1px solid rgba(16,185,129,0.2);
    color: #10b981; padding: 9px 16px; border-radius: 10px;
    font-size: 13px; font-weight: 600; cursor: pointer;
    transition: all 0.2s ease;
}
.sp-add-plan:hover { background: rgba(16,185,129,0.2); }

/* ===== Addons Section ===== */
.sp-addon-card {
    background: rgba(255,255,255,0.02); border: 1px solid var(--cborder);
    border-radius: 10px; padding: 14px; margin-bottom: 10px;
    display: flex; align-items: center; gap: 14px; flex-wrap: wrap;
}
.sp-addon-card .sp-form-group { margin-bottom: 0; flex: 1; min-width: 150px; }
.sp-addon-remove {
    background: rgba(248,113,113,0.1); border: 1px solid rgba(248,113,113,0.2);
    color: var(--cdanger); border-radius: 8px; padding: 5px 10px;
    cursor: pointer; font-size: 12px; font-weight: 600;
    transition: all 0.2s ease;
}
.sp-addon-remove:hover { background: rgba(248,113,113,0.2); }
.sp-add-addon {
    display: inline-flex; align-items: center; gap: 6px;
    background: rgba(245,158,11,0.1); border: 1px solid rgba(245,158,11,0.2);
    color: #fbbf24; padding: 9px 16px; border-radius: 10px;
    font-size: 13px; font-weight: 600; cursor: pointer;
    transition: all 0.2s ease;
}
.sp-add-addon:hover { background: rgba(245,158,11,0.2); }

.sp-form-footer {
    display: flex; justify-content: flex-end; gap: 12px;
    margin-top: 20px; padding-top: 20px; border-top: 1px solid var(--cborder);
}
.sp-btn-save {
    display: inline-flex; align-items: center; gap: 6px;
    background: linear-gradient(135deg, #2563EB, #1E40AF);
    color: #fff; border: none; padding: 11px 26px; border-radius: 10px;
    font-size: 14px; font-weight: 600; cursor: pointer;
    box-shadow: 0 4px 12px rgba(37,99,235,0.25);
    transition: all 0.2s ease;
}
.sp-btn-save:hover { transform: translateY(-1px); box-shadow: 0 6px 20px rgba(37,99,235,0.35); }

/* ===== Feature Rows (inside plan cards) ===== */
.sp-feature-rows { display: flex; flex-direction: column; gap: 6px; }
.sp-feature-row {
    display: flex; gap: 8px; align-items: center;
}
.sp-feature-row .sp-form-input { flex: 1; }
.sp-feature-remove {
    background: rgba(248,113,113,0.08); border: 1px solid rgba(248,113,113,0.15);
    color: var(--cdanger); border-radius: 6px; width: 30px; height: 30px;
    display: flex; align-items: center; justify-content: center;
    cursor: pointer; font-size: 16px; transition: all 0.2s ease; flex-shrink: 0;
}
.sp-feature-remove:hover { background: rgba(248,113,113,0.2); }
.sp-add-feature {
    display: inline-flex; align-items: center; gap: 4px;
    color: var(--cprimary); font-size: 12px; font-weight: 600;
    cursor: pointer; margin-top: 6px;
}
.sp-add-feature:hover { text-decoration: underline; }

.empty-icon { font-size: 40px; color: var(--csub); margin-bottom: 8px; display: block; }
.empty-title { font-weight: 600; font-size: 16px; color: var(--cmuted); }
.empty-sub { font-size: 13px; color: var(--csub); }
.empty-btn { margin-top: 12px; display: inline-flex; }

@media (max-width: 992px) {
    .sp-page { padding: 20px 22px; }
}
@media (max-width: 768px) {
    .sp-page { padding: 16px; }
    .sp-form-row { grid-template-columns: 1fr; }
    .sp-form-row-3 { grid-template-columns: 1fr; }
    .sp-header-inner { flex-direction: column; align-items: flex-start; gap: 10px; }
    .sp-row { flex-direction: column; align-items: flex-start; gap: 10px; }
    .sp-row-main { min-width: 100%; }
    .sp-row-actions { margin-left: 0; }
}
