<?php
/**
 * BackendConnectionByConnectionIdRedirectResource generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendConnectionByConnectionIdRedirectResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $connection_id;

    public function __construct(string $connection_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->connection_id = $connection_id;
        $this->url = $this->baseUrl . '/backend/connection/' . $connection_id . '/redirect';
    }

    /**
     * @return Message
     */
    public function backendActionConnectionGetRedirect(): Message
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}