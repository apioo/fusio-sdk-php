<?php
/**
 * ConsumerGrantByGrantIdResource generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerGrantByGrantIdResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $grant_id;

    public function __construct(string $grant_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->grant_id = $grant_id;
        $this->url = $this->baseUrl . '/consumer/grant/' . $grant_id . '';
    }

    /**
     * @return void
     */
    public function consumerActionGrantDelete()
    {
        $options = [
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, null);
    }

}
