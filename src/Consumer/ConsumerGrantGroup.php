<?php
/**
 * ConsumerGrantGroup generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use Sdkgen\Client\ResourceAbstract;

class ConsumerGrantGroup extends ResourceAbstract
{
    /**
     * Endpoint: /consumer/grant/$grant_id<[0-9]+>
     *
     * @return ConsumerGrantByGrantIdResource
     */
    public function getConsumerGrantByGrantId(?string $grant_id): ConsumerGrantByGrantIdResource
    {
        return new ConsumerGrantByGrantIdResource(
            $grant_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/grant
     *
     * @return ConsumerGrantResource
     */
    public function getConsumerGrant(): ConsumerGrantResource
    {
        return new ConsumerGrantResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
