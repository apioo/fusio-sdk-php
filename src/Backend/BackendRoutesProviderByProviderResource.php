<?php 
/**
 * BackendRoutesProviderByProviderResource generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Api\Generator\Client\Php\ResourceAbstract;
use PSX\Schema\SchemaManager;

class BackendRoutesProviderByProviderResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $provider;

    public function __construct(string $provider, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $token, $httpClient, $schemaManager);

        $this->provider = $provider;
        $this->url = $this->baseUrl . '/backend/routes/provider/' . $provider . '';
    }

    /**
     * @return Form_Container
     */
    public function backendActionRouteProviderForm(): Form_Container
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Form_Container::class);
    }

    /**
     * @param Route_Provider $data
     * @return Message
     */
    public function backendActionRouteProviderCreate(?Route_Provider $data): Message
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

    /**
     * @param Route_Provider_Config $data
     * @return Route_Provider_Changelog
     */
    public function backendActionRouteProviderChangelog(?Route_Provider_Config $data): Route_Provider_Changelog
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $data
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Route_Provider_Changelog::class);
    }

}
