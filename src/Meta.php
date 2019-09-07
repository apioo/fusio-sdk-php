<?php

namespace Fusio\Sdk;

class Meta extends BaseResource
{
    /**
     * @return Meta\DocResource
     */
    public function doc(): Meta\DocResource
    {
        return new Meta\DocResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
