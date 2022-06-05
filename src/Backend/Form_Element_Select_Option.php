<?php
/**
 * Form_Element_Select_Option generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Form_Element_Select_Option implements \JsonSerializable
{
    protected ?string $key = null;
    protected ?string $value = null;
    public function setKey(?string $key) : void
    {
        $this->key = $key;
    }
    public function getKey() : ?string
    {
        return $this->key;
    }
    public function setValue(?string $value) : void
    {
        $this->value = $value;
    }
    public function getValue() : ?string
    {
        return $this->value;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('key' => $this->key, 'value' => $this->value), static function ($value) : bool {
            return $value !== null;
        });
    }
}
