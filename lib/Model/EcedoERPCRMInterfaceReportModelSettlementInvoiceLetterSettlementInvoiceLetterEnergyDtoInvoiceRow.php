<?php
/**
 * EcedoERPCRMInterfaceReportModelSettlementInvoiceLetterSettlementInvoiceLetterEnergyDtoInvoiceRow
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
 * EcedoERPCRMInterfaceReportModelSettlementInvoiceLetterSettlementInvoiceLetterEnergyDtoInvoiceRow Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceReportModelSettlementInvoiceLetterSettlementInvoiceLetterEnergyDtoInvoiceRow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.ReportModel.SettlementInvoiceLetter.SettlementInvoiceLetterEnergyDto_InvoiceRow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'row_billing_item_sub_type' => 'string',
        'row_total_odn_usage' => 'double',
        'row_total_ldn_usage' => 'double',
        'row_meter_reading_id' => 'string',
        'row_id' => 'string',
        'invoice_id' => 'string',
        'organization_id' => 'string',
        'row_contract_id' => 'string',
        'row_meelift_contract_id' => 'string',
        'row_is_electricity' => 'bool',
        'row_is_gas' => 'bool',
        'row_is_no_product' => 'bool',
        'row_is_externe_opwek' => 'bool',
        'row_is_small_consumer' => 'bool',
        'row_is_large_consumer' => 'bool',
        'row_is_ldn' => 'bool',
        'row_is_odn' => 'bool',
        'row_period_start_date' => '\DateTime',
        'row_period_end_date' => '\DateTime',
        'row_period_description' => 'string',
        'row_price_component_type' => 'string',
        'row_price_component_type_internal' => 'string',
        'row_description' => 'string',
        'row_usage' => 'double',
        'row_price' => 'double',
        'row_total_price' => 'double',
        'row_amount' => 'double',
        'row_vat_amount' => 'double',
        'row_total_amount' => 'double',
        'row_vat_percentage' => 'double',
        'row_vat_country' => 'string',
        'row_vat_inclusive' => 'bool',
        'row_price_unit' => 'string',
        'row_price_unit_singular' => 'string',
        'has_range' => 'bool',
        'row_range_begin' => 'int',
        'row_range_end' => 'int',
        'row_range_description' => 'string',
        'row_has_factor' => 'bool',
        'row_factor' => 'double',
        'row_classification' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'row_billing_item_sub_type' => null,
        'row_total_odn_usage' => 'double',
        'row_total_ldn_usage' => 'double',
        'row_meter_reading_id' => 'uuid',
        'row_id' => null,
        'invoice_id' => 'uuid',
        'organization_id' => null,
        'row_contract_id' => 'uuid',
        'row_meelift_contract_id' => 'uuid',
        'row_is_electricity' => null,
        'row_is_gas' => null,
        'row_is_no_product' => null,
        'row_is_externe_opwek' => null,
        'row_is_small_consumer' => null,
        'row_is_large_consumer' => null,
        'row_is_ldn' => null,
        'row_is_odn' => null,
        'row_period_start_date' => 'date',
        'row_period_end_date' => 'date',
        'row_period_description' => null,
        'row_price_component_type' => null,
        'row_price_component_type_internal' => null,
        'row_description' => null,
        'row_usage' => 'double',
        'row_price' => 'double',
        'row_total_price' => 'double',
        'row_amount' => 'double',
        'row_vat_amount' => 'double',
        'row_total_amount' => 'double',
        'row_vat_percentage' => 'double',
        'row_vat_country' => null,
        'row_vat_inclusive' => null,
        'row_price_unit' => null,
        'row_price_unit_singular' => null,
        'has_range' => null,
        'row_range_begin' => 'int32',
        'row_range_end' => 'int32',
        'row_range_description' => null,
        'row_has_factor' => null,
        'row_factor' => 'double',
        'row_classification' => null
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
        'row_billing_item_sub_type' => 'Row_BillingItem_SubType',
        'row_total_odn_usage' => 'Row_TotalODNUsage',
        'row_total_ldn_usage' => 'Row_TotalLDNUsage',
        'row_meter_reading_id' => 'Row_MeterReading_Id',
        'row_id' => 'Row_Id',
        'invoice_id' => 'Invoice_Id',
        'organization_id' => 'Organization_Id',
        'row_contract_id' => 'Row_ContractId',
        'row_meelift_contract_id' => 'Row_MeeliftContractId',
        'row_is_electricity' => 'Row_IsElectricity',
        'row_is_gas' => 'Row_IsGas',
        'row_is_no_product' => 'Row_IsNoProduct',
        'row_is_externe_opwek' => 'Row_IsExterneOpwek',
        'row_is_small_consumer' => 'Row_IsSmallConsumer',
        'row_is_large_consumer' => 'Row_IsLargeConsumer',
        'row_is_ldn' => 'Row_IsLDN',
        'row_is_odn' => 'Row_IsODN',
        'row_period_start_date' => 'Row_Period_StartDate',
        'row_period_end_date' => 'Row_Period_EndDate',
        'row_period_description' => 'Row_Period_Description',
        'row_price_component_type' => 'Row_PriceComponentType',
        'row_price_component_type_internal' => 'Row_PriceComponentTypeInternal',
        'row_description' => 'Row_Description',
        'row_usage' => 'Row_Usage',
        'row_price' => 'Row_Price',
        'row_total_price' => 'Row_TotalPrice',
        'row_amount' => 'Row_Amount',
        'row_vat_amount' => 'Row_VatAmount',
        'row_total_amount' => 'Row_TotalAmount',
        'row_vat_percentage' => 'Row_VatPercentage',
        'row_vat_country' => 'Row_VatCountry',
        'row_vat_inclusive' => 'Row_VatInclusive',
        'row_price_unit' => 'Row_PriceUnit',
        'row_price_unit_singular' => 'Row_PriceUnitSingular',
        'has_range' => 'HasRange',
        'row_range_begin' => 'Row_Range_Begin',
        'row_range_end' => 'Row_Range_End',
        'row_range_description' => 'Row_Range_Description',
        'row_has_factor' => 'Row_HasFactor',
        'row_factor' => 'Row_Factor',
        'row_classification' => 'Row_Classification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'row_billing_item_sub_type' => 'setRowBillingItemSubType',
        'row_total_odn_usage' => 'setRowTotalOdnUsage',
        'row_total_ldn_usage' => 'setRowTotalLdnUsage',
        'row_meter_reading_id' => 'setRowMeterReadingId',
        'row_id' => 'setRowId',
        'invoice_id' => 'setInvoiceId',
        'organization_id' => 'setOrganizationId',
        'row_contract_id' => 'setRowContractId',
        'row_meelift_contract_id' => 'setRowMeeliftContractId',
        'row_is_electricity' => 'setRowIsElectricity',
        'row_is_gas' => 'setRowIsGas',
        'row_is_no_product' => 'setRowIsNoProduct',
        'row_is_externe_opwek' => 'setRowIsExterneOpwek',
        'row_is_small_consumer' => 'setRowIsSmallConsumer',
        'row_is_large_consumer' => 'setRowIsLargeConsumer',
        'row_is_ldn' => 'setRowIsLdn',
        'row_is_odn' => 'setRowIsOdn',
        'row_period_start_date' => 'setRowPeriodStartDate',
        'row_period_end_date' => 'setRowPeriodEndDate',
        'row_period_description' => 'setRowPeriodDescription',
        'row_price_component_type' => 'setRowPriceComponentType',
        'row_price_component_type_internal' => 'setRowPriceComponentTypeInternal',
        'row_description' => 'setRowDescription',
        'row_usage' => 'setRowUsage',
        'row_price' => 'setRowPrice',
        'row_total_price' => 'setRowTotalPrice',
        'row_amount' => 'setRowAmount',
        'row_vat_amount' => 'setRowVatAmount',
        'row_total_amount' => 'setRowTotalAmount',
        'row_vat_percentage' => 'setRowVatPercentage',
        'row_vat_country' => 'setRowVatCountry',
        'row_vat_inclusive' => 'setRowVatInclusive',
        'row_price_unit' => 'setRowPriceUnit',
        'row_price_unit_singular' => 'setRowPriceUnitSingular',
        'has_range' => 'setHasRange',
        'row_range_begin' => 'setRowRangeBegin',
        'row_range_end' => 'setRowRangeEnd',
        'row_range_description' => 'setRowRangeDescription',
        'row_has_factor' => 'setRowHasFactor',
        'row_factor' => 'setRowFactor',
        'row_classification' => 'setRowClassification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'row_billing_item_sub_type' => 'getRowBillingItemSubType',
        'row_total_odn_usage' => 'getRowTotalOdnUsage',
        'row_total_ldn_usage' => 'getRowTotalLdnUsage',
        'row_meter_reading_id' => 'getRowMeterReadingId',
        'row_id' => 'getRowId',
        'invoice_id' => 'getInvoiceId',
        'organization_id' => 'getOrganizationId',
        'row_contract_id' => 'getRowContractId',
        'row_meelift_contract_id' => 'getRowMeeliftContractId',
        'row_is_electricity' => 'getRowIsElectricity',
        'row_is_gas' => 'getRowIsGas',
        'row_is_no_product' => 'getRowIsNoProduct',
        'row_is_externe_opwek' => 'getRowIsExterneOpwek',
        'row_is_small_consumer' => 'getRowIsSmallConsumer',
        'row_is_large_consumer' => 'getRowIsLargeConsumer',
        'row_is_ldn' => 'getRowIsLdn',
        'row_is_odn' => 'getRowIsOdn',
        'row_period_start_date' => 'getRowPeriodStartDate',
        'row_period_end_date' => 'getRowPeriodEndDate',
        'row_period_description' => 'getRowPeriodDescription',
        'row_price_component_type' => 'getRowPriceComponentType',
        'row_price_component_type_internal' => 'getRowPriceComponentTypeInternal',
        'row_description' => 'getRowDescription',
        'row_usage' => 'getRowUsage',
        'row_price' => 'getRowPrice',
        'row_total_price' => 'getRowTotalPrice',
        'row_amount' => 'getRowAmount',
        'row_vat_amount' => 'getRowVatAmount',
        'row_total_amount' => 'getRowTotalAmount',
        'row_vat_percentage' => 'getRowVatPercentage',
        'row_vat_country' => 'getRowVatCountry',
        'row_vat_inclusive' => 'getRowVatInclusive',
        'row_price_unit' => 'getRowPriceUnit',
        'row_price_unit_singular' => 'getRowPriceUnitSingular',
        'has_range' => 'getHasRange',
        'row_range_begin' => 'getRowRangeBegin',
        'row_range_end' => 'getRowRangeEnd',
        'row_range_description' => 'getRowRangeDescription',
        'row_has_factor' => 'getRowHasFactor',
        'row_factor' => 'getRowFactor',
        'row_classification' => 'getRowClassification'
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
        $this->container['row_billing_item_sub_type'] = isset($data['row_billing_item_sub_type']) ? $data['row_billing_item_sub_type'] : null;
        $this->container['row_total_odn_usage'] = isset($data['row_total_odn_usage']) ? $data['row_total_odn_usage'] : null;
        $this->container['row_total_ldn_usage'] = isset($data['row_total_ldn_usage']) ? $data['row_total_ldn_usage'] : null;
        $this->container['row_meter_reading_id'] = isset($data['row_meter_reading_id']) ? $data['row_meter_reading_id'] : null;
        $this->container['row_id'] = isset($data['row_id']) ? $data['row_id'] : null;
        $this->container['invoice_id'] = isset($data['invoice_id']) ? $data['invoice_id'] : null;
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['row_contract_id'] = isset($data['row_contract_id']) ? $data['row_contract_id'] : null;
        $this->container['row_meelift_contract_id'] = isset($data['row_meelift_contract_id']) ? $data['row_meelift_contract_id'] : null;
        $this->container['row_is_electricity'] = isset($data['row_is_electricity']) ? $data['row_is_electricity'] : null;
        $this->container['row_is_gas'] = isset($data['row_is_gas']) ? $data['row_is_gas'] : null;
        $this->container['row_is_no_product'] = isset($data['row_is_no_product']) ? $data['row_is_no_product'] : null;
        $this->container['row_is_externe_opwek'] = isset($data['row_is_externe_opwek']) ? $data['row_is_externe_opwek'] : null;
        $this->container['row_is_small_consumer'] = isset($data['row_is_small_consumer']) ? $data['row_is_small_consumer'] : null;
        $this->container['row_is_large_consumer'] = isset($data['row_is_large_consumer']) ? $data['row_is_large_consumer'] : null;
        $this->container['row_is_ldn'] = isset($data['row_is_ldn']) ? $data['row_is_ldn'] : null;
        $this->container['row_is_odn'] = isset($data['row_is_odn']) ? $data['row_is_odn'] : null;
        $this->container['row_period_start_date'] = isset($data['row_period_start_date']) ? $data['row_period_start_date'] : null;
        $this->container['row_period_end_date'] = isset($data['row_period_end_date']) ? $data['row_period_end_date'] : null;
        $this->container['row_period_description'] = isset($data['row_period_description']) ? $data['row_period_description'] : null;
        $this->container['row_price_component_type'] = isset($data['row_price_component_type']) ? $data['row_price_component_type'] : null;
        $this->container['row_price_component_type_internal'] = isset($data['row_price_component_type_internal']) ? $data['row_price_component_type_internal'] : null;
        $this->container['row_description'] = isset($data['row_description']) ? $data['row_description'] : null;
        $this->container['row_usage'] = isset($data['row_usage']) ? $data['row_usage'] : null;
        $this->container['row_price'] = isset($data['row_price']) ? $data['row_price'] : null;
        $this->container['row_total_price'] = isset($data['row_total_price']) ? $data['row_total_price'] : null;
        $this->container['row_amount'] = isset($data['row_amount']) ? $data['row_amount'] : null;
        $this->container['row_vat_amount'] = isset($data['row_vat_amount']) ? $data['row_vat_amount'] : null;
        $this->container['row_total_amount'] = isset($data['row_total_amount']) ? $data['row_total_amount'] : null;
        $this->container['row_vat_percentage'] = isset($data['row_vat_percentage']) ? $data['row_vat_percentage'] : null;
        $this->container['row_vat_country'] = isset($data['row_vat_country']) ? $data['row_vat_country'] : null;
        $this->container['row_vat_inclusive'] = isset($data['row_vat_inclusive']) ? $data['row_vat_inclusive'] : null;
        $this->container['row_price_unit'] = isset($data['row_price_unit']) ? $data['row_price_unit'] : null;
        $this->container['row_price_unit_singular'] = isset($data['row_price_unit_singular']) ? $data['row_price_unit_singular'] : null;
        $this->container['has_range'] = isset($data['has_range']) ? $data['has_range'] : null;
        $this->container['row_range_begin'] = isset($data['row_range_begin']) ? $data['row_range_begin'] : null;
        $this->container['row_range_end'] = isset($data['row_range_end']) ? $data['row_range_end'] : null;
        $this->container['row_range_description'] = isset($data['row_range_description']) ? $data['row_range_description'] : null;
        $this->container['row_has_factor'] = isset($data['row_has_factor']) ? $data['row_has_factor'] : null;
        $this->container['row_factor'] = isset($data['row_factor']) ? $data['row_factor'] : null;
        $this->container['row_classification'] = isset($data['row_classification']) ? $data['row_classification'] : null;
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
     * Gets row_billing_item_sub_type
     *
     * @return string
     */
    public function getRowBillingItemSubType()
    {
        return $this->container['row_billing_item_sub_type'];
    }

    /**
     * Sets row_billing_item_sub_type
     *
     * @param string $row_billing_item_sub_type row_billing_item_sub_type
     *
     * @return $this
     */
    public function setRowBillingItemSubType($row_billing_item_sub_type)
    {
        $this->container['row_billing_item_sub_type'] = $row_billing_item_sub_type;

        return $this;
    }

    /**
     * Gets row_total_odn_usage
     *
     * @return double
     */
    public function getRowTotalOdnUsage()
    {
        return $this->container['row_total_odn_usage'];
    }

    /**
     * Sets row_total_odn_usage
     *
     * @param double $row_total_odn_usage row_total_odn_usage
     *
     * @return $this
     */
    public function setRowTotalOdnUsage($row_total_odn_usage)
    {
        $this->container['row_total_odn_usage'] = $row_total_odn_usage;

        return $this;
    }

    /**
     * Gets row_total_ldn_usage
     *
     * @return double
     */
    public function getRowTotalLdnUsage()
    {
        return $this->container['row_total_ldn_usage'];
    }

    /**
     * Sets row_total_ldn_usage
     *
     * @param double $row_total_ldn_usage row_total_ldn_usage
     *
     * @return $this
     */
    public function setRowTotalLdnUsage($row_total_ldn_usage)
    {
        $this->container['row_total_ldn_usage'] = $row_total_ldn_usage;

        return $this;
    }

    /**
     * Gets row_meter_reading_id
     *
     * @return string
     */
    public function getRowMeterReadingId()
    {
        return $this->container['row_meter_reading_id'];
    }

    /**
     * Sets row_meter_reading_id
     *
     * @param string $row_meter_reading_id row_meter_reading_id
     *
     * @return $this
     */
    public function setRowMeterReadingId($row_meter_reading_id)
    {
        $this->container['row_meter_reading_id'] = $row_meter_reading_id;

        return $this;
    }

    /**
     * Gets row_id
     *
     * @return string
     */
    public function getRowId()
    {
        return $this->container['row_id'];
    }

    /**
     * Sets row_id
     *
     * @param string $row_id row_id
     *
     * @return $this
     */
    public function setRowId($row_id)
    {
        $this->container['row_id'] = $row_id;

        return $this;
    }

    /**
     * Gets invoice_id
     *
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     *
     * @param string $invoice_id invoice_id
     *
     * @return $this
     */
    public function setInvoiceId($invoice_id)
    {
        $this->container['invoice_id'] = $invoice_id;

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
     * Gets row_contract_id
     *
     * @return string
     */
    public function getRowContractId()
    {
        return $this->container['row_contract_id'];
    }

    /**
     * Sets row_contract_id
     *
     * @param string $row_contract_id row_contract_id
     *
     * @return $this
     */
    public function setRowContractId($row_contract_id)
    {
        $this->container['row_contract_id'] = $row_contract_id;

        return $this;
    }

    /**
     * Gets row_meelift_contract_id
     *
     * @return string
     */
    public function getRowMeeliftContractId()
    {
        return $this->container['row_meelift_contract_id'];
    }

    /**
     * Sets row_meelift_contract_id
     *
     * @param string $row_meelift_contract_id row_meelift_contract_id
     *
     * @return $this
     */
    public function setRowMeeliftContractId($row_meelift_contract_id)
    {
        $this->container['row_meelift_contract_id'] = $row_meelift_contract_id;

        return $this;
    }

    /**
     * Gets row_is_electricity
     *
     * @return bool
     */
    public function getRowIsElectricity()
    {
        return $this->container['row_is_electricity'];
    }

    /**
     * Sets row_is_electricity
     *
     * @param bool $row_is_electricity row_is_electricity
     *
     * @return $this
     */
    public function setRowIsElectricity($row_is_electricity)
    {
        $this->container['row_is_electricity'] = $row_is_electricity;

        return $this;
    }

    /**
     * Gets row_is_gas
     *
     * @return bool
     */
    public function getRowIsGas()
    {
        return $this->container['row_is_gas'];
    }

    /**
     * Sets row_is_gas
     *
     * @param bool $row_is_gas row_is_gas
     *
     * @return $this
     */
    public function setRowIsGas($row_is_gas)
    {
        $this->container['row_is_gas'] = $row_is_gas;

        return $this;
    }

    /**
     * Gets row_is_no_product
     *
     * @return bool
     */
    public function getRowIsNoProduct()
    {
        return $this->container['row_is_no_product'];
    }

    /**
     * Sets row_is_no_product
     *
     * @param bool $row_is_no_product row_is_no_product
     *
     * @return $this
     */
    public function setRowIsNoProduct($row_is_no_product)
    {
        $this->container['row_is_no_product'] = $row_is_no_product;

        return $this;
    }

    /**
     * Gets row_is_externe_opwek
     *
     * @return bool
     */
    public function getRowIsExterneOpwek()
    {
        return $this->container['row_is_externe_opwek'];
    }

    /**
     * Sets row_is_externe_opwek
     *
     * @param bool $row_is_externe_opwek row_is_externe_opwek
     *
     * @return $this
     */
    public function setRowIsExterneOpwek($row_is_externe_opwek)
    {
        $this->container['row_is_externe_opwek'] = $row_is_externe_opwek;

        return $this;
    }

    /**
     * Gets row_is_small_consumer
     *
     * @return bool
     */
    public function getRowIsSmallConsumer()
    {
        return $this->container['row_is_small_consumer'];
    }

    /**
     * Sets row_is_small_consumer
     *
     * @param bool $row_is_small_consumer row_is_small_consumer
     *
     * @return $this
     */
    public function setRowIsSmallConsumer($row_is_small_consumer)
    {
        $this->container['row_is_small_consumer'] = $row_is_small_consumer;

        return $this;
    }

    /**
     * Gets row_is_large_consumer
     *
     * @return bool
     */
    public function getRowIsLargeConsumer()
    {
        return $this->container['row_is_large_consumer'];
    }

    /**
     * Sets row_is_large_consumer
     *
     * @param bool $row_is_large_consumer row_is_large_consumer
     *
     * @return $this
     */
    public function setRowIsLargeConsumer($row_is_large_consumer)
    {
        $this->container['row_is_large_consumer'] = $row_is_large_consumer;

        return $this;
    }

    /**
     * Gets row_is_ldn
     *
     * @return bool
     */
    public function getRowIsLdn()
    {
        return $this->container['row_is_ldn'];
    }

    /**
     * Sets row_is_ldn
     *
     * @param bool $row_is_ldn row_is_ldn
     *
     * @return $this
     */
    public function setRowIsLdn($row_is_ldn)
    {
        $this->container['row_is_ldn'] = $row_is_ldn;

        return $this;
    }

    /**
     * Gets row_is_odn
     *
     * @return bool
     */
    public function getRowIsOdn()
    {
        return $this->container['row_is_odn'];
    }

    /**
     * Sets row_is_odn
     *
     * @param bool $row_is_odn row_is_odn
     *
     * @return $this
     */
    public function setRowIsOdn($row_is_odn)
    {
        $this->container['row_is_odn'] = $row_is_odn;

        return $this;
    }

    /**
     * Gets row_period_start_date
     *
     * @return \DateTime
     */
    public function getRowPeriodStartDate()
    {
        return $this->container['row_period_start_date'];
    }

    /**
     * Sets row_period_start_date
     *
     * @param \DateTime $row_period_start_date row_period_start_date
     *
     * @return $this
     */
    public function setRowPeriodStartDate($row_period_start_date)
    {
        $this->container['row_period_start_date'] = $row_period_start_date;

        return $this;
    }

    /**
     * Gets row_period_end_date
     *
     * @return \DateTime
     */
    public function getRowPeriodEndDate()
    {
        return $this->container['row_period_end_date'];
    }

    /**
     * Sets row_period_end_date
     *
     * @param \DateTime $row_period_end_date row_period_end_date
     *
     * @return $this
     */
    public function setRowPeriodEndDate($row_period_end_date)
    {
        $this->container['row_period_end_date'] = $row_period_end_date;

        return $this;
    }

    /**
     * Gets row_period_description
     *
     * @return string
     */
    public function getRowPeriodDescription()
    {
        return $this->container['row_period_description'];
    }

    /**
     * Sets row_period_description
     *
     * @param string $row_period_description row_period_description
     *
     * @return $this
     */
    public function setRowPeriodDescription($row_period_description)
    {
        $this->container['row_period_description'] = $row_period_description;

        return $this;
    }

    /**
     * Gets row_price_component_type
     *
     * @return string
     */
    public function getRowPriceComponentType()
    {
        return $this->container['row_price_component_type'];
    }

    /**
     * Sets row_price_component_type
     *
     * @param string $row_price_component_type row_price_component_type
     *
     * @return $this
     */
    public function setRowPriceComponentType($row_price_component_type)
    {
        $this->container['row_price_component_type'] = $row_price_component_type;

        return $this;
    }

    /**
     * Gets row_price_component_type_internal
     *
     * @return string
     */
    public function getRowPriceComponentTypeInternal()
    {
        return $this->container['row_price_component_type_internal'];
    }

    /**
     * Sets row_price_component_type_internal
     *
     * @param string $row_price_component_type_internal row_price_component_type_internal
     *
     * @return $this
     */
    public function setRowPriceComponentTypeInternal($row_price_component_type_internal)
    {
        $this->container['row_price_component_type_internal'] = $row_price_component_type_internal;

        return $this;
    }

    /**
     * Gets row_description
     *
     * @return string
     */
    public function getRowDescription()
    {
        return $this->container['row_description'];
    }

    /**
     * Sets row_description
     *
     * @param string $row_description row_description
     *
     * @return $this
     */
    public function setRowDescription($row_description)
    {
        $this->container['row_description'] = $row_description;

        return $this;
    }

    /**
     * Gets row_usage
     *
     * @return double
     */
    public function getRowUsage()
    {
        return $this->container['row_usage'];
    }

    /**
     * Sets row_usage
     *
     * @param double $row_usage row_usage
     *
     * @return $this
     */
    public function setRowUsage($row_usage)
    {
        $this->container['row_usage'] = $row_usage;

        return $this;
    }

    /**
     * Gets row_price
     *
     * @return double
     */
    public function getRowPrice()
    {
        return $this->container['row_price'];
    }

    /**
     * Sets row_price
     *
     * @param double $row_price row_price
     *
     * @return $this
     */
    public function setRowPrice($row_price)
    {
        $this->container['row_price'] = $row_price;

        return $this;
    }

    /**
     * Gets row_total_price
     *
     * @return double
     */
    public function getRowTotalPrice()
    {
        return $this->container['row_total_price'];
    }

    /**
     * Sets row_total_price
     *
     * @param double $row_total_price row_total_price
     *
     * @return $this
     */
    public function setRowTotalPrice($row_total_price)
    {
        $this->container['row_total_price'] = $row_total_price;

        return $this;
    }

    /**
     * Gets row_amount
     *
     * @return double
     */
    public function getRowAmount()
    {
        return $this->container['row_amount'];
    }

    /**
     * Sets row_amount
     *
     * @param double $row_amount row_amount
     *
     * @return $this
     */
    public function setRowAmount($row_amount)
    {
        $this->container['row_amount'] = $row_amount;

        return $this;
    }

    /**
     * Gets row_vat_amount
     *
     * @return double
     */
    public function getRowVatAmount()
    {
        return $this->container['row_vat_amount'];
    }

    /**
     * Sets row_vat_amount
     *
     * @param double $row_vat_amount row_vat_amount
     *
     * @return $this
     */
    public function setRowVatAmount($row_vat_amount)
    {
        $this->container['row_vat_amount'] = $row_vat_amount;

        return $this;
    }

    /**
     * Gets row_total_amount
     *
     * @return double
     */
    public function getRowTotalAmount()
    {
        return $this->container['row_total_amount'];
    }

    /**
     * Sets row_total_amount
     *
     * @param double $row_total_amount row_total_amount
     *
     * @return $this
     */
    public function setRowTotalAmount($row_total_amount)
    {
        $this->container['row_total_amount'] = $row_total_amount;

        return $this;
    }

    /**
     * Gets row_vat_percentage
     *
     * @return double
     */
    public function getRowVatPercentage()
    {
        return $this->container['row_vat_percentage'];
    }

    /**
     * Sets row_vat_percentage
     *
     * @param double $row_vat_percentage row_vat_percentage
     *
     * @return $this
     */
    public function setRowVatPercentage($row_vat_percentage)
    {
        $this->container['row_vat_percentage'] = $row_vat_percentage;

        return $this;
    }

    /**
     * Gets row_vat_country
     *
     * @return string
     */
    public function getRowVatCountry()
    {
        return $this->container['row_vat_country'];
    }

    /**
     * Sets row_vat_country
     *
     * @param string $row_vat_country row_vat_country
     *
     * @return $this
     */
    public function setRowVatCountry($row_vat_country)
    {
        $this->container['row_vat_country'] = $row_vat_country;

        return $this;
    }

    /**
     * Gets row_vat_inclusive
     *
     * @return bool
     */
    public function getRowVatInclusive()
    {
        return $this->container['row_vat_inclusive'];
    }

    /**
     * Sets row_vat_inclusive
     *
     * @param bool $row_vat_inclusive row_vat_inclusive
     *
     * @return $this
     */
    public function setRowVatInclusive($row_vat_inclusive)
    {
        $this->container['row_vat_inclusive'] = $row_vat_inclusive;

        return $this;
    }

    /**
     * Gets row_price_unit
     *
     * @return string
     */
    public function getRowPriceUnit()
    {
        return $this->container['row_price_unit'];
    }

    /**
     * Sets row_price_unit
     *
     * @param string $row_price_unit row_price_unit
     *
     * @return $this
     */
    public function setRowPriceUnit($row_price_unit)
    {
        $this->container['row_price_unit'] = $row_price_unit;

        return $this;
    }

    /**
     * Gets row_price_unit_singular
     *
     * @return string
     */
    public function getRowPriceUnitSingular()
    {
        return $this->container['row_price_unit_singular'];
    }

    /**
     * Sets row_price_unit_singular
     *
     * @param string $row_price_unit_singular row_price_unit_singular
     *
     * @return $this
     */
    public function setRowPriceUnitSingular($row_price_unit_singular)
    {
        $this->container['row_price_unit_singular'] = $row_price_unit_singular;

        return $this;
    }

    /**
     * Gets has_range
     *
     * @return bool
     */
    public function getHasRange()
    {
        return $this->container['has_range'];
    }

    /**
     * Sets has_range
     *
     * @param bool $has_range has_range
     *
     * @return $this
     */
    public function setHasRange($has_range)
    {
        $this->container['has_range'] = $has_range;

        return $this;
    }

    /**
     * Gets row_range_begin
     *
     * @return int
     */
    public function getRowRangeBegin()
    {
        return $this->container['row_range_begin'];
    }

    /**
     * Sets row_range_begin
     *
     * @param int $row_range_begin row_range_begin
     *
     * @return $this
     */
    public function setRowRangeBegin($row_range_begin)
    {
        $this->container['row_range_begin'] = $row_range_begin;

        return $this;
    }

    /**
     * Gets row_range_end
     *
     * @return int
     */
    public function getRowRangeEnd()
    {
        return $this->container['row_range_end'];
    }

    /**
     * Sets row_range_end
     *
     * @param int $row_range_end row_range_end
     *
     * @return $this
     */
    public function setRowRangeEnd($row_range_end)
    {
        $this->container['row_range_end'] = $row_range_end;

        return $this;
    }

    /**
     * Gets row_range_description
     *
     * @return string
     */
    public function getRowRangeDescription()
    {
        return $this->container['row_range_description'];
    }

    /**
     * Sets row_range_description
     *
     * @param string $row_range_description row_range_description
     *
     * @return $this
     */
    public function setRowRangeDescription($row_range_description)
    {
        $this->container['row_range_description'] = $row_range_description;

        return $this;
    }

    /**
     * Gets row_has_factor
     *
     * @return bool
     */
    public function getRowHasFactor()
    {
        return $this->container['row_has_factor'];
    }

    /**
     * Sets row_has_factor
     *
     * @param bool $row_has_factor row_has_factor
     *
     * @return $this
     */
    public function setRowHasFactor($row_has_factor)
    {
        $this->container['row_has_factor'] = $row_has_factor;

        return $this;
    }

    /**
     * Gets row_factor
     *
     * @return double
     */
    public function getRowFactor()
    {
        return $this->container['row_factor'];
    }

    /**
     * Sets row_factor
     *
     * @param double $row_factor row_factor
     *
     * @return $this
     */
    public function setRowFactor($row_factor)
    {
        $this->container['row_factor'] = $row_factor;

        return $this;
    }

    /**
     * Gets row_classification
     *
     * @return string
     */
    public function getRowClassification()
    {
        return $this->container['row_classification'];
    }

    /**
     * Sets row_classification
     *
     * @param string $row_classification row_classification
     *
     * @return $this
     */
    public function setRowClassification($row_classification)
    {
        $this->container['row_classification'] = $row_classification;

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


