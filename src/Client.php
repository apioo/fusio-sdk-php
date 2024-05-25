<?php
/**
 * Client automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\ClientAbstract;
use Sdkgen\Client\Credentials;
use Sdkgen\Client\CredentialsInterface;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TokenStoreInterface;

class Client extends ClientAbstract
{
    public function authorization(): AuthorizationTag
    {
        return new AuthorizationTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function system(): SystemTag
    {
        return new SystemTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function consumer(): ConsumerTag
    {
        return new ConsumerTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function backend(): BackendTag
    {
        return new BackendTag(
            $this->httpClient,
            $this->parser
        );
    }



    public static function build(): self
    {
        return new self('https://api.sdkgen.app/', new Credentials\Anonymous());
    }
}
