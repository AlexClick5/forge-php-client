<?php
/**
 * FoldersApi
 * PHP version 5
 *
 * @category Class
 * @package  Autodesk\Client
 * @author   Swagger Codegen team
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

namespace Autodesk\Client\Api;

use \Autodesk\Client\ApiClient;
use \Autodesk\Client\ApiException;
use \Autodesk\Client\Configuration;
use \Autodesk\Client\ObjectSerializer;

/**
 * FoldersApi Class Doc Comment
 *
 * @category Class
 * @package  Autodesk\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FoldersApi extends AbstractApi
{
    /**
     * Operation getFolder
     *
     * 
     *
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @param string $folder_id the &#x60;folder id&#x60; (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\Folder
     */
    public function getFolder($project_id, $folder_id)
    {
        list($response) = $this->getFolderWithHttpInfo($project_id, $folder_id);
        return $response;
    }

    /**
     * Operation getFolderWithHttpInfo
     *
     * 
     *
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @param string $folder_id the &#x60;folder id&#x60; (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\Folder, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFolderWithHttpInfo($project_id, $folder_id)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $project_id when calling getFolder');
        }
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $folder_id when calling getFolder');
        }
        // parse inputs
        $resourcePath = "/data/v1/projects/{project_id}/folders/{folder_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.api+json']);

        // path params
        if ($project_id !== null) {
            $resourcePath = str_replace(
                "{" . "project_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($project_id),
                $resourcePath
            );
        }
        // path params
        if ($folder_id !== null) {
            $resourcePath = str_replace(
                "{" . "folder_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($folder_id),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Client\Model\Folder',
                '/data/v1/projects/{project_id}/folders/{folder_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\Folder', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Folder', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\BadInput', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getFolderContents
     *
     * 
     *
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @param string $folder_id the &#x60;folder id&#x60; (required)
     * @param string[] $filter_type filter by the &#x60;type&#x60; of the &#x60;ref&#x60; target (optional)
     * @param string[] $filter_id filter by the &#x60;id&#x60; of the &#x60;ref&#x60; target (optional)
     * @param string[] $filter_extension_type filter by the extension type (optional)
     * @param int $page_number specify the page number (optional)
     * @param int $page_limit specify the maximal number of elements per page (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\JsonApiCollection
     */
    public function getFolderContents($project_id, $folder_id, $filter_type = null, $filter_id = null, $filter_extension_type = null, $page_number = null, $page_limit = null)
    {
        list($response) = $this->getFolderContentsWithHttpInfo($project_id, $folder_id, $filter_type, $filter_id, $filter_extension_type, $page_number, $page_limit);
        return $response;
    }

    /**
     * Operation getFolderContentsWithHttpInfo
     *
     * 
     *
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @param string $folder_id the &#x60;folder id&#x60; (required)
     * @param string[] $filter_type filter by the &#x60;type&#x60; of the &#x60;ref&#x60; target (optional)
     * @param string[] $filter_id filter by the &#x60;id&#x60; of the &#x60;ref&#x60; target (optional)
     * @param string[] $filter_extension_type filter by the extension type (optional)
     * @param int $page_number specify the page number (optional)
     * @param int $page_limit specify the maximal number of elements per page (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\JsonApiCollection, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFolderContentsWithHttpInfo($project_id, $folder_id, $filter_type = null, $filter_id = null, $filter_extension_type = null, $page_number = null, $page_limit = null)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $project_id when calling getFolderContents');
        }
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $folder_id when calling getFolderContents');
        }
        // parse inputs
        $resourcePath = "/data/v1/projects/{project_id}/folders/{folder_id}/contents";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.api+json']);

        // query params
        if (is_array($filter_type)) {
            $filter_type = $this->apiClient->getSerializer()->serializeCollection($filter_type, 'csv', true);
        }
        if ($filter_type !== null) {
            $queryParams['filter[type]'] = $this->apiClient->getSerializer()->toQueryValue($filter_type);
        }
        // query params
        if (is_array($filter_id)) {
            $filter_id = $this->apiClient->getSerializer()->serializeCollection($filter_id, 'csv', true);
        }
        if ($filter_id !== null) {
            $queryParams['filter[id]'] = $this->apiClient->getSerializer()->toQueryValue($filter_id);
        }
        // query params
        if (is_array($filter_extension_type)) {
            $filter_extension_type = $this->apiClient->getSerializer()->serializeCollection($filter_extension_type, 'csv', true);
        }
        if ($filter_extension_type !== null) {
            $queryParams['filter[extension.type]'] = $this->apiClient->getSerializer()->toQueryValue($filter_extension_type);
        }
        // query params
        if ($page_number !== null) {
            $queryParams['page[number]'] = $this->apiClient->getSerializer()->toQueryValue($page_number);
        }
        // query params
        if ($page_limit !== null) {
            $queryParams['page[limit]'] = $this->apiClient->getSerializer()->toQueryValue($page_limit);
        }
        // path params
        if ($project_id !== null) {
            $resourcePath = str_replace(
                "{" . "project_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($project_id),
                $resourcePath
            );
        }
        // path params
        if ($folder_id !== null) {
            $resourcePath = str_replace(
                "{" . "folder_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($folder_id),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Client\Model\JsonApiCollection',
                '/data/v1/projects/{project_id}/folders/{folder_id}/contents'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\JsonApiCollection', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\JsonApiCollection', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\BadInput', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getFolderParent
     *
     * 
     *
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @param string $folder_id the &#x60;folder id&#x60; (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\Folder
     */
    public function getFolderParent($project_id, $folder_id)
    {
        list($response) = $this->getFolderParentWithHttpInfo($project_id, $folder_id);
        return $response;
    }

    /**
     * Operation getFolderParentWithHttpInfo
     *
     * 
     *
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @param string $folder_id the &#x60;folder id&#x60; (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\Folder, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFolderParentWithHttpInfo($project_id, $folder_id)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $project_id when calling getFolderParent');
        }
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $folder_id when calling getFolderParent');
        }
        // parse inputs
        $resourcePath = "/data/v1/projects/{project_id}/folders/{folder_id}/parent";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.api+json']);

        // path params
        if ($project_id !== null) {
            $resourcePath = str_replace(
                "{" . "project_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($project_id),
                $resourcePath
            );
        }
        // path params
        if ($folder_id !== null) {
            $resourcePath = str_replace(
                "{" . "folder_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($folder_id),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Client\Model\Folder',
                '/data/v1/projects/{project_id}/folders/{folder_id}/parent'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\Folder', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Folder', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\BadInput', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getFolderRefs
     *
     * 
     *
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @param string $folder_id the &#x60;folder id&#x60; (required)
     * @param string[] $filter_type filter by the &#x60;type&#x60; of the &#x60;ref&#x60; target (optional)
     * @param string[] $filter_id filter by the &#x60;id&#x60; of the &#x60;ref&#x60; target (optional)
     * @param string[] $filter_extension_type filter by the extension type (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\JsonApiCollection
     */
    public function getFolderRefs($project_id, $folder_id, $filter_type = null, $filter_id = null, $filter_extension_type = null)
    {
        list($response) = $this->getFolderRefsWithHttpInfo($project_id, $folder_id, $filter_type, $filter_id, $filter_extension_type);
        return $response;
    }

    /**
     * Operation getFolderRefsWithHttpInfo
     *
     * 
     *
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @param string $folder_id the &#x60;folder id&#x60; (required)
     * @param string[] $filter_type filter by the &#x60;type&#x60; of the &#x60;ref&#x60; target (optional)
     * @param string[] $filter_id filter by the &#x60;id&#x60; of the &#x60;ref&#x60; target (optional)
     * @param string[] $filter_extension_type filter by the extension type (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\JsonApiCollection, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFolderRefsWithHttpInfo($project_id, $folder_id, $filter_type = null, $filter_id = null, $filter_extension_type = null)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $project_id when calling getFolderRefs');
        }
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $folder_id when calling getFolderRefs');
        }
        // parse inputs
        $resourcePath = "/data/v1/projects/{project_id}/folders/{folder_id}/refs";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.api+json']);

        // query params
        if (is_array($filter_type)) {
            $filter_type = $this->apiClient->getSerializer()->serializeCollection($filter_type, 'csv', true);
        }
        if ($filter_type !== null) {
            $queryParams['filter[type]'] = $this->apiClient->getSerializer()->toQueryValue($filter_type);
        }
        // query params
        if (is_array($filter_id)) {
            $filter_id = $this->apiClient->getSerializer()->serializeCollection($filter_id, 'csv', true);
        }
        if ($filter_id !== null) {
            $queryParams['filter[id]'] = $this->apiClient->getSerializer()->toQueryValue($filter_id);
        }
        // query params
        if (is_array($filter_extension_type)) {
            $filter_extension_type = $this->apiClient->getSerializer()->serializeCollection($filter_extension_type, 'csv', true);
        }
        if ($filter_extension_type !== null) {
            $queryParams['filter[extension.type]'] = $this->apiClient->getSerializer()->toQueryValue($filter_extension_type);
        }
        // path params
        if ($project_id !== null) {
            $resourcePath = str_replace(
                "{" . "project_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($project_id),
                $resourcePath
            );
        }
        // path params
        if ($folder_id !== null) {
            $resourcePath = str_replace(
                "{" . "folder_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($folder_id),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Client\Model\JsonApiCollection',
                '/data/v1/projects/{project_id}/folders/{folder_id}/refs'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\JsonApiCollection', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\JsonApiCollection', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\BadInput', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getFolderRelationshipsRefs
     *
     * 
     *
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @param string $folder_id the &#x60;folder id&#x60; (required)
     * @param string[] $filter_type filter by the &#x60;type&#x60; of the &#x60;ref&#x60; target (optional)
     * @param string[] $filter_id filter by the &#x60;id&#x60; of the &#x60;ref&#x60; target (optional)
     * @param string[] $filter_ref_type filter by &#x60;refType&#x60; (optional)
     * @param string $filter_direction filter by the direction of the reference (optional)
     * @param string[] $filter_extension_type filter by the extension type (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\Refs
     */
    public function getFolderRelationshipsRefs($project_id, $folder_id, $filter_type = null, $filter_id = null, $filter_ref_type = null, $filter_direction = null, $filter_extension_type = null)
    {
        list($response) = $this->getFolderRelationshipsRefsWithHttpInfo($project_id, $folder_id, $filter_type, $filter_id, $filter_ref_type, $filter_direction, $filter_extension_type);
        return $response;
    }

    /**
     * Operation getFolderRelationshipsRefsWithHttpInfo
     *
     * 
     *
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @param string $folder_id the &#x60;folder id&#x60; (required)
     * @param string[] $filter_type filter by the &#x60;type&#x60; of the &#x60;ref&#x60; target (optional)
     * @param string[] $filter_id filter by the &#x60;id&#x60; of the &#x60;ref&#x60; target (optional)
     * @param string[] $filter_ref_type filter by &#x60;refType&#x60; (optional)
     * @param string $filter_direction filter by the direction of the reference (optional)
     * @param string[] $filter_extension_type filter by the extension type (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\Refs, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFolderRelationshipsRefsWithHttpInfo($project_id, $folder_id, $filter_type = null, $filter_id = null, $filter_ref_type = null, $filter_direction = null, $filter_extension_type = null)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $project_id when calling getFolderRelationshipsRefs');
        }
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $folder_id when calling getFolderRelationshipsRefs');
        }
        // parse inputs
        $resourcePath = "/data/v1/projects/{project_id}/folders/{folder_id}/relationships/refs";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.api+json']);

        // query params
        if (is_array($filter_type)) {
            $filter_type = $this->apiClient->getSerializer()->serializeCollection($filter_type, 'csv', true);
        }
        if ($filter_type !== null) {
            $queryParams['filter[type]'] = $this->apiClient->getSerializer()->toQueryValue($filter_type);
        }
        // query params
        if (is_array($filter_id)) {
            $filter_id = $this->apiClient->getSerializer()->serializeCollection($filter_id, 'csv', true);
        }
        if ($filter_id !== null) {
            $queryParams['filter[id]'] = $this->apiClient->getSerializer()->toQueryValue($filter_id);
        }
        // query params
        if (is_array($filter_ref_type)) {
            $filter_ref_type = $this->apiClient->getSerializer()->serializeCollection($filter_ref_type, 'csv', true);
        }
        if ($filter_ref_type !== null) {
            $queryParams['filter[refType]'] = $this->apiClient->getSerializer()->toQueryValue($filter_ref_type);
        }
        // query params
        if ($filter_direction !== null) {
            $queryParams['filter[direction]'] = $this->apiClient->getSerializer()->toQueryValue($filter_direction);
        }
        // query params
        if (is_array($filter_extension_type)) {
            $filter_extension_type = $this->apiClient->getSerializer()->serializeCollection($filter_extension_type, 'csv', true);
        }
        if ($filter_extension_type !== null) {
            $queryParams['filter[extension.type]'] = $this->apiClient->getSerializer()->toQueryValue($filter_extension_type);
        }
        // path params
        if ($project_id !== null) {
            $resourcePath = str_replace(
                "{" . "project_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($project_id),
                $resourcePath
            );
        }
        // path params
        if ($folder_id !== null) {
            $resourcePath = str_replace(
                "{" . "folder_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($folder_id),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Client\Model\Refs',
                '/data/v1/projects/{project_id}/folders/{folder_id}/relationships/refs'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\Refs', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Refs', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\BadInput', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postFolderRelationshipsRef
     *
     * 
     *
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @param string $folder_id the &#x60;folder id&#x60; (required)
     * @param \Autodesk\Client\Model\CreateRef $body describe the ref to be created (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return void
     */
    public function postFolderRelationshipsRef($project_id, $folder_id, $body)
    {
        list($response) = $this->postFolderRelationshipsRefWithHttpInfo($project_id, $folder_id, $body);
        return $response;
    }

    /**
     * Operation postFolderRelationshipsRefWithHttpInfo
     *
     * 
     *
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @param string $folder_id the &#x60;folder id&#x60; (required)
     * @param \Autodesk\Client\Model\CreateRef $body describe the ref to be created (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function postFolderRelationshipsRefWithHttpInfo($project_id, $folder_id, $body)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $project_id when calling postFolderRelationshipsRef');
        }
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $folder_id when calling postFolderRelationshipsRef');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling postFolderRelationshipsRef');
        }
        // parse inputs
        $resourcePath = "/data/v1/projects/{project_id}/folders/{folder_id}/relationships/refs";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.api+json']);

        // path params
        if ($project_id !== null) {
            $resourcePath = str_replace(
                "{" . "project_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($project_id),
                $resourcePath
            );
        }
        // path params
        if ($folder_id !== null) {
            $resourcePath = str_replace(
                "{" . "folder_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($folder_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/data/v1/projects/{project_id}/folders/{folder_id}/relationships/refs'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\BadInput', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
