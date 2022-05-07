<?php
/**
 * ConsumerPlanInvoiceByInvoiceIdResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerPlanInvoiceByInvoiceIdResource extends ResourceAbstract
{
    private string $url;

    private string $invoice_id;

    public function __construct(string $invoice_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->invoice_id = $invoice_id;
        $this->url = $this->baseUrl . '/consumer/plan/invoice/' . $invoice_id . '';
    }

    /**
     * @return Plan_Invoice
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionPlanInvoiceGet(): Plan_Invoice
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Plan_Invoice::class);
    }

}
