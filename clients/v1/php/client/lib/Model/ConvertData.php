<?php
/**
 * ConvertData
 *
 * PHP version 5
 *
 * @category Class
 * @package  MuhimbiPDFOnline\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Muhimbi PDF
 *
 * Convert, Merge, Watermark, Secure and OCR files.
 *
 * OpenAPI spec version: 9.9
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MuhimbiPDFOnline\Client\Model;

use \ArrayAccess;

/**
 * ConvertData Class Doc Comment
 *
 * @category    Class
 * @description Parameters for Convert operation
 * @package     MuhimbiPDFOnline\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ConvertData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'convert_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'use_async_pattern' => 'bool',
        'source_file_name' => 'string',
        'source_file_content' => 'string',
        'sharepoint_file' => '\MuhimbiPDFOnline\Client\Model\SharepointFile',
        'output_format' => 'string',
        'copy_metadata' => 'bool',
        'override_settings' => 'string',
        'template_file_content' => 'string',
        'fail_on_error' => 'bool'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'use_async_pattern' => 'use_async_pattern',
        'source_file_name' => 'source_file_name',
        'source_file_content' => 'source_file_content',
        'sharepoint_file' => 'sharepoint_file',
        'output_format' => 'output_format',
        'copy_metadata' => 'copy_metadata',
        'override_settings' => 'override_settings',
        'template_file_content' => 'template_file_content',
        'fail_on_error' => 'fail_on_error'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'use_async_pattern' => 'setUseAsyncPattern',
        'source_file_name' => 'setSourceFileName',
        'source_file_content' => 'setSourceFileContent',
        'sharepoint_file' => 'setSharepointFile',
        'output_format' => 'setOutputFormat',
        'copy_metadata' => 'setCopyMetadata',
        'override_settings' => 'setOverrideSettings',
        'template_file_content' => 'setTemplateFileContent',
        'fail_on_error' => 'setFailOnError'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'use_async_pattern' => 'getUseAsyncPattern',
        'source_file_name' => 'getSourceFileName',
        'source_file_content' => 'getSourceFileContent',
        'sharepoint_file' => 'getSharepointFile',
        'output_format' => 'getOutputFormat',
        'copy_metadata' => 'getCopyMetadata',
        'override_settings' => 'getOverrideSettings',
        'template_file_content' => 'getTemplateFileContent',
        'fail_on_error' => 'getFailOnError'
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

    const OUTPUT_FORMAT_PDF = 'PDF';
    const OUTPUT_FORMAT_XPS = 'XPS';
    const OUTPUT_FORMAT_DOCX = 'DOCX';
    const OUTPUT_FORMAT_DOC = 'DOC';
    const OUTPUT_FORMAT_ODT = 'ODT';
    const OUTPUT_FORMAT_RTF = 'RTF';
    const OUTPUT_FORMAT_TXT = 'TXT';
    const OUTPUT_FORMAT_MHT = 'MHT';
    const OUTPUT_FORMAT_HTML = 'HTML';
    const OUTPUT_FORMAT_XML = 'XML';
    const OUTPUT_FORMAT_XLS = 'XLS';
    const OUTPUT_FORMAT_XLSX = 'XLSX';
    const OUTPUT_FORMAT_CSV = 'CSV';
    const OUTPUT_FORMAT_ODS = 'ODS';
    const OUTPUT_FORMAT_PPT = 'PPT';
    const OUTPUT_FORMAT_PPTX = 'PPTX';
    const OUTPUT_FORMAT_ODP = 'ODP';
    const OUTPUT_FORMAT_PPS = 'PPS';
    const OUTPUT_FORMAT_PPSX = 'PPSX';
    const OUTPUT_FORMAT_TIFF = 'TIFF';
    const OUTPUT_FORMAT_PNG = 'PNG';
    const OUTPUT_FORMAT_GIF = 'GIF';
    const OUTPUT_FORMAT_JPG = 'JPG';
    const OUTPUT_FORMAT_BMP = 'BMP';
    const OUTPUT_FORMAT_PS = 'PS';
    const OUTPUT_FORMAT_PCL = 'PCL';
    const OUTPUT_FORMAT_EPS = 'EPS';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOutputFormatAllowableValues()
    {
        return [
            self::OUTPUT_FORMAT_PDF,
            self::OUTPUT_FORMAT_XPS,
            self::OUTPUT_FORMAT_DOCX,
            self::OUTPUT_FORMAT_DOC,
            self::OUTPUT_FORMAT_ODT,
            self::OUTPUT_FORMAT_RTF,
            self::OUTPUT_FORMAT_TXT,
            self::OUTPUT_FORMAT_MHT,
            self::OUTPUT_FORMAT_HTML,
            self::OUTPUT_FORMAT_XML,
            self::OUTPUT_FORMAT_XLS,
            self::OUTPUT_FORMAT_XLSX,
            self::OUTPUT_FORMAT_CSV,
            self::OUTPUT_FORMAT_ODS,
            self::OUTPUT_FORMAT_PPT,
            self::OUTPUT_FORMAT_PPTX,
            self::OUTPUT_FORMAT_ODP,
            self::OUTPUT_FORMAT_PPS,
            self::OUTPUT_FORMAT_PPSX,
            self::OUTPUT_FORMAT_TIFF,
            self::OUTPUT_FORMAT_PNG,
            self::OUTPUT_FORMAT_GIF,
            self::OUTPUT_FORMAT_JPG,
            self::OUTPUT_FORMAT_BMP,
            self::OUTPUT_FORMAT_PS,
            self::OUTPUT_FORMAT_PCL,
            self::OUTPUT_FORMAT_EPS,
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
        $this->container['use_async_pattern'] = isset($data['use_async_pattern']) ? $data['use_async_pattern'] : false;
        $this->container['source_file_name'] = isset($data['source_file_name']) ? $data['source_file_name'] : null;
        $this->container['source_file_content'] = isset($data['source_file_content']) ? $data['source_file_content'] : null;
        $this->container['sharepoint_file'] = isset($data['sharepoint_file']) ? $data['sharepoint_file'] : null;
        $this->container['output_format'] = isset($data['output_format']) ? $data['output_format'] : 'PDF';
        $this->container['copy_metadata'] = isset($data['copy_metadata']) ? $data['copy_metadata'] : false;
        $this->container['override_settings'] = isset($data['override_settings']) ? $data['override_settings'] : null;
        $this->container['template_file_content'] = isset($data['template_file_content']) ? $data['template_file_content'] : null;
        $this->container['fail_on_error'] = isset($data['fail_on_error']) ? $data['fail_on_error'] : true;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['source_file_name'] === null) {
            $invalid_properties[] = "'source_file_name' can't be null";
        }
        if ($this->container['source_file_content'] === null) {
            $invalid_properties[] = "'source_file_content' can't be null";
        }
        if ($this->container['output_format'] === null) {
            $invalid_properties[] = "'output_format' can't be null";
        }
        $allowed_values = ["PDF", "XPS", "DOCX", "DOC", "ODT", "RTF", "TXT", "MHT", "HTML", "XML", "XLS", "XLSX", "CSV", "ODS", "PPT", "PPTX", "ODP", "PPS", "PPSX", "TIFF", "PNG", "GIF", "JPG", "BMP", "PS", "PCL", "EPS"];
        if (!in_array($this->container['output_format'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'output_format', must be one of 'PDF', 'XPS', 'DOCX', 'DOC', 'ODT', 'RTF', 'TXT', 'MHT', 'HTML', 'XML', 'XLS', 'XLSX', 'CSV', 'ODS', 'PPT', 'PPTX', 'ODP', 'PPS', 'PPSX', 'TIFF', 'PNG', 'GIF', 'JPG', 'BMP', 'PS', 'PCL', 'EPS'.";
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

        if ($this->container['source_file_name'] === null) {
            return false;
        }
        if ($this->container['source_file_content'] === null) {
            return false;
        }
        if ($this->container['output_format'] === null) {
            return false;
        }
        $allowed_values = ["PDF", "XPS", "DOCX", "DOC", "ODT", "RTF", "TXT", "MHT", "HTML", "XML", "XLS", "XLSX", "CSV", "ODS", "PPT", "PPTX", "ODP", "PPS", "PPSX", "TIFF", "PNG", "GIF", "JPG", "BMP", "PS", "PCL", "EPS"];
        if (!in_array($this->container['output_format'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets use_async_pattern
     * @return bool
     */
    public function getUseAsyncPattern()
    {
        return $this->container['use_async_pattern'];
    }

    /**
     * Sets use_async_pattern
     * @param bool $use_async_pattern Use async behaviour for API request
     * @return $this
     */
    public function setUseAsyncPattern($use_async_pattern)
    {
        $this->container['use_async_pattern'] = $use_async_pattern;

        return $this;
    }

    /**
     * Gets source_file_name
     * @return string
     */
    public function getSourceFileName()
    {
        return $this->container['source_file_name'];
    }

    /**
     * Sets source_file_name
     * @param string $source_file_name Name of the source file including extension
     * @return $this
     */
    public function setSourceFileName($source_file_name)
    {
        $this->container['source_file_name'] = $source_file_name;

        return $this;
    }

    /**
     * Gets source_file_content
     * @return string
     */
    public function getSourceFileContent()
    {
        return $this->container['source_file_content'];
    }

    /**
     * Sets source_file_content
     * @param string $source_file_content Content of the file to convert
     * @return $this
     */
    public function setSourceFileContent($source_file_content)
    {
        $this->container['source_file_content'] = $source_file_content;

        return $this;
    }

    /**
     * Gets sharepoint_file
     * @return \MuhimbiPDFOnline\Client\Model\SharepointFile
     */
    public function getSharepointFile()
    {
        return $this->container['sharepoint_file'];
    }

    /**
     * Sets sharepoint_file
     * @param \MuhimbiPDFOnline\Client\Model\SharepointFile $sharepoint_file
     * @return $this
     */
    public function setSharepointFile($sharepoint_file)
    {
        $this->container['sharepoint_file'] = $sharepoint_file;

        return $this;
    }

    /**
     * Gets output_format
     * @return string
     */
    public function getOutputFormat()
    {
        return $this->container['output_format'];
    }

    /**
     * Sets output_format
     * @param string $output_format Output format
     * @return $this
     */
    public function setOutputFormat($output_format)
    {
        $allowed_values = array('PDF', 'XPS', 'DOCX', 'DOC', 'ODT', 'RTF', 'TXT', 'MHT', 'HTML', 'XML', 'XLS', 'XLSX', 'CSV', 'ODS', 'PPT', 'PPTX', 'ODP', 'PPS', 'PPSX', 'TIFF', 'PNG', 'GIF', 'JPG', 'BMP', 'PS', 'PCL', 'EPS');
        if ((!in_array($output_format, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'output_format', must be one of 'PDF', 'XPS', 'DOCX', 'DOC', 'ODT', 'RTF', 'TXT', 'MHT', 'HTML', 'XML', 'XLS', 'XLSX', 'CSV', 'ODS', 'PPT', 'PPTX', 'ODP', 'PPS', 'PPSX', 'TIFF', 'PNG', 'GIF', 'JPG', 'BMP', 'PS', 'PCL', 'EPS'");
        }
        $this->container['output_format'] = $output_format;

        return $this;
    }

    /**
     * Gets copy_metadata
     * @return bool
     */
    public function getCopyMetadata()
    {
        return $this->container['copy_metadata'];
    }

    /**
     * Sets copy_metadata
     * @param bool $copy_metadata Copy metadata (Only for SharePoint operations)
     * @return $this
     */
    public function setCopyMetadata($copy_metadata)
    {
        $this->container['copy_metadata'] = $copy_metadata;

        return $this;
    }

    /**
     * Gets override_settings
     * @return string
     */
    public function getOverrideSettings()
    {
        return $this->container['override_settings'];
    }

    /**
     * Sets override_settings
     * @param string $override_settings Optional settings using Muhimbi's XML syntax
     * @return $this
     */
    public function setOverrideSettings($override_settings)
    {
        $this->container['override_settings'] = $override_settings;

        return $this;
    }

    /**
     * Gets template_file_content
     * @return string
     */
    public function getTemplateFileContent()
    {
        return $this->container['template_file_content'];
    }

    /**
     * Sets template_file_content
     * @param string $template_file_content Optional template file content (e.g. infopath XSN file)
     * @return $this
     */
    public function setTemplateFileContent($template_file_content)
    {
        $this->container['template_file_content'] = $template_file_content;

        return $this;
    }

    /**
     * Gets fail_on_error
     * @return bool
     */
    public function getFailOnError()
    {
        return $this->container['fail_on_error'];
    }

    /**
     * Sets fail_on_error
     * @param bool $fail_on_error Fail on error
     * @return $this
     */
    public function setFailOnError($fail_on_error)
    {
        $this->container['fail_on_error'] = $fail_on_error;

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
            return json_encode(\MuhimbiPDFOnline\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\MuhimbiPDFOnline\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

