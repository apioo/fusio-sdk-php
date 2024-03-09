<?php
/**
 * ConsumerUserActivate automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;

use PSX\Schema\Attribute\Required;

#[Required(array('token'))]
class ConsumerUserActivate implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $token = null;
    public function setToken(?string $token) : void
    {
        $this->token = $token;
    }
    public function getToken() : ?string
    {
        return $this->token;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('token', $this->token);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}
