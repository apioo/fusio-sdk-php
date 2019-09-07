<?php

namespace Fusio\Sdk\Backend;

use Fusio\Sdk\BaseResource;

class UserResource extends BaseResource
{
    public function collection()
    {
        return new \BackendUser\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function entity($id)
    {
        return new \BackendUserUser_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
