<?php

namespace Fusio\Sdk\Backend;

use Fusio\Sdk\BaseResource;

class CronjobResource extends BaseResource
{
    public function collection()
    {
        return new \BackendCronjob\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function entity($id)
    {
        return new \BackendCronjobCronjob_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
