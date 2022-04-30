<?php
/**
 * BackendRoleGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */


use Sdkgen\Client\ResourceAbstract;

class BackendRoleGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/role/$role_id<[0-9]+|^~>
     *
     * @return BackendRoleByRoleIdResource
     */
    public function getBackendRoleByRoleId(?string $role_id): BackendRoleByRoleIdResource
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
     *
     * @return BackendRoleResource
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
