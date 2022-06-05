<?php
/**
 * BackendTransactionByTransactionIdResource generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendTransactionByTransactionIdResource extends ResourceAbstract
{
    private string $url;

    private string $transaction_id;

    public function __construct(string $transaction_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->transaction_id = $transaction_id;
        $this->url = $this->baseUrl . '/backend/transaction/' . $transaction_id . '';
    }

    /**
     * @return Transaction
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionTransactionGet(): Transaction
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Transaction::class);
    }

}
