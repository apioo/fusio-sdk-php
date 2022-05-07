<?php
/**
 * Marketplace_Install generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Marketplace_Install implements \JsonSerializable
{
    protected ?string $name = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('name' => $this->name), static function ($value) : bool {
            return $value !== null;
        });
    }
}
