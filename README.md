## Voucherify SDK

PHP SDK for [Voucherify](http://www.voucherify.io/?utm_source=inbound&utm_medium=github&utm_campaign=voucherify-php-sdk) - an API-first voucher managment solution.

### Usage

#### Authentication

```php
// Run autoload after installing package with Composer
require_once('vendor/autoload.php');

use Voucherify\VoucherifyClient;
use Voucherify\ClientException;

$apiID          = "YOUR-APPLICATION-ID-OBTAINED-FROM-CONFIGURATION";
$apiKey         = "YOUR-CLIENT-SECRET-KEY-OBTAINED-FROM-CONFIGURATION";

$voucherify = new VoucherifyClient($apiID, $apiKey);
```

#### Getting voucher details

```php
try {
    $result = $voucherify->get("Testing7fjWdr");
    print_r($result);
} 
catch (ClientException $e) {
    echo ("Error: " . $e->getMessage());
}
```

Result:
```php
stdClass Object
(
    [code] => CODE1
    [campaign] => Test Import Campaign
    [category] =>
    [discount] => 300
    [discount_type] => AMOUNT
    [start_date] => 2015-11-11T23:00:00Z
    [expiration_date] => 2015-11-28T22:59:59Z
    [redemption] => stdClass Object (
        [quantity] => 1
        [redeemed_quantity] => 1
        [redemption_entries] => Array (
            [0] => stdClass Object (
                [id] => r_AYSBUFD2U5xmYATtXank8NI5
                [object] =>
                [date] => 2015-11-12T11:39:07Z
                [tracking_id] => (tracking_id not set)
            )

        )
    )
    [active] => 1
    [additional_info] => secret-code1
    [metadata] => stdClass Object (
        [unit] => EUR
    )
)
```

#### Getting voucher redemption

```php
try {
    $result = $voucherify->redemption("Testing7fjWdr");
    print_r($result);
}
catch (ClientException $e) {
    echo ("Error: " . $e->getMessage());
}
```

Result:
```php
stdClass Object
(
    [quantity] => 1
    [redeemed_quantity] => 1
    [redemption_entries] => Array (
        [0] => stdClass Object (
            [id] => r_AYSBUFD2U5xmYATtXank8NI5
            [object] =>
            [date] => 2015-11-12T11:39:07Z
            [tracking_id] => (tracking_id not set)
        )
    )
)
```

#### Redeeming voucher

##### 1. Just by code

```php
try {
    $result = $voucherify->redeem("Testing7fjWdr", NULL);
    print_r($result);
}
catch (ClientException $e) {
    echo ("Error: " . $e->getMessage());
}
```

Result (voucher details after redemption):

```php
stdClass Object
(
    [id] => r_lIpiuyMKYK4NN5uyFuMDzuUX
    [object] => redemption
    [date] => 2015-12-03T10:58:08Z
    [tracking_id] => (tracking_id not set)
    [voucher] => stdClass Object (
        [code] => Testing7fjWdr
        [campaign] => TestingPlatform
        [category] =>
        [discount] => 999
        [discount_type] => AMOUNT
        [start_date] =>
        [expiration_date] =>
        [redemption] => stdClass Object (
            [quantity] =>
            [redeemed_quantity] => 71
            [redemption_entries] => Array (
                [0] => stdClass Object (
                    [id] => r_icykIG693ChNGuJejQZjtYjl
                    [object] =>
                    [date] => 2015-11-09T15:41:34Z
                    [tracking_id] => (tracking_id not set)
                )
                ...
                [70] => stdClass Object (
                    [id] => r_lIpiuyMKYK4NN5uyFuMDzuUX
                    [object] => redemption
                    [date] => 2015-12-03T10:58:08Z
                    [tracking_id] => (tracking_id not set)
                )
            )
        )
        [active] => 1
        [additional_info] =>
        [metadata] =>
    )
)
```

Error:
```php
Error: Unexpected status code: 400 - Details: {
    "code": 400,
    "message": "voucher expired or quantity exceeded",
    "details": "Testing7fjWdr"
}
```

##### 2. With tracking id

You can provide a tracking id (e.g. your customer's login or a generated id) to the voucher redemption request.

```php
try {
    $result = $voucherify->redeem("Testing7fjWdr", "alice.morgan");
    print_r($result);
}
catch (ClientException $e) {
    echo ("Error: " . $e->getMessage());
}
```

Result:
```php
stdClass Object
(
    [id] => r_lIpiuyMKYK4NN5uyFuMDzuUX
    [object] => redemption
    [date] => 2015-12-03T10:58:08Z
    [tracking_id] => (tracking_id not set)
    [voucher] => stdClass Object (
        [code] => Testing7fjWdr
        [campaign] => TestingPlatform
        [category] =>
        [discount] => 999
        [discount_type] => AMOUNT
        [start_date] =>
        [expiration_date] =>
        [redemption] => stdClass Object (
            [quantity] =>
            [redeemed_quantity] => 71
            [redemption_entries] => Array (
                [0] => stdClass Object (
                    [id] => r_icykIG693ChNGuJejQZjtYjl
                    [object] =>
                    [date] => 2015-11-09T15:41:34Z
                    [tracking_id] => (tracking_id not set)
                )
                ...
                [71] => stdClass Object (
                    [id] => r_eqLAE4y1Wdt4n7kLWgTkWdZ9
                    [object] => redemption
                    [date] => 2015-12-03T11:02:35Z
                    [tracking_id] => alice.morgan
                )
            )
        )
        [active] => 1
        [additional_info] =>
        [metadata] =>
    )
)
```

##### 3. With customer profile

You can record a detailed customer profile consisting of an `id` (obligatory), `name`, `email`, `description` and a `metadata` section that can include any data you wish.

```php
try {
    $result = $voucherify->redeem([
        "voucher" => $voucherCode, 
        "customer" => [ 
            "id"            => "alice.morgan",
            "name"          => "Alice Morgan",
            "email"         => "alice@morgan.com",
            "description"   => "",
            "metadata"      => [
                "locale"            => "en-GB",
                "shoeSize"          => 5,
                "favourite_brands"  => ["Armani", "L’Autre Chose", "Vicini"]
            ]
        ]
    ], NULL);
    print_r($result);
}
catch (ClientException $e) {
    echo("Error: " . $e->getMessage() . PHP_EOL);
}
```

### Changelog

- **2015-12-02** - `0.1.0` - First version:
  - Authentication
  - Voucher informations: *get*, *redemption*
  - Voucher operations: *redeem*
