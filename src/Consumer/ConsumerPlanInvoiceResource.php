<?php 
/**
 * ConsumerPlanInvoiceResource generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Api\Generator\Client\Php\ResourceAbstract;
use PSX\Schema\SchemaManager;

class ConsumerPlanInvoiceResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    public function __construct(string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $token, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/consumer/plan/invoice';
    }

    /**
     * @param Collection_Query $query
     * @return Plan_Invoice_Collection
     */
    public function consumerActionPlanInvoiceGetAll(?Collection_Query $query): Plan_Invoice_Collection
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Plan_Invoice_Collection::class);
    }

}
