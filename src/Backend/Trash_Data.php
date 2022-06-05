<?php
/**
 * Trash_Data generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Trash_Data implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $status = null;
    protected ?string $name = null;
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
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'status' => $this->status, 'name' => $this->name), static function ($value) : bool {
            return $value !== null;
        });
    }
}
