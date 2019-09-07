<?php

namespace Fusio\Sdk\Backend;

use Fusio\Sdk\BaseResource;

class ScopeResource extends BaseResource
{
    public function collection()
    {
        return new \BackendScope\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function entity($id)
    {
        return new \BackendScopeScope_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
