<?php

/**
 * Created by PhpStorm.
 * User: mench
 * Date: 6/7/2018
 * Time: 9:55 PM
 */
use chargeAppExtend;

class topup extends chargeAppExtend
{
    /**
     * @return mixed
     */
    public function getPaymentUrl()
    {
        $result = $this->chargeApp("topupcharge", [
            "phone_number" => $this->getPhoneNumber(),
            "callback" => $this->getCallbackUrl(),
            "amount" => $this->getAmount()
        ]);
        return $result;
    }

    public function verifyPay($data)
    {
        $result = json_decode(base64_decode(urldecode($data)));
        return $result;
    }
}