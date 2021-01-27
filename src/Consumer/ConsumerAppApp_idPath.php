<?php 
/**
 * ConsumerAppApp_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Consumer;


class ConsumerAppApp_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $app_id;
    /**
     * @param string|null $app_id
     */
    public function setApp_id(?string $app_id) : void
    {
        $this->app_id = $app_id;
    }
    /**
     * @return string|null
     */
    public function getApp_id() : ?string
    {
        return $this->app_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('app_id' => $this->app_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}