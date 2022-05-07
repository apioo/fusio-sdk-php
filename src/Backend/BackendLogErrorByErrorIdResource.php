<?php
/**
 * BackendLogErrorByErrorIdResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendLogErrorByErrorIdResource extends ResourceAbstract
{
    private string $url;

    private string $error_id;

    public function __construct(string $error_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->error_id = $error_id;
        $this->url = $this->baseUrl . '/backend/log/error/' . $error_id . '';
    }

    /**
     * @return Log_Error
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionLogErrorGet(): Log_Error
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Log_Error::class);
    }

}
