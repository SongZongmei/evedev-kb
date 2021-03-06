<?php
/**
 * CalendarApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.8.3
 * 
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

namespace EsiClient;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * CalendarApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CalendarApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://esi.evetech.net');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return CalendarApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getCharactersCharacterIdCalendar
     *
     * List calendar event summaries
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param int $from_event The event ID to retrieve events from (optional)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param string $token Access token to use if unable to set a header (optional)
     * @return \Swagger\Client\Model\GetCharactersCharacterIdCalendar200Ok[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCharactersCharacterIdCalendar($character_id, $datasource = null, $from_event = null, $if_none_match = null, $token = null)
    {
        list($response) = $this->getCharactersCharacterIdCalendarWithHttpInfo($character_id, $datasource, $from_event, $if_none_match, $token);
        return $response;
    }

    /**
     * Operation getCharactersCharacterIdCalendarWithHttpInfo
     *
     * List calendar event summaries
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param int $from_event The event ID to retrieve events from (optional)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param string $token Access token to use if unable to set a header (optional)
     * @return Array of \Swagger\Client\Model\GetCharactersCharacterIdCalendar200Ok[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCharactersCharacterIdCalendarWithHttpInfo($character_id, $datasource = null, $from_event = null, $if_none_match = null, $token = null)
    {
        // verify the required parameter 'character_id' is set
        if ($character_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $character_id when calling getCharactersCharacterIdCalendar');
        }
        if (($character_id < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$character_id" when calling CalendarApi.getCharactersCharacterIdCalendar, must be bigger than or equal to 1.0.');
        }

        // parse inputs
        $resourcePath = "/v1/characters/{character_id}/calendar/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($from_event !== null) {
            $queryParams['from_event'] = $this->apiClient->getSerializer()->toQueryValue($from_event);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
        }
        // header params
        if ($if_none_match !== null) {
            $headerParams['If-None-Match'] = $this->apiClient->getSerializer()->toHeaderValue($if_none_match);
        }
        // path params
        if ($character_id !== null) {
            $resourcePath = str_replace(
                "{" . "character_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($character_id),
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
                '\Swagger\Client\Model\GetCharactersCharacterIdCalendar200Ok[]',
                '/v1/characters/{character_id}/calendar/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetCharactersCharacterIdCalendar200Ok[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetCharactersCharacterIdCalendar200Ok[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BadRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Unauthorized', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 420:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorLimited', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ServiceUnavailable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GatewayTimeout', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCharactersCharacterIdCalendarEventId
     *
     * Get an event
     *
     * @param int $character_id An EVE character ID (required)
     * @param int $event_id The id of the event requested (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param string $token Access token to use if unable to set a header (optional)
     * @return \Swagger\Client\Model\GetCharactersCharacterIdCalendarEventIdOk
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCharactersCharacterIdCalendarEventId($character_id, $event_id, $datasource = null, $if_none_match = null, $token = null)
    {
        list($response) = $this->getCharactersCharacterIdCalendarEventIdWithHttpInfo($character_id, $event_id, $datasource, $if_none_match, $token);
        return $response;
    }

    /**
     * Operation getCharactersCharacterIdCalendarEventIdWithHttpInfo
     *
     * Get an event
     *
     * @param int $character_id An EVE character ID (required)
     * @param int $event_id The id of the event requested (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param string $token Access token to use if unable to set a header (optional)
     * @return Array of \Swagger\Client\Model\GetCharactersCharacterIdCalendarEventIdOk, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCharactersCharacterIdCalendarEventIdWithHttpInfo($character_id, $event_id, $datasource = null, $if_none_match = null, $token = null)
    {
        // verify the required parameter 'character_id' is set
        if ($character_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $character_id when calling getCharactersCharacterIdCalendarEventId');
        }
        if (($character_id < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$character_id" when calling CalendarApi.getCharactersCharacterIdCalendarEventId, must be bigger than or equal to 1.0.');
        }

        // verify the required parameter 'event_id' is set
        if ($event_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $event_id when calling getCharactersCharacterIdCalendarEventId');
        }
        // parse inputs
        $resourcePath = "/v3/characters/{character_id}/calendar/{event_id}/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
        }
        // header params
        if ($if_none_match !== null) {
            $headerParams['If-None-Match'] = $this->apiClient->getSerializer()->toHeaderValue($if_none_match);
        }
        // path params
        if ($character_id !== null) {
            $resourcePath = str_replace(
                "{" . "character_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($character_id),
                $resourcePath
            );
        }
        // path params
        if ($event_id !== null) {
            $resourcePath = str_replace(
                "{" . "event_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($event_id),
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
                '\Swagger\Client\Model\GetCharactersCharacterIdCalendarEventIdOk',
                '/v3/characters/{character_id}/calendar/{event_id}/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetCharactersCharacterIdCalendarEventIdOk', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetCharactersCharacterIdCalendarEventIdOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BadRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Unauthorized', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetCharactersCharacterIdCalendarEventIdNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 420:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorLimited', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ServiceUnavailable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GatewayTimeout', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCharactersCharacterIdCalendarEventIdAttendees
     *
     * Get attendees
     *
     * @param int $character_id An EVE character ID (required)
     * @param int $event_id The id of the event requested (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param string $token Access token to use if unable to set a header (optional)
     * @return \Swagger\Client\Model\GetCharactersCharacterIdCalendarEventIdAttendees200Ok[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCharactersCharacterIdCalendarEventIdAttendees($character_id, $event_id, $datasource = null, $if_none_match = null, $token = null)
    {
        list($response) = $this->getCharactersCharacterIdCalendarEventIdAttendeesWithHttpInfo($character_id, $event_id, $datasource, $if_none_match, $token);
        return $response;
    }

    /**
     * Operation getCharactersCharacterIdCalendarEventIdAttendeesWithHttpInfo
     *
     * Get attendees
     *
     * @param int $character_id An EVE character ID (required)
     * @param int $event_id The id of the event requested (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param string $token Access token to use if unable to set a header (optional)
     * @return Array of \Swagger\Client\Model\GetCharactersCharacterIdCalendarEventIdAttendees200Ok[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCharactersCharacterIdCalendarEventIdAttendeesWithHttpInfo($character_id, $event_id, $datasource = null, $if_none_match = null, $token = null)
    {
        // verify the required parameter 'character_id' is set
        if ($character_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $character_id when calling getCharactersCharacterIdCalendarEventIdAttendees');
        }
        if (($character_id < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$character_id" when calling CalendarApi.getCharactersCharacterIdCalendarEventIdAttendees, must be bigger than or equal to 1.0.');
        }

        // verify the required parameter 'event_id' is set
        if ($event_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $event_id when calling getCharactersCharacterIdCalendarEventIdAttendees');
        }
        // parse inputs
        $resourcePath = "/v1/characters/{character_id}/calendar/{event_id}/attendees/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
        }
        // header params
        if ($if_none_match !== null) {
            $headerParams['If-None-Match'] = $this->apiClient->getSerializer()->toHeaderValue($if_none_match);
        }
        // path params
        if ($character_id !== null) {
            $resourcePath = str_replace(
                "{" . "character_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($character_id),
                $resourcePath
            );
        }
        // path params
        if ($event_id !== null) {
            $resourcePath = str_replace(
                "{" . "event_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($event_id),
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
                '\Swagger\Client\Model\GetCharactersCharacterIdCalendarEventIdAttendees200Ok[]',
                '/v1/characters/{character_id}/calendar/{event_id}/attendees/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetCharactersCharacterIdCalendarEventIdAttendees200Ok[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetCharactersCharacterIdCalendarEventIdAttendees200Ok[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BadRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Unauthorized', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetCharactersCharacterIdCalendarEventIdAttendeesNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 420:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorLimited', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ServiceUnavailable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GatewayTimeout', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation putCharactersCharacterIdCalendarEventId
     *
     * Respond to an event
     *
     * @param int $character_id An EVE character ID (required)
     * @param int $event_id The ID of the event requested (required)
     * @param \Swagger\Client\Model\PutCharactersCharacterIdCalendarEventIdResponse $response The response value to set, overriding current value. (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $token Access token to use if unable to set a header (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function putCharactersCharacterIdCalendarEventId($character_id, $event_id, $response, $datasource = null, $token = null)
    {
        list($response) = $this->putCharactersCharacterIdCalendarEventIdWithHttpInfo($character_id, $event_id, $response, $datasource, $token);
        return $response;
    }

    /**
     * Operation putCharactersCharacterIdCalendarEventIdWithHttpInfo
     *
     * Respond to an event
     *
     * @param int $character_id An EVE character ID (required)
     * @param int $event_id The ID of the event requested (required)
     * @param \Swagger\Client\Model\PutCharactersCharacterIdCalendarEventIdResponse $response The response value to set, overriding current value. (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $token Access token to use if unable to set a header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function putCharactersCharacterIdCalendarEventIdWithHttpInfo($character_id, $event_id, $response, $datasource = null, $token = null)
    {
        // verify the required parameter 'character_id' is set
        if ($character_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $character_id when calling putCharactersCharacterIdCalendarEventId');
        }
        if (($character_id < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$character_id" when calling CalendarApi.putCharactersCharacterIdCalendarEventId, must be bigger than or equal to 1.0.');
        }

        // verify the required parameter 'event_id' is set
        if ($event_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $event_id when calling putCharactersCharacterIdCalendarEventId');
        }
        // verify the required parameter 'response' is set
        if ($response === null) {
            throw new \InvalidArgumentException('Missing the required parameter $response when calling putCharactersCharacterIdCalendarEventId');
        }
        // parse inputs
        $resourcePath = "/v3/characters/{character_id}/calendar/{event_id}/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
        }
        // path params
        if ($character_id !== null) {
            $resourcePath = str_replace(
                "{" . "character_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($character_id),
                $resourcePath
            );
        }
        // path params
        if ($event_id !== null) {
            $resourcePath = str_replace(
                "{" . "event_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($event_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($response)) {
            $_tempBody = $response;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v3/characters/{character_id}/calendar/{event_id}/'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BadRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Unauthorized', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 420:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorLimited', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ServiceUnavailable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GatewayTimeout', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
