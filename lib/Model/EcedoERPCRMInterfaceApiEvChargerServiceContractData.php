<?php
/**
 * EcedoERPCRMInterfaceApiEvChargerServiceContractData
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
 * EcedoERPCRMInterfaceApiEvChargerServiceContractData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiEvChargerServiceContractData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.EvChargerServiceContractData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ev_charger_id' => 'string',
        'status' => 'string',
        'status_localized' => 'string',
        'contract_id' => 'string',
        'cluster_connection_group_id' => 'string',
        'service_type' => 'string',
        'agreement_date' => '\DateTime',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'service_fee' => 'double',
        'vat_inclusive' => 'bool',
        'comment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ev_charger_id' => null,
        'status' => null,
        'status_localized' => null,
        'contract_id' => null,
        'cluster_connection_group_id' => null,
        'service_type' => null,
        'agreement_date' => 'date',
        'start_date' => 'date',
        'end_date' => 'date',
        'service_fee' => 'double',
        'vat_inclusive' => null,
        'comment' => null
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
        'ev_charger_id' => 'EvChargerId',
        'status' => 'Status',
        'status_localized' => 'StatusLocalized',
        'contract_id' => 'ContractId',
        'cluster_connection_group_id' => 'ClusterConnectionGroupId',
        'service_type' => 'ServiceType',
        'agreement_date' => 'AgreementDate',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'service_fee' => 'ServiceFee',
        'vat_inclusive' => 'VatInclusive',
        'comment' => 'Comment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ev_charger_id' => 'setEvChargerId',
        'status' => 'setStatus',
        'status_localized' => 'setStatusLocalized',
        'contract_id' => 'setContractId',
        'cluster_connection_group_id' => 'setClusterConnectionGroupId',
        'service_type' => 'setServiceType',
        'agreement_date' => 'setAgreementDate',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'service_fee' => 'setServiceFee',
        'vat_inclusive' => 'setVatInclusive',
        'comment' => 'setComment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ev_charger_id' => 'getEvChargerId',
        'status' => 'getStatus',
        'status_localized' => 'getStatusLocalized',
        'contract_id' => 'getContractId',
        'cluster_connection_group_id' => 'getClusterConnectionGroupId',
        'service_type' => 'getServiceType',
        'agreement_date' => 'getAgreementDate',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'service_fee' => 'getServiceFee',
        'vat_inclusive' => 'getVatInclusive',
        'comment' => 'getComment'
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

    const STATUS_PROVISIONAL = 'Provisional';
    const STATUS_ACTIVE = 'Active';
    const STATUS_CANCELLED = 'Cancelled';
    const STATUS_ENDED = 'Ended';
    const STATUS_WAIT_FOR_APPROVAL = 'WaitForApproval';
    const STATUS_PROPOSED = 'Proposed';
    const STATUS_FINALIZED = 'Finalized';
    const SERVICE_TYPE_DATA = 'Data';
    const SERVICE_TYPE_MAINTENANCE = 'Maintenance';
    const SERVICE_TYPE_LOAD_BALANCING = 'LoadBalancing';
    const SERVICE_TYPE_EXTERNAL_SETTLEMENT = 'ExternalSettlement';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PROVISIONAL,
            self::STATUS_ACTIVE,
            self::STATUS_CANCELLED,
            self::STATUS_ENDED,
            self::STATUS_WAIT_FOR_APPROVAL,
            self::STATUS_PROPOSED,
            self::STATUS_FINALIZED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getServiceTypeAllowableValues()
    {
        return [
            self::SERVICE_TYPE_DATA,
            self::SERVICE_TYPE_MAINTENANCE,
            self::SERVICE_TYPE_LOAD_BALANCING,
            self::SERVICE_TYPE_EXTERNAL_SETTLEMENT,
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
        $this->container['ev_charger_id'] = isset($data['ev_charger_id']) ? $data['ev_charger_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_localized'] = isset($data['status_localized']) ? $data['status_localized'] : null;
        $this->container['contract_id'] = isset($data['contract_id']) ? $data['contract_id'] : null;
        $this->container['cluster_connection_group_id'] = isset($data['cluster_connection_group_id']) ? $data['cluster_connection_group_id'] : null;
        $this->container['service_type'] = isset($data['service_type']) ? $data['service_type'] : null;
        $this->container['agreement_date'] = isset($data['agreement_date']) ? $data['agreement_date'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['service_fee'] = isset($data['service_fee']) ? $data['service_fee'] : null;
        $this->container['vat_inclusive'] = isset($data['vat_inclusive']) ? $data['vat_inclusive'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
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
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getServiceTypeAllowableValues();
        if (!is_null($this->container['service_type']) && !in_array($this->container['service_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'service_type', must be one of '%s'",
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
     * Gets ev_charger_id
     *
     * @return string
     */
    public function getEvChargerId()
    {
        return $this->container['ev_charger_id'];
    }

    /**
     * Sets ev_charger_id
     *
     * @param string $ev_charger_id ev_charger_id
     *
     * @return $this
     */
    public function setEvChargerId($ev_charger_id)
    {
        $this->container['ev_charger_id'] = $ev_charger_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_localized
     *
     * @return string
     */
    public function getStatusLocalized()
    {
        return $this->container['status_localized'];
    }

    /**
     * Sets status_localized
     *
     * @param string $status_localized status_localized
     *
     * @return $this
     */
    public function setStatusLocalized($status_localized)
    {
        $this->container['status_localized'] = $status_localized;

        return $this;
    }

    /**
     * Gets contract_id
     *
     * @return string
     */
    public function getContractId()
    {
        return $this->container['contract_id'];
    }

    /**
     * Sets contract_id
     *
     * @param string $contract_id contract_id
     *
     * @return $this
     */
    public function setContractId($contract_id)
    {
        $this->container['contract_id'] = $contract_id;

        return $this;
    }

    /**
     * Gets cluster_connection_group_id
     *
     * @return string
     */
    public function getClusterConnectionGroupId()
    {
        return $this->container['cluster_connection_group_id'];
    }

    /**
     * Sets cluster_connection_group_id
     *
     * @param string $cluster_connection_group_id cluster_connection_group_id
     *
     * @return $this
     */
    public function setClusterConnectionGroupId($cluster_connection_group_id)
    {
        $this->container['cluster_connection_group_id'] = $cluster_connection_group_id;

        return $this;
    }

    /**
     * Gets service_type
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->container['service_type'];
    }

    /**
     * Sets service_type
     *
     * @param string $service_type service_type
     *
     * @return $this
     */
    public function setServiceType($service_type)
    {
        $allowedValues = $this->getServiceTypeAllowableValues();
        if (!is_null($service_type) && !in_array($service_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'service_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['service_type'] = $service_type;

        return $this;
    }

    /**
     * Gets agreement_date
     *
     * @return \DateTime
     */
    public function getAgreementDate()
    {
        return $this->container['agreement_date'];
    }

    /**
     * Sets agreement_date
     *
     * @param \DateTime $agreement_date agreement_date
     *
     * @return $this
     */
    public function setAgreementDate($agreement_date)
    {
        $this->container['agreement_date'] = $agreement_date;

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
     * Gets service_fee
     *
     * @return double
     */
    public function getServiceFee()
    {
        return $this->container['service_fee'];
    }

    /**
     * Sets service_fee
     *
     * @param double $service_fee service_fee
     *
     * @return $this
     */
    public function setServiceFee($service_fee)
    {
        $this->container['service_fee'] = $service_fee;

        return $this;
    }

    /**
     * Gets vat_inclusive
     *
     * @return bool
     */
    public function getVatInclusive()
    {
        return $this->container['vat_inclusive'];
    }

    /**
     * Sets vat_inclusive
     *
     * @param bool $vat_inclusive vat_inclusive
     *
     * @return $this
     */
    public function setVatInclusive($vat_inclusive)
    {
        $this->container['vat_inclusive'] = $vat_inclusive;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

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


