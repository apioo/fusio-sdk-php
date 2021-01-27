<?php 
/**
 * BackendTransactionResource generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Api\Generator\Client\Php\ResourceAbstract;
use PSX\Schema\SchemaManager;

class BackendTransactionResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    public function __construct(string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $token, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/backend/transaction';
    }

    /**
     * @param Backend_Transaction_Collection_Query $query
     * @return Transaction_Collection
     */
    public function backendActionTransactionGetAll(?Backend_Transaction_Collection_Query $query): Transaction_Collection
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Transaction_Collection::class);
    }

}
