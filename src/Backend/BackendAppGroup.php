<?php
/**
 * BackendAppGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendAppGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/app/$app_id<[0-9]+>/token/:token_id
     *
     * @return BackendAppByAppIdTokenAndTokenIdResource
     */
    public function getBackendAppByAppIdTokenAndTokenId(?string $app_id, ?string $token_id): BackendAppByAppIdTokenAndTokenIdResource
    {
        return new BackendAppByAppIdTokenAndTokenIdResource(
            $app_id,
            $token_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/app/$app_id<[0-9]+>
     *
     * @return BackendAppByAppIdResource
     */
    public function getBackendAppByAppId(?string $app_id): BackendAppByAppIdResource
    {
        return new BackendAppByAppIdResource(
            $app_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/app
     *
     * @return BackendAppResource
     */
    public function getBackendApp(): BackendAppResource
    {
        return new BackendAppResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/app/token/$token_id<[0-9]+>
     *
     * @return BackendAppTokenByTokenIdResource
     */
    public function getBackendAppTokenByTokenId(?string $token_id): BackendAppTokenByTokenIdResource
    {
        return new BackendAppTokenByTokenIdResource(
            $token_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/app/token
     *
     * @return BackendAppTokenResource
     */
    public function getBackendAppToken(): BackendAppTokenResource
    {
        return new BackendAppTokenResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
