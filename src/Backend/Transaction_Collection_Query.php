<?php
/**
 * Transaction_Collection_Query generated on 2022-04-30
 * @see https://sdkgen.app
 */

class Transaction_Collection_Query extends Collection_Query implements \JsonSerializable
{
    protected ?\DateTime $from = null;
    protected ?\DateTime $to = null;
    protected ?int $planId = null;
    protected ?int $userId = null;
    protected ?int $appId = null;
    protected ?int $status = null;
    protected ?string $provider = null;
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
    public function setPlanId(?int $planId) : void
    {
        $this->planId = $planId;
    }
    public function getPlanId() : ?int
    {
        return $this->planId;
    }
    public function setUserId(?int $userId) : void
    {
        $this->userId = $userId;
    }
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    public function setAppId(?int $appId) : void
    {
        $this->appId = $appId;
    }
    public function getAppId() : ?int
    {
        return $this->appId;
    }
    public function setStatus(?int $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setProvider(?string $provider) : void
    {
        $this->provider = $provider;
    }
    public function getProvider() : ?string
    {
        return $this->provider;
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
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('from' => $this->from, 'to' => $this->to, 'planId' => $this->planId, 'userId' => $this->userId, 'appId' => $this->appId, 'status' => $this->status, 'provider' => $this->provider, 'search' => $this->search), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
