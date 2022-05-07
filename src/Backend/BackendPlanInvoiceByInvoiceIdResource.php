<?php
/**
 * BackendPlanInvoiceByInvoiceIdResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendPlanInvoiceByInvoiceIdResource extends ResourceAbstract
{
    private string $url;

    private string $invoice_id;

    public function __construct(string $invoice_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->invoice_id = $invoice_id;
        $this->url = $this->baseUrl . '/backend/plan/invoice/' . $invoice_id . '';
    }

    /**
     * @return Plan_Invoice
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionPlanInvoiceGet(): Plan_Invoice
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Plan_Invoice::class);
    }

    /**
     * @param Plan_Invoice_Update $data
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionPlanInvoiceUpdate(Plan_Invoice_Update $data): Message
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
    public function backendActionPlanInvoiceDelete(): Message
    {
        $options = [
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
