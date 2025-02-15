<?php
/**
 * CommonFormElementSelect automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;


class CommonFormElementSelect extends CommonFormElement implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<CommonFormElementSelectOption>|null
     */
    protected ?array $options = null;
    /**
     * @param array<CommonFormElementSelectOption>|null $options
     */
    public function setOptions(?array $options): void
    {
        $this->options = $options;
    }
    /**
     * @return array<CommonFormElementSelectOption>|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('options', $this->options);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
