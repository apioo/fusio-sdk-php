<?php 
/**
 * ConsumerTransactionExecuteByTransactionIdResource generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Api\Generator\Client\Php\ResourceAbstract;
use PSX\Schema\SchemaManager;

class ConsumerTransactionExecuteByTransactionIdResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $transaction_id;

    public function __construct(string $transaction_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $token, $httpClient, $schemaManager);

        $this->transaction_id = $transaction_id;
        $this->url = $this->baseUrl . '/consumer/transaction/execute/' . $transaction_id . '';
    }

    /**
     * @return void
     */
    public function consumerActionTransactionExecute()
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, null);
    }

}
