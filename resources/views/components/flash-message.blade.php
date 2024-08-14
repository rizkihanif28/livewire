@if (flash()->message)
    <div>
        <div class="alert d-flex align-items-center alert-{{ flash()->class }}" role="alert">
            @if (flash()->class === 'warning' || flash()->class === 'danger')
                <i class="bi bi-sourceforge"></i>
                {{ flash()->message }}
            @endif
            @if (flash()->class === 'info')
                <i class="bi bi-info-square me-2"></i>
                {{ flash()->message }}
            @endif
            @if (flash()->class === 'success')
                <i class="bi bi-check-circle-fill me-2"></i>
                {{ flash()->message }}
            @endif
        </div>
    </div>
@endif

{{-- @if ($flash = session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $flash }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if ($flash = session('info'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ $flash }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if ($flash = session('warning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ $flash }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if ($flash = session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ $flash }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if ($flash = session('danger'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ $flash }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif --}}
