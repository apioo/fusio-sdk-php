<?php
/**
 * BackendUserGroup generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendUserGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/user/$user_id<[0-9]+>
     */
    public function getBackendUserByUserId(string $user_id): BackendUserByUserIdResource
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
