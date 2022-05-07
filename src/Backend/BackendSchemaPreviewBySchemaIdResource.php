<?php
/**
 * BackendSchemaPreviewBySchemaIdResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendSchemaPreviewBySchemaIdResource extends ResourceAbstract
{
    private string $url;

    private string $schema_id;

    public function __construct(string $schema_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->schema_id = $schema_id;
        $this->url = $this->baseUrl . '/backend/schema/preview/' . $schema_id . '';
    }

    /**
     * @return Schema_Preview_Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionSchemaGetPreview(): Schema_Preview_Response
    {
        $options = [
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Schema_Preview_Response::class);
    }

}
