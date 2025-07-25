<?php
/**
 * BackendBackupExport automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;

use PSX\Schema\Attribute\Description;

#[Description('Export of the complete system configuration')]
class BackendBackupExport implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $export = null;
    public function setExport(?string $export): void
    {
        $this->export = $export;
    }
    public function getExport(): ?string
    {
        return $this->export;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('export', $this->export);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
