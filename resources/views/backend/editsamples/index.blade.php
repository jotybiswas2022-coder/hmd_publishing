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
                <h4 class="contact-header-title">Free Sample Edits</h4>
                <p class="contact-header-sub">Sample edit requests from the book editing page</p>
            </div>
            <div class="contact-header-badge">
                <i class="bi bi-pencil-square me-1"></i>
                {{ $samples->count() }} Samples
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
                            <th class="text-start"><i class="bi bi-envelope me-1"></i> Email</th>
                            <th class="text-start"><i class="bi bi-file-text me-1"></i> Sample</th>
                            <th style="width:110px;"><i class="bi bi-calendar-event me-1"></i> Date</th>
                            <th style="width:120px;"><i class="bi bi-gear me-1"></i> Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($samples as $sample)
                            <tr>
                                <td class="idx">{{ $loop->iteration }}</td>
                                <td class="text-start fw-semibold"><span class="contact-email">{{ $sample->email }}</span></td>
                                <td class="text-start">
                                    <button class="btn-view-msg" data-bs-toggle="modal" data-bs-target="#sampleModal{{ $sample->id }}">
                                        <i class="bi bi-eye me-1"></i> View Sample
                                    </button>
                                </td>
                                <td><span class="date-badge">{{ \Carbon\Carbon::parse($sample->created_at)->timezone('Asia/Dhaka')->format('d M Y') }}</span></td>
                                <td>
                                    <div class="brief-actions">
                                        <form action="{{ route('editsamples.destroy', $sample) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this sample request?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-delete-brief"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="empty-row">
                                    <div class="empty-state">
                                        <i class="bi bi-inbox empty-icon"></i>
                                        <div class="empty-title">No Samples Found</div>
                                        <div class="empty-sub">Sample edit requests will appear here once submitted.</div>
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

{{-- Detail Modals (must be outside the table so browsers parse them correctly) --}}
@foreach ($samples as $sample)
    <div class="modal fade" id="sampleModal{{ $sample->id }}" tabindex="-1" aria-labelledby="sampleModalLabel{{ $sample->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="contact-modal-content">
                <div class="contact-modal-header">
                    <h5 class="contact-modal-title" id="sampleModalLabel{{ $sample->id }}">
                        <i class="bi bi-pencil-square me-2"></i> Sample request from {{ $sample->email }}
                    </h5>
                    <button type="button" class="contact-modal-close" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
                </div>
                <div class="contact-modal-body">
                    <div class="contact-detail-grid">
                        <div class="contact-detail-item">
                            <span class="detail-key"><i class="bi bi-envelope me-1"></i> Email</span>
                            <span class="detail-val">{{ $sample->email }}</span>
                        </div>
                        <div class="contact-detail-item">
                            <span class="detail-key"><i class="bi bi-calendar-event me-1"></i> Submitted</span>
                            <span class="detail-val">{{ \Carbon\Carbon::parse($sample->created_at)->timezone('Asia/Dhaka')->format('d M Y, h:i A') }}</span>
                        </div>
                        <div class="contact-detail-item contact-detail-full">
                            <span class="detail-key"><i class="bi bi-file-text me-1"></i> Manuscript extract</span>
                            <span class="detail-val" style="white-space: pre-wrap;">{{ $sample->sample }}</span>
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