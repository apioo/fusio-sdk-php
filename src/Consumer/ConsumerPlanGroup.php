<?php
/**
 * ConsumerPlanGroup generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use Sdkgen\Client\ResourceAbstract;

class ConsumerPlanGroup extends ResourceAbstract
{
    /**
     * Endpoint: /consumer/plan/$plan_id<[0-9]+>
     *
     * @return ConsumerPlanByPlanIdResource
     */
    public function getConsumerPlanByPlanId(?string $plan_id): ConsumerPlanByPlanIdResource
    {
        return new ConsumerPlanByPlanIdResource(
            $plan_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/plan
     *
     * @return ConsumerPlanResource
     */
    public function getConsumerPlan(): ConsumerPlanResource
    {
        return new ConsumerPlanResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/plan/invoice/$invoice_id<[0-9]+>
     *
     * @return ConsumerPlanInvoiceByInvoiceIdResource
     */
    public function getConsumerPlanInvoiceByInvoiceId(?string $invoice_id): ConsumerPlanInvoiceByInvoiceIdResource
    {
        return new ConsumerPlanInvoiceByInvoiceIdResource(
            $invoice_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/plan/invoice
     *
     * @return ConsumerPlanInvoiceResource
     */
    public function getConsumerPlanInvoice(): ConsumerPlanInvoiceResource
    {
        return new ConsumerPlanInvoiceResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/plan/contract/$contract_id<[0-9]+>
     *
     * @return ConsumerPlanContractByContractIdResource
     */
    public function getConsumerPlanContractByContractId(?string $contract_id): ConsumerPlanContractByContractIdResource
    {
        return new ConsumerPlanContractByContractIdResource(
            $contract_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/plan/contract
     *
     * @return ConsumerPlanContractResource
     */
    public function getConsumerPlanContract(): ConsumerPlanContractResource
    {
        return new ConsumerPlanContractResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
