<?php
/**
 * ConsumerProviderByProviderResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerProviderByProviderResource extends ResourceAbstract
{
    private string $url;

    private string $provider;

    public function __construct(string $provider, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->provider = $provider;
        $this->url = $this->baseUrl . '/consumer/provider/' . $provider . '';
    }

    /**
     * @param User_Provider $data
     * @return User_JWT
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionUserProvider(User_Provider $data): User_JWT
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, User_JWT::class);
    }

}
