<?php
/**
 * AccountsApi
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

namespace MailMojo\Api;

use \MailMojo\Configuration;
use \MailMojo\ApiClient;
use \MailMojo\ApiException;
use \MailMojo\ObjectSerializer;

/**
 * AccountsApi Class Doc Comment
 *
 * @category Class
 * @package  MailMojo
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountsApi
{

    /**
     * API Client
     *
     * @var \MailMojo\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \MailMojo\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\MailMojo\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.mailmojo.no/v1');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \MailMojo\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \MailMojo\ApiClient $apiClient set the API client
     *
     * @return AccountsApi
     */
    public function setApiClient(\MailMojo\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation accountsPost
     *
     * Create an account.
     *
     * @param \MailMojo\Model\MinimalUser $user  (required)
     * @return \MailMojo\Model\User
     * @throws \MailMojo\ApiException on non-2xx response
     */
    public function accountsPost($user)
    {
        list($response) = $this->accountsPostWithHttpInfo($user);
        return $response;
    }

    /**
     * Operation accountsPostWithHttpInfo
     *
     * Create an account.
     *
     * @param \MailMojo\Model\MinimalUser $user  (required)
     * @return Array of \MailMojo\Model\User, HTTP status code, HTTP response headers (array of strings)
     * @throws \MailMojo\ApiException on non-2xx response
     */
    public function accountsPostWithHttpInfo($user)
    {
        // verify the required parameter 'user' is set
        if ($user === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user when calling accountsPost');
        }
        // parse inputs
        $resourcePath = "/accounts/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($user)) {
            $_tempBody = $user;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MailMojo\Model\User',
                '/accounts/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MailMojo\Model\User', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MailMojo\Model\User', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation accountsUsernameGet
     *
     * Retrieve account details.
     *
     * @param string $username Username of the account to get details for, or the special username \&quot;me\&quot; to get details about your authenticated user. (required)
     * @return \MailMojo\Model\User
     * @throws \MailMojo\ApiException on non-2xx response
     */
    public function accountsUsernameGet($username)
    {
        list($response) = $this->accountsUsernameGetWithHttpInfo($username);
        return $response;
    }

    /**
     * Operation accountsUsernameGetWithHttpInfo
     *
     * Retrieve account details.
     *
     * @param string $username Username of the account to get details for, or the special username \&quot;me\&quot; to get details about your authenticated user. (required)
     * @return Array of \MailMojo\Model\User, HTTP status code, HTTP response headers (array of strings)
     * @throws \MailMojo\ApiException on non-2xx response
     */
    public function accountsUsernameGetWithHttpInfo($username)
    {
        // verify the required parameter 'username' is set
        if ($username === null) {
            throw new \InvalidArgumentException('Missing the required parameter $username when calling accountsUsernameGet');
        }
        // parse inputs
        $resourcePath = "/accounts/{username}/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($username !== null) {
            $resourcePath = str_replace(
                "{" . "username" . "}",
                $this->apiClient->getSerializer()->toPathValue($username),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MailMojo\Model\User',
                '/accounts/{username}/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MailMojo\Model\User', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MailMojo\Model\User', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation accountsUsernamePost
     *
     * Update account details.
     *
     * @param string $username Username of the user to update. (required)
     * @return \MailMojo\Model\User
     * @throws \MailMojo\ApiException on non-2xx response
     */
    public function accountsUsernamePost($username)
    {
        list($response) = $this->accountsUsernamePostWithHttpInfo($username);
        return $response;
    }

    /**
     * Operation accountsUsernamePostWithHttpInfo
     *
     * Update account details.
     *
     * @param string $username Username of the user to update. (required)
     * @return Array of \MailMojo\Model\User, HTTP status code, HTTP response headers (array of strings)
     * @throws \MailMojo\ApiException on non-2xx response
     */
    public function accountsUsernamePostWithHttpInfo($username)
    {
        // verify the required parameter 'username' is set
        if ($username === null) {
            throw new \InvalidArgumentException('Missing the required parameter $username when calling accountsUsernamePost');
        }
        // parse inputs
        $resourcePath = "/accounts/{username}/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($username !== null) {
            $resourcePath = str_replace(
                "{" . "username" . "}",
                $this->apiClient->getSerializer()->toPathValue($username),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MailMojo\Model\User',
                '/accounts/{username}/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MailMojo\Model\User', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MailMojo\Model\User', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
