<?php
/**
 * BackendStatisticIncomingTransactionsResource generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendStatisticIncomingTransactionsResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    public function __construct(string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/backend/statistic/incoming_transactions';
    }

    /**
     * @param Backend_Transaction_Collection_Query $query
     * @return Statistic_Count
     */
    public function backendActionStatisticGetIncomingTransactions(?Backend_Transaction_Collection_Query $query = null): Statistic_Count
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Statistic_Count::class);
    }

}
