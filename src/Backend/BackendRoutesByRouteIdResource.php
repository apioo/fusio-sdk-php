<?php
/**
 * BackendRoutesByRouteIdResource generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendRoutesByRouteIdResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $route_id;

    public function __construct(string $route_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->route_id = $route_id;
        $this->url = $this->baseUrl . '/backend/routes/' . $route_id . '';
    }

    /**
     * @return Route
     */
    public function backendActionRouteGet(): Route
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Route::class);
    }

    /**
     * @param Route_Update $data
     * @return Message
     */
    public function backendActionRouteUpdate(?Route_Update $data = null): Message
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
    public function backendActionRouteDelete(): Message
    {
        $options = [
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
