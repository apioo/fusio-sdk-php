<?php
/**
 * Audit_Collection_Query generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Audit_Collection_Query extends Collection_Query implements \JsonSerializable
{
    protected ?\DateTime $from = null;
    protected ?\DateTime $to = null;
    protected ?int $appId = null;
    protected ?int $userId = null;
    protected ?string $event = null;
    protected ?string $ip = null;
    protected ?string $message = null;
    protected ?string $search = null;
    public function setFrom(?\DateTime $from) : void
    {
        $this->from = $from;
    }
    public function getFrom() : ?\DateTime
    {
        return $this->from;
    }
    public function setTo(?\DateTime $to) : void
    {
        $this->to = $to;
    }
    public function getTo() : ?\DateTime
    {
        return $this->to;
    }
    public function setAppId(?int $appId) : void
    {
        $this->appId = $appId;
    }
    public function getAppId() : ?int
    {
        return $this->appId;
    }
    public function setUserId(?int $userId) : void
    {
        $this->userId = $userId;
    }
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    public function setEvent(?string $event) : void
    {
        $this->event = $event;
    }
    public function getEvent() : ?string
    {
        return $this->event;
    }
    public function setIp(?string $ip) : void
    {
        $this->ip = $ip;
    }
    public function getIp() : ?string
    {
        return $this->ip;
    }
    public function setMessage(?string $message) : void
    {
        $this->message = $message;
    }
    public function getMessage() : ?string
    {
        return $this->message;
    }
    public function setSearch(?string $search) : void
    {
        $this->search = $search;
    }
    public function getSearch() : ?string
    {
        return $this->search;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('from' => $this->from, 'to' => $this->to, 'appId' => $this->appId, 'userId' => $this->userId, 'event' => $this->event, 'ip' => $this->ip, 'message' => $this->message, 'search' => $this->search), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
