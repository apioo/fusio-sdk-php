<?php
/**
 * BackendStatisticMostUsedRoutesResource automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendStatisticMostUsedRoutesResource extends ResourceAbstract
{
    private string $url;


    public function __construct(string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/backend/statistic/most_used_routes';
    }

    /**
     * @param Backend_Log_Collection_Query|null $query
     * @return Statistic_Chart
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionStatisticGetMostUsedRoutes(?Backend_Log_Collection_Query $query = null): Statistic_Chart
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Statistic_Chart::class);
    }

}
