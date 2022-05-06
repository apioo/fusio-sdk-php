<?php
/**
 * BackendAuditByAuditIdResource generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendAuditByAuditIdResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $audit_id;

    public function __construct(string $audit_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->audit_id = $audit_id;
        $this->url = $this->baseUrl . '/backend/audit/' . $audit_id . '';
    }

    /**
     * @return Audit
     */
    public function backendActionAuditGet(): Audit
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Audit::class);
    }

}
