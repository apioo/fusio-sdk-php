<?php
/**
 * BackendPlanContractByContractIdResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendPlanContractByContractIdResource extends ResourceAbstract
{
    private string $url;

    private string $contract_id;

    public function __construct(string $contract_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->contract_id = $contract_id;
        $this->url = $this->baseUrl . '/backend/plan/contract/' . $contract_id . '';
    }

    /**
     * @return Plan_Contract
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionPlanContractGet(): Plan_Contract
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Plan_Contract::class);
    }

    /**
     * @param Plan_Contract_Update $data
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionPlanContractUpdate(Plan_Contract_Update $data): Message
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
    public function backendActionPlanContractDelete(): Message
    {
        $options = [
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
