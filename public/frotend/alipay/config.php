<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016082100303588",

		//商户私钥
		'merchant_private_key' => "MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQClukANFNrh85KOaiXxBZHx8GHhZkc9KyUFy8hUhKFdB57+uBKA4si+plUFtcJQZK55ggW+4VkmfLNBLLP5A/0QdRGSUnCXvBexXPljZTafBvV2XAaFN3EuSuR4C+hRlBcn//dQsaQCRQjZIK12mcUzegRlXLj2a3OqeMF5GpHRBEG7/Hz/Nks3b4VKbWgYPIME2Wf0dY3EyV4yMIRyEIOGA1EcaxIh//6A/ymppVqhlyAULvLMEM9BzwIStQN7z3tYTXz233/FTIyB+GjYt/88MHDS/ZEN1q9D3ou0ffmtrdnFqdp+hdBuKM+ad4sBKssI0hhXHOovBoIt4SU9LTLBAgMBAAECggEARHgCZmUrWRaMghIQwtcOSOqLRdg/rmHY1eAvT9vL3ud7JLlfy6fmT/3gOo+xTA2Ml97ECOyJLIFwfYi+gi7HqrjzHYS5x7aKA1jqH8p9Go6BcvjqKLeTJxEB+ybQQIPyXTA/OTNrExT6Zto9UDaPZokOr+Hy+LvD+bYSGLqFa9iuPtG5hNvd9JJneQAbsD+XV4lqDfpMScFVHXh8ckyahuLU8u5Q3rxtuxrjhFnVwyY9M3tQ+XOBY7MjNqIhND/A0MiQpjCVqlIOsGn7WF+vOQZGMcVA134LWg5btKryOTIA27aV0BEWOAKQ/QuDl7cMMoARKcUJ7srDaer9cXQsAQKBgQDvb0eJy+QPBS1jiCSt7vAAJ5Ca+jAosbNxJqiQ8hZuAJB7dG5BSRDdUuwFPCENuMLay699t04MhhFagw9WQhk3AQgZbEJE8wL1NcPfJU9QDpH5fzLmnOyghqPerBUdGiquPGUIG2h+mKIWxZIl5JbbTViDy5nlYfmicTa6jSKwEQKBgQCxMYPRvl7Naz+2BFIjQh2BZc42dj1ualuP8d/TU7fat4I6irjk2A1OHSnihAGwl6F5zFTn+CoriePJbj1o8FVJqxqQSy3j/49bvxgs8fi0Y/0/xSRPoSUHcGbVF8bt277Ua/bJLAWfgUHONAuMfS6BZfZs7jzUIQDAOhcUAFEHsQKBgQC5yLrVrSNUlEvXwzfSzmfjds+5sQ/VQ61cywZZEb9ds4pogLtcZPl1AnaoyTNMlmR7qTiOb8Fb7ltgw/kOkVNHXsGOGHaDUZyl8AYAC88y61tRIOW6E2F4XYChsxze7ALaF3q9g6bdNEnxKXRxeqGjoKxh94V+eztcVESHFCQqQQKBgFKfcwb3TL9eVgvqgd5c8uMmdHxisAxvXZiGQUcKD33V+cyQaNyUfcfBw4kS4rLUUYA4rhKoXgmFN4jydYIcJri+JxnHZHOe89rlBUHX5o8+3JTCuUbELj8Ew35zotfAkn/8g8uUUl7o56VeEVCGAoxl3f03LXgAl5gKvj4eU6pRAoGBAIs2Y17aHbS6/tjz+r2moNvzRxsqDb/67Msc64o9ApPbJdN37sFuFVGfSAzB1EbW5yMLaZUv3/YyeQfXd+IDfisu8ldA8vj/Dmc2vxYrsL+vbVPpvrWaxe6ET707fO4prncvwiR3AfUp3DBZJDLRKB6VWPBwtsrIkIpvsU1XL2ig",
		
		//异步通知地址
		'notify_url' => "http://localhost/alipay/notify_url.php",
		
		//同步跳转
		'return_url' => "http://localhost/alipay/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA3DWoISji7SFdft3l2VJtV1gsuosjJDmNmxBAogxxu/o6Xqf+2uHFKB/aaApULAv6XM5GVukadc+MiYNpqmlQnAktJKAM12ufKBkiPsAGP9THyr4YR1Whx33IiXgNsydKP7efCOsm575rzKnLITX7VxjIuAo8b2vPnKHzJ23Vjom4tCK165dpyCPOe79tkPj7x8HQEJThVPEvn7GdfOiLgLHgz6M6afsmuuTKn/beViYMCn/9zJp3r7wylfdeqcfdsyoYnfz+K/U2r6eNkCkOhOw4vl7MY+CaM2rdqeF4e6MtsqS2hPNZIfU/J6UO53Dtc7KyKcRER4Q2RqfThlqoEQIDAQAB",
);