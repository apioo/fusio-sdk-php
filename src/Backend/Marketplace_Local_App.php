<?php 
/**
 * Marketplace_Local_App generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class Marketplace_Local_App extends Marketplace_App implements \JsonSerializable
{
    /**
     * @var Marketplace_App|null
     */
    protected $remote;
    /**
     * @param Marketplace_App|null $remote
     */
    public function setRemote(?Marketplace_App $remote) : void
    {
        $this->remote = $remote;
    }
    /**
     * @return Marketplace_App|null
     */
    public function getRemote() : ?Marketplace_App
    {
        return $this->remote;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('remote' => $this->remote), static function ($value) : bool {
            return $value !== null;
        }));
    }
}