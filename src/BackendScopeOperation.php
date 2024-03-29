<?php
/**
 * BackendScopeOperation automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;


class BackendScopeOperation implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $operationId = null;
    protected ?bool $allow = null;
    public function setOperationId(?int $operationId) : void
    {
        $this->operationId = $operationId;
    }
    public function getOperationId() : ?int
    {
        return $this->operationId;
    }
    public function setAllow(?bool $allow) : void
    {
        $this->allow = $allow;
    }
    public function getAllow() : ?bool
    {
        return $this->allow;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('operationId', $this->operationId);
        $record->put('allow', $this->allow);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}