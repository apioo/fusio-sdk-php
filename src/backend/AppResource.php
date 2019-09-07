<?php

namespace Fusio\Sdk\Backend;

use Fusio\Sdk\BaseResource;

class AppResource extends BaseResource
{
    public function collection()
    {
        return new \BackendApp\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function entity($id)
    {
        return new \BackendAppApp_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
