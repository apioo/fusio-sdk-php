<?php
/**
 * BackendCronjobByCronjobIdResource automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendCronjobByCronjobIdResource extends ResourceAbstract
{
    private string $url;

    private string $cronjobId;

    public function __construct(string $cronjobId, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->cronjobId = $cronjobId;
        $this->url = $this->baseUrl . '/backend/cronjob/' . $cronjobId . '';
    }

    /**
     * @return Cronjob
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionCronjobGet(): Cronjob
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Cronjob::class);
    }

    /**
     * @param CronjobUpdate $data
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionCronjobUpdate(CronjobUpdate $data): Message
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

    /**
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionCronjobDelete(): Message
    {
        $options = [
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
