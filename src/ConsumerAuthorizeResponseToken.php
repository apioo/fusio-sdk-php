<?php
/**
 * ConsumerAuthorizeResponseToken automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;

use PSX\Schema\Attribute\Key;

class ConsumerAuthorizeResponseToken implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Key('access_token')]
    protected ?string $accessToken = null;
    #[Key('token_type')]
    protected ?string $tokenType = null;
    #[Key('expires_in')]
    protected ?string $expiresIn = null;
    protected ?string $scope = null;
    public function setAccessToken(?string $accessToken): void
    {
        $this->accessToken = $accessToken;
    }
    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }
    public function setTokenType(?string $tokenType): void
    {
        $this->tokenType = $tokenType;
    }
    public function getTokenType(): ?string
    {
        return $this->tokenType;
    }
    public function setExpiresIn(?string $expiresIn): void
    {
        $this->expiresIn = $expiresIn;
    }
    public function getExpiresIn(): ?string
    {
        return $this->expiresIn;
    }
    public function setScope(?string $scope): void
    {
        $this->scope = $scope;
    }
    public function getScope(): ?string
    {
        return $this->scope;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('access_token', $this->accessToken);
        $record->put('token_type', $this->tokenType);
        $record->put('expires_in', $this->expiresIn);
        $record->put('scope', $this->scope);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
