<?php 
/**
 * BackendCronjobByCronjobIdResource generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Api\Generator\Client\Php\ResourceAbstract;
use PSX\Schema\SchemaManager;

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

    public function __construct(string $cronjob_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $token, $httpClient, $schemaManager);

        $this->cronjob_id = $cronjob_id;
        $this->url = $this->baseUrl . '/backend/cronjob/' . $cronjob_id . '';
    }

    /**
     * @return Cronjob
     */
    public function backendActionCronjobGet(): Cronjob
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Cronjob::class);
    }

    /**
     * @param Cronjob_Update $data
     * @return Message
     */
    public function backendActionCronjobUpdate(?Cronjob_Update $data): Message
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
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
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
