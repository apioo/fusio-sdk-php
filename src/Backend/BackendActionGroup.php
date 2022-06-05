<?php
/**
 * BackendActionGroup generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendActionGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/action/$action_id<[0-9]+|^~>
     */
    public function getBackendActionByActionId(string $action_id): BackendActionByActionIdResource
    {
        return new BackendActionByActionIdResource(
            $action_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/action/execute/:action_id
     */
    public function getBackendActionExecuteByActionId(string $action_id): BackendActionExecuteByActionIdResource
    {
        return new BackendActionExecuteByActionIdResource(
            $action_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/action/form
     */
    public function getBackendActionForm(): BackendActionFormResource
    {
        return new BackendActionFormResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/action/list
     */
    public function getBackendActionList(): BackendActionListResource
    {
        return new BackendActionListResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/action
     */
    public function getBackendAction(): BackendActionResource
    {
        return new BackendActionResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
