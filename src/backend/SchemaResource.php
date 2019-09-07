<?php

namespace Fusio\Sdk\Backend;

use Fusio\Sdk\BaseResource;

class SchemaResource extends BaseResource
{
    public function collection()
    {
        return new \BackendSchema\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function entity($id)
    {
        return new \BackendSchemaSchema_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function form()
    {
        return new \BackendSchemaFormSchema_id09\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function preview()
    {
        return new \BackendSchemaPreviewSchema_id09\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
