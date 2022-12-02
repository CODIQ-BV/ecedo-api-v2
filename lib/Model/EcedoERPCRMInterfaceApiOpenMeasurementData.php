<?php
/**
 * EcedoERPCRMInterfaceApiOpenMeasurementData
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
 * EcedoERPCRMInterfaceApiOpenMeasurementData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiOpenMeasurementData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.OpenMeasurementData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ean' => 'string',
        'netarea' => 'string',
        'responsible_party_ean' => 'string',
        'service_message' => 'string',
        'measurement_items' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiOpenMeasurementDetailData[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ean' => null,
        'netarea' => null,
        'responsible_party_ean' => null,
        'service_message' => null,
        'measurement_items' => null
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
        'ean' => 'EAN',
        'netarea' => 'Netarea',
        'responsible_party_ean' => 'ResponsiblePartyEAN',
        'service_message' => 'ServiceMessage',
        'measurement_items' => 'MeasurementItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ean' => 'setEan',
        'netarea' => 'setNetarea',
        'responsible_party_ean' => 'setResponsiblePartyEan',
        'service_message' => 'setServiceMessage',
        'measurement_items' => 'setMeasurementItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ean' => 'getEan',
        'netarea' => 'getNetarea',
        'responsible_party_ean' => 'getResponsiblePartyEan',
        'service_message' => 'getServiceMessage',
        'measurement_items' => 'getMeasurementItems'
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
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['netarea'] = isset($data['netarea']) ? $data['netarea'] : null;
        $this->container['responsible_party_ean'] = isset($data['responsible_party_ean']) ? $data['responsible_party_ean'] : null;
        $this->container['service_message'] = isset($data['service_message']) ? $data['service_message'] : null;
        $this->container['measurement_items'] = isset($data['measurement_items']) ? $data['measurement_items'] : null;
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
     * Gets ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string $ean ean
     *
     * @return $this
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets netarea
     *
     * @return string
     */
    public function getNetarea()
    {
        return $this->container['netarea'];
    }

    /**
     * Sets netarea
     *
     * @param string $netarea netarea
     *
     * @return $this
     */
    public function setNetarea($netarea)
    {
        $this->container['netarea'] = $netarea;

        return $this;
    }

    /**
     * Gets responsible_party_ean
     *
     * @return string
     */
    public function getResponsiblePartyEan()
    {
        return $this->container['responsible_party_ean'];
    }

    /**
     * Sets responsible_party_ean
     *
     * @param string $responsible_party_ean responsible_party_ean
     *
     * @return $this
     */
    public function setResponsiblePartyEan($responsible_party_ean)
    {
        $this->container['responsible_party_ean'] = $responsible_party_ean;

        return $this;
    }

    /**
     * Gets service_message
     *
     * @return string
     */
    public function getServiceMessage()
    {
        return $this->container['service_message'];
    }

    /**
     * Sets service_message
     *
     * @param string $service_message service_message
     *
     * @return $this
     */
    public function setServiceMessage($service_message)
    {
        $this->container['service_message'] = $service_message;

        return $this;
    }

    /**
     * Gets measurement_items
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiOpenMeasurementDetailData[]
     */
    public function getMeasurementItems()
    {
        return $this->container['measurement_items'];
    }

    /**
     * Sets measurement_items
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiOpenMeasurementDetailData[] $measurement_items measurement_items
     *
     * @return $this
     */
    public function setMeasurementItems($measurement_items)
    {
        $this->container['measurement_items'] = $measurement_items;

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

