<?php
/**
 * EcedoERPCRMInterfaceApiDraftAdvancePaymentPostData
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
 * EcedoERPCRMInterfaceApiDraftAdvancePaymentPostData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiDraftAdvancePaymentPostData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.DraftAdvancePaymentPostData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cluster_reference' => 'string',
        'agreement_date' => '\DateTime',
        'reference_date' => '\DateTime',
        'start_date' => '\DateTime',
        'electricity_contract_agreement_date' => '\DateTime',
        'gas_contract_agreement_date' => '\DateTime',
        'electricity_proposition_reference' => 'string',
        'gas_proposition_reference' => 'string',
        'electricity_meelift_proposition_reference' => 'string',
        'gas_meelift_proposition_reference' => 'string',
        'connection_annual_standard_usages' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiDraftAnnualStandardUsageForConnection[]',
        'connection_billing_items' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiDraftBillingItemsForConnection[]',
        'contract_prices' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionPriceGroupPostData[]',
        'contract_properties' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionContractPropertyPostData[]',
        'do_combine_rows' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cluster_reference' => null,
        'agreement_date' => 'date',
        'reference_date' => 'date',
        'start_date' => 'date',
        'electricity_contract_agreement_date' => 'date',
        'gas_contract_agreement_date' => 'date',
        'electricity_proposition_reference' => null,
        'gas_proposition_reference' => null,
        'electricity_meelift_proposition_reference' => null,
        'gas_meelift_proposition_reference' => null,
        'connection_annual_standard_usages' => null,
        'connection_billing_items' => null,
        'contract_prices' => null,
        'contract_properties' => null,
        'do_combine_rows' => null
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
        'cluster_reference' => 'ClusterReference',
        'agreement_date' => 'AgreementDate',
        'reference_date' => 'ReferenceDate',
        'start_date' => 'StartDate',
        'electricity_contract_agreement_date' => 'ElectricityContractAgreementDate',
        'gas_contract_agreement_date' => 'GasContractAgreementDate',
        'electricity_proposition_reference' => 'ElectricityPropositionReference',
        'gas_proposition_reference' => 'GasPropositionReference',
        'electricity_meelift_proposition_reference' => 'ElectricityMeeliftPropositionReference',
        'gas_meelift_proposition_reference' => 'GasMeeliftPropositionReference',
        'connection_annual_standard_usages' => 'ConnectionAnnualStandardUsages',
        'connection_billing_items' => 'ConnectionBillingItems',
        'contract_prices' => 'ContractPrices',
        'contract_properties' => 'ContractProperties',
        'do_combine_rows' => 'DoCombineRows'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cluster_reference' => 'setClusterReference',
        'agreement_date' => 'setAgreementDate',
        'reference_date' => 'setReferenceDate',
        'start_date' => 'setStartDate',
        'electricity_contract_agreement_date' => 'setElectricityContractAgreementDate',
        'gas_contract_agreement_date' => 'setGasContractAgreementDate',
        'electricity_proposition_reference' => 'setElectricityPropositionReference',
        'gas_proposition_reference' => 'setGasPropositionReference',
        'electricity_meelift_proposition_reference' => 'setElectricityMeeliftPropositionReference',
        'gas_meelift_proposition_reference' => 'setGasMeeliftPropositionReference',
        'connection_annual_standard_usages' => 'setConnectionAnnualStandardUsages',
        'connection_billing_items' => 'setConnectionBillingItems',
        'contract_prices' => 'setContractPrices',
        'contract_properties' => 'setContractProperties',
        'do_combine_rows' => 'setDoCombineRows'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cluster_reference' => 'getClusterReference',
        'agreement_date' => 'getAgreementDate',
        'reference_date' => 'getReferenceDate',
        'start_date' => 'getStartDate',
        'electricity_contract_agreement_date' => 'getElectricityContractAgreementDate',
        'gas_contract_agreement_date' => 'getGasContractAgreementDate',
        'electricity_proposition_reference' => 'getElectricityPropositionReference',
        'gas_proposition_reference' => 'getGasPropositionReference',
        'electricity_meelift_proposition_reference' => 'getElectricityMeeliftPropositionReference',
        'gas_meelift_proposition_reference' => 'getGasMeeliftPropositionReference',
        'connection_annual_standard_usages' => 'getConnectionAnnualStandardUsages',
        'connection_billing_items' => 'getConnectionBillingItems',
        'contract_prices' => 'getContractPrices',
        'contract_properties' => 'getContractProperties',
        'do_combine_rows' => 'getDoCombineRows'
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
        $this->container['cluster_reference'] = isset($data['cluster_reference']) ? $data['cluster_reference'] : null;
        $this->container['agreement_date'] = isset($data['agreement_date']) ? $data['agreement_date'] : null;
        $this->container['reference_date'] = isset($data['reference_date']) ? $data['reference_date'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['electricity_contract_agreement_date'] = isset($data['electricity_contract_agreement_date']) ? $data['electricity_contract_agreement_date'] : null;
        $this->container['gas_contract_agreement_date'] = isset($data['gas_contract_agreement_date']) ? $data['gas_contract_agreement_date'] : null;
        $this->container['electricity_proposition_reference'] = isset($data['electricity_proposition_reference']) ? $data['electricity_proposition_reference'] : null;
        $this->container['gas_proposition_reference'] = isset($data['gas_proposition_reference']) ? $data['gas_proposition_reference'] : null;
        $this->container['electricity_meelift_proposition_reference'] = isset($data['electricity_meelift_proposition_reference']) ? $data['electricity_meelift_proposition_reference'] : null;
        $this->container['gas_meelift_proposition_reference'] = isset($data['gas_meelift_proposition_reference']) ? $data['gas_meelift_proposition_reference'] : null;
        $this->container['connection_annual_standard_usages'] = isset($data['connection_annual_standard_usages']) ? $data['connection_annual_standard_usages'] : null;
        $this->container['connection_billing_items'] = isset($data['connection_billing_items']) ? $data['connection_billing_items'] : null;
        $this->container['contract_prices'] = isset($data['contract_prices']) ? $data['contract_prices'] : null;
        $this->container['contract_properties'] = isset($data['contract_properties']) ? $data['contract_properties'] : null;
        $this->container['do_combine_rows'] = isset($data['do_combine_rows']) ? $data['do_combine_rows'] : null;
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
     * Gets cluster_reference
     *
     * @return string
     */
    public function getClusterReference()
    {
        return $this->container['cluster_reference'];
    }

    /**
     * Sets cluster_reference
     *
     * @param string $cluster_reference cluster_reference
     *
     * @return $this
     */
    public function setClusterReference($cluster_reference)
    {
        $this->container['cluster_reference'] = $cluster_reference;

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
     * Gets reference_date
     *
     * @return \DateTime
     */
    public function getReferenceDate()
    {
        return $this->container['reference_date'];
    }

    /**
     * Sets reference_date
     *
     * @param \DateTime $reference_date reference_date
     *
     * @return $this
     */
    public function setReferenceDate($reference_date)
    {
        $this->container['reference_date'] = $reference_date;

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
     * Gets electricity_contract_agreement_date
     *
     * @return \DateTime
     */
    public function getElectricityContractAgreementDate()
    {
        return $this->container['electricity_contract_agreement_date'];
    }

    /**
     * Sets electricity_contract_agreement_date
     *
     * @param \DateTime $electricity_contract_agreement_date electricity_contract_agreement_date
     *
     * @return $this
     */
    public function setElectricityContractAgreementDate($electricity_contract_agreement_date)
    {
        $this->container['electricity_contract_agreement_date'] = $electricity_contract_agreement_date;

        return $this;
    }

    /**
     * Gets gas_contract_agreement_date
     *
     * @return \DateTime
     */
    public function getGasContractAgreementDate()
    {
        return $this->container['gas_contract_agreement_date'];
    }

    /**
     * Sets gas_contract_agreement_date
     *
     * @param \DateTime $gas_contract_agreement_date gas_contract_agreement_date
     *
     * @return $this
     */
    public function setGasContractAgreementDate($gas_contract_agreement_date)
    {
        $this->container['gas_contract_agreement_date'] = $gas_contract_agreement_date;

        return $this;
    }

    /**
     * Gets electricity_proposition_reference
     *
     * @return string
     */
    public function getElectricityPropositionReference()
    {
        return $this->container['electricity_proposition_reference'];
    }

    /**
     * Sets electricity_proposition_reference
     *
     * @param string $electricity_proposition_reference electricity_proposition_reference
     *
     * @return $this
     */
    public function setElectricityPropositionReference($electricity_proposition_reference)
    {
        $this->container['electricity_proposition_reference'] = $electricity_proposition_reference;

        return $this;
    }

    /**
     * Gets gas_proposition_reference
     *
     * @return string
     */
    public function getGasPropositionReference()
    {
        return $this->container['gas_proposition_reference'];
    }

    /**
     * Sets gas_proposition_reference
     *
     * @param string $gas_proposition_reference gas_proposition_reference
     *
     * @return $this
     */
    public function setGasPropositionReference($gas_proposition_reference)
    {
        $this->container['gas_proposition_reference'] = $gas_proposition_reference;

        return $this;
    }

    /**
     * Gets electricity_meelift_proposition_reference
     *
     * @return string
     */
    public function getElectricityMeeliftPropositionReference()
    {
        return $this->container['electricity_meelift_proposition_reference'];
    }

    /**
     * Sets electricity_meelift_proposition_reference
     *
     * @param string $electricity_meelift_proposition_reference electricity_meelift_proposition_reference
     *
     * @return $this
     */
    public function setElectricityMeeliftPropositionReference($electricity_meelift_proposition_reference)
    {
        $this->container['electricity_meelift_proposition_reference'] = $electricity_meelift_proposition_reference;

        return $this;
    }

    /**
     * Gets gas_meelift_proposition_reference
     *
     * @return string
     */
    public function getGasMeeliftPropositionReference()
    {
        return $this->container['gas_meelift_proposition_reference'];
    }

    /**
     * Sets gas_meelift_proposition_reference
     *
     * @param string $gas_meelift_proposition_reference gas_meelift_proposition_reference
     *
     * @return $this
     */
    public function setGasMeeliftPropositionReference($gas_meelift_proposition_reference)
    {
        $this->container['gas_meelift_proposition_reference'] = $gas_meelift_proposition_reference;

        return $this;
    }

    /**
     * Gets connection_annual_standard_usages
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiDraftAnnualStandardUsageForConnection[]
     */
    public function getConnectionAnnualStandardUsages()
    {
        return $this->container['connection_annual_standard_usages'];
    }

    /**
     * Sets connection_annual_standard_usages
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiDraftAnnualStandardUsageForConnection[] $connection_annual_standard_usages connection_annual_standard_usages
     *
     * @return $this
     */
    public function setConnectionAnnualStandardUsages($connection_annual_standard_usages)
    {
        $this->container['connection_annual_standard_usages'] = $connection_annual_standard_usages;

        return $this;
    }

    /**
     * Gets connection_billing_items
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiDraftBillingItemsForConnection[]
     */
    public function getConnectionBillingItems()
    {
        return $this->container['connection_billing_items'];
    }

    /**
     * Sets connection_billing_items
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiDraftBillingItemsForConnection[] $connection_billing_items connection_billing_items
     *
     * @return $this
     */
    public function setConnectionBillingItems($connection_billing_items)
    {
        $this->container['connection_billing_items'] = $connection_billing_items;

        return $this;
    }

    /**
     * Gets contract_prices
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionPriceGroupPostData[]
     */
    public function getContractPrices()
    {
        return $this->container['contract_prices'];
    }

    /**
     * Sets contract_prices
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionPriceGroupPostData[] $contract_prices contract_prices
     *
     * @return $this
     */
    public function setContractPrices($contract_prices)
    {
        $this->container['contract_prices'] = $contract_prices;

        return $this;
    }

    /**
     * Gets contract_properties
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionContractPropertyPostData[]
     */
    public function getContractProperties()
    {
        return $this->container['contract_properties'];
    }

    /**
     * Sets contract_properties
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionContractPropertyPostData[] $contract_properties contract_properties
     *
     * @return $this
     */
    public function setContractProperties($contract_properties)
    {
        $this->container['contract_properties'] = $contract_properties;

        return $this;
    }

    /**
     * Gets do_combine_rows
     *
     * @return bool
     */
    public function getDoCombineRows()
    {
        return $this->container['do_combine_rows'];
    }

    /**
     * Sets do_combine_rows
     *
     * @param bool $do_combine_rows do_combine_rows
     *
     * @return $this
     */
    public function setDoCombineRows($do_combine_rows)
    {
        $this->container['do_combine_rows'] = $do_combine_rows;

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


