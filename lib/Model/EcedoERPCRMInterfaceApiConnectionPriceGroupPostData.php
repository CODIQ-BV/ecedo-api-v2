<?php
/**
 * EcedoERPCRMInterfaceApiConnectionPriceGroupPostData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ecedo.ERP.UI.Web Core
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1-core
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.29
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * EcedoERPCRMInterfaceApiConnectionPriceGroupPostData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiConnectionPriceGroupPostData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.ConnectionPriceGroupPostData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'price_component_group' => 'string',
        'prices' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiPricePostData[]',
        'connection_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'price_component_group' => null,
        'prices' => null,
        'connection_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'price_component_group' => 'PriceComponentGroup',
        'prices' => 'Prices',
        'connection_id' => 'ConnectionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'price_component_group' => 'setPriceComponentGroup',
        'prices' => 'setPrices',
        'connection_id' => 'setConnectionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'price_component_group' => 'getPriceComponentGroup',
        'prices' => 'getPrices',
        'connection_id' => 'getConnectionId'
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
        return self::$swaggerModelName;
    }

    const PRICE_COMPONENT_GROUP_LEVERING = 'Levering';
    const PRICE_COMPONENT_GROUP_LEVERING_SURCHARGE = 'LeveringSurcharge';
    const PRICE_COMPONENT_GROUP_SHARES = 'Shares';
    const PRICE_COMPONENT_GROUP_TERUGLEVERING = 'Teruglevering';
    const PRICE_COMPONENT_GROUP_TERUGLEVERING_SURCHARGE = 'TerugleveringSurcharge';
    const PRICE_COMPONENT_GROUP_FIXED_FEE = 'FixedFee';
    const PRICE_COMPONENT_GROUP_SURCHARGE = 'Surcharge';
    const PRICE_COMPONENT_GROUP_TAX = 'Tax';
    const PRICE_COMPONENT_GROUP_NETWORK_COSTS = 'NetworkCosts';
    const PRICE_COMPONENT_GROUP_DISCOUNT = 'Discount';
    const PRICE_COMPONENT_GROUP_ADVANCE_PAYMENT = 'AdvancePayment';
    const PRICE_COMPONENT_GROUP_FEE = 'Fee';
    const PRICE_COMPONENT_GROUP_DEPOSIT = 'Deposit';
    const PRICE_COMPONENT_GROUP_OTHER = 'Other';
    const PRICE_COMPONENT_GROUP_CORRECTION = 'Correction';
    const PRICE_COMPONENT_GROUP_TRANSPORT_COSTS_FIXED_FEE = 'TransportCostsFixedFee';
    const PRICE_COMPONENT_GROUP_EV_CHARGE_CARD_FEE = 'EvChargeCardFee';
    const PRICE_COMPONENT_GROUP_RESELLER_PREMIUM_LEVERING = 'ResellerPremiumLevering';
    const PRICE_COMPONENT_GROUP_RESELLER_PREMIUM_TERUG_LEVERING = 'ResellerPremiumTerugLevering';
    const PRICE_COMPONENT_GROUP_RESELLER_PREMIUM_FIXED_FEE = 'ResellerPremiumFixedFee';
    const PRICE_COMPONENT_GROUP_LEVERING_MARKUP = 'LeveringMarkup';
    const PRICE_COMPONENT_GROUP_TERUGLEVERING_MARKUP = 'TerugleveringMarkup';
    const PRICE_COMPONENT_GROUP_ENERGY_PURCHASE = 'EnergyPurchase';
    const PRICE_COMPONENT_GROUP_EV_CHARGING = 'EvCharging';
    const PRICE_COMPONENT_GROUP_RECONCILIATION = 'Reconciliation';
    const PRICE_COMPONENT_GROUP_CERTIFICATE_SALE = 'CertificateSale';
    const PRICE_COMPONENT_GROUP_CURTAILMENT = 'Curtailment';
    const PRICE_COMPONENT_GROUP_TERUGLEVERING_EXCESS = 'TerugleveringExcess';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPriceComponentGroupAllowableValues()
    {
        return [
            self::PRICE_COMPONENT_GROUP_LEVERING,
            self::PRICE_COMPONENT_GROUP_LEVERING_SURCHARGE,
            self::PRICE_COMPONENT_GROUP_SHARES,
            self::PRICE_COMPONENT_GROUP_TERUGLEVERING,
            self::PRICE_COMPONENT_GROUP_TERUGLEVERING_SURCHARGE,
            self::PRICE_COMPONENT_GROUP_FIXED_FEE,
            self::PRICE_COMPONENT_GROUP_SURCHARGE,
            self::PRICE_COMPONENT_GROUP_TAX,
            self::PRICE_COMPONENT_GROUP_NETWORK_COSTS,
            self::PRICE_COMPONENT_GROUP_DISCOUNT,
            self::PRICE_COMPONENT_GROUP_ADVANCE_PAYMENT,
            self::PRICE_COMPONENT_GROUP_FEE,
            self::PRICE_COMPONENT_GROUP_DEPOSIT,
            self::PRICE_COMPONENT_GROUP_OTHER,
            self::PRICE_COMPONENT_GROUP_CORRECTION,
            self::PRICE_COMPONENT_GROUP_TRANSPORT_COSTS_FIXED_FEE,
            self::PRICE_COMPONENT_GROUP_EV_CHARGE_CARD_FEE,
            self::PRICE_COMPONENT_GROUP_RESELLER_PREMIUM_LEVERING,
            self::PRICE_COMPONENT_GROUP_RESELLER_PREMIUM_TERUG_LEVERING,
            self::PRICE_COMPONENT_GROUP_RESELLER_PREMIUM_FIXED_FEE,
            self::PRICE_COMPONENT_GROUP_LEVERING_MARKUP,
            self::PRICE_COMPONENT_GROUP_TERUGLEVERING_MARKUP,
            self::PRICE_COMPONENT_GROUP_ENERGY_PURCHASE,
            self::PRICE_COMPONENT_GROUP_EV_CHARGING,
            self::PRICE_COMPONENT_GROUP_RECONCILIATION,
            self::PRICE_COMPONENT_GROUP_CERTIFICATE_SALE,
            self::PRICE_COMPONENT_GROUP_CURTAILMENT,
            self::PRICE_COMPONENT_GROUP_TERUGLEVERING_EXCESS,
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
        $this->container['price_component_group'] = isset($data['price_component_group']) ? $data['price_component_group'] : null;
        $this->container['prices'] = isset($data['prices']) ? $data['prices'] : null;
        $this->container['connection_id'] = isset($data['connection_id']) ? $data['connection_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPriceComponentGroupAllowableValues();
        if (!is_null($this->container['price_component_group']) && !in_array($this->container['price_component_group'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'price_component_group', must be one of '%s'",
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
     * Gets price_component_group
     *
     * @return string
     */
    public function getPriceComponentGroup()
    {
        return $this->container['price_component_group'];
    }

    /**
     * Sets price_component_group
     *
     * @param string $price_component_group price_component_group
     *
     * @return $this
     */
    public function setPriceComponentGroup($price_component_group)
    {
        $allowedValues = $this->getPriceComponentGroupAllowableValues();
        if (!is_null($price_component_group) && !in_array($price_component_group, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'price_component_group', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['price_component_group'] = $price_component_group;

        return $this;
    }

    /**
     * Gets prices
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiPricePostData[]
     */
    public function getPrices()
    {
        return $this->container['prices'];
    }

    /**
     * Sets prices
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiPricePostData[] $prices prices
     *
     * @return $this
     */
    public function setPrices($prices)
    {
        $this->container['prices'] = $prices;

        return $this;
    }

    /**
     * Gets connection_id
     *
     * @return string
     */
    public function getConnectionId()
    {
        return $this->container['connection_id'];
    }

    /**
     * Sets connection_id
     *
     * @param string $connection_id connection_id
     *
     * @return $this
     */
    public function setConnectionId($connection_id)
    {
        $this->container['connection_id'] = $connection_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


