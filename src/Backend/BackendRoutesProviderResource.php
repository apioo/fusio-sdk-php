<?php
/**
 * BackendRoutesProviderResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendRoutesProviderResource extends ResourceAbstract
{
    private string $url;


    public function __construct(string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/backend/routes/provider';
    }

    /**
     * @return Route_Index_Providers
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionRouteProviderIndex(): Route_Index_Providers
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Route_Index_Providers::class);
    }

}
