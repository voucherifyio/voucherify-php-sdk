<p align="center" >
  <img src="./docs/images/voucherify-php-sdk.png" />
</p>

<h3 align="center">Official <a href="http://voucherify.io?utm_source=github&utm_medium=sdk&utm_campaign=acq">Voucherify</a> SDK for PHP</h3>

<hr />

<p align="center">
<b><a href="#migration-from-0x">Migration from 0.x</a></b>
|
<b><a href="#setup">Setup</a></b>
|
<b><a href="#error-handling">Error handling</a></b>
|
<b><a href="#contributing">Contributing</a></b>
|
<b><a href="#changelog">Changelog</a></b>
</p>

<p align="center">
API:
<a href="#vouchers-api">Vouchers</a>
|
<a href="#campaigns-api">Campaigns</a>
|
<a href="#distributions-api">Distributions</a>
|
<a href="#redemptions-api">Redemptions</a>
|
<a href="#customers-api">Customers</a>
</p>

## Setup

Add Voucherify dependency into your `composer.json`:
```
"rspective/voucherify": "v1.0.*"
```
Update project dependencies:

```
$ composer install
```
[Log-in](http://app.voucherify.io/#/login) to Voucherify web interace and obtain your Application Keys from [Configuration](https://app.voucherify.io/#/app/configuration):

```php
require_once('vendor/autoload.php');

use Voucherify\VoucherifyClient;
use Voucherify\ClientException;
use Voucherify\VoucherBuilder;
use Voucherify\CustomerBuilder;

$apiID  = "YOUR-APPLICATION-ID";
$apiKey = "YOUR-CLIENT-SECRET-KEY";

$client = new VoucherifyClient($apiID, $apiKey);
```

## API

This SDK is fully consistent with restufl API Voucherify provides.
Detalied description and example responses  you will find at [official docs](https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq).
Method headers point to more detalied params description you can use.

### Vouchers API
Methods are provided within `$client->vouchers->*` namespace.
- [Create Voucher](#create-voucher)
- [Get Voucher](#get-voucher)
- [Update Voucher](#update-voucher)
- [Delete Voucher](#delete-voucher)
- [List Vouchers](#list-vouchers)
- [Enable Voucher](#enable-voucher)
- [Disable Voucher](#disable-voucher)

#### [Create Voucher]
```php
$client->vouchers->create($voucher);
```
Check [voucher oject](https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq#the-voucher-object).

#### [Get Voucher]
```php
$client->vouchers->get($code);
```
#### [Update Voucher]
```php
$client->vouchers->update($voucher_update);
```
#### [Delete Voucher]
```php
$client->vouchers->delete($code);
$client->vouchers->delete($code, $force);
```
#### [List Vouchers]
```php
$client->vouchers->getList();
$client->vouchers->getList($params);
```
#### [Enable Voucher]
```php
$client->vouchers->enable($code);
```
#### [Disable Voucher]
```php
$client->vouchers->disable($code);
```

#### [Add balance to Gift-Card Voucher]
```php
$client->vouchers->addBalance($code, $balance);
```

---

### Distributions API
Methods are provided within `$client->distributions->*` namespace.

#### [Publish Voucher]
```javascript
$client->distributions->publish($campaign_name);
$client->distributions->publish($params);
```

---

### Redemptions API
Methods are provided within `$client->redemptions->*` namespace.

- [Redeem Voucher](#redeem-voucher)
- [List Redemptions](#list-redemptions)
- [Get Voucher's Redemptions](#get-vouchers-redemptions)
- [Rollback Redemption](#rollback-redemption)

#### [Redeem Voucher]
```php
$client->redemptions->redeem($code);
$client->redemptions->redeem($code, $params);
```
#### [List Redemptions]
```php
$client->redemptions->getList();
$client->redemptions->getList($params);
```
#### [Get Voucher's Redemptions]
```php
$client->redemptions->getForVoucher($code);
```
#### [Rollback Redemption]
```php
$client->redemptions->rollback($redemption_id);
$client->redemptions->rollback($redemption_id, $params);
$client->redemptions->rollback($redemption_id, $reason);
```
Check [redemption rollback object](https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq#the-redemption-rollback-object).

---

### Customers API
Methods are provided within `$client->customers->*` namespace.

- [Create Customer](#create-customer)
- [Get Customer](#get-customer)
- [Update Customer](#update-customer)
- [Delete Customer](#delete-customer)

#### [Create Customer]
```php
$client->customers->create($customer);
```
Check [customer object](https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq#the-customer-object).
#### [Get Customer]
```php
$client->customers->get($customer_id);
```
#### [Update Customer]
```php
$client->customers->update($customer_update);
```
#### [Delete Customer]
```php
$client->customers->delete($customer_id);
```

---

### Migration from 0.x

Version 1.x of the PHP is fully backward compatible with version 0.x.
Changes made in version 1.x mostly relate to grouping methods within namespaces.
So all you need to do is to follow the list bellow and just replace deprecated methods
with their namespaced equivalent.

#### Deprecated methods

- `$client->vouchers($params)` - [$client->vouchers->getList](#list-vouchers)
- `$client->get($code)` - [$client->vouchers->get](#get-voucher)
- `$client->create($voucher)` - [$client->vouchers->create](#create-voucher)
- `$client->update($voucher_update)` - [$client->vouchers->update](#update-voucher)
- `$client->delete($code, $force)` - [$client->vouchers->delete](#delete-voucher)
- `$client->disable($code)` - [$client->vouchers->disable](#disable-voucher)
- `$client->enable($code)` - [$client->vouchers->enable](#enable-voucher)
- `$client->redemption($code)` - [$client->redemptions->getForVoucher](#get-vouchers-redemptions)
- `$client->publish($campaign_name|$params)` - [$client->distributions->publish](#publish-voucher)
- `$client->redeem($code, $tracking_id|$params)` - [$client->redemptions->redeem](#redeem-voucher)
- `$client->redemptions($params)` - [$client->redemptions->getList](#list-redemptions)
- `$client->rollback($redemption_id, $params)` - [$client->redemptions->rollback](#rollback-redemption)
- `$client->customer->*` - changed namespace to [$client->customers->\*](#customers-api)

---

## Error handling

VoucherifyClient will throw custom `ClientException` object. To get sutructure described in our [API reference](https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq#errors) please use:
```php
try {
    ...
}
catch (ClientException $e) {
    $error = $e->getError();
}
```

## Contributing

Bug reports and pull requests are welcome through [GitHub Issues](https://github.com/rspective/voucherify-php-sdk/issues).

### Changelog
- **2017-04-19** - `1.0.2` - Unit tests, bug fixes
- **2017-03-17** - `1.0.1` - Vouchers addBalance method
- **2017-02-19** - `1.0.0` - Namespace refectoring
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



[Create Voucher]: https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq#create-voucher
[Get Voucher]: https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq#vouchers-get
[Update Voucher]: https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq#update-voucher
[Delete Voucher]: https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq#delete-voucher
[List Vouchers]: https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq#list-vouchers
[Enable Voucher]: https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq#enable-voucher
[Disable Voucher]: https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq#disable-voucher

[Publish Voucher]: https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq#publish-voucher

[Redeem Voucher]: https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq#redeem-voucher
[List Redemptions]: https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq#list-redemptions
[Get Voucher's Redemptions]: https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq#vouchers-redemptions
[Rollback Redemption]: https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq#rollback-redemption

[Create Customer]: https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq#create-customer
[Get Customer]: https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq#read-customer
[Update Customer]: https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq#update-customer
[Delete Customer]: https://docs.voucherify.io/reference?utm_source=github&utm_medium=sdk&utm_campaign=acq#delete-customer
