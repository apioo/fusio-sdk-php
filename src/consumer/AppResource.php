<?php

namespace Fusio\Sdk\Consumer;

use Fusio\Sdk\BaseResource;

class AppResource extends BaseResource
{
    public function collection()
    {
        return new \ConsumerApp\Resource($this->baseUrl, $this->accessToken, $this->httpClient);
    }

    public function entity($id)
    {
        return new \ConsumerAppApp_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient);
    }
}
