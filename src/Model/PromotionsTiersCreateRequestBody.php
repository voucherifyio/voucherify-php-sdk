<?php
/**
 * PromotionsTiersCreateRequestBody
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
 * PromotionsTiersCreateRequestBody Class Doc Comment
 *
 * @category Class
 * @description Request body schema for **POST** &#x60;v1/v1/promotions/{campaignId}/tiers&#x60;.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PromotionsTiersCreateRequestBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PromotionsTiersCreateRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'banner' => 'string',
        'action' => '\OpenAPI\Client\Model\PromotionsTiersCreateRequestBodyAction',
        'metadata' => 'object',
        'hierarchy' => 'int',
        'active' => 'bool',
        'start_date' => '\DateTime',
        'expiration_date' => '\DateTime',
        'validity_timeframe' => '\OpenAPI\Client\Model\ValidityTimeframe',
        'validity_day_of_week' => 'int[]',
        'validity_hours' => '\OpenAPI\Client\Model\ValidityHours',
        'validation_rule_assignments' => '\OpenAPI\Client\Model\ValidationRuleAssignmentsList',
        'category' => 'string',
        'category_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'banner' => null,
        'action' => null,
        'metadata' => null,
        'hierarchy' => null,
        'active' => null,
        'start_date' => 'date-time',
        'expiration_date' => 'date-time',
        'validity_timeframe' => null,
        'validity_day_of_week' => null,
        'validity_hours' => null,
        'validation_rule_assignments' => null,
        'category' => null,
        'category_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => true,
		'banner' => true,
		'action' => true,
		'metadata' => true,
		'hierarchy' => true,
		'active' => true,
		'start_date' => true,
		'expiration_date' => true,
		'validity_timeframe' => false,
		'validity_day_of_week' => true,
		'validity_hours' => false,
		'validation_rule_assignments' => false,
		'category' => true,
		'category_id' => true
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
        'name' => 'name',
        'banner' => 'banner',
        'action' => 'action',
        'metadata' => 'metadata',
        'hierarchy' => 'hierarchy',
        'active' => 'active',
        'start_date' => 'start_date',
        'expiration_date' => 'expiration_date',
        'validity_timeframe' => 'validity_timeframe',
        'validity_day_of_week' => 'validity_day_of_week',
        'validity_hours' => 'validity_hours',
        'validation_rule_assignments' => 'validation_rule_assignments',
        'category' => 'category',
        'category_id' => 'category_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'banner' => 'setBanner',
        'action' => 'setAction',
        'metadata' => 'setMetadata',
        'hierarchy' => 'setHierarchy',
        'active' => 'setActive',
        'start_date' => 'setStartDate',
        'expiration_date' => 'setExpirationDate',
        'validity_timeframe' => 'setValidityTimeframe',
        'validity_day_of_week' => 'setValidityDayOfWeek',
        'validity_hours' => 'setValidityHours',
        'validation_rule_assignments' => 'setValidationRuleAssignments',
        'category' => 'setCategory',
        'category_id' => 'setCategoryId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'banner' => 'getBanner',
        'action' => 'getAction',
        'metadata' => 'getMetadata',
        'hierarchy' => 'getHierarchy',
        'active' => 'getActive',
        'start_date' => 'getStartDate',
        'expiration_date' => 'getExpirationDate',
        'validity_timeframe' => 'getValidityTimeframe',
        'validity_day_of_week' => 'getValidityDayOfWeek',
        'validity_hours' => 'getValidityHours',
        'validation_rule_assignments' => 'getValidationRuleAssignments',
        'category' => 'getCategory',
        'category_id' => 'getCategoryId'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('banner', $data ?? [], null);
        $this->setIfExists('action', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('hierarchy', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('expiration_date', $data ?? [], null);
        $this->setIfExists('validity_timeframe', $data ?? [], null);
        $this->setIfExists('validity_day_of_week', $data ?? [], null);
        $this->setIfExists('validity_hours', $data ?? [], null);
        $this->setIfExists('validation_rule_assignments', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('category_id', $data ?? [], null);
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
     * @param string|null $name Name of the promotion tier.
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
     * Gets banner
     *
     * @return string|null
     */
    public function getBanner()
    {
        return $this->container['banner'];
    }

    /**
     * Sets banner
     *
     * @param string|null $banner Text to be displayed to your customers on your website.
     *
     * @return self
     */
    public function setBanner($banner)
    {
        if (is_null($banner)) {
            array_push($this->openAPINullablesSetToNull, 'banner');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('banner', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['banner'] = $banner;

        return $this;
    }

    /**
     * Gets action
     *
     * @return \OpenAPI\Client\Model\PromotionsTiersCreateRequestBodyAction|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param \OpenAPI\Client\Model\PromotionsTiersCreateRequestBodyAction|null $action action
     *
     * @return self
     */
    public function setAction($action)
    {
        if (is_null($action)) {
            array_push($this->openAPINullablesSetToNull, 'action');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('action', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['action'] = $action;

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
     * @param object|null $metadata The metadata object stores all custom attributes assigned to the promotion tier. A set of key/value pairs that you can attach to a promotion tier object. It can be useful for storing additional information about the promotion tier in a structured format.
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
     * Gets hierarchy
     *
     * @return int|null
     */
    public function getHierarchy()
    {
        return $this->container['hierarchy'];
    }

    /**
     * Sets hierarchy
     *
     * @param int|null $hierarchy The promotions hierarchy defines the order in which the discounts from different tiers will be applied to a customer's order. If a customer qualifies for discounts from more than one tier, discounts will be applied in the order defined in the hierarchy.
     *
     * @return self
     */
    public function setHierarchy($hierarchy)
    {
        if (is_null($hierarchy)) {
            array_push($this->openAPINullablesSetToNull, 'hierarchy');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hierarchy', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['hierarchy'] = $hierarchy;

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
     * @param bool|null $active A flag to toggle the promotion tier on or off. You can disable a promotion tier even though it's within the active period defined by the `start_date` and `expiration_date`.    - `true` indicates an *active* promotion tier - `false` indicates an *inactive* promotion tier
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
     * @param \DateTime|null $start_date Activation timestamp defines when the promotion tier starts to be active in ISO 8601 format. Promotion tier is *inactive before* this date.
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
     * @param \DateTime|null $expiration_date Activation timestamp defines when the promotion tier expires in ISO 8601 format. Promotion tier is *inactive after* this date.
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
     * Gets validation_rule_assignments
     *
     * @return \OpenAPI\Client\Model\ValidationRuleAssignmentsList|null
     */
    public function getValidationRuleAssignments()
    {
        return $this->container['validation_rule_assignments'];
    }

    /**
     * Sets validation_rule_assignments
     *
     * @param \OpenAPI\Client\Model\ValidationRuleAssignmentsList|null $validation_rule_assignments validation_rule_assignments
     *
     * @return self
     */
    public function setValidationRuleAssignments($validation_rule_assignments)
    {
        if (is_null($validation_rule_assignments)) {
            throw new \InvalidArgumentException('non-nullable validation_rule_assignments cannot be null');
        }
        $this->container['validation_rule_assignments'] = $validation_rule_assignments;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category Assign a new or update the promotion tier's category using name.
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            array_push($this->openAPINullablesSetToNull, 'category');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('category', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string|null $category_id Assign a new or update the promotion tier's category using id
     *
     * @return self
     */
    public function setCategoryId($category_id)
    {
        if (is_null($category_id)) {
            array_push($this->openAPINullablesSetToNull, 'category_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('category_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['category_id'] = $category_id;

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


