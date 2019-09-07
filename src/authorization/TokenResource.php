<?php

namespace Fusio\Sdk\Authorization;

use Fusio\Sdk\BaseResource;

class TokenResource extends BaseResource
{
    public function do()
    {
        return new \AuthorizationToken\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
