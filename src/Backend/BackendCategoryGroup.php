<?php
/**
 * BackendCategoryGroup generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendCategoryGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/category/$category_id<[0-9]+|^~>
     */
    public function getBackendCategoryByCategoryId(string $category_id): BackendCategoryByCategoryIdResource
    {
        return new BackendCategoryByCategoryIdResource(
            $category_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/category
     */
    public function getBackendCategory(): BackendCategoryResource
    {
        return new BackendCategoryResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
