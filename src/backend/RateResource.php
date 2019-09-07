<?php

namespace Fusio\Sdk\Backend;

use Fusio\Sdk\BaseResource;

class RateResource extends BaseResource
{
    public function collection()
    {
        return new \BackendRate\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function entity($id)
    {
        return new \BackendRateRate_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
