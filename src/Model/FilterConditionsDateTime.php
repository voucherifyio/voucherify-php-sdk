<?php
/**
 * FilterConditionsDateTime
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
 * FilterConditionsDateTime Class Doc Comment
 *
 * @category Class
 * @description Data filters used to narrow down the data records to be returned in the result.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FilterConditionsDateTime implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FilterConditionsDateTime';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'after' => '\DateTime',
        'before' => '\DateTime',
        'hasValue' => 'string',
        'isUnknown' => 'string',
        'moreThan' => 'int',
        'lessThan' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'after' => 'date-time',
        'before' => 'date-time',
        'hasValue' => null,
        'isUnknown' => null,
        'moreThan' => null,
        'lessThan' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'after' => true,
		'before' => true,
		'hasValue' => true,
		'isUnknown' => true,
		'moreThan' => true,
		'lessThan' => true
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
        'after' => '$after',
        'before' => '$before',
        'hasValue' => '$has_value',
        'isUnknown' => '$is_unknown',
        'moreThan' => 'more_than',
        'lessThan' => 'less_than'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'after' => 'setAfter',
        'before' => 'setBefore',
        'hasValue' => 'setHasValue',
        'isUnknown' => 'setIsUnknown',
        'moreThan' => 'setMoreThan',
        'lessThan' => 'setLessThan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'after' => 'getAfter',
        'before' => 'getBefore',
        'hasValue' => 'getHasValue',
        'isUnknown' => 'getIsUnknown',
        'moreThan' => 'getMoreThan',
        'lessThan' => 'getLessThan'
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
        $this->setIfExists('after', $data ?? [], null);
        $this->setIfExists('before', $data ?? [], null);
        $this->setIfExists('hasValue', $data ?? [], null);
        $this->setIfExists('isUnknown', $data ?? [], null);
        $this->setIfExists('moreThan', $data ?? [], null);
        $this->setIfExists('lessThan', $data ?? [], null);
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
     * Gets after
     *
     * @return \DateTime|null
     */
    public function getAfter()
    {
        return $this->container['after'];
    }

    /**
     * Sets after
     *
     * @param \DateTime|null $after Value is after this date. The value for this parameter is shown in the ISO 8601 format.
     *
     * @return self
     */
    public function setAfter($after)
    {
        if (is_null($after)) {
            array_push($this->openAPINullablesSetToNull, 'after');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('after', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['after'] = $after;

        return $this;
    }

    /**
     * Gets before
     *
     * @return \DateTime|null
     */
    public function getBefore()
    {
        return $this->container['before'];
    }

    /**
     * Sets before
     *
     * @param \DateTime|null $before Value is before this date. The value for this parameter is shown in the ISO 8601 format.
     *
     * @return self
     */
    public function setBefore($before)
    {
        if (is_null($before)) {
            array_push($this->openAPINullablesSetToNull, 'before');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('before', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['before'] = $before;

        return $this;
    }

    /**
     * Gets hasValue
     *
     * @return string|null
     */
    public function getHasValue()
    {
        return $this->container['hasValue'];
    }

    /**
     * Sets hasValue
     *
     * @param string|null $hasValue Value is NOT null. The value for this parameter is an empty string.
     *
     * @return self
     */
    public function setHasValue($hasValue)
    {
        if (is_null($hasValue)) {
            array_push($this->openAPINullablesSetToNull, 'hasValue');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hasValue', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['hasValue'] = $hasValue;

        return $this;
    }

    /**
     * Gets isUnknown
     *
     * @return string|null
     */
    public function getIsUnknown()
    {
        return $this->container['isUnknown'];
    }

    /**
     * Sets isUnknown
     *
     * @param string|null $isUnknown Value is null. The value for this parameter is an empty string.
     *
     * @return self
     */
    public function setIsUnknown($isUnknown)
    {
        if (is_null($isUnknown)) {
            array_push($this->openAPINullablesSetToNull, 'isUnknown');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('isUnknown', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['isUnknown'] = $isUnknown;

        return $this;
    }

    /**
     * Gets moreThan
     *
     * @return int|null
     */
    public function getMoreThan()
    {
        return $this->container['moreThan'];
    }

    /**
     * Sets moreThan
     *
     * @param int|null $moreThan Value is more days ago before the current date and time, e.g. more than `10` days ago.
     *
     * @return self
     */
    public function setMoreThan($moreThan)
    {
        if (is_null($moreThan)) {
            array_push($this->openAPINullablesSetToNull, 'moreThan');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('moreThan', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['moreThan'] = $moreThan;

        return $this;
    }

    /**
     * Gets lessThan
     *
     * @return int|null
     */
    public function getLessThan()
    {
        return $this->container['lessThan'];
    }

    /**
     * Sets lessThan
     *
     * @param int|null $lessThan Value is less days before the current date and time, e.g. less than `10` days ago.
     *
     * @return self
     */
    public function setLessThan($lessThan)
    {
        if (is_null($lessThan)) {
            array_push($this->openAPINullablesSetToNull, 'lessThan');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lessThan', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lessThan'] = $lessThan;

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


