<?php
/**
 * Action_Index_Entry generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Action_Index_Entry implements \JsonSerializable
{
    protected ?string $name = null;
    protected ?string $class = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setClass(?string $class) : void
    {
        $this->class = $class;
    }
    public function getClass() : ?string
    {
        return $this->class;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('name' => $this->name, 'class' => $this->class), static function ($value) : bool {
            return $value !== null;
        });
    }
}
