<?php
/**
 * ConsumerAuthorizeResource automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerAuthorizeResource extends ResourceAbstract
{
    private string $url;


    public function __construct(string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/consumer/authorize';
    }

    /**
     * @return AuthorizeMeta
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionUserGetApp(): AuthorizeMeta
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, AuthorizeMeta::class);
    }

    /**
     * @param AuthorizeRequest $data
     * @return AuthorizeResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionUserAuthorize(AuthorizeRequest $data): AuthorizeResponse
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, AuthorizeResponse::class);
    }

}
