<style>
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
    --cthead-bg: rgba(255,255,255,0.05);
}
.contact-page { padding: 24px 28px; height: 100%; }
.contact-header {
    background: var(--crd); border: 1px solid var(--cborder); border-radius: 14px;
    padding: 18px 22px; backdrop-filter: blur(8px); margin-bottom: 20px;
}
.contact-header-inner {
    display: flex; flex-wrap: wrap; justify-content: space-between;
    align-items: center; gap: 10px;
}
.contact-header-title { font-size: 18px; font-weight: 700; color: var(--ctext); margin: 0 0 2px 0; }
.contact-header-sub { font-size: 13px; color: var(--cmuted); margin: 0; }
.contact-header-badge {
    display: inline-flex; align-items: center; gap: 6px;
    background: var(--cprimary-dim); color: var(--cprimary);
    padding: 8px 16px; border-radius: 24px; font-size: 13px;
    font-weight: 600; border: 1px solid rgba(96,165,250,0.2);
}
.contact-card-wrap {
    border-radius: 14px; border: 1px solid var(--cborder);
    background: var(--crd); overflow: hidden; backdrop-filter: blur(8px);
}
.table-scroll-wrap { overflow-x: auto; }
.contact-table { width: 100%; border-collapse: collapse; font-size: 14px; }
.contact-table thead {
    background: var(--cthead-bg); position: sticky; top: 0; z-index: 5;
}
.contact-table th {
    padding: 14px 16px; text-align: center; font-weight: 600;
    font-size: 13px; color: var(--cmuted); text-transform: uppercase;
    letter-spacing: 0.4px; border-bottom: 1px solid var(--cborder);
}
.contact-table th i { color: var(--cprimary); }
.contact-table td {
    padding: 14px 16px; text-align: center; color: var(--ctext);
    border-bottom: 1px solid var(--cborder); vertical-align: middle;
}
.contact-table tbody tr { transition: background 0.18s ease; }
.contact-table tbody tr:hover { background: var(--chover); }
.contact-table tbody tr:last-child td { border-bottom: none; }
.idx { color: var(--csub) !important; font-weight: 600; }
.contact-email { color: var(--cmuted); font-size: 13px; }
.service-badge {
    display: inline-block; background: rgba(96,165,250,0.12);
    color: var(--cprimary); border: 1px solid rgba(96,165,250,0.2);
    padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 600;
}
.contact-detail-grid {
    display: grid; grid-template-columns: 1fr 1fr; gap: 14px;
}
.contact-detail-item {
    display: flex; flex-direction: column; gap: 5px;
    padding: 12px 14px; border: 1px solid var(--cborder);
    border-radius: 10px; background: rgba(255,255,255,0.02);
}
.contact-detail-full { grid-column: 1 / -1; }
.detail-key {
    display: flex; align-items: center; gap: 6px;
    font-size: 12px; color: var(--csub); font-weight: 600;
    text-transform: uppercase; letter-spacing: 0.4px;
}
.detail-key i { color: var(--cprimary); }
.detail-val { color: var(--ctext); font-size: 14px; word-break: break-word; }
.btn-view-msg {
    background: transparent; border: 1px solid var(--cborder);
    color: var(--cprimary); padding: 6px 14px; border-radius: 8px;
    font-size: 13px; font-weight: 500; cursor: pointer; transition: all 0.2s ease;
}
.btn-view-msg:hover { background: var(--cprimary-dim); border-color: rgba(96,165,250,0.3); }
.date-badge, .time-badge {
    display: inline-block; background: rgba(255,255,255,0.06);
    color: var(--cmuted); border: 1px solid var(--cborder);
    padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 500;
}
.contact-modal-content {
    position: relative; display: flex; flex-direction: column; width: 100%;
    background: #1e293b; border: 1px solid rgba(255,255,255,0.1);
    border-radius: 16px; box-shadow: 0 25px 60px rgba(0,0,0,0.5); overflow: hidden;
}
.contact-modal-header {
    display: flex; align-items: center; justify-content: space-between;
    padding: 18px 24px;
    background: linear-gradient(135deg, rgba(96,165,250,0.15), rgba(96,165,250,0.05));
    border-bottom: 1px solid var(--cborder);
}
.contact-modal-title { font-size: 17px; font-weight: 600; color: var(--ctext); margin: 0; }
.contact-modal-title i { color: var(--cprimary); }
.contact-modal-close {
    background: none; border: none; color: var(--cmuted); font-size: 14px;
    cursor: pointer; padding: 6px; border-radius: 6px; transition: all 0.2s;
    width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;
}
.contact-modal-close:hover { background: rgba(255,255,255,0.1); color: var(--ctext); }
.contact-modal-body {
    position: relative; flex: 1 1 auto; padding: 24px;
    color: var(--ctext); font-size: 15px; line-height: 1.7;
}
.contact-modal-body p { margin: 0; color: #e2e8f0; }
.contact-modal-footer {
    padding: 14px 24px; border-top: 1px solid var(--cborder);
    display: flex; justify-content: flex-end;
}
.btn-contact-close {
    background: rgba(255,255,255,0.08); border: 1px solid var(--cborder);
    color: var(--cmuted); padding: 8px 24px; border-radius: 8px;
    font-size: 14px; font-weight: 500; cursor: pointer; transition: all 0.2s ease;
}
.btn-contact-close:hover { background: rgba(255,255,255,0.14); color: var(--ctext); }
.empty-row { text-align: center; padding: 60px 20px !important; }
.empty-state { display: flex; flex-direction: column; align-items: center; gap: 8px; }
.empty-icon { font-size: 40px; color: var(--csub); margin-bottom: 8px; display: block; }
.empty-title { font-weight: 600; font-size: 16px; color: var(--cmuted); }
.empty-sub { font-size: 13px; color: var(--csub); }
@media (max-width: 992px) {
    .contact-page { padding: 20px 22px; }
    .contact-table td, .contact-table th { padding: 12px 14px; font-size: 13px; }
}
@media (max-width: 768px) {
    .contact-page { padding: 16px; }
    .contact-table td, .contact-table th { padding: 10px 12px; font-size: 13px; }
    .contact-header { padding: 14px 16px; }
    .contact-header-title { font-size: 16px; }
    .contact-modal-body { padding: 18px; }
    .contact-table th:nth-child(4), .contact-table td:nth-child(4),
    .contact-table th:nth-child(5), .contact-table td:nth-child(5) { display: none; } /* hide phone + service on mobile */
    .contact-detail-grid { grid-template-columns: 1fr; }
    .btn-view-msg { padding: 5px 10px; font-size: 12px; }
}
@media (max-width: 480px) {
    .contact-page { padding: 12px; }
    .contact-table td, .contact-table th { padding: 8px 8px; font-size: 12px; }
    .contact-header-inner { flex-direction: column; align-items: flex-start; gap: 8px; }
    .contact-header-badge { font-size: 12px; padding: 6px 12px; }
}
</style>
