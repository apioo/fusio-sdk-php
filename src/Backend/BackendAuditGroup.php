<?php
/**
 * BackendAuditGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */


use Sdkgen\Client\ResourceAbstract;

class BackendAuditGroup extends ResourceAbstract
{
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
            $this->httpClient,
            $this->schemaManager
        );
    }

}
