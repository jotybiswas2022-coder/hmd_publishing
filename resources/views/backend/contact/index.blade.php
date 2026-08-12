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
                <h4 class="contact-header-title">Contact Messages</h4>
                <p class="contact-header-sub">Manage customer inquiries from one place</p>
            </div>
            <div class="contact-header-badge">
                <i class="bi bi-database me-1"></i>
                {{ $contacts->count() }} Messages
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
                            <th><i class="bi bi-envelope me-1"></i> Email</th>
                            <th><i class="bi bi-phone me-1"></i> Phone</th>
                            <th><i class="bi bi-tag me-1"></i> Service</th>
                            <th class="text-start"><i class="bi bi-chat-dots me-1"></i> Message</th>
                            <th style="width:110px;"><i class="bi bi-calendar-event me-1"></i> Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($contacts as $contact)
                            <tr>
                                <td class="idx">{{ $loop->iteration }}</td>
                                <td class="text-start fw-semibold">{{ $contact->name }}</td>
                                <td><span class="contact-email">{{ $contact->email }}</span></td>
                                <td><span class="contact-email">{{ $contact->phone ?: '—' }}</span></td>
                                <td>
                                    @if($contact->service)
                                        <span class="service-badge">{{ $contact->service }}</span>
                                    @else
                                        <span class="contact-email">—</span>
                                    @endif
                                </td>
                                <td class="text-start">
                                    <button class="btn-view-msg" data-bs-toggle="modal" data-bs-target="#messageModal{{ $contact->id }}">
                                        <i class="bi bi-eye me-1"></i> View Message
                                    </button>
                                </td>
                                <td><span class="date-badge">{{ \Carbon\Carbon::parse($contact->created_at)->timezone('Asia/Dhaka')->format('d M Y') }}</span></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="empty-row">
                                    <div class="empty-state">
                                        <i class="bi bi-inbox empty-icon"></i>
                                        <div class="empty-title">No Messages Found</div>
                                        <div class="empty-sub">Customer messages will appear here once submitted.</div>
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

{{-- Message Modals (must be outside the table so browsers parse them correctly) --}}
@foreach ($contacts as $contact)
    <div class="modal fade" id="messageModal{{ $contact->id }}" tabindex="-1" aria-labelledby="messageModalLabel{{ $contact->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="contact-modal-content">
                <div class="contact-modal-header">
                    <h5 class="contact-modal-title" id="messageModalLabel{{ $contact->id }}">
                        <i class="bi bi-chat-dots me-2"></i> Message from {{ $contact->name }}
                    </h5>
                    <button type="button" class="contact-modal-close" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
                </div>
                <div class="contact-modal-body">
                    <div class="contact-detail-grid">
                        <div class="contact-detail-item">
                            <span class="detail-key"><i class="bi bi-person me-1"></i> Name</span>
                            <span class="detail-val">{{ $contact->name }}</span>
                        </div>
                        <div class="contact-detail-item">
                            <span class="detail-key"><i class="bi bi-envelope me-1"></i> Email</span>
                            <span class="detail-val">{{ $contact->email }}</span>
                        </div>
                        <div class="contact-detail-item">
                            <span class="detail-key"><i class="bi bi-phone me-1"></i> Phone</span>
                            <span class="detail-val">{{ $contact->phone ?: '—' }}</span>
                        </div>
                        <div class="contact-detail-item">
                            <span class="detail-key"><i class="bi bi-tag me-1"></i> Service</span>
                            <span class="detail-val">{{ $contact->service ?: '—' }}</span>
                        </div>
                        <div class="contact-detail-item contact-detail-full">
                            <span class="detail-key"><i class="bi bi-calendar-event me-1"></i> Submitted</span>
                            <span class="detail-val">{{ \Carbon\Carbon::parse($contact->created_at)->timezone('Asia/Dhaka')->format('d M Y, h:i A') }}</span>
                        </div>
                        <div class="contact-detail-item contact-detail-full">
                            <span class="detail-key"><i class="bi bi-chat-dots me-1"></i> Message</span>
                            <span class="detail-val">{{ $contact->message }}</span>
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