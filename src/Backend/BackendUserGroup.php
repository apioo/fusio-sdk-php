<?php
/**
 * BackendUserGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */


use Sdkgen\Client\ResourceAbstract;

class BackendUserGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/user/$user_id<[0-9]+>
     *
     * @return BackendUserByUserIdResource
     */
    public function getBackendUserByUserId(?string $user_id): BackendUserByUserIdResource
    {
        return new BackendUserByUserIdResource(
            $user_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/user
     *
     * @return BackendUserResource
     */
    public function getBackendUser(): BackendUserResource
    {
        return new BackendUserResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
