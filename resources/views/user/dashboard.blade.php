@extends('layouts.user.app')

@push('content')


<div class="row">
    <div class="col-xxl col-sm-6">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="avatar-sm float-end">
                    <div class="avatar-title bg-primary-subtle text-primary fs-3xl rounded">
                        <i class="ph ph-briefcase"></i>
                    </div>
                </div>
                <h4>N{!! number_format(auth()->user()->balance,2) !!}</span> </h4>
                <p class="text-muted mb-4">Available Balance</p>
            </div>
        </div>
    </div>

    <div class="col-xxl">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="avatar-sm float-end">
                    <div class="avatar-title bg-warning-subtle text-warning fs-3xl rounded">
                        <i class="ph ph-heartbeat"></i>
                    </div>
                </div>
                <h4>{!! auth()->user()->account_number !!}</h4>
                <p class="text-muted mb-4">Account Number</p>
            </div>
        </div>
    </div><!--end col-->
</div><!--end row-->

<div class="row">
    <div class="col-xl-3">
        <div class="card card-height-100">
            <div class="card-header align-items-center d-flex">
                <h6 class="card-title mb-0 flex-grow-1">Realized Rate</h6>
                <div class="dropdown card-header-dropdown flex-shrink-0">
                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Current Years</a>
                        <a class="dropdown-item" href="#">Last Years</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="realized_rate" data-colors='["--tb-primary", "--tb-secondary", "--tb-danger"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div><!--end col-->
    <div class="col-xl-9">
        <div class="card card-height-100">
            <div class="card-header align-items-center d-flex">
                <h6 class="card-title mb-0 flex-grow-1">Balance Overview</h6>
                <div>
                    <button type="button" class="btn btn-subtle-secondary btn-sm">
                        ALL
                    </button>
                    <button type="button" class="btn btn-subtle-secondary btn-sm">
                        1M
                    </button>
                    <button type="button" class="btn btn-subtle-secondary btn-sm">
                        6M
                    </button>
                    <button type="button" class="btn btn-subtle-primary btn-sm">
                        1Y
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div id="balance_overview" data-colors='["--tb-primary", "--tb-light","--tb-secondary"]' class="apex-charts ms-n3" dir="ltr"></div>

            </div>
        </div>
    </div><!--end col-->
</div><!--end row-->


@endpush
