<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;
use Str;

trait PaymentTrait
{
    public function paymentToken(){
        $response =Http::post(
            env('AUTHENTIC_URL').'/'.'AppRegistration/GenerateToken',[
                'appName'      =>env('AZAMAPPNAME'),
                'clientId'     =>env('CLIENT_ID'),
                'clientSecret' =>env('CLIENT_SECRETE'),
            ]
        );
        $response =json_decode($response,true);
        if ($response['success']) {
            return $response['data']['accessToken'];
        }else{
        return 'fail';
        }
    }

    public function checkOutPayment($payment_log){
        //return env('CLIENT_SECRETE');
        $response =Http::post(
            env('BASE_URL').'/'.'v1/Partner/PostCheckout',[
                'appName'      =>env('AZAMAPPNAME'),
                'clientId'     =>env('CLIENT_ID'),
                'clientSecret' =>env('CLIENT_SECRETE'),
                'amount'       =>$payment_log->amount,
                'cart' => [
                    'items' => [
                        [
                            'name' => 'Visa Application Fee',
                        ],
                    ],
                ],
                'currency'     =>'TZS',
                'externalId'   =>$payment_log->external_id,
                'vendorId'     =>$payment_log->vendor_id,
                'vendorName'     =>'Visa Assistance System',
                'language'     =>'EN',
                'redirectFailURL'    =>'visa.eldizerfinance.co.tz/api/v1/Checkout/Callback',
                'redirectSuccessURL' =>'visa.eldizerfinance.co.tz/api/v1/Checkout/Callback',
                'requestOrigin'      =>'visa.eldizerfinance.co.tz/api/v1/Checkout/Callback',
                'redirectSuccessURL'
            ]
        );
        return $response;

        $payment_log->status =2;
        $payment_log->save();

        return $response;
    }
}
