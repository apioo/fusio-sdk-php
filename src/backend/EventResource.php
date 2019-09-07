<?php

namespace Fusio\Sdk\Backend;

use Fusio\Sdk\BaseResource;

class EventResource extends BaseResource
{
    public function collection()
    {
        return new \BackendEvent\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function entity($id)
    {
        return new \BackendEventEvent_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
