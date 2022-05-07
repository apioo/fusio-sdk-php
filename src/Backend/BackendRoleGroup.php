<?php
/**
 * BackendRoleGroup generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendRoleGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/role/$role_id<[0-9]+|^~>
     */
    public function getBackendRoleByRoleId(string $role_id): BackendRoleByRoleIdResource
    {
        return new BackendRoleByRoleIdResource(
            $role_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/role
     */
    public function getBackendRole(): BackendRoleResource
    {
        return new BackendRoleResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
