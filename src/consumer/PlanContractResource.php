<?php

namespace Fusio\Sdk\Consumer;

use Fusio\Sdk\BaseResource;

class PlanContractResource extends BaseResource
{
    public function collection()
    {
        return new \ConsumerPlanContract\Resource($this->baseUrl, $this->accessToken, $this->httpClient);
    }

    public function entity($id)
    {
        return new \ConsumerPlanContractContract_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient);
    }
}
