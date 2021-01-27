<?php 
/**
 * BackendAccountResource generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Api\Generator\Client\Php\ResourceAbstract;
use PSX\Schema\SchemaManager;

class BackendAccountResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    public function __construct(string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $token, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/backend/account';
    }

    /**
     * @return User
     */
    public function backendActionAccountGet(): User
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, User::class);
    }

    /**
     * @param User_Update $data
     * @return Message
     */
    public function backendActionAccountUpdate(?User_Update $data): Message
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

}
