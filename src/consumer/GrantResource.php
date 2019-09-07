<?php

namespace Fusio\Sdk\Consumer;

use Fusio\Sdk\BaseResource;

class GrantResource extends BaseResource
{
    public function collection()
    {
        return new \ConsumerGrant\Resource($this->baseUrl, $this->accessToken, $this->httpClient);
    }

    public function entity($id)
    {
        return new \ConsumerGrantGrant_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient);
    }
}
