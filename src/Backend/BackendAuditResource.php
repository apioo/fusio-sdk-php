<?php
/**
 * BackendAuditResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendAuditResource extends ResourceAbstract
{
    private string $url;


    public function __construct(string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/backend/audit';
    }

    /**
     * @param Backend_Audit_Collection_Query|null $query
     * @return Audit_Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionAuditGetAll(?Backend_Audit_Collection_Query $query = null): Audit_Collection
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Audit_Collection::class);
    }

}
