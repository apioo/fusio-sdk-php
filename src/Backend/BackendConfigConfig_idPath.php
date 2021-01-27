<?php 
/**
 * BackendConfigConfig_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class BackendConfigConfig_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $config_id;
    /**
     * @param string|null $config_id
     */
    public function setConfig_id(?string $config_id) : void
    {
        $this->config_id = $config_id;
    }
    /**
     * @return string|null
     */
    public function getConfig_id() : ?string
    {
        return $this->config_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('config_id' => $this->config_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}