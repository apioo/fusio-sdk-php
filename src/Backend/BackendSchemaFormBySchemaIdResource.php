<?php
/**
 * BackendSchemaFormBySchemaIdResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Http\Exception\StatusCodeException;
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
     * @throws \PSX\Http\Exception\StatusCodeException
     */
    public function backendActionSchemaForm(Schema_Form $data): Message
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        if ($response->getStatusCode() >= 300 && $response->getStatusCode() < 400) {
            StatusCodeException::throwOnRedirection($response);
        } elseif ($response->getStatusCode() >= 400 && $response->getStatusCode() < 500) {
            StatusCodeException::throwOnClientError($response);
        } elseif ($response->getStatusCode() >= 500 && $response->getStatusCode() < 600) {
            StatusCodeException::throwOnServerError($response);
        }

        return $this->parse($data, Message::class);
    }

}
