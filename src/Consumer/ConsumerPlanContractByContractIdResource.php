<?php
/**
 * ConsumerPlanContractByContractIdResource generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

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

    public function __construct(string $contract_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->contract_id = $contract_id;
        $this->url = $this->baseUrl . '/consumer/plan/contract/' . $contract_id . '';
    }

    /**
     * @return Plan_Contract
     */
    public function consumerActionPlanContractGet(): Plan_Contract
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Plan_Contract::class);
    }

}
