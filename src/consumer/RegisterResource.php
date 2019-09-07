<?php

namespace Fusio\Sdk\Consumer;

use Fusio\Sdk\BaseResource;

class RegisterResource extends BaseResource
{
    public function do()
    {
        return new \ConsumerRegister\Resource($this->baseUrl, $this->accessToken, $this->httpClient);
    }
}
