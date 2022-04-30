<?php
/**
 * Form_Element_TextArea generated on 2022-04-30
 * @see https://sdkgen.app
 */

class Form_Element_TextArea extends Form_Element implements \JsonSerializable
{
    protected ?string $mode = null;
    public function setMode(?string $mode) : void
    {
        $this->mode = $mode;
    }
    public function getMode() : ?string
    {
        return $this->mode;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('mode' => $this->mode), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
