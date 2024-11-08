<?php
/**
 * CommonFormElement automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;


class CommonFormElement implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $type = null;
    protected ?string $element = null;
    protected ?string $name = null;
    protected ?string $title = null;
    protected ?string $help = null;
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }
    public function getType() : ?string
    {
        return $this->type;
    }
    public function setElement(?string $element) : void
    {
        $this->element = $element;
    }
    public function getElement() : ?string
    {
        return $this->element;
    }
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    public function getTitle() : ?string
    {
        return $this->title;
    }
    public function setHelp(?string $help) : void
    {
        $this->help = $help;
    }
    public function getHelp() : ?string
    {
        return $this->help;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('type', $this->type);
        $record->put('element', $this->element);
        $record->put('name', $this->name);
        $record->put('title', $this->title);
        $record->put('help', $this->help);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}
