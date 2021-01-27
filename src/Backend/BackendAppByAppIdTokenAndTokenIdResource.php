<?php 
/**
 * BackendAppByAppIdTokenAndTokenIdResource generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Api\Generator\Client\Php\ResourceAbstract;
use PSX\Schema\SchemaManager;

class BackendAppByAppIdTokenAndTokenIdResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $app_id;

    /**
     * @var string
     */
    private $token_id;

    public function __construct(string $app_id, string $token_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $token, $httpClient, $schemaManager);

        $this->app_id = $app_id;
        $this->token_id = $token_id;
        $this->url = $this->baseUrl . '/backend/app/' . $app_id . '/token/' . $token_id . '';
    }

    /**
     * @return Message
     */
    public function backendActionAppDeleteToken(): Message
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
