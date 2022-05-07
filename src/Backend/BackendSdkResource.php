<?php
/**
 * BackendSdkResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendSdkResource extends ResourceAbstract
{
    private string $url;


    public function __construct(string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/backend/sdk';
    }

    /**
     * @return Sdk_Types
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionSdkGetAll(): Sdk_Types
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Sdk_Types::class);
    }

    /**
     * @param Sdk_Generate $data
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionSdkGenerate(Sdk_Generate $data): Message
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
