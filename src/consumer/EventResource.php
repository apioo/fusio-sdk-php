<?php

namespace Fusio\Sdk\Consumer;

use Fusio\Sdk\BaseResource;

class EventResource extends BaseResource
{
    public function collection()
    {
        return new \ConsumerEvent\Resource($this->baseUrl, $this->accessToken, $this->httpClient);
    }
}
