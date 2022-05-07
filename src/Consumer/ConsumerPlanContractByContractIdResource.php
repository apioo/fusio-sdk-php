<?php
/**
 * ConsumerPlanContractByContractIdResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Http\Exception\StatusCodeException;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerPlanContractByContractIdResource extends ResourceAbstract
{
    private string $url;

    private string $contract_id;

    public function __construct(string $contract_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->contract_id = $contract_id;
        $this->url = $this->baseUrl . '/consumer/plan/contract/' . $contract_id . '';
    }

    /**
     * @return Plan_Contract
     * @throws \PSX\Http\Exception\StatusCodeException
     */
    public function consumerActionPlanContractGet(): Plan_Contract
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        if ($response->getStatusCode() >= 300 && $response->getStatusCode() < 400) {
            StatusCodeException::throwOnRedirection($response);
        } elseif ($response->getStatusCode() >= 400 && $response->getStatusCode() < 500) {
            StatusCodeException::throwOnClientError($response);
        } elseif ($response->getStatusCode() >= 500 && $response->getStatusCode() < 600) {
            StatusCodeException::throwOnServerError($response);
        }

        return $this->parse($data, Plan_Contract::class);
    }

}
