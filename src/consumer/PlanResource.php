<?php

namespace Fusio\Sdk\Consumer;

use Fusio\Sdk\BaseResource;

class PlanResource extends BaseResource
{
    public function collection()
    {
        return new \ConsumerPlan\Resource($this->baseUrl, $this->accessToken, $this->httpClient);
    }

    public function entity($id)
    {
        return new \ConsumerPlanPlan_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient);
    }
}
