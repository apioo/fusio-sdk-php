<?php
/**
 * ConsumerPageByPageIdResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerPageByPageIdResource extends ResourceAbstract
{
    private string $url;

    private string $page_id;

    public function __construct(string $page_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->page_id = $page_id;
        $this->url = $this->baseUrl . '/consumer/page/' . $page_id . '';
    }

    /**
     * @return Page
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionPageGet(): Page
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Page::class);
    }

}
