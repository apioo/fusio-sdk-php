<?php 
/**
 * ConsumerPlanContractResource generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Api\Generator\Client\Php\ResourceAbstract;
use PSX\Schema\SchemaManager;

class ConsumerPlanContractResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    public function __construct(string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $token, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/consumer/plan/contract';
    }

    /**
     * @param Collection_Query $query
     * @return Plan_Contract_Collection
     */
    public function consumerActionPlanContractGetAll(?Collection_Query $query): Plan_Contract_Collection
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Plan_Contract_Collection::class);
    }

    /**
     * @param Plan_Order_Request $data
     * @return Plan_Order_Response
     */
    public function consumerActionPlanContractCreate(?Plan_Order_Request $data): Plan_Order_Response
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Plan_Order_Response::class);
    }

}
