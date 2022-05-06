<?php
/**
 * BackendAccountGroup generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendAccountGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/account/change_password
     *
     * @return BackendAccountChangePasswordResource
     */
    public function getBackendAccountChangePassword(): BackendAccountChangePasswordResource
    {
        return new BackendAccountChangePasswordResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/account
     *
     * @return BackendAccountResource
     */
    public function getBackendAccount(): BackendAccountResource
    {
        return new BackendAccountResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
