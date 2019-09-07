<?php

namespace Fusio\Sdk\Backend;

use Fusio\Sdk\BaseResource;

class TokenResource extends BaseResource
{
    public function do()
    {
        return new \BackendToken\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
