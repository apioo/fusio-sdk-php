<?php 
/**
 * Client generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Consumer;

use PSX\Api\Generator\Client\Php\ResourceAbstract;

class Client extends ResourceAbstract
{
    /**
     * Endpoint: /consumer/password_reset
     *
     * @return ConsumerPasswordResetResource
     */
    public function getConsumerPasswordReset(): ConsumerPasswordResetResource
    {
        return new ConsumerPasswordResetResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/register
     *
     * @return ConsumerRegisterResource
     */
    public function getConsumerRegister(): ConsumerRegisterResource
    {
        return new ConsumerRegisterResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/provider/:provider
     *
     * @return ConsumerProviderByProviderResource
     */
    public function getConsumerProviderByProvider(?string $provider): ConsumerProviderByProviderResource
    {
        return new ConsumerProviderByProviderResource(
            $provider,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/login
     *
     * @return ConsumerLoginResource
     */
    public function getConsumerLogin(): ConsumerLoginResource
    {
        return new ConsumerLoginResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/authorize
     *
     * @return ConsumerAuthorizeResource
     */
    public function getConsumerAuthorize(): ConsumerAuthorizeResource
    {
        return new ConsumerAuthorizeResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/activate
     *
     * @return ConsumerActivateResource
     */
    public function getConsumerActivate(): ConsumerActivateResource
    {
        return new ConsumerActivateResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/account/change_password
     *
     * @return ConsumerAccountChangePasswordResource
     */
    public function getConsumerAccountChangePassword(): ConsumerAccountChangePasswordResource
    {
        return new ConsumerAccountChangePasswordResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/account
     *
     * @return ConsumerAccountResource
     */
    public function getConsumerAccount(): ConsumerAccountResource
    {
        return new ConsumerAccountResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/transaction/$transaction_id<[0-9]+>
     *
     * @return ConsumerTransactionByTransactionIdResource
     */
    public function getConsumerTransactionByTransactionId(?string $transaction_id): ConsumerTransactionByTransactionIdResource
    {
        return new ConsumerTransactionByTransactionIdResource(
            $transaction_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/transaction/prepare/:provider
     *
     * @return ConsumerTransactionPrepareByProviderResource
     */
    public function getConsumerTransactionPrepareByProvider(?string $provider): ConsumerTransactionPrepareByProviderResource
    {
        return new ConsumerTransactionPrepareByProviderResource(
            $provider,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/transaction/execute/:transaction_id
     *
     * @return ConsumerTransactionExecuteByTransactionIdResource
     */
    public function getConsumerTransactionExecuteByTransactionId(?string $transaction_id): ConsumerTransactionExecuteByTransactionIdResource
    {
        return new ConsumerTransactionExecuteByTransactionIdResource(
            $transaction_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/transaction
     *
     * @return ConsumerTransactionResource
     */
    public function getConsumerTransaction(): ConsumerTransactionResource
    {
        return new ConsumerTransactionResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/subscription/$subscription_id<[0-9]+>
     *
     * @return ConsumerSubscriptionBySubscriptionIdResource
     */
    public function getConsumerSubscriptionBySubscriptionId(?string $subscription_id): ConsumerSubscriptionBySubscriptionIdResource
    {
        return new ConsumerSubscriptionBySubscriptionIdResource(
            $subscription_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/subscription
     *
     * @return ConsumerSubscriptionResource
     */
    public function getConsumerSubscription(): ConsumerSubscriptionResource
    {
        return new ConsumerSubscriptionResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/scope
     *
     * @return ConsumerScopeResource
     */
    public function getConsumerScope(): ConsumerScopeResource
    {
        return new ConsumerScopeResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

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
            $this->token,
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
            $this->token,
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
            $this->token,
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
            $this->token,
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
            $this->token,
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
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/grant/$grant_id<[0-9]+>
     *
     * @return ConsumerGrantByGrantIdResource
     */
    public function getConsumerGrantByGrantId(?string $grant_id): ConsumerGrantByGrantIdResource
    {
        return new ConsumerGrantByGrantIdResource(
            $grant_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/grant
     *
     * @return ConsumerGrantResource
     */
    public function getConsumerGrant(): ConsumerGrantResource
    {
        return new ConsumerGrantResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/event
     *
     * @return ConsumerEventResource
     */
    public function getConsumerEvent(): ConsumerEventResource
    {
        return new ConsumerEventResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/app/$app_id<[0-9]+>
     *
     * @return ConsumerAppByAppIdResource
     */
    public function getConsumerAppByAppId(?string $app_id): ConsumerAppByAppIdResource
    {
        return new ConsumerAppByAppIdResource(
            $app_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/app
     *
     * @return ConsumerAppResource
     */
    public function getConsumerApp(): ConsumerAppResource
    {
        return new ConsumerAppResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
