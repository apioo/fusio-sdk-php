<?php 
/**
 * ConsumerTransactionPrepareByProviderResource generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Api\Generator\Client\Php\ResourceAbstract;
use PSX\Schema\SchemaManager;

class ConsumerTransactionPrepareByProviderResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $provider;

    public function __construct(string $provider, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $token, $httpClient, $schemaManager);

        $this->provider = $provider;
        $this->url = $this->baseUrl . '/consumer/transaction/prepare/' . $provider . '';
    }

    /**
     * @param Transaction_Prepare_Request $data
     * @return Transaction_Prepare_Response
     */
    public function consumerActionTransactionPrepare(?Transaction_Prepare_Request $data): Transaction_Prepare_Response
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Transaction_Prepare_Response::class);
    }

}
