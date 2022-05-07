<?php
/**
 * Client generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ClientAbstract;
use Sdkgen\Client\Credentials;
use Sdkgen\Client\CredentialsInterface;
use Sdkgen\Client\TokenStoreInterface;

class Client extends ClientAbstract
{
    public function __construct(string $baseUrl, ?CredentialsInterface $credentials = null, ?TokenStoreInterface $tokenStore = null, ?array $scopes = null)
    {
        parent::__construct($baseUrl, $credentials, $tokenStore, $scopes);
    }

    /**
     * Tag: backend.user
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
