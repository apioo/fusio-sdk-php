<?php
/**
 * Form_Element_Select generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Form_Element_Select extends Form_Element implements \JsonSerializable
{
    /**
     * @var array<Form_Element_Select_Option>|null
     */
    protected ?array $options = null;
    /**
     * @param array<Form_Element_Select_Option>|null $options
     */
    public function setOptions(?array $options) : void
    {
        $this->options = $options;
    }
    public function getOptions() : ?array
    {
        return $this->options;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('options' => $this->options), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
