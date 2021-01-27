<?php 
/**
 * BackendRoutesRoute_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class BackendRoutesRoute_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $route_id;
    /**
     * @param string|null $route_id
     */
    public function setRoute_id(?string $route_id) : void
    {
        $this->route_id = $route_id;
    }
    /**
     * @return string|null
     */
    public function getRoute_id() : ?string
    {
        return $this->route_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('route_id' => $this->route_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}