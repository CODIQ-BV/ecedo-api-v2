<?php
/**
 * EcedoERPCRMInterfaceApiConnectionPropertyPostData
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
 * EcedoERPCRMInterfaceApiConnectionPropertyPostData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiConnectionPropertyPostData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.ConnectionPropertyPostData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'connection_property_type' => 'string',
        'connection_property_source' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'connection_property_value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'connection_property_type' => null,
        'connection_property_source' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'connection_property_value' => null
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
        'connection_property_type' => 'ConnectionPropertyType',
        'connection_property_source' => 'ConnectionPropertySource',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'connection_property_value' => 'ConnectionPropertyValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'connection_property_type' => 'setConnectionPropertyType',
        'connection_property_source' => 'setConnectionPropertySource',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'connection_property_value' => 'setConnectionPropertyValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'connection_property_type' => 'getConnectionPropertyType',
        'connection_property_source' => 'getConnectionPropertySource',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'connection_property_value' => 'getConnectionPropertyValue'
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

    const CONNECTION_PROPERTY_TYPE_GRID_AREA = 'GridArea';
    const CONNECTION_PROPERTY_TYPE_USAGE_TYPE = 'UsageType';
    const CONNECTION_PROPERTY_TYPE_ELECTRICITY_METERING_METHOD = 'ElectricityMeteringMethod';
    const CONNECTION_PROPERTY_TYPE_GAS_METERING_METHOD = 'GasMeteringMethod';
    const CONNECTION_PROPERTY_TYPE_ELECTRICITY_CAP_TAR = 'ElectricityCapTar';
    const CONNECTION_PROPERTY_TYPE_GAS_CAP_TAR = 'GasCapTar';
    const CONNECTION_PROPERTY_TYPE_MEP = 'MEP';
    const CONNECTION_PROPERTY_TYPE_TYPE_OF_SUPPLY = 'TypeOfSupply';
    const CONNECTION_PROPERTY_TYPE_ELECTRICITY_PROFILE = 'ElectricityProfile';
    const CONNECTION_PROPERTY_TYPE_GAS_PROFILE = 'GasProfile';
    const CONNECTION_PROPERTY_TYPE_SMART_METER_SERVICE = 'SmartMeterService';
    const CONNECTION_PROPERTY_TYPE_ADMINISTRATIVE_STATUS_SMART_METER = 'AdministrativeStatusSmartMeter';
    const CONNECTION_PROPERTY_TYPE_CONTRACTED_CAPACITY = 'ContractedCapacity';
    const CONNECTION_PROPERTY_TYPE_MAX_CONSUMPTION = 'MaxConsumption';
    const CONNECTION_PROPERTY_TYPE_PV = 'PV';
    const CONNECTION_PROPERTY_TYPE_SHIPPER = 'Shipper';
    const CONNECTION_PROPERTY_TYPE_SUPPLIER = 'Supplier';
    const CONNECTION_PROPERTY_TYPE_METER_RESPONSIBLE = 'MeterResponsible';
    const CONNECTION_PROPERTY_TYPE_PHYSICAL_STATUS = 'PhysicalStatus';
    const CONNECTION_PROPERTY_TYPE_ENERGY_DELIVERY_STATUS = 'EnergyDeliveryStatus';
    const CONNECTION_PROPERTY_TYPE_BILL_AS_SINGLE = 'BillAsSingle';
    const CONNECTION_PROPERTY_TYPE_LOCATION_TYPE = 'LocationType';
    const CONNECTION_PROPERTY_TYPE_REQUEST_P4_INTERVAL_READINGS = 'RequestP4IntervalReadings';
    const CONNECTION_PROPERTY_TYPE_REQUEST_P4_DAY_READINGS = 'RequestP4DayReadings';
    const CONNECTION_PROPERTY_TYPE_GRID_OPERATOR = 'GridOperator';
    const CONNECTION_PROPERTY_TYPE_ALLOCATION_METHOD = 'AllocationMethod';
    const CONNECTION_PROPERTY_TYPE_REQUEST_P4_READINGS_FOR_BILLING_ALLOWED = 'RequestP4ReadingsForBillingAllowed';
    const CONNECTION_PROPERTY_TYPE_PRIMARY_ALLOCATION_POINT_EAN = 'PrimaryAllocationPointEAN';
    const CONNECTION_PROPERTY_TYPE_SECONDARY_ALLOCATION_POINTS_EANS = 'SecondaryAllocationPointsEANs';
    const CONNECTION_PROPERTY_TYPE_CUSTOM_LEVERING_PROFILE = 'CustomLeveringProfile';
    const CONNECTION_PROPERTY_TYPE_CUSTOM_TERUGLEVERING_PROFILE = 'CustomTerugleveringProfile';
    const CONNECTION_PROPERTY_TYPE_HAS_ZIP_AREA_ENERGY_TAX_CREDIT = 'HasZipAreaEnergyTaxCredit';
    const CONNECTION_PROPERTY_TYPE_TREAT_AS_CONSUMER = 'TreatAsConsumer';
    const CONNECTION_PROPERTY_TYPE_PHYSICAL_CAPACITY = 'PhysicalCapacity';
    const CONNECTION_PROPERTY_SOURCE_USER = 'User';
    const CONNECTION_PROPERTY_SOURCE_CUSTOMER = 'Customer';
    const CONNECTION_PROPERTY_SOURCE_EAN_CODEBOOK = 'EANCodebook';
    const CONNECTION_PROPERTY_SOURCE_EDSN_MESSAGE = 'EDSNMessage';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConnectionPropertyTypeAllowableValues()
    {
        return [
            self::CONNECTION_PROPERTY_TYPE_GRID_AREA,
            self::CONNECTION_PROPERTY_TYPE_USAGE_TYPE,
            self::CONNECTION_PROPERTY_TYPE_ELECTRICITY_METERING_METHOD,
            self::CONNECTION_PROPERTY_TYPE_GAS_METERING_METHOD,
            self::CONNECTION_PROPERTY_TYPE_ELECTRICITY_CAP_TAR,
            self::CONNECTION_PROPERTY_TYPE_GAS_CAP_TAR,
            self::CONNECTION_PROPERTY_TYPE_MEP,
            self::CONNECTION_PROPERTY_TYPE_TYPE_OF_SUPPLY,
            self::CONNECTION_PROPERTY_TYPE_ELECTRICITY_PROFILE,
            self::CONNECTION_PROPERTY_TYPE_GAS_PROFILE,
            self::CONNECTION_PROPERTY_TYPE_SMART_METER_SERVICE,
            self::CONNECTION_PROPERTY_TYPE_ADMINISTRATIVE_STATUS_SMART_METER,
            self::CONNECTION_PROPERTY_TYPE_CONTRACTED_CAPACITY,
            self::CONNECTION_PROPERTY_TYPE_MAX_CONSUMPTION,
            self::CONNECTION_PROPERTY_TYPE_PV,
            self::CONNECTION_PROPERTY_TYPE_SHIPPER,
            self::CONNECTION_PROPERTY_TYPE_SUPPLIER,
            self::CONNECTION_PROPERTY_TYPE_METER_RESPONSIBLE,
            self::CONNECTION_PROPERTY_TYPE_PHYSICAL_STATUS,
            self::CONNECTION_PROPERTY_TYPE_ENERGY_DELIVERY_STATUS,
            self::CONNECTION_PROPERTY_TYPE_BILL_AS_SINGLE,
            self::CONNECTION_PROPERTY_TYPE_LOCATION_TYPE,
            self::CONNECTION_PROPERTY_TYPE_REQUEST_P4_INTERVAL_READINGS,
            self::CONNECTION_PROPERTY_TYPE_REQUEST_P4_DAY_READINGS,
            self::CONNECTION_PROPERTY_TYPE_GRID_OPERATOR,
            self::CONNECTION_PROPERTY_TYPE_ALLOCATION_METHOD,
            self::CONNECTION_PROPERTY_TYPE_REQUEST_P4_READINGS_FOR_BILLING_ALLOWED,
            self::CONNECTION_PROPERTY_TYPE_PRIMARY_ALLOCATION_POINT_EAN,
            self::CONNECTION_PROPERTY_TYPE_SECONDARY_ALLOCATION_POINTS_EANS,
            self::CONNECTION_PROPERTY_TYPE_CUSTOM_LEVERING_PROFILE,
            self::CONNECTION_PROPERTY_TYPE_CUSTOM_TERUGLEVERING_PROFILE,
            self::CONNECTION_PROPERTY_TYPE_HAS_ZIP_AREA_ENERGY_TAX_CREDIT,
            self::CONNECTION_PROPERTY_TYPE_TREAT_AS_CONSUMER,
            self::CONNECTION_PROPERTY_TYPE_PHYSICAL_CAPACITY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConnectionPropertySourceAllowableValues()
    {
        return [
            self::CONNECTION_PROPERTY_SOURCE_USER,
            self::CONNECTION_PROPERTY_SOURCE_CUSTOMER,
            self::CONNECTION_PROPERTY_SOURCE_EAN_CODEBOOK,
            self::CONNECTION_PROPERTY_SOURCE_EDSN_MESSAGE,
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
        $this->container['connection_property_type'] = isset($data['connection_property_type']) ? $data['connection_property_type'] : null;
        $this->container['connection_property_source'] = isset($data['connection_property_source']) ? $data['connection_property_source'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['connection_property_value'] = isset($data['connection_property_value']) ? $data['connection_property_value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getConnectionPropertyTypeAllowableValues();
        if (!is_null($this->container['connection_property_type']) && !in_array($this->container['connection_property_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'connection_property_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getConnectionPropertySourceAllowableValues();
        if (!is_null($this->container['connection_property_source']) && !in_array($this->container['connection_property_source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'connection_property_source', must be one of '%s'",
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
     * Gets connection_property_type
     *
     * @return string
     */
    public function getConnectionPropertyType()
    {
        return $this->container['connection_property_type'];
    }

    /**
     * Sets connection_property_type
     *
     * @param string $connection_property_type connection_property_type
     *
     * @return $this
     */
    public function setConnectionPropertyType($connection_property_type)
    {
        $allowedValues = $this->getConnectionPropertyTypeAllowableValues();
        if (!is_null($connection_property_type) && !in_array($connection_property_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'connection_property_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['connection_property_type'] = $connection_property_type;

        return $this;
    }

    /**
     * Gets connection_property_source
     *
     * @return string
     */
    public function getConnectionPropertySource()
    {
        return $this->container['connection_property_source'];
    }

    /**
     * Sets connection_property_source
     *
     * @param string $connection_property_source connection_property_source
     *
     * @return $this
     */
    public function setConnectionPropertySource($connection_property_source)
    {
        $allowedValues = $this->getConnectionPropertySourceAllowableValues();
        if (!is_null($connection_property_source) && !in_array($connection_property_source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'connection_property_source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['connection_property_source'] = $connection_property_source;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets connection_property_value
     *
     * @return string
     */
    public function getConnectionPropertyValue()
    {
        return $this->container['connection_property_value'];
    }

    /**
     * Sets connection_property_value
     *
     * @param string $connection_property_value connection_property_value
     *
     * @return $this
     */
    public function setConnectionPropertyValue($connection_property_value)
    {
        $this->container['connection_property_value'] = $connection_property_value;

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

