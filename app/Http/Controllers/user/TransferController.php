<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Banks;
use App\Models\Transactions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $page_title = "Make a Transfer";
        return view('user.transfer.create',compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(),[
            'bank'=>'required|gt:0',
            'account_number'=>'required',
            'account_name'=>'required',
            'amount'=>'required|gt:0'
        ]);

        if ($validator->fails()){
            return back()->with('alert_error',$validator->errors()->first());
        }

        @$recipient_data = Session::get('recipient_data');
        $amount = $request->amount;


        $bank = Banks::find($request->bank);
        $user = auth()->user();

        $balance = $user->balance;
        $user_id = $user->id;

        if ($balance < $amount){
            return back()->with('alert_error','Insufficient fund');
        }

        if (isset($recipient_data)){
            $recipient_id = $recipient_data;

            if ($user_id == $recipient_id){
                return back()->with('alert_error','Ops sorry, you cannot transfer money to yourself');
            }

            $recipient = User::find($recipient_id);
            $recipient->balance+=$amount;
            $recipient->save();
        }


        $user->balance-=$amount;
        $user->save();


        Transactions::create([
            'user_id'=>$user_id,
            'amount'=>$amount,
            'reference'=>date('Y').uniqid(),
            'bank_id'=>$bank->id,
            'account_name'=>$request->account_name,
            //'account_number'=>$request->account_number
        ]);

        return back()->with('alert_success','Your transaction was sent successful');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $bank_id = $request->bank_id;
        $account_number = $request->account_number;

        if ($bank_id == 0){
            return  response()->json(['status'=>false,'message'=>'Bank is required']);
        }

        $bank = Banks::find($bank_id);

        if ($bank_id == 1){
            $user = User::where('account_number',$account_number)->get();
            if ($user->count() == 0){
                return response()->json(['status'=>false,'message'=>'The account number is not associated to '.$bank->name.', please check and try again']);
            }

            Session::put('recipient_data',$user[0]->id);
            return response()->json(['status'=>true,'message'=>ucwords($user[0]->name),'recipient_id'=>$user[0]->id]);
        }

        $ResolveBankAccount = ResolveBankAccount(array(
            'bankCode'=>$bank->bank_code,
            'accountNumber'=>$account_number
        ));

        return  $ResolveBankAccount;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
