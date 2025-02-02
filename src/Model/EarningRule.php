<?php
/**
 * EarningRule
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
 * EarningRule Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EarningRule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EarningRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'createdAt' => '\DateTime',
        'loyalty' => '\OpenAPI\Client\Model\EarningRuleLoyalty',
        'event' => 'string',
        'customEvent' => '\OpenAPI\Client\Model\EarningRuleCustomEvent',
        'segment' => '\OpenAPI\Client\Model\EarningRuleSegment',
        'loyaltyTier' => '\OpenAPI\Client\Model\EarningRuleLoyaltyTier',
        'pendingPoints' => '\OpenAPI\Client\Model\EarningRulePendingPoints',
        'source' => '\OpenAPI\Client\Model\EarningRuleSource',
        'object' => 'string',
        'automationId' => 'string',
        'startDate' => 'string',
        'expirationDate' => 'string',
        'validityTimeframe' => '\OpenAPI\Client\Model\ValidityTimeframe',
        'validityDayOfWeek' => 'int[]',
        'validityHours' => '\OpenAPI\Client\Model\ValidityHours',
        'metadata' => 'object',
        'validationRuleId' => 'string',
        'updatedAt' => '\DateTime',
        'active' => 'bool'
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
        'loyalty' => null,
        'event' => null,
        'customEvent' => null,
        'segment' => null,
        'loyaltyTier' => null,
        'pendingPoints' => null,
        'source' => null,
        'object' => null,
        'automationId' => null,
        'startDate' => null,
        'expirationDate' => null,
        'validityTimeframe' => null,
        'validityDayOfWeek' => null,
        'validityHours' => null,
        'metadata' => null,
        'validationRuleId' => null,
        'updatedAt' => 'date-time',
        'active' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'createdAt' => true,
		'loyalty' => true,
		'event' => true,
		'customEvent' => true,
		'segment' => true,
		'loyaltyTier' => true,
		'pendingPoints' => true,
		'source' => true,
		'object' => true,
		'automationId' => true,
		'startDate' => true,
		'expirationDate' => true,
		'validityTimeframe' => false,
		'validityDayOfWeek' => true,
		'validityHours' => false,
		'metadata' => true,
		'validationRuleId' => true,
		'updatedAt' => true,
		'active' => true
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
        'loyalty' => 'loyalty',
        'event' => 'event',
        'customEvent' => 'custom_event',
        'segment' => 'segment',
        'loyaltyTier' => 'loyalty_tier',
        'pendingPoints' => 'pending_points',
        'source' => 'source',
        'object' => 'object',
        'automationId' => 'automation_id',
        'startDate' => 'start_date',
        'expirationDate' => 'expiration_date',
        'validityTimeframe' => 'validity_timeframe',
        'validityDayOfWeek' => 'validity_day_of_week',
        'validityHours' => 'validity_hours',
        'metadata' => 'metadata',
        'validationRuleId' => 'validation_rule_id',
        'updatedAt' => 'updated_at',
        'active' => 'active'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'createdAt' => 'setCreatedAt',
        'loyalty' => 'setLoyalty',
        'event' => 'setEvent',
        'customEvent' => 'setCustomEvent',
        'segment' => 'setSegment',
        'loyaltyTier' => 'setLoyaltyTier',
        'pendingPoints' => 'setPendingPoints',
        'source' => 'setSource',
        'object' => 'setObject',
        'automationId' => 'setAutomationId',
        'startDate' => 'setStartDate',
        'expirationDate' => 'setExpirationDate',
        'validityTimeframe' => 'setValidityTimeframe',
        'validityDayOfWeek' => 'setValidityDayOfWeek',
        'validityHours' => 'setValidityHours',
        'metadata' => 'setMetadata',
        'validationRuleId' => 'setValidationRuleId',
        'updatedAt' => 'setUpdatedAt',
        'active' => 'setActive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'createdAt' => 'getCreatedAt',
        'loyalty' => 'getLoyalty',
        'event' => 'getEvent',
        'customEvent' => 'getCustomEvent',
        'segment' => 'getSegment',
        'loyaltyTier' => 'getLoyaltyTier',
        'pendingPoints' => 'getPendingPoints',
        'source' => 'getSource',
        'object' => 'getObject',
        'automationId' => 'getAutomationId',
        'startDate' => 'getStartDate',
        'expirationDate' => 'getExpirationDate',
        'validityTimeframe' => 'getValidityTimeframe',
        'validityDayOfWeek' => 'getValidityDayOfWeek',
        'validityHours' => 'getValidityHours',
        'metadata' => 'getMetadata',
        'validationRuleId' => 'getValidationRuleId',
        'updatedAt' => 'getUpdatedAt',
        'active' => 'getActive'
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

    public const OBJECT_EARNING_RULE = 'earning_rule';
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
    public function getObjectAllowableValues()
    {
        return [
            self::OBJECT_EARNING_RULE,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('loyalty', $data ?? [], null);
        $this->setIfExists('event', $data ?? [], null);
        $this->setIfExists('customEvent', $data ?? [], null);
        $this->setIfExists('segment', $data ?? [], null);
        $this->setIfExists('loyaltyTier', $data ?? [], null);
        $this->setIfExists('pendingPoints', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], 'earning_rule');
        $this->setIfExists('automationId', $data ?? [], null);
        $this->setIfExists('startDate', $data ?? [], null);
        $this->setIfExists('expirationDate', $data ?? [], null);
        $this->setIfExists('validityTimeframe', $data ?? [], null);
        $this->setIfExists('validityDayOfWeek', $data ?? [], null);
        $this->setIfExists('validityHours', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('validationRuleId', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
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
     * @param string|null $id Assigned by the Voucherify API, identifies the earning rule object.
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
     * @param \DateTime|null $createdAt Timestamp representing the date and time when the earning rule was created. The value is shown in the ISO 8601 format.
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
     * Gets loyalty
     *
     * @return \OpenAPI\Client\Model\EarningRuleLoyalty|null
     */
    public function getLoyalty()
    {
        return $this->container['loyalty'];
    }

    /**
     * Sets loyalty
     *
     * @param \OpenAPI\Client\Model\EarningRuleLoyalty|null $loyalty loyalty
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
            array_push($this->openAPINullablesSetToNull, 'event');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('event', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets customEvent
     *
     * @return \OpenAPI\Client\Model\EarningRuleCustomEvent|null
     */
    public function getCustomEvent()
    {
        return $this->container['customEvent'];
    }

    /**
     * Sets customEvent
     *
     * @param \OpenAPI\Client\Model\EarningRuleCustomEvent|null $customEvent customEvent
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
     * Gets segment
     *
     * @return \OpenAPI\Client\Model\EarningRuleSegment|null
     */
    public function getSegment()
    {
        return $this->container['segment'];
    }

    /**
     * Sets segment
     *
     * @param \OpenAPI\Client\Model\EarningRuleSegment|null $segment segment
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
     * Gets loyaltyTier
     *
     * @return \OpenAPI\Client\Model\EarningRuleLoyaltyTier|null
     */
    public function getLoyaltyTier()
    {
        return $this->container['loyaltyTier'];
    }

    /**
     * Sets loyaltyTier
     *
     * @param \OpenAPI\Client\Model\EarningRuleLoyaltyTier|null $loyaltyTier loyaltyTier
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
     * Gets pendingPoints
     *
     * @return \OpenAPI\Client\Model\EarningRulePendingPoints|null
     */
    public function getPendingPoints()
    {
        return $this->container['pendingPoints'];
    }

    /**
     * Sets pendingPoints
     *
     * @param \OpenAPI\Client\Model\EarningRulePendingPoints|null $pendingPoints pendingPoints
     *
     * @return self
     */
    public function setPendingPoints($pendingPoints)
    {
        if (is_null($pendingPoints)) {
            array_push($this->openAPINullablesSetToNull, 'pendingPoints');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pendingPoints', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pendingPoints'] = $pendingPoints;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \OpenAPI\Client\Model\EarningRuleSource|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \OpenAPI\Client\Model\EarningRuleSource|null $source source
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
     * @param string|null $object The type of the object represented by JSON. Default is earning_rule.
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
     * Gets automationId
     *
     * @return string|null
     */
    public function getAutomationId()
    {
        return $this->container['automationId'];
    }

    /**
     * Sets automationId
     *
     * @param string|null $automationId For internal use by Voucherify.
     *
     * @return self
     */
    public function setAutomationId($automationId)
    {
        if (is_null($automationId)) {
            array_push($this->openAPINullablesSetToNull, 'automationId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('automationId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['automationId'] = $automationId;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param string|null $startDate Start date defines when the earning rule starts to be active. Activation timestamp is presented in the ISO 8601 format. The earning rule is inactive before this date. If you do not define the start date for an earning rule, it will inherit the campaign start date by default.
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
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->container['expirationDate'];
    }

    /**
     * Sets expirationDate
     *
     * @param string|null $expirationDate Expiration date defines when the earning rule expires. Expiration timestamp is presented in the ISO 8601 format. The earning rule is inactive after this date. If you do not define the expiration date for an earning rule, it will inherit the campaign expiration date by default.
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
     * @param \DateTime|null $updatedAt Timestamp representing the date and time when the earning rule was last updated in ISO 8601 format.
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
     * @param bool|null $active A flag to toggle the earning rule on or off. You can disable an earning rule even though it's within the active period defined by the start_date and expiration_date of the campaign or the earning rule's own start_date and expiration_date.  - `true` indicates an active earning rule - `false` indicates an inactive earning rule
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


