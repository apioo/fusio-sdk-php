<?php
/**
 * Form_Element_Input generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Form_Element_Input extends Form_Element implements \JsonSerializable
{
    protected ?string $type = null;
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }
    public function getType() : ?string
    {
        return $this->type;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('type' => $this->type), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
