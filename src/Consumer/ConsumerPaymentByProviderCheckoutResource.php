<?php
/**
 * ConsumerPaymentByProviderCheckoutResource generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerPaymentByProviderCheckoutResource extends ResourceAbstract
{
    private string $url;

    private string $provider;

    public function __construct(string $provider, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->provider = $provider;
        $this->url = $this->baseUrl . '/consumer/payment/' . $provider . '/checkout';
    }

    /**
     * @param Payment_Checkout_Request $data
     * @return Payment_Checkout_Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionPaymentCheckout(Payment_Checkout_Request $data): Payment_Checkout_Response
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Payment_Checkout_Response::class);
    }

}
