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
.plan-page { padding: 24px 28px; height: 100%; }
.plan-header {
    background: var(--crd); border: 1px solid var(--cborder); border-radius: 14px;
    padding: 18px 22px; backdrop-filter: blur(8px); margin-bottom: 20px;
}
.plan-header-inner {
    display: flex; flex-wrap: wrap; justify-content: space-between;
    align-items: center; gap: 12px;
}
.plan-header-title { font-size: 18px; font-weight: 700; color: var(--ctext); margin: 0 0 2px 0; }
.plan-header-sub { font-size: 13px; color: var(--cmuted); margin: 0; }
.plan-btn-cancel {
    display: inline-flex; align-items: center; gap: 6px;
    background: rgba(255,255,255,0.04); border: 1px solid var(--cborder);
    color: var(--cmuted); text-decoration: none; padding: 9px 18px;
    border-radius: 10px; font-size: 13px; font-weight: 500;
    transition: all 0.2s ease;
}
.plan-btn-cancel:hover { background: rgba(255,255,255,0.08); color: var(--ctext); }
.plan-error-box {
    background: rgba(248,113,113,0.08); border: 1px solid rgba(248,113,113,0.2);
    border-radius: 12px; padding: 16px 20px; color: #fca5a5;
    font-size: 14px; margin-bottom: 20px;
}
.plan-error-box ul { padding-left: 18px; }

.plan-form-grid {
    display: grid; grid-template-columns: 1fr 1fr; gap: 18px;
}
.plan-form-card {
    background: var(--crd); border: 1px solid var(--cborder);
    border-radius: 14px; padding: 22px;
}
.plan-form-card-title {
    font-size: 15px; font-weight: 700; color: var(--ctext);
    margin-bottom: 18px; display: flex; align-items: center;
    justify-content: space-between;
}
.plan-form-card-title i { color: var(--cprimary); }
.plan-form-group { margin-bottom: 16px; }
.plan-form-label {
    display: block; font-size: 13px; font-weight: 600;
    color: var(--cmuted); margin-bottom: 7px;
}
.plan-form-input {
    width: 100%; box-sizing: border-box;
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--cborder); border-radius: 8px;
    padding: 11px 14px; color: var(--ctext); font-size: 14px;
    outline: none; transition: all 0.2s ease;
}
.plan-form-input:focus {
    border-color: rgba(96,165,250,0.5);
    box-shadow: 0 0 0 2px rgba(96,165,250,0.15);
}
.plan-form-input::placeholder { color: rgba(148,163,184,0.5); }
.plan-form-row {
    display: grid; grid-template-columns: 1fr 1fr; gap: 14px;
}
.plan-form-hint { display: block; margin-top: 6px; font-size: 12px; color: var(--csub); }
.plan-form-hint b { color: var(--cprimary); }

.plan-form-toggles { display: flex; flex-direction: column; gap: 14px; justify-content: flex-end; }
.plan-toggle { display: flex; align-items: center; gap: 10px; cursor: pointer; }
.plan-toggle input { display: none; }
.plan-toggle-box {
    width: 40px; height: 22px; border-radius: 20px;
    background: rgba(255,255,255,0.08); border: 1px solid var(--cborder);
    position: relative; transition: all 0.2s ease; flex-shrink: 0;
}
.plan-toggle-box::after {
    content: ''; position: absolute; top: 2px; left: 2px;
    width: 16px; height: 16px; border-radius: 50%;
    background: var(--cmuted); transition: all 0.2s ease;
}
.plan-toggle input:checked + .plan-toggle-box {
    background: rgba(96,165,250,0.25); border-color: rgba(96,165,250,0.5);
}
.plan-toggle input:checked + .plan-toggle-box::after {
    left: 20px; background: var(--cprimary);
}
.plan-toggle-text { font-size: 13px; color: var(--cmuted); font-weight: 500; }
.plan-toggle-text i { color: var(--cprimary); }

.plan-form-add-feature {
    font-size: 12px; font-weight: 600; color: var(--cprimary);
    cursor: pointer; padding: 5px 12px; border-radius: 8px;
    background: var(--cprimary-dim); border: 1px solid rgba(96,165,250,0.2);
}
.plan-form-add-feature:hover { background: rgba(96,165,250,0.2); }
.feature-row { display: flex; gap: 8px; margin-bottom: 10px; }
.feature-row .plan-form-input { flex: 1; }
.feature-remove {
    width: 38px; height: 42px; flex-shrink: 0;
    background: rgba(248,113,113,0.1); border: 1px solid rgba(248,113,113,0.2);
    border-radius: 8px; color: #f87171; font-size: 18px;
    cursor: pointer; transition: all 0.2s ease; line-height: 1;
}
.feature-remove:hover { background: rgba(248,113,113,0.2); }

.plan-form-footer {
    display: flex; justify-content: flex-end; gap: 12px;
    margin-top: 20px; padding-top: 20px; border-top: 1px solid var(--cborder);
}
.plan-btn-save {
    display: inline-flex; align-items: center; gap: 6px;
    background: linear-gradient(135deg, #2563EB, #1E40AF);
    color: #fff; border: none; padding: 11px 26px; border-radius: 10px;
    font-size: 14px; font-weight: 600; cursor: pointer;
    box-shadow: 0 4px 12px rgba(37,99,235,0.25);
    transition: all 0.2s ease;
}
.plan-btn-save:hover { transform: translateY(-1px); box-shadow: 0 6px 20px rgba(37,99,235,0.35); }

@media (max-width: 992px) {
    .plan-page { padding: 20px 22px; }
}
@media (max-width: 768px) {
    .plan-page { padding: 16px; }
    .plan-form-grid { grid-template-columns: 1fr; }
    .plan-form-row { grid-template-columns: 1fr; }
    .plan-header-inner { flex-direction: column; align-items: flex-start; gap: 10px; }
}
