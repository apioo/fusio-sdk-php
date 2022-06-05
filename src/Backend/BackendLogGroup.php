<?php
/**
 * BackendLogGroup generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendLogGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/log/$log_id<[0-9]+>
     */
    public function getBackendLogByLogId(string $log_id): BackendLogByLogIdResource
    {
        return new BackendLogByLogIdResource(
            $log_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/log
     */
    public function getBackendLog(): BackendLogResource
    {
        return new BackendLogResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/log/error/$error_id<[0-9]+>
     */
    public function getBackendLogErrorByErrorId(string $error_id): BackendLogErrorByErrorIdResource
    {
        return new BackendLogErrorByErrorIdResource(
            $error_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/log/error
     */
    public function getBackendLogError(): BackendLogErrorResource
    {
        return new BackendLogErrorResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
