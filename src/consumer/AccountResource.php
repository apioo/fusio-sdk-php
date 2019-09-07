<?php

namespace Fusio\Sdk\Consumer;

use Fusio\Sdk\BaseResource;

class AccountResource extends BaseResource
{
    public function entity()
    {
        return new \ConsumerAccount\Resource($this->baseUrl, $this->accessToken, $this->httpClient);
    }

    public function changePassword()
    {
        return new \ConsumerAccountChange_password\Resource($this->baseUrl, $this->accessToken, $this->httpClient);
    }
}
