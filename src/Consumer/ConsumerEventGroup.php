<?php
/**
 * ConsumerEventGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */


use Sdkgen\Client\ResourceAbstract;

class ConsumerEventGroup extends ResourceAbstract
{
    /**
     * Endpoint: /consumer/event
     *
     * @return ConsumerEventResource
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
