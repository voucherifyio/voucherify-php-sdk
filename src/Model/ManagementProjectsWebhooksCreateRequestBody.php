<?php
/**
 * ManagementProjectsWebhooksCreateRequestBody
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
 * ManagementProjectsWebhooksCreateRequestBody Class Doc Comment
 *
 * @category Class
 * @description Request body schema for **POST** &#x60;/management/v1/projects/{projectId}/webhooks/{webhookId}&#x60;.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ManagementProjectsWebhooksCreateRequestBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ManagementProjectsWebhooksCreateRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'targetUrl' => 'string',
        'events' => 'string[]',
        'active' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'targetUrl' => null,
        'events' => null,
        'active' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'targetUrl' => true,
		'events' => true,
		'active' => true
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
        'targetUrl' => 'target_url',
        'events' => 'events',
        'active' => 'active'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'targetUrl' => 'setTargetUrl',
        'events' => 'setEvents',
        'active' => 'setActive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'targetUrl' => 'getTargetUrl',
        'events' => 'getEvents',
        'active' => 'getActive'
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

    public const EVENTS_REDEMPTION_SUCCEEDED = 'redemption.succeeded';
    public const EVENTS_REDEMPTION_FAILED = 'redemption.failed';
    public const EVENTS_REDEMPTION_ROLLBACK_SUCCEEDED = 'redemption.rollback.succeeded';
    public const EVENTS_REDEMPTION_ROLLBACK_FAILED = 'redemption.rollback.failed';
    public const EVENTS_PUBLICATION_SUCCEEDED = 'publication.succeeded';
    public const EVENTS_VOUCHER_PUBLISHED = 'voucher.published';
    public const EVENTS_VOUCHER_UPDATED = 'voucher.updated';
    public const EVENTS_VOUCHER_DELETED = 'voucher.deleted';
    public const EVENTS_VOUCHER_CREATED = 'voucher.created';
    public const EVENTS_VOUCHER_ENABLED = 'voucher.enabled';
    public const EVENTS_VOUCHER_DISABLED = 'voucher.disabled';
    public const EVENTS_VOUCHER_LOYALTY_CARD_POINTS_ADDED = 'voucher.loyalty_card.points_added';
    public const EVENTS_VOUCHER_GIFT_BALANCE_ADDED = 'voucher.gift.balance_added';
    public const EVENTS_CAMPAIGN_ENABLED = 'campaign.enabled';
    public const EVENTS_CAMPAIGN_DELETED = 'campaign.deleted';
    public const EVENTS_CAMPAIGN_CREATED = 'campaign.created';
    public const EVENTS_CAMPAIGN_UPDATED = 'campaign.updated';
    public const EVENTS_CAMPAIGN_DISABLED = 'campaign.disabled';
    public const EVENTS_CAMPAIGN_VOUCHERS_GENERATION_COMPLETED = 'campaign.vouchers.generation.completed';
    public const EVENTS_BUSINESS_VALIDATION_RULE_ASSIGNMENT_CREATED = 'business_validation_rule.assignment.created';
    public const EVENTS_BUSINESS_VALIDATION_RULE_ASSIGNMENT_DELETED = 'business_validation_rule.assignment.deleted';
    public const EVENTS_BUSINESS_VALIDATION_RULE_CREATED = 'business_validation_rule.created';
    public const EVENTS_BUSINESS_VALIDATION_RULE_DELETED = 'business_validation_rule.deleted';
    public const EVENTS_BUSINESS_VALIDATION_RULE_UPDATED = 'business_validation_rule.updated';
    public const EVENTS_CUSTOMER_CREATED = 'customer.created';
    public const EVENTS_CUSTOMER_DELETED = 'customer.deleted';
    public const EVENTS_CUSTOMER_REWARDED = 'customer.rewarded';
    public const EVENTS_CUSTOMER_REWARDED_LOYALTY_POINTS = 'customer.rewarded.loyalty_points';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventsAllowableValues()
    {
        return [
            self::EVENTS_REDEMPTION_SUCCEEDED,
            self::EVENTS_REDEMPTION_FAILED,
            self::EVENTS_REDEMPTION_ROLLBACK_SUCCEEDED,
            self::EVENTS_REDEMPTION_ROLLBACK_FAILED,
            self::EVENTS_PUBLICATION_SUCCEEDED,
            self::EVENTS_VOUCHER_PUBLISHED,
            self::EVENTS_VOUCHER_UPDATED,
            self::EVENTS_VOUCHER_DELETED,
            self::EVENTS_VOUCHER_CREATED,
            self::EVENTS_VOUCHER_ENABLED,
            self::EVENTS_VOUCHER_DISABLED,
            self::EVENTS_VOUCHER_LOYALTY_CARD_POINTS_ADDED,
            self::EVENTS_VOUCHER_GIFT_BALANCE_ADDED,
            self::EVENTS_CAMPAIGN_ENABLED,
            self::EVENTS_CAMPAIGN_DELETED,
            self::EVENTS_CAMPAIGN_CREATED,
            self::EVENTS_CAMPAIGN_UPDATED,
            self::EVENTS_CAMPAIGN_DISABLED,
            self::EVENTS_CAMPAIGN_VOUCHERS_GENERATION_COMPLETED,
            self::EVENTS_BUSINESS_VALIDATION_RULE_ASSIGNMENT_CREATED,
            self::EVENTS_BUSINESS_VALIDATION_RULE_ASSIGNMENT_DELETED,
            self::EVENTS_BUSINESS_VALIDATION_RULE_CREATED,
            self::EVENTS_BUSINESS_VALIDATION_RULE_DELETED,
            self::EVENTS_BUSINESS_VALIDATION_RULE_UPDATED,
            self::EVENTS_CUSTOMER_CREATED,
            self::EVENTS_CUSTOMER_DELETED,
            self::EVENTS_CUSTOMER_REWARDED,
            self::EVENTS_CUSTOMER_REWARDED_LOYALTY_POINTS,
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
        $this->setIfExists('targetUrl', $data ?? [], null);
        $this->setIfExists('events', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], true);
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
     * Gets targetUrl
     *
     * @return string|null
     */
    public function getTargetUrl()
    {
        return $this->container['targetUrl'];
    }

    /**
     * Sets targetUrl
     *
     * @param string|null $targetUrl URL address that receives webhooks.
     *
     * @return self
     */
    public function setTargetUrl($targetUrl)
    {
        if (is_null($targetUrl)) {
            array_push($this->openAPINullablesSetToNull, 'targetUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('targetUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['targetUrl'] = $targetUrl;

        return $this;
    }

    /**
     * Gets events
     *
     * @return string[]|null
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param string[]|null $events Lists the events that trigger webhook sendout.
     *
     * @return self
     */
    public function setEvents($events)
    {
        if (is_null($events)) {
            array_push($this->openAPINullablesSetToNull, 'events');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('events', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getEventsAllowableValues();
        if (!is_null($events) && array_diff($events, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'events', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Determines if the webhook configuration is active.
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            array_push($this->openAPINullablesSetToNull, 'active');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('active', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['active'] = $active;

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


