<?php

namespace Fusio\Sdk\Backend;

use Fusio\Sdk\BaseResource;

class ActionResource extends BaseResource
{
    public function collection()
    {
        return new \BackendAction\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function entity($id)
    {
        return new \BackendActionAction_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function execute($id)
    {
        return new \BackendActionExecuteAction_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function form()
    {
        return new \BackendActionForm\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function list()
    {
        return new \BackendActionList\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
