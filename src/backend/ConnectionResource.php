<?php

namespace Fusio\Sdk\Backend;

use Fusio\Sdk\BaseResource;

class ConnectionResource extends BaseResource
{
    public function collection()
    {
        return new \BackendConnection\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function entity($id)
    {
        return new \BackendConnectionConnection_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function form()
    {
        return new \BackendConnectionForm\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function list()
    {
        return new \BackendConnectionList\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
