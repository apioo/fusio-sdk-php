<?php
/**
 * ConsumerLogByLogIdResource generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
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
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionLogGet(?Collection_Query $query = null): Log
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Log::class);
    }

}
