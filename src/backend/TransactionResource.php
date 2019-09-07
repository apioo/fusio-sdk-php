<?php

namespace Fusio\Sdk\Backend;

use Fusio\Sdk\BaseResource;

class TransactionResource extends BaseResource
{
    public function collection()
    {
        return new \BackendTransaction\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function entity($id)
    {
        return new \BackendTransactionTransaction_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
