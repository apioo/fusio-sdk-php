<?php
/**
 * BackendTrashGroup generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendTrashGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/trash/:type
     */
    public function getBackendTrashByType(string $type): BackendTrashByTypeResource
    {
        return new BackendTrashByTypeResource(
            $type,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/trash
     */
    public function getBackendTrash(): BackendTrashResource
    {
        return new BackendTrashResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
