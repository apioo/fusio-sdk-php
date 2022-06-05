<?php
/**
 * ConsumerGrantGroup generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use Sdkgen\Client\ResourceAbstract;

class ConsumerGrantGroup extends ResourceAbstract
{
    /**
     * Endpoint: /consumer/grant/$grant_id<[0-9]+>
     */
    public function getConsumerGrantByGrantId(string $grant_id): ConsumerGrantByGrantIdResource
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
