## Voucherify PHP SDK

[Voucherify](http://voucherify.io?utm_source=github&utm_medium=sdk&utm_campaign=acq) is an API-first platform for software developers who are dissatisfied with high-maintenance custom coupon software. Our product is a coupon infrastructure through API that provides a quicker way to build coupon generation, distribution and tracking. Unlike legacy coupon software we have:

* an API-first SaaS platform that enables customisation of every aspect of coupon campaigns
* a management console that helps cut down maintenance and reporting overhead
* an infrastructure to scale up coupon activity in no time

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
use Voucherify\CustomerBuilder;
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
    [type] => DISCOUNT_VOUCHER
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
        [type] => DISCOUNT_VOUCHER
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
        [type] => DISCOUNT_VOUCHER
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

##### 4. With customer id

If you already created a customer profile in Voucherify's database, whether it was implicitly by providing it to the `redeem` function or explicitly by invoking the [`customer.create`](#create-customer) method, you can identify your customer in following redemptions by a generated id (starting with `cust_`).


```php
$voucherify->redeem([
        "voucher" => "Testing7fjWdr", 
        "customer" => [ 
            "id" => "cust_C9qJ3xKgZFqkpMw7b21MF2ow"
        ]
    ], NULL);
```

##### 5. With order amount

Redeeming a gift voucher requires to pass an amount that you wish to withdraw from the voucher.
The same applies to vouchers with validation rules on order's total amount.
Order amount have to be expressed in cents, as an integer. For example $22.50 should be provided as 2250:    

```php      
$voucherify->redeem([
        "voucher" => "91Ft4U", 
        "order" => [ 
            "amount" => 2550
        ]
    ], NULL);
```

##### 6. With order items

Vouchers with validation rules regarding products or SKUs require to pass `order.items`.
Items are a list of objects consisting of `product_id`, `sku_id` and `quantity`.
 
```php
$voucherify->redeem([
        "voucher" => "91Ft4U",
        "order" => [
            "items" => [
                [ "product_id" => "prod_ELvEXqF4qzB7Rs", "sku_id" => "sku_GoXSOI4FwJZafb", "quantity" => 1 ],
                [ "product_id: "prod_wye1naw5JO5dh3", "sku_id" => "sku_U3rHSlfOCGUnbo", "quantity" => 2 ]
            ]
        ], NULL)
```

#### Creating voucher

You can create a new voucher using `VoucherifyClient->create`. It accepts an object representing the voucher.
`VoucherBuilder` will help you to create a valid [voucher object](https://voucherify.readme.io/docs/vouchers).
You can create a voucher with a specified code (`VoucherBuilder->setCode`) or let Voucherify generate one.
By default a generated code is a 8 characters long alphanumeric string, however, you can define how to create 
the random code passign a `code_config` object:
- `length` (`VoucherBuilder->setCodeLength`) - Number of characters in a generated code (excluding prefix and postfix)
- `charset` (`VoucherBuilder->setCodeCharset`) - Characters that can appear in the code.
- `prefix` (`VoucherBuilder->setCodePrefix`) - A text appended before the code.
- `postfix` (`VoucherBuilder->setCodePostfix`) - A text appended after the code.
- `pattern` (`VoucherBuilder->setCodePattern`) - A pattern for codes where hashes (#) will be replaced with random characters. Overrides `length`.

Example:

```php
try {
    $voucher = (new VoucherBuilder())
        ->setCodePattern("TEST-#####")
        ->setCategory("PHP-SDK-Test")
        ->setAmountDiscount(10.0)
        ->setStartDate(new DateTime("2016-01-20", new DateTimeZone("UTC")))
        ->setRedemptionLimit(1)
        ->build();
        
    $result = $voucherify->create($voucher);
    print_r($result);
}
catch (ClientException $e) {
    echo("Error: " . $e->getMessage());
}
```

#### Updating voucher

You can change some properties of a voucher that has been already created:
- category
- start date
- expiration date
- active
- additional info
- metadata

Other fields than listed above won't be modified. Even if provided they will be silently skipped.

Use `VoucherifyClient->update` to update a voucher.

```php
$voucher_update = (object) array(
    "code" => "Summer-2016",
    "category" => "Season",
    "start_date" => "2016-07-01T00:00:00Z",
    "expiration_date" => "2016-08-31T23:59:59Z"
);

$updated_voucher = $voucherify->update($voucher_update);
```

#### Publishing voucher

This method selects a voucher that is suitable for publication, adds a publish entry and returns the voucher.
A voucher is suitable for publication when it's active and has not been published more times than the redemption limit.

Example:

Using campaign name:

```php
$published_voucher = $voucherify->publish("First Ride");
```

Using object with campaign name:

```php
$payload = (object) array(
    "campaign" => "First Ride",
    "channel" => "SDK Test",
    "customer" => "alice.morgan@mail.com"
);

$published_voucher = $voucherify->publish($payload);
```

Using object with specific voucher code:

```php
$payload = (object) array(
    "voucher" => "Summer-2016",
    "channel" => "SDK Test",
    "customer" => "alice.morgan@mail.com"
);

$published_voucher = $voucherify->publish($payload);
```

Using object with specific voucher code and customer data (new customer object will be created):

```php
$customer = (new CustomerBuilder())
    ->setName("John Doe")
    ->setEmail("john@email.com")
    ->setDescription("Simple description of Natalie personality")
    ->setMetadata((object)array("lang" => "en"))
    ->build();

$payload = (object) array(
    "voucher" => "Summer-2016",
    "channel" => "SDK Test",
    "customer" => $customer
);

$published_voucher = $voucherify->publish($payload);
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
    
#### Deleting voucher

You can delete a voucher by calling `VoucherifyClient->delete` with a voucher code.
Param `force` is optional. It allows you to remove voucher with keeping the possibility of creating a new voucher with the same code:
- code       - string
- force      - boolean _(optional)_

Example :

```php
$force = true;

try {
    $voucherify->delete("Testing7fjWdr", $force);
    echo "Voucher deleted.\n";
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
```

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
        [type] => DISCOUNT_VOUCHER
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

#### Create customer

```php
try {
    $customer = (new CustomerBuilder())
        ->setName("John Doe")
        ->setEmail("john@email.com")
        ->setDescription("Simple description of Natalie personality")
        ->setMetadata((object)array("lang" => "en"))
        ->build();

    $result = $voucherify->customer->create($customer);
    print_r($result);
} catch (ClientException $e) {
    echo("Error: " . $e->getMessage());
}
```

Result:
```php
(
    [id] => cust_HPBnmNYdQAEYZ5jsBYPk3NXt
    [name] => John Doe
    [email] => john@email.com
    [description] => Sample description about customer
    [metadata] => stdClass Object
        (
            [lang] => en
        )

    [created_at] => 2016-06-12T18:22:17Z
    [object] => customer
)

```

#### Get customer

```php
try {
    $result = $voucherify->customer->get("cust_toV1gv43r7coKX9u95QHd1td");
    print_r($result);
} catch (ClientException $e) {
    echo("Error: " . $e->getMessage());
}
```

Result:
```php
stdClass Object
(
    [id] => cust_toV1gv43r7coKX9u95QHd1td
    [name] => John Doe
    [email] => john@email.com
    [description] => Sample description about customer
    [metadata] => stdClass Object
        (
            [lang] => en
        )

    [created_at] => 2016-06-12T18:29:28Z
    [object] => customer
)
```

#### Update customer

```php
try {
    $payload = (object) [ ... customer object ... ];
    $payload->id = "cust_toV1gv43r7coKX9u95QHd1td";
    $payload->description = "Sample description about customer with changes";

    $result = $voucherify->customer->update($payload);
    print_r($result);
} catch (ClientException $e) {
    echo("Error: " . $e->getMessage());
}
```

Result:
```php
stdClass Object
(
    [id] => cust_toV1gv43r7coKX9u95QHd1td
    [name] => John Doe
    [email] => john@email.com
    [description] => Sample description about customer with changes
    [metadata] => stdClass Object
        (
            [lang] => en
        )

    [created_at] => 2016-06-12T18:29:28Z
    [object] => customer
)
```

#### Delete customer

```php
try {
    $voucherify->customer->delete("cust_toV1gv43r7coKX9u95QHd1td");
    echo("Customer deleted");
} catch (ClientException $e) {
    echo("Error: " . $e->getMessage());
}
```

Result:
`This endpoint does not return result`
    
### Changelog
- **2016-09-13** - `0.11.0` - Added new API method for voucher - publish
- **2016-09-13** - `0.10.0` - Added new API method for voucher - delete
- **2016-09-13** - `0.9.1` - Fix to maintain builder pattern.
- **2016-07-20** - `0.9.0` - Voucher code pattern.
- **2016-07-19** - `0.8.0` - Voucher update method.
- **2016-06-23** - `0.7.0` - Gift vouchers.
- **2016-04-27** - `0.6.0` - Added new API methods for customer - create, get, update, delete.
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
