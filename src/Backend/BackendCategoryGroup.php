<?php
/**
 * BackendCategoryGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */


use Sdkgen\Client\ResourceAbstract;

class BackendCategoryGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/category/$category_id<[0-9]+|^~>
     *
     * @return BackendCategoryByCategoryIdResource
     */
    public function getBackendCategoryByCategoryId(?string $category_id): BackendCategoryByCategoryIdResource
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
     *
     * @return BackendCategoryResource
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
