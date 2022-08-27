<?php
/**
 * Event_Subscription_Response automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Event_Subscription_Response implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $status = null;
    protected ?int $code = null;
    protected ?int $attempts = null;
    protected ?string $error = null;
    protected ?\DateTime $executeDate = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
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
    public function setAttempts(?int $attempts) : void
    {
        $this->attempts = $attempts;
    }
    public function getAttempts() : ?int
    {
        return $this->attempts;
    }
    public function setError(?string $error) : void
    {
        $this->error = $error;
    }
    public function getError() : ?string
    {
        return $this->error;
    }
    public function setExecuteDate(?\DateTime $executeDate) : void
    {
        $this->executeDate = $executeDate;
    }
    public function getExecuteDate() : ?\DateTime
    {
        return $this->executeDate;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('id' => $this->id, 'status' => $this->status, 'code' => $this->code, 'attempts' => $this->attempts, 'error' => $this->error, 'executeDate' => $this->executeDate), static function ($value) : bool {
            return $value !== null;
        });
    }
}
