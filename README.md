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
    echo("Error: " . $e->getMessage());
}
```

Result:
```php
stdClass Object (
    [code] => Testing7fjWdr
    [campaign] => TestingPlatform
    [category] =>
    [discount] => stdClass Object (
        [type] = AMOUNT
        [amount_off] = 999
    )
    [start_date] =>
    [expiration_date] =>
    [redemption] => stdClass Object (
        [quantity] =>
        [redeemed_quantity] => 73
        [redemption_entries] => Array (
            [0] => stdClass Object (
                [id] => r_icykIG693ChNGuJejQZjtYjl
                [object] =>
                [date] => 2015-11-09T15:41:34Z
                [tracking_id] => (tracking_id not set)
            )
            [1] => stdClass Object (
                [id] => r_xRjIVSdYnYOncmWSvVgBcWVi
                [object] =>
                [date] => 2015-11-09T15:49:11Z
                [tracking_id] => (tracking_id not set)
            )
            ...
            [72] => stdClass Object (
                [id] => r_vr7xbbTc5XiJcIDQeP3LLb27
                [object] => redemption
                [date] => 2015-12-03T11:07:56Z
                [tracking_id] => alice.morgan
            )
        )
    )
    [active] => 1
    [additional_info] =>
    [metadata] =>
)
```

#### Getting voucher redemption

```php
try {
    $result = $voucherify->redemption("Testing7fjWdr");
    print_r($result);
}
catch (ClientException $e) {
    echo("Error: " . $e->getMessage());
}
```

Result:
```php
stdClass Object (
    [quantity] =>
    [redeemed_quantity] => 73
    [redemption_entries] => Array (
        [0] => stdClass Object (
            [id] => r_icykIG693ChNGuJejQZjtYjl
            [object] =>
            [date] => 2015-11-09T15:41:34Z
            [tracking_id] => (tracking_id not set)
        )
        [1] => stdClass Object (
            [id] => r_xRjIVSdYnYOncmWSvVgBcWVi
            [object] =>
            [date] => 2015-11-09T15:49:11Z
            [tracking_id] => (tracking_id not set)
        )
        ...
        [72] => stdClass Object (
            [id] => r_vr7xbbTc5XiJcIDQeP3LLb27
            [object] => redemption
            [date] => 2015-12-03T11:07:56Z
            [tracking_id] => alice.morgan
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
    echo("Error: " . $e->getMessage());
}
```

Result (voucher details after redemption):

```php
php test.php
stdClass Object (
    [id] => r_MkNMsis65DZBZ8uoG6W901nt
    [object] => redemption
    [date] => 2015-12-04T09:32:24Z
    [tracking_id] => (tracking_id not set)
    [voucher] => stdClass Object (
        [code] => Testing7fjWdr
        [campaign] => TestingPlatform
        [category] =>
        [discount] => stdClass Object (
            [type] = AMOUNT
            [amount_off] = 999
        )
        [start_date] =>
        [expiration_date] =>
        [redemption] => stdClass Object (
            [quantity] =>
            [redeemed_quantity] => 74
            [redemption_entries] => Array (
                [0] => stdClass Object (
                    [id] => r_icykIG693ChNGuJejQZjtYjl
                    [object] =>
                    [date] => 2015-11-09T15:41:34Z
                    [tracking_id] => (tracking_id not set)
                )
                ...
                [73] => stdClass Object (
                    [id] => r_MkNMsis65DZBZ8uoG6W901nt
                    [object] => redemption
                    [date] => 2015-12-04T09:32:24Z
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
    echo("Error: " . $e->getMessage());
}
```

Result:
```php
stdClass Object (
    [id] => r_2SgnmcI0ejXOItrS1SeQNlkY
    [object] => redemption
    [date] => 2015-12-04T09:41:19Z
    [tracking_id] => alice.morgan
    [voucher] => stdClass Object (
        [code] => Testing7fjWdr
        [campaign] => TestingPlatform
        [category] =>
        [discount] => stdClass Object (
            [type] = AMOUNT
            [amount_off] = 999
        )
        [start_date] =>
        [expiration_date] =>
        [redemption] => stdClass Object (
            [quantity] =>
            [redeemed_quantity] => 75
            [redemption_entries] => Array (
                [0] => stdClass Object (
                    [id] => r_icykIG693ChNGuJejQZjtYjl
                    [object] =>
                    [date] => 2015-11-09T15:41:34Z
                    [tracking_id] => (tracking_id not set)
                )
                [1] => stdClass Object (
                    [id] => r_xRjIVSdYnYOncmWSvVgBcWVi
                    [object] =>
                    [date] => 2015-11-09T15:49:11Z
                    [tracking_id] => (tracking_id not set)
                )
                ...
                [74] => stdClass Object (
                    [id] => r_2SgnmcI0ejXOItrS1SeQNlkY
                    [object] => redemption
                    [date] => 2015-12-04T09:41:19Z
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
        "voucher" => "Testing7fjWdr", 
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
    echo("Error: " . $e->getMessage());
}
```

### Changelog
- **2015-12-10** - `0.1.1` - New discount model. Added UNIT - a new discount type.
- **2015-12-02** - `0.1.0` - First version:
  - Authentication
  - Voucher informations: *get*, *redemption*
  - Voucher operations: *redeem*
