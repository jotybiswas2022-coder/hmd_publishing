@extends('backend.app')

@section('content')

@if (session('success'))
    <input type="hidden" id="sessionSuccess" value="{{ session('success') }}">
@endif

@if (session('error'))
    <input type="hidden" id="sessionError" value="{{ session('error') }}">
@endif

<div class="contact-page">

    {{-- Header --}}
    <div class="contact-header">
        <div class="contact-header-inner">
            <div>
                <h4 class="contact-header-title">Free Chapter Samples</h4>
                <p class="contact-header-sub">Formatting sample requests from the book formatting page</p>
            </div>
            <div class="contact-header-badge">
                <i class="bi bi-layout-text-window me-1"></i>
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
                            <th class="text-start"><i class="bi bi-palette me-1"></i> Style</th>
                            <th class="text-start"><i class="bi bi-file-earmark-text me-1"></i> Chapter file</th>
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
                                    <span class="style-badge">{{ $sample->style ?: '—' }}</span>
                                </td>
                                <td class="text-start">
                                    @if($sample->file_path)
                                        <a class="btn-view-msg" href="{{ route('formatsamples.download', $sample) }}">
                                            <i class="bi bi-download me-1"></i> {{ $sample->original_name ?: 'Download' }}
                                        </a>
                                    @else
                                        <span class="text-muted">No file</span>
                                    @endif
                                </td>
                                <td><span class="date-badge">{{ \Carbon\Carbon::parse($sample->created_at)->timezone('Asia/Dhaka')->format('d M Y') }}</span></td>
                                <td>
                                    <div class="brief-actions">
                                        <form action="{{ route('formatsamples.destroy', $sample) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this sample request?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-delete-brief"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="empty-row">
                                    <div class="empty-state">
                                        <i class="bi bi-inbox empty-icon"></i>
                                        <div class="empty-title">No Samples Found</div>
                                        <div class="empty-sub">Formatting sample requests will appear here once submitted.</div>
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

@include('backend.partials.contact-styles')

<style>
.brief-actions { display: flex; align-items: center; justify-content: center; gap: 6px; }
.btn-delete-brief {
    background: rgba(248,113,113,0.08); border: 1px solid rgba(248,113,113,0.2);
    color: #f87171; padding: 6px 10px; border-radius: 8px;
    font-size: 13px; cursor: pointer; transition: all 0.2s ease;
}
.btn-delete-brief:hover { background: rgba(248,113,113,0.18); border-color: rgba(248,113,113,0.4); }
.style-badge {
    display: inline-block; background: rgba(139,92,246,0.1);
    border: 1px solid rgba(139,92,246,0.2); color: #a78bfa;
    padding: 3px 10px; border-radius: 20px; font-size: 12px; font-weight: 600;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var sessionSuccess = document.getElementById('sessionSuccess');
    var sessionError = document.getElementById('sessionError');
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
    if (sessionError) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: sessionError.value,
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 4000,
            timerProgressBar: true,
            background: '#1e293b',
            color: '#f1f5f9',
            iconColor: '#f87171',
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer);
                toast.addEventListener('mouseleave', Swal.resumeTimer);
            }
        });
    }
});
</script>

@endsection