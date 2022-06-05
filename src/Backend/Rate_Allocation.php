<?php
/**
 * Rate_Allocation generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Rate_Allocation implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $routeId = null;
    protected ?int $userId = null;
    protected ?int $planId = null;
    protected ?int $appId = null;
    protected ?bool $authenticated = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setRouteId(?int $routeId) : void
    {
        $this->routeId = $routeId;
    }
    public function getRouteId() : ?int
    {
        return $this->routeId;
    }
    public function setUserId(?int $userId) : void
    {
        $this->userId = $userId;
    }
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    public function setPlanId(?int $planId) : void
    {
        $this->planId = $planId;
    }
    public function getPlanId() : ?int
    {
        return $this->planId;
    }
    public function setAppId(?int $appId) : void
    {
        $this->appId = $appId;
    }
    public function getAppId() : ?int
    {
        return $this->appId;
    }
    public function setAuthenticated(?bool $authenticated) : void
    {
        $this->authenticated = $authenticated;
    }
    public function getAuthenticated() : ?bool
    {
        return $this->authenticated;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'routeId' => $this->routeId, 'userId' => $this->userId, 'planId' => $this->planId, 'appId' => $this->appId, 'authenticated' => $this->authenticated), static function ($value) : bool {
            return $value !== null;
        });
    }
}
