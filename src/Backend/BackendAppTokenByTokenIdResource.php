<?php
/**
 * BackendAppTokenByTokenIdResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Http\Exception\StatusCodeException;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendAppTokenByTokenIdResource extends ResourceAbstract
{
    private string $url;

    private string $token_id;

    public function __construct(string $token_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->token_id = $token_id;
        $this->url = $this->baseUrl . '/backend/app/token/' . $token_id . '';
    }

    /**
     * @return App_Token
     * @throws \PSX\Http\Exception\StatusCodeException
     */
    public function backendActionAppTokenGet(): App_Token
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        if ($response->getStatusCode() >= 300 && $response->getStatusCode() < 400) {
            StatusCodeException::throwOnRedirection($response);
        } elseif ($response->getStatusCode() >= 400 && $response->getStatusCode() < 500) {
            StatusCodeException::throwOnClientError($response);
        } elseif ($response->getStatusCode() >= 500 && $response->getStatusCode() < 600) {
            StatusCodeException::throwOnServerError($response);
        }

        return $this->parse($data, App_Token::class);
    }

}
