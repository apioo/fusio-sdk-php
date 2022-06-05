<?php
/**
 * ConsumerPaymentByProviderPortalResource generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerPaymentByProviderPortalResource extends ResourceAbstract
{
    private string $url;

    private string $provider;

    public function __construct(string $provider, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->provider = $provider;
        $this->url = $this->baseUrl . '/consumer/payment/' . $provider . '/portal';
    }

    /**
     * @return Payment_Portal_Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionPaymentPortal(): Payment_Portal_Response
    {
        $options = [
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Payment_Portal_Response::class);
    }

}
