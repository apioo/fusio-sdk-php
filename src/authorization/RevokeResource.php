<?php

namespace Fusio\Sdk\Authorization;

use Fusio\Sdk\BaseResource;

class RevokeResource extends BaseResource
{
    public function do()
    {
        return new \AuthorizationRevoke\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
