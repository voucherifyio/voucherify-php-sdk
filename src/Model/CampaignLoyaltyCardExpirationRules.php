<?php
/**
 * CampaignLoyaltyCardExpirationRules
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
 * CampaignLoyaltyCardExpirationRules Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CampaignLoyaltyCardExpirationRules implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignLoyaltyCardExpirationRules';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'period_type' => 'string',
        'period_value' => 'int',
        'rounding_type' => 'string',
        'rounding_value' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'period_type' => null,
        'period_value' => null,
        'rounding_type' => null,
        'rounding_value' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'period_type' => true,
		'period_value' => true,
		'rounding_type' => true,
		'rounding_value' => true
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
        'period_type' => 'period_type',
        'period_value' => 'period_value',
        'rounding_type' => 'rounding_type',
        'rounding_value' => 'rounding_value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'period_type' => 'setPeriodType',
        'period_value' => 'setPeriodValue',
        'rounding_type' => 'setRoundingType',
        'rounding_value' => 'setRoundingValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'period_type' => 'getPeriodType',
        'period_value' => 'getPeriodValue',
        'rounding_type' => 'getRoundingType',
        'rounding_value' => 'getRoundingValue'
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

    public const PERIOD_TYPE_MONTH = 'MONTH';
    public const ROUNDING_TYPE_END_OF_MONTH = 'END_OF_MONTH';
    public const ROUNDING_TYPE_END_OF_QUARTER = 'END_OF_QUARTER';
    public const ROUNDING_TYPE_END_OF_HALF_YEAR = 'END_OF_HALF_YEAR';
    public const ROUNDING_TYPE_END_OF_YEAR = 'END_OF_YEAR';
    public const ROUNDING_TYPE_PARTICULAR_MONTH = 'PARTICULAR_MONTH';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPeriodTypeAllowableValues()
    {
        return [
            self::PERIOD_TYPE_MONTH,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoundingTypeAllowableValues()
    {
        return [
            self::ROUNDING_TYPE_END_OF_MONTH,
            self::ROUNDING_TYPE_END_OF_QUARTER,
            self::ROUNDING_TYPE_END_OF_HALF_YEAR,
            self::ROUNDING_TYPE_END_OF_YEAR,
            self::ROUNDING_TYPE_PARTICULAR_MONTH,
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
        $this->setIfExists('period_type', $data ?? [], 'MONTH');
        $this->setIfExists('period_value', $data ?? [], null);
        $this->setIfExists('rounding_type', $data ?? [], null);
        $this->setIfExists('rounding_value', $data ?? [], null);
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

        $allowedValues = $this->getPeriodTypeAllowableValues();
        if (!is_null($this->container['period_type']) && !in_array($this->container['period_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'period_type', must be one of '%s'",
                $this->container['period_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRoundingTypeAllowableValues();
        if (!is_null($this->container['rounding_type']) && !in_array($this->container['rounding_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'rounding_type', must be one of '%s'",
                $this->container['rounding_type'],
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
     * Gets period_type
     *
     * @return string|null
     */
    public function getPeriodType()
    {
        return $this->container['period_type'];
    }

    /**
     * Sets period_type
     *
     * @param string|null $period_type Type of period
     *
     * @return self
     */
    public function setPeriodType($period_type)
    {
        if (is_null($period_type)) {
            array_push($this->openAPINullablesSetToNull, 'period_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('period_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getPeriodTypeAllowableValues();
        if (!is_null($period_type) && !in_array($period_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'period_type', must be one of '%s'",
                    $period_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['period_type'] = $period_type;

        return $this;
    }

    /**
     * Gets period_value
     *
     * @return int|null
     */
    public function getPeriodValue()
    {
        return $this->container['period_value'];
    }

    /**
     * Sets period_value
     *
     * @param int|null $period_value Value of the period
     *
     * @return self
     */
    public function setPeriodValue($period_value)
    {
        if (is_null($period_value)) {
            array_push($this->openAPINullablesSetToNull, 'period_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('period_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['period_value'] = $period_value;

        return $this;
    }

    /**
     * Gets rounding_type
     *
     * @return string|null
     */
    public function getRoundingType()
    {
        return $this->container['rounding_type'];
    }

    /**
     * Sets rounding_type
     *
     * @param string|null $rounding_type Type of rounding
     *
     * @return self
     */
    public function setRoundingType($rounding_type)
    {
        if (is_null($rounding_type)) {
            array_push($this->openAPINullablesSetToNull, 'rounding_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rounding_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getRoundingTypeAllowableValues();
        if (!is_null($rounding_type) && !in_array($rounding_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'rounding_type', must be one of '%s'",
                    $rounding_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rounding_type'] = $rounding_type;

        return $this;
    }

    /**
     * Gets rounding_value
     *
     * @return int|null
     */
    public function getRoundingValue()
    {
        return $this->container['rounding_value'];
    }

    /**
     * Sets rounding_value
     *
     * @param int|null $rounding_value Value of rounding
     *
     * @return self
     */
    public function setRoundingValue($rounding_value)
    {
        if (is_null($rounding_value)) {
            array_push($this->openAPINullablesSetToNull, 'rounding_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rounding_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rounding_value'] = $rounding_value;

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

