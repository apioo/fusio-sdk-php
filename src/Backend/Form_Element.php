<?php
/**
 * Form_Element generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('element'))]
class Form_Element implements \JsonSerializable
{
    protected ?string $element = null;
    protected ?string $name = null;
    protected ?string $title = null;
    protected ?string $help = null;
    public function setElement(?string $element) : void
    {
        $this->element = $element;
    }
    public function getElement() : ?string
    {
        return $this->element;
    }
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    public function getTitle() : ?string
    {
        return $this->title;
    }
    public function setHelp(?string $help) : void
    {
        $this->help = $help;
    }
    public function getHelp() : ?string
    {
        return $this->help;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('element' => $this->element, 'name' => $this->name, 'title' => $this->title, 'help' => $this->help), static function ($value) : bool {
            return $value !== null;
        });
    }
}
