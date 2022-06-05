<?php
/**
 * ConsumerAuthorizeResource generated on 2022-06-05
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
     * @return Authorize_Meta
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionUserGetApp(): Authorize_Meta
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Authorize_Meta::class);
    }

    /**
     * @param Authorize_Request $data
     * @return Authorize_Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionUserAuthorize(Authorize_Request $data): Authorize_Response
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Authorize_Response::class);
    }

}
