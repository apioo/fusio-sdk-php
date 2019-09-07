<?php

namespace Fusio\Sdk\Backend;

use Fusio\Sdk\BaseResource;

class AuditResource extends BaseResource
{
    public function collection()
    {
        return new \BackendAudit\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function entity($id)
    {
        return new \BackendAuditAudit_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
