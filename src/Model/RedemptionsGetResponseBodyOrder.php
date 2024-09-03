<?php
/**
 * RedemptionsGetResponseBodyOrder
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
 * RedemptionsGetResponseBodyOrder Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RedemptionsGetResponseBodyOrder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RedemptionsGetResponseBodyOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'sourceId' => 'string',
        'status' => 'string',
        'amount' => 'int',
        'initialAmount' => 'int',
        'discountAmount' => 'int',
        'itemsDiscountAmount' => 'int',
        'totalDiscountAmount' => 'int',
        'totalAmount' => 'int',
        'appliedDiscountAmount' => 'int',
        'itemsAppliedDiscountAmount' => 'int',
        'totalAppliedDiscountAmount' => 'int',
        'items' => '\OpenAPI\Client\Model\OrderCalculatedItem[]',
        'metadata' => 'object',
        'object' => 'string',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'customerId' => 'string',
        'referrerId' => 'string',
        'customer' => '\OpenAPI\Client\Model\RedemptionsGetResponseBodyOrderCustomer',
        'referrer' => '\OpenAPI\Client\Model\RedemptionsGetResponseBodyOrderReferrer',
        'redemptions' => 'object'
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
        'sourceId' => null,
        'status' => null,
        'amount' => null,
        'initialAmount' => null,
        'discountAmount' => null,
        'itemsDiscountAmount' => null,
        'totalDiscountAmount' => null,
        'totalAmount' => null,
        'appliedDiscountAmount' => null,
        'itemsAppliedDiscountAmount' => null,
        'totalAppliedDiscountAmount' => null,
        'items' => null,
        'metadata' => null,
        'object' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'customerId' => null,
        'referrerId' => null,
        'customer' => null,
        'referrer' => null,
        'redemptions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'sourceId' => true,
		'status' => true,
		'amount' => true,
		'initialAmount' => true,
		'discountAmount' => true,
		'itemsDiscountAmount' => true,
		'totalDiscountAmount' => true,
		'totalAmount' => true,
		'appliedDiscountAmount' => true,
		'itemsAppliedDiscountAmount' => true,
		'totalAppliedDiscountAmount' => true,
		'items' => true,
		'metadata' => true,
		'object' => true,
		'createdAt' => true,
		'updatedAt' => true,
		'customerId' => true,
		'referrerId' => true,
		'customer' => true,
		'referrer' => true,
		'redemptions' => true
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
        'sourceId' => 'source_id',
        'status' => 'status',
        'amount' => 'amount',
        'initialAmount' => 'initial_amount',
        'discountAmount' => 'discount_amount',
        'itemsDiscountAmount' => 'items_discount_amount',
        'totalDiscountAmount' => 'total_discount_amount',
        'totalAmount' => 'total_amount',
        'appliedDiscountAmount' => 'applied_discount_amount',
        'itemsAppliedDiscountAmount' => 'items_applied_discount_amount',
        'totalAppliedDiscountAmount' => 'total_applied_discount_amount',
        'items' => 'items',
        'metadata' => 'metadata',
        'object' => 'object',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'customerId' => 'customer_id',
        'referrerId' => 'referrer_id',
        'customer' => 'customer',
        'referrer' => 'referrer',
        'redemptions' => 'redemptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sourceId' => 'setSourceId',
        'status' => 'setStatus',
        'amount' => 'setAmount',
        'initialAmount' => 'setInitialAmount',
        'discountAmount' => 'setDiscountAmount',
        'itemsDiscountAmount' => 'setItemsDiscountAmount',
        'totalDiscountAmount' => 'setTotalDiscountAmount',
        'totalAmount' => 'setTotalAmount',
        'appliedDiscountAmount' => 'setAppliedDiscountAmount',
        'itemsAppliedDiscountAmount' => 'setItemsAppliedDiscountAmount',
        'totalAppliedDiscountAmount' => 'setTotalAppliedDiscountAmount',
        'items' => 'setItems',
        'metadata' => 'setMetadata',
        'object' => 'setObject',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'customerId' => 'setCustomerId',
        'referrerId' => 'setReferrerId',
        'customer' => 'setCustomer',
        'referrer' => 'setReferrer',
        'redemptions' => 'setRedemptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sourceId' => 'getSourceId',
        'status' => 'getStatus',
        'amount' => 'getAmount',
        'initialAmount' => 'getInitialAmount',
        'discountAmount' => 'getDiscountAmount',
        'itemsDiscountAmount' => 'getItemsDiscountAmount',
        'totalDiscountAmount' => 'getTotalDiscountAmount',
        'totalAmount' => 'getTotalAmount',
        'appliedDiscountAmount' => 'getAppliedDiscountAmount',
        'itemsAppliedDiscountAmount' => 'getItemsAppliedDiscountAmount',
        'totalAppliedDiscountAmount' => 'getTotalAppliedDiscountAmount',
        'items' => 'getItems',
        'metadata' => 'getMetadata',
        'object' => 'getObject',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'customerId' => 'getCustomerId',
        'referrerId' => 'getReferrerId',
        'customer' => 'getCustomer',
        'referrer' => 'getReferrer',
        'redemptions' => 'getRedemptions'
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

    public const STATUS_CREATED = 'CREATED';
    public const STATUS_PAID = 'PAID';
    public const STATUS_CANCELED = 'CANCELED';
    public const STATUS_FULFILLED = 'FULFILLED';
    public const OBJECT_ORDER = 'order';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATED,
            self::STATUS_PAID,
            self::STATUS_CANCELED,
            self::STATUS_FULFILLED,
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
            self::OBJECT_ORDER,
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
        $this->setIfExists('sourceId', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('initialAmount', $data ?? [], null);
        $this->setIfExists('discountAmount', $data ?? [], null);
        $this->setIfExists('itemsDiscountAmount', $data ?? [], null);
        $this->setIfExists('totalDiscountAmount', $data ?? [], null);
        $this->setIfExists('totalAmount', $data ?? [], null);
        $this->setIfExists('appliedDiscountAmount', $data ?? [], null);
        $this->setIfExists('itemsAppliedDiscountAmount', $data ?? [], null);
        $this->setIfExists('totalAppliedDiscountAmount', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], 'order');
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('customerId', $data ?? [], null);
        $this->setIfExists('referrerId', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('referrer', $data ?? [], null);
        $this->setIfExists('redemptions', $data ?? [], null);
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * @param string|null $id Unique ID assigned by Voucherify of an existing order that will be linked to the redemption of this request.
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
     * Gets sourceId
     *
     * @return string|null
     */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
     * Sets sourceId
     *
     * @param string|null $sourceId Unique source ID of an existing order that will be linked to the redemption of this request.
     *
     * @return self
     */
    public function setSourceId($sourceId)
    {
        if (is_null($sourceId)) {
            array_push($this->openAPINullablesSetToNull, 'sourceId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sourceId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sourceId'] = $sourceId;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The order status.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount A positive integer in the smallest currency unit (e.g. 100 cents for $1.00) representing the total amount of the order. This is the sum of the order items' amounts.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            array_push($this->openAPINullablesSetToNull, 'amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets initialAmount
     *
     * @return int|null
     */
    public function getInitialAmount()
    {
        return $this->container['initialAmount'];
    }

    /**
     * Sets initialAmount
     *
     * @param int|null $initialAmount A positive integer in the smallest currency unit (e.g. 100 cents for $1.00) representing the total amount of the order. This is the sum of the order items' amounts.
     *
     * @return self
     */
    public function setInitialAmount($initialAmount)
    {
        if (is_null($initialAmount)) {
            array_push($this->openAPINullablesSetToNull, 'initialAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('initialAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['initialAmount'] = $initialAmount;

        return $this;
    }

    /**
     * Gets discountAmount
     *
     * @return int|null
     */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
     * Sets discountAmount
     *
     * @param int|null $discountAmount Sum of all order-level discounts applied to the order.
     *
     * @return self
     */
    public function setDiscountAmount($discountAmount)
    {
        if (is_null($discountAmount)) {
            array_push($this->openAPINullablesSetToNull, 'discountAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('discountAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['discountAmount'] = $discountAmount;

        return $this;
    }

    /**
     * Gets itemsDiscountAmount
     *
     * @return int|null
     */
    public function getItemsDiscountAmount()
    {
        return $this->container['itemsDiscountAmount'];
    }

    /**
     * Sets itemsDiscountAmount
     *
     * @param int|null $itemsDiscountAmount Sum of all product-specific discounts applied to the order.
     *
     * @return self
     */
    public function setItemsDiscountAmount($itemsDiscountAmount)
    {
        if (is_null($itemsDiscountAmount)) {
            array_push($this->openAPINullablesSetToNull, 'itemsDiscountAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('itemsDiscountAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['itemsDiscountAmount'] = $itemsDiscountAmount;

        return $this;
    }

    /**
     * Gets totalDiscountAmount
     *
     * @return int|null
     */
    public function getTotalDiscountAmount()
    {
        return $this->container['totalDiscountAmount'];
    }

    /**
     * Sets totalDiscountAmount
     *
     * @param int|null $totalDiscountAmount Sum of all order-level AND all product-specific discounts applied to the order.
     *
     * @return self
     */
    public function setTotalDiscountAmount($totalDiscountAmount)
    {
        if (is_null($totalDiscountAmount)) {
            array_push($this->openAPINullablesSetToNull, 'totalDiscountAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('totalDiscountAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['totalDiscountAmount'] = $totalDiscountAmount;

        return $this;
    }

    /**
     * Gets totalAmount
     *
     * @return int|null
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     *
     * @param int|null $totalAmount Order amount after undoing all the discounts through the rollback redemption.
     *
     * @return self
     */
    public function setTotalAmount($totalAmount)
    {
        if (is_null($totalAmount)) {
            array_push($this->openAPINullablesSetToNull, 'totalAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('totalAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets appliedDiscountAmount
     *
     * @return int|null
     */
    public function getAppliedDiscountAmount()
    {
        return $this->container['appliedDiscountAmount'];
    }

    /**
     * Sets appliedDiscountAmount
     *
     * @param int|null $appliedDiscountAmount This field shows the order-level discount applied.
     *
     * @return self
     */
    public function setAppliedDiscountAmount($appliedDiscountAmount)
    {
        if (is_null($appliedDiscountAmount)) {
            array_push($this->openAPINullablesSetToNull, 'appliedDiscountAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('appliedDiscountAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['appliedDiscountAmount'] = $appliedDiscountAmount;

        return $this;
    }

    /**
     * Gets itemsAppliedDiscountAmount
     *
     * @return int|null
     */
    public function getItemsAppliedDiscountAmount()
    {
        return $this->container['itemsAppliedDiscountAmount'];
    }

    /**
     * Sets itemsAppliedDiscountAmount
     *
     * @param int|null $itemsAppliedDiscountAmount Sum of all product-specific discounts applied in a particular request.   `sum(items, i => i.applied_discount_amount)`
     *
     * @return self
     */
    public function setItemsAppliedDiscountAmount($itemsAppliedDiscountAmount)
    {
        if (is_null($itemsAppliedDiscountAmount)) {
            array_push($this->openAPINullablesSetToNull, 'itemsAppliedDiscountAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('itemsAppliedDiscountAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['itemsAppliedDiscountAmount'] = $itemsAppliedDiscountAmount;

        return $this;
    }

    /**
     * Gets totalAppliedDiscountAmount
     *
     * @return int|null
     */
    public function getTotalAppliedDiscountAmount()
    {
        return $this->container['totalAppliedDiscountAmount'];
    }

    /**
     * Sets totalAppliedDiscountAmount
     *
     * @param int|null $totalAppliedDiscountAmount Sum of all order-level AND all product-specific discounts applied in a particular request.   `total_applied_discount_amount` = `applied_discount_amount` + `items_applied_discount_amount`
     *
     * @return self
     */
    public function setTotalAppliedDiscountAmount($totalAppliedDiscountAmount)
    {
        if (is_null($totalAppliedDiscountAmount)) {
            array_push($this->openAPINullablesSetToNull, 'totalAppliedDiscountAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('totalAppliedDiscountAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['totalAppliedDiscountAmount'] = $totalAppliedDiscountAmount;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Model\OrderCalculatedItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Model\OrderCalculatedItem[]|null $items Array of items applied to the order.
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            array_push($this->openAPINullablesSetToNull, 'items');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('items', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['items'] = $items;

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
     * @param \DateTime|null $createdAt Timestamp representing the date and time when the order was created. The value is shown in the ISO 8601 format.
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
     * @param \DateTime|null $updatedAt Timestamp representing the date and time when the order was last updated in ISO 8601 format.
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
     * @param string|null $customerId Unique customer ID of the customer making the purchase.
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
     * @param string|null $referrerId Unique referrer ID.
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
     * Gets customer
     *
     * @return \OpenAPI\Client\Model\RedemptionsGetResponseBodyOrderCustomer|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \OpenAPI\Client\Model\RedemptionsGetResponseBodyOrderCustomer|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            array_push($this->openAPINullablesSetToNull, 'customer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets referrer
     *
     * @return \OpenAPI\Client\Model\RedemptionsGetResponseBodyOrderReferrer|null
     */
    public function getReferrer()
    {
        return $this->container['referrer'];
    }

    /**
     * Sets referrer
     *
     * @param \OpenAPI\Client\Model\RedemptionsGetResponseBodyOrderReferrer|null $referrer referrer
     *
     * @return self
     */
    public function setReferrer($referrer)
    {
        if (is_null($referrer)) {
            array_push($this->openAPINullablesSetToNull, 'referrer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('referrer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['referrer'] = $referrer;

        return $this;
    }

    /**
     * Gets redemptions
     *
     * @return object|null
     */
    public function getRedemptions()
    {
        return $this->container['redemptions'];
    }

    /**
     * Sets redemptions
     *
     * @param object|null $redemptions redemptions
     *
     * @return self
     */
    public function setRedemptions($redemptions)
    {
        if (is_null($redemptions)) {
            array_push($this->openAPINullablesSetToNull, 'redemptions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redemptions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['redemptions'] = $redemptions;

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


