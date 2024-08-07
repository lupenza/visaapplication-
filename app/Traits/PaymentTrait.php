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
        $response =Http::post(
            env('BASE_URL').'/'.'v1/Partner/PostCheckout',[
                'appName'      =>env('AZAMAPPNAME'),
                'clientId'     =>env('CLIENT_ID'),
                'clientSecret' =>env('CLIENT_SECRETE'),
                'amount'       =>$payment_log->amount,
                'cart' => [
                    'items' => [
                        [
                            'name' => 'Training Program',
                        ],
                    ],
                ],
                'currency'     =>'TZS',
                'externalId'   =>$payment_log->external_id,
                'vendorId'     =>$payment_log->vendor_id,
                'vendorName'     =>'Lalisha Fitness Corner',
                'language'     =>'EN',
                'redirectFailURL'    =>'lalisha.eldizerfinance.co.tz/api/v1/Checkout/Callback',
                'redirectSuccessURL' =>'lalisha.eldizerfinance.co.tz/api/v1/Checkout/Callback',
                'requestOrigin'      =>'lalisha.eldizerfinance.co.tz/api/v1/Checkout/Callback',
                'redirectSuccessURL'
            ]
        );

        $payment_log->status =2;
        $payment_log->save();

        return $response;
    }
}
