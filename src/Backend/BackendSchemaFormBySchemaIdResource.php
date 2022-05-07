<?php
/**
 * BackendSchemaFormBySchemaIdResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendSchemaFormBySchemaIdResource extends ResourceAbstract
{
    private string $url;

    private string $schema_id;

    public function __construct(string $schema_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->schema_id = $schema_id;
        $this->url = $this->baseUrl . '/backend/schema/form/' . $schema_id . '';
    }

    /**
     * @param Schema_Form $data
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionSchemaForm(Schema_Form $data): Message
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
