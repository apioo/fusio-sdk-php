<?php
/**
 * App_Token_Collection_Query generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class App_Token_Collection_Query extends Collection_Query implements \JsonSerializable
{
    protected ?\DateTime $from = null;
    protected ?\DateTime $to = null;
    protected ?int $appId = null;
    protected ?int $userId = null;
    protected ?int $status = null;
    protected ?string $scope = null;
    protected ?string $ip = null;
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
    public function setStatus(?int $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setScope(?string $scope) : void
    {
        $this->scope = $scope;
    }
    public function getScope() : ?string
    {
        return $this->scope;
    }
    public function setIp(?string $ip) : void
    {
        $this->ip = $ip;
    }
    public function getIp() : ?string
    {
        return $this->ip;
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
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('from' => $this->from, 'to' => $this->to, 'appId' => $this->appId, 'userId' => $this->userId, 'status' => $this->status, 'scope' => $this->scope, 'ip' => $this->ip, 'search' => $this->search), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
