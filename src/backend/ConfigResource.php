<?php

namespace Fusio\Sdk\Backend;

use Fusio\Sdk\BaseResource;

class ConfigResource extends BaseResource
{
    public function collection()
    {
        return new \BackendConfig\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function entity($id)
    {
        return new \BackendConfigConfig_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
