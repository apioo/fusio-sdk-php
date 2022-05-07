<?php
/**
 * BackendStatisticErrorsPerRouteResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendStatisticErrorsPerRouteResource extends ResourceAbstract
{
    private string $url;


    public function __construct(string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/backend/statistic/errors_per_route';
    }

    /**
     * @param Backend_Log_Collection_Query|null $query
     * @return Statistic_Count
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionStatisticGetErrorsPerRoute(?Backend_Log_Collection_Query $query = null): Statistic_Count
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Statistic_Count::class);
    }

}
