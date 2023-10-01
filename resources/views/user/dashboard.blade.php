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
                <h4>$<span class="counter-value" data-target="368.24">0</span>M </h4>
                <p class="text-muted mb-4">Annual Profit</p>
                <p class="text-muted mb-0"><span class="badge bg-success-subtle text-success"><i class="bi bi-arrow-up"></i> 4.65%</span> vs last month</p>
            </div>
            <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 76%"></div>
            </div>
        </div>
    </div><!--end col-->
    <div class="col-xxl col-sm-6">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="avatar-sm float-end">
                    <div class="avatar-title bg-secondary-subtle text-secondary fs-3xl rounded">
                        <i class="ph ph-wallet"></i>
                    </div>
                </div>
                <h4>$<span class="counter-value" data-target="1454.71">0</span>k </h4>
                <p class="text-muted mb-4">Daily average income</p>
                <p class="text-muted mb-0"><span class="badge bg-success-subtle text-success"><i class="bi bi-arrow-up"></i> 1.33%</span> vs last month</p>
            </div>
            <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-secondary" style="width: 88%"></div>
            </div>
        </div>
    </div><!--end col-->

    <div class="col-xxl">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="avatar-sm float-end">
                    <div class="avatar-title bg-warning-subtle text-warning fs-3xl rounded">
                        <i class="ph ph-heartbeat"></i>
                    </div>
                </div>
                <h4><span class="counter-value" data-target="1742"></span></h4>
                <p class="text-muted mb-4">Annual Deals</p>
                <p class="text-muted mb-0"><span class="badge bg-success-subtle text-success"><i class="bi bi-arrow-up"></i> 7.93%</span> vs last month</p>
            </div>
            <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-warning" style="width: 83%"></div>
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
                <div class="table-responsive table-card mb-0 mt-2">
                    <table class="table table-sm table-borderless align-middle text-center mb-0 table-nowrap">
                        <tr>
                            <td class="text-start"><i class="bi bi-diamond-fill align-baseline me-1 text-primary"></i> Total Revenue</td>
                            <th>$795.69k</th>
                            <td class="text-muted"><span class="text-success"><i class="bi bi-caret-up-fill align-baseline me-1"></i> 6.19%</span> than last years</td>
                            <td class="text-end" style="width: 150px;"><a href="#!" class="icon-link icon-link-hover text-decoration-underline link-underline link-underline-opacity-0 link-underline-opacity-75-hover">View All <i class="bi bi-arrow-right"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-start"><i class="bi bi-diamond-fill align-baseline me-1 text-light"></i> Total Expenses</td>
                            <th>$415.37k</th>
                            <td class="text-muted"><span class="text-success"><i class="bi bi-caret-up-fill align-baseline me-1"></i> 3.62%</span> than last years</td>
                            <td class="text-end" style="width: 150px;"><a href="#!" class="icon-link icon-link-hover text-decoration-underline link-underline link-underline-opacity-0 link-underline-opacity-75-hover">View All <i class="bi bi-arrow-right"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-start"><i class="bi bi-diamond-fill align-baseline me-1 text-secondary"></i> Profit Ratio </td>
                            <th>3.6%</th>
                            <td class="text-muted"><span class="text-danger"><i class="bi bi-caret-down-fill align-baseline me-1"></i> 1.47%</span> than last years</td>
                            <td class="text-end" style="width: 150px;"><a href="#!" class="icon-link icon-link-hover text-decoration-underline link-underline link-underline-opacity-0 link-underline-opacity-75-hover">View All <i class="bi bi-arrow-right"></i></a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div><!--end col-->
</div><!--end row-->


@endpush
