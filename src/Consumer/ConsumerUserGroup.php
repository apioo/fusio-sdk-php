<?php
/**
 * ConsumerUserGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */


use Sdkgen\Client\ResourceAbstract;

class ConsumerUserGroup extends ResourceAbstract
{
    /**
     * Endpoint: /consumer/password_reset
     *
     * @return ConsumerPasswordResetResource
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
     *
     * @return ConsumerRegisterResource
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
     *
     * @return ConsumerProviderByProviderResource
     */
    public function getConsumerProviderByProvider(?string $provider): ConsumerProviderByProviderResource
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
     *
     * @return ConsumerLoginResource
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
     *
     * @return ConsumerAuthorizeResource
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
     *
     * @return ConsumerActivateResource
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
     *
     * @return ConsumerAccountChangePasswordResource
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
     *
     * @return ConsumerAccountResource
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
