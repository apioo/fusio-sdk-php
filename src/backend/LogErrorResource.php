<?php

namespace Fusio\Sdk\Backend;

use Fusio\Sdk\BaseResource;

class LogErrorResource extends BaseResource
{
    public function collection()
    {
        return new \BackendLogError\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function entity($id)
    {
        return new \BackendLogErrorError_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
