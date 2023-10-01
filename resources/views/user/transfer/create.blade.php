@extends('layouts.user.app')

@push('content')

    <div class="row">
        <div class="col-xxl-12">
            <div class="card border overflow-hidden card-border-warning">
                <div class="card-header">
                    <h6 class="card-title mb-0">{{ $page_title }}</h6>
                </div>
                <div class="card-body">

                    <form action="{{route('transfer.store')}}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="" class="form-label">Amount</label>
                            <input type="number" class="form-control" required placeholder="Amount" name="amount" inputmode="numeric" id="">
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Account Number</label>
                            <input type="number" class="form-control" inputmode="numeric" name="account_number" required placeholder="Account Number" id="">
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Bank</label>
                            <select class="form-select">
                                <option value="" disabled selected>Select</option>
                                @foreach(\App\Models\Banks::all() as $value)
                                    <option value="{{$value->id}}">{{ ucwords($value->name) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Account Name</label>
                            <input type="text" class="form-control" inputmode="numeric" readonly name="account_name"  required placeholder="Account Name" id="account_name">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Proceed" name="" id="">
                        </div>
                    </form>

                </div>
            </div>
        </div><!-- end col -->
    </div>
@endpush
