<?php
/**
 * ConnectionIntrospectionEntities automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class ConnectionIntrospectionEntities implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<string>|null
     */
    protected ?array $entities = null;
    /**
     * @param array<string>|null $entities
     */
    public function setEntities(?array $entities) : void
    {
        $this->entities = $entities;
    }
    public function getEntities() : ?array
    {
        return $this->entities;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('entities', $this->entities);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}
