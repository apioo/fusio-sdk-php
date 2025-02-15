<?php
/**
 * BackendGeneratorProvider automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;


class BackendGeneratorProvider implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $path = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
    protected ?bool $public = null;
    protected ?BackendGeneratorProviderConfig $config = null;
    public function setPath(?string $path): void
    {
        $this->path = $path;
    }
    public function getPath(): ?string
    {
        return $this->path;
    }
    /**
     * @param array<string>|null $scopes
     */
    public function setScopes(?array $scopes): void
    {
        $this->scopes = $scopes;
    }
    /**
     * @return array<string>|null
     */
    public function getScopes(): ?array
    {
        return $this->scopes;
    }
    public function setPublic(?bool $public): void
    {
        $this->public = $public;
    }
    public function getPublic(): ?bool
    {
        return $this->public;
    }
    public function setConfig(?BackendGeneratorProviderConfig $config): void
    {
        $this->config = $config;
    }
    public function getConfig(): ?BackendGeneratorProviderConfig
    {
        return $this->config;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('path', $this->path);
        $record->put('scopes', $this->scopes);
        $record->put('public', $this->public);
        $record->put('config', $this->config);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
