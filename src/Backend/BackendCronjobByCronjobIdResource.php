<?php
/**
 * BackendCronjobByCronjobIdResource generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendCronjobByCronjobIdResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $cronjob_id;

    public function __construct(string $cronjob_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->cronjob_id = $cronjob_id;
        $this->url = $this->baseUrl . '/backend/cronjob/' . $cronjob_id . '';
    }

    /**
     * @return Cronjob
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
     * @param Cronjob_Update $data
     * @return Message
     */
    public function backendActionCronjobUpdate(?Cronjob_Update $data = null): Message
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
