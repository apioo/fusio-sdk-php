<?php
/**
 * BackendConfigConfig_idPath generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendConfigConfig_idPath implements \JsonSerializable
{
    protected ?string $config_id = null;
    public function setConfig_id(?string $config_id) : void
    {
        $this->config_id = $config_id;
    }
    public function getConfig_id() : ?string
    {
        return $this->config_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('config_id' => $this->config_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
