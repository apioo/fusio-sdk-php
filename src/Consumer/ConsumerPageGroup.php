<?php
/**
 * ConsumerPageGroup generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use Sdkgen\Client\ResourceAbstract;

class ConsumerPageGroup extends ResourceAbstract
{
    /**
     * Endpoint: /consumer/page/:page_id
     *
     * @return ConsumerPageByPageIdResource
     */
    public function getConsumerPageByPageId(?string $page_id): ConsumerPageByPageIdResource
    {
        return new ConsumerPageByPageIdResource(
            $page_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/page
     *
     * @return ConsumerPageResource
     */
    public function getConsumerPage(): ConsumerPageResource
    {
        return new ConsumerPageResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
