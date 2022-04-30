<?php
/**
 * BackendAppByAppIdResource generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendAppByAppIdResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $app_id;

    public function __construct(string $app_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->app_id = $app_id;
        $this->url = $this->baseUrl . '/backend/app/' . $app_id . '';
    }

    /**
     * @return App
     */
    public function backendActionAppGet(): App
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, App::class);
    }

    /**
     * @param App_Update $data
     * @return Message
     */
    public function backendActionAppUpdate(?App_Update $data = null): Message
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
    public function backendActionAppDelete(): Message
    {
        $options = [
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
