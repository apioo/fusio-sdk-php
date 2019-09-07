<?php

namespace Fusio\Sdk\Consumer;

use Fusio\Sdk\BaseResource;

class ScopeResource extends BaseResource
{
    public function collection()
    {
        return new \ConsumerScope\Resource($this->baseUrl, $this->accessToken, $this->httpClient);
    }
}
