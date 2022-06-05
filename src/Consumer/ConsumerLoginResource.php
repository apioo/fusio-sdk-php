<?php
/**
 * ConsumerLoginResource generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerLoginResource extends ResourceAbstract
{
    private string $url;


    public function __construct(string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/consumer/login';
    }

    /**
     * @param User_Login $data
     * @return User_JWT
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionUserLogin(User_Login $data): User_JWT
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, User_JWT::class);
    }

    /**
     * @param User_Refresh $data
     * @return User_JWT
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionUserRefresh(User_Refresh $data): User_JWT
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, User_JWT::class);
    }

}
