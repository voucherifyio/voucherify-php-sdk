<?php
/**
 * QualificationsRedeemableBase
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
 * QualificationsRedeemableBase Class Doc Comment
 *
 * @category Class
 * @description Data of single redeemable which was properly qualified.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class QualificationsRedeemableBase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'QualificationsRedeemableBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'object' => 'string',
        'created_at' => '\DateTime',
        'result' => '\OpenAPI\Client\Model\RedeemableResult',
        'order' => '\OpenAPI\Client\Model\OrderCalculated',
        'validation_rule_id' => 'string',
        'applicable_to' => '\OpenAPI\Client\Model\ApplicableToResultList',
        'inapplicable_to' => '\OpenAPI\Client\Model\InapplicableToResultList',
        'metadata' => 'object',
        'categories' => '\OpenAPI\Client\Model\Category[]',
        'banner' => 'string',
        'name' => 'string',
        'campaign_name' => 'string',
        'campaign_id' => 'string',
        'validation_rules_assignments' => '\OpenAPI\Client\Model\ValidationRulesAssignmentsList'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'object' => null,
        'created_at' => 'date-time',
        'result' => null,
        'order' => null,
        'validation_rule_id' => null,
        'applicable_to' => null,
        'inapplicable_to' => null,
        'metadata' => null,
        'categories' => null,
        'banner' => null,
        'name' => null,
        'campaign_name' => null,
        'campaign_id' => null,
        'validation_rules_assignments' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'object' => true,
		'created_at' => true,
		'result' => false,
		'order' => false,
		'validation_rule_id' => true,
		'applicable_to' => false,
		'inapplicable_to' => false,
		'metadata' => true,
		'categories' => true,
		'banner' => true,
		'name' => true,
		'campaign_name' => true,
		'campaign_id' => true,
		'validation_rules_assignments' => false
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
        'id' => 'id',
        'object' => 'object',
        'created_at' => 'created_at',
        'result' => 'result',
        'order' => 'order',
        'validation_rule_id' => 'validation_rule_id',
        'applicable_to' => 'applicable_to',
        'inapplicable_to' => 'inapplicable_to',
        'metadata' => 'metadata',
        'categories' => 'categories',
        'banner' => 'banner',
        'name' => 'name',
        'campaign_name' => 'campaign_name',
        'campaign_id' => 'campaign_id',
        'validation_rules_assignments' => 'validation_rules_assignments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'object' => 'setObject',
        'created_at' => 'setCreatedAt',
        'result' => 'setResult',
        'order' => 'setOrder',
        'validation_rule_id' => 'setValidationRuleId',
        'applicable_to' => 'setApplicableTo',
        'inapplicable_to' => 'setInapplicableTo',
        'metadata' => 'setMetadata',
        'categories' => 'setCategories',
        'banner' => 'setBanner',
        'name' => 'setName',
        'campaign_name' => 'setCampaignName',
        'campaign_id' => 'setCampaignId',
        'validation_rules_assignments' => 'setValidationRulesAssignments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'object' => 'getObject',
        'created_at' => 'getCreatedAt',
        'result' => 'getResult',
        'order' => 'getOrder',
        'validation_rule_id' => 'getValidationRuleId',
        'applicable_to' => 'getApplicableTo',
        'inapplicable_to' => 'getInapplicableTo',
        'metadata' => 'getMetadata',
        'categories' => 'getCategories',
        'banner' => 'getBanner',
        'name' => 'getName',
        'campaign_name' => 'getCampaignName',
        'campaign_id' => 'getCampaignId',
        'validation_rules_assignments' => 'getValidationRulesAssignments'
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

    public const OBJECT_CAMPAIGN = 'campaign';
    public const OBJECT_PROMOTION_TIER = 'promotion_tier';
    public const OBJECT_PROMOTION_STACK = 'promotion_stack';
    public const OBJECT_VOUCHER = 'voucher';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectAllowableValues()
    {
        return [
            self::OBJECT_CAMPAIGN,
            self::OBJECT_PROMOTION_TIER,
            self::OBJECT_PROMOTION_STACK,
            self::OBJECT_VOUCHER,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('result', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('validation_rule_id', $data ?? [], null);
        $this->setIfExists('applicable_to', $data ?? [], null);
        $this->setIfExists('inapplicable_to', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('categories', $data ?? [], null);
        $this->setIfExists('banner', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('campaign_name', $data ?? [], null);
        $this->setIfExists('campaign_id', $data ?? [], null);
        $this->setIfExists('validation_rules_assignments', $data ?? [], null);
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

        $allowedValues = $this->getObjectAllowableValues();
        if (!is_null($this->container['object']) && !in_array($this->container['object'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'object', must be one of '%s'",
                $this->container['object'],
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Id of the redeemable.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets object
     *
     * @return string|null
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string|null $object Object type of the redeemable.
     *
     * @return self
     */
    public function setObject($object)
    {
        if (is_null($object)) {
            array_push($this->openAPINullablesSetToNull, 'object');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('object', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getObjectAllowableValues();
        if (!is_null($object) && !in_array($object, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'object', must be one of '%s'",
                    $object,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Timestamp representing the date and time when the object was created. The value is shown in the ISO 8601 format.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            array_push($this->openAPINullablesSetToNull, 'created_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('created_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets result
     *
     * @return \OpenAPI\Client\Model\RedeemableResult|null
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param \OpenAPI\Client\Model\RedeemableResult|null $result result
     *
     * @return self
     */
    public function setResult($result)
    {
        if (is_null($result)) {
            throw new \InvalidArgumentException('non-nullable result cannot be null');
        }
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \OpenAPI\Client\Model\OrderCalculated|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \OpenAPI\Client\Model\OrderCalculated|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
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
     * Gets applicable_to
     *
     * @return \OpenAPI\Client\Model\ApplicableToResultList|null
     */
    public function getApplicableTo()
    {
        return $this->container['applicable_to'];
    }

    /**
     * Sets applicable_to
     *
     * @param \OpenAPI\Client\Model\ApplicableToResultList|null $applicable_to applicable_to
     *
     * @return self
     */
    public function setApplicableTo($applicable_to)
    {
        if (is_null($applicable_to)) {
            throw new \InvalidArgumentException('non-nullable applicable_to cannot be null');
        }
        $this->container['applicable_to'] = $applicable_to;

        return $this;
    }

    /**
     * Gets inapplicable_to
     *
     * @return \OpenAPI\Client\Model\InapplicableToResultList|null
     */
    public function getInapplicableTo()
    {
        return $this->container['inapplicable_to'];
    }

    /**
     * Sets inapplicable_to
     *
     * @param \OpenAPI\Client\Model\InapplicableToResultList|null $inapplicable_to inapplicable_to
     *
     * @return self
     */
    public function setInapplicableTo($inapplicable_to)
    {
        if (is_null($inapplicable_to)) {
            throw new \InvalidArgumentException('non-nullable inapplicable_to cannot be null');
        }
        $this->container['inapplicable_to'] = $inapplicable_to;

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
     * @param object|null $metadata The metadata object stores all custom attributes assigned to the product. A set of key/value pairs that you can attach to a product object. It can be useful for storing additional information about the product in a structured format.
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
     * Gets categories
     *
     * @return \OpenAPI\Client\Model\Category[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \OpenAPI\Client\Model\Category[]|null $categories List of category information.
     *
     * @return self
     */
    public function setCategories($categories)
    {
        if (is_null($categories)) {
            array_push($this->openAPINullablesSetToNull, 'categories');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('categories', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['categories'] = $categories;

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
     * @param string|null $banner Name of the earning rule. This is displayed as a header for the earning rule in the Dashboard.
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
     * @param string|null $name Name of the redeemable.
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
     * Gets campaign_name
     *
     * @return string|null
     */
    public function getCampaignName()
    {
        return $this->container['campaign_name'];
    }

    /**
     * Sets campaign_name
     *
     * @param string|null $campaign_name Name of the campaign associated to the redeemable. This field is available only if object is not `campaign`
     *
     * @return self
     */
    public function setCampaignName($campaign_name)
    {
        if (is_null($campaign_name)) {
            array_push($this->openAPINullablesSetToNull, 'campaign_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('campaign_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['campaign_name'] = $campaign_name;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return string|null
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param string|null $campaign_id Id of the campaign associated to the redeemable. This field is available only if object is not `campaign`
     *
     * @return self
     */
    public function setCampaignId($campaign_id)
    {
        if (is_null($campaign_id)) {
            array_push($this->openAPINullablesSetToNull, 'campaign_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('campaign_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets validation_rules_assignments
     *
     * @return \OpenAPI\Client\Model\ValidationRulesAssignmentsList|null
     */
    public function getValidationRulesAssignments()
    {
        return $this->container['validation_rules_assignments'];
    }

    /**
     * Sets validation_rules_assignments
     *
     * @param \OpenAPI\Client\Model\ValidationRulesAssignmentsList|null $validation_rules_assignments validation_rules_assignments
     *
     * @return self
     */
    public function setValidationRulesAssignments($validation_rules_assignments)
    {
        if (is_null($validation_rules_assignments)) {
            throw new \InvalidArgumentException('non-nullable validation_rules_assignments cannot be null');
        }
        $this->container['validation_rules_assignments'] = $validation_rules_assignments;

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


