<?php
/**
 * Action generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use PSX\Schema\Attribute\Pattern;

class Action implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $status = null;
    #[Pattern('^[a-zA-Z0-9\\-\\_]{3,255}$')]
    protected ?string $name = null;
    protected ?string $class = null;
    protected ?bool $async = null;
    protected ?string $engine = null;
    protected ?Action_Config $config = null;
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
    public function setClass(?string $class) : void
    {
        $this->class = $class;
    }
    public function getClass() : ?string
    {
        return $this->class;
    }
    public function setAsync(?bool $async) : void
    {
        $this->async = $async;
    }
    public function getAsync() : ?bool
    {
        return $this->async;
    }
    public function setEngine(?string $engine) : void
    {
        $this->engine = $engine;
    }
    public function getEngine() : ?string
    {
        return $this->engine;
    }
    public function setConfig(?Action_Config $config) : void
    {
        $this->config = $config;
    }
    public function getConfig() : ?Action_Config
    {
        return $this->config;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'status' => $this->status, 'name' => $this->name, 'class' => $this->class, 'async' => $this->async, 'engine' => $this->engine, 'config' => $this->config), static function ($value) : bool {
            return $value !== null;
        });
    }
}
