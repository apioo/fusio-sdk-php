<?php 
/**
 * Marketplace_Collection generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class Marketplace_Collection implements \JsonSerializable
{
    /**
     * @var Marketplace_Collection_Apps|null
     */
    protected $apps;
    /**
     * @param Marketplace_Collection_Apps|null $apps
     */
    public function setApps(?Marketplace_Collection_Apps $apps) : void
    {
        $this->apps = $apps;
    }
    /**
     * @return Marketplace_Collection_Apps|null
     */
    public function getApps() : ?Marketplace_Collection_Apps
    {
        return $this->apps;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('apps' => $this->apps), static function ($value) : bool {
            return $value !== null;
        });
    }
}