<?php

namespace Fusio\Sdk\Meta;

use Fusio\Sdk\BaseResource;

class DocResource extends BaseResource
{
    public function entity()
    {
        return new \Doc\Resource($this->baseUrl, $this->accessToken, $this->httpClient);
    }

    public function changePassword($version, $path)
    {
        return new \DocVersionPath\Resource($version, $path, $this->baseUrl, $this->accessToken, $this->httpClient);
    }
}
