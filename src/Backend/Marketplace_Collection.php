<?php
/**
 * Marketplace_Collection generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Marketplace_Collection implements \JsonSerializable
{
    protected ?Marketplace_Collection_Apps $apps = null;
    public function setApps(?Marketplace_Collection_Apps $apps) : void
    {
        $this->apps = $apps;
    }
    public function getApps() : ?Marketplace_Collection_Apps
    {
        return $this->apps;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('apps' => $this->apps), static function ($value) : bool {
            return $value !== null;
        });
    }
}
