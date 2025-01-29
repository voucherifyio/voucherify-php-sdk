<?php
/**
 * LoyaltyCardTransactionDetails
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
 * LoyaltyCardTransactionDetails Class Doc Comment
 *
 * @category Class
 * @description Contains the detailed information about the transaction.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LoyaltyCardTransactionDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoyaltyCardTransactionDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'balance' => '\OpenAPI\Client\Model\LoyaltyCardTransactionDetailsBalance',
        'order' => '\OpenAPI\Client\Model\LoyaltyCardTransactionDetailsOrder',
        'event' => '\OpenAPI\Client\Model\LoyaltyCardTransactionDetailsEvent',
        'earningRule' => '\OpenAPI\Client\Model\LoyaltyCardTransactionDetailsEarningRule',
        'segment' => '\OpenAPI\Client\Model\LoyaltyCardTransactionDetailsSegment',
        'loyaltyTier' => '\OpenAPI\Client\Model\LoyaltyCardTransactionDetailsLoyaltyTier',
        'redemption' => '\OpenAPI\Client\Model\LoyaltyCardTransactionDetailsRedemption',
        'rollback' => '\OpenAPI\Client\Model\LoyaltyCardTransactionDetailsRollback',
        'customEvent' => '\OpenAPI\Client\Model\LoyaltyCardTransactionDetailsCustomEvent',
        'eventSchema' => '\OpenAPI\Client\Model\LoyaltyCardTransactionDetailsEventSchema',
        'holderLoyaltyTier' => '\OpenAPI\Client\Model\LoyaltyCardTransactionDetailsHolderLoyaltyTier',
        'pendingPoints' => '\OpenAPI\Client\Model\LoyaltyPendingPoints',
        'reward' => '\OpenAPI\Client\Model\LoyaltyCardTransactionDetailsReward',
        'sourceVoucher' => '\OpenAPI\Client\Model\SimpleVoucher',
        'destinationVoucher' => '\OpenAPI\Client\Model\SimpleVoucher'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'balance' => null,
        'order' => null,
        'event' => null,
        'earningRule' => null,
        'segment' => null,
        'loyaltyTier' => null,
        'redemption' => null,
        'rollback' => null,
        'customEvent' => null,
        'eventSchema' => null,
        'holderLoyaltyTier' => null,
        'pendingPoints' => null,
        'reward' => null,
        'sourceVoucher' => null,
        'destinationVoucher' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'balance' => false,
		'order' => true,
		'event' => true,
		'earningRule' => true,
		'segment' => true,
		'loyaltyTier' => true,
		'redemption' => true,
		'rollback' => true,
		'customEvent' => true,
		'eventSchema' => true,
		'holderLoyaltyTier' => true,
		'pendingPoints' => false,
		'reward' => true,
		'sourceVoucher' => false,
		'destinationVoucher' => false
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
        'balance' => 'balance',
        'order' => 'order',
        'event' => 'event',
        'earningRule' => 'earning_rule',
        'segment' => 'segment',
        'loyaltyTier' => 'loyalty_tier',
        'redemption' => 'redemption',
        'rollback' => 'rollback',
        'customEvent' => 'custom_event',
        'eventSchema' => 'event_schema',
        'holderLoyaltyTier' => 'holder_loyalty_tier',
        'pendingPoints' => 'pending_points',
        'reward' => 'reward',
        'sourceVoucher' => 'source_voucher',
        'destinationVoucher' => 'destination_voucher'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'balance' => 'setBalance',
        'order' => 'setOrder',
        'event' => 'setEvent',
        'earningRule' => 'setEarningRule',
        'segment' => 'setSegment',
        'loyaltyTier' => 'setLoyaltyTier',
        'redemption' => 'setRedemption',
        'rollback' => 'setRollback',
        'customEvent' => 'setCustomEvent',
        'eventSchema' => 'setEventSchema',
        'holderLoyaltyTier' => 'setHolderLoyaltyTier',
        'pendingPoints' => 'setPendingPoints',
        'reward' => 'setReward',
        'sourceVoucher' => 'setSourceVoucher',
        'destinationVoucher' => 'setDestinationVoucher'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'balance' => 'getBalance',
        'order' => 'getOrder',
        'event' => 'getEvent',
        'earningRule' => 'getEarningRule',
        'segment' => 'getSegment',
        'loyaltyTier' => 'getLoyaltyTier',
        'redemption' => 'getRedemption',
        'rollback' => 'getRollback',
        'customEvent' => 'getCustomEvent',
        'eventSchema' => 'getEventSchema',
        'holderLoyaltyTier' => 'getHolderLoyaltyTier',
        'pendingPoints' => 'getPendingPoints',
        'reward' => 'getReward',
        'sourceVoucher' => 'getSourceVoucher',
        'destinationVoucher' => 'getDestinationVoucher'
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
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('event', $data ?? [], null);
        $this->setIfExists('earningRule', $data ?? [], null);
        $this->setIfExists('segment', $data ?? [], null);
        $this->setIfExists('loyaltyTier', $data ?? [], null);
        $this->setIfExists('redemption', $data ?? [], null);
        $this->setIfExists('rollback', $data ?? [], null);
        $this->setIfExists('customEvent', $data ?? [], null);
        $this->setIfExists('eventSchema', $data ?? [], null);
        $this->setIfExists('holderLoyaltyTier', $data ?? [], null);
        $this->setIfExists('pendingPoints', $data ?? [], null);
        $this->setIfExists('reward', $data ?? [], null);
        $this->setIfExists('sourceVoucher', $data ?? [], null);
        $this->setIfExists('destinationVoucher', $data ?? [], null);
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
     * Gets balance
     *
     * @return \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsBalance|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsBalance|null $balance balance
     *
     * @return self
     */
    public function setBalance($balance)
    {
        if (is_null($balance)) {
            throw new \InvalidArgumentException('non-nullable balance cannot be null');
        }
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsOrder|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsOrder|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            array_push($this->openAPINullablesSetToNull, 'order');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('order', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets event
     *
     * @return \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsEvent|null
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsEvent|null $event event
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
     * Gets earningRule
     *
     * @return \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsEarningRule|null
     */
    public function getEarningRule()
    {
        return $this->container['earningRule'];
    }

    /**
     * Sets earningRule
     *
     * @param \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsEarningRule|null $earningRule earningRule
     *
     * @return self
     */
    public function setEarningRule($earningRule)
    {
        if (is_null($earningRule)) {
            array_push($this->openAPINullablesSetToNull, 'earningRule');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('earningRule', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['earningRule'] = $earningRule;

        return $this;
    }

    /**
     * Gets segment
     *
     * @return \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsSegment|null
     */
    public function getSegment()
    {
        return $this->container['segment'];
    }

    /**
     * Sets segment
     *
     * @param \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsSegment|null $segment segment
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
     * @return \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsLoyaltyTier|null
     */
    public function getLoyaltyTier()
    {
        return $this->container['loyaltyTier'];
    }

    /**
     * Sets loyaltyTier
     *
     * @param \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsLoyaltyTier|null $loyaltyTier loyaltyTier
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
     * Gets redemption
     *
     * @return \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsRedemption|null
     */
    public function getRedemption()
    {
        return $this->container['redemption'];
    }

    /**
     * Sets redemption
     *
     * @param \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsRedemption|null $redemption redemption
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
     * Gets rollback
     *
     * @return \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsRollback|null
     */
    public function getRollback()
    {
        return $this->container['rollback'];
    }

    /**
     * Sets rollback
     *
     * @param \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsRollback|null $rollback rollback
     *
     * @return self
     */
    public function setRollback($rollback)
    {
        if (is_null($rollback)) {
            array_push($this->openAPINullablesSetToNull, 'rollback');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rollback', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rollback'] = $rollback;

        return $this;
    }

    /**
     * Gets customEvent
     *
     * @return \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsCustomEvent|null
     */
    public function getCustomEvent()
    {
        return $this->container['customEvent'];
    }

    /**
     * Sets customEvent
     *
     * @param \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsCustomEvent|null $customEvent customEvent
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
     * Gets eventSchema
     *
     * @return \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsEventSchema|null
     */
    public function getEventSchema()
    {
        return $this->container['eventSchema'];
    }

    /**
     * Sets eventSchema
     *
     * @param \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsEventSchema|null $eventSchema eventSchema
     *
     * @return self
     */
    public function setEventSchema($eventSchema)
    {
        if (is_null($eventSchema)) {
            array_push($this->openAPINullablesSetToNull, 'eventSchema');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('eventSchema', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['eventSchema'] = $eventSchema;

        return $this;
    }

    /**
     * Gets holderLoyaltyTier
     *
     * @return \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsHolderLoyaltyTier|null
     */
    public function getHolderLoyaltyTier()
    {
        return $this->container['holderLoyaltyTier'];
    }

    /**
     * Sets holderLoyaltyTier
     *
     * @param \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsHolderLoyaltyTier|null $holderLoyaltyTier holderLoyaltyTier
     *
     * @return self
     */
    public function setHolderLoyaltyTier($holderLoyaltyTier)
    {
        if (is_null($holderLoyaltyTier)) {
            array_push($this->openAPINullablesSetToNull, 'holderLoyaltyTier');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('holderLoyaltyTier', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['holderLoyaltyTier'] = $holderLoyaltyTier;

        return $this;
    }

    /**
     * Gets pendingPoints
     *
     * @return \OpenAPI\Client\Model\LoyaltyPendingPoints|null
     */
    public function getPendingPoints()
    {
        return $this->container['pendingPoints'];
    }

    /**
     * Sets pendingPoints
     *
     * @param \OpenAPI\Client\Model\LoyaltyPendingPoints|null $pendingPoints pendingPoints
     *
     * @return self
     */
    public function setPendingPoints($pendingPoints)
    {
        if (is_null($pendingPoints)) {
            throw new \InvalidArgumentException('non-nullable pendingPoints cannot be null');
        }
        $this->container['pendingPoints'] = $pendingPoints;

        return $this;
    }

    /**
     * Gets reward
     *
     * @return \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsReward|null
     */
    public function getReward()
    {
        return $this->container['reward'];
    }

    /**
     * Sets reward
     *
     * @param \OpenAPI\Client\Model\LoyaltyCardTransactionDetailsReward|null $reward reward
     *
     * @return self
     */
    public function setReward($reward)
    {
        if (is_null($reward)) {
            array_push($this->openAPINullablesSetToNull, 'reward');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reward', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['reward'] = $reward;

        return $this;
    }

    /**
     * Gets sourceVoucher
     *
     * @return \OpenAPI\Client\Model\SimpleVoucher|null
     */
    public function getSourceVoucher()
    {
        return $this->container['sourceVoucher'];
    }

    /**
     * Sets sourceVoucher
     *
     * @param \OpenAPI\Client\Model\SimpleVoucher|null $sourceVoucher sourceVoucher
     *
     * @return self
     */
    public function setSourceVoucher($sourceVoucher)
    {
        if (is_null($sourceVoucher)) {
            throw new \InvalidArgumentException('non-nullable sourceVoucher cannot be null');
        }
        $this->container['sourceVoucher'] = $sourceVoucher;

        return $this;
    }

    /**
     * Gets destinationVoucher
     *
     * @return \OpenAPI\Client\Model\SimpleVoucher|null
     */
    public function getDestinationVoucher()
    {
        return $this->container['destinationVoucher'];
    }

    /**
     * Sets destinationVoucher
     *
     * @param \OpenAPI\Client\Model\SimpleVoucher|null $destinationVoucher destinationVoucher
     *
     * @return self
     */
    public function setDestinationVoucher($destinationVoucher)
    {
        if (is_null($destinationVoucher)) {
            throw new \InvalidArgumentException('non-nullable destinationVoucher cannot be null');
        }
        $this->container['destinationVoucher'] = $destinationVoucher;

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


