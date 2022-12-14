<?php
/**
 * EcedoERPCRMInterfaceApiConnectionContractPropertyPostData
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
 * EcedoERPCRMInterfaceApiConnectionContractPropertyPostData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiConnectionContractPropertyPostData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.ConnectionContractPropertyPostData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'connection_id' => 'string',
        'contract_property_type' => 'string',
        'contract_property_value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'connection_id' => null,
        'contract_property_type' => null,
        'contract_property_value' => null
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
        'connection_id' => 'ConnectionId',
        'contract_property_type' => 'ContractPropertyType',
        'contract_property_value' => 'ContractPropertyValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'connection_id' => 'setConnectionId',
        'contract_property_type' => 'setContractPropertyType',
        'contract_property_value' => 'setContractPropertyValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'connection_id' => 'getConnectionId',
        'contract_property_type' => 'getContractPropertyType',
        'contract_property_value' => 'getContractPropertyValue'
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

    const CONTRACT_PROPERTY_TYPE_ACTION_DISCOUNT_MOMENT = 'ActionDiscountMoment';
    const CONTRACT_PROPERTY_TYPE_ELECTRICITY_POWER_TYPE = 'ElectricityPowerType';
    const CONTRACT_PROPERTY_TYPE_DEPOSIT_SETTLE_MOMENT = 'DepositSettleMoment';
    const CONTRACT_PROPERTY_TYPE_CHANNEL = 'Channel';
    const CONTRACT_PROPERTY_TYPE_SALES_REFERENCE = 'SalesReference';
    const CONTRACT_PROPERTY_TYPE_FIXED_ODN_PRICE = 'FixedODNPrice';
    const CONTRACT_PROPERTY_TYPE_HAS_TERMINATION_FEE = 'HasTerminationFee';
    const CONTRACT_PROPERTY_TYPE_SETTLEMENT_INVOICE_FREQUENCY = 'SettlementInvoiceFrequency';
    const CONTRACT_PROPERTY_TYPE_HAS_ADVANCE_PAYMENT_CALCULATION = 'HasAdvancePaymentCalculation';
    const CONTRACT_PROPERTY_TYPE_SOLAR_SETTLEMENT_TO_COOPERATION = 'SolarSettlementToCooperation';
    const CONTRACT_PROPERTY_TYPE_HAS_MEMBERSHIP_FEE_LOCAL_ENERGY = 'HasMembershipFeeLocalEnergy';
    const CONTRACT_PROPERTY_TYPE_RESELLER = 'Reseller';
    const CONTRACT_PROPERTY_TYPE_CLIENT_REVENUE_PERCENTAGE = 'ClientRevenuePercentage';
    const CONTRACT_PROPERTY_TYPE_CREDIT_LIMIT = 'CreditLimit';
    const CONTRACT_PROPERTY_TYPE_CAMPAIGN = 'Campaign';
    const CONTRACT_PROPERTY_TYPE_HAS_ADVANCE_PAYMENT_INVOICE_DOCUMENT_PRINT_FEE = 'HasAdvancePaymentInvoiceDocumentPrintFee';
    const CONTRACT_PROPERTY_TYPE_HAS_ADVANCE_PAYMENT_INVOICE_DOCUMENT_GENERATE_FEE = 'HasAdvancePaymentInvoiceDocumentGenerateFee';
    const CONTRACT_PROPERTY_TYPE_CREDIT_INSURANCE_IDENTIFIER = 'CreditInsuranceIdentifier';
    const CONTRACT_PROPERTY_TYPE_HAS_ENERGY_TAX = 'HasEnergyTax';
    const CONTRACT_PROPERTY_TYPE_HAS_COLLECTION_FEES = 'HasCollectionFees';
    const CONTRACT_PROPERTY_TYPE_MAX_ODN_LIMIT_TARIFF = 'MaxODNLimitTariff';
    const CONTRACT_PROPERTY_TYPE_GAS_GREENING_OPTION = 'GasGreeningOption';
    const CONTRACT_PROPERTY_TYPE_ELECTRICITY_GREENING_OPTION = 'ElectricityGreeningOption';
    const CONTRACT_PROPERTY_TYPE_ADVANCE_PAYMENT_SCHEME = 'AdvancePaymentScheme';
    const CONTRACT_PROPERTY_TYPE_NOTICE_PERIOD = 'NoticePeriod';
    const CONTRACT_PROPERTY_TYPE_PURCHASE_ORDER_NUMBER = 'PurchaseOrderNumber';
    const CONTRACT_PROPERTY_TYPE_CURTAILMENT_PROFIT_DISTRIBUTION_KEY = 'CurtailmentProfitDistributionKey';
    const CONTRACT_PROPERTY_TYPE_RENEWAL_DATE = 'RenewalDate';
    const CONTRACT_PROPERTY_TYPE_HAS_ROLLING_DEPOSIT = 'HasRollingDeposit';
    const CONTRACT_PROPERTY_TYPE_HAS_TARIFF_CHANGE_METER_READINGS = 'HasTariffChangeMeterReadings';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContractPropertyTypeAllowableValues()
    {
        return [
            self::CONTRACT_PROPERTY_TYPE_ACTION_DISCOUNT_MOMENT,
            self::CONTRACT_PROPERTY_TYPE_ELECTRICITY_POWER_TYPE,
            self::CONTRACT_PROPERTY_TYPE_DEPOSIT_SETTLE_MOMENT,
            self::CONTRACT_PROPERTY_TYPE_CHANNEL,
            self::CONTRACT_PROPERTY_TYPE_SALES_REFERENCE,
            self::CONTRACT_PROPERTY_TYPE_FIXED_ODN_PRICE,
            self::CONTRACT_PROPERTY_TYPE_HAS_TERMINATION_FEE,
            self::CONTRACT_PROPERTY_TYPE_SETTLEMENT_INVOICE_FREQUENCY,
            self::CONTRACT_PROPERTY_TYPE_HAS_ADVANCE_PAYMENT_CALCULATION,
            self::CONTRACT_PROPERTY_TYPE_SOLAR_SETTLEMENT_TO_COOPERATION,
            self::CONTRACT_PROPERTY_TYPE_HAS_MEMBERSHIP_FEE_LOCAL_ENERGY,
            self::CONTRACT_PROPERTY_TYPE_RESELLER,
            self::CONTRACT_PROPERTY_TYPE_CLIENT_REVENUE_PERCENTAGE,
            self::CONTRACT_PROPERTY_TYPE_CREDIT_LIMIT,
            self::CONTRACT_PROPERTY_TYPE_CAMPAIGN,
            self::CONTRACT_PROPERTY_TYPE_HAS_ADVANCE_PAYMENT_INVOICE_DOCUMENT_PRINT_FEE,
            self::CONTRACT_PROPERTY_TYPE_HAS_ADVANCE_PAYMENT_INVOICE_DOCUMENT_GENERATE_FEE,
            self::CONTRACT_PROPERTY_TYPE_CREDIT_INSURANCE_IDENTIFIER,
            self::CONTRACT_PROPERTY_TYPE_HAS_ENERGY_TAX,
            self::CONTRACT_PROPERTY_TYPE_HAS_COLLECTION_FEES,
            self::CONTRACT_PROPERTY_TYPE_MAX_ODN_LIMIT_TARIFF,
            self::CONTRACT_PROPERTY_TYPE_GAS_GREENING_OPTION,
            self::CONTRACT_PROPERTY_TYPE_ELECTRICITY_GREENING_OPTION,
            self::CONTRACT_PROPERTY_TYPE_ADVANCE_PAYMENT_SCHEME,
            self::CONTRACT_PROPERTY_TYPE_NOTICE_PERIOD,
            self::CONTRACT_PROPERTY_TYPE_PURCHASE_ORDER_NUMBER,
            self::CONTRACT_PROPERTY_TYPE_CURTAILMENT_PROFIT_DISTRIBUTION_KEY,
            self::CONTRACT_PROPERTY_TYPE_RENEWAL_DATE,
            self::CONTRACT_PROPERTY_TYPE_HAS_ROLLING_DEPOSIT,
            self::CONTRACT_PROPERTY_TYPE_HAS_TARIFF_CHANGE_METER_READINGS,
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
        $this->container['connection_id'] = isset($data['connection_id']) ? $data['connection_id'] : null;
        $this->container['contract_property_type'] = isset($data['contract_property_type']) ? $data['contract_property_type'] : null;
        $this->container['contract_property_value'] = isset($data['contract_property_value']) ? $data['contract_property_value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getContractPropertyTypeAllowableValues();
        if (!is_null($this->container['contract_property_type']) && !in_array($this->container['contract_property_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'contract_property_type', must be one of '%s'",
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
     * Gets contract_property_type
     *
     * @return string
     */
    public function getContractPropertyType()
    {
        return $this->container['contract_property_type'];
    }

    /**
     * Sets contract_property_type
     *
     * @param string $contract_property_type contract_property_type
     *
     * @return $this
     */
    public function setContractPropertyType($contract_property_type)
    {
        $allowedValues = $this->getContractPropertyTypeAllowableValues();
        if (!is_null($contract_property_type) && !in_array($contract_property_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'contract_property_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['contract_property_type'] = $contract_property_type;

        return $this;
    }

    /**
     * Gets contract_property_value
     *
     * @return string
     */
    public function getContractPropertyValue()
    {
        return $this->container['contract_property_value'];
    }

    /**
     * Sets contract_property_value
     *
     * @param string $contract_property_value contract_property_value
     *
     * @return $this
     */
    public function setContractPropertyValue($contract_property_value)
    {
        $this->container['contract_property_value'] = $contract_property_value;

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


