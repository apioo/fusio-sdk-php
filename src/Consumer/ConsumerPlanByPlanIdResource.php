<?php
/**
 * ConsumerPlanByPlanIdResource generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerPlanByPlanIdResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $plan_id;

    public function __construct(string $plan_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->plan_id = $plan_id;
        $this->url = $this->baseUrl . '/consumer/plan/' . $plan_id . '';
    }

    /**
     * @return Plan
     */
    public function consumerActionPlanGet(): Plan
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Plan::class);
    }

}
