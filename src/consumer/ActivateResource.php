<?php

namespace Fusio\Sdk\Consumer;

use Fusio\Sdk\BaseResource;

class ActivateResource extends BaseResource
{
    public function do()
    {
        return new \ConsumerActivate\Resource($this->baseUrl, $this->accessToken, $this->httpClient);
    }
}
