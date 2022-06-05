<?php
/**
 * Marketplace_Local_App generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Marketplace_Local_App extends Marketplace_App implements \JsonSerializable
{
    protected ?Marketplace_App $remote = null;
    public function setRemote(?Marketplace_App $remote) : void
    {
        $this->remote = $remote;
    }
    public function getRemote() : ?Marketplace_App
    {
        return $this->remote;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('remote' => $this->remote), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
