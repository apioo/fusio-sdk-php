<?php
/**
 * ConsumerTransactionByTransactionIdResource generated on 2022-04-30
 * @see https://sdkgen.app
 */


use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerTransactionByTransactionIdResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $transaction_id;

    public function __construct(string $transaction_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->transaction_id = $transaction_id;
        $this->url = $this->baseUrl . '/consumer/transaction/' . $transaction_id . '';
    }

    /**
     * @return Transaction
     */
    public function consumerActionTransactionGet(): Transaction
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Transaction::class);
    }

}
