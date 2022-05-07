<?php
/**
 * BackendEventResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendEventResource extends ResourceAbstract
{
    private string $url;


    public function __construct(string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/backend/event';
    }

    /**
     * @param Collection_Category_Query|null $query
     * @return Event_Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionEventGetAll(?Collection_Category_Query $query = null): Event_Collection
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Event_Collection::class);
    }

    /**
     * @param Event_Create $data
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionEventCreate(Event_Create $data): Message
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
