<?php
/**
 * LoyaltiesEarningRulesCreateRequestBodyItem
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
 * LoyaltiesEarningRulesCreateRequestBodyItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LoyaltiesEarningRulesCreateRequestBodyItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoyaltiesEarningRulesCreateRequestBodyItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'validationRuleId' => 'string',
        'loyalty' => '\OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItemLoyalty',
        'event' => 'string',
        'source' => '\OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItemSource',
        'active' => 'bool',
        'startDate' => '\DateTime',
        'expirationDate' => '\DateTime',
        'validityTimeframe' => '\OpenAPI\Client\Model\ValidityTimeframe',
        'validityDayOfWeek' => 'int[]',
        'validityHours' => '\OpenAPI\Client\Model\ValidityHours',
        'metadata' => 'object',
        'segment' => '\OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItemSegment',
        'customEvent' => '\OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItemCustomEvent',
        'loyaltyTier' => '\OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyTier'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'validationRuleId' => null,
        'loyalty' => null,
        'event' => null,
        'source' => null,
        'active' => null,
        'startDate' => 'date-time',
        'expirationDate' => 'date-time',
        'validityTimeframe' => null,
        'validityDayOfWeek' => null,
        'validityHours' => null,
        'metadata' => null,
        'segment' => null,
        'customEvent' => null,
        'loyaltyTier' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'validationRuleId' => true,
		'loyalty' => false,
		'event' => false,
		'source' => false,
		'active' => true,
		'startDate' => true,
		'expirationDate' => true,
		'validityTimeframe' => false,
		'validityDayOfWeek' => true,
		'validityHours' => false,
		'metadata' => false,
		'segment' => true,
		'customEvent' => true,
		'loyaltyTier' => true
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
        'validationRuleId' => 'validation_rule_id',
        'loyalty' => 'loyalty',
        'event' => 'event',
        'source' => 'source',
        'active' => 'active',
        'startDate' => 'start_date',
        'expirationDate' => 'expiration_date',
        'validityTimeframe' => 'validity_timeframe',
        'validityDayOfWeek' => 'validity_day_of_week',
        'validityHours' => 'validity_hours',
        'metadata' => 'metadata',
        'segment' => 'segment',
        'customEvent' => 'custom_event',
        'loyaltyTier' => 'loyalty_tier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'validationRuleId' => 'setValidationRuleId',
        'loyalty' => 'setLoyalty',
        'event' => 'setEvent',
        'source' => 'setSource',
        'active' => 'setActive',
        'startDate' => 'setStartDate',
        'expirationDate' => 'setExpirationDate',
        'validityTimeframe' => 'setValidityTimeframe',
        'validityDayOfWeek' => 'setValidityDayOfWeek',
        'validityHours' => 'setValidityHours',
        'metadata' => 'setMetadata',
        'segment' => 'setSegment',
        'customEvent' => 'setCustomEvent',
        'loyaltyTier' => 'setLoyaltyTier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'validationRuleId' => 'getValidationRuleId',
        'loyalty' => 'getLoyalty',
        'event' => 'getEvent',
        'source' => 'getSource',
        'active' => 'getActive',
        'startDate' => 'getStartDate',
        'expirationDate' => 'getExpirationDate',
        'validityTimeframe' => 'getValidityTimeframe',
        'validityDayOfWeek' => 'getValidityDayOfWeek',
        'validityHours' => 'getValidityHours',
        'metadata' => 'getMetadata',
        'segment' => 'getSegment',
        'customEvent' => 'getCustomEvent',
        'loyaltyTier' => 'getLoyaltyTier'
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
        $this->setIfExists('validationRuleId', $data ?? [], null);
        $this->setIfExists('loyalty', $data ?? [], null);
        $this->setIfExists('event', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('startDate', $data ?? [], null);
        $this->setIfExists('expirationDate', $data ?? [], null);
        $this->setIfExists('validityTimeframe', $data ?? [], null);
        $this->setIfExists('validityDayOfWeek', $data ?? [], null);
        $this->setIfExists('validityHours', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('segment', $data ?? [], null);
        $this->setIfExists('customEvent', $data ?? [], null);
        $this->setIfExists('loyaltyTier', $data ?? [], null);
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
     * Gets validationRuleId
     *
     * @return string|null
     */
    public function getValidationRuleId()
    {
        return $this->container['validationRuleId'];
    }

    /**
     * Sets validationRuleId
     *
     * @param string|null $validationRuleId A unique validation rule identifier assigned by the Voucherify API. The validation rule is verified before points are added to the balance.
     *
     * @return self
     */
    public function setValidationRuleId($validationRuleId)
    {
        if (is_null($validationRuleId)) {
            array_push($this->openAPINullablesSetToNull, 'validationRuleId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('validationRuleId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['validationRuleId'] = $validationRuleId;

        return $this;
    }

    /**
     * Gets loyalty
     *
     * @return \OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItemLoyalty|null
     */
    public function getLoyalty()
    {
        return $this->container['loyalty'];
    }

    /**
     * Sets loyalty
     *
     * @param \OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItemLoyalty|null $loyalty loyalty
     *
     * @return self
     */
    public function setLoyalty($loyalty)
    {
        if (is_null($loyalty)) {
            throw new \InvalidArgumentException('non-nullable loyalty cannot be null');
        }
        $this->container['loyalty'] = $loyalty;

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
     * @param string|null $event event
     *
     * @return self
     */
    public function setEvent($event)
    {
        if (is_null($event)) {
            throw new \InvalidArgumentException('non-nullable event cannot be null');
        }
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItemSource|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItemSource|null $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
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
     * Gets startDate
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime|null $startDate Start date defines when the earning rule starts to be active. Activation timestamp is presented in the ISO 8601 format. Earning rule is *inactive before* this date. If you don't define the start date for an earning rule, it'll inherit the campaign start date by default.
     *
     * @return self
     */
    public function setStartDate($startDate)
    {
        if (is_null($startDate)) {
            array_push($this->openAPINullablesSetToNull, 'startDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('startDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets expirationDate
     *
     * @return \DateTime|null
     */
    public function getExpirationDate()
    {
        return $this->container['expirationDate'];
    }

    /**
     * Sets expirationDate
     *
     * @param \DateTime|null $expirationDate Expiration date defines when the earning rule expires. Expiration timestamp is presented in the ISO 8601 format.  Earning rule is *inactive after* this date.If you don't define the expiration date for an earning rule, it'll inherit the campaign expiration date by default.
     *
     * @return self
     */
    public function setExpirationDate($expirationDate)
    {
        if (is_null($expirationDate)) {
            array_push($this->openAPINullablesSetToNull, 'expirationDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expirationDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['expirationDate'] = $expirationDate;

        return $this;
    }

    /**
     * Gets validityTimeframe
     *
     * @return \OpenAPI\Client\Model\ValidityTimeframe|null
     */
    public function getValidityTimeframe()
    {
        return $this->container['validityTimeframe'];
    }

    /**
     * Sets validityTimeframe
     *
     * @param \OpenAPI\Client\Model\ValidityTimeframe|null $validityTimeframe validityTimeframe
     *
     * @return self
     */
    public function setValidityTimeframe($validityTimeframe)
    {
        if (is_null($validityTimeframe)) {
            throw new \InvalidArgumentException('non-nullable validityTimeframe cannot be null');
        }
        $this->container['validityTimeframe'] = $validityTimeframe;

        return $this;
    }

    /**
     * Gets validityDayOfWeek
     *
     * @return int[]|null
     */
    public function getValidityDayOfWeek()
    {
        return $this->container['validityDayOfWeek'];
    }

    /**
     * Sets validityDayOfWeek
     *
     * @param int[]|null $validityDayOfWeek Integer array corresponding to the particular days of the week in which the voucher is valid.  - `0` Sunday - `1` Monday - `2` Tuesday - `3` Wednesday - `4` Thursday - `5` Friday - `6` Saturday
     *
     * @return self
     */
    public function setValidityDayOfWeek($validityDayOfWeek)
    {
        if (is_null($validityDayOfWeek)) {
            array_push($this->openAPINullablesSetToNull, 'validityDayOfWeek');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('validityDayOfWeek', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getValidityDayOfWeekAllowableValues();
        if (!is_null($validityDayOfWeek) && array_diff($validityDayOfWeek, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'validityDayOfWeek', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['validityDayOfWeek'] = $validityDayOfWeek;

        return $this;
    }

    /**
     * Gets validityHours
     *
     * @return \OpenAPI\Client\Model\ValidityHours|null
     */
    public function getValidityHours()
    {
        return $this->container['validityHours'];
    }

    /**
     * Sets validityHours
     *
     * @param \OpenAPI\Client\Model\ValidityHours|null $validityHours validityHours
     *
     * @return self
     */
    public function setValidityHours($validityHours)
    {
        if (is_null($validityHours)) {
            throw new \InvalidArgumentException('non-nullable validityHours cannot be null');
        }
        $this->container['validityHours'] = $validityHours;

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
     * @param object|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets segment
     *
     * @return \OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItemSegment|null
     */
    public function getSegment()
    {
        return $this->container['segment'];
    }

    /**
     * Sets segment
     *
     * @param \OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItemSegment|null $segment segment
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
     * Gets customEvent
     *
     * @return \OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItemCustomEvent|null
     */
    public function getCustomEvent()
    {
        return $this->container['customEvent'];
    }

    /**
     * Sets customEvent
     *
     * @param \OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItemCustomEvent|null $customEvent customEvent
     *
     * @return self
     */
    public function setCustomEvent($customEvent)
    {
        if (is_null($customEvent)) {
            array_push($this->openAPINullablesSetToNull, 'customEvent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customEvent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customEvent'] = $customEvent;

        return $this;
    }

    /**
     * Gets loyaltyTier
     *
     * @return \OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyTier|null
     */
    public function getLoyaltyTier()
    {
        return $this->container['loyaltyTier'];
    }

    /**
     * Sets loyaltyTier
     *
     * @param \OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyTier|null $loyaltyTier loyaltyTier
     *
     * @return self
     */
    public function setLoyaltyTier($loyaltyTier)
    {
        if (is_null($loyaltyTier)) {
            array_push($this->openAPINullablesSetToNull, 'loyaltyTier');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('loyaltyTier', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['loyaltyTier'] = $loyaltyTier;

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


