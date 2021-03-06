<?php 
/**
 * Marketplace_Remote_App generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class Marketplace_Remote_App extends Marketplace_App implements \JsonSerializable
{
    /**
     * @var Marketplace_App|null
     */
    protected $local;
    /**
     * @param Marketplace_App|null $local
     */
    public function setLocal(?Marketplace_App $local) : void
    {
        $this->local = $local;
    }
    /**
     * @return Marketplace_App|null
     */
    public function getLocal() : ?Marketplace_App
    {
        return $this->local;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('local' => $this->local), static function ($value) : bool {
            return $value !== null;
        }));
    }
}