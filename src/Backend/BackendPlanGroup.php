<?php
/**
 * BackendPlanGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendPlanGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/plan/$plan_id<[0-9]+|^~>
     *
     * @return BackendPlanByPlanIdResource
     */
    public function getBackendPlanByPlanId(?string $plan_id): BackendPlanByPlanIdResource
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
     *
     * @return BackendPlanResource
     */
    public function getBackendPlan(): BackendPlanResource
    {
        return new BackendPlanResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/plan/invoice/$invoice_id<[0-9]+>
     *
     * @return BackendPlanInvoiceByInvoiceIdResource
     */
    public function getBackendPlanInvoiceByInvoiceId(?string $invoice_id): BackendPlanInvoiceByInvoiceIdResource
    {
        return new BackendPlanInvoiceByInvoiceIdResource(
            $invoice_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/plan/invoice
     *
     * @return BackendPlanInvoiceResource
     */
    public function getBackendPlanInvoice(): BackendPlanInvoiceResource
    {
        return new BackendPlanInvoiceResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/plan/contract/$contract_id<[0-9]+>
     *
     * @return BackendPlanContractByContractIdResource
     */
    public function getBackendPlanContractByContractId(?string $contract_id): BackendPlanContractByContractIdResource
    {
        return new BackendPlanContractByContractIdResource(
            $contract_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/plan/contract
     *
     * @return BackendPlanContractResource
     */
    public function getBackendPlanContract(): BackendPlanContractResource
    {
        return new BackendPlanContractResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
