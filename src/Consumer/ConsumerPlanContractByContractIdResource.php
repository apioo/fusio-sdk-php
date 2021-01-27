<?php 
/**
 * ConsumerPlanContractByContractIdResource generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Api\Generator\Client\Php\ResourceAbstract;
use PSX\Schema\SchemaManager;

class ConsumerPlanContractByContractIdResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $contract_id;

    public function __construct(string $contract_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $token, $httpClient, $schemaManager);

        $this->contract_id = $contract_id;
        $this->url = $this->baseUrl . '/consumer/plan/contract/' . $contract_id . '';
    }

    /**
     * @return Plan_Contract
     */
    public function consumerActionPlanContractGet(): Plan_Contract
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Plan_Contract::class);
    }

}
