<?php
/**
 * AppPackagesApi
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
 * AppPackagesApi Class Doc Comment
 *
 * @category Class
 * @package  Autodesk\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppPackagesApi extends AbstractApi
{
    /**
     * Operation createAppPackage
     *
     * Creates an AppPackage module.
     *
     * @param \Autodesk\Client\Model\AppPackage $app_package  (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\AppPackage
     */
    public function createAppPackage($app_package)
    {
        list($response) = $this->createAppPackageWithHttpInfo($app_package);
        return $response;
    }

    /**
     * Operation createAppPackageWithHttpInfo
     *
     * Creates an AppPackage module.
     *
     * @param \Autodesk\Client\Model\AppPackage $app_package  (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\AppPackage, HTTP status code, HTTP response headers (array of strings)
     */
    public function createAppPackageWithHttpInfo($app_package)
    {
        // verify the required parameter 'app_package' is set
        if ($app_package === null) {
            throw new \InvalidArgumentException('Missing the required parameter $app_package when calling createAppPackage');
        }
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/AppPackages";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($app_package)) {
            $_tempBody = $app_package;
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
                '\Autodesk\Client\Model\AppPackage',
                '/autocad.io/us-east/v2/AppPackages'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\AppPackage', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\AppPackage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteAppPackage
     *
     * Removes a specific AppPackage.
     *
     * @param string $id  (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return void
     */
    public function deleteAppPackage($id)
    {
        list($response) = $this->deleteAppPackageWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteAppPackageWithHttpInfo
     *
     * Removes a specific AppPackage.
     *
     * @param string $id  (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteAppPackageWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteAppPackage');
        }
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/AppPackages(&#39;{id}&#39;)";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/autocad.io/us-east/v2/AppPackages(&#39;{id}&#39;)'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation deleteAppPackageHistory
     *
     * Removes the version history of the specified AppPackage.
     *
     * @param string $id  (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return void
     */
    public function deleteAppPackageHistory($id)
    {
        list($response) = $this->deleteAppPackageHistoryWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteAppPackageHistoryWithHttpInfo
     *
     * Removes the version history of the specified AppPackage.
     *
     * @param string $id  (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteAppPackageHistoryWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteAppPackageHistory');
        }
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/AppPackages(&#39;{id}&#39;)/Operations.DeleteHistory";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/autocad.io/us-east/v2/AppPackages(&#39;{id}&#39;)/Operations.DeleteHistory'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getAllAppPackages
     *
     * Returns the details of all AppPackages.
     *
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\DesignAutomationAppPackages
     */
    public function getAllAppPackages()
    {
        list($response) = $this->getAllAppPackagesWithHttpInfo();
        return $response;
    }

    /**
     * Operation getAllAppPackagesWithHttpInfo
     *
     * Returns the details of all AppPackages.
     *
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\DesignAutomationAppPackages, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllAppPackagesWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/AppPackages";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

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
                '\Autodesk\Client\Model\DesignAutomationAppPackages',
                '/autocad.io/us-east/v2/AppPackages'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\DesignAutomationAppPackages', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\DesignAutomationAppPackages', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAppPackage
     *
     * Returns the details of a specific AppPackage.
     *
     * @param string $id  (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\AppPackage
     */
    public function getAppPackage($id)
    {
        list($response) = $this->getAppPackageWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getAppPackageWithHttpInfo
     *
     * Returns the details of a specific AppPackage.
     *
     * @param string $id  (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\AppPackage, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAppPackageWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getAppPackage');
        }
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/AppPackages(&#39;{id}&#39;)";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                '\Autodesk\Client\Model\AppPackage',
                '/autocad.io/us-east/v2/AppPackages(&#39;{id}&#39;)'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\AppPackage', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\AppPackage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAppPackageVersions
     *
     * Returns all old versions of a specified AppPackage.
     *
     * @param string $id  (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\DesignAutomationAppPackages
     */
    public function getAppPackageVersions($id)
    {
        list($response) = $this->getAppPackageVersionsWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getAppPackageVersionsWithHttpInfo
     *
     * Returns all old versions of a specified AppPackage.
     *
     * @param string $id  (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\DesignAutomationAppPackages, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAppPackageVersionsWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getAppPackageVersions');
        }
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/AppPackages(&#39;{id}&#39;)/Operations.GetVersions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                '\Autodesk\Client\Model\DesignAutomationAppPackages',
                '/autocad.io/us-east/v2/AppPackages(&#39;{id}&#39;)/Operations.GetVersions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\DesignAutomationAppPackages', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\DesignAutomationAppPackages', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getUploadUrl
     *
     * Requests a pre-signed URL for uploading a zip file that contains the binaries for this AppPackage.
     *
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return void
     */
    public function getUploadUrl()
    {
        list($response) = $this->getUploadUrlWithHttpInfo();
        return $response;
    }

    /**
     * Operation getUploadUrlWithHttpInfo
     *
     * Requests a pre-signed URL for uploading a zip file that contains the binaries for this AppPackage.
     *
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUploadUrlWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/AppPackages/Operations.GetUploadUrl";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

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
                null,
                '/autocad.io/us-east/v2/AppPackages/Operations.GetUploadUrl'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getUploadUrlWithRequireContentType
     *
     * Requests a pre-signed URL for uploading a zip file that contains the binaries for this AppPackage. Unlike the GetUploadUrl method that takes no parameters, this method allows the client to request that the pre-signed URL to be issued so that the subsequent HTTP PUT operation will require Content-Type=binary/octet-stream.
     *
     * @param bool $require  (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return void
     */
    public function getUploadUrlWithRequireContentType($require)
    {
        list($response) = $this->getUploadUrlWithRequireContentTypeWithHttpInfo($require);
        return $response;
    }

    /**
     * Operation getUploadUrlWithRequireContentTypeWithHttpInfo
     *
     * Requests a pre-signed URL for uploading a zip file that contains the binaries for this AppPackage. Unlike the GetUploadUrl method that takes no parameters, this method allows the client to request that the pre-signed URL to be issued so that the subsequent HTTP PUT operation will require Content-Type=binary/octet-stream.
     *
     * @param bool $require  (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUploadUrlWithRequireContentTypeWithHttpInfo($require)
    {
        // verify the required parameter 'require' is set
        if ($require === null) {
            throw new \InvalidArgumentException('Missing the required parameter $require when calling getUploadUrlWithRequireContentType');
        }
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/AppPackages/Operations.GetUploadUrl(RequireContentType&#x3D;{require})";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($require !== null) {
            $resourcePath = str_replace(
                "{" . "require" . "}",
                $this->apiClient->getSerializer()->toPathValue($require),
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
                null,
                '/autocad.io/us-east/v2/AppPackages/Operations.GetUploadUrl(RequireContentType&#x3D;{require})'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation patchAppPackage
     *
     * Updates an AppPackage by specifying only the changed attributes.
     *
     * @param string $id  (required)
     * @param \Autodesk\Client\Model\AppPackageOptional $app_package  (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return void
     */
    public function patchAppPackage($id, $app_package)
    {
        list($response) = $this->patchAppPackageWithHttpInfo($id, $app_package);
        return $response;
    }

    /**
     * Operation patchAppPackageWithHttpInfo
     *
     * Updates an AppPackage by specifying only the changed attributes.
     *
     * @param string $id  (required)
     * @param \Autodesk\Client\Model\AppPackageOptional $app_package  (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchAppPackageWithHttpInfo($id, $app_package)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling patchAppPackage');
        }
        // verify the required parameter 'app_package' is set
        if ($app_package === null) {
            throw new \InvalidArgumentException('Missing the required parameter $app_package when calling patchAppPackage');
        }
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/AppPackages(&#39;{id}&#39;)";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($app_package)) {
            $_tempBody = $app_package;
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
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/autocad.io/us-east/v2/AppPackages(&#39;{id}&#39;)'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation setAppPackageVersion
     *
     * Sets the AppPackage to the specified version.
     *
     * @param string $id  (required)
     * @param \Autodesk\Client\Model\AppPackageVersion $app_package_version  (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return void
     */
    public function setAppPackageVersion($id, $app_package_version)
    {
        list($response) = $this->setAppPackageVersionWithHttpInfo($id, $app_package_version);
        return $response;
    }

    /**
     * Operation setAppPackageVersionWithHttpInfo
     *
     * Sets the AppPackage to the specified version.
     *
     * @param string $id  (required)
     * @param \Autodesk\Client\Model\AppPackageVersion $app_package_version  (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function setAppPackageVersionWithHttpInfo($id, $app_package_version)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling setAppPackageVersion');
        }
        // verify the required parameter 'app_package_version' is set
        if ($app_package_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $app_package_version when calling setAppPackageVersion');
        }
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/AppPackages(&#39;{id}&#39;)/Operations.SetVersion";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($app_package_version)) {
            $_tempBody = $app_package_version;
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
                '/autocad.io/us-east/v2/AppPackages(&#39;{id}&#39;)/Operations.SetVersion'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation updateAppPackage
     *
     * Updates an AppPackage by redefining the entire Activity object.
     *
     * @param string $id  (required)
     * @param \Autodesk\Client\Model\AppPackage $app_package  (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return void
     */
    public function updateAppPackage($id, $app_package)
    {
        list($response) = $this->updateAppPackageWithHttpInfo($id, $app_package);
        return $response;
    }

    /**
     * Operation updateAppPackageWithHttpInfo
     *
     * Updates an AppPackage by redefining the entire Activity object.
     *
     * @param string $id  (required)
     * @param \Autodesk\Client\Model\AppPackage $app_package  (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateAppPackageWithHttpInfo($id, $app_package)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling updateAppPackage');
        }
        // verify the required parameter 'app_package' is set
        if ($app_package === null) {
            throw new \InvalidArgumentException('Missing the required parameter $app_package when calling updateAppPackage');
        }
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/AppPackages(&#39;{id}&#39;)";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($app_package)) {
            $_tempBody = $app_package;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/autocad.io/us-east/v2/AppPackages(&#39;{id}&#39;)'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
