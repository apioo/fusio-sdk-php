<?php
/**
 * BackendTrashByTypeResource automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendTrashByTypeResource extends ResourceAbstract
{
    private string $url;

    private string $type;

    public function __construct(string $type, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->type = $type;
        $this->url = $this->baseUrl . '/backend/trash/' . $type . '';
    }

    /**
     * @param CollectionQuery|null $query
     * @return TrashDataCollection
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionTrashGetAll(?CollectionQuery $query = null): TrashDataCollection
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, TrashDataCollection::class);
    }

    /**
     * @param TrashRestore $data
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionTrashRestore(TrashRestore $data): Message
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
