<?php
/**
 * BackendSchemaGroup generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendSchemaGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/schema/$schema_id<[0-9]+|^~>
     *
     * @return BackendSchemaBySchemaIdResource
     */
    public function getBackendSchemaBySchemaId(?string $schema_id): BackendSchemaBySchemaIdResource
    {
        return new BackendSchemaBySchemaIdResource(
            $schema_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/schema/form/$schema_id<[0-9]+>
     *
     * @return BackendSchemaFormBySchemaIdResource
     */
    public function getBackendSchemaFormBySchemaId(?string $schema_id): BackendSchemaFormBySchemaIdResource
    {
        return new BackendSchemaFormBySchemaIdResource(
            $schema_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/schema/preview/:schema_id
     *
     * @return BackendSchemaPreviewBySchemaIdResource
     */
    public function getBackendSchemaPreviewBySchemaId(?string $schema_id): BackendSchemaPreviewBySchemaIdResource
    {
        return new BackendSchemaPreviewBySchemaIdResource(
            $schema_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/schema
     *
     * @return BackendSchemaResource
     */
    public function getBackendSchema(): BackendSchemaResource
    {
        return new BackendSchemaResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
