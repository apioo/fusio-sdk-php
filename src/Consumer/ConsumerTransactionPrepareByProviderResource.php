<?php
/**
 * ConsumerTransactionPrepareByProviderResource generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

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

    public function __construct(string $provider, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->provider = $provider;
        $this->url = $this->baseUrl . '/consumer/transaction/prepare/' . $provider . '';
    }

    /**
     * @param Transaction_Prepare_Request $data
     * @return Transaction_Prepare_Response
     */
    public function consumerActionTransactionPrepare(?Transaction_Prepare_Request $data = null): Transaction_Prepare_Response
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Transaction_Prepare_Response::class);
    }

}
