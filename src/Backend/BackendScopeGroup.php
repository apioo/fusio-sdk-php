<?php
/**
 * BackendScopeGroup generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendScopeGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/scope/$scope_id<[0-9]+|^~>
     */
    public function getBackendScopeByScopeId(string $scope_id): BackendScopeByScopeIdResource
    {
        return new BackendScopeByScopeIdResource(
            $scope_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/scope/categories
     */
    public function getBackendScopeCategories(): BackendScopeCategoriesResource
    {
        return new BackendScopeCategoriesResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/scope
     */
    public function getBackendScope(): BackendScopeResource
    {
        return new BackendScopeResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
