<?php
/**
 * BackendCategoryByCategoryIdResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendCategoryByCategoryIdResource extends ResourceAbstract
{
    private string $url;

    private string $category_id;

    public function __construct(string $category_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->category_id = $category_id;
        $this->url = $this->baseUrl . '/backend/category/' . $category_id . '';
    }

    /**
     * @return Category
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionCategoryGet(): Category
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Category::class);
    }

    /**
     * @param Category_Update $data
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionCategoryUpdate(Category_Update $data): Message
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

    /**
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionCategoryDelete(): Message
    {
        $options = [
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
