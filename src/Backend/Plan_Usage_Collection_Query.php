<?php
/**
 * Plan_Usage_Collection_Query generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Plan_Usage_Collection_Query extends Collection_Query implements \JsonSerializable
{
    protected ?\DateTime $from = null;
    protected ?\DateTime $to = null;
    protected ?int $routeId = null;
    protected ?int $appId = null;
    protected ?int $userId = null;
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
    public function setRouteId(?int $routeId) : void
    {
        $this->routeId = $routeId;
    }
    public function getRouteId() : ?int
    {
        return $this->routeId;
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
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('from' => $this->from, 'to' => $this->to, 'routeId' => $this->routeId, 'appId' => $this->appId, 'userId' => $this->userId, 'search' => $this->search), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
