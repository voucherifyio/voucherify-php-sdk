## Voucherify PHP SDK

[Voucherify](http://www.voucherify.io/?utm_source=github&utm_medium=sdk&utm_campaign=acq) has a new platform that will help your team  to automate voucher campaigns. It does this by providing composable API and the marketer-friendly interface that let growth teams:

- **roll-out thousands** of vouchers **in minutes** instead of weeks,
- **check status** or disable **every single** promo code in real time, 
- **track redemption** history and build reports on the fly.

Here is a library that makes it easier to integrate Voucherify with your PHP application.

You can find full documentation on [voucherify.readme.io](https://voucherify.readme.io).

### Usage

#### Authentication

[Log-in](http://app.voucherify.io/#/login) to Voucherify web interace and obtain your Application Keys from [Configuration](https://app.voucherify.io/#/app/configuration):

![](https://www.filepicker.io/api/file/WKYkl2bSAWKHccEN9tEG)

```php
// Run autoload after installing package with Composer
require_once('vendor/autoload.php');

use Voucherify\VoucherifyClient;
use Voucherify\VoucherBuilder;
use Voucherify\ClientException;

$apiID          = "c70a6f00-cf91-4756-9df5-47628850002b";
$apiKey         = "3266b9f8-e246-4f79-bdf0-833929b1380c";

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
                [object] => redemption
                [date] => 2015-11-09T15:41:34Z
                [customer_id] =>
                [tracking_id] => (tracking_id not set)
            )
            [1] => stdClass Object (
                [id] => r_xRjIVSdYnYOncmWSvVgBcWVi
                [object] => redemption
                [date] => 2015-11-09T15:49:11Z
                [customer_id] =>
                [tracking_id] => (tracking_id not set)
            )
            ...
            [72] => stdClass Object (
                [id] => r_vr7xbbTc5XiJcIDQeP3LLb27
                [object] => redemption
                [date] => 2015-12-03T11:07:56Z
                [customer_id] => cust_84LPwcHJ1jVEpxV1uF9nLLBB
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
            [object] => redemption
            [date] => 2015-11-09T15:41:34Z
            [customer_id] =>
            [tracking_id] => (tracking_id not set)
        )
        [1] => stdClass Object (
            [id] => r_xRjIVSdYnYOncmWSvVgBcWVi
            [object] => redemption
            [date] => 2015-11-09T15:49:11Z
            [customer_id] =>
            [tracking_id] => (tracking_id not set)
        )
        ...
        [72] => stdClass Object (
            [id] => r_vr7xbbTc5XiJcIDQeP3LLb27
            [object] => redemption
            [date] => 2015-12-03T11:07:56Z
            customer_id] => cust_84LPwcHJ1jVEpxV1uF9nLLBB
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
    [customer_id] => 
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
                    [object] => redemption
                    [date] => 2015-11-09T15:41:34Z
                    [customer_id] =>
                    [tracking_id] => (tracking_id not set)
                )
                ...
                [73] => stdClass Object (
                    [id] => r_MkNMsis65DZBZ8uoG6W901nt
                    [object] => redemption
                    [date] => 2015-12-04T09:32:24Z
                    [customer_id] => 
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
    [id] => r_xRjIVSdYnYOncmWSvVgBcWVi
    [object] => redemption
    [date] => 2016-04-25T15:49:11Z
    [customer_id] => cust_84LPwcHJ1jVEpxV1uF9nLLBB
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
            [redeemed_quantity] => 2
            [redemption_entries] => Array (
                [0] => stdClass Object (
                    [id] => r_icykIG693ChNGuJejQZjtYjl
                    [object] => redemption
                    [date] => 2016-04-25T15:41:34Z
                    [tracking_id] => (tracking_id not set)
                )
                [1] => stdClass Object (
                    [id] => r_xRjIVSdYnYOncmWSvVgBcWVi
                    [object] => redemption
                    [date] => 2016-04-25T15:49:11Z
                    [customer_id] => cust_84LPwcHJ1jVEpxV1uF9nLLBB
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

You can record a detailed customer profile consisting of an `source_id`, `name`, `email`, `description` and a `metadata` section that can include any data you wish. Voucherify will create (or update) provided customer profile in its database.

```php
try {
    $result = $voucherify->redeem([
        "voucher" => "Testing7fjWdr", 
        "customer" => [ 
            "source_id"     => "alice.morgan",
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

#### Creating voucher

You can create a new voucher using `VoucherifyClient->create`. It accepts an object representing the voucher.
`VoucherBuilder` will help you to create a valid [voucher object](https://voucherify.readme.io/docs/vouchers).

```php
try {
    $voucher = (new VoucherBuilder())
        ->setCategory("PHP-SDK-Test")
        ->setAmountDiscount(10.0)
        ->setStartDate(new DateTime("2016-01-20"))
        ->setRedemptionLimit(1)
        ->build();
        
    $result = $voucherify->create($voucher);
    print_r($result);
}
catch (ClientException $e) {
    echo("Error: " . $e->getMessage());
}
```

#### Disabling voucher

You can make a voucher inactive by calling `VoucherifyClient->disable` with a voucher code:

    ```php
    try {
        $voucherify->disable("Testing7fjWdr");
        echo "Voucher disabled.\n";
    }
    catch (ClientException $e) {
        echo("Error: " . $e->getMessage());
    }
    ```
    
#### Enabling voucher

You can enable a voucher by calling `VoucherifyClient->enable` with a voucher code:

    ```php
    try {
        $voucherify->enable("Testing7fjWdr");
        echo "Voucher enabled.\n";
    }
    catch (ClientException $e) {
        echo("Error: " . $e->getMessage());
    }
    ```
    
#### List vouchers

Use `VoucherifyClient->vouchers` to get a filtered list of vouchers. Pass an array specifing a filter.
The filter can include following properties:
- code_query - string
- limit      - number (default 10)
- skip       - number (default 0)
- campaign   - string
- category   - string
- customer   - string

Example :

```php
try {
    $filter = (object) array(
       "limit" => 100,
       "customer" => "alice.morgan"
    );

    $vouchers = $voucherify->redemptions($filter);
    print_r($redemptions);
}
catch (ClientException $e) {
    echo("Error: " . $e->getMessage());
}

#### List redemptions

Use `VoucherifyClient->redemptions` to get a filtered list of redemptions. Pass an array specifing a filter.
The filter can include following properties:
- limit      - number (default 100)
- page       - number (default 0)
- start_date - string (ISO8601 format, default is the beginning of current month)
- end_date   - string (ISO8601 format, default is the end of current month)
- result     - string (Success|Failure-NotExist|Failure-Inactive)
- customer   - string (id or source_id)

Example - 1000 successful redemptions from April 2016:

```php
try {
    $filter = (object) array(
       "limit" => 1000,
       "page" => 0,
       "start_date" => "2016-04-01T00:00:00",
       "end_date" => "2016-04-30T23:59:59",
       "result" => "Success"
    );

    $redemptions = $voucherify->redemptions($filter);
    print_r($redemptions);
}
catch (ClientException $e) {
    echo("Error: " . $e->getMessage());
}
```

#### Rollback redemption

You can invoke `VoucherifyClient->rollback(redemption_id, tracking_id*, reason*)` to revert a redemption.
This operation creates a rollback entry in voucher's redemption history (`redemption.redemption_entries`)
and gives 1 redemption back to the pool (decreases `redeemed_quantity` by 1).

Example - 1000 successful redemptions from April 2016:

```php
try {
    $result = $voucherify->rollback("r_irOQWUTAjthQwnkn5JQM1V6N", "alice.morgan");
    print_r($result);
}
catch (ClientException $e) {
    echo("Error: " . $e->getMessage());
}
```

Result:
```php
stdClass Object (
    [id] => rr_3Kaak0d9pXO5Nb21UUNiAJ0j
    [object] => redemption_rollback
    [date] => 2016-04-27T13:44:13Z
    [customer_id] => cust_84LPwcHJ1jVEpxV1uF9nLLBB
    [tracking_id] => alice.morgan
    [redemption] => r_xRjIVSdYnYOncmWSvVgBcWVi
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
            [redeemed_quantity] => 1
            [redemption_entries] => Array (
                [0] => stdClass Object (
                    [id] => r_icykIG693ChNGuJejQZjtYjl
                    [object] => redemption
                    [date] => 2016-04-25T15:41:34Z
                    [customer_id] =>
                    [tracking_id] => (tracking_id not set)
                )
                [1] => stdClass Object (
                    [id] => r_xRjIVSdYnYOncmWSvVgBcWVi
                    [object] => redemption
                    [date] => 2016-04-25T15:49:11Z
                    [customer_id] => cust_84LPwcHJ1jVEpxV1uF9nLLBB
                    [tracking_id] => alice.morgan
                )
                [2] => stdClass Object (
                    [id] => rr_3Kaak0d9pXO5Nb21UUNiAJ0j
                    [object] => redemption_rollback
                    [date] => 2016-04-25T15:49:13Z
                    [tracking_id] => alice.morgan
                    [customer_id] => cust_84LPwcHJ1jVEpxV1uF9nLLBB
                    [redemption] => r_xRjIVSdYnYOncmWSvVgBcWVi
                )
            )
        )
        [active] => 1
        [additional_info] =>
        [metadata] =>
    )
)
```
    
### Changelog
- **2016-04-27** - `0.5.0` - Rollback redemption.
- **2016-04-18** - `0.4.0` - List vouchers. Filter by customer.
- **2016-04-07** - `0.3.0` - List redemptions.
- **2016-04-04** - `0.2.2` - Updated API URL.
- **2016-03-03** - `0.2.1` - Fixed a typo (diasble -> disable).
- **2016-01-21** - `0.2.0` - Added new API methods - create, disable and enable.
- **2015-12-11** - `0.1.1` - New discount model. Added UNIT - a new discount type.
- **2015-12-02** - `0.1.0` - First version:
  - Authentication
  - Voucher informations: *get*, *redemption*
  - Voucher operations: *redeem*
