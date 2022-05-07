<?php
/**
 * Schema generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use PSX\Schema\Attribute\Pattern;

class Schema implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $status = null;
    #[Pattern('^[a-zA-Z0-9\\-\\_]{3,255}$')]
    protected ?string $name = null;
    protected ?Schema_Source $source = null;
    protected ?Schema_Form $form = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setStatus(?int $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setSource(?Schema_Source $source) : void
    {
        $this->source = $source;
    }
    public function getSource() : ?Schema_Source
    {
        return $this->source;
    }
    public function setForm(?Schema_Form $form) : void
    {
        $this->form = $form;
    }
    public function getForm() : ?Schema_Form
    {
        return $this->form;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'status' => $this->status, 'name' => $this->name, 'source' => $this->source, 'form' => $this->form), static function ($value) : bool {
            return $value !== null;
        });
    }
}
