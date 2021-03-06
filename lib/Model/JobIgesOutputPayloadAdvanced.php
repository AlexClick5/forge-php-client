<?php
/**
 * JobIgesOutputPayloadAdvanced
 *
 * PHP version 5
 *
 * @category Class
 * @package  Autodesk\Forge\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Forge SDK
 *
 * The Forge Platform contains an expanding collection of web service components that can be used with Autodesk cloud-based products or your own technologies. Take advantage of Autodesk’s expertise in design and engineering.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: forge.help@autodesk.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Autodesk\Forge\Client\Model;

use \ArrayAccess;

/**
 * JobIgesOutputPayloadAdvanced Class Doc Comment
 *
 * @category    Class
 * @description Advanced options for &#x60;iges&#x60; type.
 * @package     Autodesk\Forge\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class JobIgesOutputPayloadAdvanced implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'jobIgesOutputPayload_advanced';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'tolerance' => 'float',
        'surface_type' => 'string',
        'sheet_type' => 'string',
        'solid_type' => 'string',
    ];

    /**
     * @return \string[]
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'tolerance' => 'tolerance',
        'surface_type' => 'surfaceType',
        'sheet_type' => 'sheetType',
        'solid_type' => 'solidType',
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'tolerance' => 'setTolerance',
        'surface_type' => 'setSurfaceType',
        'sheet_type' => 'setSheetType',
        'solid_type' => 'setSolidType',
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'tolerance' => 'getTolerance',
        'surface_type' => 'getSurfaceType',
        'sheet_type' => 'getSheetType',
        'solid_type' => 'getSolidType',
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const SURFACE_TYPE_BOUNDED = 'bounded';
    const SURFACE_TYPE_TRIMMED = 'trimmed';
    const SURFACE_TYPE_WIREFRAME = 'wireframe';
    const SHEET_TYPE_OPEN = 'open';
    const SHEET_TYPE_SURFACE = 'surface';
    const SHEET_TYPE_SHELL = 'shell';
    const SHEET_TYPE_WIREFRAME = 'wireframe';
    const SOLID_TYPE_SOLID = 'solid';
    const SOLID_TYPE_SURFACE = 'surface';
    const SOLID_TYPE_WIREFRAME = 'wireframe';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSurfaceTypeAllowableValues()
    {
        return [
            self::SURFACE_TYPE_BOUNDED,
            self::SURFACE_TYPE_TRIMMED,
            self::SURFACE_TYPE_WIREFRAME,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSheetTypeAllowableValues()
    {
        return [
            self::SHEET_TYPE_OPEN,
            self::SHEET_TYPE_SURFACE,
            self::SHEET_TYPE_SHELL,
            self::SHEET_TYPE_WIREFRAME,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSolidTypeAllowableValues()
    {
        return [
            self::SOLID_TYPE_SOLID,
            self::SOLID_TYPE_SURFACE,
            self::SOLID_TYPE_WIREFRAME,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['tolerance'] = isset($data['tolerance']) ? $data['tolerance'] : 0.001;
        $this->container['surface_type'] = isset($data['surface_type']) ? $data['surface_type'] : 'bounded';
        $this->container['sheet_type'] = isset($data['sheet_type']) ? $data['sheet_type'] : 'surface';
        $this->container['solid_type'] = isset($data['solid_type']) ? $data['solid_type'] : 'solid';
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["bounded", "trimmed", "wireframe"];
        if (!in_array($this->container['surface_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'surface_type', must be one of 'bounded', 'trimmed', 'wireframe'.";
        }

        $allowed_values = ["open", "surface", "shell", "wireframe"];
        if (!in_array($this->container['sheet_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'sheet_type', must be one of 'open', 'surface', 'shell', 'wireframe'.";
        }

        $allowed_values = ["solid", "surface", "wireframe"];
        if (!in_array($this->container['solid_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'solid_type', must be one of 'solid', 'surface', 'wireframe'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = ["bounded", "trimmed", "wireframe"];
        if (!in_array($this->container['surface_type'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["open", "surface", "shell", "wireframe"];
        if (!in_array($this->container['sheet_type'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["solid", "surface", "wireframe"];
        if (!in_array($this->container['solid_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets tolerance
     * @return float
     */
    public function getTolerance()
    {
        return $this->container['tolerance'];
    }

    /**
     * Sets tolerance
     * @param float $tolerance Possible values are between `0` and `1`. By default it is set at 0.001.
     * @return $this
     */
    public function setTolerance($tolerance)
    {
        $this->container['tolerance'] = $tolerance;

        return $this;
    }

    /**
     * Gets surface_type
     * @return string
     */
    public function getSurfaceType()
    {
        return $this->container['surface_type'];
    }

    /**
     * Sets surface_type
     * @param string $surface_type Possible values are `bounded`, `trimmed` and `wireframe`. By default it is set to bounded surface.
     * @return $this
     */
    public function setSurfaceType($surface_type)
    {
        $allowed_values = array('bounded', 'trimmed', 'wireframe');
        if (!is_null($surface_type) && (!in_array($surface_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'surface_type', must be one of 'bounded', 'trimmed', 'wireframe'");
        }
        $this->container['surface_type'] = $surface_type;

        return $this;
    }

    /**
     * Gets sheet_type
     * @return string
     */
    public function getSheetType()
    {
        return $this->container['sheet_type'];
    }

    /**
     * Sets sheet_type
     * @param string $sheet_type Export the sheet body to IGES. `open`, `shell`, `surface` or `wireframe`. By default, it is set to `surface`.
     * @return $this
     */
    public function setSheetType($sheet_type)
    {
        $allowed_values = array('open', 'surface', 'shell', 'wireframe');
        if (!is_null($sheet_type) && (!in_array($sheet_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'sheet_type', must be one of 'open', 'surface', 'shell', 'wireframe'");
        }
        $this->container['sheet_type'] = $sheet_type;

        return $this;
    }

    /**
     * Gets solid_type
     * @return string
     */
    public function getSolidType()
    {
        return $this->container['solid_type'];
    }

    /**
     * Sets solid_type
     * @param string $solid_type Export the solid body to IGES `solid`, `surface` or `wireframe`. By default, it is set to `solid`.
     * @return $this
     */
    public function setSolidType($solid_type)
    {
        $allowed_values = array('solid', 'surface', 'wireframe');
        if (!is_null($solid_type) && (!in_array($solid_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'solid_type', must be one of 'solid', 'surface', 'wireframe'");
        }
        $this->container['solid_type'] = $solid_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Autodesk\Forge\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Autodesk\Forge\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


