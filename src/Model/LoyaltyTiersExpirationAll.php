<?php
/**
 * LoyaltyTiersExpirationAll
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
 * LoyaltyTiersExpirationAll Class Doc Comment
 *
 * @category Class
 * @description Defines the Loyalty Tiers Expiration.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LoyaltyTiersExpirationAll implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoyaltyTiersExpirationAll';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'qualificationType' => 'string',
        'qualificationPeriod' => 'string',
        'startDate' => '\OpenAPI\Client\Model\LoyaltyTiersExpirationAllStartDate',
        'expirationDate' => '\OpenAPI\Client\Model\LoyaltyTiersExpirationAllExpirationDate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'qualificationType' => null,
        'qualificationPeriod' => null,
        'startDate' => null,
        'expirationDate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'qualificationType' => true,
		'qualificationPeriod' => true,
		'startDate' => true,
		'expirationDate' => true
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
        'qualificationType' => 'qualification_type',
        'qualificationPeriod' => 'qualification_period',
        'startDate' => 'start_date',
        'expirationDate' => 'expiration_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'qualificationType' => 'setQualificationType',
        'qualificationPeriod' => 'setQualificationPeriod',
        'startDate' => 'setStartDate',
        'expirationDate' => 'setExpirationDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'qualificationType' => 'getQualificationType',
        'qualificationPeriod' => 'getQualificationPeriod',
        'startDate' => 'getStartDate',
        'expirationDate' => 'getExpirationDate'
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

    public const QUALIFICATION_TYPE_BALANCE = 'BALANCE';
    public const QUALIFICATION_TYPE_POINTS_IN_PERIOD = 'POINTS_IN_PERIOD';
    public const QUALIFICATION_PERIOD_MONTH = 'MONTH';
    public const QUALIFICATION_PERIOD_QUARTER = 'QUARTER';
    public const QUALIFICATION_PERIOD_HALF_YEAR = 'HALF_YEAR';
    public const QUALIFICATION_PERIOD_YEAR = 'YEAR';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getQualificationTypeAllowableValues()
    {
        return [
            self::QUALIFICATION_TYPE_BALANCE,
            self::QUALIFICATION_TYPE_POINTS_IN_PERIOD,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getQualificationPeriodAllowableValues()
    {
        return [
            self::QUALIFICATION_PERIOD_MONTH,
            self::QUALIFICATION_PERIOD_QUARTER,
            self::QUALIFICATION_PERIOD_HALF_YEAR,
            self::QUALIFICATION_PERIOD_YEAR,
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
        $this->setIfExists('qualificationType', $data ?? [], null);
        $this->setIfExists('qualificationPeriod', $data ?? [], null);
        $this->setIfExists('startDate', $data ?? [], null);
        $this->setIfExists('expirationDate', $data ?? [], null);
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

        $allowedValues = $this->getQualificationTypeAllowableValues();
        if (!is_null($this->container['qualificationType']) && !in_array($this->container['qualificationType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'qualificationType', must be one of '%s'",
                $this->container['qualificationType'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getQualificationPeriodAllowableValues();
        if (!is_null($this->container['qualificationPeriod']) && !in_array($this->container['qualificationPeriod'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'qualificationPeriod', must be one of '%s'",
                $this->container['qualificationPeriod'],
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
     * Gets qualificationType
     *
     * @return string|null
     */
    public function getQualificationType()
    {
        return $this->container['qualificationType'];
    }

    /**
     * Sets qualificationType
     *
     * @param string|null $qualificationType Tier qualification.     `BALANCE`: Points balance is based on the customer's current points balance. Customers qualify for the tier if their points balance is in the points range of the tier.   `POINTS_IN_PERIOD`: A customer qualifies for the tier only if the sum of the accumulated points in a **defined time interval** reaches the tier threshold.
     *
     * @return self
     */
    public function setQualificationType($qualificationType)
    {
        if (is_null($qualificationType)) {
            array_push($this->openAPINullablesSetToNull, 'qualificationType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('qualificationType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getQualificationTypeAllowableValues();
        if (!is_null($qualificationType) && !in_array($qualificationType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'qualificationType', must be one of '%s'",
                    $qualificationType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['qualificationType'] = $qualificationType;

        return $this;
    }

    /**
     * Gets qualificationPeriod
     *
     * @return string|null
     */
    public function getQualificationPeriod()
    {
        return $this->container['qualificationPeriod'];
    }

    /**
     * Sets qualificationPeriod
     *
     * @param string|null $qualificationPeriod Customers can qualify for the tier if they collected enough points in a given time period. So, in addition to the customer having to reach a points range, they also need to have collected the points within a set time period.      | **Period** | **Definition** | |:---|:---| | **Calendar Month** | Points collected in one calendar month<br>January, February, March, etc. | | **Calendar Quarter** | Points collected in the quarter<br>- January - March<br>- April - June<br>- July - September<br>- October - December | | **Calendar Half-year** | Points collected in the half-year<br>- January - June<br>- July - December | | **Calendar Year** | Points collected in one calendar year<br>January - December |
     *
     * @return self
     */
    public function setQualificationPeriod($qualificationPeriod)
    {
        if (is_null($qualificationPeriod)) {
            array_push($this->openAPINullablesSetToNull, 'qualificationPeriod');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('qualificationPeriod', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getQualificationPeriodAllowableValues();
        if (!is_null($qualificationPeriod) && !in_array($qualificationPeriod, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'qualificationPeriod', must be one of '%s'",
                    $qualificationPeriod,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['qualificationPeriod'] = $qualificationPeriod;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \OpenAPI\Client\Model\LoyaltyTiersExpirationAllStartDate|null
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \OpenAPI\Client\Model\LoyaltyTiersExpirationAllStartDate|null $startDate startDate
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
     * @return \OpenAPI\Client\Model\LoyaltyTiersExpirationAllExpirationDate|null
     */
    public function getExpirationDate()
    {
        return $this->container['expirationDate'];
    }

    /**
     * Sets expirationDate
     *
     * @param \OpenAPI\Client\Model\LoyaltyTiersExpirationAllExpirationDate|null $expirationDate expirationDate
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


