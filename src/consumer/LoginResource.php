<?php

namespace Fusio\Sdk\Consumer;

use Fusio\Sdk\BaseResource;

class LoginResource extends BaseResource
{
    public function do()
    {
        return new \ConsumerLogin\Resource($this->baseUrl, $this->accessToken, $this->httpClient);
    }
}
