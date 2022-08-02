# wechatpay-v3

一个很好用的的微信支付 V3 的 API

[![OSCS Status](https://www.oscs1024.com/platform/badge/lmhfq/wechatpay-v3.svg?size=small)](https://www.oscs1024.com/project/lmhfq/wechatpay-v3?ref=badge_small)
## 安装

```
composer require love-dj/wechatpay-v3 dev-master
```

### 敏感参数加解密

在设置请求的参数($query 或 $params)时，无需手动对敏感参数进行加解密。仅需要在 $options 参数中申明需要加解密的参数（支持点运算符）即可。 例如：

### 使用方法
```php

$options=[
    'http' => [
        'timeout' => 30.0,
        'base_uri' => 'https://api.mch.weixin.qq.com/v3',
        'max_retries' => 1,
        'retry_delay' => 500,
    ],
    //商户号
    'mch_id' => '',
    //商户API证书序列号
    'serial_no' => '',
    //商户私钥
    'private_key' => '',
    'aes_key' => '',
    'redisClient' => null,
    'log'=>[
        'default' => '',
        'channels' => ''
    ],
     // 加密
    'encode_params' => [
        'id_card_info.id_card_name',
        'id_card_info.id_card_number',
        'account_info.account_name',
        'account_info.account_number',
        'contact_info.contact_name',
        'contact_info.contact_id_card_number',
        'contact_info.mobile_phone',
        'contact_info.contact_email',
    ],
    // 解密--根据自己调整字段，可以不传
    'decode_params' => [
        'account_validation.account_name',
        'account_validation.pay_amount',
    ]
]

$app   = new \Love\WeChatPayV3\Factory();
$app   = $app->app($options);
$product = $app->transfer;
$outBatchNo=''//订单号
$product->queryByOutBatchNo($outBatchNo);

```