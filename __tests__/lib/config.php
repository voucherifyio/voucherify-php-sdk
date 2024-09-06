<?php

require_once(dirname(dirname(__DIR__)) . '/vendor/autoload.php');

use GuzzleHttp\Client;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Api\ProductsApi;
use OpenAPI\Client\Api\CampaignsApi;
use OpenAPI\Client\Api\ValidationRulesApi;
use OpenAPI\Client\Api\CustomersApi;
use OpenAPI\Client\Api\ExportsApi;
use OpenAPI\Client\Api\RedemptionsApi;
use OpenAPI\Client\Api\PublicationsApi;
use OpenAPI\Client\Api\QualificationsApi;
use OpenAPI\Client\Api\VouchersApi;
use OpenAPI\Client\Api\EventsApi;
use OpenAPI\Client\Api\OrdersApi;
use OpenAPI\Client\Api\LoyaltiesApi;
use OpenAPI\Client\Api\ValidationsApi;

class Config
{
    private static $config;

    private static function getConfig()
    {
        if (is_null(self::$config)) {
            $env = parse_ini_file('.env');

            self::$config = Configuration::getDefaultConfiguration()
                ->setApiKey('X-App-Id', $env['X_APP_ID'])
                ->setApiKey('X-App-Token', $env['X_APP_TOKEN'])
                ->setHost($env['VOUCHERIFY_HOST'] ?? 'https://api.voucherify.io');
        }

        return self::$config;
    }

    private static function getClient()
    {
        return new Client();
    }

    public static function productsApiInstance(): ProductsApi
    {
        return new ProductsApi(self::getClient(), self::getConfig());
    }

    public static function campaignsApiInstance(): CampaignsApi
    {
        return new CampaignsApi(self::getClient(), self::getConfig());
    }

    public static function validationRulesApiInstance(): ValidationRulesApi
    {
        return new ValidationRulesApi(self::getClient(), self::getConfig());
    }

    public static function customersApiInstance(): CustomersApi
    {
        return new CustomersApi(self::getClient(), self::getConfig());
    }

    public static function exportsApiInstance(): ExportsApi
    {
        return new ExportsApi(self::getClient(), self::getConfig());
    }

    public static function redemptionsApiInstance(): RedemptionsApi
    {
        return new RedemptionsApi(self::getClient(), self::getConfig());
    }

    public static function publicationsApiInstance(): PublicationsApi
    {
        return new PublicationsApi(self::getClient(), self::getConfig());
    }

    public static function qualificationsApiInstance(): QualificationsApi
    {
        return new QualificationsApi(self::getClient(), self::getConfig());
    }

    public static function vouchersApiInstance(): VouchersApi
    {
        return new VouchersApi(self::getClient(), self::getConfig());
    }

    public static function eventsApiInstance(): EventsApi
    {
        return new EventsApi(self::getClient(), self::getConfig());
    }

    public static function ordersApiInstance(): OrdersApi
    {
        return new OrdersApi(self::getClient(), self::getConfig());
    }

    public static function loyaltiesApiInstance(): LoyaltiesApi
    {
        return new LoyaltiesApi(self::getClient(), self::getConfig());
    }

    public static function validationsApiInstance(): ValidationsApi
    {
        return new ValidationsApi(self::getClient(), self::getConfig());
    }
}

?>
