## وبسرویس خرید مستقیم شارژ
- TopUp Charge

<p dir="rtl">
برای استفاده از وبسرویس همواره باید کلاس های مربوط به پروژه را به همراه داشته باشید
در فایل index.php شماره موبایل و مبلغ شارژ را وارد میکنید و لینک بازگشت پس خرید موفق را که باید بر روی آدرس verify.php تنظیم شود
</p>

## خروجی در صورت دریافت لینک پرداخت
تمامی خروجی ها به صورت جیسون میباشد
<pre>
{
    "ok": true,
    "messages": {
        "fa": "\u0644\u06cc\u0646\u06a9 \u067e\u0631\u062f\u0627\u062e\u062a \u0628\u0627 \u0645\u0648\u0641\u0642\u06cc\u062a \u0627\u06cc\u062c\u0627\u062f \u0634\u062f",
        "en": "Payment link successfully created"
    },
    "error": -996,
    "api_key": "XxfPwGCM6-*********-U6Pf2BE4y5H92rW7",
    "topup": {
        "pay": "https:\/\/chr724.ir\/pay\/skB4Zxhbos8=",
        "order_hash": "skB4Zxhbos8="
    },
    "your_data": {
        "type": "topup",
        "url": "http:\/\/My-Domain.com\/api\/examples\/topup\/verify.php?a=topup",
        "amount": 1000,
        "phone_number": "0903*******",
        "invite_code": "******"
    },
    "methode": {
        "name": "topupcharge",
        "request_time": "14:17:27"
    }
}
</pre>

## مقادیر بازگشتی در صورت پرداخت موفق
<img src="https://github.com/chargesapp/TopUp-WEBService/blob/master/topup/table.PNG?raw=true">
