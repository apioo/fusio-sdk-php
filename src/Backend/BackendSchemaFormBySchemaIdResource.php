<?php 
/**
 * BackendSchemaFormBySchemaIdResource generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Api\Generator\Client\Php\ResourceAbstract;
use PSX\Schema\SchemaManager;

class BackendSchemaFormBySchemaIdResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $schema_id;

    public function __construct(string $schema_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $token, $httpClient, $schemaManager);

        $this->schema_id = $schema_id;
        $this->url = $this->baseUrl . '/backend/schema/form/' . $schema_id . '';
    }

    /**
     * @param Schema_Form $data
     * @return Message
     */
    public function backendActionSchemaForm(?Schema_Form $data): Message
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $data
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
