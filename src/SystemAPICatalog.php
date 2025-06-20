<?php
/**
 * SystemAPICatalog automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;


class SystemAPICatalog implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<SystemAPICatalogLinkSet>|null
     */
    protected ?array $linkset = null;
    /**
     * @param array<SystemAPICatalogLinkSet>|null $linkset
     */
    public function setLinkset(?array $linkset): void
    {
        $this->linkset = $linkset;
    }
    /**
     * @return array<SystemAPICatalogLinkSet>|null
     */
    public function getLinkset(): ?array
    {
        return $this->linkset;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('linkset', $this->linkset);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
