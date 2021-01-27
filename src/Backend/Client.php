<?php 
/**
 * Client generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;

use PSX\Api\Generator\Client\Php\ResourceAbstract;

class Client extends ResourceAbstract
{
    /**
     * Endpoint: /backend/user/$user_id<[0-9]+>
     *
     * @return BackendUserByUserIdResource
     */
    public function getBackendUserByUserId(?string $user_id): BackendUserByUserIdResource
    {
        return new BackendUserByUserIdResource(
            $user_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/user
     *
     * @return BackendUserResource
     */
    public function getBackendUser(): BackendUserResource
    {
        return new BackendUserResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/transaction/$transaction_id<[0-9]+>
     *
     * @return BackendTransactionByTransactionIdResource
     */
    public function getBackendTransactionByTransactionId(?string $transaction_id): BackendTransactionByTransactionIdResource
    {
        return new BackendTransactionByTransactionIdResource(
            $transaction_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/transaction
     *
     * @return BackendTransactionResource
     */
    public function getBackendTransaction(): BackendTransactionResource
    {
        return new BackendTransactionResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/statistic/used_points
     *
     * @return BackendStatisticUsedPointsResource
     */
    public function getBackendStatisticUsedPoints(): BackendStatisticUsedPointsResource
    {
        return new BackendStatisticUsedPointsResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/statistic/time_per_route
     *
     * @return BackendStatisticTimePerRouteResource
     */
    public function getBackendStatisticTimePerRoute(): BackendStatisticTimePerRouteResource
    {
        return new BackendStatisticTimePerRouteResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/statistic/time_average
     *
     * @return BackendStatisticTimeAverageResource
     */
    public function getBackendStatisticTimeAverage(): BackendStatisticTimeAverageResource
    {
        return new BackendStatisticTimeAverageResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/statistic/most_used_routes
     *
     * @return BackendStatisticMostUsedRoutesResource
     */
    public function getBackendStatisticMostUsedRoutes(): BackendStatisticMostUsedRoutesResource
    {
        return new BackendStatisticMostUsedRoutesResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/statistic/most_used_apps
     *
     * @return BackendStatisticMostUsedAppsResource
     */
    public function getBackendStatisticMostUsedApps(): BackendStatisticMostUsedAppsResource
    {
        return new BackendStatisticMostUsedAppsResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/statistic/issued_tokens
     *
     * @return BackendStatisticIssuedTokensResource
     */
    public function getBackendStatisticIssuedTokens(): BackendStatisticIssuedTokensResource
    {
        return new BackendStatisticIssuedTokensResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/statistic/incoming_transactions
     *
     * @return BackendStatisticIncomingTransactionsResource
     */
    public function getBackendStatisticIncomingTransactions(): BackendStatisticIncomingTransactionsResource
    {
        return new BackendStatisticIncomingTransactionsResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/statistic/incoming_requests
     *
     * @return BackendStatisticIncomingRequestsResource
     */
    public function getBackendStatisticIncomingRequests(): BackendStatisticIncomingRequestsResource
    {
        return new BackendStatisticIncomingRequestsResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/statistic/errors_per_route
     *
     * @return BackendStatisticErrorsPerRouteResource
     */
    public function getBackendStatisticErrorsPerRoute(): BackendStatisticErrorsPerRouteResource
    {
        return new BackendStatisticErrorsPerRouteResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/statistic/count_requests
     *
     * @return BackendStatisticCountRequestsResource
     */
    public function getBackendStatisticCountRequests(): BackendStatisticCountRequestsResource
    {
        return new BackendStatisticCountRequestsResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/sdk
     *
     * @return BackendSdkResource
     */
    public function getBackendSdk(): BackendSdkResource
    {
        return new BackendSdkResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/scope/$scope_id<[0-9]+|^~>
     *
     * @return BackendScopeByScopeIdResource
     */
    public function getBackendScopeByScopeId(?string $scope_id): BackendScopeByScopeIdResource
    {
        return new BackendScopeByScopeIdResource(
            $scope_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/scope/categories
     *
     * @return BackendScopeCategoriesResource
     */
    public function getBackendScopeCategories(): BackendScopeCategoriesResource
    {
        return new BackendScopeCategoriesResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/scope
     *
     * @return BackendScopeResource
     */
    public function getBackendScope(): BackendScopeResource
    {
        return new BackendScopeResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/schema/$schema_id<[0-9]+|^~>
     *
     * @return BackendSchemaBySchemaIdResource
     */
    public function getBackendSchemaBySchemaId(?string $schema_id): BackendSchemaBySchemaIdResource
    {
        return new BackendSchemaBySchemaIdResource(
            $schema_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/schema/form/$schema_id<[0-9]+>
     *
     * @return BackendSchemaFormBySchemaIdResource
     */
    public function getBackendSchemaFormBySchemaId(?string $schema_id): BackendSchemaFormBySchemaIdResource
    {
        return new BackendSchemaFormBySchemaIdResource(
            $schema_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/schema/preview/:schema_id
     *
     * @return BackendSchemaPreviewBySchemaIdResource
     */
    public function getBackendSchemaPreviewBySchemaId(?string $schema_id): BackendSchemaPreviewBySchemaIdResource
    {
        return new BackendSchemaPreviewBySchemaIdResource(
            $schema_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/schema
     *
     * @return BackendSchemaResource
     */
    public function getBackendSchema(): BackendSchemaResource
    {
        return new BackendSchemaResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/routes/$route_id<[0-9]+>
     *
     * @return BackendRoutesByRouteIdResource
     */
    public function getBackendRoutesByRouteId(?string $route_id): BackendRoutesByRouteIdResource
    {
        return new BackendRoutesByRouteIdResource(
            $route_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/routes/provider/:provider
     *
     * @return BackendRoutesProviderByProviderResource
     */
    public function getBackendRoutesProviderByProvider(?string $provider): BackendRoutesProviderByProviderResource
    {
        return new BackendRoutesProviderByProviderResource(
            $provider,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/routes/provider
     *
     * @return BackendRoutesProviderResource
     */
    public function getBackendRoutesProvider(): BackendRoutesProviderResource
    {
        return new BackendRoutesProviderResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/routes
     *
     * @return BackendRoutesResource
     */
    public function getBackendRoutes(): BackendRoutesResource
    {
        return new BackendRoutesResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/role/$role_id<[0-9]+|^~>
     *
     * @return BackendRoleByRoleIdResource
     */
    public function getBackendRoleByRoleId(?string $role_id): BackendRoleByRoleIdResource
    {
        return new BackendRoleByRoleIdResource(
            $role_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/role
     *
     * @return BackendRoleResource
     */
    public function getBackendRole(): BackendRoleResource
    {
        return new BackendRoleResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/rate/$rate_id<[0-9]+|^~>
     *
     * @return BackendRateByRateIdResource
     */
    public function getBackendRateByRateId(?string $rate_id): BackendRateByRateIdResource
    {
        return new BackendRateByRateIdResource(
            $rate_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/rate
     *
     * @return BackendRateResource
     */
    public function getBackendRate(): BackendRateResource
    {
        return new BackendRateResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

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
            $this->token,
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
            $this->token,
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
            $this->token,
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
            $this->token,
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
            $this->token,
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
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/marketplace/:app_name
     *
     * @return BackendMarketplaceByAppNameResource
     */
    public function getBackendMarketplaceByAppName(?string $app_name): BackendMarketplaceByAppNameResource
    {
        return new BackendMarketplaceByAppNameResource(
            $app_name,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/marketplace
     *
     * @return BackendMarketplaceResource
     */
    public function getBackendMarketplace(): BackendMarketplaceResource
    {
        return new BackendMarketplaceResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/log/$log_id<[0-9]+>
     *
     * @return BackendLogByLogIdResource
     */
    public function getBackendLogByLogId(?string $log_id): BackendLogByLogIdResource
    {
        return new BackendLogByLogIdResource(
            $log_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/log
     *
     * @return BackendLogResource
     */
    public function getBackendLog(): BackendLogResource
    {
        return new BackendLogResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/log/error/$error_id<[0-9]+>
     *
     * @return BackendLogErrorByErrorIdResource
     */
    public function getBackendLogErrorByErrorId(?string $error_id): BackendLogErrorByErrorIdResource
    {
        return new BackendLogErrorByErrorIdResource(
            $error_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/log/error
     *
     * @return BackendLogErrorResource
     */
    public function getBackendLogError(): BackendLogErrorResource
    {
        return new BackendLogErrorResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/event/$event_id<[0-9]+|^~>
     *
     * @return BackendEventByEventIdResource
     */
    public function getBackendEventByEventId(?string $event_id): BackendEventByEventIdResource
    {
        return new BackendEventByEventIdResource(
            $event_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/event
     *
     * @return BackendEventResource
     */
    public function getBackendEvent(): BackendEventResource
    {
        return new BackendEventResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/event/subscription/$subscription_id<[0-9]+>
     *
     * @return BackendEventSubscriptionBySubscriptionIdResource
     */
    public function getBackendEventSubscriptionBySubscriptionId(?string $subscription_id): BackendEventSubscriptionBySubscriptionIdResource
    {
        return new BackendEventSubscriptionBySubscriptionIdResource(
            $subscription_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/event/subscription
     *
     * @return BackendEventSubscriptionResource
     */
    public function getBackendEventSubscription(): BackendEventSubscriptionResource
    {
        return new BackendEventSubscriptionResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/dashboard
     *
     * @return BackendDashboardResource
     */
    public function getBackendDashboard(): BackendDashboardResource
    {
        return new BackendDashboardResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/cronjob/$cronjob_id<[0-9]+|^~>
     *
     * @return BackendCronjobByCronjobIdResource
     */
    public function getBackendCronjobByCronjobId(?string $cronjob_id): BackendCronjobByCronjobIdResource
    {
        return new BackendCronjobByCronjobIdResource(
            $cronjob_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/cronjob
     *
     * @return BackendCronjobResource
     */
    public function getBackendCronjob(): BackendCronjobResource
    {
        return new BackendCronjobResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/connection/$connection_id<[0-9]+|^~>
     *
     * @return BackendConnectionByConnectionIdResource
     */
    public function getBackendConnectionByConnectionId(?string $connection_id): BackendConnectionByConnectionIdResource
    {
        return new BackendConnectionByConnectionIdResource(
            $connection_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/connection/form
     *
     * @return BackendConnectionFormResource
     */
    public function getBackendConnectionForm(): BackendConnectionFormResource
    {
        return new BackendConnectionFormResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/connection/list
     *
     * @return BackendConnectionListResource
     */
    public function getBackendConnectionList(): BackendConnectionListResource
    {
        return new BackendConnectionListResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/connection
     *
     * @return BackendConnectionResource
     */
    public function getBackendConnection(): BackendConnectionResource
    {
        return new BackendConnectionResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/config/$config_id<[0-9]+|^~>
     *
     * @return BackendConfigByConfigIdResource
     */
    public function getBackendConfigByConfigId(?string $config_id): BackendConfigByConfigIdResource
    {
        return new BackendConfigByConfigIdResource(
            $config_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/config
     *
     * @return BackendConfigResource
     */
    public function getBackendConfig(): BackendConfigResource
    {
        return new BackendConfigResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/category/$category_id<[0-9]+|^~>
     *
     * @return BackendCategoryByCategoryIdResource
     */
    public function getBackendCategoryByCategoryId(?string $category_id): BackendCategoryByCategoryIdResource
    {
        return new BackendCategoryByCategoryIdResource(
            $category_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/category
     *
     * @return BackendCategoryResource
     */
    public function getBackendCategory(): BackendCategoryResource
    {
        return new BackendCategoryResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/audit/$audit_id<[0-9]+>
     *
     * @return BackendAuditByAuditIdResource
     */
    public function getBackendAuditByAuditId(?string $audit_id): BackendAuditByAuditIdResource
    {
        return new BackendAuditByAuditIdResource(
            $audit_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/audit
     *
     * @return BackendAuditResource
     */
    public function getBackendAudit(): BackendAuditResource
    {
        return new BackendAuditResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

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
            $this->token,
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
            $this->token,
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
            $this->token,
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
            $this->token,
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
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/action/$action_id<[0-9]+|^~>
     *
     * @return BackendActionByActionIdResource
     */
    public function getBackendActionByActionId(?string $action_id): BackendActionByActionIdResource
    {
        return new BackendActionByActionIdResource(
            $action_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/action/execute/:action_id
     *
     * @return BackendActionExecuteByActionIdResource
     */
    public function getBackendActionExecuteByActionId(?string $action_id): BackendActionExecuteByActionIdResource
    {
        return new BackendActionExecuteByActionIdResource(
            $action_id,
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/action/form
     *
     * @return BackendActionFormResource
     */
    public function getBackendActionForm(): BackendActionFormResource
    {
        return new BackendActionFormResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/action/list
     *
     * @return BackendActionListResource
     */
    public function getBackendActionList(): BackendActionListResource
    {
        return new BackendActionListResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/action
     *
     * @return BackendActionResource
     */
    public function getBackendAction(): BackendActionResource
    {
        return new BackendActionResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/account/change_password
     *
     * @return BackendAccountChangePasswordResource
     */
    public function getBackendAccountChangePassword(): BackendAccountChangePasswordResource
    {
        return new BackendAccountChangePasswordResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/account
     *
     * @return BackendAccountResource
     */
    public function getBackendAccount(): BackendAccountResource
    {
        return new BackendAccountResource(
            $this->baseUrl,
            $this->token,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
