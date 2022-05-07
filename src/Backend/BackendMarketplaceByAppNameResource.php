<?php
/**
 * BackendMarketplaceByAppNameResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendMarketplaceByAppNameResource extends ResourceAbstract
{
    private string $url;

    private string $app_name;

    public function __construct(string $app_name, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->app_name = $app_name;
        $this->url = $this->baseUrl . '/backend/marketplace/' . $app_name . '';
    }

    /**
     * @return Marketplace_Local_App
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionMarketplaceGet(): Marketplace_Local_App
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Marketplace_Local_App::class);
    }

    /**
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionMarketplaceUpdate(): Message
    {
        $options = [
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

    /**
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionMarketplaceRemove(): Message
    {
        $options = [
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
