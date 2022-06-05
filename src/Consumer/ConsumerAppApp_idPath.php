<?php
/**
 * ConsumerAppApp_idPath generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;


class ConsumerAppApp_idPath implements \JsonSerializable
{
    protected ?string $app_id = null;
    public function setApp_id(?string $app_id) : void
    {
        $this->app_id = $app_id;
    }
    public function getApp_id() : ?string
    {
        return $this->app_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('app_id' => $this->app_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
