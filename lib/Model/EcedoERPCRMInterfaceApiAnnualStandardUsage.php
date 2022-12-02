<?php
/**
 * EcedoERPCRMInterfaceApiAnnualStandardUsage
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
 * EcedoERPCRMInterfaceApiAnnualStandardUsage Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiAnnualStandardUsage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.AnnualStandardUsage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'single_usage' => 'int',
        'peak_usage' => 'int',
        'off_peak_usage' => 'int',
        'single_usage_odn' => 'int',
        'peak_usage_odn' => 'int',
        'off_peak_usage_odn' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'single_usage' => 'int32',
        'peak_usage' => 'int32',
        'off_peak_usage' => 'int32',
        'single_usage_odn' => 'int32',
        'peak_usage_odn' => 'int32',
        'off_peak_usage_odn' => 'int32'
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
        'single_usage' => 'SingleUsage',
        'peak_usage' => 'PeakUsage',
        'off_peak_usage' => 'OffPeakUsage',
        'single_usage_odn' => 'SingleUsageODN',
        'peak_usage_odn' => 'PeakUsageODN',
        'off_peak_usage_odn' => 'OffPeakUsageODN'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'single_usage' => 'setSingleUsage',
        'peak_usage' => 'setPeakUsage',
        'off_peak_usage' => 'setOffPeakUsage',
        'single_usage_odn' => 'setSingleUsageOdn',
        'peak_usage_odn' => 'setPeakUsageOdn',
        'off_peak_usage_odn' => 'setOffPeakUsageOdn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'single_usage' => 'getSingleUsage',
        'peak_usage' => 'getPeakUsage',
        'off_peak_usage' => 'getOffPeakUsage',
        'single_usage_odn' => 'getSingleUsageOdn',
        'peak_usage_odn' => 'getPeakUsageOdn',
        'off_peak_usage_odn' => 'getOffPeakUsageOdn'
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
        $this->container['single_usage'] = isset($data['single_usage']) ? $data['single_usage'] : null;
        $this->container['peak_usage'] = isset($data['peak_usage']) ? $data['peak_usage'] : null;
        $this->container['off_peak_usage'] = isset($data['off_peak_usage']) ? $data['off_peak_usage'] : null;
        $this->container['single_usage_odn'] = isset($data['single_usage_odn']) ? $data['single_usage_odn'] : null;
        $this->container['peak_usage_odn'] = isset($data['peak_usage_odn']) ? $data['peak_usage_odn'] : null;
        $this->container['off_peak_usage_odn'] = isset($data['off_peak_usage_odn']) ? $data['off_peak_usage_odn'] : null;
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
     * Gets single_usage
     *
     * @return int
     */
    public function getSingleUsage()
    {
        return $this->container['single_usage'];
    }

    /**
     * Sets single_usage
     *
     * @param int $single_usage Indien een aansluiting enkel-verbuik heeft wordt de Standaard Jaar Afname (SJA) in dit veld weergegeven.  Wanneer de aansluiting normaal- en dal-verbruik heeft is dit veld null  Wanneer de aansluiting een gas aansluiting betreft, is dit veld verplicht en moeten de anderen null zijn
     *
     * @return $this
     */
    public function setSingleUsage($single_usage)
    {
        $this->container['single_usage'] = $single_usage;

        return $this;
    }

    /**
     * Gets peak_usage
     *
     * @return int
     */
    public function getPeakUsage()
    {
        return $this->container['peak_usage'];
    }

    /**
     * Sets peak_usage
     *
     * @param int $peak_usage Indien een aansluiting enkel-verbuik heeft is dit veld null.  Wanneer de aansluiting normaal- en dal-verbruik heeft wordt in dit veld het normaal-verbruik van de Standaard Jaar Afname (SJA) weergegeven.
     *
     * @return $this
     */
    public function setPeakUsage($peak_usage)
    {
        $this->container['peak_usage'] = $peak_usage;

        return $this;
    }

    /**
     * Gets off_peak_usage
     *
     * @return int
     */
    public function getOffPeakUsage()
    {
        return $this->container['off_peak_usage'];
    }

    /**
     * Sets off_peak_usage
     *
     * @param int $off_peak_usage Indien een aansluiting enkel-verbuik heeft is dit veld null.  Wanneer de aansluiting normaal- en dal-verbruik heeft wordt in dit veld het dal-verbruik van de Standaard Jaar Afname (SJA) weergegeven.
     *
     * @return $this
     */
    public function setOffPeakUsage($off_peak_usage)
    {
        $this->container['off_peak_usage'] = $off_peak_usage;

        return $this;
    }

    /**
     * Gets single_usage_odn
     *
     * @return int
     */
    public function getSingleUsageOdn()
    {
        return $this->container['single_usage_odn'];
    }

    /**
     * Sets single_usage_odn
     *
     * @param int $single_usage_odn Indien een aansluiting enkel-verbruik (en dus ook teruglevering) heeft wordt de Standaard Jaar Invoeding (SJI) in dit veld weergegeven. Wanneer de aansluiting geen teruglevering heeft wordt hier een 0 teruggegeven.  Wanneer de aansluiting normaal- en dal-verbruik (en dus ook teruglevering) heeft is dit veld null.
     *
     * @return $this
     */
    public function setSingleUsageOdn($single_usage_odn)
    {
        $this->container['single_usage_odn'] = $single_usage_odn;

        return $this;
    }

    /**
     * Gets peak_usage_odn
     *
     * @return int
     */
    public function getPeakUsageOdn()
    {
        return $this->container['peak_usage_odn'];
    }

    /**
     * Sets peak_usage_odn
     *
     * @param int $peak_usage_odn Indien een aansluiting enkel-verbuik (en dus ook teruglevering) heeft is dit veld null.  Wanneer de aansluiting normaal- en dal-verbruik (en dus ook teruglevering) heeft wordt in dit veld de normaal-teruglevering van de Standaard Jaar Invoeding (SJI) weergegeven. Wanneer de aansluiting geen teruglevering heeft wordt hier een 0 teruggegeven.
     *
     * @return $this
     */
    public function setPeakUsageOdn($peak_usage_odn)
    {
        $this->container['peak_usage_odn'] = $peak_usage_odn;

        return $this;
    }

    /**
     * Gets off_peak_usage_odn
     *
     * @return int
     */
    public function getOffPeakUsageOdn()
    {
        return $this->container['off_peak_usage_odn'];
    }

    /**
     * Sets off_peak_usage_odn
     *
     * @param int $off_peak_usage_odn Indien een aansluiting enkel-verbuik (en dus ook teruglevering) heeft is dit veld null.  Wanneer de aansluiting normaal- en dal-verbruik (en dus ook teruglevering) heeft wordt in dit veld de dal-teruglevering van de Standaard Jaar Invoeding (SJI) weergegeven. Wanneer de aansluiting geen teruglevering heeft wordt hier een 0 teruggegeven.
     *
     * @return $this
     */
    public function setOffPeakUsageOdn($off_peak_usage_odn)
    {
        $this->container['off_peak_usage_odn'] = $off_peak_usage_odn;

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


