<?php
/**
 * BackendRoutesProviderByProviderResource generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendRoutesProviderByProviderResource extends ResourceAbstract
{
    private string $url;

    private string $provider;

    public function __construct(string $provider, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->provider = $provider;
        $this->url = $this->baseUrl . '/backend/routes/provider/' . $provider . '';
    }

    /**
     * @return Form_Container
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionRouteProviderForm(): Form_Container
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Form_Container::class);
    }

    /**
     * @param Route_Provider $data
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionRouteProviderCreate(Route_Provider $data): Message
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

    /**
     * @param Route_Provider_Config $data
     * @return Route_Provider_Changelog
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionRouteProviderChangelog(Route_Provider_Config $data): Route_Provider_Changelog
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Route_Provider_Changelog::class);
    }

}
