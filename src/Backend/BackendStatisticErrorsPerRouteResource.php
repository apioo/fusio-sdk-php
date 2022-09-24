<?php
/**
 * BackendStatisticErrorsPerRouteResource automatically generated by SDKgen please do not edit this file manually
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
     * @param BackendLogCollectionQuery|null $query
     * @return StatisticChart
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionStatisticGetErrorsPerRoute(?BackendLogCollectionQuery $query = null): StatisticChart
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, StatisticChart::class);
    }

}
