<?php
/**
 * Client generated on 2022-04-30
 * @see https://sdkgen.app
 */


use Sdkgen\Client\ClientAbstract;
use Sdkgen\Client\Credentials;
use Sdkgen\Client\TokenStoreInterface;

class Client extends ClientAbstract
{
    public function __construct(string $baseUrl, ?TokenStoreInterface $tokenStore = null)
    {
        parent::__construct($baseUrl, null, $tokenStore);
    }

    /**
     * Tag: backend.user
     *
     * @return BackendUserGroup
     */
    public function backendUser(): BackendUserGroup
    {
        return new BackendUserGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.transaction
     *
     * @return BackendTransactionGroup
     */
    public function backendTransaction(): BackendTransactionGroup
    {
        return new BackendTransactionGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.statistic
     *
     * @return BackendStatisticGroup
     */
    public function backendStatistic(): BackendStatisticGroup
    {
        return new BackendStatisticGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.sdk
     *
     * @return BackendSdkGroup
     */
    public function backendSdk(): BackendSdkGroup
    {
        return new BackendSdkGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.scope
     *
     * @return BackendScopeGroup
     */
    public function backendScope(): BackendScopeGroup
    {
        return new BackendScopeGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.schema
     *
     * @return BackendSchemaGroup
     */
    public function backendSchema(): BackendSchemaGroup
    {
        return new BackendSchemaGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.route
     *
     * @return BackendRouteGroup
     */
    public function backendRoute(): BackendRouteGroup
    {
        return new BackendRouteGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.role
     *
     * @return BackendRoleGroup
     */
    public function backendRole(): BackendRoleGroup
    {
        return new BackendRoleGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.rate
     *
     * @return BackendRateGroup
     */
    public function backendRate(): BackendRateGroup
    {
        return new BackendRateGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.plan
     *
     * @return BackendPlanGroup
     */
    public function backendPlan(): BackendPlanGroup
    {
        return new BackendPlanGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.page
     *
     * @return BackendPageGroup
     */
    public function backendPage(): BackendPageGroup
    {
        return new BackendPageGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.marketplace
     *
     * @return BackendMarketplaceGroup
     */
    public function backendMarketplace(): BackendMarketplaceGroup
    {
        return new BackendMarketplaceGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.log
     *
     * @return BackendLogGroup
     */
    public function backendLog(): BackendLogGroup
    {
        return new BackendLogGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.event
     *
     * @return BackendEventGroup
     */
    public function backendEvent(): BackendEventGroup
    {
        return new BackendEventGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.dashboard
     *
     * @return BackendDashboardGroup
     */
    public function backendDashboard(): BackendDashboardGroup
    {
        return new BackendDashboardGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.cronjob
     *
     * @return BackendCronjobGroup
     */
    public function backendCronjob(): BackendCronjobGroup
    {
        return new BackendCronjobGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.connection
     *
     * @return BackendConnectionGroup
     */
    public function backendConnection(): BackendConnectionGroup
    {
        return new BackendConnectionGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.config
     *
     * @return BackendConfigGroup
     */
    public function backendConfig(): BackendConfigGroup
    {
        return new BackendConfigGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.category
     *
     * @return BackendCategoryGroup
     */
    public function backendCategory(): BackendCategoryGroup
    {
        return new BackendCategoryGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.audit
     *
     * @return BackendAuditGroup
     */
    public function backendAudit(): BackendAuditGroup
    {
        return new BackendAuditGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.app
     *
     * @return BackendAppGroup
     */
    public function backendApp(): BackendAppGroup
    {
        return new BackendAppGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.action
     *
     * @return BackendActionGroup
     */
    public function backendAction(): BackendActionGroup
    {
        return new BackendActionGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: backend.account
     *
     * @return BackendAccountGroup
     */
    public function backendAccount(): BackendAccountGroup
    {
        return new BackendAccountGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

}
