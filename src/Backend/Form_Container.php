<?php 
/**
 * Form_Container generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class Form_Container implements \JsonSerializable
{
    /**
     * @var array<Form_Element_Input|Form_Element_Select|Form_Element_Tag|Form_Element_TextArea>|null
     */
    protected $element;
    /**
     * @param array<Form_Element_Input|Form_Element_Select|Form_Element_Tag|Form_Element_TextArea>|null $element
     */
    public function setElement(?array $element) : void
    {
        $this->element = $element;
    }
    /**
     * @return array<Form_Element_Input|Form_Element_Select|Form_Element_Tag|Form_Element_TextArea>|null
     */
    public function getElement() : ?array
    {
        return $this->element;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('element' => $this->element), static function ($value) : bool {
            return $value !== null;
        });
    }
}