<?php
/**
 * Config generated on 2022-04-30
 * @see https://sdkgen.app
 */

class Config implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $type = null;
    protected ?string $name = null;
    protected ?string $description = null;
    protected mixed $value = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setType(?int $type) : void
    {
        $this->type = $type;
    }
    public function getType() : ?int
    {
        return $this->type;
    }
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setValue(mixed $value) : void
    {
        $this->value = $value;
    }
    public function getValue() : mixed
    {
        return $this->value;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'type' => $this->type, 'name' => $this->name, 'description' => $this->description, 'value' => $this->value), static function ($value) : bool {
            return $value !== null;
        });
    }
}
