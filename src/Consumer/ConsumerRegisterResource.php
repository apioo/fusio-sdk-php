<?php
/**
 * ConsumerRegisterResource automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerRegisterResource extends ResourceAbstract
{
    private string $url;


    public function __construct(string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/consumer/register';
    }

    /**
     * @param UserRegister $data
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionUserRegister(UserRegister $data): Message
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
