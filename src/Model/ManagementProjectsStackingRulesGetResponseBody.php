<?php
/**
 * ManagementProjectsStackingRulesGetResponseBody
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
 * ManagementProjectsStackingRulesGetResponseBody Class Doc Comment
 *
 * @category Class
 * @description Response body schema for **GET** &#x60;/management/v1/projects/{projectId}/stacking-rules/{stackingRulesId}&#x60;.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ManagementProjectsStackingRulesGetResponseBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ManagementProjectsStackingRulesGetResponseBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'exclusiveCategories' => 'string[]',
        'jointCategories' => 'string[]',
        'redeemablesLimit' => 'int',
        'applicableRedeemablesLimit' => 'int',
        'applicableRedeemablesPerCategoryLimit' => 'int',
        'applicableExclusiveRedeemablesLimit' => 'int',
        'applicableExclusiveRedeemablesPerCategoryLimit' => 'int',
        'discountCalculationMode' => 'string',
        'initialAmountModeCategories' => 'string[]',
        'discountedAmountModeCategories' => 'string[]',
        'redeemablesApplicationMode' => 'string',
        'redeemablesSortingRule' => 'string',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime'
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
        'exclusiveCategories' => null,
        'jointCategories' => null,
        'redeemablesLimit' => null,
        'applicableRedeemablesLimit' => null,
        'applicableRedeemablesPerCategoryLimit' => null,
        'applicableExclusiveRedeemablesLimit' => null,
        'applicableExclusiveRedeemablesPerCategoryLimit' => null,
        'discountCalculationMode' => null,
        'initialAmountModeCategories' => null,
        'discountedAmountModeCategories' => null,
        'redeemablesApplicationMode' => null,
        'redeemablesSortingRule' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'exclusiveCategories' => true,
		'jointCategories' => true,
		'redeemablesLimit' => true,
		'applicableRedeemablesLimit' => true,
		'applicableRedeemablesPerCategoryLimit' => true,
		'applicableExclusiveRedeemablesLimit' => true,
		'applicableExclusiveRedeemablesPerCategoryLimit' => true,
		'discountCalculationMode' => true,
		'initialAmountModeCategories' => true,
		'discountedAmountModeCategories' => true,
		'redeemablesApplicationMode' => true,
		'redeemablesSortingRule' => true,
		'createdAt' => true,
		'updatedAt' => true
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
        'exclusiveCategories' => 'exclusive_categories',
        'jointCategories' => 'joint_categories',
        'redeemablesLimit' => 'redeemables_limit',
        'applicableRedeemablesLimit' => 'applicable_redeemables_limit',
        'applicableRedeemablesPerCategoryLimit' => 'applicable_redeemables_per_category_limit',
        'applicableExclusiveRedeemablesLimit' => 'applicable_exclusive_redeemables_limit',
        'applicableExclusiveRedeemablesPerCategoryLimit' => 'applicable_exclusive_redeemables_per_category_limit',
        'discountCalculationMode' => 'discount_calculation_mode',
        'initialAmountModeCategories' => 'initial_amount_mode_categories',
        'discountedAmountModeCategories' => 'discounted_amount_mode_categories',
        'redeemablesApplicationMode' => 'redeemables_application_mode',
        'redeemablesSortingRule' => 'redeemables_sorting_rule',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'exclusiveCategories' => 'setExclusiveCategories',
        'jointCategories' => 'setJointCategories',
        'redeemablesLimit' => 'setRedeemablesLimit',
        'applicableRedeemablesLimit' => 'setApplicableRedeemablesLimit',
        'applicableRedeemablesPerCategoryLimit' => 'setApplicableRedeemablesPerCategoryLimit',
        'applicableExclusiveRedeemablesLimit' => 'setApplicableExclusiveRedeemablesLimit',
        'applicableExclusiveRedeemablesPerCategoryLimit' => 'setApplicableExclusiveRedeemablesPerCategoryLimit',
        'discountCalculationMode' => 'setDiscountCalculationMode',
        'initialAmountModeCategories' => 'setInitialAmountModeCategories',
        'discountedAmountModeCategories' => 'setDiscountedAmountModeCategories',
        'redeemablesApplicationMode' => 'setRedeemablesApplicationMode',
        'redeemablesSortingRule' => 'setRedeemablesSortingRule',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'exclusiveCategories' => 'getExclusiveCategories',
        'jointCategories' => 'getJointCategories',
        'redeemablesLimit' => 'getRedeemablesLimit',
        'applicableRedeemablesLimit' => 'getApplicableRedeemablesLimit',
        'applicableRedeemablesPerCategoryLimit' => 'getApplicableRedeemablesPerCategoryLimit',
        'applicableExclusiveRedeemablesLimit' => 'getApplicableExclusiveRedeemablesLimit',
        'applicableExclusiveRedeemablesPerCategoryLimit' => 'getApplicableExclusiveRedeemablesPerCategoryLimit',
        'discountCalculationMode' => 'getDiscountCalculationMode',
        'initialAmountModeCategories' => 'getInitialAmountModeCategories',
        'discountedAmountModeCategories' => 'getDiscountedAmountModeCategories',
        'redeemablesApplicationMode' => 'getRedeemablesApplicationMode',
        'redeemablesSortingRule' => 'getRedeemablesSortingRule',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt'
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

    public const DISCOUNT_CALCULATION_MODE_INITIAL_AMOUNT = 'INITIAL_AMOUNT';
    public const DISCOUNT_CALCULATION_MODE_DISCOUNTED_AMOUNT = 'DISCOUNTED_AMOUNT';
    public const REDEEMABLES_APPLICATION_MODE_ALL = 'ALL';
    public const REDEEMABLES_APPLICATION_MODE_PARTIAL = 'PARTIAL';
    public const REDEEMABLES_SORTING_RULE_CATEGORY_HIERARCHY = 'CATEGORY_HIERARCHY';
    public const REDEEMABLES_SORTING_RULE_REQUESTED_ORDER = 'REQUESTED_ORDER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDiscountCalculationModeAllowableValues()
    {
        return [
            self::DISCOUNT_CALCULATION_MODE_INITIAL_AMOUNT,
            self::DISCOUNT_CALCULATION_MODE_DISCOUNTED_AMOUNT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRedeemablesApplicationModeAllowableValues()
    {
        return [
            self::REDEEMABLES_APPLICATION_MODE_ALL,
            self::REDEEMABLES_APPLICATION_MODE_PARTIAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRedeemablesSortingRuleAllowableValues()
    {
        return [
            self::REDEEMABLES_SORTING_RULE_CATEGORY_HIERARCHY,
            self::REDEEMABLES_SORTING_RULE_REQUESTED_ORDER,
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
        $this->setIfExists('exclusiveCategories', $data ?? [], null);
        $this->setIfExists('jointCategories', $data ?? [], null);
        $this->setIfExists('redeemablesLimit', $data ?? [], null);
        $this->setIfExists('applicableRedeemablesLimit', $data ?? [], null);
        $this->setIfExists('applicableRedeemablesPerCategoryLimit', $data ?? [], null);
        $this->setIfExists('applicableExclusiveRedeemablesLimit', $data ?? [], null);
        $this->setIfExists('applicableExclusiveRedeemablesPerCategoryLimit', $data ?? [], null);
        $this->setIfExists('discountCalculationMode', $data ?? [], null);
        $this->setIfExists('initialAmountModeCategories', $data ?? [], null);
        $this->setIfExists('discountedAmountModeCategories', $data ?? [], null);
        $this->setIfExists('redeemablesApplicationMode', $data ?? [], null);
        $this->setIfExists('redeemablesSortingRule', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
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

        if (!is_null($this->container['redeemablesLimit']) && ($this->container['redeemablesLimit'] > 30)) {
            $invalidProperties[] = "invalid value for 'redeemablesLimit', must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['redeemablesLimit']) && ($this->container['redeemablesLimit'] < 1)) {
            $invalidProperties[] = "invalid value for 'redeemablesLimit', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['applicableRedeemablesLimit']) && ($this->container['applicableRedeemablesLimit'] < 1)) {
            $invalidProperties[] = "invalid value for 'applicableRedeemablesLimit', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['applicableExclusiveRedeemablesLimit']) && ($this->container['applicableExclusiveRedeemablesLimit'] > 5)) {
            $invalidProperties[] = "invalid value for 'applicableExclusiveRedeemablesLimit', must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['applicableExclusiveRedeemablesLimit']) && ($this->container['applicableExclusiveRedeemablesLimit'] < 1)) {
            $invalidProperties[] = "invalid value for 'applicableExclusiveRedeemablesLimit', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getDiscountCalculationModeAllowableValues();
        if (!is_null($this->container['discountCalculationMode']) && !in_array($this->container['discountCalculationMode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'discountCalculationMode', must be one of '%s'",
                $this->container['discountCalculationMode'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRedeemablesApplicationModeAllowableValues();
        if (!is_null($this->container['redeemablesApplicationMode']) && !in_array($this->container['redeemablesApplicationMode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'redeemablesApplicationMode', must be one of '%s'",
                $this->container['redeemablesApplicationMode'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRedeemablesSortingRuleAllowableValues();
        if (!is_null($this->container['redeemablesSortingRule']) && !in_array($this->container['redeemablesSortingRule'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'redeemablesSortingRule', must be one of '%s'",
                $this->container['redeemablesSortingRule'],
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
     * @param string|null $id The unique identifier of the stacking rules.
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
     * Gets exclusiveCategories
     *
     * @return string[]|null
     */
    public function getExclusiveCategories()
    {
        return $this->container['exclusiveCategories'];
    }

    /**
     * Sets exclusiveCategories
     *
     * @param string[]|null $exclusiveCategories Lists the IDs of the categories that are exclusive.
     *
     * @return self
     */
    public function setExclusiveCategories($exclusiveCategories)
    {
        if (is_null($exclusiveCategories)) {
            array_push($this->openAPINullablesSetToNull, 'exclusiveCategories');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('exclusiveCategories', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['exclusiveCategories'] = $exclusiveCategories;

        return $this;
    }

    /**
     * Gets jointCategories
     *
     * @return string[]|null
     */
    public function getJointCategories()
    {
        return $this->container['jointCategories'];
    }

    /**
     * Sets jointCategories
     *
     * @param string[]|null $jointCategories Lists the IDs of the categories that are joint.
     *
     * @return self
     */
    public function setJointCategories($jointCategories)
    {
        if (is_null($jointCategories)) {
            array_push($this->openAPINullablesSetToNull, 'jointCategories');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('jointCategories', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['jointCategories'] = $jointCategories;

        return $this;
    }

    /**
     * Gets redeemablesLimit
     *
     * @return int|null
     */
    public function getRedeemablesLimit()
    {
        return $this->container['redeemablesLimit'];
    }

    /**
     * Sets redeemablesLimit
     *
     * @param int|null $redeemablesLimit Defines how many redeemables can be sent to Voucherify for validation at the same time.
     *
     * @return self
     */
    public function setRedeemablesLimit($redeemablesLimit)
    {
        if (is_null($redeemablesLimit)) {
            array_push($this->openAPINullablesSetToNull, 'redeemablesLimit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redeemablesLimit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($redeemablesLimit) && ($redeemablesLimit > 30)) {
            throw new \InvalidArgumentException('invalid value for $redeemablesLimit when calling ManagementProjectsStackingRulesGetResponseBody., must be smaller than or equal to 30.');
        }
        if (!is_null($redeemablesLimit) && ($redeemablesLimit < 1)) {
            throw new \InvalidArgumentException('invalid value for $redeemablesLimit when calling ManagementProjectsStackingRulesGetResponseBody., must be bigger than or equal to 1.');
        }

        $this->container['redeemablesLimit'] = $redeemablesLimit;

        return $this;
    }

    /**
     * Gets applicableRedeemablesLimit
     *
     * @return int|null
     */
    public function getApplicableRedeemablesLimit()
    {
        return $this->container['applicableRedeemablesLimit'];
    }

    /**
     * Sets applicableRedeemablesLimit
     *
     * @param int|null $applicableRedeemablesLimit Defines how many redeemables can be applied at the same time. The number must be less than or equal to `\"redeemables_limit\"`.
     *
     * @return self
     */
    public function setApplicableRedeemablesLimit($applicableRedeemablesLimit)
    {
        if (is_null($applicableRedeemablesLimit)) {
            array_push($this->openAPINullablesSetToNull, 'applicableRedeemablesLimit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('applicableRedeemablesLimit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($applicableRedeemablesLimit) && ($applicableRedeemablesLimit < 1)) {
            throw new \InvalidArgumentException('invalid value for $applicableRedeemablesLimit when calling ManagementProjectsStackingRulesGetResponseBody., must be bigger than or equal to 1.');
        }

        $this->container['applicableRedeemablesLimit'] = $applicableRedeemablesLimit;

        return $this;
    }

    /**
     * Gets applicableRedeemablesPerCategoryLimit
     *
     * @return int|null
     */
    public function getApplicableRedeemablesPerCategoryLimit()
    {
        return $this->container['applicableRedeemablesPerCategoryLimit'];
    }

    /**
     * Sets applicableRedeemablesPerCategoryLimit
     *
     * @param int|null $applicableRedeemablesPerCategoryLimit Defines how many redeemables with the same category can be applied at the same time. The number must be less than or equal to `\"applicable_redeemables_limit\"`.
     *
     * @return self
     */
    public function setApplicableRedeemablesPerCategoryLimit($applicableRedeemablesPerCategoryLimit)
    {
        if (is_null($applicableRedeemablesPerCategoryLimit)) {
            array_push($this->openAPINullablesSetToNull, 'applicableRedeemablesPerCategoryLimit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('applicableRedeemablesPerCategoryLimit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['applicableRedeemablesPerCategoryLimit'] = $applicableRedeemablesPerCategoryLimit;

        return $this;
    }

    /**
     * Gets applicableExclusiveRedeemablesLimit
     *
     * @return int|null
     */
    public function getApplicableExclusiveRedeemablesLimit()
    {
        return $this->container['applicableExclusiveRedeemablesLimit'];
    }

    /**
     * Sets applicableExclusiveRedeemablesLimit
     *
     * @param int|null $applicableExclusiveRedeemablesLimit Defines how many redeemables with an assigned exclusive category can be applied at the same time.
     *
     * @return self
     */
    public function setApplicableExclusiveRedeemablesLimit($applicableExclusiveRedeemablesLimit)
    {
        if (is_null($applicableExclusiveRedeemablesLimit)) {
            array_push($this->openAPINullablesSetToNull, 'applicableExclusiveRedeemablesLimit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('applicableExclusiveRedeemablesLimit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($applicableExclusiveRedeemablesLimit) && ($applicableExclusiveRedeemablesLimit > 5)) {
            throw new \InvalidArgumentException('invalid value for $applicableExclusiveRedeemablesLimit when calling ManagementProjectsStackingRulesGetResponseBody., must be smaller than or equal to 5.');
        }
        if (!is_null($applicableExclusiveRedeemablesLimit) && ($applicableExclusiveRedeemablesLimit < 1)) {
            throw new \InvalidArgumentException('invalid value for $applicableExclusiveRedeemablesLimit when calling ManagementProjectsStackingRulesGetResponseBody., must be bigger than or equal to 1.');
        }

        $this->container['applicableExclusiveRedeemablesLimit'] = $applicableExclusiveRedeemablesLimit;

        return $this;
    }

    /**
     * Gets applicableExclusiveRedeemablesPerCategoryLimit
     *
     * @return int|null
     */
    public function getApplicableExclusiveRedeemablesPerCategoryLimit()
    {
        return $this->container['applicableExclusiveRedeemablesPerCategoryLimit'];
    }

    /**
     * Sets applicableExclusiveRedeemablesPerCategoryLimit
     *
     * @param int|null $applicableExclusiveRedeemablesPerCategoryLimit Defines how many exclusive redeemables with the same category can be applied at the same time. The number must be less than or equal to `\"applicable_exclusive_redeemables_limit\"`.
     *
     * @return self
     */
    public function setApplicableExclusiveRedeemablesPerCategoryLimit($applicableExclusiveRedeemablesPerCategoryLimit)
    {
        if (is_null($applicableExclusiveRedeemablesPerCategoryLimit)) {
            array_push($this->openAPINullablesSetToNull, 'applicableExclusiveRedeemablesPerCategoryLimit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('applicableExclusiveRedeemablesPerCategoryLimit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['applicableExclusiveRedeemablesPerCategoryLimit'] = $applicableExclusiveRedeemablesPerCategoryLimit;

        return $this;
    }

    /**
     * Gets discountCalculationMode
     *
     * @return string|null
     */
    public function getDiscountCalculationMode()
    {
        return $this->container['discountCalculationMode'];
    }

    /**
     * Sets discountCalculationMode
     *
     * @param string|null $discountCalculationMode Defines if the discounts are applied by taking into account the initial order amount or the discounted order amount.
     *
     * @return self
     */
    public function setDiscountCalculationMode($discountCalculationMode)
    {
        if (is_null($discountCalculationMode)) {
            array_push($this->openAPINullablesSetToNull, 'discountCalculationMode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('discountCalculationMode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getDiscountCalculationModeAllowableValues();
        if (!is_null($discountCalculationMode) && !in_array($discountCalculationMode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'discountCalculationMode', must be one of '%s'",
                    $discountCalculationMode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['discountCalculationMode'] = $discountCalculationMode;

        return $this;
    }

    /**
     * Gets initialAmountModeCategories
     *
     * @return string[]|null
     */
    public function getInitialAmountModeCategories()
    {
        return $this->container['initialAmountModeCategories'];
    }

    /**
     * Sets initialAmountModeCategories
     *
     * @param string[]|null $initialAmountModeCategories Lists the IDs of the categories that apply a discount based on the initial amount.
     *
     * @return self
     */
    public function setInitialAmountModeCategories($initialAmountModeCategories)
    {
        if (is_null($initialAmountModeCategories)) {
            array_push($this->openAPINullablesSetToNull, 'initialAmountModeCategories');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('initialAmountModeCategories', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['initialAmountModeCategories'] = $initialAmountModeCategories;

        return $this;
    }

    /**
     * Gets discountedAmountModeCategories
     *
     * @return string[]|null
     */
    public function getDiscountedAmountModeCategories()
    {
        return $this->container['discountedAmountModeCategories'];
    }

    /**
     * Sets discountedAmountModeCategories
     *
     * @param string[]|null $discountedAmountModeCategories Lists the IDs of the categories that apply a discount based on the discounted amount.
     *
     * @return self
     */
    public function setDiscountedAmountModeCategories($discountedAmountModeCategories)
    {
        if (is_null($discountedAmountModeCategories)) {
            array_push($this->openAPINullablesSetToNull, 'discountedAmountModeCategories');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('discountedAmountModeCategories', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['discountedAmountModeCategories'] = $discountedAmountModeCategories;

        return $this;
    }

    /**
     * Gets redeemablesApplicationMode
     *
     * @return string|null
     */
    public function getRedeemablesApplicationMode()
    {
        return $this->container['redeemablesApplicationMode'];
    }

    /**
     * Sets redeemablesApplicationMode
     *
     * @param string|null $redeemablesApplicationMode Defines the application mode for redeemables. `\"ALL\"` means that all redeemables must be validated for the redemption to be successful. `\"PARTIAL\"` means that only those redeemables that can be validated will be redeemed. The redeemables that fail validaton will be skipped.
     *
     * @return self
     */
    public function setRedeemablesApplicationMode($redeemablesApplicationMode)
    {
        if (is_null($redeemablesApplicationMode)) {
            array_push($this->openAPINullablesSetToNull, 'redeemablesApplicationMode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redeemablesApplicationMode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getRedeemablesApplicationModeAllowableValues();
        if (!is_null($redeemablesApplicationMode) && !in_array($redeemablesApplicationMode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'redeemablesApplicationMode', must be one of '%s'",
                    $redeemablesApplicationMode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['redeemablesApplicationMode'] = $redeemablesApplicationMode;

        return $this;
    }

    /**
     * Gets redeemablesSortingRule
     *
     * @return string|null
     */
    public function getRedeemablesSortingRule()
    {
        return $this->container['redeemablesSortingRule'];
    }

    /**
     * Sets redeemablesSortingRule
     *
     * @param string|null $redeemablesSortingRule Defines the sorting rule for redeemables. `\"CATEGORY_HIERARCHY\"` means that redeemables are applied with the order established by the hierarchy of the categories. `\"REQUESTED_ORDER\"` means that redeemables are applied with the order established in the request.
     *
     * @return self
     */
    public function setRedeemablesSortingRule($redeemablesSortingRule)
    {
        if (is_null($redeemablesSortingRule)) {
            array_push($this->openAPINullablesSetToNull, 'redeemablesSortingRule');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redeemablesSortingRule', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getRedeemablesSortingRuleAllowableValues();
        if (!is_null($redeemablesSortingRule) && !in_array($redeemablesSortingRule, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'redeemablesSortingRule', must be one of '%s'",
                    $redeemablesSortingRule,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['redeemablesSortingRule'] = $redeemablesSortingRule;

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
     * @param \DateTime|null $createdAt Timestamp representing the date and time when the stacking rules were created. The value for this parameter is shown in the ISO 8601 format.
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
     * @param \DateTime|null $updatedAt Timestamp representing the date and time when the stacking rules were updated. The value for this parameter is shown in the ISO 8601 format.
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


