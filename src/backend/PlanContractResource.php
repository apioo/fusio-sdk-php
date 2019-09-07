<?php

namespace Fusio\Sdk\Backend;

use Fusio\Sdk\BaseResource;

class PlanContractResource extends BaseResource
{
    public function collection()
    {
        return new \BackendPlanContract\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function entity($id)
    {
        return new \BackendPlanContractContract_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
