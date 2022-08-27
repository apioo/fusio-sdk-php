<?php
/**
 * ConsumerPaymentGroup automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use Sdkgen\Client\ResourceAbstract;

class ConsumerPaymentGroup extends ResourceAbstract
{
    /**
     * Endpoint: /consumer/payment/:provider/checkout
     */
    public function getConsumerPaymentByProviderCheckout(string $provider): ConsumerPaymentByProviderCheckoutResource
    {
        return new ConsumerPaymentByProviderCheckoutResource(
            $provider,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/payment/:provider/portal
     */
    public function getConsumerPaymentByProviderPortal(string $provider): ConsumerPaymentByProviderPortalResource
    {
        return new ConsumerPaymentByProviderPortalResource(
            $provider,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}