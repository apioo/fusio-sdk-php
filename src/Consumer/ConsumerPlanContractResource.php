<?php
/**
 * ConsumerPlanContractResource generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerPlanContractResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    public function __construct(string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/consumer/plan/contract';
    }

    /**
     * @param Collection_Query $query
     * @return Plan_Contract_Collection
     */
    public function consumerActionPlanContractGetAll(?Collection_Query $query = null): Plan_Contract_Collection
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Plan_Contract_Collection::class);
    }

    /**
     * @param Plan_Order_Request $data
     * @return Plan_Order_Response
     */
    public function consumerActionPlanContractCreate(?Plan_Order_Request $data = null): Plan_Order_Response
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Plan_Order_Response::class);
    }

}
