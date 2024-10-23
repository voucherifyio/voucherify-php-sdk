<?php
/**
 * ManagementProjectsCreateRequestBody
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Voucherify API
 *
 * Voucherify promotion engine REST API. Please see https://docs.voucherify.io/docs for more details.
 *
 * The version of the OpenAPI document: v2018-08-01
 * Contact: support@voucherify.io
 * @generated Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ManagementProjectsCreateRequestBody Class Doc Comment
 *
 * @category Class
 * @description Request body schema for **POST** &#x60;/management/v1/projects&#x60;.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ManagementProjectsCreateRequestBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ManagementProjectsCreateRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'caseSensitiveCodes' => 'bool',
        'name' => 'string',
        'description' => 'string',
        'timezone' => 'string',
        'currency' => 'string',
        'dialCode' => 'string',
        'webhookVersion' => 'string',
        'clientTrustedDomains' => 'string[]',
        'clientRedeemEnabled' => 'bool',
        'clientPublishEnabled' => 'bool',
        'clientListVouchersEnabled' => 'bool',
        'clientCreateCustomerEnabled' => 'bool',
        'clientLoyaltyEventsEnabled' => 'bool',
        'clientSetVoucherExpirationDateEnabled' => 'bool',
        'webhooksCalloutNotifications' => '\OpenAPI\Client\Model\ManagementProjectsCreateRequestBodyWebhooksCalloutNotifications',
        'apiUsageNotifications' => '\OpenAPI\Client\Model\ManagementProjectsCreateRequestBodyApiUsageNotifications',
        'clusterId' => 'string',
        'apiVersion' => 'string',
        'users' => '\OpenAPI\Client\Model\ManagementProjectsCreateRequestBodyUsersItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'caseSensitiveCodes' => null,
        'name' => null,
        'description' => null,
        'timezone' => null,
        'currency' => null,
        'dialCode' => null,
        'webhookVersion' => null,
        'clientTrustedDomains' => null,
        'clientRedeemEnabled' => null,
        'clientPublishEnabled' => null,
        'clientListVouchersEnabled' => null,
        'clientCreateCustomerEnabled' => null,
        'clientLoyaltyEventsEnabled' => null,
        'clientSetVoucherExpirationDateEnabled' => null,
        'webhooksCalloutNotifications' => null,
        'apiUsageNotifications' => null,
        'clusterId' => null,
        'apiVersion' => null,
        'users' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'caseSensitiveCodes' => true,
		'name' => true,
		'description' => true,
		'timezone' => true,
		'currency' => true,
		'dialCode' => true,
		'webhookVersion' => true,
		'clientTrustedDomains' => true,
		'clientRedeemEnabled' => true,
		'clientPublishEnabled' => true,
		'clientListVouchersEnabled' => true,
		'clientCreateCustomerEnabled' => true,
		'clientLoyaltyEventsEnabled' => true,
		'clientSetVoucherExpirationDateEnabled' => true,
		'webhooksCalloutNotifications' => true,
		'apiUsageNotifications' => true,
		'clusterId' => true,
		'apiVersion' => true,
		'users' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'caseSensitiveCodes' => 'case_sensitive_codes',
        'name' => 'name',
        'description' => 'description',
        'timezone' => 'timezone',
        'currency' => 'currency',
        'dialCode' => 'dial_code',
        'webhookVersion' => 'webhook_version',
        'clientTrustedDomains' => 'client_trusted_domains',
        'clientRedeemEnabled' => 'client_redeem_enabled',
        'clientPublishEnabled' => 'client_publish_enabled',
        'clientListVouchersEnabled' => 'client_list_vouchers_enabled',
        'clientCreateCustomerEnabled' => 'client_create_customer_enabled',
        'clientLoyaltyEventsEnabled' => 'client_loyalty_events_enabled',
        'clientSetVoucherExpirationDateEnabled' => 'client_set_voucher_expiration_date_enabled',
        'webhooksCalloutNotifications' => 'webhooks_callout_notifications',
        'apiUsageNotifications' => 'api_usage_notifications',
        'clusterId' => 'cluster_id',
        'apiVersion' => 'api_version',
        'users' => 'users'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'caseSensitiveCodes' => 'setCaseSensitiveCodes',
        'name' => 'setName',
        'description' => 'setDescription',
        'timezone' => 'setTimezone',
        'currency' => 'setCurrency',
        'dialCode' => 'setDialCode',
        'webhookVersion' => 'setWebhookVersion',
        'clientTrustedDomains' => 'setClientTrustedDomains',
        'clientRedeemEnabled' => 'setClientRedeemEnabled',
        'clientPublishEnabled' => 'setClientPublishEnabled',
        'clientListVouchersEnabled' => 'setClientListVouchersEnabled',
        'clientCreateCustomerEnabled' => 'setClientCreateCustomerEnabled',
        'clientLoyaltyEventsEnabled' => 'setClientLoyaltyEventsEnabled',
        'clientSetVoucherExpirationDateEnabled' => 'setClientSetVoucherExpirationDateEnabled',
        'webhooksCalloutNotifications' => 'setWebhooksCalloutNotifications',
        'apiUsageNotifications' => 'setApiUsageNotifications',
        'clusterId' => 'setClusterId',
        'apiVersion' => 'setApiVersion',
        'users' => 'setUsers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'caseSensitiveCodes' => 'getCaseSensitiveCodes',
        'name' => 'getName',
        'description' => 'getDescription',
        'timezone' => 'getTimezone',
        'currency' => 'getCurrency',
        'dialCode' => 'getDialCode',
        'webhookVersion' => 'getWebhookVersion',
        'clientTrustedDomains' => 'getClientTrustedDomains',
        'clientRedeemEnabled' => 'getClientRedeemEnabled',
        'clientPublishEnabled' => 'getClientPublishEnabled',
        'clientListVouchersEnabled' => 'getClientListVouchersEnabled',
        'clientCreateCustomerEnabled' => 'getClientCreateCustomerEnabled',
        'clientLoyaltyEventsEnabled' => 'getClientLoyaltyEventsEnabled',
        'clientSetVoucherExpirationDateEnabled' => 'getClientSetVoucherExpirationDateEnabled',
        'webhooksCalloutNotifications' => 'getWebhooksCalloutNotifications',
        'apiUsageNotifications' => 'getApiUsageNotifications',
        'clusterId' => 'getClusterId',
        'apiVersion' => 'getApiVersion',
        'users' => 'getUsers'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const WEBHOOK_VERSION_V2024_01_01 = 'v2024-01-01';
    public const API_VERSION_V2018_08_01 = 'v2018-08-01';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWebhookVersionAllowableValues()
    {
        return [
            self::WEBHOOK_VERSION_V2024_01_01,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getApiVersionAllowableValues()
    {
        return [
            self::API_VERSION_V2018_08_01,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('caseSensitiveCodes', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('timezone', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('dialCode', $data ?? [], null);
        $this->setIfExists('webhookVersion', $data ?? [], 'v2024-01-01');
        $this->setIfExists('clientTrustedDomains', $data ?? [], null);
        $this->setIfExists('clientRedeemEnabled', $data ?? [], null);
        $this->setIfExists('clientPublishEnabled', $data ?? [], null);
        $this->setIfExists('clientListVouchersEnabled', $data ?? [], null);
        $this->setIfExists('clientCreateCustomerEnabled', $data ?? [], null);
        $this->setIfExists('clientLoyaltyEventsEnabled', $data ?? [], null);
        $this->setIfExists('clientSetVoucherExpirationDateEnabled', $data ?? [], null);
        $this->setIfExists('webhooksCalloutNotifications', $data ?? [], null);
        $this->setIfExists('apiUsageNotifications', $data ?? [], null);
        $this->setIfExists('clusterId', $data ?? [], null);
        $this->setIfExists('apiVersion', $data ?? [], 'v2018-08-01');
        $this->setIfExists('users', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getWebhookVersionAllowableValues();
        if (!is_null($this->container['webhookVersion']) && !in_array($this->container['webhookVersion'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'webhookVersion', must be one of '%s'",
                $this->container['webhookVersion'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getApiVersionAllowableValues();
        if (!is_null($this->container['apiVersion']) && !in_array($this->container['apiVersion'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'apiVersion', must be one of '%s'",
                $this->container['apiVersion'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets caseSensitiveCodes
     *
     * @return bool|null
     */
    public function getCaseSensitiveCodes()
    {
        return $this->container['caseSensitiveCodes'];
    }

    /**
     * Sets caseSensitiveCodes
     *
     * @param bool|null $caseSensitiveCodes Determines if the vouchers in the project will be case sensitive (if `true`, `C0dE-cfV` is not equal to `c0de-cfv`) or case insensitive (if false, `C0dE-cfV` is equal to `c0de-cfv`).
     *
     * @return self
     */
    public function setCaseSensitiveCodes($caseSensitiveCodes)
    {
        if (is_null($caseSensitiveCodes)) {
            array_push($this->openAPINullablesSetToNull, 'caseSensitiveCodes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('caseSensitiveCodes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['caseSensitiveCodes'] = $caseSensitiveCodes;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the project.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description A user-defined description of the project, e.g. its purpose, scope, region.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string|null $timezone The time zone in which the project is established. It can be in the GMT format or in accordance with IANA time zone database.
     *
     * @return self
     */
    public function setTimezone($timezone)
    {
        if (is_null($timezone)) {
            array_push($this->openAPINullablesSetToNull, 'timezone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('timezone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency The currency used in the project. It is equal to a 3-letter ISO 4217 code.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            array_push($this->openAPINullablesSetToNull, 'currency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets dialCode
     *
     * @return string|null
     */
    public function getDialCode()
    {
        return $this->container['dialCode'];
    }

    /**
     * Sets dialCode
     *
     * @param string|null $dialCode The country dial code for the project. It is equal to an ITU country code.
     *
     * @return self
     */
    public function setDialCode($dialCode)
    {
        if (is_null($dialCode)) {
            array_push($this->openAPINullablesSetToNull, 'dialCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dialCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dialCode'] = $dialCode;

        return $this;
    }

    /**
     * Gets webhookVersion
     *
     * @return string|null
     */
    public function getWebhookVersion()
    {
        return $this->container['webhookVersion'];
    }

    /**
     * Sets webhookVersion
     *
     * @param string|null $webhookVersion The webhook version used in the project.
     *
     * @return self
     */
    public function setWebhookVersion($webhookVersion)
    {
        if (is_null($webhookVersion)) {
            array_push($this->openAPINullablesSetToNull, 'webhookVersion');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('webhookVersion', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getWebhookVersionAllowableValues();
        if (!is_null($webhookVersion) && !in_array($webhookVersion, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'webhookVersion', must be one of '%s'",
                    $webhookVersion,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['webhookVersion'] = $webhookVersion;

        return $this;
    }

    /**
     * Gets clientTrustedDomains
     *
     * @return string[]|null
     */
    public function getClientTrustedDomains()
    {
        return $this->container['clientTrustedDomains'];
    }

    /**
     * Sets clientTrustedDomains
     *
     * @param string[]|null $clientTrustedDomains An array of URL addresses that allow client requests.
     *
     * @return self
     */
    public function setClientTrustedDomains($clientTrustedDomains)
    {
        if (is_null($clientTrustedDomains)) {
            array_push($this->openAPINullablesSetToNull, 'clientTrustedDomains');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('clientTrustedDomains', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['clientTrustedDomains'] = $clientTrustedDomains;

        return $this;
    }

    /**
     * Gets clientRedeemEnabled
     *
     * @return bool|null
     */
    public function getClientRedeemEnabled()
    {
        return $this->container['clientRedeemEnabled'];
    }

    /**
     * Sets clientRedeemEnabled
     *
     * @param bool|null $clientRedeemEnabled Enables client-side redemption.
     *
     * @return self
     */
    public function setClientRedeemEnabled($clientRedeemEnabled)
    {
        if (is_null($clientRedeemEnabled)) {
            array_push($this->openAPINullablesSetToNull, 'clientRedeemEnabled');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('clientRedeemEnabled', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['clientRedeemEnabled'] = $clientRedeemEnabled;

        return $this;
    }

    /**
     * Gets clientPublishEnabled
     *
     * @return bool|null
     */
    public function getClientPublishEnabled()
    {
        return $this->container['clientPublishEnabled'];
    }

    /**
     * Sets clientPublishEnabled
     *
     * @param bool|null $clientPublishEnabled Enables client-side publication.
     *
     * @return self
     */
    public function setClientPublishEnabled($clientPublishEnabled)
    {
        if (is_null($clientPublishEnabled)) {
            array_push($this->openAPINullablesSetToNull, 'clientPublishEnabled');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('clientPublishEnabled', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['clientPublishEnabled'] = $clientPublishEnabled;

        return $this;
    }

    /**
     * Gets clientListVouchersEnabled
     *
     * @return bool|null
     */
    public function getClientListVouchersEnabled()
    {
        return $this->container['clientListVouchersEnabled'];
    }

    /**
     * Sets clientListVouchersEnabled
     *
     * @param bool|null $clientListVouchersEnabled Enables client-side listing of vouchers.
     *
     * @return self
     */
    public function setClientListVouchersEnabled($clientListVouchersEnabled)
    {
        if (is_null($clientListVouchersEnabled)) {
            array_push($this->openAPINullablesSetToNull, 'clientListVouchersEnabled');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('clientListVouchersEnabled', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['clientListVouchersEnabled'] = $clientListVouchersEnabled;

        return $this;
    }

    /**
     * Gets clientCreateCustomerEnabled
     *
     * @return bool|null
     */
    public function getClientCreateCustomerEnabled()
    {
        return $this->container['clientCreateCustomerEnabled'];
    }

    /**
     * Sets clientCreateCustomerEnabled
     *
     * @param bool|null $clientCreateCustomerEnabled Enables client-side creation of customers.
     *
     * @return self
     */
    public function setClientCreateCustomerEnabled($clientCreateCustomerEnabled)
    {
        if (is_null($clientCreateCustomerEnabled)) {
            array_push($this->openAPINullablesSetToNull, 'clientCreateCustomerEnabled');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('clientCreateCustomerEnabled', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['clientCreateCustomerEnabled'] = $clientCreateCustomerEnabled;

        return $this;
    }

    /**
     * Gets clientLoyaltyEventsEnabled
     *
     * @return bool|null
     */
    public function getClientLoyaltyEventsEnabled()
    {
        return $this->container['clientLoyaltyEventsEnabled'];
    }

    /**
     * Sets clientLoyaltyEventsEnabled
     *
     * @param bool|null $clientLoyaltyEventsEnabled Enables client-side events for loyalty and referral programs.
     *
     * @return self
     */
    public function setClientLoyaltyEventsEnabled($clientLoyaltyEventsEnabled)
    {
        if (is_null($clientLoyaltyEventsEnabled)) {
            array_push($this->openAPINullablesSetToNull, 'clientLoyaltyEventsEnabled');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('clientLoyaltyEventsEnabled', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['clientLoyaltyEventsEnabled'] = $clientLoyaltyEventsEnabled;

        return $this;
    }

    /**
     * Gets clientSetVoucherExpirationDateEnabled
     *
     * @return bool|null
     */
    public function getClientSetVoucherExpirationDateEnabled()
    {
        return $this->container['clientSetVoucherExpirationDateEnabled'];
    }

    /**
     * Sets clientSetVoucherExpirationDateEnabled
     *
     * @param bool|null $clientSetVoucherExpirationDateEnabled Enables client-side setting of voucher expiration date.
     *
     * @return self
     */
    public function setClientSetVoucherExpirationDateEnabled($clientSetVoucherExpirationDateEnabled)
    {
        if (is_null($clientSetVoucherExpirationDateEnabled)) {
            array_push($this->openAPINullablesSetToNull, 'clientSetVoucherExpirationDateEnabled');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('clientSetVoucherExpirationDateEnabled', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['clientSetVoucherExpirationDateEnabled'] = $clientSetVoucherExpirationDateEnabled;

        return $this;
    }

    /**
     * Gets webhooksCalloutNotifications
     *
     * @return \OpenAPI\Client\Model\ManagementProjectsCreateRequestBodyWebhooksCalloutNotifications|null
     */
    public function getWebhooksCalloutNotifications()
    {
        return $this->container['webhooksCalloutNotifications'];
    }

    /**
     * Sets webhooksCalloutNotifications
     *
     * @param \OpenAPI\Client\Model\ManagementProjectsCreateRequestBodyWebhooksCalloutNotifications|null $webhooksCalloutNotifications webhooksCalloutNotifications
     *
     * @return self
     */
    public function setWebhooksCalloutNotifications($webhooksCalloutNotifications)
    {
        if (is_null($webhooksCalloutNotifications)) {
            array_push($this->openAPINullablesSetToNull, 'webhooksCalloutNotifications');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('webhooksCalloutNotifications', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['webhooksCalloutNotifications'] = $webhooksCalloutNotifications;

        return $this;
    }

    /**
     * Gets apiUsageNotifications
     *
     * @return \OpenAPI\Client\Model\ManagementProjectsCreateRequestBodyApiUsageNotifications|null
     */
    public function getApiUsageNotifications()
    {
        return $this->container['apiUsageNotifications'];
    }

    /**
     * Sets apiUsageNotifications
     *
     * @param \OpenAPI\Client\Model\ManagementProjectsCreateRequestBodyApiUsageNotifications|null $apiUsageNotifications apiUsageNotifications
     *
     * @return self
     */
    public function setApiUsageNotifications($apiUsageNotifications)
    {
        if (is_null($apiUsageNotifications)) {
            array_push($this->openAPINullablesSetToNull, 'apiUsageNotifications');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('apiUsageNotifications', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['apiUsageNotifications'] = $apiUsageNotifications;

        return $this;
    }

    /**
     * Gets clusterId
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
     * Sets clusterId
     *
     * @param string|null $clusterId The identifier of the cluster where the project will be created. The default cluster is `eu1` unless otherwise configured.
     *
     * @return self
     */
    public function setClusterId($clusterId)
    {
        if (is_null($clusterId)) {
            array_push($this->openAPINullablesSetToNull, 'clusterId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('clusterId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['clusterId'] = $clusterId;

        return $this;
    }

    /**
     * Gets apiVersion
     *
     * @return string|null
     */
    public function getApiVersion()
    {
        return $this->container['apiVersion'];
    }

    /**
     * Sets apiVersion
     *
     * @param string|null $apiVersion The API version used in the project. Currently, the default and only value is `v2018-08-01`.
     *
     * @return self
     */
    public function setApiVersion($apiVersion)
    {
        if (is_null($apiVersion)) {
            array_push($this->openAPINullablesSetToNull, 'apiVersion');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('apiVersion', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getApiVersionAllowableValues();
        if (!is_null($apiVersion) && !in_array($apiVersion, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'apiVersion', must be one of '%s'",
                    $apiVersion,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['apiVersion'] = $apiVersion;

        return $this;
    }

    /**
     * Gets users
     *
     * @return \OpenAPI\Client\Model\ManagementProjectsCreateRequestBodyUsersItem[]|null
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param \OpenAPI\Client\Model\ManagementProjectsCreateRequestBodyUsersItem[]|null $users The users (their identifiers, logins, and roles) who will be assigned to the project. You can assign only existing Voucherify users.  It must be used either in the following combinations: - `id` and `role`, or - `login` and `role`.
     *
     * @return self
     */
    public function setUsers($users)
    {
        if (is_null($users)) {
            array_push($this->openAPINullablesSetToNull, 'users');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('users', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['users'] = $users;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


