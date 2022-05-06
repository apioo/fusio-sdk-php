<?php
/**
 * BackendStatisticTimePerRouteResource generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendStatisticTimePerRouteResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    public function __construct(string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/backend/statistic/time_per_route';
    }

    /**
     * @param Backend_Log_Collection_Query $query
     * @return Statistic_Count
     */
    public function backendActionStatisticGetTimePerRoute(?Backend_Log_Collection_Query $query = null): Statistic_Count
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Statistic_Count::class);
    }

}
