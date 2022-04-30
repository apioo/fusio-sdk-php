<?php
/**
 * BackendCategoryByCategoryIdResource generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendCategoryByCategoryIdResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $category_id;

    public function __construct(string $category_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->category_id = $category_id;
        $this->url = $this->baseUrl . '/backend/category/' . $category_id . '';
    }

    /**
     * @return Category
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
     */
    public function backendActionCategoryUpdate(?Category_Update $data = null): Message
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
