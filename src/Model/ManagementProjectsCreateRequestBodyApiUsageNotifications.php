<?php
/**
 * ManagementProjectsCreateRequestBodyApiUsageNotifications
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
 * ManagementProjectsCreateRequestBodyApiUsageNotifications Class Doc Comment
 *
 * @category Class
 * @description Determines the notification settings.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ManagementProjectsCreateRequestBodyApiUsageNotifications implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ManagementProjectsCreateRequestBodyApiUsageNotifications';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'redemptions' => '\OpenAPI\Client\Model\UsageNotifications',
        'messages' => '\OpenAPI\Client\Model\UsageNotifications',
        'apiCalls' => '\OpenAPI\Client\Model\UsageNotifications',
        'bulkApiCalls' => '\OpenAPI\Client\Model\UsageNotifications',
        'webhookCalls' => '\OpenAPI\Client\Model\UsageNotifications',
        'cycleCalls' => '\OpenAPI\Client\Model\UsageNotifications'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'redemptions' => null,
        'messages' => null,
        'apiCalls' => null,
        'bulkApiCalls' => null,
        'webhookCalls' => null,
        'cycleCalls' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'redemptions' => false,
		'messages' => false,
		'apiCalls' => false,
		'bulkApiCalls' => false,
		'webhookCalls' => false,
		'cycleCalls' => false
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
        'redemptions' => 'redemptions',
        'messages' => 'messages',
        'apiCalls' => 'api_calls',
        'bulkApiCalls' => 'bulk_api_calls',
        'webhookCalls' => 'webhook_calls',
        'cycleCalls' => 'cycle_calls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'redemptions' => 'setRedemptions',
        'messages' => 'setMessages',
        'apiCalls' => 'setApiCalls',
        'bulkApiCalls' => 'setBulkApiCalls',
        'webhookCalls' => 'setWebhookCalls',
        'cycleCalls' => 'setCycleCalls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'redemptions' => 'getRedemptions',
        'messages' => 'getMessages',
        'apiCalls' => 'getApiCalls',
        'bulkApiCalls' => 'getBulkApiCalls',
        'webhookCalls' => 'getWebhookCalls',
        'cycleCalls' => 'getCycleCalls'
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
        $this->setIfExists('redemptions', $data ?? [], null);
        $this->setIfExists('messages', $data ?? [], null);
        $this->setIfExists('apiCalls', $data ?? [], null);
        $this->setIfExists('bulkApiCalls', $data ?? [], null);
        $this->setIfExists('webhookCalls', $data ?? [], null);
        $this->setIfExists('cycleCalls', $data ?? [], null);
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
     * Gets redemptions
     *
     * @return \OpenAPI\Client\Model\UsageNotifications|null
     */
    public function getRedemptions()
    {
        return $this->container['redemptions'];
    }

    /**
     * Sets redemptions
     *
     * @param \OpenAPI\Client\Model\UsageNotifications|null $redemptions redemptions
     *
     * @return self
     */
    public function setRedemptions($redemptions)
    {
        if (is_null($redemptions)) {
            throw new \InvalidArgumentException('non-nullable redemptions cannot be null');
        }
        $this->container['redemptions'] = $redemptions;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return \OpenAPI\Client\Model\UsageNotifications|null
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param \OpenAPI\Client\Model\UsageNotifications|null $messages messages
     *
     * @return self
     */
    public function setMessages($messages)
    {
        if (is_null($messages)) {
            throw new \InvalidArgumentException('non-nullable messages cannot be null');
        }
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets apiCalls
     *
     * @return \OpenAPI\Client\Model\UsageNotifications|null
     */
    public function getApiCalls()
    {
        return $this->container['apiCalls'];
    }

    /**
     * Sets apiCalls
     *
     * @param \OpenAPI\Client\Model\UsageNotifications|null $apiCalls apiCalls
     *
     * @return self
     */
    public function setApiCalls($apiCalls)
    {
        if (is_null($apiCalls)) {
            throw new \InvalidArgumentException('non-nullable apiCalls cannot be null');
        }
        $this->container['apiCalls'] = $apiCalls;

        return $this;
    }

    /**
     * Gets bulkApiCalls
     *
     * @return \OpenAPI\Client\Model\UsageNotifications|null
     */
    public function getBulkApiCalls()
    {
        return $this->container['bulkApiCalls'];
    }

    /**
     * Sets bulkApiCalls
     *
     * @param \OpenAPI\Client\Model\UsageNotifications|null $bulkApiCalls bulkApiCalls
     *
     * @return self
     */
    public function setBulkApiCalls($bulkApiCalls)
    {
        if (is_null($bulkApiCalls)) {
            throw new \InvalidArgumentException('non-nullable bulkApiCalls cannot be null');
        }
        $this->container['bulkApiCalls'] = $bulkApiCalls;

        return $this;
    }

    /**
     * Gets webhookCalls
     *
     * @return \OpenAPI\Client\Model\UsageNotifications|null
     */
    public function getWebhookCalls()
    {
        return $this->container['webhookCalls'];
    }

    /**
     * Sets webhookCalls
     *
     * @param \OpenAPI\Client\Model\UsageNotifications|null $webhookCalls webhookCalls
     *
     * @return self
     */
    public function setWebhookCalls($webhookCalls)
    {
        if (is_null($webhookCalls)) {
            throw new \InvalidArgumentException('non-nullable webhookCalls cannot be null');
        }
        $this->container['webhookCalls'] = $webhookCalls;

        return $this;
    }

    /**
     * Gets cycleCalls
     *
     * @return \OpenAPI\Client\Model\UsageNotifications|null
     */
    public function getCycleCalls()
    {
        return $this->container['cycleCalls'];
    }

    /**
     * Sets cycleCalls
     *
     * @param \OpenAPI\Client\Model\UsageNotifications|null $cycleCalls cycleCalls
     *
     * @return self
     */
    public function setCycleCalls($cycleCalls)
    {
        if (is_null($cycleCalls)) {
            throw new \InvalidArgumentException('non-nullable cycleCalls cannot be null');
        }
        $this->container['cycleCalls'] = $cycleCalls;

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


