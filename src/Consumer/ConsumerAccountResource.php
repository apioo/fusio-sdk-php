<?php
/**
 * ConsumerAccountResource generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerAccountResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    public function __construct(string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/consumer/account';
    }

    /**
     * @return User_Account
     */
    public function consumerActionUserGet(): User_Account
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, User_Account::class);
    }

    /**
     * @param User_Account $data
     * @return Message
     */
    public function consumerActionUserUpdate(?User_Account $data = null): Message
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
