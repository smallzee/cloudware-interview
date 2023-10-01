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
                            <label for="" class="form-label">Bank</label>
                            <select class="form-select" name="bank" id="bank">
                                <option value="" disabled selected>Select</option>
                                @foreach(\App\Models\Banks::all() as $value)
                                    <option value="{{$value->id}}">{{ ucwords($value->name) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Account Number</label>
                            <input type="number" class="form-control" inputmode="numeric" name="account_number" readonly required placeholder="Account Number" id="account_number">
                            <span class="text-danger response"></span>
                        </div>

                        <input type="hidden" name="recipient_id" id="recipient_id">

                        <div class="form-group">
                            <label for="" class="form-label">Account Name</label>
                            <input type="text" class="form-control" inputmode="numeric" readonly name="account_name"  required placeholder="Account Name" id="account_name">
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Amount</label>
                            <input type="number" class="form-control" max="{{ auth()->user()->balance }}" required placeholder="Amount" name="amount" inputmode="numeric" id="amount">
                        </div>


                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit" disabled name="" id="proceed">
                        </div>
                    </form>

                </div>
            </div>
        </div><!-- end col -->
    </div>

    <script>

        var bank_id = 0;
        $(function () {
            $("#bank").change(function () {
                bank_id = $(this).val();
                $("#account_number").removeAttr("readonly");
                $("#account_number, #account_name").val("");
                $(".response").text("");
            });
        });

        $("#account_number").blur(function (e) {
            var account_numer = $(this).val();
             AmagiLoader.show();

            $.ajax({
                url : "{{route('transfer.update',1)}}",
                type : 'post',
                dataType : 'json',
                data : {
                    '_token' : '{{csrf_token()}}',
                    'account_number' : account_numer,
                    'bank_id' : bank_id,
                    '_method' :'PATCH'
                },
                cache : false,
                timeout : 45000,
                success : function (data) {

                    AmagiLoader.hide();
                    if(data.status == true){
                        $("#account_name").val(data.message);
                        $("#proceed").removeAttr('disabled');
                        return;
                    }

                    $(".response").text(data.message);
                    $("#account_name").val("");
                    $("#recipient_id").val(data.recipient_id);
                    $("#proceed").prop('disabled',true);

                    return;
                },

                error : function (er) {
                    AmagiLoader.hide();
                    $(".response").text("Network error");
                }
            });
        })
    </script>
@endpush
