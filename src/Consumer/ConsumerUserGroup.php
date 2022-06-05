<?php
/**
 * ConsumerUserGroup generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use Sdkgen\Client\ResourceAbstract;

class ConsumerUserGroup extends ResourceAbstract
{
    /**
     * Endpoint: /consumer/password_reset
     */
    public function getConsumerPasswordReset(): ConsumerPasswordResetResource
    {
        return new ConsumerPasswordResetResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/register
     */
    public function getConsumerRegister(): ConsumerRegisterResource
    {
        return new ConsumerRegisterResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/provider/:provider
     */
    public function getConsumerProviderByProvider(string $provider): ConsumerProviderByProviderResource
    {
        return new ConsumerProviderByProviderResource(
            $provider,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/login
     */
    public function getConsumerLogin(): ConsumerLoginResource
    {
        return new ConsumerLoginResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/authorize
     */
    public function getConsumerAuthorize(): ConsumerAuthorizeResource
    {
        return new ConsumerAuthorizeResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/activate
     */
    public function getConsumerActivate(): ConsumerActivateResource
    {
        return new ConsumerActivateResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/account/change_password
     */
    public function getConsumerAccountChangePassword(): ConsumerAccountChangePasswordResource
    {
        return new ConsumerAccountChangePasswordResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/account
     */
    public function getConsumerAccount(): ConsumerAccountResource
    {
        return new ConsumerAccountResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
