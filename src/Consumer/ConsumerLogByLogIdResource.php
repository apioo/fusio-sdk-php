<?php
/**
 * ConsumerLogByLogIdResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Http\Exception\StatusCodeException;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerLogByLogIdResource extends ResourceAbstract
{
    private string $url;

    private string $log_id;

    public function __construct(string $log_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->log_id = $log_id;
        $this->url = $this->baseUrl . '/consumer/log/' . $log_id . '';
    }

    /**
     * @param Collection_Query|null $query
     * @return Log
     * @throws \PSX\Http\Exception\StatusCodeException
     */
    public function consumerActionLogGet(?Collection_Query $query = null): Log
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        if ($response->getStatusCode() >= 300 && $response->getStatusCode() < 400) {
            StatusCodeException::throwOnRedirection($response);
        } elseif ($response->getStatusCode() >= 400 && $response->getStatusCode() < 500) {
            StatusCodeException::throwOnClientError($response);
        } elseif ($response->getStatusCode() >= 500 && $response->getStatusCode() < 600) {
            StatusCodeException::throwOnServerError($response);
        }

        return $this->parse($data, Log::class);
    }

}
