<?php
/**
 * BackendMarketplaceCollection automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;


class BackendMarketplaceCollection implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?BackendMarketplaceCollectionApps $apps = null;
    public function setApps(?BackendMarketplaceCollectionApps $apps) : void
    {
        $this->apps = $apps;
    }
    public function getApps() : ?BackendMarketplaceCollectionApps
    {
        return $this->apps;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('apps', $this->apps);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}
