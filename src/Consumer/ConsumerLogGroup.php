<?php
/**
 * ConsumerLogGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use Sdkgen\Client\ResourceAbstract;

class ConsumerLogGroup extends ResourceAbstract
{
    /**
     * Endpoint: /consumer/log/$log_id<[0-9]+>
     *
     * @return ConsumerLogByLogIdResource
     */
    public function getConsumerLogByLogId(?string $log_id): ConsumerLogByLogIdResource
    {
        return new ConsumerLogByLogIdResource(
            $log_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/log
     *
     * @return ConsumerLogResource
     */
    public function getConsumerLog(): ConsumerLogResource
    {
        return new ConsumerLogResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
