<?php

function static_asset($src){
    return asset('assets/images/'.$src);
}

if (!function_exists('ResolveBankAccount')){
    function ResolveBankAccount($data,$verify = false){

        $curl = curl_init();

        $bank_code = $data['bankCode'];
        $account_number = $data['accountNumber'];

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://app.nuban.com.ng/api/NUBAN-YXKJAOCW1156?bank_code=$bank_code&acc_no=$account_number",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);


        curl_close($curl);


        if ($err) {
            return array(
                'status' => false,
                'message'=>'Error network'
            );
        }

        $response_array = json_decode($response,true);

        if (@$response_array['error'] == true){
            return array(
                'status' => false,
                'message'=>$response_array['message']
            );
        }else{
            @$responseBody = $response_array[0];

            return array(
                'status' => true,
                'message'=>@$responseBody['account_name']
            );
        }

    }

}
