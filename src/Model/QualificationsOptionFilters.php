<?php
/**
 * QualificationsOptionFilters
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
 * QualificationsOptionFilters Class Doc Comment
 *
 * @category Class
 * @description A set of filters to return only a specific category or type of redeemable.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class QualificationsOptionFilters implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'QualificationsOptionFilters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'junction' => 'string',
        'categoryId' => '\OpenAPI\Client\Model\QualificationsFieldConditions',
        'campaignId' => '\OpenAPI\Client\Model\QualificationsFieldConditions',
        'campaignType' => '\OpenAPI\Client\Model\QualificationsOptionFiltersCampaignType',
        'resourceId' => '\OpenAPI\Client\Model\QualificationsFieldConditions',
        'resourceType' => '\OpenAPI\Client\Model\QualificationsOptionFiltersResourceType',
        'voucherType' => '\OpenAPI\Client\Model\QualificationsFieldConditions',
        'code' => '\OpenAPI\Client\Model\QualificationsFieldConditions',
        'holderRole' => '\OpenAPI\Client\Model\QualificationsOptionFiltersHolderRole'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'junction' => null,
        'categoryId' => null,
        'campaignId' => null,
        'campaignType' => null,
        'resourceId' => null,
        'resourceType' => null,
        'voucherType' => null,
        'code' => null,
        'holderRole' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'junction' => true,
		'categoryId' => false,
		'campaignId' => false,
		'campaignType' => true,
		'resourceId' => false,
		'resourceType' => true,
		'voucherType' => false,
		'code' => false,
		'holderRole' => true
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
        'junction' => 'junction',
        'categoryId' => 'category_id',
        'campaignId' => 'campaign_id',
        'campaignType' => 'campaign_type',
        'resourceId' => 'resource_id',
        'resourceType' => 'resource_type',
        'voucherType' => 'voucher_type',
        'code' => 'code',
        'holderRole' => 'holder_role'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'junction' => 'setJunction',
        'categoryId' => 'setCategoryId',
        'campaignId' => 'setCampaignId',
        'campaignType' => 'setCampaignType',
        'resourceId' => 'setResourceId',
        'resourceType' => 'setResourceType',
        'voucherType' => 'setVoucherType',
        'code' => 'setCode',
        'holderRole' => 'setHolderRole'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'junction' => 'getJunction',
        'categoryId' => 'getCategoryId',
        'campaignId' => 'getCampaignId',
        'campaignType' => 'getCampaignType',
        'resourceId' => 'getResourceId',
        'resourceType' => 'getResourceType',
        'voucherType' => 'getVoucherType',
        'code' => 'getCode',
        'holderRole' => 'getHolderRole'
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

    public const JUNCTION__AND = 'and';
    public const JUNCTION__OR = 'or';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getJunctionAllowableValues()
    {
        return [
            self::JUNCTION__AND,
            self::JUNCTION__OR,
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
        $this->setIfExists('junction', $data ?? [], null);
        $this->setIfExists('categoryId', $data ?? [], null);
        $this->setIfExists('campaignId', $data ?? [], null);
        $this->setIfExists('campaignType', $data ?? [], null);
        $this->setIfExists('resourceId', $data ?? [], null);
        $this->setIfExists('resourceType', $data ?? [], null);
        $this->setIfExists('voucherType', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('holderRole', $data ?? [], null);
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

        $allowedValues = $this->getJunctionAllowableValues();
        if (!is_null($this->container['junction']) && !in_array($this->container['junction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'junction', must be one of '%s'",
                $this->container['junction'],
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
     * Gets junction
     *
     * @return string|null
     */
    public function getJunction()
    {
        return $this->container['junction'];
    }

    /**
     * Sets junction
     *
     * @param string|null $junction Logical Operator Between Filters. Filter by conditions set on the `junction` parameter indicating how the `conditions` should be accounted for in the query. An `AND` is an all-inclusive logical operator, meaning the `AND` operator displays a record if **ALL** the conditions separated by AND are TRUE, while  an `OR` operator displays a record if **ANY** of the conditions separated by OR is TRUE.
     *
     * @return self
     */
    public function setJunction($junction)
    {
        if (is_null($junction)) {
            array_push($this->openAPINullablesSetToNull, 'junction');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('junction', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getJunctionAllowableValues();
        if (!is_null($junction) && !in_array($junction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'junction', must be one of '%s'",
                    $junction,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['junction'] = $junction;

        return $this;
    }

    /**
     * Gets categoryId
     *
     * @return \OpenAPI\Client\Model\QualificationsFieldConditions|null
     */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
     * Sets categoryId
     *
     * @param \OpenAPI\Client\Model\QualificationsFieldConditions|null $categoryId categoryId
     *
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        if (is_null($categoryId)) {
            throw new \InvalidArgumentException('non-nullable categoryId cannot be null');
        }
        $this->container['categoryId'] = $categoryId;

        return $this;
    }

    /**
     * Gets campaignId
     *
     * @return \OpenAPI\Client\Model\QualificationsFieldConditions|null
     */
    public function getCampaignId()
    {
        return $this->container['campaignId'];
    }

    /**
     * Sets campaignId
     *
     * @param \OpenAPI\Client\Model\QualificationsFieldConditions|null $campaignId campaignId
     *
     * @return self
     */
    public function setCampaignId($campaignId)
    {
        if (is_null($campaignId)) {
            throw new \InvalidArgumentException('non-nullable campaignId cannot be null');
        }
        $this->container['campaignId'] = $campaignId;

        return $this;
    }

    /**
     * Gets campaignType
     *
     * @return \OpenAPI\Client\Model\QualificationsOptionFiltersCampaignType|null
     */
    public function getCampaignType()
    {
        return $this->container['campaignType'];
    }

    /**
     * Sets campaignType
     *
     * @param \OpenAPI\Client\Model\QualificationsOptionFiltersCampaignType|null $campaignType campaignType
     *
     * @return self
     */
    public function setCampaignType($campaignType)
    {
        if (is_null($campaignType)) {
            array_push($this->openAPINullablesSetToNull, 'campaignType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('campaignType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['campaignType'] = $campaignType;

        return $this;
    }

    /**
     * Gets resourceId
     *
     * @return \OpenAPI\Client\Model\QualificationsFieldConditions|null
     */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
     * Sets resourceId
     *
     * @param \OpenAPI\Client\Model\QualificationsFieldConditions|null $resourceId resourceId
     *
     * @return self
     */
    public function setResourceId($resourceId)
    {
        if (is_null($resourceId)) {
            throw new \InvalidArgumentException('non-nullable resourceId cannot be null');
        }
        $this->container['resourceId'] = $resourceId;

        return $this;
    }

    /**
     * Gets resourceType
     *
     * @return \OpenAPI\Client\Model\QualificationsOptionFiltersResourceType|null
     */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
     * Sets resourceType
     *
     * @param \OpenAPI\Client\Model\QualificationsOptionFiltersResourceType|null $resourceType resourceType
     *
     * @return self
     */
    public function setResourceType($resourceType)
    {
        if (is_null($resourceType)) {
            array_push($this->openAPINullablesSetToNull, 'resourceType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('resourceType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['resourceType'] = $resourceType;

        return $this;
    }

    /**
     * Gets voucherType
     *
     * @return \OpenAPI\Client\Model\QualificationsFieldConditions|null
     */
    public function getVoucherType()
    {
        return $this->container['voucherType'];
    }

    /**
     * Sets voucherType
     *
     * @param \OpenAPI\Client\Model\QualificationsFieldConditions|null $voucherType voucherType
     *
     * @return self
     */
    public function setVoucherType($voucherType)
    {
        if (is_null($voucherType)) {
            throw new \InvalidArgumentException('non-nullable voucherType cannot be null');
        }
        $this->container['voucherType'] = $voucherType;

        return $this;
    }

    /**
     * Gets code
     *
     * @return \OpenAPI\Client\Model\QualificationsFieldConditions|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param \OpenAPI\Client\Model\QualificationsFieldConditions|null $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets holderRole
     *
     * @return \OpenAPI\Client\Model\QualificationsOptionFiltersHolderRole|null
     */
    public function getHolderRole()
    {
        return $this->container['holderRole'];
    }

    /**
     * Sets holderRole
     *
     * @param \OpenAPI\Client\Model\QualificationsOptionFiltersHolderRole|null $holderRole holderRole
     *
     * @return self
     */
    public function setHolderRole($holderRole)
    {
        if (is_null($holderRole)) {
            array_push($this->openAPINullablesSetToNull, 'holderRole');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('holderRole', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['holderRole'] = $holderRole;

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


