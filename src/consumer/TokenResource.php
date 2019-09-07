<?php

namespace Fusio\Sdk\Consumer;

use Fusio\Sdk\BaseResource;

class TokenResource extends BaseResource
{
    public function do()
    {
        return new \ConsumerToken\Resource($this->baseUrl, $this->accessToken, $this->httpClient);
    }
}
