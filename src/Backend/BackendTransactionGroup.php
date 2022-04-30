<?php
/**
 * BackendTransactionGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendTransactionGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/transaction/$transaction_id<[0-9]+>
     *
     * @return BackendTransactionByTransactionIdResource
     */
    public function getBackendTransactionByTransactionId(?string $transaction_id): BackendTransactionByTransactionIdResource
    {
        return new BackendTransactionByTransactionIdResource(
            $transaction_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/transaction
     *
     * @return BackendTransactionResource
     */
    public function getBackendTransaction(): BackendTransactionResource
    {
        return new BackendTransactionResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
