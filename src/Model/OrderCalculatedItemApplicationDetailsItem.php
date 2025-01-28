<?php
/**
 * OrderCalculatedItemApplicationDetailsItem
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
 * OrderCalculatedItemApplicationDetailsItem Class Doc Comment
 *
 * @category Class
 * @description Object representing item replacement.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderCalculatedItemApplicationDetailsItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderCalculatedItemApplicationDetailsItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sourceIndex' => 'int',
        'sourceAppliedQuantity' => 'int',
        'sourceAppliedQuantityAmount' => 'int',
        'targetIndex' => 'int',
        'targetAppliedQuantity' => 'int',
        'targetAppliedQuantityAmount' => 'int',
        'targetAppliedDiscountAmount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sourceIndex' => null,
        'sourceAppliedQuantity' => null,
        'sourceAppliedQuantityAmount' => null,
        'targetIndex' => null,
        'targetAppliedQuantity' => null,
        'targetAppliedQuantityAmount' => null,
        'targetAppliedDiscountAmount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sourceIndex' => false,
		'sourceAppliedQuantity' => false,
		'sourceAppliedQuantityAmount' => false,
		'targetIndex' => false,
		'targetAppliedQuantity' => false,
		'targetAppliedQuantityAmount' => false,
		'targetAppliedDiscountAmount' => false
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
        'sourceIndex' => 'source_index',
        'sourceAppliedQuantity' => 'source_applied_quantity',
        'sourceAppliedQuantityAmount' => 'source_applied_quantity_amount',
        'targetIndex' => 'target_index',
        'targetAppliedQuantity' => 'target_applied_quantity',
        'targetAppliedQuantityAmount' => 'target_applied_quantity_amount',
        'targetAppliedDiscountAmount' => 'target_applied_discount_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sourceIndex' => 'setSourceIndex',
        'sourceAppliedQuantity' => 'setSourceAppliedQuantity',
        'sourceAppliedQuantityAmount' => 'setSourceAppliedQuantityAmount',
        'targetIndex' => 'setTargetIndex',
        'targetAppliedQuantity' => 'setTargetAppliedQuantity',
        'targetAppliedQuantityAmount' => 'setTargetAppliedQuantityAmount',
        'targetAppliedDiscountAmount' => 'setTargetAppliedDiscountAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sourceIndex' => 'getSourceIndex',
        'sourceAppliedQuantity' => 'getSourceAppliedQuantity',
        'sourceAppliedQuantityAmount' => 'getSourceAppliedQuantityAmount',
        'targetIndex' => 'getTargetIndex',
        'targetAppliedQuantity' => 'getTargetAppliedQuantity',
        'targetAppliedQuantityAmount' => 'getTargetAppliedQuantityAmount',
        'targetAppliedDiscountAmount' => 'getTargetAppliedDiscountAmount'
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
        $this->setIfExists('sourceIndex', $data ?? [], null);
        $this->setIfExists('sourceAppliedQuantity', $data ?? [], null);
        $this->setIfExists('sourceAppliedQuantityAmount', $data ?? [], null);
        $this->setIfExists('targetIndex', $data ?? [], null);
        $this->setIfExists('targetAppliedQuantity', $data ?? [], null);
        $this->setIfExists('targetAppliedQuantityAmount', $data ?? [], null);
        $this->setIfExists('targetAppliedDiscountAmount', $data ?? [], null);
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

        if (!is_null($this->container['sourceIndex']) && ($this->container['sourceIndex'] < 0)) {
            $invalidProperties[] = "invalid value for 'sourceIndex', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['sourceAppliedQuantity']) && ($this->container['sourceAppliedQuantity'] > -1)) {
            $invalidProperties[] = "invalid value for 'sourceAppliedQuantity', must be smaller than or equal to -1.";
        }

        if (!is_null($this->container['sourceAppliedQuantityAmount']) && ($this->container['sourceAppliedQuantityAmount'] > 0)) {
            $invalidProperties[] = "invalid value for 'sourceAppliedQuantityAmount', must be smaller than or equal to 0.";
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
     * Gets sourceIndex
     *
     * @return int|null
     */
    public function getSourceIndex()
    {
        return $this->container['sourceIndex'];
    }

    /**
     * Sets sourceIndex
     *
     * @param int|null $sourceIndex Index number of the source item that is replaced. The enumeration starts from `0`, which represents the first item in the request, e.g., if the replaced item is passed as the second in the request, `source_index` equals `3`.
     *
     * @return self
     */
    public function setSourceIndex($sourceIndex)
    {
        if (is_null($sourceIndex)) {
            throw new \InvalidArgumentException('non-nullable sourceIndex cannot be null');
        }

        if (($sourceIndex < 0)) {
            throw new \InvalidArgumentException('invalid value for $sourceIndex when calling OrderCalculatedItemApplicationDetailsItem., must be bigger than or equal to 0.');
        }

        $this->container['sourceIndex'] = $sourceIndex;

        return $this;
    }

    /**
     * Gets sourceAppliedQuantity
     *
     * @return int|null
     */
    public function getSourceAppliedQuantity()
    {
        return $this->container['sourceAppliedQuantity'];
    }

    /**
     * Sets sourceAppliedQuantity
     *
     * @param int|null $sourceAppliedQuantity Number of source units that are replaced.
     *
     * @return self
     */
    public function setSourceAppliedQuantity($sourceAppliedQuantity)
    {
        if (is_null($sourceAppliedQuantity)) {
            throw new \InvalidArgumentException('non-nullable sourceAppliedQuantity cannot be null');
        }

        if (($sourceAppliedQuantity > -1)) {
            throw new \InvalidArgumentException('invalid value for $sourceAppliedQuantity when calling OrderCalculatedItemApplicationDetailsItem., must be smaller than or equal to -1.');
        }

        $this->container['sourceAppliedQuantity'] = $sourceAppliedQuantity;

        return $this;
    }

    /**
     * Gets sourceAppliedQuantityAmount
     *
     * @return int|null
     */
    public function getSourceAppliedQuantityAmount()
    {
        return $this->container['sourceAppliedQuantityAmount'];
    }

    /**
     * Sets sourceAppliedQuantityAmount
     *
     * @param int|null $sourceAppliedQuantityAmount Amount equal to the price of the units that are replaced. Determines the change of the amount of the source item quantity.
     *
     * @return self
     */
    public function setSourceAppliedQuantityAmount($sourceAppliedQuantityAmount)
    {
        if (is_null($sourceAppliedQuantityAmount)) {
            throw new \InvalidArgumentException('non-nullable sourceAppliedQuantityAmount cannot be null');
        }

        if (($sourceAppliedQuantityAmount > 0)) {
            throw new \InvalidArgumentException('invalid value for $sourceAppliedQuantityAmount when calling OrderCalculatedItemApplicationDetailsItem., must be smaller than or equal to 0.');
        }

        $this->container['sourceAppliedQuantityAmount'] = $sourceAppliedQuantityAmount;

        return $this;
    }

    /**
     * Gets targetIndex
     *
     * @return int|null
     */
    public function getTargetIndex()
    {
        return $this->container['targetIndex'];
    }

    /**
     * Sets targetIndex
     *
     * @param int|null $targetIndex Index number of the target item that is a replacement of the source item. The enumeration continues the values for the order items, e.g. if there are three items in the request, `target_index` equals `3`, as enumeration starts from `0`.
     *
     * @return self
     */
    public function setTargetIndex($targetIndex)
    {
        if (is_null($targetIndex)) {
            throw new \InvalidArgumentException('non-nullable targetIndex cannot be null');
        }
        $this->container['targetIndex'] = $targetIndex;

        return $this;
    }

    /**
     * Gets targetAppliedQuantity
     *
     * @return int|null
     */
    public function getTargetAppliedQuantity()
    {
        return $this->container['targetAppliedQuantity'];
    }

    /**
     * Sets targetAppliedQuantity
     *
     * @param int|null $targetAppliedQuantity Number of added target units that are replacements.
     *
     * @return self
     */
    public function setTargetAppliedQuantity($targetAppliedQuantity)
    {
        if (is_null($targetAppliedQuantity)) {
            throw new \InvalidArgumentException('non-nullable targetAppliedQuantity cannot be null');
        }
        $this->container['targetAppliedQuantity'] = $targetAppliedQuantity;

        return $this;
    }

    /**
     * Gets targetAppliedQuantityAmount
     *
     * @return int|null
     */
    public function getTargetAppliedQuantityAmount()
    {
        return $this->container['targetAppliedQuantityAmount'];
    }

    /**
     * Sets targetAppliedQuantityAmount
     *
     * @param int|null $targetAppliedQuantityAmount Amount equal to the price of the units that are replacements. Determines the change in the amount of the target item quantity.
     *
     * @return self
     */
    public function setTargetAppliedQuantityAmount($targetAppliedQuantityAmount)
    {
        if (is_null($targetAppliedQuantityAmount)) {
            throw new \InvalidArgumentException('non-nullable targetAppliedQuantityAmount cannot be null');
        }
        $this->container['targetAppliedQuantityAmount'] = $targetAppliedQuantityAmount;

        return $this;
    }

    /**
     * Gets targetAppliedDiscountAmount
     *
     * @return int|null
     */
    public function getTargetAppliedDiscountAmount()
    {
        return $this->container['targetAppliedDiscountAmount'];
    }

    /**
     * Sets targetAppliedDiscountAmount
     *
     * @param int|null $targetAppliedDiscountAmount Discount amount applied to the target item with regard to the replacement. Equals the `target_applied_quantity_amount` minus `source_applied_quantity_amount`.
     *
     * @return self
     */
    public function setTargetAppliedDiscountAmount($targetAppliedDiscountAmount)
    {
        if (is_null($targetAppliedDiscountAmount)) {
            throw new \InvalidArgumentException('non-nullable targetAppliedDiscountAmount cannot be null');
        }
        $this->container['targetAppliedDiscountAmount'] = $targetAppliedDiscountAmount;

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


