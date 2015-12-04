## Voucherify SDK

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
    $result = $voucherify->get("rc-WB-6D9icS1");
    print_r($result);
} 
catch (ClientException $e) {
    echo("Error: " . $e->getMessage());
}
```

Result:
```php
stdClass Object (
    [code] => rc-WB-6D9icS1
    [campaign] => Readme Campaign
    [category] =>
    [discount] => 9900
    [discount_type] => AMOUNT
    [start_date] =>
    [expiration_date] =>
    [redemption] => stdClass Object (
        [quantity] => 3
        [redeemed_quantity] => 1
        [redemption_entries] => Array (
            [0] => stdClass Object (
                [id] => r_rSFzBUkpdw110VgMF2RkEZu5
                [object] => redemption
                [date] => 2015-12-03T23:45:23Z
                [tracking_id] => (tracking_id not set)
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
    $result = $voucherify->redemption("rc-WB-6D9icS1");
    print_r($result);
}
catch (ClientException $e) {
    echo("Error: " . $e->getMessage());
}
```

Result:
```php
stdClass Object (
    [quantity] => 3
    [redeemed_quantity] => 1
    [redemption_entries] => Array (
        [0] => stdClass Object (
            [id] => r_rSFzBUkpdw110VgMF2RkEZu5
            [object] => redemption
            [date] => 2015-12-03T23:45:23Z
            [tracking_id] => (tracking_id not set)
        )
    )
)
```

#### Redeeming voucher

##### 1. Just by code

```php
try {
    $result = $voucherify->redeem("rc-WB-6D9icS1", NULL);
    print_r($result);
}
catch (ClientException $e) {
    echo("Error: " . $e->getMessage());
}
```

Result (voucher details after redemption):

```php
stdClass Object (
    [id] => r_rSFzBUkpdw110VgMF2RkEZu5
    [object] => redemption
    [date] => 2015-12-03T23:45:23Z
    [tracking_id] => (tracking_id not set)
    [voucher] => stdClass Object (
        [code] => rc-WB-6D9icS1
        [campaign] => Readme Campaign
        [category] =>
        [discount] => 9900
        [discount_type] => AMOUNT
        [start_date] =>
        [expiration_date] =>
        [redemption] => stdClass Object (
            [quantity] => 3
            [redeemed_quantity] => 1
            [redemption_entries] => Array (
                [0] => stdClass Object (
                    [id] => r_rSFzBUkpdw110VgMF2RkEZu5
                    [object] => redemption
                    [date] => 2015-12-03T23:45:23Z
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
    "details": "rc-WB-6D9icS1"
}
```

##### 2. With tracking id

You can provide a tracking id (e.g. your customer's login or a generated id) to the voucher redemption request.

```php
try {
    $result = $voucherify->redeem("rc-WB-6D9icS1", "alice.morgan");
    print_r($result);
}
catch (ClientException $e) {
    echo("Error: " . $e->getMessage());
}
```

Result:
```php
stdClass Object (
    [id] => r_bXvP3kfx91rd3IEUk9egW9hk
    [object] => redemption
    [date] => 2015-12-03T23:50:35Z
    [tracking_id] => alice.morgan
    [voucher] => stdClass Object (
        [code] => rc-WB-6D9icS1
        [campaign] => Readme Campaign
        [category] =>
        [discount] => 9900
        [discount_type] => AMOUNT
        [start_date] =>
        [expiration_date] =>
        [redemption] => stdClass Object (
            [quantity] => 3
            [redeemed_quantity] => 2
            [redemption_entries] => Array (
                [0] => stdClass Object (
                    [id] => r_rSFzBUkpdw110VgMF2RkEZu5
                    [object] => redemption
                    [date] => 2015-12-03T23:45:23Z
                    [tracking_id] => (tracking_id not set)
                )
                [1] => stdClass Object(
                    [id] => r_bXvP3kfx91rd3IEUk9egW9hk
                    [object] => redemption
                    [date] => 2015-12-03T23:50:35Z
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
        "voucher" => "rc-WB-6D9icS1", 
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

- **2015-12-02** - `0.1.0` - First version:
  - Authentication
  - Voucher informations: *get*, *redemption*
  - Voucher operations: *redeem*
