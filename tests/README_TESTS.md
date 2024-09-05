## Tool:
We use `codeception` for testing. You should have installed `codeception` via `composer` in order to run the tests.

`__tests__/UnitTester.php` is used to configure `codeception` and to load `vendor/autoload.php` file. Please do not modify this file!


## How to write tests:
All tests should be in `__tests__/Unit/` folder. And should be named as `*Test.php`. All test functions should be named as `test*` (see example).

Import sdk:

```php
require_once(dirname(dirname(__DIR__)) . '/vendor/autoload.php');
```

Good practice is to use `_before` to configure sdks APIs:
```php

    //example
    protected function _before()
    {
        //load .env
        $env = parse_ini_file('.env');

        $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', $env["X_APP_ID"]);
        $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', $env["X_APP_TOKEN"]);
        $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setHost($env["VOUCHERIFY_HOST"]);

        $this->productsApiInstance = new OpenAPI\Client\Api\ProductsApi(
            new GuzzleHttp\Client(),
            $config
        );
        $this->campaignsApiInstance = new OpenAPI\Client\Api\CampaignsApi(
            new GuzzleHttp\Client(),
            $config
        );
        $this->redemptionsApiInstance = new OpenAPI\Client\Api\RedemptionsApi(
            new GuzzleHttp\Client(),
            $config
        );
    }

```

Test example:
```php
    //example
    public function testListRedemptions()
    {
        $this->redemptionsApiInstance->listRedemptions(1, 1);
    }
```


## Environment variables:
`.env` file should be in the root of the project and should contain `X_APP_ID`, `X_APP_TOKEN` and `VOUCHERIFY_HOST` variables. Check `.env.example` for reference.

## Run tests:

From the root of the project run:
```bash
php vendor/bin/codecept run Unit
```
