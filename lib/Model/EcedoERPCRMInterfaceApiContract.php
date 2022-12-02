<?php
/**
 * EcedoERPCRMInterfaceApiContract
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
 * EcedoERPCRMInterfaceApiContract Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiContract implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.Contract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'start_reason' => 'string',
        'start_reason_localized' => 'string',
        'end_reason' => 'string',
        'end_reason_localized' => 'string',
        'meelift_contract_id' => 'string',
        'channel' => 'string',
        'sales_reference' => 'string',
        'has_advance_payment' => 'string',
        'has_advance_payment_localized' => 'string',
        'invoice_frequency' => 'string',
        'invoice_frequency_localized' => 'string',
        'reseller_organization_id' => 'string',
        'cancellation_reason' => 'string',
        'cancellation_reason_localized' => 'string',
        'contract_id' => 'string',
        'reference' => 'string',
        'agreement_date' => '\DateTime',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'original_end_date' => '\DateTime',
        'proposition_id' => 'string',
        'proposition_reference' => 'string',
        'proposition_description' => 'string',
        'proposition_duration' => 'int',
        'proposition_pricing_type' => 'string',
        'proposition_pricing_type_localized' => 'string',
        'status' => 'string',
        'status_localized' => 'string',
        'comment' => 'string',
        'proposal_valid_until' => '\DateTime',
        'organization_id' => 'string',
        'contract_properties' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiContractProperty[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'start_reason' => null,
        'start_reason_localized' => null,
        'end_reason' => null,
        'end_reason_localized' => null,
        'meelift_contract_id' => 'uuid',
        'channel' => null,
        'sales_reference' => null,
        'has_advance_payment' => null,
        'has_advance_payment_localized' => null,
        'invoice_frequency' => null,
        'invoice_frequency_localized' => null,
        'reseller_organization_id' => 'uuid',
        'cancellation_reason' => null,
        'cancellation_reason_localized' => null,
        'contract_id' => null,
        'reference' => null,
        'agreement_date' => 'date',
        'start_date' => 'date',
        'end_date' => 'date',
        'original_end_date' => 'date',
        'proposition_id' => null,
        'proposition_reference' => null,
        'proposition_description' => null,
        'proposition_duration' => 'int32',
        'proposition_pricing_type' => null,
        'proposition_pricing_type_localized' => null,
        'status' => null,
        'status_localized' => null,
        'comment' => null,
        'proposal_valid_until' => 'date',
        'organization_id' => null,
        'contract_properties' => null
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
        'start_reason' => 'StartReason',
        'start_reason_localized' => 'StartReasonLocalized',
        'end_reason' => 'EndReason',
        'end_reason_localized' => 'EndReasonLocalized',
        'meelift_contract_id' => 'MeeliftContractId',
        'channel' => 'Channel',
        'sales_reference' => 'SalesReference',
        'has_advance_payment' => 'HasAdvancePayment',
        'has_advance_payment_localized' => 'HasAdvancePaymentLocalized',
        'invoice_frequency' => 'InvoiceFrequency',
        'invoice_frequency_localized' => 'InvoiceFrequencyLocalized',
        'reseller_organization_id' => 'ResellerOrganizationId',
        'cancellation_reason' => 'CancellationReason',
        'cancellation_reason_localized' => 'CancellationReasonLocalized',
        'contract_id' => 'ContractId',
        'reference' => 'Reference',
        'agreement_date' => 'AgreementDate',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'original_end_date' => 'OriginalEndDate',
        'proposition_id' => 'PropositionId',
        'proposition_reference' => 'PropositionReference',
        'proposition_description' => 'PropositionDescription',
        'proposition_duration' => 'PropositionDuration',
        'proposition_pricing_type' => 'PropositionPricingType',
        'proposition_pricing_type_localized' => 'PropositionPricingTypeLocalized',
        'status' => 'Status',
        'status_localized' => 'StatusLocalized',
        'comment' => 'Comment',
        'proposal_valid_until' => 'ProposalValidUntil',
        'organization_id' => 'OrganizationId',
        'contract_properties' => 'ContractProperties'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_reason' => 'setStartReason',
        'start_reason_localized' => 'setStartReasonLocalized',
        'end_reason' => 'setEndReason',
        'end_reason_localized' => 'setEndReasonLocalized',
        'meelift_contract_id' => 'setMeeliftContractId',
        'channel' => 'setChannel',
        'sales_reference' => 'setSalesReference',
        'has_advance_payment' => 'setHasAdvancePayment',
        'has_advance_payment_localized' => 'setHasAdvancePaymentLocalized',
        'invoice_frequency' => 'setInvoiceFrequency',
        'invoice_frequency_localized' => 'setInvoiceFrequencyLocalized',
        'reseller_organization_id' => 'setResellerOrganizationId',
        'cancellation_reason' => 'setCancellationReason',
        'cancellation_reason_localized' => 'setCancellationReasonLocalized',
        'contract_id' => 'setContractId',
        'reference' => 'setReference',
        'agreement_date' => 'setAgreementDate',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'original_end_date' => 'setOriginalEndDate',
        'proposition_id' => 'setPropositionId',
        'proposition_reference' => 'setPropositionReference',
        'proposition_description' => 'setPropositionDescription',
        'proposition_duration' => 'setPropositionDuration',
        'proposition_pricing_type' => 'setPropositionPricingType',
        'proposition_pricing_type_localized' => 'setPropositionPricingTypeLocalized',
        'status' => 'setStatus',
        'status_localized' => 'setStatusLocalized',
        'comment' => 'setComment',
        'proposal_valid_until' => 'setProposalValidUntil',
        'organization_id' => 'setOrganizationId',
        'contract_properties' => 'setContractProperties'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_reason' => 'getStartReason',
        'start_reason_localized' => 'getStartReasonLocalized',
        'end_reason' => 'getEndReason',
        'end_reason_localized' => 'getEndReasonLocalized',
        'meelift_contract_id' => 'getMeeliftContractId',
        'channel' => 'getChannel',
        'sales_reference' => 'getSalesReference',
        'has_advance_payment' => 'getHasAdvancePayment',
        'has_advance_payment_localized' => 'getHasAdvancePaymentLocalized',
        'invoice_frequency' => 'getInvoiceFrequency',
        'invoice_frequency_localized' => 'getInvoiceFrequencyLocalized',
        'reseller_organization_id' => 'getResellerOrganizationId',
        'cancellation_reason' => 'getCancellationReason',
        'cancellation_reason_localized' => 'getCancellationReasonLocalized',
        'contract_id' => 'getContractId',
        'reference' => 'getReference',
        'agreement_date' => 'getAgreementDate',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'original_end_date' => 'getOriginalEndDate',
        'proposition_id' => 'getPropositionId',
        'proposition_reference' => 'getPropositionReference',
        'proposition_description' => 'getPropositionDescription',
        'proposition_duration' => 'getPropositionDuration',
        'proposition_pricing_type' => 'getPropositionPricingType',
        'proposition_pricing_type_localized' => 'getPropositionPricingTypeLocalized',
        'status' => 'getStatus',
        'status_localized' => 'getStatusLocalized',
        'comment' => 'getComment',
        'proposal_valid_until' => 'getProposalValidUntil',
        'organization_id' => 'getOrganizationId',
        'contract_properties' => 'getContractProperties'
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

    const CANCELLATION_REASON_WITHIN_COOLING_DOWN_PERIOD = 'WithinCoolingDownPeriod';
    const CANCELLATION_REASON_NON_PAYMENT = 'NonPayment';
    const CANCELLATION_REASON_MISREPRESENTATION = 'Misrepresentation';
    const CANCELLATION_REASON_INVALID_SWITCH_IN = 'InvalidSwitchIn';
    const CANCELLATION_REASON_CONTRACT_TAKEOVER = 'ContractTakeover';
    const CANCELLATION_REASON_MOVE = 'Move';
    const CANCELLATION_REASON_CANCELLATION_WITHOUT_TERMINATION_FEE = 'CancellationWithoutTerminationFee';
    const CANCELLATION_REASON_DISSATISFIED = 'Dissatisfied';
    const CANCELLATION_REASON_NOT_CREDITWORTHY = 'NotCreditworthy';
    const CANCELLATION_REASON_WRONG_CONNECTION = 'WrongConnection';
    const PROPOSITION_PRICING_TYPE_FIXED = 'Fixed';
    const PROPOSITION_PRICING_TYPE_VARIABLE = 'Variable';
    const PROPOSITION_PRICING_TYPE_MARKET_PRICE_VARIABLE = 'MarketPriceVariable';
    const PROPOSITION_PRICING_TYPE_MEAN_DAY_MARKET_PRICE_VARIABLE = 'MeanDayMarketPriceVariable';
    const PROPOSITION_PRICING_TYPE_MEAN_MONTH_MARKET_PRICE_VARIABLE = 'MeanMonthMarketPriceVariable';
    const PROPOSITION_PRICING_TYPE_FUTURE_YEAR_MARKET_PRICE_FIXED = 'FutureYearMarketPriceFixed';
    const PROPOSITION_PRICING_TYPE_HYBRID_ENDEX = 'HybridEndex';
    const PROPOSITION_PRICING_TYPE_FULL_ENDEX = 'FullEndex';
    const PROPOSITION_PRICING_TYPE_UNWEIGHTED_MEAN_MARKET_PRICE = 'UnweightedMeanMarketPrice';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCancellationReasonAllowableValues()
    {
        return [
            self::CANCELLATION_REASON_WITHIN_COOLING_DOWN_PERIOD,
            self::CANCELLATION_REASON_NON_PAYMENT,
            self::CANCELLATION_REASON_MISREPRESENTATION,
            self::CANCELLATION_REASON_INVALID_SWITCH_IN,
            self::CANCELLATION_REASON_CONTRACT_TAKEOVER,
            self::CANCELLATION_REASON_MOVE,
            self::CANCELLATION_REASON_CANCELLATION_WITHOUT_TERMINATION_FEE,
            self::CANCELLATION_REASON_DISSATISFIED,
            self::CANCELLATION_REASON_NOT_CREDITWORTHY,
            self::CANCELLATION_REASON_WRONG_CONNECTION,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPropositionPricingTypeAllowableValues()
    {
        return [
            self::PROPOSITION_PRICING_TYPE_FIXED,
            self::PROPOSITION_PRICING_TYPE_VARIABLE,
            self::PROPOSITION_PRICING_TYPE_MARKET_PRICE_VARIABLE,
            self::PROPOSITION_PRICING_TYPE_MEAN_DAY_MARKET_PRICE_VARIABLE,
            self::PROPOSITION_PRICING_TYPE_MEAN_MONTH_MARKET_PRICE_VARIABLE,
            self::PROPOSITION_PRICING_TYPE_FUTURE_YEAR_MARKET_PRICE_FIXED,
            self::PROPOSITION_PRICING_TYPE_HYBRID_ENDEX,
            self::PROPOSITION_PRICING_TYPE_FULL_ENDEX,
            self::PROPOSITION_PRICING_TYPE_UNWEIGHTED_MEAN_MARKET_PRICE,
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
        $this->container['start_reason'] = isset($data['start_reason']) ? $data['start_reason'] : null;
        $this->container['start_reason_localized'] = isset($data['start_reason_localized']) ? $data['start_reason_localized'] : null;
        $this->container['end_reason'] = isset($data['end_reason']) ? $data['end_reason'] : null;
        $this->container['end_reason_localized'] = isset($data['end_reason_localized']) ? $data['end_reason_localized'] : null;
        $this->container['meelift_contract_id'] = isset($data['meelift_contract_id']) ? $data['meelift_contract_id'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['sales_reference'] = isset($data['sales_reference']) ? $data['sales_reference'] : null;
        $this->container['has_advance_payment'] = isset($data['has_advance_payment']) ? $data['has_advance_payment'] : null;
        $this->container['has_advance_payment_localized'] = isset($data['has_advance_payment_localized']) ? $data['has_advance_payment_localized'] : null;
        $this->container['invoice_frequency'] = isset($data['invoice_frequency']) ? $data['invoice_frequency'] : null;
        $this->container['invoice_frequency_localized'] = isset($data['invoice_frequency_localized']) ? $data['invoice_frequency_localized'] : null;
        $this->container['reseller_organization_id'] = isset($data['reseller_organization_id']) ? $data['reseller_organization_id'] : null;
        $this->container['cancellation_reason'] = isset($data['cancellation_reason']) ? $data['cancellation_reason'] : null;
        $this->container['cancellation_reason_localized'] = isset($data['cancellation_reason_localized']) ? $data['cancellation_reason_localized'] : null;
        $this->container['contract_id'] = isset($data['contract_id']) ? $data['contract_id'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['agreement_date'] = isset($data['agreement_date']) ? $data['agreement_date'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['original_end_date'] = isset($data['original_end_date']) ? $data['original_end_date'] : null;
        $this->container['proposition_id'] = isset($data['proposition_id']) ? $data['proposition_id'] : null;
        $this->container['proposition_reference'] = isset($data['proposition_reference']) ? $data['proposition_reference'] : null;
        $this->container['proposition_description'] = isset($data['proposition_description']) ? $data['proposition_description'] : null;
        $this->container['proposition_duration'] = isset($data['proposition_duration']) ? $data['proposition_duration'] : null;
        $this->container['proposition_pricing_type'] = isset($data['proposition_pricing_type']) ? $data['proposition_pricing_type'] : null;
        $this->container['proposition_pricing_type_localized'] = isset($data['proposition_pricing_type_localized']) ? $data['proposition_pricing_type_localized'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_localized'] = isset($data['status_localized']) ? $data['status_localized'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['proposal_valid_until'] = isset($data['proposal_valid_until']) ? $data['proposal_valid_until'] : null;
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['contract_properties'] = isset($data['contract_properties']) ? $data['contract_properties'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCancellationReasonAllowableValues();
        if (!is_null($this->container['cancellation_reason']) && !in_array($this->container['cancellation_reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cancellation_reason', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPropositionPricingTypeAllowableValues();
        if (!is_null($this->container['proposition_pricing_type']) && !in_array($this->container['proposition_pricing_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'proposition_pricing_type', must be one of '%s'",
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
     * Gets start_reason
     *
     * @return string
     */
    public function getStartReason()
    {
        return $this->container['start_reason'];
    }

    /**
     * Sets start_reason
     *
     * @param string $start_reason start_reason
     *
     * @return $this
     */
    public function setStartReason($start_reason)
    {
        $this->container['start_reason'] = $start_reason;

        return $this;
    }

    /**
     * Gets start_reason_localized
     *
     * @return string
     */
    public function getStartReasonLocalized()
    {
        return $this->container['start_reason_localized'];
    }

    /**
     * Sets start_reason_localized
     *
     * @param string $start_reason_localized start_reason_localized
     *
     * @return $this
     */
    public function setStartReasonLocalized($start_reason_localized)
    {
        $this->container['start_reason_localized'] = $start_reason_localized;

        return $this;
    }

    /**
     * Gets end_reason
     *
     * @return string
     */
    public function getEndReason()
    {
        return $this->container['end_reason'];
    }

    /**
     * Sets end_reason
     *
     * @param string $end_reason end_reason
     *
     * @return $this
     */
    public function setEndReason($end_reason)
    {
        $this->container['end_reason'] = $end_reason;

        return $this;
    }

    /**
     * Gets end_reason_localized
     *
     * @return string
     */
    public function getEndReasonLocalized()
    {
        return $this->container['end_reason_localized'];
    }

    /**
     * Sets end_reason_localized
     *
     * @param string $end_reason_localized end_reason_localized
     *
     * @return $this
     */
    public function setEndReasonLocalized($end_reason_localized)
    {
        $this->container['end_reason_localized'] = $end_reason_localized;

        return $this;
    }

    /**
     * Gets meelift_contract_id
     *
     * @return string
     */
    public function getMeeliftContractId()
    {
        return $this->container['meelift_contract_id'];
    }

    /**
     * Sets meelift_contract_id
     *
     * @param string $meelift_contract_id meelift_contract_id
     *
     * @return $this
     */
    public function setMeeliftContractId($meelift_contract_id)
    {
        $this->container['meelift_contract_id'] = $meelift_contract_id;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string $channel channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets sales_reference
     *
     * @return string
     */
    public function getSalesReference()
    {
        return $this->container['sales_reference'];
    }

    /**
     * Sets sales_reference
     *
     * @param string $sales_reference sales_reference
     *
     * @return $this
     */
    public function setSalesReference($sales_reference)
    {
        $this->container['sales_reference'] = $sales_reference;

        return $this;
    }

    /**
     * Gets has_advance_payment
     *
     * @return string
     */
    public function getHasAdvancePayment()
    {
        return $this->container['has_advance_payment'];
    }

    /**
     * Sets has_advance_payment
     *
     * @param string $has_advance_payment has_advance_payment
     *
     * @return $this
     */
    public function setHasAdvancePayment($has_advance_payment)
    {
        $this->container['has_advance_payment'] = $has_advance_payment;

        return $this;
    }

    /**
     * Gets has_advance_payment_localized
     *
     * @return string
     */
    public function getHasAdvancePaymentLocalized()
    {
        return $this->container['has_advance_payment_localized'];
    }

    /**
     * Sets has_advance_payment_localized
     *
     * @param string $has_advance_payment_localized has_advance_payment_localized
     *
     * @return $this
     */
    public function setHasAdvancePaymentLocalized($has_advance_payment_localized)
    {
        $this->container['has_advance_payment_localized'] = $has_advance_payment_localized;

        return $this;
    }

    /**
     * Gets invoice_frequency
     *
     * @return string
     */
    public function getInvoiceFrequency()
    {
        return $this->container['invoice_frequency'];
    }

    /**
     * Sets invoice_frequency
     *
     * @param string $invoice_frequency invoice_frequency
     *
     * @return $this
     */
    public function setInvoiceFrequency($invoice_frequency)
    {
        $this->container['invoice_frequency'] = $invoice_frequency;

        return $this;
    }

    /**
     * Gets invoice_frequency_localized
     *
     * @return string
     */
    public function getInvoiceFrequencyLocalized()
    {
        return $this->container['invoice_frequency_localized'];
    }

    /**
     * Sets invoice_frequency_localized
     *
     * @param string $invoice_frequency_localized invoice_frequency_localized
     *
     * @return $this
     */
    public function setInvoiceFrequencyLocalized($invoice_frequency_localized)
    {
        $this->container['invoice_frequency_localized'] = $invoice_frequency_localized;

        return $this;
    }

    /**
     * Gets reseller_organization_id
     *
     * @return string
     */
    public function getResellerOrganizationId()
    {
        return $this->container['reseller_organization_id'];
    }

    /**
     * Sets reseller_organization_id
     *
     * @param string $reseller_organization_id reseller_organization_id
     *
     * @return $this
     */
    public function setResellerOrganizationId($reseller_organization_id)
    {
        $this->container['reseller_organization_id'] = $reseller_organization_id;

        return $this;
    }

    /**
     * Gets cancellation_reason
     *
     * @return string
     */
    public function getCancellationReason()
    {
        return $this->container['cancellation_reason'];
    }

    /**
     * Sets cancellation_reason
     *
     * @param string $cancellation_reason cancellation_reason
     *
     * @return $this
     */
    public function setCancellationReason($cancellation_reason)
    {
        $allowedValues = $this->getCancellationReasonAllowableValues();
        if (!is_null($cancellation_reason) && !in_array($cancellation_reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'cancellation_reason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cancellation_reason'] = $cancellation_reason;

        return $this;
    }

    /**
     * Gets cancellation_reason_localized
     *
     * @return string
     */
    public function getCancellationReasonLocalized()
    {
        return $this->container['cancellation_reason_localized'];
    }

    /**
     * Sets cancellation_reason_localized
     *
     * @param string $cancellation_reason_localized cancellation_reason_localized
     *
     * @return $this
     */
    public function setCancellationReasonLocalized($cancellation_reason_localized)
    {
        $this->container['cancellation_reason_localized'] = $cancellation_reason_localized;

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
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

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
     * Gets original_end_date
     *
     * @return \DateTime
     */
    public function getOriginalEndDate()
    {
        return $this->container['original_end_date'];
    }

    /**
     * Sets original_end_date
     *
     * @param \DateTime $original_end_date original_end_date
     *
     * @return $this
     */
    public function setOriginalEndDate($original_end_date)
    {
        $this->container['original_end_date'] = $original_end_date;

        return $this;
    }

    /**
     * Gets proposition_id
     *
     * @return string
     */
    public function getPropositionId()
    {
        return $this->container['proposition_id'];
    }

    /**
     * Sets proposition_id
     *
     * @param string $proposition_id proposition_id
     *
     * @return $this
     */
    public function setPropositionId($proposition_id)
    {
        $this->container['proposition_id'] = $proposition_id;

        return $this;
    }

    /**
     * Gets proposition_reference
     *
     * @return string
     */
    public function getPropositionReference()
    {
        return $this->container['proposition_reference'];
    }

    /**
     * Sets proposition_reference
     *
     * @param string $proposition_reference proposition_reference
     *
     * @return $this
     */
    public function setPropositionReference($proposition_reference)
    {
        $this->container['proposition_reference'] = $proposition_reference;

        return $this;
    }

    /**
     * Gets proposition_description
     *
     * @return string
     */
    public function getPropositionDescription()
    {
        return $this->container['proposition_description'];
    }

    /**
     * Sets proposition_description
     *
     * @param string $proposition_description proposition_description
     *
     * @return $this
     */
    public function setPropositionDescription($proposition_description)
    {
        $this->container['proposition_description'] = $proposition_description;

        return $this;
    }

    /**
     * Gets proposition_duration
     *
     * @return int
     */
    public function getPropositionDuration()
    {
        return $this->container['proposition_duration'];
    }

    /**
     * Sets proposition_duration
     *
     * @param int $proposition_duration proposition_duration
     *
     * @return $this
     */
    public function setPropositionDuration($proposition_duration)
    {
        $this->container['proposition_duration'] = $proposition_duration;

        return $this;
    }

    /**
     * Gets proposition_pricing_type
     *
     * @return string
     */
    public function getPropositionPricingType()
    {
        return $this->container['proposition_pricing_type'];
    }

    /**
     * Sets proposition_pricing_type
     *
     * @param string $proposition_pricing_type proposition_pricing_type
     *
     * @return $this
     */
    public function setPropositionPricingType($proposition_pricing_type)
    {
        $allowedValues = $this->getPropositionPricingTypeAllowableValues();
        if (!is_null($proposition_pricing_type) && !in_array($proposition_pricing_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'proposition_pricing_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['proposition_pricing_type'] = $proposition_pricing_type;

        return $this;
    }

    /**
     * Gets proposition_pricing_type_localized
     *
     * @return string
     */
    public function getPropositionPricingTypeLocalized()
    {
        return $this->container['proposition_pricing_type_localized'];
    }

    /**
     * Sets proposition_pricing_type_localized
     *
     * @param string $proposition_pricing_type_localized proposition_pricing_type_localized
     *
     * @return $this
     */
    public function setPropositionPricingTypeLocalized($proposition_pricing_type_localized)
    {
        $this->container['proposition_pricing_type_localized'] = $proposition_pricing_type_localized;

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
     * Gets proposal_valid_until
     *
     * @return \DateTime
     */
    public function getProposalValidUntil()
    {
        return $this->container['proposal_valid_until'];
    }

    /**
     * Sets proposal_valid_until
     *
     * @param \DateTime $proposal_valid_until proposal_valid_until
     *
     * @return $this
     */
    public function setProposalValidUntil($proposal_valid_until)
    {
        $this->container['proposal_valid_until'] = $proposal_valid_until;

        return $this;
    }

    /**
     * Gets organization_id
     *
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param string $organization_id organization_id
     *
     * @return $this
     */
    public function setOrganizationId($organization_id)
    {
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets contract_properties
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiContractProperty[]
     */
    public function getContractProperties()
    {
        return $this->container['contract_properties'];
    }

    /**
     * Sets contract_properties
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiContractProperty[] $contract_properties contract_properties
     *
     * @return $this
     */
    public function setContractProperties($contract_properties)
    {
        $this->container['contract_properties'] = $contract_properties;

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


