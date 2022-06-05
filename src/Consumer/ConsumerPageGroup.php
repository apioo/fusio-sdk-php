<?php
/**
 * ConsumerPageGroup generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use Sdkgen\Client\ResourceAbstract;

class ConsumerPageGroup extends ResourceAbstract
{
    /**
     * Endpoint: /consumer/page/:page_id
     */
    public function getConsumerPageByPageId(string $page_id): ConsumerPageByPageIdResource
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
