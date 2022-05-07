<?php
/**
 * ConsumerTransactionExecuteByTransactionIdResource generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerTransactionExecuteByTransactionIdResource extends ResourceAbstract
{
    private string $url;

    private string $transaction_id;

    public function __construct(string $transaction_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->transaction_id = $transaction_id;
        $this->url = $this->baseUrl . '/consumer/transaction/execute/' . $transaction_id . '';
    }

    /**
     * @return void
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionTransactionExecute(): void
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

    }

}
