<?php
/**
 * BackendGeneratorProviderChangelog automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;


class BackendGeneratorProviderChangelog implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<BackendSchema>|null
     */
    protected ?array $schemas = null;
    /**
     * @var array<BackendAction>|null
     */
    protected ?array $actions = null;
    /**
     * @var array<BackendOperation>|null
     */
    protected ?array $operations = null;
    /**
     * @param array<BackendSchema>|null $schemas
     */
    public function setSchemas(?array $schemas): void
    {
        $this->schemas = $schemas;
    }
    /**
     * @return array<BackendSchema>|null
     */
    public function getSchemas(): ?array
    {
        return $this->schemas;
    }
    /**
     * @param array<BackendAction>|null $actions
     */
    public function setActions(?array $actions): void
    {
        $this->actions = $actions;
    }
    /**
     * @return array<BackendAction>|null
     */
    public function getActions(): ?array
    {
        return $this->actions;
    }
    /**
     * @param array<BackendOperation>|null $operations
     */
    public function setOperations(?array $operations): void
    {
        $this->operations = $operations;
    }
    /**
     * @return array<BackendOperation>|null
     */
    public function getOperations(): ?array
    {
        return $this->operations;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('schemas', $this->schemas);
        $record->put('actions', $this->actions);
        $record->put('operations', $this->operations);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
