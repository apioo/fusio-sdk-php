<?php
/**
 * BackendLogByLogIdResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendLogByLogIdResource extends ResourceAbstract
{
    private string $url;

    private string $log_id;

    public function __construct(string $log_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->log_id = $log_id;
        $this->url = $this->baseUrl . '/backend/log/' . $log_id . '';
    }

    /**
     * @return Log
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionLogGet(): Log
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Log::class);
    }

}
