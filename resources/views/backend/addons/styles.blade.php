:root {
    --cbg: #0f172a;
    --crd: rgba(255,255,255,0.04);
    --ctext: #f1f5f9;
    --cmuted: #94a3b8;
    --csub: #64748b;
    --cborder: rgba(255,255,255,0.08);
    --cprimary: #60A5FA;
}
.addon-page { padding: 24px 28px; height: 100%; }
.addon-header {
    background: var(--crd); border: 1px solid var(--cborder); border-radius: 14px;
    padding: 18px 22px; backdrop-filter: blur(8px); margin-bottom: 20px;
}
.addon-header-inner {
    display: flex; flex-wrap: wrap; justify-content: space-between;
    align-items: center; gap: 12px;
}
.addon-header-title { font-size: 18px; font-weight: 700; color: var(--ctext); margin: 0 0 2px 0; }
.addon-header-sub { font-size: 13px; color: var(--cmuted); margin: 0; }
.addon-btn-cancel {
    display: inline-flex; align-items: center; gap: 6px;
    background: rgba(255,255,255,0.04); border: 1px solid var(--cborder);
    color: var(--cmuted); text-decoration: none; padding: 9px 18px;
    border-radius: 10px; font-size: 13px; font-weight: 500;
    transition: all 0.2s ease;
}
.addon-btn-cancel:hover { background: rgba(255,255,255,0.08); color: var(--ctext); }
.addon-error-box {
    background: rgba(248,113,113,0.08); border: 1px solid rgba(248,113,113,0.2);
    border-radius: 12px; padding: 16px 20px; color: #fca5a5;
    font-size: 14px; margin-bottom: 20px;
}
.addon-error-box ul { padding-left: 18px; }

.addon-form-card {
    background: var(--crd); border: 1px solid var(--cborder);
    border-radius: 14px; padding: 22px; max-width: 760px;
}
.addon-form-card-title {
    font-size: 15px; font-weight: 700; color: var(--ctext);
    margin-bottom: 18px; display: flex; align-items: center;
}
.addon-form-card-title i { color: var(--cprimary); }
.addon-form-row {
    display: grid; grid-template-columns: 1fr 1fr; gap: 14px;
}
.addon-form-group { margin-bottom: 16px; }
.addon-form-label {
    display: block; font-size: 13px; font-weight: 600;
    color: var(--cmuted); margin-bottom: 7px;
}
.addon-form-input {
    width: 100%; box-sizing: border-box;
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--cborder); border-radius: 8px;
    padding: 11px 14px; color: var(--ctext); font-size: 14px;
    outline: none; transition: all 0.2s ease;
}
.addon-form-input:focus {
    border-color: rgba(96,165,250,0.5);
    box-shadow: 0 0 0 2px rgba(96,165,250,0.15);
}
.addon-form-input::placeholder { color: rgba(148,163,184,0.5); }
.addon-form-hint { display: block; margin-top: 6px; font-size: 12px; color: var(--csub); }

.addon-toggle { display: flex; align-items: center; gap: 10px; cursor: pointer; }
.addon-toggle input { display: none; }
.addon-toggle-box {
    width: 40px; height: 22px; border-radius: 20px;
    background: rgba(255,255,255,0.08); border: 1px solid var(--cborder);
    position: relative; transition: all 0.2s ease; flex-shrink: 0;
}
.addon-toggle-box::after {
    content: ''; position: absolute; top: 2px; left: 2px;
    width: 16px; height: 16px; border-radius: 50%;
    background: var(--cmuted); transition: all 0.2s ease;
}
.addon-toggle input:checked + .addon-toggle-box {
    background: rgba(96,165,250,0.25); border-color: rgba(96,165,250,0.5);
}
.addon-toggle input:checked + .addon-toggle-box::after {
    left: 20px; background: var(--cprimary);
}
.addon-toggle-text { font-size: 13px; color: var(--cmuted); font-weight: 500; }
.addon-toggle-text i { color: var(--cprimary); }

.addon-form-footer {
    display: flex; justify-content: flex-start; gap: 12px;
    margin-top: 20px; padding-top: 20px; border-top: 1px solid var(--cborder);
    max-width: 760px;
}
.addon-btn-save {
    display: inline-flex; align-items: center; gap: 6px;
    background: linear-gradient(135deg, #2563EB, #1E40AF);
    color: #fff; border: none; padding: 11px 26px; border-radius: 10px;
    font-size: 14px; font-weight: 600; cursor: pointer;
    box-shadow: 0 4px 12px rgba(37,99,235,0.25);
    transition: all 0.2s ease;
}
.addon-btn-save:hover { transform: translateY(-1px); box-shadow: 0 6px 20px rgba(37,99,235,0.35); }

@media (max-width: 992px) {
    .addon-page { padding: 20px 22px; }
}
@media (max-width: 768px) {
    .addon-page { padding: 16px; }
    .addon-form-row { grid-template-columns: 1fr; }
    .addon-header-inner { flex-direction: column; align-items: flex-start; gap: 10px; }
}
