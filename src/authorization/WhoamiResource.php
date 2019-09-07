<?php

namespace Fusio\Sdk\Authorization;

use Fusio\Sdk\BaseResource;

class WhoamiResource extends BaseResource
{
    public function do()
    {
        return new \AuthorizationWhoami\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
