<?php 
/**
 * BackendConfigResource generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Api\Generator\Client\Php\ResourceAbstract;
use PSX\Schema\SchemaManager;

class BackendConfigResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    public function __construct(string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $token, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/backend/config';
    }

    /**
     * @param Collection_Query $query
     * @return Config_Collection
     */
    public function backendActionConfigGetAll(?Collection_Query $query): Config_Collection
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Config_Collection::class);
    }

}
