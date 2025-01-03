<?php
/**
 * RedeemableHolder
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
 * RedeemableHolder Class Doc Comment
 *
 * @category Class
 * @description Single customer&#39;s redeemable
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RedeemableHolder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RedeemableHolder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'createdAt' => '\DateTime',
        'redeemableId' => 'string',
        'redeemableObject' => 'string',
        'customerId' => 'string',
        'holderRole' => 'string',
        'campaignId' => 'string',
        'campaignType' => 'string',
        'voucherType' => 'string',
        'metadata' => 'object',
        'object' => 'string'
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
        'createdAt' => 'date-time',
        'redeemableId' => null,
        'redeemableObject' => null,
        'customerId' => null,
        'holderRole' => null,
        'campaignId' => null,
        'campaignType' => null,
        'voucherType' => null,
        'metadata' => null,
        'object' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'createdAt' => true,
		'redeemableId' => true,
		'redeemableObject' => true,
		'customerId' => true,
		'holderRole' => true,
		'campaignId' => true,
		'campaignType' => true,
		'voucherType' => true,
		'metadata' => true,
		'object' => true
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
        'createdAt' => 'created_at',
        'redeemableId' => 'redeemable_id',
        'redeemableObject' => 'redeemable_object',
        'customerId' => 'customer_id',
        'holderRole' => 'holder_role',
        'campaignId' => 'campaign_id',
        'campaignType' => 'campaign_type',
        'voucherType' => 'voucher_type',
        'metadata' => 'metadata',
        'object' => 'object'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'createdAt' => 'setCreatedAt',
        'redeemableId' => 'setRedeemableId',
        'redeemableObject' => 'setRedeemableObject',
        'customerId' => 'setCustomerId',
        'holderRole' => 'setHolderRole',
        'campaignId' => 'setCampaignId',
        'campaignType' => 'setCampaignType',
        'voucherType' => 'setVoucherType',
        'metadata' => 'setMetadata',
        'object' => 'setObject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'createdAt' => 'getCreatedAt',
        'redeemableId' => 'getRedeemableId',
        'redeemableObject' => 'getRedeemableObject',
        'customerId' => 'getCustomerId',
        'holderRole' => 'getHolderRole',
        'campaignId' => 'getCampaignId',
        'campaignType' => 'getCampaignType',
        'voucherType' => 'getVoucherType',
        'metadata' => 'getMetadata',
        'object' => 'getObject'
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

    public const HOLDER_ROLE_OWNER = 'OWNER';
    public const HOLDER_ROLE_REFERRER = 'REFERRER';
    public const HOLDER_ROLE_REFEREE = 'REFEREE';
    public const CAMPAIGN_TYPE_REFERRAL_PROGRAM = 'REFERRAL_PROGRAM';
    public const VOUCHER_TYPE_GIFT_VOUCHER = 'GIFT_VOUCHER';
    public const VOUCHER_TYPE_DISCOUNT_VOUCHER = 'DISCOUNT_VOUCHER';
    public const VOUCHER_TYPE_LOYALTY_CARD = 'LOYALTY_CARD';
    public const OBJECT_REDEEMABLE_HOLDER = 'redeemable_holder';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHolderRoleAllowableValues()
    {
        return [
            self::HOLDER_ROLE_OWNER,
            self::HOLDER_ROLE_REFERRER,
            self::HOLDER_ROLE_REFEREE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCampaignTypeAllowableValues()
    {
        return [
            self::CAMPAIGN_TYPE_REFERRAL_PROGRAM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVoucherTypeAllowableValues()
    {
        return [
            self::VOUCHER_TYPE_GIFT_VOUCHER,
            self::VOUCHER_TYPE_DISCOUNT_VOUCHER,
            self::VOUCHER_TYPE_LOYALTY_CARD,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectAllowableValues()
    {
        return [
            self::OBJECT_REDEEMABLE_HOLDER,
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
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('redeemableId', $data ?? [], null);
        $this->setIfExists('redeemableObject', $data ?? [], null);
        $this->setIfExists('customerId', $data ?? [], null);
        $this->setIfExists('holderRole', $data ?? [], null);
        $this->setIfExists('campaignId', $data ?? [], null);
        $this->setIfExists('campaignType', $data ?? [], 'REFERRAL_PROGRAM');
        $this->setIfExists('voucherType', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], 'redeemable_holder');
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

        $allowedValues = $this->getHolderRoleAllowableValues();
        if (!is_null($this->container['holderRole']) && !in_array($this->container['holderRole'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'holderRole', must be one of '%s'",
                $this->container['holderRole'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCampaignTypeAllowableValues();
        if (!is_null($this->container['campaignType']) && !in_array($this->container['campaignType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'campaignType', must be one of '%s'",
                $this->container['campaignType'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVoucherTypeAllowableValues();
        if (!is_null($this->container['voucherType']) && !in_array($this->container['voucherType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'voucherType', must be one of '%s'",
                $this->container['voucherType'],
                implode("', '", $allowedValues)
            );
        }

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
     * @param string|null $id Unique identifier of the redeemable holder.
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
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt Timestamp representing the date and time when the redeemable was assigned. The value is shown in the ISO 8601 format.
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        if (is_null($createdAt)) {
            array_push($this->openAPINullablesSetToNull, 'createdAt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('createdAt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets redeemableId
     *
     * @return string|null
     */
    public function getRedeemableId()
    {
        return $this->container['redeemableId'];
    }

    /**
     * Sets redeemableId
     *
     * @param string|null $redeemableId Identifier of the redeemable item.
     *
     * @return self
     */
    public function setRedeemableId($redeemableId)
    {
        if (is_null($redeemableId)) {
            array_push($this->openAPINullablesSetToNull, 'redeemableId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redeemableId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['redeemableId'] = $redeemableId;

        return $this;
    }

    /**
     * Gets redeemableObject
     *
     * @return string|null
     */
    public function getRedeemableObject()
    {
        return $this->container['redeemableObject'];
    }

    /**
     * Sets redeemableObject
     *
     * @param string|null $redeemableObject Type of the redeemable.
     *
     * @return self
     */
    public function setRedeemableObject($redeemableObject)
    {
        if (is_null($redeemableObject)) {
            array_push($this->openAPINullablesSetToNull, 'redeemableObject');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redeemableObject', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['redeemableObject'] = $redeemableObject;

        return $this;
    }

    /**
     * Gets customerId
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
     * Sets customerId
     *
     * @param string|null $customerId Unique identifier of the customer.
     *
     * @return self
     */
    public function setCustomerId($customerId)
    {
        if (is_null($customerId)) {
            array_push($this->openAPINullablesSetToNull, 'customerId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customerId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customerId'] = $customerId;

        return $this;
    }

    /**
     * Gets holderRole
     *
     * @return string|null
     */
    public function getHolderRole()
    {
        return $this->container['holderRole'];
    }

    /**
     * Sets holderRole
     *
     * @param string|null $holderRole Role of the holder.
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
        $allowedValues = $this->getHolderRoleAllowableValues();
        if (!is_null($holderRole) && !in_array($holderRole, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'holderRole', must be one of '%s'",
                    $holderRole,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['holderRole'] = $holderRole;

        return $this;
    }

    /**
     * Gets campaignId
     *
     * @return string|null
     */
    public function getCampaignId()
    {
        return $this->container['campaignId'];
    }

    /**
     * Sets campaignId
     *
     * @param string|null $campaignId Unique identifier of the campaign as assigned by Voucherify.
     *
     * @return self
     */
    public function setCampaignId($campaignId)
    {
        if (is_null($campaignId)) {
            array_push($this->openAPINullablesSetToNull, 'campaignId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('campaignId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['campaignId'] = $campaignId;

        return $this;
    }

    /**
     * Gets campaignType
     *
     * @return string|null
     */
    public function getCampaignType()
    {
        return $this->container['campaignType'];
    }

    /**
     * Sets campaignType
     *
     * @param string|null $campaignType Defines the type of the campaign.
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
        $allowedValues = $this->getCampaignTypeAllowableValues();
        if (!is_null($campaignType) && !in_array($campaignType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'campaignType', must be one of '%s'",
                    $campaignType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['campaignType'] = $campaignType;

        return $this;
    }

    /**
     * Gets voucherType
     *
     * @return string|null
     */
    public function getVoucherType()
    {
        return $this->container['voucherType'];
    }

    /**
     * Sets voucherType
     *
     * @param string|null $voucherType Defines the type of the voucher.
     *
     * @return self
     */
    public function setVoucherType($voucherType)
    {
        if (is_null($voucherType)) {
            array_push($this->openAPINullablesSetToNull, 'voucherType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('voucherType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getVoucherTypeAllowableValues();
        if (!is_null($voucherType) && !in_array($voucherType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'voucherType', must be one of '%s'",
                    $voucherType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['voucherType'] = $voucherType;

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
     * @param object|null $metadata A set of custom key/value pairs that you can attach to a redeemable holder. The metadata object stores all custom attributes assigned to the `redeemable_holder` object.
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
     * @param string|null $object The type of the object represented by JSON.
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


