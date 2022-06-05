<?php
/**
 * ConsumerAppGroup generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use Sdkgen\Client\ResourceAbstract;

class ConsumerAppGroup extends ResourceAbstract
{
    /**
     * Endpoint: /consumer/app/$app_id<[0-9]+>
     */
    public function getConsumerAppByAppId(string $app_id): ConsumerAppByAppIdResource
    {
        return new ConsumerAppByAppIdResource(
            $app_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/app
     */
    public function getConsumerApp(): ConsumerAppResource
    {
        return new ConsumerAppResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
