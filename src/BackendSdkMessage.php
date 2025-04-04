<?php
/**
 * BackendSdkMessage automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;


class BackendSdkMessage implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?bool $success = null;
    protected ?string $message = null;
    protected ?string $link = null;
    public function setSuccess(?bool $success): void
    {
        $this->success = $success;
    }
    public function getSuccess(): ?bool
    {
        return $this->success;
    }
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }
    public function getMessage(): ?string
    {
        return $this->message;
    }
    public function setLink(?string $link): void
    {
        $this->link = $link;
    }
    public function getLink(): ?string
    {
        return $this->link;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('success', $this->success);
        $record->put('message', $this->message);
        $record->put('link', $this->link);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
