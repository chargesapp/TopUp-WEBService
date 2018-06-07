<?php

/**
 * Created by PhpStorm.
 * User: mench
 * Date: 6/7/2018
 * Time: 9:55 PM
 */
class chargeAppExtend
{
    private $api_key;
    private $phone_number;
    private $callback_url;
    private $amount;

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $api_key
     */
    public function setApiKey($api_key)
    {
        $this->api_key = $api_key;
    }

    /**
     * @return mixed
     */
    public function getApiKey()
    {
        return $this->api_key;
    }

    /**
     * @param mixed $phone_number
     */
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * @param mixed $callback_url
     */
    public function setCallbackUrl($callback_url)
    {
        $this->callback_url = $callback_url;
    }

    /**
     * @return mixed
     */
    public function getCallbackUrl()
    {
        return $this->callback_url;
    }


    /**
     * @param $methode
     * @param array $datas
     * @return mixed
     */
    public function chargeApp($methode, $datas = [])
    {
        $url = str_replace("{METHODE}", $methode, str_replace("{API_KEY}", $this->api_key, WEB_API_ADDR));
        $ch = curl_init($url);
        $payload = json_encode($datas);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result);
    }
}