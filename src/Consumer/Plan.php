<?php
/**
 * Plan generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;


class Plan implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?string $name = null;
    protected ?string $description = null;
    protected ?float $price = null;
    protected ?int $points = null;
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
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setPrice(?float $price) : void
    {
        $this->price = $price;
    }
    public function getPrice() : ?float
    {
        return $this->price;
    }
    public function setPoints(?int $points) : void
    {
        $this->points = $points;
    }
    public function getPoints() : ?int
    {
        return $this->points;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'name' => $this->name, 'description' => $this->description, 'price' => $this->price, 'points' => $this->points), static function ($value) : bool {
            return $value !== null;
        });
    }
}
