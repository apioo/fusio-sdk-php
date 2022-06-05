<?php
/**
 * BackendConnectionGroup generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendConnectionGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/connection/$connection_id<[0-9]+|^~>/redirect
     */
    public function getBackendConnectionByConnectionIdRedirect(string $connection_id): BackendConnectionByConnectionIdRedirectResource
    {
        return new BackendConnectionByConnectionIdRedirectResource(
            $connection_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/connection/$connection_id<[0-9]+|^~>
     */
    public function getBackendConnectionByConnectionId(string $connection_id): BackendConnectionByConnectionIdResource
    {
        return new BackendConnectionByConnectionIdResource(
            $connection_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/connection/form
     */
    public function getBackendConnectionForm(): BackendConnectionFormResource
    {
        return new BackendConnectionFormResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/connection/list
     */
    public function getBackendConnectionList(): BackendConnectionListResource
    {
        return new BackendConnectionListResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/connection
     */
    public function getBackendConnection(): BackendConnectionResource
    {
        return new BackendConnectionResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
