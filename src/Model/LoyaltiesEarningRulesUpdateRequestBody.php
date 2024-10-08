<?php
/**
 * LoyaltiesEarningRulesUpdateRequestBody
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
 * LoyaltiesEarningRulesUpdateRequestBody Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LoyaltiesEarningRulesUpdateRequestBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoyaltiesEarningRulesUpdateRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'validationRuleId' => 'string',
        'loyalty' => '\OpenAPI\Client\Model\LoyaltiesEarningRulesUpdateRequestBodyLoyalty',
        'source' => '\OpenAPI\Client\Model\LoyaltiesEarningRulesUpdateRequestBodySource',
        'active' => 'bool',
        'startDate' => '\DateTime',
        'expirationDate' => '\DateTime',
        'validityTimeframe' => '\OpenAPI\Client\Model\ValidityTimeframe',
        'validityDayOfWeek' => 'int[]',
        'validityHours' => '\OpenAPI\Client\Model\ValidityHours',
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
        'validationRuleId' => null,
        'loyalty' => null,
        'source' => null,
        'active' => null,
        'startDate' => 'date-time',
        'expirationDate' => 'date-time',
        'validityTimeframe' => null,
        'validityDayOfWeek' => null,
        'validityHours' => null,
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'validationRuleId' => true,
		'loyalty' => true,
		'source' => true,
		'active' => true,
		'startDate' => true,
		'expirationDate' => true,
		'validityTimeframe' => false,
		'validityDayOfWeek' => true,
		'validityHours' => false,
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
        'validationRuleId' => 'validation_rule_id',
        'loyalty' => 'loyalty',
        'source' => 'source',
        'active' => 'active',
        'startDate' => 'start_date',
        'expirationDate' => 'expiration_date',
        'validityTimeframe' => 'validity_timeframe',
        'validityDayOfWeek' => 'validity_day_of_week',
        'validityHours' => 'validity_hours',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'validationRuleId' => 'setValidationRuleId',
        'loyalty' => 'setLoyalty',
        'source' => 'setSource',
        'active' => 'setActive',
        'startDate' => 'setStartDate',
        'expirationDate' => 'setExpirationDate',
        'validityTimeframe' => 'setValidityTimeframe',
        'validityDayOfWeek' => 'setValidityDayOfWeek',
        'validityHours' => 'setValidityHours',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'validationRuleId' => 'getValidationRuleId',
        'loyalty' => 'getLoyalty',
        'source' => 'getSource',
        'active' => 'getActive',
        'startDate' => 'getStartDate',
        'expirationDate' => 'getExpirationDate',
        'validityTimeframe' => 'getValidityTimeframe',
        'validityDayOfWeek' => 'getValidityDayOfWeek',
        'validityHours' => 'getValidityHours',
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
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('startDate', $data ?? [], null);
        $this->setIfExists('expirationDate', $data ?? [], null);
        $this->setIfExists('validityTimeframe', $data ?? [], null);
        $this->setIfExists('validityDayOfWeek', $data ?? [], null);
        $this->setIfExists('validityHours', $data ?? [], null);
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
     * @return \OpenAPI\Client\Model\LoyaltiesEarningRulesUpdateRequestBodyLoyalty|null
     */
    public function getLoyalty()
    {
        return $this->container['loyalty'];
    }

    /**
     * Sets loyalty
     *
     * @param \OpenAPI\Client\Model\LoyaltiesEarningRulesUpdateRequestBodyLoyalty|null $loyalty loyalty
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
     * Gets source
     *
     * @return \OpenAPI\Client\Model\LoyaltiesEarningRulesUpdateRequestBodySource|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \OpenAPI\Client\Model\LoyaltiesEarningRulesUpdateRequestBodySource|null $source source
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


