<?php
/**
 * Rate_Allocation generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Rate_Allocation implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $routeId = null;
    protected ?int $appId = null;
    protected ?bool $authenticated = null;
    protected ?string $parameters = null;
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
    public function setParameters(?string $parameters) : void
    {
        $this->parameters = $parameters;
    }
    public function getParameters() : ?string
    {
        return $this->parameters;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'routeId' => $this->routeId, 'appId' => $this->appId, 'authenticated' => $this->authenticated, 'parameters' => $this->parameters), static function ($value) : bool {
            return $value !== null;
        });
    }
}
