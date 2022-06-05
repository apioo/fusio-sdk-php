<?php
/**
 * BackendAppTokenResource generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendAppTokenResource extends ResourceAbstract
{
    private string $url;


    public function __construct(string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/backend/app/token';
    }

    /**
     * @param Backend_App_Token_Collection_Query|null $query
     * @return App_Token_Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionAppTokenGetAll(?Backend_App_Token_Collection_Query $query = null): App_Token_Collection
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, App_Token_Collection::class);
    }

}
