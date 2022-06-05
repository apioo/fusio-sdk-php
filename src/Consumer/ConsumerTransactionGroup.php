<?php
/**
 * ConsumerTransactionGroup generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use Sdkgen\Client\ResourceAbstract;

class ConsumerTransactionGroup extends ResourceAbstract
{
    /**
     * Endpoint: /consumer/transaction/$transaction_id<[0-9]+>
     */
    public function getConsumerTransactionByTransactionId(string $transaction_id): ConsumerTransactionByTransactionIdResource
    {
        return new ConsumerTransactionByTransactionIdResource(
            $transaction_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/transaction
     */
    public function getConsumerTransaction(): ConsumerTransactionResource
    {
        return new ConsumerTransactionResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
