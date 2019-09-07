<?php

namespace Fusio\Sdk\Backend;

use Fusio\Sdk\BaseResource;

class LogResource extends BaseResource
{
    public function collection()
    {
        return new \BackendLog\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function entity($id)
    {
        return new \BackendLogLog_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
