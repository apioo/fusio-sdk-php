<?php
/**
 * Form_Container generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Form_Container implements \JsonSerializable
{
    /**
     * @var array<Form_Element_Input|Form_Element_Select|Form_Element_Tag|Form_Element_TextArea>|null
     */
    protected ?array $element = null;
    /**
     * @param array<Form_Element_Input|Form_Element_Select|Form_Element_Tag|Form_Element_TextArea>|null $element
     */
    public function setElement(?array $element) : void
    {
        $this->element = $element;
    }
    public function getElement() : ?array
    {
        return $this->element;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('element' => $this->element), static function ($value) : bool {
            return $value !== null;
        });
    }
}
