<?php

namespace Fusio\Sdk\Backend;

use Fusio\Sdk\BaseResource;

class PlanInvoiceResource extends BaseResource
{
    public function collection()
    {
        return new \BackendPlanInvoice\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function entity($id)
    {
        return new \BackendPlanInvoiceInvoice_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
