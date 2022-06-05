<?php
/**
 * BackendPlanGroup generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendPlanGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/plan/$plan_id<[0-9]+|^~>
     */
    public function getBackendPlanByPlanId(string $plan_id): BackendPlanByPlanIdResource
    {
        return new BackendPlanByPlanIdResource(
            $plan_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/plan
     */
    public function getBackendPlan(): BackendPlanResource
    {
        return new BackendPlanResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
