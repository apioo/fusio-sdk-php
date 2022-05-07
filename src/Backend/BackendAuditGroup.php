<?php
/**
 * BackendAuditGroup generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendAuditGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/audit/$audit_id<[0-9]+>
     */
    public function getBackendAuditByAuditId(string $audit_id): BackendAuditByAuditIdResource
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
