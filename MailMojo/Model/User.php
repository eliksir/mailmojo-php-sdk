<?php
/**
 * User
 *
 * PHP version 5
 *
 * @category Class
 * @package  MailMojo
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MailMojo API
 *
 * v1 of the MailMojo API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: hjelp@mailmojo.no
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MailMojo\Model;

use \ArrayAccess;

/**
 * User Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     MailMojo
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class User implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'address' => 'string',
        'city' => 'string',
        'contact_email' => 'string',
        'contact_name' => 'string',
        'created' => '\DateTime',
        'logo_url' => 'string',
        'name' => 'string',
        'partner' => 'string',
        'plan' => 'string',
        'trial_expires' => '\DateTime',
        'username' => 'string',
        'zip_code' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'address' => 'address',
        'city' => 'city',
        'contact_email' => 'contact_email',
        'contact_name' => 'contact_name',
        'created' => 'created',
        'logo_url' => 'logo_url',
        'name' => 'name',
        'partner' => 'partner',
        'plan' => 'plan',
        'trial_expires' => 'trial_expires',
        'username' => 'username',
        'zip_code' => 'zip_code'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'address' => 'setAddress',
        'city' => 'setCity',
        'contact_email' => 'setContactEmail',
        'contact_name' => 'setContactName',
        'created' => 'setCreated',
        'logo_url' => 'setLogoUrl',
        'name' => 'setName',
        'partner' => 'setPartner',
        'plan' => 'setPlan',
        'trial_expires' => 'setTrialExpires',
        'username' => 'setUsername',
        'zip_code' => 'setZipCode'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'address' => 'getAddress',
        'city' => 'getCity',
        'contact_email' => 'getContactEmail',
        'contact_name' => 'getContactName',
        'created' => 'getCreated',
        'logo_url' => 'getLogoUrl',
        'name' => 'getName',
        'partner' => 'getPartner',
        'plan' => 'getPlan',
        'trial_expires' => 'getTrialExpires',
        'username' => 'getUsername',
        'zip_code' => 'getZipCode'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['contact_email'] = isset($data['contact_email']) ? $data['contact_email'] : null;
        $this->container['contact_name'] = isset($data['contact_name']) ? $data['contact_name'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['logo_url'] = isset($data['logo_url']) ? $data['logo_url'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['partner'] = isset($data['partner']) ? $data['partner'] : null;
        $this->container['plan'] = isset($data['plan']) ? $data['plan'] : null;
        $this->container['trial_expires'] = isset($data['trial_expires']) ? $data['trial_expires'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['contact_email'] === null) {
            $invalid_properties[] = "'contact_email' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['contact_email'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets address
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets contact_email
     * @return string
     */
    public function getContactEmail()
    {
        return $this->container['contact_email'];
    }

    /**
     * Sets contact_email
     * @param string $contact_email
     * @return $this
     */
    public function setContactEmail($contact_email)
    {
        $this->container['contact_email'] = $contact_email;

        return $this;
    }

    /**
     * Gets contact_name
     * @return string
     */
    public function getContactName()
    {
        return $this->container['contact_name'];
    }

    /**
     * Sets contact_name
     * @param string $contact_name
     * @return $this
     */
    public function setContactName($contact_name)
    {
        $this->container['contact_name'] = $contact_name;

        return $this;
    }

    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param \DateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets logo_url
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->container['logo_url'];
    }

    /**
     * Sets logo_url
     * @param string $logo_url
     * @return $this
     */
    public function setLogoUrl($logo_url)
    {
        $this->container['logo_url'] = $logo_url;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets partner
     * @return string
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     * @param string $partner
     * @return $this
     */
    public function setPartner($partner)
    {
        $this->container['partner'] = $partner;

        return $this;
    }

    /**
     * Gets plan
     * @return string
     */
    public function getPlan()
    {
        return $this->container['plan'];
    }

    /**
     * Sets plan
     * @param string $plan
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->container['plan'] = $plan;

        return $this;
    }

    /**
     * Gets trial_expires
     * @return \DateTime
     */
    public function getTrialExpires()
    {
        return $this->container['trial_expires'];
    }

    /**
     * Sets trial_expires
     * @param \DateTime $trial_expires
     * @return $this
     */
    public function setTrialExpires($trial_expires)
    {
        $this->container['trial_expires'] = $trial_expires;

        return $this;
    }

    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets zip_code
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     * @param string $zip_code
     * @return $this
     */
    public function setZipCode($zip_code)
    {
        $this->container['zip_code'] = $zip_code;

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
            return json_encode(\MailMojo\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\MailMojo\ObjectSerializer::sanitizeForSerialization($this));
    }
}

