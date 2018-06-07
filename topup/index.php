<?php
/**
 * Created by PhpStorm.
 * User: mench
 * Date: 6/7/2018
 * Time: 7:47 PM
 */

include "../class/inc.php";
define("API_KEY", "{CHARGEAPP_API_KEY}");

$topup = new topup();
$topup->setApiKey(API_KEY);
$topup->setCallbackUrl("http://my-domain.com/examples/topup/verify.php?a=topup");
$topup->setPhoneNumber("09*********"); // Phone number for buy charge
$topup->setAmount(1000);
$result = $topup->getPaymentUrl();

$type_show = 2; // 1 : send to payment 2:show json
if ($type_show == 2) {
    header("Content-type: application/json");
    echo json_encode($result, 128);
} else if ($type_show == 1) {
    header("Location: " . $result->topup->pay);
}
