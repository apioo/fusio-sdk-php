<?php

namespace Fusio\Sdk\Consumer;

use Fusio\Sdk\BaseResource;

class SubscriptionResource extends BaseResource
{
    public function collection()
    {
        return new \ConsumerSubscription\Resource($this->baseUrl, $this->accessToken, $this->httpClient);
    }

    public function entity($id)
    {
        return new \ConsumerSubscriptionSubscription_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient);
    }
}
