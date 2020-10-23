<?php
/**
 * ListDetail
 *
 * PHP version 5
 *
 * @category Class
 * @package  MailMojo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MailMojo API
 *
 * v1 of the MailMojo API
 *
 * OpenAPI spec version: 1.1.0
 * Contact: hjelp@mailmojo.no
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.16
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MailMojo\MailMojo\Model;

use \ArrayAccess;
use \MailMojo\ObjectSerializer;

/**
 * ListDetail Class Doc Comment
 *
 * @category Class
 * @package  MailMojo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => '\DateTime',
        'description' => 'string',
        'facebook' => 'string',
        'from_email' => 'string',
        'from_name' => 'string',
        'id' => 'int',
        'instagram' => 'string',
        'linkedin' => 'string',
        'name' => 'string',
        'pinterest' => 'string',
        'segments' => '\MailMojo\MailMojo\Model\Segment[]',
        'subscribe_redirect_url' => 'string',
        'subscribe_url' => 'string',
        'twitter' => 'string',
        'unsubscribe_cascades' => 'bool',
        'unsubscribe_redirect_url' => 'string',
        'unsubscribe_url' => 'string',
        'website' => 'string',
        'youtube' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => 'date-time',
        'description' => null,
        'facebook' => 'url',
        'from_email' => 'email',
        'from_name' => null,
        'id' => 'int32',
        'instagram' => null,
        'linkedin' => 'url',
        'name' => null,
        'pinterest' => null,
        'segments' => null,
        'subscribe_redirect_url' => 'url',
        'subscribe_url' => null,
        'twitter' => null,
        'unsubscribe_cascades' => null,
        'unsubscribe_redirect_url' => 'url',
        'unsubscribe_url' => null,
        'website' => 'url',
        'youtube' => null
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
        'created' => 'created',
        'description' => 'description',
        'facebook' => 'facebook',
        'from_email' => 'from_email',
        'from_name' => 'from_name',
        'id' => 'id',
        'instagram' => 'instagram',
        'linkedin' => 'linkedin',
        'name' => 'name',
        'pinterest' => 'pinterest',
        'segments' => 'segments',
        'subscribe_redirect_url' => 'subscribe_redirect_url',
        'subscribe_url' => 'subscribe_url',
        'twitter' => 'twitter',
        'unsubscribe_cascades' => 'unsubscribe_cascades',
        'unsubscribe_redirect_url' => 'unsubscribe_redirect_url',
        'unsubscribe_url' => 'unsubscribe_url',
        'website' => 'website',
        'youtube' => 'youtube'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'description' => 'setDescription',
        'facebook' => 'setFacebook',
        'from_email' => 'setFromEmail',
        'from_name' => 'setFromName',
        'id' => 'setId',
        'instagram' => 'setInstagram',
        'linkedin' => 'setLinkedin',
        'name' => 'setName',
        'pinterest' => 'setPinterest',
        'segments' => 'setSegments',
        'subscribe_redirect_url' => 'setSubscribeRedirectUrl',
        'subscribe_url' => 'setSubscribeUrl',
        'twitter' => 'setTwitter',
        'unsubscribe_cascades' => 'setUnsubscribeCascades',
        'unsubscribe_redirect_url' => 'setUnsubscribeRedirectUrl',
        'unsubscribe_url' => 'setUnsubscribeUrl',
        'website' => 'setWebsite',
        'youtube' => 'setYoutube'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'description' => 'getDescription',
        'facebook' => 'getFacebook',
        'from_email' => 'getFromEmail',
        'from_name' => 'getFromName',
        'id' => 'getId',
        'instagram' => 'getInstagram',
        'linkedin' => 'getLinkedin',
        'name' => 'getName',
        'pinterest' => 'getPinterest',
        'segments' => 'getSegments',
        'subscribe_redirect_url' => 'getSubscribeRedirectUrl',
        'subscribe_url' => 'getSubscribeUrl',
        'twitter' => 'getTwitter',
        'unsubscribe_cascades' => 'getUnsubscribeCascades',
        'unsubscribe_redirect_url' => 'getUnsubscribeRedirectUrl',
        'unsubscribe_url' => 'getUnsubscribeUrl',
        'website' => 'getWebsite',
        'youtube' => 'getYoutube'
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
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['facebook'] = isset($data['facebook']) ? $data['facebook'] : null;
        $this->container['from_email'] = isset($data['from_email']) ? $data['from_email'] : null;
        $this->container['from_name'] = isset($data['from_name']) ? $data['from_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instagram'] = isset($data['instagram']) ? $data['instagram'] : null;
        $this->container['linkedin'] = isset($data['linkedin']) ? $data['linkedin'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['pinterest'] = isset($data['pinterest']) ? $data['pinterest'] : null;
        $this->container['segments'] = isset($data['segments']) ? $data['segments'] : null;
        $this->container['subscribe_redirect_url'] = isset($data['subscribe_redirect_url']) ? $data['subscribe_redirect_url'] : null;
        $this->container['subscribe_url'] = isset($data['subscribe_url']) ? $data['subscribe_url'] : null;
        $this->container['twitter'] = isset($data['twitter']) ? $data['twitter'] : null;
        $this->container['unsubscribe_cascades'] = isset($data['unsubscribe_cascades']) ? $data['unsubscribe_cascades'] : null;
        $this->container['unsubscribe_redirect_url'] = isset($data['unsubscribe_redirect_url']) ? $data['unsubscribe_redirect_url'] : null;
        $this->container['unsubscribe_url'] = isset($data['unsubscribe_url']) ? $data['unsubscribe_url'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['youtube'] = isset($data['youtube']) ? $data['youtube'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['from_email'] === null) {
            $invalidProperties[] = "'from_email' can't be null";
        }
        if ((mb_strlen($this->container['from_email']) < 5)) {
            $invalidProperties[] = "invalid value for 'from_email', the character length must be bigger than or equal to 5.";
        }

        if ($this->container['from_name'] === null) {
            $invalidProperties[] = "'from_name' can't be null";
        }
        if ((mb_strlen($this->container['from_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'from_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['subscribe_redirect_url'] === null) {
            $invalidProperties[] = "'subscribe_redirect_url' can't be null";
        }
        if ($this->container['unsubscribe_redirect_url'] === null) {
            $invalidProperties[] = "'unsubscribe_redirect_url' can't be null";
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
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

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
     * Gets facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->container['facebook'];
    }

    /**
     * Sets facebook
     *
     * @param string $facebook facebook
     *
     * @return $this
     */
    public function setFacebook($facebook)
    {
        $this->container['facebook'] = $facebook;

        return $this;
    }

    /**
     * Gets from_email
     *
     * @return string
     */
    public function getFromEmail()
    {
        return $this->container['from_email'];
    }

    /**
     * Sets from_email
     *
     * @param string $from_email from_email
     *
     * @return $this
     */
    public function setFromEmail($from_email)
    {

        if ((mb_strlen($from_email) < 5)) {
            throw new \InvalidArgumentException('invalid length for $from_email when calling ListDetail., must be bigger than or equal to 5.');
        }

        $this->container['from_email'] = $from_email;

        return $this;
    }

    /**
     * Gets from_name
     *
     * @return string
     */
    public function getFromName()
    {
        return $this->container['from_name'];
    }

    /**
     * Sets from_name
     *
     * @param string $from_name from_name
     *
     * @return $this
     */
    public function setFromName($from_name)
    {

        if ((mb_strlen($from_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $from_name when calling ListDetail., must be bigger than or equal to 1.');
        }

        $this->container['from_name'] = $from_name;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets instagram
     *
     * @return string
     */
    public function getInstagram()
    {
        return $this->container['instagram'];
    }

    /**
     * Sets instagram
     *
     * @param string $instagram instagram
     *
     * @return $this
     */
    public function setInstagram($instagram)
    {
        $this->container['instagram'] = $instagram;

        return $this;
    }

    /**
     * Gets linkedin
     *
     * @return string
     */
    public function getLinkedin()
    {
        return $this->container['linkedin'];
    }

    /**
     * Sets linkedin
     *
     * @param string $linkedin linkedin
     *
     * @return $this
     */
    public function setLinkedin($linkedin)
    {
        $this->container['linkedin'] = $linkedin;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pinterest
     *
     * @return string
     */
    public function getPinterest()
    {
        return $this->container['pinterest'];
    }

    /**
     * Sets pinterest
     *
     * @param string $pinterest pinterest
     *
     * @return $this
     */
    public function setPinterest($pinterest)
    {
        $this->container['pinterest'] = $pinterest;

        return $this;
    }

    /**
     * Gets segments
     *
     * @return \MailMojo\MailMojo\Model\Segment[]
     */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
     * Sets segments
     *
     * @param \MailMojo\MailMojo\Model\Segment[] $segments segments
     *
     * @return $this
     */
    public function setSegments($segments)
    {
        $this->container['segments'] = $segments;

        return $this;
    }

    /**
     * Gets subscribe_redirect_url
     *
     * @return string
     */
    public function getSubscribeRedirectUrl()
    {
        return $this->container['subscribe_redirect_url'];
    }

    /**
     * Sets subscribe_redirect_url
     *
     * @param string $subscribe_redirect_url subscribe_redirect_url
     *
     * @return $this
     */
    public function setSubscribeRedirectUrl($subscribe_redirect_url)
    {
        $this->container['subscribe_redirect_url'] = $subscribe_redirect_url;

        return $this;
    }

    /**
     * Gets subscribe_url
     *
     * @return string
     */
    public function getSubscribeUrl()
    {
        return $this->container['subscribe_url'];
    }

    /**
     * Sets subscribe_url
     *
     * @param string $subscribe_url subscribe_url
     *
     * @return $this
     */
    public function setSubscribeUrl($subscribe_url)
    {
        $this->container['subscribe_url'] = $subscribe_url;

        return $this;
    }

    /**
     * Gets twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->container['twitter'];
    }

    /**
     * Sets twitter
     *
     * @param string $twitter twitter
     *
     * @return $this
     */
    public function setTwitter($twitter)
    {
        $this->container['twitter'] = $twitter;

        return $this;
    }

    /**
     * Gets unsubscribe_cascades
     *
     * @return bool
     */
    public function getUnsubscribeCascades()
    {
        return $this->container['unsubscribe_cascades'];
    }

    /**
     * Sets unsubscribe_cascades
     *
     * @param bool $unsubscribe_cascades unsubscribe_cascades
     *
     * @return $this
     */
    public function setUnsubscribeCascades($unsubscribe_cascades)
    {
        $this->container['unsubscribe_cascades'] = $unsubscribe_cascades;

        return $this;
    }

    /**
     * Gets unsubscribe_redirect_url
     *
     * @return string
     */
    public function getUnsubscribeRedirectUrl()
    {
        return $this->container['unsubscribe_redirect_url'];
    }

    /**
     * Sets unsubscribe_redirect_url
     *
     * @param string $unsubscribe_redirect_url unsubscribe_redirect_url
     *
     * @return $this
     */
    public function setUnsubscribeRedirectUrl($unsubscribe_redirect_url)
    {
        $this->container['unsubscribe_redirect_url'] = $unsubscribe_redirect_url;

        return $this;
    }

    /**
     * Gets unsubscribe_url
     *
     * @return string
     */
    public function getUnsubscribeUrl()
    {
        return $this->container['unsubscribe_url'];
    }

    /**
     * Sets unsubscribe_url
     *
     * @param string $unsubscribe_url unsubscribe_url
     *
     * @return $this
     */
    public function setUnsubscribeUrl($unsubscribe_url)
    {
        $this->container['unsubscribe_url'] = $unsubscribe_url;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string $website website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets youtube
     *
     * @return string
     */
    public function getYoutube()
    {
        return $this->container['youtube'];
    }

    /**
     * Sets youtube
     *
     * @param string $youtube youtube
     *
     * @return $this
     */
    public function setYoutube($youtube)
    {
        $this->container['youtube'] = $youtube;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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


