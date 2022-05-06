<?php
/**
 * BackendRoutesRoute_idPath generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendRoutesRoute_idPath implements \JsonSerializable
{
    protected ?string $route_id = null;
    public function setRoute_id(?string $route_id) : void
    {
        $this->route_id = $route_id;
    }
    public function getRoute_id() : ?string
    {
        return $this->route_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('route_id' => $this->route_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
