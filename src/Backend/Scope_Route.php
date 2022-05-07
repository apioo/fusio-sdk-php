<?php
/**
 * Scope_Route generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Scope_Route implements \JsonSerializable
{
    protected ?int $routeId = null;
    protected ?bool $allow = null;
    protected ?string $methods = null;
    public function setRouteId(?int $routeId) : void
    {
        $this->routeId = $routeId;
    }
    public function getRouteId() : ?int
    {
        return $this->routeId;
    }
    public function setAllow(?bool $allow) : void
    {
        $this->allow = $allow;
    }
    public function getAllow() : ?bool
    {
        return $this->allow;
    }
    public function setMethods(?string $methods) : void
    {
        $this->methods = $methods;
    }
    public function getMethods() : ?string
    {
        return $this->methods;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('routeId' => $this->routeId, 'allow' => $this->allow, 'methods' => $this->methods), static function ($value) : bool {
            return $value !== null;
        });
    }
}
