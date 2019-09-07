<?php

namespace Fusio\Sdk;

class Authorization extends BaseResource
{
    /**
     * @return Authorization\RevokeResource
     */
    public function revoke(): Authorization\RevokeResource
    {
        return new Authorization\RevokeResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Authorization\TokenResource
     */
    public function token(): Authorization\TokenResource
    {
        return new Authorization\TokenResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Authorization\WhoamiResource
     */
    public function whoami(): Authorization\WhoamiResource
    {
        return new Authorization\WhoamiResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}