<?php
/**
 * ConsumerLogByLogIdResource generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerLogByLogIdResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $log_id;

    public function __construct(string $log_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->log_id = $log_id;
        $this->url = $this->baseUrl . '/consumer/log/' . $log_id . '';
    }

    /**
     * @param Collection_Query $query
     * @return Log
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
