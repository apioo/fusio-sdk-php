<?php
/**
 * Connection generated on 2022-04-30
 * @see https://sdkgen.app
 */

use PSX\Schema\Attribute\Pattern;

class Connection implements \JsonSerializable
{
    protected ?int $id = null;
    #[Pattern('^[a-zA-Z0-9\\-\\_]{3,255}$')]
    protected ?string $name = null;
    protected ?string $class = null;
    protected ?Connection_Config $config = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
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
    public function setConfig(?Connection_Config $config) : void
    {
        $this->config = $config;
    }
    public function getConfig() : ?Connection_Config
    {
        return $this->config;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'name' => $this->name, 'class' => $this->class, 'config' => $this->config), static function ($value) : bool {
            return $value !== null;
        });
    }
}
