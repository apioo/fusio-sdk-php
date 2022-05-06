<?php
/**
 * Event_Subscription_Response generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;


class Event_Subscription_Response implements \JsonSerializable
{
    protected ?int $status = null;
    protected ?int $code = null;
    protected ?string $attempts = null;
    protected ?string $executeDate = null;
    public function setStatus(?int $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setCode(?int $code) : void
    {
        $this->code = $code;
    }
    public function getCode() : ?int
    {
        return $this->code;
    }
    public function setAttempts(?string $attempts) : void
    {
        $this->attempts = $attempts;
    }
    public function getAttempts() : ?string
    {
        return $this->attempts;
    }
    public function setExecuteDate(?string $executeDate) : void
    {
        $this->executeDate = $executeDate;
    }
    public function getExecuteDate() : ?string
    {
        return $this->executeDate;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('status' => $this->status, 'code' => $this->code, 'attempts' => $this->attempts, 'executeDate' => $this->executeDate), static function ($value) : bool {
            return $value !== null;
        });
    }
}
