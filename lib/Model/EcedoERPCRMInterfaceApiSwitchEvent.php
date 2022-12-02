<?php
/**
 * EcedoERPCRMInterfaceApiSwitchEvent
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
 * EcedoERPCRMInterfaceApiSwitchEvent Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiSwitchEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.SwitchEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'switch_status' => 'string',
        'switch_status_localized' => 'string',
        'organization_event_id' => 'string',
        'organization_id' => 'string',
        'cluster_id' => 'string',
        'cluster_reference' => 'string',
        'connection_id' => 'string',
        'date_created' => '\DateTime',
        'external_reference' => 'string',
        'event_type' => 'string',
        'event_type_localized' => 'string',
        'status' => 'string',
        'status_localized' => 'string',
        'event_date' => '\DateTime',
        'escalation_date' => '\DateTime',
        'final_date' => '\DateTime',
        'terminal_date' => '\DateTime',
        'comment' => 'string',
        'parent_organization_event' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiOrganizationEvent'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'switch_status' => null,
        'switch_status_localized' => null,
        'organization_event_id' => null,
        'organization_id' => null,
        'cluster_id' => 'uuid',
        'cluster_reference' => null,
        'connection_id' => 'uuid',
        'date_created' => 'date-time',
        'external_reference' => null,
        'event_type' => null,
        'event_type_localized' => null,
        'status' => null,
        'status_localized' => null,
        'event_date' => 'date',
        'escalation_date' => 'date',
        'final_date' => 'date',
        'terminal_date' => 'date',
        'comment' => null,
        'parent_organization_event' => null
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
        'switch_status' => 'SwitchStatus',
        'switch_status_localized' => 'SwitchStatusLocalized',
        'organization_event_id' => 'OrganizationEventId',
        'organization_id' => 'OrganizationId',
        'cluster_id' => 'ClusterId',
        'cluster_reference' => 'ClusterReference',
        'connection_id' => 'ConnectionId',
        'date_created' => 'DateCreated',
        'external_reference' => 'ExternalReference',
        'event_type' => 'EventType',
        'event_type_localized' => 'EventTypeLocalized',
        'status' => 'Status',
        'status_localized' => 'StatusLocalized',
        'event_date' => 'EventDate',
        'escalation_date' => 'EscalationDate',
        'final_date' => 'FinalDate',
        'terminal_date' => 'TerminalDate',
        'comment' => 'Comment',
        'parent_organization_event' => 'ParentOrganizationEvent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'switch_status' => 'setSwitchStatus',
        'switch_status_localized' => 'setSwitchStatusLocalized',
        'organization_event_id' => 'setOrganizationEventId',
        'organization_id' => 'setOrganizationId',
        'cluster_id' => 'setClusterId',
        'cluster_reference' => 'setClusterReference',
        'connection_id' => 'setConnectionId',
        'date_created' => 'setDateCreated',
        'external_reference' => 'setExternalReference',
        'event_type' => 'setEventType',
        'event_type_localized' => 'setEventTypeLocalized',
        'status' => 'setStatus',
        'status_localized' => 'setStatusLocalized',
        'event_date' => 'setEventDate',
        'escalation_date' => 'setEscalationDate',
        'final_date' => 'setFinalDate',
        'terminal_date' => 'setTerminalDate',
        'comment' => 'setComment',
        'parent_organization_event' => 'setParentOrganizationEvent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'switch_status' => 'getSwitchStatus',
        'switch_status_localized' => 'getSwitchStatusLocalized',
        'organization_event_id' => 'getOrganizationEventId',
        'organization_id' => 'getOrganizationId',
        'cluster_id' => 'getClusterId',
        'cluster_reference' => 'getClusterReference',
        'connection_id' => 'getConnectionId',
        'date_created' => 'getDateCreated',
        'external_reference' => 'getExternalReference',
        'event_type' => 'getEventType',
        'event_type_localized' => 'getEventTypeLocalized',
        'status' => 'getStatus',
        'status_localized' => 'getStatusLocalized',
        'event_date' => 'getEventDate',
        'escalation_date' => 'getEscalationDate',
        'final_date' => 'getFinalDate',
        'terminal_date' => 'getTerminalDate',
        'comment' => 'getComment',
        'parent_organization_event' => 'getParentOrganizationEvent'
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

    const SWITCH_STATUS_WAIT_FOR_SWITCH = 'WaitForSwitch';
    const SWITCH_STATUS_SEND_SWITCH = 'SendSwitch';
    const SWITCH_STATUS_PROCESS_SWITCH = 'ProcessSwitch';
    const SWITCH_STATUS_SEND_METER_READING = 'SendMeterReading';
    const SWITCH_STATUS_FLOW_FINISHED = 'FlowFinished';
    const SWITCH_STATUS_OTHER = 'Other';
    const EVENT_TYPE_SETTLEMENT = 'Settlement';
    const EVENT_TYPE_FINAL_SETTLEMENT = 'FinalSettlement';
    const EVENT_TYPE_COLLECTIVE_ADVANCE_PAYMENT = 'CollectiveAdvancePayment';
    const EVENT_TYPE_COLLECTIVE_SETTLEMENT = 'CollectiveSettlement';
    const EVENT_TYPE_COLLECTIVE_SETTLEMENT_PRODUCT_PURCHASES = 'CollectiveSettlementProductPurchases';
    const EVENT_TYPE_CHANGE_OF_SUPPLIER = 'ChangeOfSupplier';
    const EVENT_TYPE_END_OF_SUPPLY = 'EndOfSupply';
    const EVENT_TYPE_MOVE_IN = 'MoveIn';
    const EVENT_TYPE_MOVE_OUT = 'MoveOut';
    const EVENT_TYPE_PERIODIC_METER_READING = 'PeriodicMeterReading';
    const EVENT_TYPE_METER_READING_COLLECTION = 'MeterReadingCollection';
    const EVENT_TYPE_METER_READING_VALIDATION = 'MeterReadingValidation';
    const EVENT_TYPE_EVENT_METER_READING = 'EventMeterReading';
    const EVENT_TYPE_PRODUCT_PURCHASE = 'ProductPurchase';
    const EVENT_TYPE_ADVANCE_PAYMENT_CALCULATION = 'AdvancePaymentCalculation';
    const EVENT_TYPE_CHARGE_SESSION_ALLEGO = 'ChargeSessionAllego';
    const EVENT_TYPE_TERMINATION_FEE_SETTLEMENT = 'TerminationFeeSettlement';
    const EVENT_TYPE_PRODUCER_SETTLEMENT = 'ProducerSettlement';
    const EVENT_TYPE_MOVE = 'Move';
    const EVENT_TYPE_CHARGE_SESSION_DIRECT_PAY = 'ChargeSessionDirectPay';
    const EVENT_TYPE_CHANGE_SMA = 'ChangeSma';
    const EVENT_TYPE_SOLAR_SETTLEMENT = 'SolarSettlement';
    const EVENT_TYPE_LOSS = 'Loss';
    const EVENT_TYPE_EV_CHARGE_CARD_APPLICATION = 'EvChargeCardApplication';
    const EVENT_TYPE_EV_CHARGE_CARD_SETTLEMENT = 'EvChargeCardSettlement';
    const EVENT_TYPE_P4_METER_READING_COLLECTION_TARIFF_CHANGE = 'P4MeterReadingCollectionTariffChange';
    const EVENT_TYPE_IMBALANCE_FLEX_SETTLEMENT = 'ImbalanceFlexSettlement';
    const EVENT_TYPE_DISPUTE = 'Dispute';
    const EVENT_TYPE_PV_SWITCH = 'PVSwitch';
    const EVENT_TYPE_VKO = 'VKO';
    const EVENT_TYPE_PRODUCER_ENERGY_PURCHASE = 'ProducerEnergyPurchase';
    const EVENT_TYPE_EV_CHARGER_REIMBURSEMENT = 'EvChargerReimbursement';
    const EVENT_TYPE_CHARGE_SESSION = 'ChargeSession';
    const EVENT_TYPE_OUTGOING_DISPUTE = 'OutgoingDispute';
    const EVENT_TYPE_DEPOSIT_SETTLEMENT = 'DepositSettlement';
    const EVENT_TYPE_CUSTOM_INVOICE_SETTLEMENT = 'CustomInvoiceSettlement';
    const EVENT_TYPE_SERVICE_CONTRACT = 'ServiceContract';
    const EVENT_TYPE_PRODUCER_ENERGY_PURCHASE_CORRECTION = 'ProducerEnergyPurchaseCorrection';
    const EVENT_TYPE_PRODUCER_ENERGY_PURCHASE_RECONCILIATION = 'ProducerEnergyPurchaseReconciliation';
    const EVENT_TYPE_CERTIFICATE_SALE = 'CertificateSale';
    const EVENT_TYPE_INVALID_SWITCH_OUT = 'InvalidSwitchOut';
    const EVENT_TYPE_INVALID_SWITCH_IN = 'InvalidSwitchIn';
    const EVENT_TYPE_ADVANCE_PAYMENT_INVOICE = 'AdvancePaymentInvoice';
    const STATUS_IN_PROGRESS = 'InProgress';
    const STATUS_FINISHED = 'Finished';
    const STATUS_CANCELLED = 'Cancelled';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSwitchStatusAllowableValues()
    {
        return [
            self::SWITCH_STATUS_WAIT_FOR_SWITCH,
            self::SWITCH_STATUS_SEND_SWITCH,
            self::SWITCH_STATUS_PROCESS_SWITCH,
            self::SWITCH_STATUS_SEND_METER_READING,
            self::SWITCH_STATUS_FLOW_FINISHED,
            self::SWITCH_STATUS_OTHER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_SETTLEMENT,
            self::EVENT_TYPE_FINAL_SETTLEMENT,
            self::EVENT_TYPE_COLLECTIVE_ADVANCE_PAYMENT,
            self::EVENT_TYPE_COLLECTIVE_SETTLEMENT,
            self::EVENT_TYPE_COLLECTIVE_SETTLEMENT_PRODUCT_PURCHASES,
            self::EVENT_TYPE_CHANGE_OF_SUPPLIER,
            self::EVENT_TYPE_END_OF_SUPPLY,
            self::EVENT_TYPE_MOVE_IN,
            self::EVENT_TYPE_MOVE_OUT,
            self::EVENT_TYPE_PERIODIC_METER_READING,
            self::EVENT_TYPE_METER_READING_COLLECTION,
            self::EVENT_TYPE_METER_READING_VALIDATION,
            self::EVENT_TYPE_EVENT_METER_READING,
            self::EVENT_TYPE_PRODUCT_PURCHASE,
            self::EVENT_TYPE_ADVANCE_PAYMENT_CALCULATION,
            self::EVENT_TYPE_CHARGE_SESSION_ALLEGO,
            self::EVENT_TYPE_TERMINATION_FEE_SETTLEMENT,
            self::EVENT_TYPE_PRODUCER_SETTLEMENT,
            self::EVENT_TYPE_MOVE,
            self::EVENT_TYPE_CHARGE_SESSION_DIRECT_PAY,
            self::EVENT_TYPE_CHANGE_SMA,
            self::EVENT_TYPE_SOLAR_SETTLEMENT,
            self::EVENT_TYPE_LOSS,
            self::EVENT_TYPE_EV_CHARGE_CARD_APPLICATION,
            self::EVENT_TYPE_EV_CHARGE_CARD_SETTLEMENT,
            self::EVENT_TYPE_P4_METER_READING_COLLECTION_TARIFF_CHANGE,
            self::EVENT_TYPE_IMBALANCE_FLEX_SETTLEMENT,
            self::EVENT_TYPE_DISPUTE,
            self::EVENT_TYPE_PV_SWITCH,
            self::EVENT_TYPE_VKO,
            self::EVENT_TYPE_PRODUCER_ENERGY_PURCHASE,
            self::EVENT_TYPE_EV_CHARGER_REIMBURSEMENT,
            self::EVENT_TYPE_CHARGE_SESSION,
            self::EVENT_TYPE_OUTGOING_DISPUTE,
            self::EVENT_TYPE_DEPOSIT_SETTLEMENT,
            self::EVENT_TYPE_CUSTOM_INVOICE_SETTLEMENT,
            self::EVENT_TYPE_SERVICE_CONTRACT,
            self::EVENT_TYPE_PRODUCER_ENERGY_PURCHASE_CORRECTION,
            self::EVENT_TYPE_PRODUCER_ENERGY_PURCHASE_RECONCILIATION,
            self::EVENT_TYPE_CERTIFICATE_SALE,
            self::EVENT_TYPE_INVALID_SWITCH_OUT,
            self::EVENT_TYPE_INVALID_SWITCH_IN,
            self::EVENT_TYPE_ADVANCE_PAYMENT_INVOICE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_IN_PROGRESS,
            self::STATUS_FINISHED,
            self::STATUS_CANCELLED,
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
        $this->container['switch_status'] = isset($data['switch_status']) ? $data['switch_status'] : null;
        $this->container['switch_status_localized'] = isset($data['switch_status_localized']) ? $data['switch_status_localized'] : null;
        $this->container['organization_event_id'] = isset($data['organization_event_id']) ? $data['organization_event_id'] : null;
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['cluster_id'] = isset($data['cluster_id']) ? $data['cluster_id'] : null;
        $this->container['cluster_reference'] = isset($data['cluster_reference']) ? $data['cluster_reference'] : null;
        $this->container['connection_id'] = isset($data['connection_id']) ? $data['connection_id'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['external_reference'] = isset($data['external_reference']) ? $data['external_reference'] : null;
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['event_type_localized'] = isset($data['event_type_localized']) ? $data['event_type_localized'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_localized'] = isset($data['status_localized']) ? $data['status_localized'] : null;
        $this->container['event_date'] = isset($data['event_date']) ? $data['event_date'] : null;
        $this->container['escalation_date'] = isset($data['escalation_date']) ? $data['escalation_date'] : null;
        $this->container['final_date'] = isset($data['final_date']) ? $data['final_date'] : null;
        $this->container['terminal_date'] = isset($data['terminal_date']) ? $data['terminal_date'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['parent_organization_event'] = isset($data['parent_organization_event']) ? $data['parent_organization_event'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSwitchStatusAllowableValues();
        if (!is_null($this->container['switch_status']) && !in_array($this->container['switch_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'switch_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEventTypeAllowableValues();
        if (!is_null($this->container['event_type']) && !in_array($this->container['event_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'event_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets switch_status
     *
     * @return string
     */
    public function getSwitchStatus()
    {
        return $this->container['switch_status'];
    }

    /**
     * Sets switch_status
     *
     * @param string $switch_status switch_status
     *
     * @return $this
     */
    public function setSwitchStatus($switch_status)
    {
        $allowedValues = $this->getSwitchStatusAllowableValues();
        if (!is_null($switch_status) && !in_array($switch_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'switch_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['switch_status'] = $switch_status;

        return $this;
    }

    /**
     * Gets switch_status_localized
     *
     * @return string
     */
    public function getSwitchStatusLocalized()
    {
        return $this->container['switch_status_localized'];
    }

    /**
     * Sets switch_status_localized
     *
     * @param string $switch_status_localized switch_status_localized
     *
     * @return $this
     */
    public function setSwitchStatusLocalized($switch_status_localized)
    {
        $this->container['switch_status_localized'] = $switch_status_localized;

        return $this;
    }

    /**
     * Gets organization_event_id
     *
     * @return string
     */
    public function getOrganizationEventId()
    {
        return $this->container['organization_event_id'];
    }

    /**
     * Sets organization_event_id
     *
     * @param string $organization_event_id organization_event_id
     *
     * @return $this
     */
    public function setOrganizationEventId($organization_event_id)
    {
        $this->container['organization_event_id'] = $organization_event_id;

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
     * Gets cluster_id
     *
     * @return string
     */
    public function getClusterId()
    {
        return $this->container['cluster_id'];
    }

    /**
     * Sets cluster_id
     *
     * @param string $cluster_id cluster_id
     *
     * @return $this
     */
    public function setClusterId($cluster_id)
    {
        $this->container['cluster_id'] = $cluster_id;

        return $this;
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
     * Gets date_created
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param \DateTime $date_created date_created
     *
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets external_reference
     *
     * @return string
     */
    public function getExternalReference()
    {
        return $this->container['external_reference'];
    }

    /**
     * Sets external_reference
     *
     * @param string $external_reference external_reference
     *
     * @return $this
     */
    public function setExternalReference($external_reference)
    {
        $this->container['external_reference'] = $external_reference;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string $event_type event_type
     *
     * @return $this
     */
    public function setEventType($event_type)
    {
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!is_null($event_type) && !in_array($event_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'event_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets event_type_localized
     *
     * @return string
     */
    public function getEventTypeLocalized()
    {
        return $this->container['event_type_localized'];
    }

    /**
     * Sets event_type_localized
     *
     * @param string $event_type_localized event_type_localized
     *
     * @return $this
     */
    public function setEventTypeLocalized($event_type_localized)
    {
        $this->container['event_type_localized'] = $event_type_localized;

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
     * Gets event_date
     *
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->container['event_date'];
    }

    /**
     * Sets event_date
     *
     * @param \DateTime $event_date event_date
     *
     * @return $this
     */
    public function setEventDate($event_date)
    {
        $this->container['event_date'] = $event_date;

        return $this;
    }

    /**
     * Gets escalation_date
     *
     * @return \DateTime
     */
    public function getEscalationDate()
    {
        return $this->container['escalation_date'];
    }

    /**
     * Sets escalation_date
     *
     * @param \DateTime $escalation_date escalation_date
     *
     * @return $this
     */
    public function setEscalationDate($escalation_date)
    {
        $this->container['escalation_date'] = $escalation_date;

        return $this;
    }

    /**
     * Gets final_date
     *
     * @return \DateTime
     */
    public function getFinalDate()
    {
        return $this->container['final_date'];
    }

    /**
     * Sets final_date
     *
     * @param \DateTime $final_date final_date
     *
     * @return $this
     */
    public function setFinalDate($final_date)
    {
        $this->container['final_date'] = $final_date;

        return $this;
    }

    /**
     * Gets terminal_date
     *
     * @return \DateTime
     */
    public function getTerminalDate()
    {
        return $this->container['terminal_date'];
    }

    /**
     * Sets terminal_date
     *
     * @param \DateTime $terminal_date terminal_date
     *
     * @return $this
     */
    public function setTerminalDate($terminal_date)
    {
        $this->container['terminal_date'] = $terminal_date;

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
     * Gets parent_organization_event
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiOrganizationEvent
     */
    public function getParentOrganizationEvent()
    {
        return $this->container['parent_organization_event'];
    }

    /**
     * Sets parent_organization_event
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiOrganizationEvent $parent_organization_event parent_organization_event
     *
     * @return $this
     */
    public function setParentOrganizationEvent($parent_organization_event)
    {
        $this->container['parent_organization_event'] = $parent_organization_event;

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


