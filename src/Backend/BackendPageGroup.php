<?php
/**
 * BackendPageGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendPageGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/page/$page_id<[0-9]+|^~>
     *
     * @return BackendPageByPageIdResource
     */
    public function getBackendPageByPageId(?string $page_id): BackendPageByPageIdResource
    {
        return new BackendPageByPageIdResource(
            $page_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/page
     *
     * @return BackendPageResource
     */
    public function getBackendPage(): BackendPageResource
    {
        return new BackendPageResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
