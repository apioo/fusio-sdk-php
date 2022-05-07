<?php
/**
 * BackendAppByAppIdTokenAndTokenIdResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Http\Exception\StatusCodeException;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendAppByAppIdTokenAndTokenIdResource extends ResourceAbstract
{
    private string $url;

    private string $app_id;
    private string $token_id;

    public function __construct(string $app_id, string $token_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->app_id = $app_id;
        $this->token_id = $token_id;
        $this->url = $this->baseUrl . '/backend/app/' . $app_id . '/token/' . $token_id . '';
    }

    /**
     * @return Message
     * @throws \PSX\Http\Exception\StatusCodeException
     */
    public function backendActionAppDeleteToken(): Message
    {
        $options = [
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
        $data     = (string) $response->getBody();

        if ($response->getStatusCode() >= 300 && $response->getStatusCode() < 400) {
            StatusCodeException::throwOnRedirection($response);
        } elseif ($response->getStatusCode() >= 400 && $response->getStatusCode() < 500) {
            StatusCodeException::throwOnClientError($response);
        } elseif ($response->getStatusCode() >= 500 && $response->getStatusCode() < 600) {
            StatusCodeException::throwOnServerError($response);
        }

        return $this->parse($data, Message::class);
    }

}
