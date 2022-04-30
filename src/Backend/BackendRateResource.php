<?php
/**
 * BackendRateResource generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendRateResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    public function __construct(string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/backend/rate';
    }

    /**
     * @param Collection_Query $query
     * @return Rate_Collection
     */
    public function backendActionRateGetAll(?Collection_Query $query = null): Rate_Collection
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Rate_Collection::class);
    }

    /**
     * @param Rate_Create $data
     * @return Message
     */
    public function backendActionRateCreate(?Rate_Create $data = null): Message
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
