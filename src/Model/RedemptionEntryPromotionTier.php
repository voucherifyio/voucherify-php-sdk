<?php
/**
 * RedemptionEntryPromotionTier
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
 * RedemptionEntryPromotionTier Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RedemptionEntryPromotionTier implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RedemptionEntryPromotionTier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'name' => 'string',
        'banner' => 'string',
        'action' => '\OpenAPI\Client\Model\RedemptionEntryPromotionTierAction',
        'metadata' => 'object',
        'hierarchy' => 'int',
        'promotionId' => 'string',
        'campaign' => '\OpenAPI\Client\Model\RedemptionEntryPromotionTierCampaign',
        'campaignId' => 'string',
        'active' => 'bool',
        'startDate' => '\DateTime',
        'expirationDate' => '\DateTime',
        'validityTimeframe' => '\OpenAPI\Client\Model\ValidityTimeframe',
        'validityDayOfWeek' => 'int[]',
        'validityHours' => '\OpenAPI\Client\Model\ValidityHours',
        'summary' => '\OpenAPI\Client\Model\RedemptionEntryPromotionTierSummary',
        'object' => 'string',
        'validationRuleAssignments' => '\OpenAPI\Client\Model\ValidationRuleAssignmentsList',
        'categoryId' => 'string',
        'categories' => '\OpenAPI\Client\Model\Category[]'
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
        'updatedAt' => 'date-time',
        'name' => null,
        'banner' => null,
        'action' => null,
        'metadata' => null,
        'hierarchy' => null,
        'promotionId' => null,
        'campaign' => null,
        'campaignId' => null,
        'active' => null,
        'startDate' => 'date-time',
        'expirationDate' => 'date-time',
        'validityTimeframe' => null,
        'validityDayOfWeek' => null,
        'validityHours' => null,
        'summary' => null,
        'object' => null,
        'validationRuleAssignments' => null,
        'categoryId' => null,
        'categories' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'createdAt' => true,
		'updatedAt' => true,
		'name' => true,
		'banner' => true,
		'action' => true,
		'metadata' => true,
		'hierarchy' => true,
		'promotionId' => true,
		'campaign' => true,
		'campaignId' => true,
		'active' => true,
		'startDate' => true,
		'expirationDate' => true,
		'validityTimeframe' => false,
		'validityDayOfWeek' => true,
		'validityHours' => false,
		'summary' => true,
		'object' => true,
		'validationRuleAssignments' => false,
		'categoryId' => true,
		'categories' => true
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
        'updatedAt' => 'updated_at',
        'name' => 'name',
        'banner' => 'banner',
        'action' => 'action',
        'metadata' => 'metadata',
        'hierarchy' => 'hierarchy',
        'promotionId' => 'promotion_id',
        'campaign' => 'campaign',
        'campaignId' => 'campaign_id',
        'active' => 'active',
        'startDate' => 'start_date',
        'expirationDate' => 'expiration_date',
        'validityTimeframe' => 'validity_timeframe',
        'validityDayOfWeek' => 'validity_day_of_week',
        'validityHours' => 'validity_hours',
        'summary' => 'summary',
        'object' => 'object',
        'validationRuleAssignments' => 'validation_rule_assignments',
        'categoryId' => 'category_id',
        'categories' => 'categories'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'name' => 'setName',
        'banner' => 'setBanner',
        'action' => 'setAction',
        'metadata' => 'setMetadata',
        'hierarchy' => 'setHierarchy',
        'promotionId' => 'setPromotionId',
        'campaign' => 'setCampaign',
        'campaignId' => 'setCampaignId',
        'active' => 'setActive',
        'startDate' => 'setStartDate',
        'expirationDate' => 'setExpirationDate',
        'validityTimeframe' => 'setValidityTimeframe',
        'validityDayOfWeek' => 'setValidityDayOfWeek',
        'validityHours' => 'setValidityHours',
        'summary' => 'setSummary',
        'object' => 'setObject',
        'validationRuleAssignments' => 'setValidationRuleAssignments',
        'categoryId' => 'setCategoryId',
        'categories' => 'setCategories'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'name' => 'getName',
        'banner' => 'getBanner',
        'action' => 'getAction',
        'metadata' => 'getMetadata',
        'hierarchy' => 'getHierarchy',
        'promotionId' => 'getPromotionId',
        'campaign' => 'getCampaign',
        'campaignId' => 'getCampaignId',
        'active' => 'getActive',
        'startDate' => 'getStartDate',
        'expirationDate' => 'getExpirationDate',
        'validityTimeframe' => 'getValidityTimeframe',
        'validityDayOfWeek' => 'getValidityDayOfWeek',
        'validityHours' => 'getValidityHours',
        'summary' => 'getSummary',
        'object' => 'getObject',
        'validationRuleAssignments' => 'getValidationRuleAssignments',
        'categoryId' => 'getCategoryId',
        'categories' => 'getCategories'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('banner', $data ?? [], null);
        $this->setIfExists('action', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('hierarchy', $data ?? [], null);
        $this->setIfExists('promotionId', $data ?? [], null);
        $this->setIfExists('campaign', $data ?? [], null);
        $this->setIfExists('campaignId', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('startDate', $data ?? [], null);
        $this->setIfExists('expirationDate', $data ?? [], null);
        $this->setIfExists('validityTimeframe', $data ?? [], null);
        $this->setIfExists('validityDayOfWeek', $data ?? [], null);
        $this->setIfExists('validityHours', $data ?? [], null);
        $this->setIfExists('summary', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], 'promotion_tier');
        $this->setIfExists('validationRuleAssignments', $data ?? [], null);
        $this->setIfExists('categoryId', $data ?? [], null);
        $this->setIfExists('categories', $data ?? [], null);
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
     * @param string|null $id Unique promotion tier ID.
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
     * @param \DateTime|null $createdAt Timestamp representing the date and time when the promotion tier was created. The value is shown in the ISO 8601 format.
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
     * @param \DateTime|null $updatedAt Timestamp representing the date and time when the promotion tier was updated. The value is shown in the ISO 8601 format.
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
     * @return \OpenAPI\Client\Model\RedemptionEntryPromotionTierAction|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param \OpenAPI\Client\Model\RedemptionEntryPromotionTierAction|null $action action
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
     * @param object|null $metadata metadata
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
     * Gets promotionId
     *
     * @return string|null
     */
    public function getPromotionId()
    {
        return $this->container['promotionId'];
    }

    /**
     * Sets promotionId
     *
     * @param string|null $promotionId Promotion unique ID.
     *
     * @return self
     */
    public function setPromotionId($promotionId)
    {
        if (is_null($promotionId)) {
            array_push($this->openAPINullablesSetToNull, 'promotionId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('promotionId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['promotionId'] = $promotionId;

        return $this;
    }

    /**
     * Gets campaign
     *
     * @return \OpenAPI\Client\Model\RedemptionEntryPromotionTierCampaign|null
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     *
     * @param \OpenAPI\Client\Model\RedemptionEntryPromotionTierCampaign|null $campaign campaign
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
     * @param string|null $campaignId Promotion tier's parent campaign's unique ID.
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
     * @param \DateTime|null $startDate Activation timestamp defines when the promotion tier starts to be active in ISO 8601 format. Promotion tier is *inactive before* this date.
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
     * @param \DateTime|null $expirationDate Activation timestamp defines when the promotion tier expires in ISO 8601 format. Promotion tier is *inactive after* this date.
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
     * Gets summary
     *
     * @return \OpenAPI\Client\Model\RedemptionEntryPromotionTierSummary|null
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param \OpenAPI\Client\Model\RedemptionEntryPromotionTierSummary|null $summary summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        if (is_null($summary)) {
            array_push($this->openAPINullablesSetToNull, 'summary');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('summary', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['summary'] = $summary;

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
     * @param string|null $object The type of the object represented by JSON. This object stores information about the promotion tier.
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
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets validationRuleAssignments
     *
     * @return \OpenAPI\Client\Model\ValidationRuleAssignmentsList|null
     */
    public function getValidationRuleAssignments()
    {
        return $this->container['validationRuleAssignments'];
    }

    /**
     * Sets validationRuleAssignments
     *
     * @param \OpenAPI\Client\Model\ValidationRuleAssignmentsList|null $validationRuleAssignments validationRuleAssignments
     *
     * @return self
     */
    public function setValidationRuleAssignments($validationRuleAssignments)
    {
        if (is_null($validationRuleAssignments)) {
            throw new \InvalidArgumentException('non-nullable validationRuleAssignments cannot be null');
        }
        $this->container['validationRuleAssignments'] = $validationRuleAssignments;

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
     * @param string|null $categoryId Promotion tier category ID.
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
     * @param \OpenAPI\Client\Model\Category[]|null $categories categories
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


