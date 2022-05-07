<?php
/**
 * Sdk_Generate generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Sdk_Generate implements \JsonSerializable
{
    protected ?string $format = null;
    protected ?string $config = null;
    public function setFormat(?string $format) : void
    {
        $this->format = $format;
    }
    public function getFormat() : ?string
    {
        return $this->format;
    }
    public function setConfig(?string $config) : void
    {
        $this->config = $config;
    }
    public function getConfig() : ?string
    {
        return $this->config;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('format' => $this->format, 'config' => $this->config), static function ($value) : bool {
            return $value !== null;
        });
    }
}
