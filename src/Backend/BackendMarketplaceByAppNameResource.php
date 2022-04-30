<?php
/**
 * BackendMarketplaceByAppNameResource generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendMarketplaceByAppNameResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $app_name;

    public function __construct(string $app_name, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->app_name = $app_name;
        $this->url = $this->baseUrl . '/backend/marketplace/' . $app_name . '';
    }

    /**
     * @return Marketplace_Local_App
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
