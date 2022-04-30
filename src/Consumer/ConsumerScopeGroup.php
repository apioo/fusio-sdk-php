<?php
/**
 * ConsumerScopeGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use Sdkgen\Client\ResourceAbstract;

class ConsumerScopeGroup extends ResourceAbstract
{
    /**
     * Endpoint: /consumer/scope
     *
     * @return ConsumerScopeResource
     */
    public function getConsumerScope(): ConsumerScopeResource
    {
        return new ConsumerScopeResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}