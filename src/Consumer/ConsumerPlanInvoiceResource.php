<?php
/**
 * ConsumerPlanInvoiceResource generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerPlanInvoiceResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    public function __construct(string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/consumer/plan/invoice';
    }

    /**
     * @param Collection_Query $query
     * @return Plan_Invoice_Collection
     */
    public function consumerActionPlanInvoiceGetAll(?Collection_Query $query = null): Plan_Invoice_Collection
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Plan_Invoice_Collection::class);
    }

}
