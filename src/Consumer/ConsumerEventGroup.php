<?php
/**
 * ConsumerEventGroup generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use Sdkgen\Client\ResourceAbstract;

class ConsumerEventGroup extends ResourceAbstract
{
    /**
     * Endpoint: /consumer/event
     */
    public function getConsumerEvent(): ConsumerEventResource
    {
        return new ConsumerEventResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
