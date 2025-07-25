<?php
/**
 * BackendActionIndex automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;

use PSX\Schema\Attribute\Description;

#[Description('Contains all possible classes which can be used at an action as class')]
class BackendActionIndex implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<BackendActionIndexEntry>|null
     */
    protected ?array $actions = null;
    /**
     * @param array<BackendActionIndexEntry>|null $actions
     */
    public function setActions(?array $actions): void
    {
        $this->actions = $actions;
    }
    /**
     * @return array<BackendActionIndexEntry>|null
     */
    public function getActions(): ?array
    {
        return $this->actions;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('actions', $this->actions);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
