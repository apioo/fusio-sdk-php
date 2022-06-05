<?php
/**
 * BackendTrashByTypeResource generated on 2022-06-05
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
     * @param Collection_Query|null $query
     * @return Trash_Data_Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionTrashGetAll(?Collection_Query $query = null): Trash_Data_Collection
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Trash_Data_Collection::class);
    }

    /**
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionTrashRestore(): Message
    {
        $options = [
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
