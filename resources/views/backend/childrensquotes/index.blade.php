@extends('backend.app')

@section('content')

@if (session('success'))
    <input type="hidden" id="sessionSuccess" value="{{ session('success') }}">
@endif

<div class="contact-page">

    {{-- Header --}}
    <div class="contact-header">
        <div class="contact-header-inner">
            <div>
                <h4 class="contact-header-title">Children's Book Quotes</h4>
                <p class="contact-header-sub">Quote requests from the children's book formatting page</p>
            </div>
            <div class="contact-header-badge">
                <i class="bi bi-magic me-1"></i>
                {{ $quotes->count() }} Quotes
            </div>
        </div>
    </div>

    {{-- Card --}}
    <div class="contact-card-wrap">
        <div class="contact-card">
            <div class="table-scroll-wrap">
                <table class="contact-table">
                    <thead>
                        <tr>
                            <th style="width:50px;">#</th>
                            <th class="text-start"><i class="bi bi-person me-1"></i> Name</th>
                            <th class="text-start"><i class="bi bi-envelope me-1"></i> Email</th>
                            <th class="text-start"><i class="bi bi-file-text me-1"></i> Word count</th>
                            <th class="text-start"><i class="bi bi-layout-text-window me-1"></i> Output format</th>
                            <th style="width:110px;"><i class="bi bi-calendar-event me-1"></i> Date</th>
                            <th style="width:120px;"><i class="bi bi-gear me-1"></i> Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($quotes as $quote)
                            <tr>
                                <td class="idx">{{ $loop->iteration }}</td>
                                <td class="text-start fw-semibold">{{ $quote->name ?? '—' }}</td>
                                <td class="text-start"><span class="contact-email">{{ $quote->email ?? '—' }}</span></td>
                                <td class="text-start">{{ $quote->word_count ?? '—' }}</td>
                                <td class="text-start">{{ $quote->output_format ?? '—' }}</td>
                                <td><span class="date-badge">{{ \Carbon\Carbon::parse($quote->created_at)->timezone('Asia/Dhaka')->format('d M Y') }}</span></td>
                                <td>
                                    <div class="brief-actions">
                                        <button class="btn-view-msg" data-bs-toggle="modal" data-bs-target="#quoteModal{{ $quote->id }}">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <form action="{{ route('childrensquotes.destroy', $quote) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this quote request?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-delete-brief"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="empty-row">
                                    <div class="empty-state">
                                        <i class="bi bi-inbox empty-icon"></i>
                                        <div class="empty-title">No Quotes Found</div>
                                        <div class="empty-sub">Children's book quote requests will appear here once submitted.</div>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- Detail Modals --}}
@foreach ($quotes as $quote)
    <div class="modal fade" id="quoteModal{{ $quote->id }}" tabindex="-1" aria-labelledby="quoteModalLabel{{ $quote->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="contact-modal-content">
                <div class="contact-modal-header">
                    <h5 class="contact-modal-title" id="quoteModalLabel{{ $quote->id }}">
                        <i class="bi bi-magic me-2"></i> Quote request #{{ $quote->id }}
                    </h5>
                    <button type="button" class="contact-modal-close" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
                </div>
                <div class="contact-modal-body">
                    <div class="contact-detail-grid">
                        <div class="contact-detail-item">
                            <span class="detail-key"><i class="bi bi-person me-1"></i> Name</span>
                            <span class="detail-val">{{ $quote->name ?? '—' }}</span>
                        </div>
                        <div class="contact-detail-item">
                            <span class="detail-key"><i class="bi bi-envelope me-1"></i> Email</span>
                            <span class="detail-val">{{ $quote->email ?? '—' }}</span>
                        </div>
                        <div class="contact-detail-item">
                            <span class="detail-key"><i class="bi bi-123 me-1"></i> Word count</span>
                            <span class="detail-val">{{ $quote->word_count ?? '—' }}</span>
                        </div>
                        <div class="contact-detail-item">
                            <span class="detail-key"><i class="bi bi-layout-text-window me-1"></i> Output format</span>
                            <span class="detail-val">{{ $quote->output_format ?? '—' }}</span>
                        </div>
                        <div class="contact-detail-item">
                            <span class="detail-key"><i class="bi bi-rulers me-1"></i> Trim size</span>
                            <span class="detail-val">{{ $quote->trim_size ?? '—' }}</span>
                        </div>
                        <div class="contact-detail-item">
                            <span class="detail-key"><i class="bi bi-calendar-check me-1"></i> Manuscript readiness</span>
                            <span class="detail-val">{{ $quote->manuscript_status ?? '—' }}</span>
                        </div>
                        <div class="contact-detail-item contact-detail-full">
                            <span class="detail-key"><i class="bi bi-grid-3x3-gap me-1"></i> Interior complexity</span>
                            <span class="detail-val">{{ $quote->complexity ?? '—' }}</span>
                        </div>
                        <div class="contact-detail-item">
                            <span class="detail-key"><i class="bi bi-wallet2 me-1"></i> Approximate budget</span>
                            <span class="detail-val">{{ $quote->budget ?? '—' }}</span>
                        </div>
                        <div class="contact-detail-item">
                            <span class="detail-key"><i class="bi bi-rocket-takeoff me-1"></i> Preferred start</span>
                            <span class="detail-val">{{ $quote->preferred_start ?? '—' }}</span>
                        </div>
                        <div class="contact-detail-item contact-detail-full">
                            <span class="detail-key"><i class="bi bi-calendar-event me-1"></i> Submitted</span>
                            <span class="detail-val">{{ \Carbon\Carbon::parse($quote->created_at)->timezone('Asia/Dhaka')->format('d M Y, h:i A') }}</span>
                        </div>
                    </div>
                </div>
                <div class="contact-modal-footer">
                    <button type="button" class="btn-contact-close" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@include('backend.partials.contact-styles')

<style>
.brief-actions { display: flex; align-items: center; justify-content: center; gap: 6px; }
.btn-delete-brief {
    background: rgba(248,113,113,0.08); border: 1px solid rgba(248,113,113,0.2);
    color: #f87171; padding: 6px 10px; border-radius: 8px;
    font-size: 13px; cursor: pointer; transition: all 0.2s ease;
}
.btn-delete-brief:hover { background: rgba(248,113,113,0.18); border-color: rgba(248,113,113,0.4); }
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var sessionSuccess = document.getElementById('sessionSuccess');
    if (sessionSuccess) {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: sessionSuccess.value,
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 4000,
            timerProgressBar: true,
            background: '#1e293b',
            color: '#f1f5f9',
            iconColor: '#60A5FA',
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer);
                toast.addEventListener('mouseleave', Swal.resumeTimer);
            }
        });
    }
});
</script>

@endsection