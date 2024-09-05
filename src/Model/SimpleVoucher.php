<?php
/**
 * SimpleVoucher
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
 * SimpleVoucher Class Doc Comment
 *
 * @category Class
 * @description Simplified voucher data.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SimpleVoucher implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SimpleVoucher';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'code' => 'string',
        'gift' => '\OpenAPI\Client\Model\Gift',
        'discount' => '\OpenAPI\Client\Model\Discount',
        'loyaltyCard' => '\OpenAPI\Client\Model\SimpleLoyaltyCard',
        'type' => 'string',
        'campaign' => 'string',
        'campaignId' => 'string',
        'isReferralCode' => 'bool',
        'holderId' => 'string',
        'referrerId' => 'string',
        'categoryId' => 'string',
        'categories' => '\OpenAPI\Client\Model\Category[]',
        'active' => 'bool',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'redemption' => '\OpenAPI\Client\Model\SimpleVoucherRedemption',
        'startDate' => '\DateTime',
        'expirationDate' => '\DateTime',
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
        'code' => null,
        'gift' => null,
        'discount' => null,
        'loyaltyCard' => null,
        'type' => null,
        'campaign' => null,
        'campaignId' => null,
        'isReferralCode' => null,
        'holderId' => null,
        'referrerId' => null,
        'categoryId' => null,
        'categories' => null,
        'active' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'redemption' => null,
        'startDate' => 'date-time',
        'expirationDate' => 'date-time',
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
		'code' => true,
		'gift' => false,
		'discount' => false,
		'loyaltyCard' => false,
		'type' => true,
		'campaign' => true,
		'campaignId' => true,
		'isReferralCode' => true,
		'holderId' => true,
		'referrerId' => true,
		'categoryId' => true,
		'categories' => true,
		'active' => true,
		'createdAt' => true,
		'updatedAt' => true,
		'redemption' => true,
		'startDate' => true,
		'expirationDate' => true,
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
        'code' => 'code',
        'gift' => 'gift',
        'discount' => 'discount',
        'loyaltyCard' => 'loyalty_card',
        'type' => 'type',
        'campaign' => 'campaign',
        'campaignId' => 'campaign_id',
        'isReferralCode' => 'is_referral_code',
        'holderId' => 'holder_id',
        'referrerId' => 'referrer_id',
        'categoryId' => 'category_id',
        'categories' => 'categories',
        'active' => 'active',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'redemption' => 'redemption',
        'startDate' => 'start_date',
        'expirationDate' => 'expiration_date',
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
        'code' => 'setCode',
        'gift' => 'setGift',
        'discount' => 'setDiscount',
        'loyaltyCard' => 'setLoyaltyCard',
        'type' => 'setType',
        'campaign' => 'setCampaign',
        'campaignId' => 'setCampaignId',
        'isReferralCode' => 'setIsReferralCode',
        'holderId' => 'setHolderId',
        'referrerId' => 'setReferrerId',
        'categoryId' => 'setCategoryId',
        'categories' => 'setCategories',
        'active' => 'setActive',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'redemption' => 'setRedemption',
        'startDate' => 'setStartDate',
        'expirationDate' => 'setExpirationDate',
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
        'code' => 'getCode',
        'gift' => 'getGift',
        'discount' => 'getDiscount',
        'loyaltyCard' => 'getLoyaltyCard',
        'type' => 'getType',
        'campaign' => 'getCampaign',
        'campaignId' => 'getCampaignId',
        'isReferralCode' => 'getIsReferralCode',
        'holderId' => 'getHolderId',
        'referrerId' => 'getReferrerId',
        'categoryId' => 'getCategoryId',
        'categories' => 'getCategories',
        'active' => 'getActive',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'redemption' => 'getRedemption',
        'startDate' => 'getStartDate',
        'expirationDate' => 'getExpirationDate',
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

    public const TYPE_DISCOUNT_VOUCHER = 'DISCOUNT_VOUCHER';
    public const TYPE_LOYALTY_CARD = 'LOYALTY_CARD';
    public const TYPE_GIFT_VOUCHER = 'GIFT_VOUCHER';
    public const OBJECT_VOUCHER = 'voucher';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DISCOUNT_VOUCHER,
            self::TYPE_LOYALTY_CARD,
            self::TYPE_GIFT_VOUCHER,
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
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('gift', $data ?? [], null);
        $this->setIfExists('discount', $data ?? [], null);
        $this->setIfExists('loyaltyCard', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('campaign', $data ?? [], null);
        $this->setIfExists('campaignId', $data ?? [], null);
        $this->setIfExists('isReferralCode', $data ?? [], null);
        $this->setIfExists('holderId', $data ?? [], null);
        $this->setIfExists('referrerId', $data ?? [], null);
        $this->setIfExists('categoryId', $data ?? [], null);
        $this->setIfExists('categories', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('redemption', $data ?? [], null);
        $this->setIfExists('startDate', $data ?? [], null);
        $this->setIfExists('expirationDate', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], 'voucher');
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * @param string|null $id A unique identifier that represents the voucher assigned by Voucherify.
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
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code Voucher code.
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            array_push($this->openAPINullablesSetToNull, 'code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets gift
     *
     * @return \OpenAPI\Client\Model\Gift|null
     */
    public function getGift()
    {
        return $this->container['gift'];
    }

    /**
     * Sets gift
     *
     * @param \OpenAPI\Client\Model\Gift|null $gift gift
     *
     * @return self
     */
    public function setGift($gift)
    {
        if (is_null($gift)) {
            throw new \InvalidArgumentException('non-nullable gift cannot be null');
        }
        $this->container['gift'] = $gift;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return \OpenAPI\Client\Model\Discount|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param \OpenAPI\Client\Model\Discount|null $discount discount
     *
     * @return self
     */
    public function setDiscount($discount)
    {
        if (is_null($discount)) {
            throw new \InvalidArgumentException('non-nullable discount cannot be null');
        }
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets loyaltyCard
     *
     * @return \OpenAPI\Client\Model\SimpleLoyaltyCard|null
     */
    public function getLoyaltyCard()
    {
        return $this->container['loyaltyCard'];
    }

    /**
     * Sets loyaltyCard
     *
     * @param \OpenAPI\Client\Model\SimpleLoyaltyCard|null $loyaltyCard loyaltyCard
     *
     * @return self
     */
    public function setLoyaltyCard($loyaltyCard)
    {
        if (is_null($loyaltyCard)) {
            throw new \InvalidArgumentException('non-nullable loyaltyCard cannot be null');
        }
        $this->container['loyaltyCard'] = $loyaltyCard;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of the voucher.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            array_push($this->openAPINullablesSetToNull, 'type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets campaign
     *
     * @return string|null
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     *
     * @param string|null $campaign Campaign name.
     *
     * @return self
     */
    public function setCampaign($campaign)
    {
        if (is_null($campaign)) {
            array_push($this->openAPINullablesSetToNull, 'campaign');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('campaign', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['campaign'] = $campaign;

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
     * @param string|null $campaignId Campaign unique ID.
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
     * Gets isReferralCode
     *
     * @return bool|null
     */
    public function getIsReferralCode()
    {
        return $this->container['isReferralCode'];
    }

    /**
     * Sets isReferralCode
     *
     * @param bool|null $isReferralCode Flag indicating whether this voucher is a referral code; `true` for campaign type `REFERRAL_PROGRAM`.
     *
     * @return self
     */
    public function setIsReferralCode($isReferralCode)
    {
        if (is_null($isReferralCode)) {
            array_push($this->openAPINullablesSetToNull, 'isReferralCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('isReferralCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['isReferralCode'] = $isReferralCode;

        return $this;
    }

    /**
     * Gets holderId
     *
     * @return string|null
     */
    public function getHolderId()
    {
        return $this->container['holderId'];
    }

    /**
     * Sets holderId
     *
     * @param string|null $holderId Unique customer identifier of the redeemable holder. It equals to the customer ID assigned by Voucherify.
     *
     * @return self
     */
    public function setHolderId($holderId)
    {
        if (is_null($holderId)) {
            array_push($this->openAPINullablesSetToNull, 'holderId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('holderId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['holderId'] = $holderId;

        return $this;
    }

    /**
     * Gets referrerId
     *
     * @return string|null
     */
    public function getReferrerId()
    {
        return $this->container['referrerId'];
    }

    /**
     * Sets referrerId
     *
     * @param string|null $referrerId Unique identifier of the referrer assigned by Voucherify.
     *
     * @return self
     */
    public function setReferrerId($referrerId)
    {
        if (is_null($referrerId)) {
            array_push($this->openAPINullablesSetToNull, 'referrerId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('referrerId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['referrerId'] = $referrerId;

        return $this;
    }

    /**
     * Gets categoryId
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
     * Sets categoryId
     *
     * @param string|null $categoryId Unique identifier of the category that this voucher belongs to.
     *
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        if (is_null($categoryId)) {
            array_push($this->openAPINullablesSetToNull, 'categoryId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('categoryId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['categoryId'] = $categoryId;

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
     * @param \OpenAPI\Client\Model\Category[]|null $categories Contains details about the category.
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
     * @param bool|null $active Shows whether the voucher is on or off. `true` indicates an *active* voucher and `false` indicates an *inactive* voucher.
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
     * @param \DateTime|null $createdAt Timestamp representing the date and time when the order was created in the ISO 8601 format.
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
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt Timestamp representing the date and time when the order was created. The value is shown in the ISO 8601 format.
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        if (is_null($updatedAt)) {
            array_push($this->openAPINullablesSetToNull, 'updatedAt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('updatedAt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets redemption
     *
     * @return \OpenAPI\Client\Model\SimpleVoucherRedemption|null
     */
    public function getRedemption()
    {
        return $this->container['redemption'];
    }

    /**
     * Sets redemption
     *
     * @param \OpenAPI\Client\Model\SimpleVoucherRedemption|null $redemption redemption
     *
     * @return self
     */
    public function setRedemption($redemption)
    {
        if (is_null($redemption)) {
            array_push($this->openAPINullablesSetToNull, 'redemption');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redemption', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['redemption'] = $redemption;

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
     * @param \DateTime|null $startDate Activation timestamp defines when the code starts to be active in ISO 8601 format. Voucher is *inactive before* this date.
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
     * @param \DateTime|null $expirationDate Expiration timestamp defines when the code expires in ISO 8601 format.  Voucher is *inactive after* this date.
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
     * @param object|null $metadata A set of custom key/value pairs that you can attach to a voucher. The metadata object stores all custom attributes assigned to the voucher.
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


