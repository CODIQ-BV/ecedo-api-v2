<?php
/**
 * EcedoERPCRMInterfaceApiCustomPriceComponent
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
 * EcedoERPCRMInterfaceApiCustomPriceComponent Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiCustomPriceComponent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.CustomPriceComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'custom_price_component_id' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'product_id' => 'string',
        'product_description_localized' => 'string',
        'product_group' => 'string',
        'description' => 'string',
        'reference' => 'string',
        'price_component_type' => 'string',
        'price_component_type_localized' => 'string',
        'vat_percentage_type' => 'string',
        'vat_percentage_type_localized' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'custom_price_component_id' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'product_id' => 'uuid',
        'product_description_localized' => null,
        'product_group' => null,
        'description' => null,
        'reference' => null,
        'price_component_type' => null,
        'price_component_type_localized' => null,
        'vat_percentage_type' => null,
        'vat_percentage_type_localized' => null
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
        'custom_price_component_id' => 'CustomPriceComponentId',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'product_id' => 'ProductId',
        'product_description_localized' => 'ProductDescriptionLocalized',
        'product_group' => 'ProductGroup',
        'description' => 'Description',
        'reference' => 'Reference',
        'price_component_type' => 'PriceComponentType',
        'price_component_type_localized' => 'PriceComponentTypeLocalized',
        'vat_percentage_type' => 'VatPercentageType',
        'vat_percentage_type_localized' => 'VatPercentageTypeLocalized'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'custom_price_component_id' => 'setCustomPriceComponentId',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'product_id' => 'setProductId',
        'product_description_localized' => 'setProductDescriptionLocalized',
        'product_group' => 'setProductGroup',
        'description' => 'setDescription',
        'reference' => 'setReference',
        'price_component_type' => 'setPriceComponentType',
        'price_component_type_localized' => 'setPriceComponentTypeLocalized',
        'vat_percentage_type' => 'setVatPercentageType',
        'vat_percentage_type_localized' => 'setVatPercentageTypeLocalized'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'custom_price_component_id' => 'getCustomPriceComponentId',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'product_id' => 'getProductId',
        'product_description_localized' => 'getProductDescriptionLocalized',
        'product_group' => 'getProductGroup',
        'description' => 'getDescription',
        'reference' => 'getReference',
        'price_component_type' => 'getPriceComponentType',
        'price_component_type_localized' => 'getPriceComponentTypeLocalized',
        'vat_percentage_type' => 'getVatPercentageType',
        'vat_percentage_type_localized' => 'getVatPercentageTypeLocalized'
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
        $this->container['custom_price_component_id'] = isset($data['custom_price_component_id']) ? $data['custom_price_component_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['product_description_localized'] = isset($data['product_description_localized']) ? $data['product_description_localized'] : null;
        $this->container['product_group'] = isset($data['product_group']) ? $data['product_group'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['price_component_type'] = isset($data['price_component_type']) ? $data['price_component_type'] : null;
        $this->container['price_component_type_localized'] = isset($data['price_component_type_localized']) ? $data['price_component_type_localized'] : null;
        $this->container['vat_percentage_type'] = isset($data['vat_percentage_type']) ? $data['vat_percentage_type'] : null;
        $this->container['vat_percentage_type_localized'] = isset($data['vat_percentage_type_localized']) ? $data['vat_percentage_type_localized'] : null;
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
     * Gets custom_price_component_id
     *
     * @return string
     */
    public function getCustomPriceComponentId()
    {
        return $this->container['custom_price_component_id'];
    }

    /**
     * Sets custom_price_component_id
     *
     * @param string $custom_price_component_id custom_price_component_id
     *
     * @return $this
     */
    public function setCustomPriceComponentId($custom_price_component_id)
    {
        $this->container['custom_price_component_id'] = $custom_price_component_id;

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
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets product_description_localized
     *
     * @return string
     */
    public function getProductDescriptionLocalized()
    {
        return $this->container['product_description_localized'];
    }

    /**
     * Sets product_description_localized
     *
     * @param string $product_description_localized product_description_localized
     *
     * @return $this
     */
    public function setProductDescriptionLocalized($product_description_localized)
    {
        $this->container['product_description_localized'] = $product_description_localized;

        return $this;
    }

    /**
     * Gets product_group
     *
     * @return string
     */
    public function getProductGroup()
    {
        return $this->container['product_group'];
    }

    /**
     * Sets product_group
     *
     * @param string $product_group product_group
     *
     * @return $this
     */
    public function setProductGroup($product_group)
    {
        $this->container['product_group'] = $product_group;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * Gets price_component_type
     *
     * @return string
     */
    public function getPriceComponentType()
    {
        return $this->container['price_component_type'];
    }

    /**
     * Sets price_component_type
     *
     * @param string $price_component_type price_component_type
     *
     * @return $this
     */
    public function setPriceComponentType($price_component_type)
    {
        $this->container['price_component_type'] = $price_component_type;

        return $this;
    }

    /**
     * Gets price_component_type_localized
     *
     * @return string
     */
    public function getPriceComponentTypeLocalized()
    {
        return $this->container['price_component_type_localized'];
    }

    /**
     * Sets price_component_type_localized
     *
     * @param string $price_component_type_localized price_component_type_localized
     *
     * @return $this
     */
    public function setPriceComponentTypeLocalized($price_component_type_localized)
    {
        $this->container['price_component_type_localized'] = $price_component_type_localized;

        return $this;
    }

    /**
     * Gets vat_percentage_type
     *
     * @return string
     */
    public function getVatPercentageType()
    {
        return $this->container['vat_percentage_type'];
    }

    /**
     * Sets vat_percentage_type
     *
     * @param string $vat_percentage_type vat_percentage_type
     *
     * @return $this
     */
    public function setVatPercentageType($vat_percentage_type)
    {
        $this->container['vat_percentage_type'] = $vat_percentage_type;

        return $this;
    }

    /**
     * Gets vat_percentage_type_localized
     *
     * @return string
     */
    public function getVatPercentageTypeLocalized()
    {
        return $this->container['vat_percentage_type_localized'];
    }

    /**
     * Sets vat_percentage_type_localized
     *
     * @param string $vat_percentage_type_localized vat_percentage_type_localized
     *
     * @return $this
     */
    public function setVatPercentageTypeLocalized($vat_percentage_type_localized)
    {
        $this->container['vat_percentage_type_localized'] = $vat_percentage_type_localized;

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


