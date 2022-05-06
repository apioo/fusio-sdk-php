<?php
/**
 * ConsumerTransactionGroup generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use Sdkgen\Client\ResourceAbstract;

class ConsumerTransactionGroup extends ResourceAbstract
{
    /**
     * Endpoint: /consumer/transaction/$transaction_id<[0-9]+>
     *
     * @return ConsumerTransactionByTransactionIdResource
     */
    public function getConsumerTransactionByTransactionId(?string $transaction_id): ConsumerTransactionByTransactionIdResource
    {
        return new ConsumerTransactionByTransactionIdResource(
            $transaction_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/transaction/prepare/:provider
     *
     * @return ConsumerTransactionPrepareByProviderResource
     */
    public function getConsumerTransactionPrepareByProvider(?string $provider): ConsumerTransactionPrepareByProviderResource
    {
        return new ConsumerTransactionPrepareByProviderResource(
            $provider,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/transaction/execute/:transaction_id
     *
     * @return ConsumerTransactionExecuteByTransactionIdResource
     */
    public function getConsumerTransactionExecuteByTransactionId(?string $transaction_id): ConsumerTransactionExecuteByTransactionIdResource
    {
        return new ConsumerTransactionExecuteByTransactionIdResource(
            $transaction_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/transaction
     *
     * @return ConsumerTransactionResource
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
