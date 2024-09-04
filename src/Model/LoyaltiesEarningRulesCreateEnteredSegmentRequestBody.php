<?php
/**
 * LoyaltiesEarningRulesCreateEnteredSegmentRequestBody
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
 * LoyaltiesEarningRulesCreateEnteredSegmentRequestBody Class Doc Comment
 *
 * @category Class
 * @description This is an object representing an earning rule for entering a customer segment.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LoyaltiesEarningRulesCreateEnteredSegmentRequestBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoyaltiesEarningRulesCreateEnteredSegmentRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'validation_rule_id' => 'string',
        'loyalty' => '\OpenAPI\Client\Model\LoyaltiesEarningRulesCreateEnteredSegmentRequestBodyLoyalty',
        'segment' => '\OpenAPI\Client\Model\LoyaltiesEarningRulesCreateEnteredSegmentRequestBodySegment',
        'event' => 'string',
        'source' => '\OpenAPI\Client\Model\LoyaltiesEarningRulesCreateEnteredSegmentRequestBodySource',
        'active' => 'bool',
        'start_date' => '\DateTime',
        'expiration_date' => '\DateTime',
        'validity_timeframe' => '\OpenAPI\Client\Model\ValidityTimeframe',
        'validity_day_of_week' => 'int[]',
        'validity_hours' => '\OpenAPI\Client\Model\ValidityHours',
        'metadata' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'validation_rule_id' => null,
        'loyalty' => null,
        'segment' => null,
        'event' => null,
        'source' => null,
        'active' => null,
        'start_date' => 'date-time',
        'expiration_date' => 'date-time',
        'validity_timeframe' => null,
        'validity_day_of_week' => null,
        'validity_hours' => null,
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'validation_rule_id' => true,
		'loyalty' => true,
		'segment' => true,
		'event' => true,
		'source' => true,
		'active' => true,
		'start_date' => true,
		'expiration_date' => true,
		'validity_timeframe' => false,
		'validity_day_of_week' => true,
		'validity_hours' => false,
		'metadata' => true
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
        'validation_rule_id' => 'validation_rule_id',
        'loyalty' => 'loyalty',
        'segment' => 'segment',
        'event' => 'event',
        'source' => 'source',
        'active' => 'active',
        'start_date' => 'start_date',
        'expiration_date' => 'expiration_date',
        'validity_timeframe' => 'validity_timeframe',
        'validity_day_of_week' => 'validity_day_of_week',
        'validity_hours' => 'validity_hours',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'validation_rule_id' => 'setValidationRuleId',
        'loyalty' => 'setLoyalty',
        'segment' => 'setSegment',
        'event' => 'setEvent',
        'source' => 'setSource',
        'active' => 'setActive',
        'start_date' => 'setStartDate',
        'expiration_date' => 'setExpirationDate',
        'validity_timeframe' => 'setValidityTimeframe',
        'validity_day_of_week' => 'setValidityDayOfWeek',
        'validity_hours' => 'setValidityHours',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'validation_rule_id' => 'getValidationRuleId',
        'loyalty' => 'getLoyalty',
        'segment' => 'getSegment',
        'event' => 'getEvent',
        'source' => 'getSource',
        'active' => 'getActive',
        'start_date' => 'getStartDate',
        'expiration_date' => 'getExpirationDate',
        'validity_timeframe' => 'getValidityTimeframe',
        'validity_day_of_week' => 'getValidityDayOfWeek',
        'validity_hours' => 'getValidityHours',
        'metadata' => 'getMetadata'
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

    public const EVENT_CUSTOMER_SEGMENT_ENTERED = 'customer.segment.entered';
    public const VALIDITY_DAY_OF_WEEK_0 = 0;
    public const VALIDITY_DAY_OF_WEEK_1 = 1;
    public const VALIDITY_DAY_OF_WEEK_2 = 2;
    public const VALIDITY_DAY_OF_WEEK_3 = 3;
    public const VALIDITY_DAY_OF_WEEK_4 = 4;
    public const VALIDITY_DAY_OF_WEEK_5 = 5;
    public const VALIDITY_DAY_OF_WEEK_6 = 6;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventAllowableValues()
    {
        return [
            self::EVENT_CUSTOMER_SEGMENT_ENTERED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getValidityDayOfWeekAllowableValues()
    {
        return [
            self::VALIDITY_DAY_OF_WEEK_0,
            self::VALIDITY_DAY_OF_WEEK_1,
            self::VALIDITY_DAY_OF_WEEK_2,
            self::VALIDITY_DAY_OF_WEEK_3,
            self::VALIDITY_DAY_OF_WEEK_4,
            self::VALIDITY_DAY_OF_WEEK_5,
            self::VALIDITY_DAY_OF_WEEK_6,
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
        $this->setIfExists('validation_rule_id', $data ?? [], null);
        $this->setIfExists('loyalty', $data ?? [], null);
        $this->setIfExists('segment', $data ?? [], null);
        $this->setIfExists('event', $data ?? [], 'customer.segment.entered');
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('expiration_date', $data ?? [], null);
        $this->setIfExists('validity_timeframe', $data ?? [], null);
        $this->setIfExists('validity_day_of_week', $data ?? [], null);
        $this->setIfExists('validity_hours', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
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

        $allowedValues = $this->getEventAllowableValues();
        if (!is_null($this->container['event']) && !in_array($this->container['event'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'event', must be one of '%s'",
                $this->container['event'],
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
     * Gets validation_rule_id
     *
     * @return string|null
     */
    public function getValidationRuleId()
    {
        return $this->container['validation_rule_id'];
    }

    /**
     * Sets validation_rule_id
     *
     * @param string|null $validation_rule_id A unique validation rule identifier assigned by the Voucherify API. The validation rule is verified before points are added to the balance.
     *
     * @return self
     */
    public function setValidationRuleId($validation_rule_id)
    {
        if (is_null($validation_rule_id)) {
            array_push($this->openAPINullablesSetToNull, 'validation_rule_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('validation_rule_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['validation_rule_id'] = $validation_rule_id;

        return $this;
    }

    /**
     * Gets loyalty
     *
     * @return \OpenAPI\Client\Model\LoyaltiesEarningRulesCreateEnteredSegmentRequestBodyLoyalty|null
     */
    public function getLoyalty()
    {
        return $this->container['loyalty'];
    }

    /**
     * Sets loyalty
     *
     * @param \OpenAPI\Client\Model\LoyaltiesEarningRulesCreateEnteredSegmentRequestBodyLoyalty|null $loyalty loyalty
     *
     * @return self
     */
    public function setLoyalty($loyalty)
    {
        if (is_null($loyalty)) {
            array_push($this->openAPINullablesSetToNull, 'loyalty');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('loyalty', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['loyalty'] = $loyalty;

        return $this;
    }

    /**
     * Gets segment
     *
     * @return \OpenAPI\Client\Model\LoyaltiesEarningRulesCreateEnteredSegmentRequestBodySegment|null
     */
    public function getSegment()
    {
        return $this->container['segment'];
    }

    /**
     * Sets segment
     *
     * @param \OpenAPI\Client\Model\LoyaltiesEarningRulesCreateEnteredSegmentRequestBodySegment|null $segment segment
     *
     * @return self
     */
    public function setSegment($segment)
    {
        if (is_null($segment)) {
            array_push($this->openAPINullablesSetToNull, 'segment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('segment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['segment'] = $segment;

        return $this;
    }

    /**
     * Gets event
     *
     * @return string|null
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param string|null $event Defines the event which triggers the earning rule to add points to a loyalty card.    - `customer.segment.entered` an event defined by the Voucherify API corresponding to a customer entering a pre-defined customer segment.
     *
     * @return self
     */
    public function setEvent($event)
    {
        if (is_null($event)) {
            array_push($this->openAPINullablesSetToNull, 'event');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('event', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getEventAllowableValues();
        if (!is_null($event) && !in_array($event, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'event', must be one of '%s'",
                    $event,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \OpenAPI\Client\Model\LoyaltiesEarningRulesCreateEnteredSegmentRequestBodySource|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \OpenAPI\Client\Model\LoyaltiesEarningRulesCreateEnteredSegmentRequestBodySource|null $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            array_push($this->openAPINullablesSetToNull, 'source');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('source', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['source'] = $source;

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
     * @param bool|null $active A flag to toggle the earning rule on or off. You can disable an earning rule even though it's within the active period defined by the `start_date` and `expiration_date` of the campaign or the earning rule's own `start_date` and `expiration_date`.    - `true` indicates an *active* earning rule - `false` indicates an *inactive* earning rule
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
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date Start date defines when the earning rule starts to be active. Activation timestamp is presented in the ISO 8601 format. Earning rule is *inactive before* this date. If you don't define the start date for an earning rule, it'll inherit the campaign start date by default.
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        if (is_null($start_date)) {
            array_push($this->openAPINullablesSetToNull, 'start_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('start_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \DateTime|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime|null $expiration_date Expiration date defines when the earning rule expires. Expiration timestamp is presented in the ISO 8601 format.  Earning rule is *inactive after* this date.If you don't define the expiration date for an earning rule, it'll inherit the campaign expiration date by default.
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {
        if (is_null($expiration_date)) {
            array_push($this->openAPINullablesSetToNull, 'expiration_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expiration_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets validity_timeframe
     *
     * @return \OpenAPI\Client\Model\ValidityTimeframe|null
     */
    public function getValidityTimeframe()
    {
        return $this->container['validity_timeframe'];
    }

    /**
     * Sets validity_timeframe
     *
     * @param \OpenAPI\Client\Model\ValidityTimeframe|null $validity_timeframe validity_timeframe
     *
     * @return self
     */
    public function setValidityTimeframe($validity_timeframe)
    {
        if (is_null($validity_timeframe)) {
            throw new \InvalidArgumentException('non-nullable validity_timeframe cannot be null');
        }
        $this->container['validity_timeframe'] = $validity_timeframe;

        return $this;
    }

    /**
     * Gets validity_day_of_week
     *
     * @return int[]|null
     */
    public function getValidityDayOfWeek()
    {
        return $this->container['validity_day_of_week'];
    }

    /**
     * Sets validity_day_of_week
     *
     * @param int[]|null $validity_day_of_week Integer array corresponding to the particular days of the week in which the voucher is valid.  - `0` Sunday - `1` Monday - `2` Tuesday - `3` Wednesday - `4` Thursday - `5` Friday - `6` Saturday
     *
     * @return self
     */
    public function setValidityDayOfWeek($validity_day_of_week)
    {
        if (is_null($validity_day_of_week)) {
            array_push($this->openAPINullablesSetToNull, 'validity_day_of_week');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('validity_day_of_week', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getValidityDayOfWeekAllowableValues();
        if (!is_null($validity_day_of_week) && array_diff($validity_day_of_week, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'validity_day_of_week', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['validity_day_of_week'] = $validity_day_of_week;

        return $this;
    }

    /**
     * Gets validity_hours
     *
     * @return \OpenAPI\Client\Model\ValidityHours|null
     */
    public function getValidityHours()
    {
        return $this->container['validity_hours'];
    }

    /**
     * Sets validity_hours
     *
     * @param \OpenAPI\Client\Model\ValidityHours|null $validity_hours validity_hours
     *
     * @return self
     */
    public function setValidityHours($validity_hours)
    {
        if (is_null($validity_hours)) {
            throw new \InvalidArgumentException('non-nullable validity_hours cannot be null');
        }
        $this->container['validity_hours'] = $validity_hours;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata The metadata object stores all custom attributes assigned to the earning rule. A set of key/value pairs that you can attach to an earning rule object. It can be useful for storing additional information about the earning rule in a structured format.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            array_push($this->openAPINullablesSetToNull, 'metadata');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('metadata', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['metadata'] = $metadata;

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


