<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Banks;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

            return response()->json(['status'=>true,'message'=>ucwords($user[0]->name)]);
        }

        $ResolveBankAccount = ResolveBankAccount(array(
            'bankCode'=>$bank->bank_code,
            'accountNumber'=>$account_number
        ));

        return  $ResolveBankAccount;


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
