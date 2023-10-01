@extends('layouts.user.app')

@push('content')

    <div class="row">
        <div class="col-xxl-12">

            <div class="card border overflow-hidden card-border-warning">
                <div class="card-header">
                    <h6 class="card-title mb-0">{{ $page_title }}</h6>
                </div>
                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered">
                           <thead>
                           <tr>
                               <th>SN</th>
                               <th>Amount</th>
                               <th>Reference</th>
                               <th>Status</th>
                               <th>From</th>
                               <th>To</th>
                               <th>Date</th>
                           </tr>
                           </thead>
                            <tfoot>
                            <tr>
                                <td>SN</td>
                                <th>Amount</th>
                                <th>Reference</th>
                                <th>Status</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Date</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @php($sn =1)
                            @forelse(\App\Models\Transactions::where('user_id',auth()->id())->get() as $value)
                                <tr>
                                    <td>{{ $sn++ }}</td>
                                    <td>N{!! number_format($value->amount,2) !!}</td>
                                    <td>{!! $value->reference !!}</td>
                                    <td>{!! $value->status !!}</td>
                                    <td>{!! __('CloudWare Interview Bank')." - ".auth()->user()->name !!}</td>
                                    <td>{!! $value->banks->name.' - '.$value->account_name !!}</td>
                                    <td>{!! $value->created_at !!}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" align="center">No transactions found</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div><!-- end col -->
    </div>

@endpush
