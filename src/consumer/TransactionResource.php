<?php

namespace Fusio\Sdk\Consumer;

use Fusio\Sdk\BaseResource;

class TransactionResource extends BaseResource
{
    public function collection()
    {
        return new \ConsumerTransaction\Resource($this->baseUrl, $this->accessToken, $this->httpClient);
    }

    public function entity($id)
    {
        return new \ConsumerTransactionTransaction_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient);
    }

    public function execute($transactionId)
    {
        return new \ConsumerTransactionExecuteTransaction_id\Resource($transactionId, $this->baseUrl, $this->accessToken, $this->httpClient);
    }

    public function prepare($provider)
    {
        return new \ConsumerTransactionPrepareProvider\Resource($provider, $this->baseUrl, $this->accessToken, $this->httpClient);
    }
}
