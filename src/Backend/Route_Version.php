<?php
/**
 * Route_Version generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Route_Version implements \JsonSerializable
{
    protected ?int $version = null;
    protected ?int $status = null;
    protected ?Route_Methods $methods = null;
    public function setVersion(?int $version) : void
    {
        $this->version = $version;
    }
    public function getVersion() : ?int
    {
        return $this->version;
    }
    public function setStatus(?int $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setMethods(?Route_Methods $methods) : void
    {
        $this->methods = $methods;
    }
    public function getMethods() : ?Route_Methods
    {
        return $this->methods;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('version' => $this->version, 'status' => $this->status, 'methods' => $this->methods), static function ($value) : bool {
            return $value !== null;
        });
    }
}
