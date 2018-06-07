<?php
/**
 * Created by PhpStorm.
 * User: mench
 * Date: 6/7/2018
 * Time: 9:50 PM
 */
include "../class/inc.php";
define("API_KEY", "{CHARGEAPP_API_KEY}");

$topup = new topup();
$topup->setApiKey(API_KEY);
$result = $topup->verifyPay($_GET["data"]);
file_put_contents("response.json", json_encode($result));

$ref_id = $result->refId;
$date = $result->date;
$amount = $result->products->price;
$phone_number = $result->products->details->cellphone;
$name = $result->products->name;
$type = $result->products->type;

if($result->status == "Success") {
    echo "<h1>خرید شارژ به شماره : $phone_number</h1>
<br>
<h1>در تاریخ : $date</h1>
<br>
<h1>مبلغ پرداخت شده : $amount</h1>
<br>
<h1>کد پیگیری : $ref_id</h1>
<br>
<h3>نوع $type</h3>
<br>
<h3>نام محصول $name</h3>";
} else {
    echo "<h1>خطا در پرداخت</h1>";
}